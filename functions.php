<?php
/**
 * znak functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package znak
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'znak_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function znak_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on znak, use a find and replace
		 * to change 'znak' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'znak', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'znak' ),
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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'znak_custom_background_args',
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
	}
endif;
add_action( 'after_setup_theme', 'znak_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function znak_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'znak_content_width', 640 );
}
add_action( 'after_setup_theme', 'znak_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function znak_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'znak' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'znak' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'znak_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function znak_scripts() {
	wp_enqueue_style( 'znak-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'znak-style', 'rtl', 'replace' );

	wp_enqueue_script( 'znak-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'znak_scripts' );

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

// Удаления ненужных создаваемых миниатюр
add_filter( 'intermediate_image_sizes', 'delete_intermediate_image_sizes' );
function delete_intermediate_image_sizes( $sizes ){
	// размеры которые нужно удалить
	return array_diff( $sizes, [
		'medium_large',
		'large',
		'1536x1536',
		'2048x2048',
	] );
}

// подключаем стили и скрипты 
	add_action( 'wp_enqueue_scripts', 'style_theme' );
	add_action( 'wp_footer', 'scripts_theme' );
	// регистрируем поддержку меню в нашей теме 
	add_action( 'after_setup_theme', 'theme_register_nav_menu');


// подключаем стили 
	function style_theme() {
	//Функция для подключения главного файла Style.css
		wp_enqueue_style ('style', get_stylesheet_uri()); 
	// ---Конец подключения главного файла Style.css
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
		wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800&display=swap' );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
	}
	// - конец подключения стилей

	// подключаем  скрипты 
	function scripts_theme() {
		wp_deregister_script( 'jquery');
		wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js' ); 
		wp_enqueue_script( 'main' );
		wp_enqueue_script( 'ajax', get_template_directory_uri() . '/assets/js/ajax.js' ); 	
	}
	// - конец подключения скриптов

	// регистрируем поддержку меню в нашей теме 
	function theme_register_nav_menu() {
		register_nav_menu( 'top', 'Меню в шапке' );
		register_nav_menu( 'bottom', 'Меню в подвале' );
		// автоматический title
		add_theme_support( 'title-tag' );
		//в wordpress появится фунция добавления превьюшки поста
		add_theme_support( 'post-thumbnails', array( 'post' ) );
		// регистрируем новый размер превьюшек постов
		add_image_size( 'post-thumb', 720, 700, true );
}

// Регистрируем свой тип записей
add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('clients', array(
		'labels'             => array(
			'name'               => 'Клиенты', // Основное название типа записи
			'singular_name'      => 'Клиент', // отдельное название записи типа Book
			'add_new'            => 'Добавить клиента',
			'add_new_item'       => 'Добавить нового клиента',
			'edit_item'          => 'Редактирование клиента',
			'new_item'           => 'Новый клиент',
			'view_item'          => 'Посмотреть клиента',
			'search_items'       => 'Искать клиента',
			'not_found'          =>  'Клиента не найдено',
			'not_found_in_trash' => 'В корзине клиента не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Клиенты'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'menu_icon'           => 'dashicons-businessperson', 
		'supports'           => array('title','thumbnail','custom-fields'),

	) );
	register_post_type('services', array(
		'labels'             => array(
			'name'               => 'Услуги', // Основное название типа записи
			'singular_name'      => 'Услуги', // отдельное название записи типа Book
			'add_new'            => 'Добавить услугу',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактирование услуги',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Искать услугу',
			'not_found'          =>  'Услуги не найдено',
			'not_found_in_trash' => 'В корзине услуги не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'menu_icon'           => 'dashicons-text-page', 
		'supports'           => array('title','editor','thumbnail','custom-fields'),

	) );
}

