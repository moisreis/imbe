<?php

/**
 * Template Name: Sobre Nós
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author Moisés Moreira Reis
 */
get_header(); ?>
<main>
    <div class="list--title" style="padding-top: 5rem;">
        <h2 class="title">Sobre Nós</h2>
    </div>
    <!-- BELOWS IS members -->
    <section id="members" class="flex flex-column flex-column--start padding-y--4-extra-large gap--6-extra-large">
        <?php
        if (have_rows('lista_de_membros', 'option')):
            $index = 0;
            while (have_rows('lista_de_membros', 'option')) : the_row();
                $additional_class = ($index == 1) ? 'hero--invert hero--left' : '';
        ?>
                <section class="hero <?php echo $additional_class; ?>">
                    <div class="hero-cover">
                        <img class="black-and-white" src="<?php echo esc_url(get_sub_field('foto_de_perfil')['url']); ?>" alt="<?php echo esc_html(get_sub_field('nome')); ?>">
                    </div>
                    <div class="hero-content">
                        <div class="title"><?php echo esc_html(get_sub_field('nome')); ?></div>
                        <div class="paragraph"><?php echo wp_kses_post(get_sub_field('texto')); ?></div>
                    </div>
                </section>
        <?php
                $index++;
            endwhile;
        endif;
        ?>
    </section>
    <!-- BELOW IS `spining-text` container -->
    <section id="spinner-container" class="flex flex-column flex-column--center gap--extra-large width--full padding-x--4-extra-large padding-y--4-extra-large">
        <a href="<?php echo home_url() ?>/comece-seu-projeto">
            <button class="button is-bigger button--outline">Fale conosco</button>
        </a>
    </section>
    <!-- BELOW IS social proof (1) -->
    <section class="social-proof">
        <h3 class="subtitle"><?php echo wp_kses_post(get_field('prova_social', 'option')['titulo']); ?></h3>
        <div class="paragraph"><?php echo wp_kses_post(get_field('prova_social', 'option')['texto']); ?></div>
    </section>
</main>
<?php get_footer(); ?>