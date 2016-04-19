<section class="slider-container clear-head">
	<ul class="slider">
	<?php
	$loop = new WP_Query( array( 'post_type' => 'slides', 'posts_per_page' => 5, 'order' => 'DESC' ) );
	while ( $loop->have_posts() ) : $loop->the_post();

	$image = get_field('background_image');
	$size = 'slider-image'; // (thumbnail, medium, large, full or custom size)if( $image ) {echo wp_get_attachment_image( $image, $size );

	?>
		<li class="slide" style='background-image:url("<?php echo wp_get_attachment_image_url( $image, $size );?>");'>
			<div class="container">
				<div class="slide-content">
					<h2><?php the_title(); ?></h2>
					<p><?php the_field('slide_body_text'); ?></p>
					<a class="sys-button" href="<?php the_field('slide_link'); ?>"><?php the_field('link_text'); ?></a>
				</div>
			</div>
		</li>
	<?php endwhile; wp_reset_query();?>
	</ul>
	<span title="Play / Pause" id="pauseSlider">&#10073;&#10073;</span>

	<span id="slider-next">
		<i class="icon-right-open"></i>
	</span>
	<span id="slider-prev">
		<i class="icon-left-open"></i>
	</span>
</section>




