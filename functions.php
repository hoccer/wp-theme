<?php

/* load theme options */
include 'inc/theme-options.php';
$options = get_option('hoccer_theme_options');

load_theme_textdomain('hoccer', TEMPLATEPATH .'/languages');

/* Mobile Detect */
include 'inc/mobile_detect.php';

/* add scripts */
add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts() {
	$template = get_template_directory_uri();
	wp_enqueue_script('modernizr', $template.'/js/libs/modernizr-2.6.2.min.js', array(), null, false);

	wp_register_script('jquery-custom', $template.'/js/libs/jquery.1.7.1.min.js', array(), null, false);
	wp_enqueue_script('jquery-custom');

	wp_enqueue_script('jquery.fitvids', $template.'/js/libs/jquery.fitvids.js', array(), null, false);
	wp_enqueue_script('custom-script', $template.'/js/script.js', array(), null, true);
}

/* Load Google Web Fonts */
function load_fonts() {
	wp_register_style('pt-sans', 'http://fonts.googleapis.com/css?family=PT+Sans:400,700');
	wp_enqueue_style( 'pt-sans');
}
add_action('admin_enqueue_scripts', 'load_fonts');
add_action('wp_enqueue_scripts', 'load_fonts');

add_theme_support('post-thumbnails');
add_editor_style('editor-style.css');


function postimage($atts, $content = null) {
	extract(shortcode_atts(array(
		"size" => 'thumbnail'
	), $atts));
	$images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . get_the_id() );
	foreach( $images as $imageID => $imagePost )
	$fullimage = wp_get_attachment_image($imageID, $size, false);
	$imagedata = wp_get_attachment_image_src($imageID, $size, false);
	$width = ($imagedata[1]+2);
	$height = ($imagedata[2]+2);
	echo '<div class="postimage">'.$fullimage.'</div>';
}


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

	/**************************************************************************************/
	/*                                                                                    */
	/* <?php if( function_exists('wp_pagination_navi') ) {wp_pagination_navi();} ?>       */
	/*                                                                                    */
	/**************************************************************************************/


function wp_pagination_navi($num_page_links = 5, $min_max_offset = 2){

    global $wp_query;
   
    // Do not show paging on single pages
    if( !is_single() ){
               
        $current_page       = intval(get_query_var('paged'));
        $total_pages        = $wp_query->max_num_pages;
        $left_offset        = floor(($num_page_links - 1) / 2);
        $right_offset       = ceil(($num_page_links -1) / 2);
        if( empty($current_page) || $current_page ==  0 ) {
            $current_page = 1;
        }
        // More than one page -> render pagination
        if ( $total_pages > 1 ) {
       
            echo '<div class="pagination_navi">';
           
            if ( $current_page > 1 ) {
  echo '<a href="' .get_pagenum_link($current_page-1) .'" title="previous">&laquo;</a>';
            }
            for ( $i = 1; $i <= $total_pages; $i++) {
                if ( $i == $current_page ){
                    // Current page
                    echo '<a href="'.get_pagenum_link($current_page).'" class="current-page" title="page '.$i.'" >'.($current_page).'</a>';
                } else {
                    // Pages before and after the current page
                    if ( ($i >= ($current_page - $left_offset)) && ($i <= ($current_page + $right_offset)) ){
                        echo '<a href="'.get_pagenum_link($i).'" title="page '.$i.'" >'.$i.'</a>';
                    } elseif ( ($i <= $min_max_offset) || ($i > ($total_pages - $min_max_offset)) ) {
                        // Start and end pages with min_max_offset
                        echo '<a href="'.get_pagenum_link($i).'" title="page '.$i.'" >'.$i.'</a>';
                    } elseif ( (($i == ($min_max_offset + 1)) && ($i < ($current_page - $left_offset + 1))) ||
                               (($i == ($total_pages - $min_max_offset)) && ($i > ($current_page + $right_offset ))) ) {
                        // Dots after/before min_max_offset
                        echo '<span class="dots">...</span>';
                    }
                }
            }
            if ( $current_page != $total_pages ) {
                echo '<a href="'.get_pagenum_link($current_page+1).'" title="next">&raquo;</a>';
            }
            echo '</div>'; //Close pagination
        }
    }
}
?>