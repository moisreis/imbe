<?php

/**
 * Template Name: Projetos
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author Moisés Moreira Reis
 */
get_header(); ?>
<main class="grid--2 width--base margin-auto gap-medium">
    <?php
    $query = new WP_Query([
        'post_type'      => 'projeto',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="card">
                <div class="card--content">
                    <p class="paragraph"><?php the_title(); ?></p>
                    <p class="paragraph"><?php the_field('localizacao'); ?> | <?php the_field('ano'); ?></p>
                </div>
                <div class="card--image">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <button class="button--blur">Ver <?php the_title(); ?></button>
                </div>
            </a>
        <?php endwhile;
        wp_reset_postdata(); // Reset post data after custom query.
    else : ?>
        <p>No projects found.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>