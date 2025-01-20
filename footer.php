<?php
wp_footer();
?>
<footer>
    <div>
        <?php
        get_template_part('bloc/logo');
        ?>
    </div>
    <div>
        <?php if (have_rows('redes_sociais', 'option')) : ?>
            <?php while (have_rows('redes_sociais', 'option')) : the_row(); ?>
                <a href="<?php the_sub_field('url'); ?>">
                    <button class="button--link"><?php the_sub_field('nome'); ?></button>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div>
        <?php if (have_rows('contato', 'option')) : ?>
            <?php while (have_rows('contato', 'option')) : the_row(); ?>
                <p><?php the_sub_field('informacao'); ?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</footer>
<div id="copyright">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</div>

</body>
<!-- ENDS `<body>`-->

</html>