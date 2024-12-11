<?php
/**
 * Template name: Homepage Template
 */

 get_header();
 ?>

<div class=""cars>
    <?php
    $args = array(
        'post_type' => 'car',
        'posts_per_page' => -1
    );

    $cars = new WP_Query($args); ?>

    <?php if ($cars->have_posts()) : while($cars->have_posts()) : $cars->the_post(); ?>
        <?php get_template_part('partials/content'); ?>
    <?php endwhile; else : ?>
        <?php get_template_part('partials/content', 'none'); ?>
    <?php endif; 

    wp_reset_postdata();
    ?>
</div>


<?php
//get_sidebar();
get_footer();
