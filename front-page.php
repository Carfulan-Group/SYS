<?php
get_header();
include("partials/slider.php");
if ( have_posts()) : while (have_posts() ) : the_post(); ?>
<main>
<section class="container">
	<div id="home-intro">
		<div id="home-intro-text" class="col-sm-8">
			<h2><?php the_field("sys_about_title"); ?></h2>
			<p><?php the_field("sys_about_text") ?></p>
		</div>
			<?php if ( get_field("partner_logo") ): ?>
				<div id="home-partner-logo" class="col-sm-4">
					<img data-layzr="<?php echo the_field("partner_logo"); ?>" alt="Stratasys Platinum Partner <?php echo date(Y); ?>">
				</div>
			<?php endif; ?>
		<div id="home-video" class="closed" data-layzr="<?php echo get_template_directory_uri(); ?>/assets/images/video-bg.jpg" data-layzr-bg>
				<i class="icon-play"></i>
				<iframe width="100%" height="640" the-src="https://www.youtube.com/embed/<?php the_field("youtube_video_link"); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<section id="home-learn">
	<div class="container">
		<div class="row three-cta">
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_2_box_1_link'); ?>" title="Learn More About <?php the_field("section_2_box_1_title"); ?>">
					<?php
						$image = get_field('section_2_box_1_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_2_box_1_title"); ?></h1>
					<p><?php the_field("section_2_box_1_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_2_box_2_link'); ?>" title="Learn More About <?php the_field("section_2_box_2_title"); ?>">
					<?php
						$image = get_field('section_2_box_2_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_2_box_2_title"); ?></h1>
					<p><?php the_field("section_2_box_2_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_2_box_3_link'); ?>" title="Learn More About <?php the_field("section_2_box_3_title"); ?>">
					<?php
						$image = get_field('section_2_box_3_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_2_box_3_title"); ?></h1>
					<p><?php the_field("section_2_box_3_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
		</div>
	</div>
</section>
<?php
	$image = get_field('section_3_background_image');
	$size = 'slider-image'; // (thumbnail, medium, large, full or custom size)
?>
<section id="home-connect" class="one-cta" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg>
	<a href="<?php the_field("section_3_link"); ?>">
		<h2><?php the_field("section_3_title"); ?></h2>
		<p><?php the_field("section_3_body"); ?></p>
		<span class="sys-button"><?php the_field("section_3_link_text"); ?></span>
	</a>
</section>
<section id="home-sell-it">
	<div class="container">
		<div class="row three-cta">
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_4_box_1_link'); ?>" title="Learn More About <?php the_field("section_4_box_1_title"); ?>">
					<?php
						$image = get_field('section_4_box_1_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_4_box_1_title"); ?></h1>
					<p><?php the_field("section_4_box_1_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_4_box_2_link'); ?>" title="Learn More About <?php the_field("section_4_box_2_title"); ?>">
					<?php
						$image = get_field('section_4_box_2_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_4_box_2_title"); ?></h1>
					<p><?php the_field("section_4_box_2_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_4_box_3_link'); ?>" title="Learn More About <?php the_field("section_4_box_3_title"); ?>">
					<?php
						$image = get_field('section_4_box_3_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_4_box_3_title"); ?></h1>
					<p><?php the_field("section_4_box_3_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
		</div>
	</div>
</section>
<?php
	$image = get_field('section_5_background_image');
	$size = 'slider-image'; // (thumbnail, medium, large, full or custom size)
?>
<section id="home-consumables" class="one-cta" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg>
	<a href="<?php the_field("section_5_link"); ?>" <?php
		if( get_field('open_link_in_new_tab') )
		{
		  echo "target='_blank'";
		}
	 ?>>
		<h2><?php the_field("section_5_title"); ?></h2>
		<p><?php the_field("section_5_body"); ?></p>
		<span class="sys-button"><?php the_field("section_5_link_text"); ?></span>
	</a>
</section>
<section id="home-media">
	<div class="container">
		<div class="row three-cta">
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_6_box_1_link'); ?>" title="Learn More About <?php the_field("section_6_box_1_title"); ?>">
					<?php
						$image = get_field('section_6_box_1_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_6_box_1_title"); ?></h1>
					<p><?php the_field("section_6_box_1_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_6_box_2_link'); ?>" title="Learn More About <?php the_field("section_6_box_2_title"); ?>">
					<?php
						$image = get_field('section_6_box_2_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_6_box_2_title"); ?></h1>
					<p><?php the_field("section_6_box_2_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
			<div class="col-sm-4 item">
				<a href="<?php the_field('section_6_box_3_link'); ?>" title="Learn More About <?php the_field("section_6_box_3_title"); ?>">
					<?php
						$image = get_field('section_6_box_3_image');
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
					 ?>
					<div class="image" data-layzr="<?php echo wp_get_attachment_image_url( $image, $size );?>" data-layzr-bg></div>
					<h1><?php the_field("section_6_box_3_title"); ?></h1>
					<p><?php the_field("section_6_box_3_body"); ?></p>
					<span class="sys-button">Read More</span>
				</a>
			</div>
		</div>
	</div>
</section>
<section id="sys-community">
	<h3>SYS Community</h3>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 item">
				<h4><a href="<?php echo site_url(); ?>/news"><i class="icon-newspaper"></i> News</a></h4>
				<div class="news-item-container">
					<?php
						query_posts('post_type=news&posts_per_page=5');
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
					?>
						<div class="news-item">
							<a href="<?php the_permalink(); ?>">
								<h5><?php the_title(); ?></h5>
							</a>
						</div>
					<?php
						endwhile;
						endif;
						wp_reset_query();
					?>
				</div>
			</div>
			<div class="col-sm-4 item">
				<h4><i class="icon-instagram"></i> Instagram</h4>
				<div class="news-item-container">
					<?php
						query_posts('category_name=instagram&posts_per_page=3');
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
					?>
						<div class="instagram-container">
							<div class="instagram-post-image" data-layzr="<?php echo $url[0]; ?>" data-layzr-bg></div>
							<div class="instagram-post-content"><?php the_content(); ?></div>
						</div>
					<?php
						endwhile;
						endif;
						wp_reset_query();
					?>
				</div>
			</div>
			<div class="col-sm-4 item">
				<h4><i class="icon-twitter"></i> Twitter</h4>
				<div class="news-item-container">
					<?php
						query_posts('category_name=twitter&posts_per_page=5');
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						?>
						<div class="news-item tweet">
							<a href="https://twitter.com/sys3dprinting" target="_blank">
								<p><?php the_content(); ?></p>
							</a>
						</div>
					<?php
						endwhile;
						endif;
						wp_reset_query();
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="social-icons">
			<?php wp_nav_menu( array('theme_location' => 'social-menu' ) ); ?>
	</div>
</section>
</main>
<?php
endwhile; endif;
get_footer();
?>
