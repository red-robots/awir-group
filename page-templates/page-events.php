<?php
/**
 * Template Name: Events
 */

get_header(); ?>
<div class="wrapper">
	<header class="page-title">
		<h1><?php the_title(); ?></h1>
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			$i=0;
			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=>'event',
				'posts_per_page' => 5,
				'paged' => $paged,
			));
			if ($wp_query->have_posts()) : ?>
		    <?php while ($wp_query->have_posts()) : ?>
		        
		    <?php $wp_query->the_post();  $i++;

			$link = get_field('link');
	    	$photo = get_field('featured_image');
	    	$size = 'full';

			if( $i == 2 ) {
    		$postClass = 'last';
	    		$i=0;
	    	} else {
	    		$postClass = 'first';
	    	}

			?>

			<div class="event <?php echo $postClass; ?>">
				<?php echo wp_get_attachment_image( $photo, $size ); ?>
				<div class="content">
					<h2><?php the_title(); ?></h2>
					<div class="dates">
						
					</div>
				</div>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>

			<?php endwhile; // End of the loop.

			pagi_posts_nav();

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); ?>
</div>
<?php 
get_footer();
