<?php

/**
 * This file renders the single post page
 * 
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 */
get_header(); ?>
<main>
    <section class="blog--header">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="blog-header--image">
    </section>
    <article class="blog--article">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog--article--meta">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <div class="flex flex-row flex-row--start flex-wrap gap--medium">
                        <span class="blog--article--meta--item"><?php echo get_the_date(); ?></span>
                        <span class="blog--article--meta--item"><?php echo get_the_author(); ?></span>
                        <?php
                        $tags = get_the_tags();
                        if ($tags) {
                            foreach ($tags as $tag) {
                                echo '<div class="badge">' . esc_html($tag->name) . '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="blog--article--content"><?php the_content(); ?></div>
        <?php endwhile;
        endif; ?>
    </article>
</main>
<?php get_footer(); ?>