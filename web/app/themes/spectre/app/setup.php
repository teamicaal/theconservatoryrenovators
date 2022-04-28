<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
     register_nav_menus([
       'primary_navigation' => __('Primary Navigation', 'wraith'),
       'toolbar'            => __('Toolbar', 'wraith'),
       'footer_quick_links' => __('Footer Quick Links', 'wraith'),
       'footer_products'    => __('Footer Products', 'wraith')
     ]);

    /**
     * Disable the default block patterns.
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable wide alignment support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
     */
    add_theme_support('align-wide');

    /**
     * Enable responsive embed support.
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
 add_action('widgets_init', function () {
     $config = [
         'before_widget' => '<section class="widget %1$s %2$s">',
         'after_widget' => '</section>',
         'before_title' => '<h3>',
         'after_title' => '</h3>'
     ];

     register_sidebar([
         'name' => __('Primary', 'wraith'),
         'id'   => 'sidebar-primary'
     ] + $config);

     register_sidebar([
         'name' => __('Footer', 'wraith'),
         'id'   => 'sidebar-footer'
     ] + $config);

     register_sidebar([
         'name' => __('Footer 1', 'wraith'),
         'id'   => 'sidebar-footer-1'
     ] + $config);

     register_sidebar([
         'name' => __('Footer 2', 'wraith'),
         'id'   => 'sidebar-footer-2'
     ] + $config);

     register_sidebar([
         'name' => __('Footer 3', 'wraith'),
         'id'   => 'sidebar-footer-3'
     ] + $config);
 });

 # Remove Gutenberg Block Library CSS from frontend
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library');
}, 200);

/**
  * Require Partials
  */
require_once('custom-post-types.php');
require_once('custom-taxonomies.php');
require_once('image-sizes.php');
require_once('Forms/forms.php');
require_once('login.php');

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme',
		'menu_title'	=> 'Theme',
		'menu_slug' 	=> 'theme',
		'redirect'		=> false
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Brand Settings',
		'menu_title'	=> 'Brand Settings',
		'parent_slug'	=> 'theme',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Global Content',
		'menu_title'	=> 'Global Content',
		'parent_slug'	=> 'theme',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> 'SEO',
		'menu_title'	=> 'SEO',
		'parent_slug'	=> 'theme',
	));
}

# Remove Default Admin Bar Margins
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

# Custom excerpt length
add_filter( 'excerpt_length', function($length) {
  return 20;
} );
