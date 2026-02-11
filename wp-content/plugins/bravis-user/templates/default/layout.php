<?php
/**
 * The template for displaying logout text.
 *
 * @package Bravis User
 * @author Bravis-Themes Team
 * @since Bravis User 1.0.0
 */

if (! defined ( 'ABSPATH' )) {
	exit ();
}

global $bravis_user;

?>

<div class="pxl-user-form">
	<?php if(!empty($bravis_user['el_title'])) : ?>
		<div class="pxl-user-form-header">
			<h3><?php echo esc_attr( $bravis_user ['el_title'] ); ?></h3>
		</div>
	<?php endif; ?>
	<?php
		switch ($bravis_user['form_type']) {
			case 'login' :
				up_get_template_part ( $bravis_user['template'] . '/form', 'login' ); ?>
				<?php break;
			case 'register' :
				up_get_template_part ( $bravis_user['template'] . '/form', 'register' ); ?>
				<?php break;
		}
	?>
	<?php if($bravis_user ['other_page'] == 'yes' && !empty($bravis_user['label'])) : 
		$link = vc_build_link($bravis_user['link']);
		$a_href = '';
		$a_target = '';
		if ( strlen( $link['url'] ) > 0 ) {
		    $a_href = $link['url'];
		    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
		}
		?>
		<div class="pxl-user-form-footer">
			<?php echo esc_attr($bravis_user['label']); ?> <?php if(!empty($bravis_user['text_link'])) : ?><a href="<?php echo esc_url($a_href);?>" target="<?php  echo esc_attr($a_target); ?>"><?php echo esc_attr($bravis_user['text_link']); ?></a><?php endif; ?>
		</div>
	<?php endif; ?>
</div>