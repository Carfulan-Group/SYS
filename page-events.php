<?php
	get_header();
?>
<main class="clear-head">
	<section class="white container">
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post(); ?>
					<div class="page-title">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="row">
						<div class="col-xs-12 events-intro">
							<?php the_content(); ?>
						</div>
					</div>
	</section>
	<section class="white container">
		<div class="row">
			<div class="masonry">

	<?php
			endwhile;
			endif;

		$posts = get_posts(array(
			'post_type'			=> 'events',
			'posts_per_page'	=> -1,
			'meta_key'			=> 'date',
			'orderby'			=> 'meta_value',
			'order'				=> 'ASC'
		));
		if ( $posts ) :
			foreach ( $posts as $post ):
				setup_postdata( $post )
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
	       						<p><strong>Date:</strong> <?php
	       							$date = get_field("date");
	       						 	echo date("j/m/Y", strtotime($date));

	       						 	if ( get_field("end_date") ):
	       						 		$end_date = get_field("end_date");
	       						 		echo " - " . date("j/m/Y", strtotime($end_date));
	       						 	endif;
	       						  	?></p>

	       						  <?php if ( get_field("location") ): ?>
	       						  	<p><strong>Location: </strong>
	       						  	<?php the_field("location"); ?>
	       						  	</p>
	       						  <?php endif; ?>

	       						  <?php if ( get_field("hall") ): ?>
	       						  	<p><strong>Hall: </strong>
	       						  	<?php the_field("hall"); ?>
	       						  	</p>
	       						  <?php endif; ?>

	       						  <?php if ( get_field("stand") ): ?>
	       						  	<p><strong>Stand: </strong>
	       						  	<?php the_field("stand"); ?>
	       						  	</p>
	       						  <?php endif; ?>

	       						  <?php if ( get_field("link") ): ?>
	       						  	<a href="<?php the_field("link"); ?>" target="_blank" class="sys-button">
	       						  		<?php
	       						  			if ( get_field("link_text") ){
	       						  				the_field("link_text");
	       						  			} else {
	       						  				echo "Learn More";
	       						  			}
	       						  		?>
	       						  	</a>
	       						  <?php endif; ?>

							</div>
						</div>
	<?php
			endforeach;

		wp_reset_postdata();

		endif;
	?>
			</div>
		</div>
	</section>
</main>
<?php
	get_footer();
?>
