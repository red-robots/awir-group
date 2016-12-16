<?php 

// Get the featured image ==== todo

if( get_post_type() == 'event') {
	$image = get_field('featured_image');
	$imageArray = wp_get_attachment_image_src($image);
	$imageUrl = $imageArray[0];
	// echo '<pre>';
	// print_r($imageUrl);
} elseif ( get_post_type() == 'page' ) {
	$imageUrl = get_the_post_thumbnail_url( '','large' );
} else {
	$imageUrl = get_bloginfo('template_url') . '/images/image2.png';
}

 ?>

<section id="slide-page" class="skr-slide">
	<div class="bg-black"></div>
	<div class="bcg-page "
	 style="background-image:url(<?php echo $imageUrl; ?>);"
	    data-center="background-position: 50% 0px;"
	    data-top-bottom="background-position: 50% -50px;"
	    data-anchor-target="#slide-page">
	    <div class="hsContainer">
	        <div class="hsContent"
	            data-center="opacity: 1;"
	            data-106-top="opacity: .7;"
	            data-anchor-target="#slide-page">
	          	<section class="page-hero">
	        	<header class="page-title">
					<h1 class=" fadeIn"><?php the_title(); ?></h1>
				</header>
			</section>
	        </div>
	        
	    </div>
	</div>

</section>