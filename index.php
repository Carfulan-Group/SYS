<?php
/**
 * A wordpress theme for SYS Systems 3D printing
 *
 */

get_header();

if ( have_posts()) : while (have_posts() ) : the_post();

the_content();

endwhile; endif;

get_footer(); ?>
