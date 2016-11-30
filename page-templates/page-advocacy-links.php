<?php
/**
 * Template Name: Advocacy Links
 */

get_header(); 

get_template_part('template-parts/title');

get_template_part('template-parts/subnav-resources');

?>


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
<div class="wrapper">
				<article id="post-<?php the_ID(); ?>" class="content-section-page "
					data-anchor-target="#slide-page"
				data--100-top="opacity:1;margin-top: 0px;"
				data-center-center="opacity:1; margin-top: 100px;"
				>

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
</div>

<section id="slide-1" class="skr-slide">
		    <div class="bcg "
		     style="background-image:url(<?php bloginfo('template_url'); ?>/images/image1.jpg);"
		        data-center="background-position: 50% 0px;"
		        data-top-bottom="background-position: 50% -100px;"
		        data-anchor-target="#slide-1">
		        <div class="hsContainer">
		            <div class="hsContent"
		                data-center="opacity: 1"
		                data-106-top="opacity: 0"
		                data-anchor-target="#slide-1">
		               
		            </div>
		        </div>
		    </div>
		</section>


				<article id="post-<?php the_ID(); ?>"  class="content-section-page white-bg center ">
				<div class="wrapper">
					<div class="entry-content">
						<?php echo $description; ?>
					</div><!-- .entry-content -->
					</div>
				</article><!-- #post-## -->

<section id="slide-1" class="skr-slide">
		    <div class="bcg "
		     style="background-image:url(<?php bloginfo('template_url'); ?>/images/image1.jpg);"
		        data-center="background-position: 50% 0px;"
		        data-top-bottom="background-position: 50% -100px;"
		        data-anchor-target="#slide-1">
		        <div class="hsContainer">
		            <div class="hsContent"
		                data-center="opacity: 1"
		                data-106-top="opacity: 0"
		                data-anchor-target="#slide-1">
		               
		            </div>
		        </div>
		    </div>
		</section>
		
				
				<section class="advocacy">
				<div class="wrapper">
					<div class="col-left">
						<?php if( have_rows('advocacy_links') ):  ?>
							<?php while( have_rows('advocacy_links') ): the_row();
								$name = get_sub_field('name');
								$title = get_sub_field('title');
								$email = get_sub_field('email');
								$spambot = antispambot($email);
							?>
								<div class="ad-link ">
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
							<div class="ad-link ">
								<div class="name"><?php echo $name; ?></div>
								<div class="title"><?php echo $title; ?></div>
								<a class="email" href="<?php echo $spambot; ?>"><?php echo $spambot; ?></a>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
					</div><!-- col right -->
					</div>
					</section>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php 
get_footer();
