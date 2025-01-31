<?php

/**
 * Calls the site's custom logo and verifies if it exists
 *
 * @version 1.0.0
 * @author Moisés Reis
 */
?>

<!--BELOW IS `custom_logo`-->
<a href="<?php echo get_home_url(); ?>">
    <?php
    if (has_custom_logo()) {
    ?>
        <img class="logo" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>"
            alt="<?php echo get_bloginfo('name'); ?>">
    <?php
    } else {
    ?>
        <h5 class="logo" id="logo"><?php echo get_bloginfo('name'); ?></h5>
    <?php
    }
    ?>
</a>