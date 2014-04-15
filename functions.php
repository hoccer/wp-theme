<?php

/* load theme options */
include 'inc/theme-options.php';
$options = get_option('hoccer_theme_options');

load_theme_textdomain('hoccer', TEMPLATEPATH .'/languages');

/* Mobile Detect */
include 'inc/mobile_detect.php';

add_action('wp_enqueue_scripts', 'hoccer_fonts');
function hoccer_fonts() {
	wp_register_style('oblivion-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,400italic,700italic|Inconsolata:400|Vollkorn:400,400italic,700italic');
	wp_enqueue_style('oblivion-fonts');
}

/* add scripts */
add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts() {
	
	$template = get_template_directory_uri();
	
	wp_enqueue_script('modernizr', $template.'/js/libs/modernizr-2.6.2.min.js', array(), null, false);

	wp_enqueue_script('jquery');

	wp_enqueue_script('jquery.fitvids', $template.'/js/libs/jquery.fitvids.js', array(), null, false);
	wp_enqueue_script('jquery.easing', $template.'/js/libs/jquery.easing.min.js', array(), null, false);
	wp_enqueue_script('jquery.flexslider', $template.'/js/libs/jquery.flexslider.min.js', array(), null, false);
	wp_enqueue_script('custom-script', $template.'/js/script.js', array(), null, true);
}



add_theme_support('post-thumbnails');
add_editor_style('editor-style.css');


add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'main' => __('Top Navigation','hoccer'),
			'footer' => __('Footer Navigation','hoccer')
		)
	);
}
function fallback_menu() {
    wp_page_menu(
    	array(
    		'show_home' => __('Start','hoccer')
    	)
    );
}
/* add css class for li with submenu */
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function display_element($el, &$children, $max_depth, $depth = 0, $args, &$output) {
		$id = $this->db_fields['id'];
		if(isset($children[$el->$id])) $el->classes[] = 'has-children';
		parent::display_element($el, $children, $max_depth, $depth, $args, $output);
	}
}


/* Shortcodes */
/* Enable shortcodes in widget areas */
add_filter( 'widget_text', 'do_shortcode' );

/* Replace WP autop formatting */
if (!function_exists( "hoccer_remove_wpautop")) {
	function hoccer_remove_wpautop($content) { 
		$content = do_shortcode( shortcode_unautop( $content ) ); 
		$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content);
		return $content;
	}
}


/* Two Columns */
function hoccer_shortcode_two_columns_one( $atts, $content = null ) {
   return '<div class="two-columns-one">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one', 'hoccer_shortcode_two_columns_one' );

function hoccer_shortcode_two_columns_one_last( $atts, $content = null ) {
   return '<div class="two-columns-one last">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one_last', 'hoccer_shortcode_two_columns_one_last' );


/* Three Columns */
function hoccer_shortcode_three_columns_one($atts, $content = null) {
   return '<div class="three-columns-one">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_one', 'hoccer_shortcode_three_columns_one' );

function hoccer_shortcode_three_columns_one_last($atts, $content = null) {
   return '<div class="three-columns-one last">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_one_last', 'hoccer_shortcode_three_columns_one_last' );

function hoccer_shortcode_three_columns_two($atts, $content = null) {
   return '<div class="three-columns-two">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_two', 'hoccer_shortcode_three_columns_two' );

function hoccer_shortcode_three_columns_two_last($atts, $content = null) {
   return '<div class="three-columns-two last">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_two_last', 'hoccer_shortcode_three_columns_two_last' );


/* Four Columns */
function hoccer_shortcode_four_columns_one($atts, $content = null) {
   return '<div class="four-columns-one">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_one', 'hoccer_shortcode_four_columns_one' );

function hoccer_shortcode_four_columns_one_last($atts, $content = null) {
   return '<div class="four-columns-one last">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_one_last', 'hoccer_shortcode_four_columns_one_last' );

function hoccer_shortcode_four_columns_two($atts, $content = null) {
   return '<div class="four-columns-two">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_two', 'hoccer_shortcode_four_columns_two' );

function hoccer_shortcode_four_columns_two_last($atts, $content = null) {
   return '<div class="four-columns-two last">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_two_last', 'hoccer_shortcode_four_columns_two_last' );

function hoccer_shortcode_four_columns_three($atts, $content = null) {
   return '<div class="four-columns-three">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_three', 'hoccer_shortcode_four_columns_three' );

function hoccer_shortcode_four_columns_three_last($atts, $content = null) {
   return '<div class="four-columns-three last">' . hoccer_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_three_last', 'hoccer_shortcode_four_columns_three_last' );

/* Divide Text Shortcode */
function hoccer_shortcode_divider($atts, $content = null) {
   return '<div class="divider"></div>';
}
add_shortcode( 'divider', 'hoccer_shortcode_divider' );

function hoccer_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'link'	=> '#',
    'target' => '',
    'color'	=> '',
    'size'	=> '',
	 'form'	=> '',
	 'font'	=> '',
    ), $atts));

	$color = ($color) ? ' '.$color. '-btn' : '';
	$size = ($size) ? ' '.$size. '-btn' : '';
	$form = ($form) ? ' '.$form. '-btn' : '';
	$font = ($font) ? ' '.$font. '-btn' : '';
	$target = ($target == 'blank') ? ' target="_blank"' : '';

	$out = '<a' .$target. ' class="standard-btn' .$color.$size.$form.$font. '" href="' .$link. '"><span>' .do_shortcode($content). '</span></a>';

    return $out;
}
add_shortcode('button', 'hoccer_button');





add_action('init', 'hoccer_register_features', 0);
function hoccer_register_features() {
	register_post_type(
		'features',
		array(
			'description' => __('Features','hoccer'),
			'labels' => array(
				'name' => __('Features','hoccer'),
				'singular_name' => __('Feature','hoccer'),
				'add_new' => __('Add New','hoccer'),
				'add_new_item' => __('Add New Feature','hoccer'),
				'edit' => __('Edit','hoccer'),
				'edit_item' => __('Edit Feature','hoccer'),
				'new_item' => __('New Feature','hoccer'),
				'view' => __('View Features','hoccer')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'features',
				'with_front' => FALSE
			),
			'supports' => array(
				'title',
				'editor',
				'custom-fields'
			)
		)
	);
}

add_action('init', 'hoccer_register_slider', 0);
function hoccer_register_slider() {
	register_post_type(
		'slides',
		array(
			'description' => __('Slides','hoccer'),
			'labels' => array(
				'name' => __('Slides','hoccer'),
				'singular_name' => __('Slide','hoccer'),
				'add_new' => __('Add New','hoccer'),
				'add_new_item' => __('Add New Slide','hoccer'),
				'edit' => __('Edit','hoccer'),
				'edit_item' => __('Edit Slide','hoccer'),
				'new_item' => __('New Slide','hoccer'),
				'view' => __('View Slides','hoccer')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'slides',
				'with_front' => FALSE
			),
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			)
		)
	);
}
?>