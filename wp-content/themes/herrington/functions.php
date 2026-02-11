<?php
/**
 * Theme functions: init, enqueue scripts and styles, include required files and widgets.
 *
 * @package Bravis-Themes
 * @since Herrington 1.0
 */

if(!defined('DEV_MODE')){ define('DEV_MODE', true); }

if(!defined('THEME_DEV_MODE_ELEMENTS') && is_user_logged_in()){
    define('THEME_DEV_MODE_ELEMENTS', true);
}
 
require_once get_template_directory() . '/inc/classes/class-main.php';

if ( is_admin() ){ 
	require_once get_template_directory() . '/inc/admin/admin-init.php'; }
 
/**
 * Theme Require
*/
herrington()->require_folder('inc');
herrington()->require_folder('inc/classes');
herrington()->require_folder('inc/theme-options');
herrington()->require_folder('template-parts/widgets');
if(class_exists('Woocommerce')){
    herrington()->require_folder('woocommerce');
}
