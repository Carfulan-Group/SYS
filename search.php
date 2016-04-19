<?php get_header (); ?>

<main id="search-results" class="clear-head container white">
	<div class="page-title">
		<h1>Search Results For : <strong><?php the_search_query (); ?></strong></h1>
	</div>
	<div class="vertical-padding-large">


		<?php if ( have_posts () ) : while ( have_posts () ) : the_post ();
			if ( get_field ( 'overview' ) )
			{ ?>
				<a class="search-result" href="<?php the_permalink (); ?>">
					<?php
						echo "<h4>";
						the_title ();
						echo "</h4>";
						echo custom_field_excerpt ();
					?>
				</a>
			<?php }
			else
			{ ?>
				<a class="search-result" href="<?php the_permalink (); ?>">
					<?php
						echo "<h4>";
						the_title ();
						echo "</h4>";
						the_excerpt ();
					?>
				</a>
			<?php } endwhile;

		else: ?>
			<h1>No related content was found</h1>
			<p>Please try again using different search criteria.</p>
			<form role="search" method="get" id="searchform" class="searchform paddingv" action="<?php echo site_url (); ?>">
				<div>
					<input type="text" class="sys-input" placeholder="Criteria" value="" name="s" id="s">
					<input class="sys-button" type="submit" id="searchsubmit" value="Search">
				</div>
			</form>
		<?php endif; ?>

	</div>
</main>

<?php get_footer (); ?>
