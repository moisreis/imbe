<!DOCTYPE html>

<!--

 __  .___  ___. .______    _______
|  | |   \/   | |   _  \  |   ____|
|  | |  \  /  | |  |_)  | |  |__
|  | |  |\/|  | |   _  <  |   __|
|  | |  |  |  | |  |_)  | |  |____
|__| |__|  |__| |______/  |_______|

-->

<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- BELOW IS WordPress `<head>` -->
    <?php wp_head(); ?>
    <?php
    get_template_part('bloc/imports');
    ?>
</head>

<!-- BELOW IS `<body>`-->

<body>
    <div>
        <?php
        get_template_part('bloc/loader');
        ?>
        <header>
            <div>
                <?php
                get_template_part('bloc/logo');
                ?>
                <div class="is-hidden--on-mobile">
                    <?php
                    set_query_var('menu_location', 'primary');
                    get_template_part('bloc/navigation');
                    ?>
                </div>
                <div class="is-hidden--on-desktop">
                    <button id="trigger-button" class="button button--link"></button>
                    <div class="mobile-menu" id="mobile-menu">
                        <?php
                        set_query_var('menu_location', 'primary');
                        get_template_part('bloc/navigation');
                        ?>
                    </div>
                </div>
            </div>
        </header>