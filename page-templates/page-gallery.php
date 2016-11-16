<?php
/**
 * Template Name: Gallery
 */

get_header(); ?>
<div class="wrapper">

	<header class="page-title">
		<h1><?php the_title(); ?></h1>
	</header>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				echo do_shortcode('[instagram-feed]');

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
