<?php

/**
 * This file renders the single project page
 * 
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 */
get_header(); ?>
<!-- BELOW IS `/<?php echo get_permalink() ?>` -->
<main>
    <!-- <section id="header" class="grid--2 width--full padding-x--8-extra-large padding-y--2-extra-large">
        <div id="projeto--title" class="flex flex-column flex-column--start align--end border--right gap--extra-small width--full padding-right--2-extra-large">
            <h2 class="title"><?php // echo get_the_title() ?></h2>
        </div>
        <div id="projeto--text" class="flex flex-row flex-row--start align--center padding-left--2-extra-large flex-wrap gap--small">
            <?php
            /**
             * Retrieves and displays the 'descricao' custom field for the current post.
             *
             * This code snippet fetches the value of the 'descricao' custom field using the
             * Advanced Custom Fields (ACF) function `get_field()` and echoes it. It is intended
             * to be used within a WordPress theme template file to display the description of a project.
             *
             * @package Imbê
             * @author Moisés Reis
             * @version 1.0.0
             */
            $descricao = get_field('descricao');

            // Display the description on the front-end
            echo $descricao;
            ?>
        </div>
    </section> -->
    <section id="features" class="grid--2 width--full padding-x--8-extra-large padding-y--2-extra-large">
        <div id="features--list" class="flex flex-column flex-column--end align--end border--right gap--medium width--full padding-right--2-extra-large">
            <div class="flex flex-column flex-column--end align--end">
                <p class="paragraph text-align--right">Cliente</p>
                <h3 class="subtitle text-align--right">
                    <?php
                    /**
                     * Retrieves and displays the 'cliente' custom field for the current post.
                     *
                     * This code snippet fetches the value of the 'cliente' custom field using the
                     * Advanced Custom Fields (ACF) function `get_field()` and echoes it. It is intended
                     * to be used within a WordPress theme template file to display the description of a project.
                     *
                     * @package Imbê
                     * @author Moisés Reis
                     * @version 1.0.0
                     */
                    $cliente = get_field('cliente');
                    echo $cliente;
                    ?>
                </h3>
            </div>
            <div class="flex flex-column flex-column--end align--end">
                <p class="paragraph text-align--right">Localização</p>
                <h3 class="subtitle text-align--right">
                    <?php
                    /**
                     * Retrieves and displays the 'localizacao' custom field for the current post.
                     *
                     * This code snippet fetches the value of the 'localizacao' custom field using the
                     * Advanced Custom Fields (ACF) function `get_field()` and echoes it. It is intended
                     * to be used within a WordPress theme template file to display the description of a project.
                     *
                     * @package Imbê
                     * @author Moisés Reis
                     * @version 1.0.0
                     */
                    $localizacao = get_field('localizacao');
                    echo $localizacao;
                    ?>
                </h3>
            </div>
            <div class="flex flex-column flex-column--end align--end">
                <p class="paragraph text-align--right">Tamanho</p>
                <h3 class="subtitle text-align--right">
                    <?php
                    /**
                     * Retrieves and displays the 'tamanho' custom field for the current post.
                     *
                     * This code snippet fetches the value of the 'tamanho' custom field using the
                     * Advanced Custom Fields (ACF) function `get_field()` and echoes it. It is intended
                     * to be used within a WordPress theme template file to display the description of a project.
                     *
                     * @package Imbê
                     * @author Moisés Reis
                     * @version 1.0.0
                     */
                    $tamanho = get_field('tamanho');
                    echo $tamanho . 'm²';
                    ?>
                </h3>
            </div>
        </div>
        <div id="features--badges" class="flex flex-row flex-row--start align--center padding-left--2-extra-large flex-wrap gap--small">
            <?php
            $servicos = get_field('servicos');
            if ($servicos): ?>
                <?php foreach ($servicos as $servico): ?>
                    <span class="badge badge--primary"><?php echo esc_html($servico->name); ?></span>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="gallery" id="my-gallery">
        <?php
        $images = get_field('fotos');
        if ($images): ?>
            <?php foreach ($images as $image): ?>
                <!-- BELOW IS `/<?php echo $image['url'] ?>` -->
                <div class="gallery-item">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <p><?php echo esc_html($image['caption']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>