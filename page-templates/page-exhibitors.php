<?php
/**
 * Template Name: Exhibitors
 */

get_header(); ?>
<div class="wrapper">
	<header class="page-title">
		<h1><?php the_title(); ?></h1>
	</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); 

			$name = get_field('name');
			$photo = get_field('photo');
			$description = get_field('description');

			?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

				<?php if( have_rows('resource_links') ):  ?>
					<?php while( have_rows('resource_links') ):  
							$resource_label = get_sub_field('resource_label');
							$pdf_or_link = get_sub_field('pdf_or_link');
							if( $pdf_or_link == 'PDF' ) {
								$chooseLink = get_sub_field('pdf');
							} elseif( $pdf_or_link == 'Link' ) {
								$chooseLink = get_sub_field('link');
							} else {
								$chooseLink = '';
							}
					?>

						<div class="button">
							<a href="<?php echo $chooseLink; ?>">
							<?php echo $resource_label; ?>
							</a>
						</div>

						<?php endwhile; ?>
					<?php endif; ?>


			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); ?>
</div>
<?php 
get_footer();
