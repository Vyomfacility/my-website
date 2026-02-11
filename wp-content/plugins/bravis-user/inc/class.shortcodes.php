<?php
if (! defined ( 'ABSPATH' )) {
	exit (); // Exit if accessed directly
}
//$is_preview_mode = \Elementor\Plugin::$instance->preview->is_preview_mode();
/**
 *
 * @name Bravis User_shortcodes
 * @since 1.0.0
 */
if (! class_exists ( 'Bravis_User_Shortcodes' )) {
	class Bravis_User_Shortcodes {
		function __construct() {
			
			// shortcode login form.
			add_shortcode ( 'bravis-user-form', array (
					$this,
					'add_shortcode_bravis_user' 
			) );
		}
		
		/**
		 * display shortcode user press login form.
		 *
		 * @package Bravis User
		 * @version 1.0.0
		 */
		function add_shortcode_bravis_user($atts, $content = '') {
			global $bravis_user;
			
			// if options null.
			if (! $atts)
				$atts = array ();
				
				// default array.
			$atts = array_merge ( array (
					'el_title' => '',
					'other_page' => '',
					'label' => '',
					'text_link' => '',
					'link' => '',
					'template' => get_option ( 'bravis_user_layout', 'default' ),
					'form_type' => 'login',
					'is_logged' => 'profile',
					'is_logged_text' => esc_html__ ( "Logout", "bravis-user" ) 
			), $atts );
			
			// if template null.
			if (! $atts ['template']) {
				$atts ['template'] = 'default';
			}
			
			$bravis_user = $atts;
			
			ob_start();
			
			// if user logned.
			if (is_user_logged_in ()) {
				
				up_get_template_part ( $atts ['template'] . '/profile' );

			} else {
			
    			up_get_template_part ( $atts ['template'] . '/layout' );
			}

			return ob_get_clean();
		}
	}
	// start.
	new Bravis_User_Shortcodes ();
}
