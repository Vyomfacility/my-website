<?php 
if ( ! empty( $settings['item_link']['url'] ) ) {
	$widget->add_render_attribute( 'button', 'href', $settings['item_link']['url'] );

	if ( $settings['item_link']['is_external'] ) {
		$widget->add_render_attribute( 'button', 'target', '_blank' );
	}

	if ( $settings['item_link']['nofollow'] ) {
		$widget->add_render_attribute( 'button', 'rel', 'nofollow' );
	}
}
?>
<div class="pxl-info-box pxl-info-box2">
	<?php if ( ! empty( $settings['item_link']['url'] ) ) { ?>
		<a <?php pxl_print_html($widget->get_render_attribute_string( 'button' )); ?>>
		</a>
	<?php } ?>
	<?php if(!empty($settings['image']['id'])) :
		$img = pxl_get_image_by_size( array(
			'attach_id'  => $settings['image']['id'],
			'thumb_size' => 'full',
		));
		$thumbnail_url = $img['url'];
		?>
		<div class="pxl-item--image" style="background-image:url(<?php echo esc_url($thumbnail_url); ?>);">
		</div>
	<?php endif; ?>
	<?php if (!empty($settings['title'])) { ?>
		<div class="pxl-title"><?php echo pxl_print_html($settings['title']); ?></div>
	<?php } ?>
</div>