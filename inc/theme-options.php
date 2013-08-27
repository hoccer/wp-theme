<?php
/* Theme options */

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

add_action('admin_init', 'hoccer_add_init');
function hoccer_add_init() {
	$file_dir = get_template_directory_uri();
	wp_enqueue_style('hoccerCss', $file_dir.'/inc/theme-options.css', false, '1.0', 'all');
	wp_enqueue_script('hoccerJs', $file_dir.'/inc/theme-options.js', false, '1.0', 'all');
}
function theme_options_init(){
	register_setting( 'hoccer_options', 'hoccer_theme_options', 'hoccer_validate_options' );
}

function theme_options_add_page() {
	add_theme_page('Theme-Options', 'Theme-Options', 'edit_theme_options', 'theme-options', 'hoccer_theme_options_page' );
}

function hoccer_theme_options_page() {
	global $select_options, $radio_options;
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false; ?>

		<?php screen_icon(); ?><h2><?php _e('Hoccer Theme-Options','hoccer'); ?></h2> 

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade">
			<p><strong><?php _e('Settings saved!','hoccer'); ?></strong></p>
		</div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'hoccer_options' ); ?>
			<?php $options = get_option( 'hoccer_theme_options' ); ?>

			<h3><?php _e('Front Page','hoccer'); ?></h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><?php _e('Hoccer XO Demo','hoccer'); ?></th>
					<td>
						<label for="hoccer_theme_options[xo-demo-show]">
							<input id="hoccer_theme_options[xo-demo-show]" type="checkbox" name="hoccer_theme_options[xo-demo-show]" value="1" <?php checked( '1', $options['xo-demo-show'] ); ?> /> <?php _e('show','hoccer'); ?> <span class="description"><?php _e('iPhone with Hoccer XO Screenshots','hoccer'); ?></span></td>
						</label>
					</td>
				</tr>
			</table>

			<!-- Submit -->
			<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save','hoccer'); ?>" /></p>
		</form>

<?php }

function hoccer_validate_options($input) {
	//$input['copyright'] = wp_filter_nohtml_kses( $input['copyright'] );
	return $input;
}

?>