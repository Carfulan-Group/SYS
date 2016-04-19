<?php
// Template Name:Sitemap
get_header();
?>
<main class="clear-head container white">
	<div class="page-title">
	 		<h1><?php the_title(); ?></h1>
	</div>
	<section class="vertical-padding-large sitemap">
		<div class="row">
		<ul>
		<?php
		wp_list_pages(
			array(
		    	'exclude' => '',
		    	'title_li' => '',
		  	)
		);
		?>

		<?php
			foreach( get_post_types( array('public' => true) ) as $post_type ) {
			  if ( in_array( $post_type, array('post','page','attachment') ) )
			    continue;

			  $pt = get_post_type_object( $post_type );

			  query_posts('post_type='.$post_type.'&posts_per_page=-1');
			  while( have_posts() ) {
			    the_post();
			    echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
			  }
			}
		?>
		</ul>
		</div>
	</section>
</main>
<?php
get_footer();
 ?>
