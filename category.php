<?php get_header();
$cur_cat_id = get_cat_id( single_cat_title("",false) );
?>
<main class="clear-head white container">

<section class="page-title clear-head">
        <h1><?php single_cat_title( '', true ); ?></h1>
</section>

<div class="range-item-container">
    <?php query_posts(array( 'post_type' => array( 'materials', '3d-printers' ), 'cat' => $cur_cat_id )); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="range-item">
            <a href="<?php the_permalink(); ?>">
                <div>
                    <?php
                        $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium');
                    ?>
                    <div class="range-item-image">
                        <img data-layzr="<?php echo $url[0]; ?>" alt="<?php the_title(); ?> image" title="<?php the_title(); ?>"/>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <?php echo custom_field_excerpt(); ?>
                    </p>
                </div>
            </a>
        </div>
    <?php endwhile; else: ?>
        <p class="col-xs-12">Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>
</main>
<?php get_footer(); ?>
