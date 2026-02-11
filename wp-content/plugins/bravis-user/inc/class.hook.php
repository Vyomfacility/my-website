<?php
/**
 * Define Bravis User hook
 *
 * @author Jax
 **/
add_action( 'pxl-user-form/form/login/after', 'up_hook_login_form_recaptcha' );

/**
 * Providing an implementation for 'up_hook_login_form_recaptcha'
 * to add Google recatcha to login form
 *
 * @author Jax
 */
function up_hook_login_form_recaptcha() {
    global $bravis_user;
    $bravis_user['template'] = (isset($bravis_user['template']) && $bravis_user['template'] != '')? $bravis_user['template'] : 'default';
    up_get_template_part( "{$bravis_user['template']}/recaptcha" );
}