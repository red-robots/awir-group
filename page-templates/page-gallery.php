<?php
/**
 * Template Name: Gallery
 */

get_header();

get_template_part('template-parts/title');

 ?>
<div class="wrapper">


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
