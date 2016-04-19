<?php
	get_header();
?>
<main class="clear-head">
	<section class="container white">

	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>
					<div class="page-title">
						<h1><?php the_title(); ?></h1>
					</div>
	</section>
	<section class="white container">
		<div class="row">
			<div class="masonry">

	<?php
			}
		}
		$the_query = new WP_Query( array( 'post_type' => 'case-studies' , 'orderby' => 'title', 'order' => 'ASC', 'showposts' => '-1' ));
		if ( $the_query -> have_posts() ) {
			while ( $the_query -> have_posts() ) {
				$the_query -> the_post();
	?>
						<div class="event-box item">
							<div class="inner-container inner">
								<div class="image-container">
									<?php
							        	$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
						            ?>
		       						<img data-layzr="<?php echo $url[0]; ?>" alt="<?php the_title(); ?> Logo" title="<?php the_title(); ?>"/>
								</div>
	       						<h2><?php the_title(); ?></h2>
	       						<p><?php the_excerpt(); ?></p>
	       						<a href="<?php the_permalink(); ?>" class="sys-button">Read More</a>
							</div>
						</div>
	<?php
			}
		}
		wp_reset_query();
	?>
			</div>
		</div>
	</section>

</main>
<?php
	get_footer();
?>
