<?php
/**
 * revisor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package revisor
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'revisor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function revisor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on revisor, use a find and replace
		 * to change 'revisor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'revisor', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'revisor' ),
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
				'revisor_custom_background_args',
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
add_action( 'after_setup_theme', 'revisor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function revisor_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'revisor_content_width', 640 );
}
add_action( 'after_setup_theme', 'revisor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function revisor_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'revisor' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'revisor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'revisor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function revisor_scripts() {
	wp_enqueue_style( 'revisor-fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), _S_VERSION);
	wp_enqueue_style( 'revisor-font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', array(), _S_VERSION);
	wp_enqueue_style( 'revisor-font-nunito', 'https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap', array(), _S_VERSION);
	wp_enqueue_style( 'revisor-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'revisor-mdbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'revisor-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'revisor-uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/css/uikit.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'revisor-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'revisor-media', get_template_directory_uri() . '/assets/css/media.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'revisor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'revisor-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'revisor-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'revisor-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'revisor-mdbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'revisor-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'revisor-uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'revisor-uikit-icons', 'https://cdn.jsdelivr.net/npm/uikit@3.5.4/dist/js/uikit-icons.min.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'revisor_scripts' );

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

function alabait_custom_logo() {
echo '
	<style type="text/css">
	#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	display:inline-block;
	background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/img/wp_navbar_revisor.png) !important;
	background-position: 0 0;
	width:20px !important;
	height: 20px !important;
	color:rgba(0, 0, 0, 0);
	}
	#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: 0 0;
	}
	</style>
';
}
add_action('wp_before_admin_bar_render', 'alabait_custom_logo');

function remove_footer_admin () {
echo '<p>Тема Ревизор разработана <a href="https://iceslam.ru" target="_blank">IceSlam</a> в компании <a href="https://alianscompany.ru" target="_blank">Альянс+</a>. Работает на WordPress</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
// File does not exist... return an error.
return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
// File exists... require it.
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}


// Site settings for contacts and social networks links

function mytheme_customize_register( $wp_customize ) {

$wp_customize->add_section(

    'data_site_section',

    array(
        'title' => 'Контактная информация',
        'capability' => 'edit_theme_options',
        'description' => "Телефоны, мессенджеры, адреса компании, социальные сети и другое..."
    )
);


$wp_customize->add_setting(

    'revisor_address',

    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(

    'revisor_address_control',

    array(
        'type' => 'text',
        'label' => "Адрес компании",
        'section' => 'data_site_section',

        'settings' => 'revisor_address'
    )
);

$wp_customize->add_setting(

    'revisor_address_link',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_address_link_control',

    array(
        'type' => 'text',
        'label' => "Ссылка на карту с организацией в Яндекс",
        'section' => 'data_site_section',

        'settings' => 'revisor_address_link'
    )
);

$wp_customize->add_setting(

    'revisor_email',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_email_control',

    array(
        'type' => 'text',
        'label' => "Электронная почта (EMail)",
        'section' => 'data_site_section',

        'settings' => 'revisor_email'
    )
);

$wp_customize->add_setting(

    'revisor_phone',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_phone_control',

    array(
        'type' => 'text',
        'label' => "Телефон",
        'section' => 'data_site_section',

        'settings' => 'revisor_phone'
    )
);

$wp_customize->add_setting(

    'revisor_vk',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_vk_control',

    array(
        'type' => 'text',
        'label' => "ВКонтакте",
        'section' => 'data_site_section',

        'settings' => 'revisor_vk'
    )
);

$wp_customize->add_setting(

    'revisor_fb',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_fb_control',

    array(
        'type' => 'text',
        'label' => "Facebook",
        'section' => 'data_site_section',

        'settings' => 'revisor_fb'
    )
);

$wp_customize->add_setting(

    'revisor_ok',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_ok_control',

    array(
        'type' => 'text',
        'label' => "Одноклассники",
        'section' => 'data_site_section',

        'settings' => 'revisor_ok'
    )
);

$wp_customize->add_setting(

    'revisor_mailru',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_mailru_control',

    array(
        'type' => 'text',
        'label' => "Mail.ru",
        'section' => 'data_site_section',

        'settings' => 'revisor_mailru'
    )
);

$wp_customize->add_setting(

    'revisor_tw',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_tw_control',

    array(
        'type' => 'text',
        'label' => "Twitter",
        'section' => 'data_site_section',

        'settings' => 'revisor_tw'
    )
);

$wp_customize->add_setting(

    'revisor_inst',

    array(
        'default' => '',
        'type' => 'option'
    )
);

$wp_customize->add_control(

    'revisor_inst_control',

    array(
        'type' => 'text',
        'label' => "Instagram",
        'section' => 'data_site_section',

        'settings' => 'revisor_inst'
    )
);

}
add_action( 'customize_register', 'mytheme_customize_register' );

add_action( 'rest_api_init', 'slug_register_yoast_seo_meta' );

function slug_register_yoast_seo_meta() {
    register_rest_field( 'post',
        '_yoast_wpseo_title',
        array(
            'get_callback'    => 'get_seo_meta_field',
            'update_callback' => null,
            'schema'          => null,
        )
    );
    register_rest_field( 'post',
        '_yoast_wpseo_metadesc',
        array(
            'get_callback'    => 'get_seo_meta_field',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

function get_seo_meta_field( $object, $field_name, $request ) {
    return get_post_meta( $object[ 'id' ], $field_name, true );
}