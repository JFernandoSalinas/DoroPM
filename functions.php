<?php
//Add my styling and Bootstrap styling
function enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
    wp_register_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
    wp_enqueue_style('Font_Awesome');
    wp_register_style( 'ionicons', 'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' );
    wp_enqueue_style('ionicons');
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles');
//add my scripts along with other Libraries like jquery, bootstrap
function enqueue_scripts() {
    wp_enqueue_script( 'theme_scripts', get_template_directory_uri() . '/js/themeScripts.js', array('jquery'));
    wp_enqueue_script( 'jqslim', get_template_directory_uri() . '/js/vendor/jquery-3.3.1.slim.min.js' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/vendor/popper.min.js' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_script('ionicons', 'https://unpkg.com/ionicons@4.1.2/dist/ionicons.js');
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts');

//Add Featured Images to pages
add_theme_support( 'post-thumbnails' );
add_image_size( 'wpse73058', 700, 9999, false );

//Add Logo support
function theme_prefix_setup() {

	add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//Add Menu Support
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'mobile-menu' => __( 'Mobile Menu' ),
      'extra-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * Register our Homepage and Sidebar widgetized area.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home widget area',
		'id'            => 'home_widget',
		'before_widget' => '<div class="widget-container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget_title">',
		'after_title'   => '</h2>',
	) );

  register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'default_right_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="sidebar title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * Register all custom widgets.
 */
function custom_widgets_init() {
	include_once( dirname( __FILE__ ) . '/inc/widgets/class-widget-features.php' );
	register_widget( 'DoroPM_Features' );
  include_once( dirname( __FILE__ ) . '/inc/widgets/class-widget-image_banner.php' );
	register_widget( 'DoroPM_Image_Banner' );
  include_once( dirname( __FILE__ ) . '/inc/widgets/class-widget-call-to-action.php' );
	register_widget( 'DoroPM_Call_To_Action' );
}
add_action( 'widgets_init', 'custom_widgets_init', 20 );

/**
* add shortcode support for widgets
*/
add_filter('widget_text', 'do_shortcode');
