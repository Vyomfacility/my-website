<?php

if( !defined( 'ABSPATH' ) )
	exit; 

class Herrington_Admin_Templates extends Herrington_Base{

	public function __construct() {
		$this->add_action( 'admin_menu', 'register_page', 20 );
	}
 
	public function register_page() {
		add_submenu_page(
			'pxlart',
		    esc_html__( 'Templates', 'herrington' ),
		    esc_html__( 'Templates', 'herrington' ),
		    'manage_options',
		    'edit.php?post_type=pxl-template',
		    false
		);
	}
}
new Herrington_Admin_Templates;
