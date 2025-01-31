<?php

/**
 * Template Name: Comece Um Projeto
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author Moisés Moreira Reis
 */
get_header(); ?>
<main>
    <section class="flex flex-column flex-column--center align--center gap--medium width--70 margin--auto padding-y--2-extra-large">
        <h2 class="title" id="title">Conquiste sua casa dos sonhos</h2>
    </section>
    <section style="margin-bottom: 2rem;">
        <?php echo do_shortcode('[contact-form-7 id="189171f" title="Comece seu projeto"]'); ?>
    </section>
</main>
<?php get_footer(); ?>