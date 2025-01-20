<?php

/**
 * Reusable part that displays a WordPress menu
 * 
 * @version 1.0.0
 * @author Moisés Reis
 */
?>

<!-- BELOW IS `wp_nav_menu` -->
<nav>
    <?php

    /**
     * Renders a navigation menu based on the specified menu location.
     *
     * Retrieves the menu location and list item class from query variables.
     * If a menu is registered at the specified location, it renders the menu
     * with the given parameters. Otherwise, it displays a message indicating
     * that no menu is available at the specified location.
     *
     * @package Imbê
     * @version 1.0.0
     *
     * @var string $menu_location The location identifier for the menu.
     * @var string $li_class The CSS class to apply to the list items.
     */
    $menu_location = get_query_var('menu_location', '');
    $li_class = get_query_var('li_class', 'button button--ghost');

    if (has_nav_menu($menu_location)) :
        wp_nav_menu(array(
            'theme_location' => $menu_location,
            'menu_id' => 'header-menu',
            'container' => 'div',
            'add_li_class' => $li_class,
        ));
    else :
        echo '<p>Não há menu nesta localização</p>';
    endif;
    ?>
</nav>