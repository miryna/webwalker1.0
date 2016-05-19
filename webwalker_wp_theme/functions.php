<?php
/**
 * webwalker 1.0
 *  functions and definitions
 * Register 4  widget areas.
 * Register 6  menu areas.
 */
 
 	/* Translations can be added to the /languages/ directory.
	 ---------------------------------------*/
 function itera_setup() {
 
	load_theme_textdomain( 'itera', get_template_directory() . '/languages' );

}
 /*     add menu areas 
 ---------------------------*/
 function register_it_menus() {
 
	register_nav_menus( array(
		'main'   => __( 'Main menu', 'itera' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'itera' ),
		'top_left'   => __( 'Top left menu', 'itera' ),
		'top_left_a'   => __( 'Top left menu 2', 'itera' ),
		'top_right' => __( 'Top right menu', 'itera' ),
		'bottom' => __( 'Bottom menu', 'itera' ),
		
	) );	
}
if (function_exists('register_nav_menus'))
	{
     add_action( 'init', 'register_it_menus' );
}
 
 /*     add widget areas
 ---------------------------*/
function itera_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar Widget Area 1', 'itera' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the sidebar section of the site.', 'itera' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar Widget Area 2', 'itera' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears in the sidebar section of the site.',  'itera'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Widget Area 1', 'itera' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the content section of the site.',  'itera' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Widget Area 2', 'itera' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears in the content section of the site.', 'itera' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2><a href="#">More</a>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'itera_widgets_init' );

 /*     add scripts 
 ---------------------------*/
 
function itera_register_scripts() {

  wp_register_script(
    'jscustom',
    '/wp-content/themes/itera/js/jscustom.js',
    null,
    '0.9',
    false
  );
  
  wp_register_script(
    'jqcustom', 
    '/wp-content/themes/itera/js/jqcustom.js', 
    array('jquery'), 
    '0.9',
	true
  );  

}
add_action('init', 'itera_register_scripts');

 
function itera_enqueue_scripts(){

  if (!is_admin()):
    wp_enqueue_script('jscustom');
    wp_enqueue_script('jqcustom');
    wp_enqueue_script('jqcournercustom');
  endif; //!is_admin
}
add_action('wp_print_scripts', 'itera_enqueue_scripts');


 /*     add styles   
 -----------------------------*/
 
function itera_register_styles(){

 /* conditional comments */
 global $wp_styles;
 
 wp_register_style(
  'lteie6',
  '/wp-content/themes/itera/css/lteie6.css',
  null,
  '0.9'
); 
$wp_styles->add_data(
  'lteie6', 
  'conditional', 
  '(lte IE 6)' 
);
 
 wp_register_style(
  'ie7',
  '/wp-content/themes/itera/css/ie7.css',
  null,
  '0.9'
); 
$wp_styles->add_data(
  'ie7', 
  'conditional',  
  '( IE 7)' 
);
 
 wp_register_style(
  'ie8',
  '/wp-content/themes/itera/css/ie8.css',
  null,
  '0.9'
); 
$wp_styles->add_data(
  'ie8', 
  'conditional', 
  '( IE 8)' 
);
 
 wp_register_style(
  'gteie9',
  '/wp-content/themes/itera/css/gteie9.css',
  null,
  '0.9'
); 
$wp_styles->add_data(
  'gteie9',
  'conditional', 
  '(gte IE 9)' 
);
 
}
add_action('init', 'itera_register_styles');

function itera_enqueue_styles(){
  if (!is_admin()):
    wp_enqueue_style('gteie9'); 
    wp_enqueue_style('ie8'); 
    wp_enqueue_style('ie7'); 
    wp_enqueue_style('lteie6');
  endif;//!is_admin
}
add_action('wp_print_styles', 'itera_enqueue_styles');


