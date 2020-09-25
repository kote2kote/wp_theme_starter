<?php
/**
 * theme_starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme_starter
 */

if ( ! function_exists( 'theme_starter_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theme_starter_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on theme_starter, use a find and replace
		 * to change 'theme_starter' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'theme_starter', get_template_directory() . '/languages' );

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
		//
		// function add_thumbnail_size() {
		// 	add_theme_support( 'post-thumbnails' );
		// 	add_image_size('test_100x100', 100, 100, true);
		// }
		// add_action( 'after_setup_theme', 'add_thumbnail_size' );
		// add_image_size('thumb-tb', 481);
		// add_image_size('thumb-pc', 768);
		// add_image_size('thumb-sm', 640);
		// add_image_size('thumb-md', 768);
		// add_image_size('thumb-lg', 1024);
		// add_image_size('thumb-xl', 1280);
		// add_image_size('thumb-wide', 1600);

		// ===================================================
		// 共通メニューの設定(管理画面でここの設定項目が表示される)
		// ===================================================
		register_nav_menus( array(
			'header' => esc_html__( '共通ヘッダー', 'theme_starter' ), // theme_starterはテーマID
			'sidebar' => esc_html__( 'サイドバー', 'theme_starter' ),
			'footer' => esc_html__( '共通フッター', 'theme_starter' ),
			'sample_menu' => esc_html__( 'サンプル用', 'theme_starter' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'theme_starter_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

add_action( 'after_setup_theme', 'theme_starter_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_starter_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'theme_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme_starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme_starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_starter_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_starter_scripts() {

  //キャッシュ対策
  date_default_timezone_set('Asia/Tokyo');
  $id = date("YmdHis"); ;

	//CSS
	// wp_enqueue_style( 'theme_starter-bluma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css', array(), $id );

	// if(is_page("hohoemi")) {
	// 	wp_enqueue_style( 'theme_starter-style', get_template_directory_uri() . '/hohoemi_style.css', array(), $id );
	// } else if(is_page("rinn")) {
  //   wp_enqueue_style( 'theme_starter-style', get_template_directory_uri() . '/rinn_style.css', array(), $id );
	// } else if(is_page("onigiri")) {
  //   wp_enqueue_style( 'theme_starter-style', get_template_directory_uri() . '/onigiri_style.css', array(), $id );
	// } else if(is_page("ver2")) {
  //   wp_enqueue_style( 'theme_starter-style', get_template_directory_uri() . '/cording_rule_ver2_style.css', array(), $id );
	// } else if(is_page("test")) {
  //   wp_enqueue_style( 'theme_starter-style', get_template_directory_uri() . '/test_style.css', array(), $id );
	// } else {
	// 	wp_enqueue_style( 'theme_starter-style', get_stylesheet_uri(), array(), $id );
	// }
	wp_enqueue_style( 'theme_starter-style', get_stylesheet_uri(), array(), $id ); // style.css

  //JS
  
	wp_enqueue_script( 'theme_starter-vue-js', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js', array(), $id, true); // dev
	// wp_enqueue_script( 'theme_starter-vue-js', 'https://cdn.jsdelivr.net/npm/vue', array(), $id, true); // prod
	// wp_enqueue_script( 'theme_starter-skrollr-js', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', array(), $id, true);
	// wp_enqueue_script( 'theme_starter-picturefill-js', get_template_directory_uri(). '/assets/vendors/picturefill.js/picturefill.js', array(), $id, true); // ディレクトリサンプル
	wp_enqueue_script( 'theme_starter-picturefill-js', 'https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.3/picturefill.js', array(), $id, true);
  // wp_enqueue_script( 'theme_starter-object-fit-ie11-js', 'https://cdn.jsdelivr.net/npm/fitie@1.0.0/dist/fitie.js', array(), $id, true);

  // if(is_page("hohoemi")) {
	// 	wp_enqueue_script( 'theme_starter-script-js', get_template_directory_uri(). '/assets/js/hohoemi.min.js', array(), $id, true);
	// } else if(is_page("rinn")) {
	// 	wp_enqueue_script( 'theme_starter-script-js', get_template_directory_uri(). '/assets/js/rinn.min.js', array(), $id, true);
	// } else if(is_page("onigiri")) {
	// 	wp_enqueue_script( 'theme_starter-script-js', get_template_directory_uri(). '/assets/js/onigiri.min.js', array(), $id, true);
	// } else if(is_page("ver2")) {
  //   wp_enqueue_script( 'theme_starter-script-js', get_template_directory_uri(). '/assets/js/ver2.min.js', array(), $id, true);
	// } else if(is_page("test")) {
  //   wp_enqueue_script( 'theme_starter-script-js', get_template_directory_uri(). '/assets/js/test.min.js', array(), $id, true);
	// } else {
	// 	wp_enqueue_script( 'theme_starter-jquery-js', get_template_directory_uri(). '/assets/vendors/jquery/jquery-3.3.1.js', array(), $id, true);
	// 	wp_enqueue_script( 'theme_starter-script-js', get_template_directory_uri(). '/assets/dist/js/script.js', array(), $id, true);
	// 	wp_enqueue_script( 'theme_starter-carousel-js', get_template_directory_uri(). '/assets/js/carousel.js', array(), $id, true);
	// 	wp_enqueue_script( 'theme_starter-carousel-vendorjs', get_template_directory_uri(). '/assets/vendors/slick-carousel/slick.min.js', array(), $id, true);
	// }

	// wp_enqueue_script( 'theme_starter-navigation', get_template_directory_uri() . '/js/navigation.js', array(), $id, true );
	// wp_enqueue_script( 'theme_starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), $id, true );
	wp_enqueue_script( 'theme_starter-script-js', get_template_directory_uri(). '/assets/dist/js/script.js', array(), $id, true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_starter_scripts' );


// ===================================================
// メニューの設定
// ===================================================
 // idを削除
function remove_menu_id( $id ){
	return $id = array();
}
add_filter('nav_menu_item_id', 'remove_menu_id', 10);

// classを削除
function remove_menu_class( $classes ){ 
	return $classes = array();
}
add_filter('nav_menu_css_class', 'remove_menu_class', 10, 2);

// aria-current属性を削除
function remove_menu_aria_current( $atts, $item, $args ){
	unset ( $atts['aria-current'] );
	return $atts;
}
add_filter('nav_menu_link_attributes', 'remove_menu_aria_current', 11, 5);


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
