<?php get_header();

if ( have_posts()) : while (have_posts() ) : the_post(); ?>

<main class="clear-head container white">
	<section class="page-title clear-head">
        <h1><?php the_title(); ?></h1>
	</section>
	<div class="vertical-padding-large">
		<?php the_content(); ?>
	</div>
</main>

<?php
endwhile; endif;

get_footer(); ?>
