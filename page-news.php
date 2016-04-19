<?php
	get_header();
?>
<main class="clear-head container white">
	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>
					<div class="page-title">
						<h1><?php the_title(); ?></h1>
					</div>
					<section class="row masonry">

	<?php
			}
		}
		$the_query = new WP_Query(array(
			'post_type'	=> 'news',
		));
		if ( $the_query -> have_posts() ) {
			while ( $the_query -> have_posts() ) {
				$the_query -> the_post();
	?>
						<div class="event-box item">
							<a href="<?php the_permalink(); ?>" class="inner">
								<div class="inner-container">
		       						<h2><?php the_title(); ?></h2>
		       						<p><?php the_excerpt(); ?></p>
								</div>
							</a>
						</div>
	<?php
			}
		}
		wp_reset_query();
	?>
					</section>
</main>
<?php
	get_footer();
?>
