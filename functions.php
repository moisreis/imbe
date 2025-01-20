<?php

/**
 * Enqueue custom fonts.
 *
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function enqueue_fonts()
{
    wp_enqueue_style('sans', get_template_directory_uri() . '/assets/fonts/satoshi/css/satoshi.css');
    wp_enqueue_style('serif', get_template_directory_uri() . '/assets/fonts/gambetta/css/gambetta.css');
}

add_action('wp_enqueue_scripts', 'enqueue_fonts');

/**
 * Enqueue the main stylesheet.
 *
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function enqueue_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

/**
 * Enqueue custom scripts.
 *
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
function enqueue_scripts()
{
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array('jquery'), '1.0', true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.js', array('jquery'), '1.0', true);
    wp_enqueue_script('loader', get_template_directory_uri() . '/js/loader.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
 */
function theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_setup');

/**
 * Remove emoji scripts and styles.
 *
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 * @link https://developer.wordpress.org/reference/functions/remove_action/
 */
function remove_actions()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}

add_action('init', 'remove_actions');

/**
 * Deregister default styles.
 *
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 * @link https://developer.wordpress.org/reference/functions/wp_dequeue_style/
 */
function deregister_styles()
{
    wp_dequeue_style('global-styles');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
}

add_action('wp_enqueue_scripts', 'deregister_styles', 100);

/**
 * Allow custom file uploads.
 *
 * @param array $mimes Mime types keyed by the file extension regex corresponding to those types.
 * @return array Modified mime types array.
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 * @link https://developer.wordpress.org/reference/hooks/upload_mimes/
 */
function allow_custom_uploads($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    $mimes['avif'] = 'image/avif';
    return $mimes;
}

add_filter('upload_mimes', 'allow_custom_uploads');

/**
 * This function register two slots to add menus, one for the website's header
 * and another one for the footer
 *
 * @author The WordPress Team
 * @see https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
register_nav_menus(
    array(
        'primary' => __('Header'),
        'secondary' => __('Footer'),
    )
);

/**
 * Add additional class to menu list items.
 *
 * @param array $classes The CSS classes that are applied to the menu item's `<li>` element.
 * @param object $item The current menu item.
 * @param object $args An object of wp_nav_menu() arguments.
 * @return array Modified CSS classes array.
 * @package Imbê
 * @version 1.0.0
 * @author Moisés Reis
 * @link https://developer.wordpress.org/reference/hooks/nav_menu_css_class/
 */
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
