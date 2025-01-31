<?php
wp_footer();
?>
<footer>
    <a class="is-centered-a" href="<?php echo get_home_url(); ?>">
        <?php
        if (has_custom_logo()) {
        ?>
            <img class="logo" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>"
                alt="<?php echo get_bloginfo('name'); ?>">
        <?php
        } else {
        ?>
            <h5 class="footer-logo" id="logo"><?php echo get_bloginfo('name'); ?></h5>
        <?php
        }
        ?>
    </a>
    <div>
        <?php if (have_rows('redes_sociais', 'option')) : ?>
            <?php while (have_rows('redes_sociais', 'option')) : the_row(); ?>
                <a href="<?php the_sub_field('url'); ?>">
                    <button class="button--link has-border"><?php the_sub_field('nome'); ?></button>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div>
        <?php if (have_rows('contato', 'option')) : ?>
            <?php
            $contacts = []; // Store all items in an array
            while (have_rows('contato', 'option')) : the_row();
                $contacts[] = get_sub_field('informacao');
            endwhile;
            echo '<p>' . implode('   |   ', $contacts) . '</p>'; // Join array with ' | ' separator
            ?>
        <?php endif; ?>

    </div>
</footer>
<div id="copyright">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</div>

</body>
<!-- ENDS `<body>`-->

</html>