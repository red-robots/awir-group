<?php
/**
 * Template Name: Resources
 */

get_header(); ?>
<div class="wrapper">
	<header class="page-title">
		<h1><?php the_title(); ?></h1>
	</header>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

				<section class="pagelinks">
					<div class="link">
						<a href="<?php bloginfo('url'); ?>/advocacy">Advocacy</a>
					</div>
					<div class="link">
						<a href="<?php bloginfo('url'); ?>/education">Education</a>
					</div>
					<div class="link">
						<a href="<?php bloginfo('url'); ?>/clinical-trials">Clinical Trials</a>
					</div>
				</section>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php 
get_footer();
