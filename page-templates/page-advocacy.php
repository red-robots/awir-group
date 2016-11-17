<?php
/**
 * Template Name: Advocacy
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

			$name = get_field('name');
			$photo = get_field('photo');
			$size = 'full';
			$description = get_field('description');
			$form = get_field('form');
			

			?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<section class="small-width">
						<div class="entry-content">
							<div class="single-board">
								<div class="left">
									<div class="member-photo">
							    		<?php echo wp_get_attachment_image( $photo, $size ); ?>
							    	</div>
							    	<h2><?php echo $name; ?></h2>
							    	<h3>AWIR - Chair of Advocacy</h3>
								</div>
								<div class="right">
									<?php echo do_shortcode('[gravityform id="' . $form['id'] . '" title="false" description="false" ajax="true"]'); ?>
								</div>
							</div>
						</div><!-- .entry-content -->
					</section>
				</article><!-- #post-## -->

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php echo $description; ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

				
				<section class="advocacy">
					<div class="col-left">
						<?php if( have_rows('advocacy_links') ):  ?>
							<?php while( have_rows('advocacy_links') ): the_row();
								$name = get_sub_field('name');
								$title = get_sub_field('title');
								$email = get_sub_field('email');
								$spambot = antispambot($email);
							?>
								<div class="ad-link">
									<div class="name"><?php echo $name; ?></div>
									<div class="title"><?php echo $title; ?></div>
									<a class="email" href="<?php echo $spambot; ?>"><?php echo $spambot; ?></a>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div><!-- col left -->
				

					<div class="col-right">
					<?php if( have_rows('advocacy_links_west') ):  ?>
						<?php while( have_rows('advocacy_links_west') ): the_row();
							$name = get_sub_field('name');
							$title = get_sub_field('title');
							$email = get_sub_field('email');
							$spambot = antispambot($email);
						?>
							<div class="ad-link">
								<div class="name"><?php echo $name; ?></div>
								<div class="title"><?php echo $title; ?></div>
								<a class="email" href="<?php echo $spambot; ?>"><?php echo $spambot; ?></a>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
					</div><!-- col right -->

					</section>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php 
get_footer();
