<?php

/**
 * Template Name: Feng Shui
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author Moisés Moreira Reis
 */
get_header(); ?>
<main>
    <section class="cta">
        <?php if (!empty(get_field('fg_cta_1', 'option')['fundo']['url'])): ?>
            <img src="<?php echo esc_url(get_field('fg_cta_1', 'option')['fundo']['url']); ?>" alt="<?php echo esc_attr(get_field('fg_cta_1', 'option')['fundo']['alt']); ?>">
        <?php endif; ?>
        <div class="cta-cta">
            <h1><?php echo esc_html(get_field('fg_cta_1', 'option')['cta']); ?></h1>
        </div>
        <div class="cta-button">
            <a href="<?php echo esc_html(get_field('fg_cta_1', 'option')['url']); ?>">
                <button class="button--accent is-bigger"><?php echo esc_html(get_field('fg_cta_1', 'option')['botao']); ?></button>
            </a>
        </div>
        <div class="cta-overlay"></div>
    </section>
    <section class="social-proof">
        <h2 class="subtitle"><?php echo esc_html(get_field('fg_prova_social_1', 'option')['titulo']); ?></h2>
        <p class="paragraph"><?php echo wp_kses_post(get_field('fg_prova_social_1', 'option')['texto']); ?></p>
    </section>
    <section class="hero">
        <div class="hero-cover">
            <img src="<?php echo esc_url(get_field('fg_hero_1', 'option')['capa']['url']); ?>" alt="">
        </div>
        <div class="hero-content">
            <div class="title"><?php echo esc_html(get_field('fg_hero_1', 'option')['titulo']); ?></div>
            <p class="paragraph"><?php echo wp_kses_post(get_field('fg_hero_1', 'option')['texto']); ?></p>
        </div>
    </section>
    <section class="social-proof">
        <h2 class="subtitle"><?php echo esc_html(get_field('fg_prova_social_2', 'option')['titulo']); ?></h2>
        <p class="paragraph"><?php echo wp_kses_post(get_field('fg_prova_social_2', 'option')['texto']); ?></p>
    </section>
    <section class="cta">
        <?php if (!empty(get_field('fg_cta_2', 'option')['fundo']['url'])): ?>
            <img src="<?php echo esc_url(get_field('fg_cta_2', 'option')['fundo']['url']); ?>" alt="<?php echo esc_attr(get_field('fg_cta_2', 'option')['fundo']['alt']); ?>">
        <?php endif; ?>
        <div class="cta-cta">
            <h1><?php echo wp_kses_post(get_field('fg_cta_2', 'option')['cta']); ?></h1>
        </div>
        <div class="cta-overlay"></div>
    </section>
    <section class="social-proof">
        <h2 class="subtitle"><?php echo esc_html(get_field('fg_prova_social_3', 'option')['titulo']); ?></h2>
        <p class="paragraph"><?php echo wp_kses_post(get_field('fg_prova_social_3', 'option')['texto']); ?></p>
    </section>
    <section class="grid--3 gap--6-extra-large padding--4-extra-large border--top">
        <?php
        if (have_rows('itens', 'option')):
            while (have_rows('itens', 'option')) : the_row();
        ?>
                <div class="flex flex-column flex-column--start gap--medium align--start">
                    <img class="width--full height--half" src="<?php echo esc_url(get_sub_field('foto')['url']); ?>" alt="">
                    <h2 class="subtitle"><?php echo esc_html(get_sub_field('titulo')); ?></h2>
                    <p class="paragraph"><?php echo esc_html(get_sub_field('texto')); ?></p>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </section>
    <section class="cta">
        <?php if (!empty(get_field('fg_cta_3', 'option')['fundo']['url'])): ?>
            <img src="<?php echo esc_url(get_field('fg_cta_3', 'option')['fundo']['url']); ?>" alt="<?php echo esc_attr(get_field('fg_cta_3', 'option')['fundo']['alt']); ?>">
        <?php endif; ?>
        <div class="cta-cta">
            <h1><?php echo wp_kses_post(get_field('fg_cta_3', 'option')['cta']); ?></h1>
        </div>
        <div class="cta-overlay"></div>
    </section>
    <section class="social-proof">
        <h2 class="subtitle"><?php echo esc_html(get_field('fg_prova_social_4', 'option')['titulo']); ?></h2>
        <p class="paragraph"><?php echo wp_kses_post(get_field('fg_prova_social_4', 'option')['texto']); ?></p>
    </section>
    <section class="hero width--full">
        <div class="hero-cover">
            <img src="<?php echo esc_url(get_field('fg_hero_2', 'option')['capa']['url']); ?>" alt="">
        </div>
        <div class="hero-content">
            <div class="title"><?php echo esc_html(get_field('fg_hero_2', 'option')['titulo']); ?></div>
            <p class="paragraph"><?php echo wp_kses_post(get_field('fg_hero_2', 'option')['texto']); ?></p>
            <a class="is-centered-a" href="<?php echo home_url() ?>/comece-seu-projeto">
                <button class="button--primary width--fit is-bigger">Fale conosco</button>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>