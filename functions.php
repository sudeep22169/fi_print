<?php
/**
 * Theme functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Restaurantz
 */

if ( ! function_exists( 'fi_print_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function fi_print_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Restaurantz, use a find and replace
         * to change 'fi_print' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'fi_print', get_template_directory() . '/languages' );

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
        add_image_size( 'fi_print-post-thumb', 255, 258 );

        // This theme uses wp_nav_menu() in four location.
        register_nav_menus( array(
            'primary'  => esc_html__( 'Primary Menu', 'fi_print' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'fi_print_custom_background_args', array(
            'default-color' => 'dfdfd0',
            'default-image' => '',
        ) ) );

        // Set up the WordPress core custom header feature.
        add_theme_support( 'custom-header', apply_filters( 'fi_print_custom_header_args', array(
                'default-image' => '',
                'width'         => 1400,
                'height'        => 230,
                'flex-height'   => true,
                'header-text'   => false,
        ) ) );

        // Add WooCommerce Support.
        add_theme_support( 'woocommerce' );

        // Load Supports.
        // require get_template_directory() . '/inc/support.php';
    }
endif;

add_action( 'after_setup_theme', 'fi_print_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fi_print_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'fi_print_content_width', 640 );
}
add_action( 'after_setup_theme', 'fi_print_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fi_print_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'fi_print' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'fi_print' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Secondary Sidebar', 'fi_print' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'fi_print' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => sprintf( __( 'Extra Sidebar %d', 'fi_print' ), 1 ),
        'id'            => 'extra-sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => sprintf( __( 'Extra Sidebar %d', 'fi_print' ), 2 ),
        'id'            => 'extra-sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => sprintf( __( 'Extra Sidebar %d', 'fi_print' ), 3 ),
        'id'            => 'extra-sidebar-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => sprintf( __( 'Extra Sidebar %d', 'fi_print' ), 4 ),
        'id'            => 'extra-sidebar-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'fi_print_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fi_print_scripts() {

    wp_enqueue_style( 'fi-plugin-min', get_template_directory_uri().'/assets/css/plugins.min.css');
    wp_enqueue_style( 'fi-print-main', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style( 'fi-print-custom', get_stylesheet_directory_uri().'/assets/css/custom.css');

    // Enqueue all the js files of theme

    wp_enqueue_script( 'fi-print-plugin-min', get_template_directory_uri().'/assets/js/plugins.min.js', array('jquery'), '1.0.0', TRUE);
    wp_enqueue_script( 'fi-print-app-min', get_template_directory_uri().'/assets/js/app.min.js', array('jquery'), '1.0.0', TRUE);
    wp_enqueue_script( 'fi-print-custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0.0', TRUE);

    wp_localize_script( 'fi_print-custom', 'Restaurantz_Screen_Reader_Text', array(
        'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'fi_print' ) . '</span>',
        'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'fi_print' ) . '</span>',
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'fi_print_scripts' );

/**
 * Load init.
 */
//require get_template_directory() . '/inc/init.php';

if ( class_exists( 'ReduxFramework' ) && file_exists( get_template_directory()  . '/themeoption-config.php' ) ) {

    require_once(get_template_directory() . '/themeoption-config.php' );
}

if ( ! function_exists( 'redux_disable_dev_mode_plugin' ) ) {
        function redux_disable_dev_mode_plugin( $redux ) {
            if ( $redux->args['opt_name'] != 'redux_demo' ) {
                $redux->args['dev_mode'] = false;
                $redux->args['forced_dev_mode_off'] = false;
            }
        }

        add_action( 'redux/construct', 'redux_disable_dev_mode_plugin' );
}



/**
 * Increment wp_nav_menu li custom class numbering
 * @description: Tweaked code found at link below for inremental counting
 * @source: http://www.codefleet.net/add-the-first-and-last-css-class-to-the-top-level-navigation-menu-items/
 */
if ( ! function_exists( 'fi_print_custom_nav_class' ) ) {
	
	function fi_print_custom_nav_class( $classes, $item ){

        $classes[] = 'nav-item';
        return $classes;
    }
}

add_filter('nav_menu_css_class' , 'fi_print_custom_nav_class' , 10 , 2);

if ( ! function_exists( 'fi_print_special_nav_class' ) ) {

	function fi_print_special_nav_class( $classes, $item ){
	     if ( in_array('current-menu-item', $classes) ){
	             $classes[] = 'active ';
	     }
	     return $classes;
	}	

}

add_filter('nav_menu_css_class' , 'fi_print_special_nav_class' , 10 , 2);


function vantage_panels_panels_row_style_attributes( $attr, $style) {
  // echo '<pre>';
  // print_r($style);
  // echo '</pre>';
  if ( !array_key_exists('row_stretch', $style)) {
     // We'll use this to prevent the jump when loading.
        $attr['class'][] = 'container';
  }

    return $attr;

}
add_filter('siteorigin_panels_row_style_attributes', 'vantage_panels_panels_row_style_attributes', 10, 2);

/**
 * Load init.
 */
require get_template_directory() . '/inc/init.php';
require(  get_template_directory() . '/inc/aquaresizer.php' );
