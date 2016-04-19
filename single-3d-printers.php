<?php
	get_header ();
?>

<main class="clear-head container white">
	<?php

		if ( have_posts () )
		{
			while ( have_posts () )
			{
				the_post (); ?>

				<div class="page-title">
					<h1><?php the_title (); ?></h1>
					<?php if ( get_field ( 'secondary_heading' ) ): ?>
						<h2>
							<?php echo the_field ( 'secondary_heading' ); ?>
						</h2>
					<?php endif; ?>
				</div>

				<section id="machine-main" class="row">

					<div id="machine-featured-image" class="col-md-3 col-sm-4">
						<div class="inner-image-container">
							<?php
								$url = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 'full' );
							?>
							<img data-layzr="<?php echo $url[ 0 ]; ?>" alt="<?php the_title (); ?> 3D Printer" title="<?php the_title (); ?>" class="img-responsive"/>
						</div>
					</div>


					<div id="machine-text" class="col-md-6 col-sm-8">
						<ul id="machine-tabs-buttons">
							<li class="active">
								<a data-toggle="tab" href="#overview">Overview</a>
							</li>
							<?php if ( get_field ( 'specification' ) ): ?>
								<li>
									<a data-toggle="tab" href="#specs">Specification</a>
								</li>
							<?php endif; ?>
							<?php if ( get_field ( 'materials' ) ): ?>
								<li>
									<a data-toggle="tab" href="#materials">Materials</a>
								</li>
							<?php endif; ?>
							<?php if ( get_field ( 'media' ) ): ?>
								<li>
									<a data-toggle="tab" href="#media">Media</a>
								</li>
							<?php endif; ?>
							<?php if ( get_field ( 'price' ) ): ?>
								<li>
									<a data-toggle="tab" href="#price">Pricing</a>
								</li>
							<?php endif; ?>
						</ul>

						<div class="tab-content">

							<div id="overview" class="tab-pane active">
								<?php echo the_field ( 'overview' );
									if ( get_field ( 'youtube_link' ) ): ?>
										<iframe style="margin-top:10px;" width="100%" height="300" src="https://www.youtube.com/embed/<?php echo the_field ( 'youtube_link' ); ?>" frameborder="0" allowfullscreen></iframe>
									<?php endif; ?>
							</div>


							<?php if ( get_field ( 'specification' ) ): ?>
								<div id="specs" class="tab-pane">
									<?php echo the_field ( 'specification' ); ?>
								</div>
							<?php endif; ?>

							<?php if ( get_field ( 'materials' ) ): ?>
								<div id="materials" class="tab-pane">
									<?php echo the_field ( 'materials' ); ?>
								</div>
							<?php endif; ?>

							<?php if ( get_field ( 'media' ) ): ?>
								<div id="media" class="tab-pane">
									<?php echo the_field ( 'media' ); ?>
								</div>
							<?php endif; ?>

							<?php if ( get_field ( 'price' ) ): ?>
								<div id="price" class="tab-pane">
									<?php echo the_field ( 'price' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<div id="machine-engage" class="col-md-3 col-sm-12 contact">
						<?php if ( get_field ( 'brochure' ) ): ?>
							<a id="brochure-download-button" class="sys-button" target="_blank" href="<?php echo the_field ( 'brochure' ); ?>" onclick="goog_report_conversion ('<?php echo the_field ( 'brochure' ); ?>')">Download Brochure</a>
						<?php endif; ?>
						<?php include "partials/share.php"; ?>

						<h5>Ask a question</h5>
						<?php echo do_shortcode ( '[caldera_form id="CF561e747d4cec5"]' ) ?>
					</div>
				</section>

				<?php
			}
		}
	?>

	<section id="machine-more">
		<h3>Related 3D Printers:</h3>
		<?php
			if ( in_category ( 'Idea Series' ) )
			{
				$loop = new WP_Query( array ( 'post_type' => '3d-printers', 'category_name' => 'idea-series', 'posts_per_page' => 4, 'orderby' => 'rand' ) );
			}
			else if ( in_category ( 'Design Series' ) )
			{
				$loop = new WP_Query( array ( 'post_type' => '3d-printers', 'category_name' => 'design-series', 'posts_per_page' => 4, 'orderby' => 'rand' ) );
			}
			else if ( in_category ( 'Production Series' ) )
			{
				$loop = new WP_Query( array ( 'post_type' => '3d-printers', 'category_name' => 'production-series', 'posts_per_page' => 4, 'orderby' => 'rand' ) );
			}
			else if ( in_category ( 'Dental Series' ) )
			{
				$loop = new WP_Query( array ( 'post_type' => '3d-printers', 'category_name' => 'dental-series', 'posts_per_page' => 4, 'orderby' => 'rand' ) );
			}
		?>
		<div class="row">
			<?php
				while ( $loop->have_posts () ) : $loop->the_post (); ?>
					<div class="col-md-3 col-sm-6">
						<a class="same-range-item" href="<?php the_permalink (); ?>">
							<?php
								$url = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 'large' );
							?>
							<div class="more-image-container">
								<img class="img-responsive" data-layzr="<?php echo $url[ 0 ]; ?>" alt="<?php the_title (); ?> 3D Printer" title="<?php the_title (); ?>"/>
							</div>

							<h3><?php the_title (); ?></h3>
						</a>
					</div>

				<?php endwhile;
				wp_reset_query (); ?>
		</div>
	</section>
</main>
<?php
	get_footer ();
?>
