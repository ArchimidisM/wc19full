<?php
/**
 * Core functions file of the theme.
 * Χρησιμοποιούμε αυτό το αρχείο το οποίο διαβάζεται από το WordPress και
 * σε αυτό δηλώνουμε functions για την παρουσίαση του theme , για παράδειγμα
 * register navigation menus,
 * register stylesheets and scripts
 * functions που χρησιμοποιούνται παντού στο theme διότι το αρχείο αυτο είναι χρησιμοποιεί το autoload.
 *
 * Αν τώρα θέλετε να έχετε πολλά διαφορετικά theme related function μία καλή πρόταση είναι είτε να τις βάλετε σε
 * ένα plugin είτε να τις διαχωρίσετε σε πολλά μικρά αρχεία.
 *
 * @url https://wpshout.com/wordpress-functions-php/
 */

/*
 * Δήλωση μεταβλητών constants για τα theme assets.
 * Workshop Helper
 * Κώδικας 1Α
 */

define('WC_THEME_CSS', trailingslashit(get_template_directory_uri()) . 'assets/css/');
define('WC_THEME_JS', trailingslashit(get_template_directory_uri()) . 'assets/js/');

/*
 * Style enqueuing
 * Workshop Helper
 * Κώδικας 1B
 */

if (!function_exists('wc_styles')):
    function wc_styles()
    {
        wp_enqueue_style('normalize', WC_THEME_CSS . 'normalize.css', '', '8.0.1', 'all');
        wp_enqueue_style('flexboxgrid', WC_THEME_CSS . 'flexboxgrid.css', '', '1.0.0', 'all');
        wp_enqueue_style('open-sans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=greek', '', '1.0.0', 'all');
        wp_enqueue_style('wc-style', get_stylesheet_uri(), '', time(), 'all');
    }

    add_action('wp_enqueue_scripts', 'wc_styles');
endif;

/*
 * Script enqueuing
 * Workshop Helper
 * Κώδικας 1B
 */
if (!function_exists('wc_scripts')):
    function wc_scripts()
    {
        wp_enqueue_script('wc-main-script', WC_THEME_JS . 'theme.js', array('jquery'), time(), true);
    }

    add_action('wp_enqueue_scripts', 'wc_scripts');
endif;

/*
 * After setup theme
 * Workshop Helper
 * Κώδικας 1Γ
 */

if (!function_exists('wc_theme_setup')):
    function wc_theme_setup()
    {
        add_theme_support('post-thumbnails');
        add_image_size('featured', 1280, 450, true);
        add_image_size('blog-list', 400, 220, true);
        register_nav_menus(
            array(
                'wc-primary' => __('Top Menu', 'wc'),
            )
        );
        add_theme_support('custom-logo', array(
            'height' => 50,
            'width' => 200,
            'flex-height' => true,
            'flex-width' => true
        ));
    }

    add_action('after_setup_theme', 'wc_theme_setup');
endif;
/*
 * Filter για το excerpt
 * Workshop Helper
 * Κώδικας 2Γ
 */
if (!function_exists('wc_excerpt_length')):
    function wc_excerpt_length(){
        return 10;
    }
add_filter('excerpt_length','wc_excerpt_length');
endif;
/*
 * Filter για το excerpt characters
 * Workshop Helper
 * Κώδικας 2Γ
 */
if (!function_exists('wc_excerpt_end')):
    function wc_excerpt_end(){
        return '...';
    }
add_filter('excerpt_more','wc_excerpt_end');
endif;

/**
 * Δήλωση sidebar
 * WorkShop Helper
 * Κώδικας 3Β
 */
add_action( 'widgets_init', 'wc_widgets_init' );
function wc_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'wc' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
