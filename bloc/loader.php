<?php

/**
 * Handles the loader
 *
 * @author Moisés Reis
 * @version 1.0.0
 */
?>
<div id="loader" class="loader">
    <div class="loader--icon">
        <?php
        echo file_get_contents(get_template_directory() . '/assets/icons/loader.svg');
        ?>
    </div>
</div>