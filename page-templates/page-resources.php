<?php
/**
 * Template Name: Resources
 */

get_header(); 

get_template_part('template-parts/title');

get_template_part('template-parts/subnav-resources');

?>
<div class="wrapper">


	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->
			<?php endwhile; // End of the loop. ?>


			<?php 

			$args = array(
			    'post_parent' => $post->ID,
			    'post_type' => 'page',
			    'orderby' => 'menu_order'
			);

			$child_query = new WP_Query( $args ); ?>
			
			<section class="pagelinks">

			<?php if ( $child_query->have_posts() ) : ?>

			 <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
				
					<div class="link  wow fadeInUp">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>

			<?php endwhile; ?>

			</section>

		<?php endif; ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php 
get_footer();
