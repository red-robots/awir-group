<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			?>




			<section class="sponsors">

				<?php if(have_rows('platinum_sponsors')) : ?>
					<section class="platinum">
					<h3>Platinum</h3>
					<?php while(have_rows('platinum_sponsors')) : the_row(); 
						$sponsorName = get_sub_field('sponsor_name_platinum');
					?>

					<div class="name">
						<?php echo $sponsorName; ?>
					</div>

				<?php endwhile; ?>
				</section>
			<?php endif; ?>

			<?php if(have_rows('platinum_sponsors')) : ?>
					<section class="platinum">
					<h3>Platinum</h3>
					<?php while(have_rows('platinum_sponsors')) : the_row(); 
						$sponsorName = get_sub_field('sponsor_name_platinum');
					?>

					<div class="name">
						<?php echo $sponsorName; ?>
					</div>

				<?php endwhile; ?>
				</section>
			<?php endif; ?>

			<?php if(have_rows('gold_sponsors')) : ?>
					<section class="gold">
					<h3>Platinum</h3>
					<?php while(have_rows('gold_sponsors')) : the_row(); 
						$sponsorName = get_sub_field('sponsor_name_gold');
					?>

					<div class="name">
						<?php echo $sponsorName; ?>
					</div>

				<?php endwhile; ?>
				</section>
			<?php endif; ?>

			<?php if(have_rows('silver_sponsors')) : ?>
					<section class="silver">
					<h3>Platinum</h3>
					<?php while(have_rows('silver_sponsors')) : the_row(); 
						$sponsorName = get_sub_field('sponsor_name_silver');
					?>

					<div class="name">
						<?php echo $sponsorName; ?>
					</div>

				<?php endwhile; ?>
				</section>
			<?php endif; ?>

			<?php if(have_rows('bronze_sponsors')) : ?>
					<section class="bronze">
					<h3>Platinum</h3>
					<?php while(have_rows('bronze_sponsors')) : the_row(); 
						$sponsorName = get_sub_field('sponsor_name_bronze');
					?>

					<div class="name">
						<?php echo $sponsorName; ?>
					</div>

				<?php endwhile; ?>
				</section>
			<?php endif; ?>

			</section>

		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
