<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

	

		

		
		<section id="slide-2" class="skr-slide">
			<div class="bg-black"></div>
		    <div class="bcg "
		     style="background-image:url(<?php bloginfo('template_url'); ?>/images/image2.png);"
		        data-center="background-position: 50% 0px;"
		        data-top-bottom="background-position: 50% -500px;"
		        data-anchor-target="#slide-2">
		        <div class="hsContainer">
		            <div class="hsContent"
		                data-center="opacity: .6;"
		                data-106-top="opacity: 0;"
		                data-anchor-target="#slide-2">
		               jakljfjklknl;fjkldsfkl;fs
		            </div>
		            <section class="hero">
		            	<h2>Association of Women in Rheumatology</h2>
					    <div class="button-home">
					    	<a href="#">Learn More About Us</a>
					    </div>
					</section>
		        </div>
		    </div>


		</section>

		<section class="skr-slide section purple">
			<div class="small-wrap">
			    <h2>Our Mission</h2>
			    <p>To promote the science and practice of rheumatology, foster the advancement and education of women in rheumatology, and advocate access to the highest quality health care and management of patients with rheumatic diseases.</p>
			    
			    
		    </div>
		</section>

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

		<section id="slide" class="skr-slide section">
			<div class="small-wrap">
			    <h2>Board Members</h2>
				    <div class="board-member">
				    	<img src="<?php bloginfo('template_url'); ?>/images/person1.jpg">
				    	<div class="info">
				    		<h2>Theresa Lawrence Ford, MD</h2>
				    	</div>
				    </div>
				    <div class="board-member">
				    	<img src="<?php bloginfo('template_url'); ?>/images/person2.png">
				    	<div class="info">
				    		<h2>Grace C. Wright, MD, PhD, FACR</h2>
				    	</div>
				    </div>
				    <div class="board-member">
				    	<img src="<?php bloginfo('template_url'); ?>/images/person3.jpg">
				    	<div class="info">
				    		<h2>Gwenesta B. Melton, MD</h2>
				    	</div>
				    </div>

				    <div class="button-home">
					    	<a href="#">View All</a>
					    </div>
			</div>
		</section>

		<section id="slide-3" class="skr-slide">
		    <div class="bcg "
		     style="background-image:url(<?php bloginfo('template_url'); ?>/images/image3.jpg);"
		        data-center="background-position: 50% 0px;"
		        data-top-bottom="background-position: 50% -100px;"
		        data-anchor-target="#slide-3">
		        <div class="hsContainer">
		            <div class="hsContent"
		                data-center="opacity: 1"
		                data-106-top="opacity: 0"
		                data-anchor-target="#slide-3">
		               
		            </div>
		        </div>
		    </div>
		</section>

		
		<section id="slide" class="skr-slide section">
			<div class="small-wrap">
			<h2>Partner Organizations</h2>
				<div class="flexslider">
			        <ul class="slides">
			        <?php //while ( $the_query->have_posts() ) : ?>
						<?php //$the_query->the_post(); ?>
			            
			            <li> 
			              
			                   <img src="<?php //the_field('banner_image'); ?>" />
			                
			            </li>
			            
			           <?php //endwhile; ?>
			      	 </ul><!-- slides -->
			</div><!-- .flexslider -->
			</div>
		</section>


		<section id="slide-4" class="skr-slide">
		    <div class="bcg "
		     style="background-image:url(<?php bloginfo('template_url'); ?>/images/image4.jpg);"
		        data-center="background-position: 50% 0px;"
		        data-top-bottom="background-position: 50% -100px;"
		        data-anchor-target="#slide-4">
		        <div class="hsContainer">
		            <div class="hsContent"
		                data-center="opacity: 1"
		                data-106-top="opacity: 0"
		                data-anchor-target="#slide-3">
		               
		            </div>
		        </div>
		    </div>
		</section>

		<section id="slide-5" class="skr-slide">
		    <div class="bcg "
		     style="background-image:url(<?php bloginfo('template_url'); ?>/images/image5.jpg);"
		        data-center="background-position: 50% 0px;"
		        data-top-bottom="background-position: 50% -100px;"
		        data-anchor-target="#slide-5">
		        <div class="hsContainer">
		            <div class="hsContent"
		                data-center="opacity: 1"
		                data-106-top="opacity: 0"
		                data-anchor-target="#slide-5">
		               
		            </div>
		        </div>
		    </div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
