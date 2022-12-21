<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'define', 'services']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);
    // function sun_dich_vu_init() {
    //     $labels = array(
    //         'name'                  => _x( 'Dịch vụ', 'Post type general name', 'textdomain' ),
    //         'singular_name'         => _x( 'Dịch vụ', 'Post type singular name', 'textdomain' ),
    //         'menu_name'             => _x( 'Dịch vụ', 'Admin Menu text', 'textdomain' ),
    //         'name_admin_bar'        => _x( 'Dịch vụ', 'Add New on Toolbar', 'textdomain' ),
    //         'add_new'               => ( 'Add New', 'textdomain' ),
    //         'add_new_item'          => ( 'Add New Dịch vụ', 'textdomain' ),
    //         'new_item'              => ( 'New Dịch vụ', 'textdomain' ),
    //         'edit_item'             => ( 'Edit Dịch vụ', 'textdomain' ),
    //         'view_item'             => ( 'View Dịch vụ', 'textdomain' ),
    //         'all_items'             => ( 'All Dịch vụ', 'textdomain' ),
    //         'search_items'          => ( 'Search Dịch vụ', 'textdomain' ),
    //         'parent_item_colon'     => ( 'Parent Dịch vụ:', 'textdomain' ),
    //         'not_found'             => ( 'No Dịch vụ found.', 'textdomain' ),
    //         'not_found_in_trash'    => ( 'No Dịch vụ found in Trash.', 'textdomain' ),
    //         'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
    //         'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    //         'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    //         'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    //         'archives'              => _x( 'Dịch vụ archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
    //         'insert_into_item'      => _x( 'Insert into Dịch vụ', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
    //         'uploaded_to_this_item' => _x( 'Uploaded to this Dịch vụ', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
    //         'filter_items_list'     => _x( 'Filter Dịch vụ list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
    //         'items_list_navigation' => _x( 'Dịch vụ list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
    //         'items_list'            => _x( 'Dịch vụ list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    //     );
    
     
    //     $args = array(
    //         'labels'             => $labels,
    //         'public'             => true,
    //         'publicly_queryable' => true,
    //         'show_ui'            => true,
    //         'show_in_menu'       => true,
    //         'query_var'          => true,
    //         'rewrite'            => array( 'slug' => 'service' ),
    //         'capability_type'    => 'post',
    //         'has_archive'        => true,
    //         'hierarchical'       => false,
    //         'menu_position'      => null,
    //         'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    //     );
     
    //     register_post_type( 'dich_vu', $args );
    // }
     
    // add_action( 'init', 'sun_dich_vu_init' );