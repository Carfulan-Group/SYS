<?php
// Template Name:Range Showcase (For displaying categories)
get_header();

if ( have_posts() ){
	while( have_posts() ){
		the_post();
?>

<main class="container clear-head white">

	<section class="page-title">
		<h1><?php the_title(); ?></h1>
	</section>

	<section class="row showcase-page-intro">

		<div class="vertical-padding-large col-xs-12">
			<?php the_content(); ?>
		</div>

	</section>

	<?php
		function width(){
			if ( get_field("range_4_title") ){
				echo "col-md-3 col-sm-6";
			} else if ( get_field("range_3_title") ) {
				echo "col-md-4";
			} else {
				echo "col-sm-6";
			}
		}
	 ?>

	<section class="row materials-3d-printers-page-range three-cta">
		<?php
			$counter = 0;
			if ( have_rows('boxes') ):
				while ( have_rows('boxes') ) : the_row();
					$counter++;
				endwhile;
				if ($counter <= 4){
					$columns = 12 / $counter;
				} else {
					$columns = 3;
				}

				while ( have_rows('boxes') ) : the_row(); ?>
					<div class="col-md-<?php echo $columns ?>">
					<a href="<?php echo site_url(); echo "/"; the_sub_field("link"); ?>" title="<?php the_sub_field("title"); ?>">
						<?php
							if ( get_sub_field("image") ):
						?>
							<img data-layzr="<?php the_sub_field("image"); ?>" alt="<?php the_sub_field("title"); ?>">
						<?php
							endif;
							if ( get_sub_field("title") ):
						?>
							<h2><?php the_sub_field("title"); ?></h2>
						<?php
							endif;
						?>
						<p><?php the_sub_field("body"); ?></p>
					</a>
				</div>
				<?php
				endwhile;
			endif;
		?>
	</section>

</main>

<?php
	}
}
get_footer();
?>
