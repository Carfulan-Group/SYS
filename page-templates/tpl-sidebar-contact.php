<?php
// Template Name:Sidebar Contact Form
get_header();

if ( have_posts()) : while (have_posts() ) : the_post(); ?>

<main class="clear-head container white">
	<section class="page-title clear-head">
        <h1><?php the_title(); ?></h1>
	</section>
	<section class="row">
		<div class="vertical-padding-large col-sm-9">
			<?php the_content(); ?>
		</div>
		<div id="machine-engage" class="col-sm-3 contact contact-generic-page">
			<?php include get_template_directory() . "/partials/share.php"; ?>
			<h5>Ask a question</h5>
			<?php echo do_shortcode('[caldera_form id="CF561e747d4cec5"]') ?>
		</div>
	</section>
</main>

<?php
endwhile; endif;

get_footer(); ?>
