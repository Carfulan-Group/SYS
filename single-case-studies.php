<?php get_header (); ?>

<main class="clear-head container white">
	<?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>
		<section class="page-title clear-head">
			<h1><?php the_title (); ?></h1>
		</section>
		<div class="row">
			<div class="vertical-padding-large col-sm-9">
				<?php the_content (); ?>
			</div>
			<div id="machine-engage" class="col-sm-3 contact contact-generic-page">
				<?php include get_template_directory () . "/partials/share.php"; ?>
				<h5>Ask a question</h5>
				<?php echo do_shortcode ( '[caldera_form id="CF561e747d4cec5"]' ) ?>
			</div>
		</div> <!-- end of row -->
	<?php endwhile; endif; ?>

	<div class="single-news-showcase vertical-padding-large">
		<div class="row">
			<?php
				query_posts ( array ( 'post_type' => 'case-studies', 'showposts' => '3', 'orderby' => 'rand' ) );
				if ( have_posts () ): while ( have_posts () ): the_post ();
					?>
					<div class="col-sm-4">
						<h3><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h3>
					</div>
				<?php endwhile;endif; ?>
		</div>
	</div>
</main>


<?php get_footer (); ?>
