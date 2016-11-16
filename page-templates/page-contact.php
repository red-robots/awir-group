<?php
/**
 * Template Name: Contact
 */

get_header(); ?>
<div class="wrapper">
	<header class="page-title">
		<h1><?php the_title(); ?></h1>
	</header>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<section class="contact">
			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // End of the loop.
			?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); ?>
</div>
<?php 
get_footer();
