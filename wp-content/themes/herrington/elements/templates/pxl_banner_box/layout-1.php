<?php 
if ( ! empty( $settings['link']['url'] ) ) {
    $widget->add_render_attribute( 'link', 'href', $settings['link']['url'] );

    if ( $settings['link']['is_external'] ) {
        $widget->add_render_attribute( 'link', 'target', '_blank' );
    }

    if ( $settings['link']['nofollow'] ) {
        $widget->add_render_attribute( 'link', 'rel', 'nofollow' );
    }
}
?>
<div class="pxl-banner pxl-banner1 ">
		<?php if(!empty($settings['banner_image']['id'])) :
			$img = pxl_get_image_by_size( array(
				'attach_id'  => $settings['banner_image']['id'],
				'thumb_size' => 'full',
			));
			$thumbnail = $img['thumbnail']; ?>
				<?php echo pxl_print_html($thumbnail); ?>
		<?php endif; ?>
		<h4 class="title-box">
			<?php echo pxl_print_html($settings['title']);?>
		</h4>
		<a <?php pxl_print_html($widget->get_render_attribute_string( 'link' )); ?>>
			<?php if (!empty($settings['button_text'])){
				 echo pxl_print_html($settings['button_text']);
			}else {
				echo pxl_print_html('Text','herrington');
			}?>
		</a>
</div>