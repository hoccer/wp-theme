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
if (!function_exists( "scapegoat_remove_wpautop")) {
	function scapegoat_remove_wpautop($content) { 
		$content = do_shortcode( shortcode_unautop( $content ) ); 
		$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content);
		return $content;
	}
}


/* Two Columns */
function scapegoat_shortcode_two_columns_one( $atts, $content = null ) {
   return '<div class="two-columns-one">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one', 'scapegoat_shortcode_two_columns_one' );

function scapegoat_shortcode_two_columns_one_last( $atts, $content = null ) {
   return '<div class="two-columns-one last">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'two_columns_one_last', 'scapegoat_shortcode_two_columns_one_last' );


/* Three Columns */
function scapegoat_shortcode_three_columns_one($atts, $content = null) {
   return '<div class="three-columns-one">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_one', 'scapegoat_shortcode_three_columns_one' );

function scapegoat_shortcode_three_columns_one_last($atts, $content = null) {
   return '<div class="three-columns-one last">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_one_last', 'scapegoat_shortcode_three_columns_one_last' );

function scapegoat_shortcode_three_columns_two($atts, $content = null) {
   return '<div class="three-columns-two">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_two', 'scapegoat_shortcode_three_columns_two' );

function scapegoat_shortcode_three_columns_two_last($atts, $content = null) {
   return '<div class="three-columns-two last">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'three_columns_two_last', 'scapegoat_shortcode_three_columns_two_last' );


/* Four Columns */
function scapegoat_shortcode_four_columns_one($atts, $content = null) {
   return '<div class="four-columns-one">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_one', 'scapegoat_shortcode_four_columns_one' );

function scapegoat_shortcode_four_columns_one_last($atts, $content = null) {
   return '<div class="four-columns-one last">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_one_last', 'scapegoat_shortcode_four_columns_one_last' );

function scapegoat_shortcode_four_columns_two($atts, $content = null) {
   return '<div class="four-columns-two">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_two', 'scapegoat_shortcode_four_columns_two' );

function scapegoat_shortcode_four_columns_two_last($atts, $content = null) {
   return '<div class="four-columns-two last">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_two_last', 'scapegoat_shortcode_four_columns_two_last' );

function scapegoat_shortcode_four_columns_three($atts, $content = null) {
   return '<div class="four-columns-three">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_three', 'scapegoat_shortcode_four_columns_three' );

function scapegoat_shortcode_four_columns_three_last($atts, $content = null) {
   return '<div class="four-columns-three last">' . scapegoat_remove_wpautop($content) . '</div>';
}
add_shortcode( 'four_columns_three_last', 'scapegoat_shortcode_four_columns_three_last' );

/* Divide Text Shortcode */
function scapegoat_shortcode_divider($atts, $content = null) {
   return '<div class="divider"></div>';
}
add_shortcode( 'divider', 'scapegoat_shortcode_divider' );

?>