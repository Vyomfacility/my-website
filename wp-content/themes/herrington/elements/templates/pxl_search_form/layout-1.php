<div class="pxl-search-form1">
		<select class="wpcf7-form-control wpcf7-select pxl-select-hidden" aria-invalid="false" name="menu-516">
			<?php foreach ($settings['lists'] as $key => $value): ?>
				<?php if(!empty($value['content'])) : ?>
					<option value="<?php echo esc_attr($value['content'])?>"><?php echo pxl_print_html($value['content'])?></option>
				<?php endif; ?>
			<?php endforeach; ?>
		</select>
	<a href="<?php echo esc_url(home_url( '/' )).'?s=' ?>" class="pxl-search-submit btn btn-glossy">
		<?php echo pxl_print_html($settings['button_text']); ?>
		<svg height="512" viewBox="0 0 20 20" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m12 2-1.4 1.4 5.6 5.6h-16.2v2h16.2l-5.6 5.6 1.4 1.4 8-8z" fill="rgb(0,0,0)"/></svg>
	</a>
</div>