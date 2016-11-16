<?php
/**
 * Template Name: Board Members
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<header class="page-title">
			<h1><?php the_title(); ?></h1>
		</header>

			<?php
			$i=0;
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'board',
				'posts_per_page' => -1,
				'paged' => $paged,
			));
				if ($wp_query->have_posts()) : ?>
			    <?php while ($wp_query->have_posts()) : ?>
			        
			    <?php $wp_query->the_post(); $i++;
			    	$photo = get_field('photo');
			    	$title = get_field('title');
			    	$size = 'full';

			    	if( $i == 2 ) {
			    		$postClass = 'last';
			    		$i=0;
			    	} else {
			    		$postClass = 'first';
			    	}

			    ?>

			    <div class="boardmember <?php echo $postClass; ?>">
			    	<div class="member-photo">
			    		<?php echo wp_get_attachment_image( $photo, $size ); ?>
			    	</div>
			    	<div class="content">
			    		<h2><?php the_title(); ?></h2>
				    	<h3><?php echo $title; ?></h3>
				    	<div class="readmore">
				    		Read Bio
				    	</div>
			    	</div>
			    	
			    	<a class="open" href="<?php the_permalink(); ?>">Go</a>
			    </div><!-- board member -->

			<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
