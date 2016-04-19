<?php get_header(); ?>

<main class="clear-head container white">
	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
		<section class="page-title clear-head">
	        <h1><?php the_title(); ?></h1>
		</section>
		<div class="vertical-padding-large">
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>

		<div class="single-news-showcase vertical-padding-large">
			<div class="row">
				<?php
				query_posts( array( 'post_type' => 'news' , 'showposts' => '3', 'orderby' => 'rand' ) );
				if ( have_posts() ): while ( have_posts() ): the_post();
				?>
				<div class="col-sm-4">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<?php endwhile;endif; ?>
			</div>
		</div>
</main>


<?php get_footer(); ?>
