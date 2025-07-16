<?php
/**
 * Omicron functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Omicron
 */

if ( ! function_exists( 'omicron_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function omicron_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Omicron, use a find and replace
         * to change 'omicron' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'omicron', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'omicron' ),
                'footer-menu' => esc_html__( 'Footer Menu', 'omicron' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'omicron_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        /**
         * Add support for Gutenberg.
         *
         * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
         */
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'responsive-embeds' );

        /**
         * Add support for WooCommerce.
         */
        add_theme_support( 'woocommerce' );
    }
endif;
add_action( 'after_setup_theme', 'omicron_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function omicron_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'omicron_content_width', 640 );
}
add_action( 'after_setup_theme', 'omicron_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function omicron_scripts() {
    wp_enqueue_style( 'omicron-style', get_template_directory_uri() . '/assets/css/dist/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'aos-style', get_template_directory_uri() . '/node_modules/aos/dist/aos.css', array(), '2.3.4', 'all' );

    wp_enqueue_script( 'aos-script', get_template_directory_uri() . '/node_modules/aos/dist/aos.js', array(), '2.3.4', true );
    wp_enqueue_script( 'omicron-main-script', get_template_directory_uri() . '/assets/js/main.js', array('embla-carousel'), '1.0.0', true );
    wp_add_inline_script( 'aos-script', 'AOS.init();' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_page_template( 'template-products.php' ) || is_page_template( 'template-products-alt.php' ) || is_page_template( 'template-products-alt-2.php' ) ) {
        wp_enqueue_script( 'embla-carousel', 'https://unpkg.com/embla-carousel/embla-carousel.umd.js', array(), '8.0.0', true );
        wp_enqueue_script( 'embla-carousel-autoplay', 'https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js', array('embla-carousel'), '8.0.0', true );
    }

    if ( is_page_template( 'template-vademecum.php' ) ) {
        wp_localize_script( 'omicron-main-script', 'omicron_ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    }
}
add_action( 'wp_enqueue_scripts', 'omicron_scripts' );

function filter_products_callback() {
    $category = $_POST['category'];
    $presentations = isset($_POST['presentations']) ? $_POST['presentations'] : array();
    $sale_conditions = isset($_POST['sale_conditions']) ? $_POST['sale_conditions'] : array();

    $tax_query = array('relation' => 'AND');

    if ( ! empty( $category ) ) {
        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $category,
        );
    }

    if ( ! empty( $presentations ) ) {
        $tax_query[] = array(
            'taxonomy' => 'pa_presentacion',
            'field'    => 'slug',
            'terms'    => $presentations,
        );
    }

    if ( ! empty( $sale_conditions ) ) {
        $tax_query[] = array(
            'taxonomy' => 'pa_condicion-de-venta',
            'field'    => 'slug',
            'terms'    => $sale_conditions,
        );
    }

    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'tax_query'      => $tax_query,
    );

    $loop = new WP_Query( $args );

    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
            wc_get_template_part( 'content', 'product' );
        endwhile;
    } else {
        echo __( 'No products found' );
    }

    wp_reset_postdata();
    die();
}
add_action( 'wp_ajax_filter_products', 'filter_products_callback' );
add_action( 'wp_ajax_nopriv_filter_products', 'filter_products_callback' );

class Omicron_Nav_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= "<a href='" . $item->url . "' class='text-gray-900 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300'>" . $item->title;
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</a>";
    }
}

class Omicron_Mobile_Nav_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $output .= "<a href='" . $item->url . "' class='block text-gray-900 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white px-3 py-2 rounded-md text-base font-medium transition-all duration-300'>" . $item->title;
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</a>";
    }
}
?>
