<?php
// Template Name:File Display
get_header();
?>
<main class="clear-head container white">
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
	?>
	<section class="page-title clear-head">
        <h1><?php the_title(); ?></h1>
	</section>
	<div class="vertical-padding-large">
		<?php the_content(); ?>
	</div>
		<?php
			if ( have_rows("sections") ):
		?>
		<div class="row">
			<div class="files masonry">
				<?php
					while ( have_rows("sections") ): the_row();
				?>
				<div class="vertical-padding item">
					<div class="inner">
						<h4><?php the_sub_field("section_title"); ?></h4>
						<?php
							if ( have_rows("files") ) :
								echo "<ul>";
								while ( have_rows("files") ) : the_row();
								?>
								<li><a href='<?php the_sub_field("file_link"); ?>' target="_blank"><?php the_sub_field("file_name"); ?></a></li>
								<?php
								endwhile;
								echo "</ul>";
							endif;
						?>
					</div>
				</div>
				<?php
				endwhile;
				?>
			</div>
		</div>
		<?php
		endif;
		endwhile;
		endif;
		?>
	<p>Can't find what you're looking for? Email our experts: <a href="mailto:info@sys-uk.com">info@sys-uk.com</a>.</p>
</main>

<?php get_footer(); ?>
