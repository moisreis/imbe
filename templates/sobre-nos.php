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
    <!-- BELOW IS `spining-text` container -->
    <section id="spinner-container" class="flex flex-column flex-column--center gap--extra-large width--full padding-x--4-extra-large padding-y--4-extra-large">
        <div class="flex flex-column flex-column--center width--full">
            <div class="paragraph text-align--center width--half"><?php echo wp_kses_post(get_field('secao_inicial', 'option')['texto']); ?></div>
        </div>
        <button class="button button--primary">Fale conosco</button>
    </section>
    <!-- BELOWS IS members -->
    <section id="members" class="flex flex-column flex-column--start padding-y--4-extra-large gap--extra-large">
        <?php
        if (have_rows('lista_de_membros', 'option')):
            $index = 0;
            while (have_rows('lista_de_membros', 'option')) : the_row();
                $additional_class = ($index == 1) ? 'hero--invert hero--left' : '';
        ?>
                <section class="hero <?php echo $additional_class; ?>">
                    <div class="hero-cover">
                        <img src="<?php echo esc_url(get_sub_field('foto_de_perfil')['url']); ?>" alt="<?php echo esc_html(get_sub_field('nome')); ?>">
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
    <!-- BELOW IS social proof (1) -->
    <section class="social-proof">
        <h3 class="subtitle"><?php echo wp_kses_post(get_field('prova_social', 'option')['titulo']); ?></h3>
        <div class="paragraph"><?php echo wp_kses_post(get_field('prova_social', 'option')['texto']); ?></div>
    </section>
    <!-- BELOS IS list -->
    <section class="list width--full">
        <div class="list--title">
            <h2 class="title">Serviços</h2>
            <div class="list--title--absolute-background">
                <?php
                for ($i = 0; $i < 24; $i++) {
                    echo '<h2 class="title">Serviços</h2>';
                }
                ?>
            </div>
        </div>
        <div class="grid--2 gap--4-extra-large padding-y--4-extra-large">
            <div class="flex flex-column flex-column--center align--center gap--medium width--half margin--auto">
                <div class="icon-and-blob">
                    <?php
                    echo file_get_contents(get_template_directory() . '/assets/icons/zombieing.svg');
                    ?>
                    <div>
                        <?php
                        echo file_get_contents(get_template_directory() . '/assets/icons/blob.svg');
                        ?>
                    </div>
                </div>
                <h3 class="subtitle text-align--center">Design de Interiores</h3>
                <p class="paragraph text-align--center">Transformamos ambientes em espaços únicos, que refletem sua personalidade e estilo. Unimos funcionalidade e estética para criar cenários acolhedores, harmoniosos e cheios de vida. Experimente o equilíbrio perfeito entre beleza e conforto.</p>
            </div>
            <div class="flex flex-column flex-column--center align--center gap--medium width--half margin--auto">
                <div class="icon-and-blob">
                    <?php
                    echo file_get_contents(get_template_directory() . '/assets/icons/ballet.svg');
                    ?>
                    <div>
                        <?php
                        echo file_get_contents(get_template_directory() . '/assets/icons/blob (1).svg');
                        ?>
                    </div>
                </div>
                <h3 class="subtitle text-align--center">Reforma</h3>
                <p class="paragraph text-align--center">Dê uma nova vida ao seu espaço! Realizamos reformas personalizadas, otimizando cada detalhe para atender às suas necessidades. Projetos eficientes, acabamentos impecáveis e um ambiente renovado para você aproveitar ao máximo.</p>
            </div>
            <div class="flex flex-column flex-column--center align--center gap--medium width--half margin--auto">
                <div class="icon-and-blob">
                    <?php
                    echo file_get_contents(get_template_directory() . '/assets/icons/meditating.svg');
                    ?>
                    <div>
                        <?php
                        echo file_get_contents(get_template_directory() . '/assets/icons/blob (2).svg');
                        ?>
                    </div>
                </div>
                <h3 class="subtitle text-align--center">Feng Shui</h3>
                <p class="paragraph text-align--center">Harmonize sua casa com a sabedoria milenar do Feng Shui. Ajustamos cada elemento do seu espaço para promover equilíbrio, bem-estar e energias positivas. Descubra o poder de viver em sintonia com o ambiente ao seu redor.</p>
            </div>
            <div class="flex flex-column flex-column--center align--center gap--medium width--half margin--auto">
                <div class="icon-and-blob">
                    <?php
                    echo file_get_contents(get_template_directory() . '/assets/icons/unboxing.svg');
                    ?>
                    <div>
                        <?php
                        echo file_get_contents(get_template_directory() . '/assets/icons/blob (3).svg');
                        ?>
                    </div>
                </div>
                <h3 class="subtitle text-align--center">Organização de espaços</h3>
                <p class="paragraph text-align--center">Maximize o potencial do seu espaço com soluções inteligentes de organização. Transformamos ambientes desordenados em locais funcionais e práticos, proporcionando mais conforto, produtividade e tranquilidade no dia a dia.</p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>