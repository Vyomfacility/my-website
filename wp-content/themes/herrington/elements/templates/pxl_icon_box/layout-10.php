<div class="pxl-icon-box pxl-icon-box10 <?php echo esc_attr($settings['pxl_animate']); ?>" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
    <div class="paper">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <path d="M0 0L-1.48619e-06 34C-1.63103e-06 37.3137 2.68629 40 6 40L40 40L0 0Z" fill="white" />
            <path d="M0.499999 34C0.499998 37.0376 2.96243 39.5 6 39.5L38.793 39.5L0.5 1.20703L0.499999 34Z" stroke="#D9D9D9" stroke-opacity="0.6" />
        </svg>
    </div>
    <div class="pxl-item--inner ">

        <?php if ($settings['icon_type'] == 'icon' && !empty($settings['pxl_icon']['value'])) : ?>
            <div class="pxl-item--icon">
                <?php \Elementor\Icons_Manager::render_icon($settings['pxl_icon'], ['aria-hidden' => 'true', 'class' => ''], 'i'); ?>
            </div>
        <?php endif; ?>
        <?php if ($settings['icon_type'] == 'image' && !empty($settings['icon_image']['id'])) : ?>
            <div class="pxl-item--icon">
                <?php $img_icon  = pxl_get_image_by_size(array(
                    'attach_id'  => $settings['icon_image']['id'],
                    'thumb_size' => 'full',
                ));
                $thumbnail_icon    = $img_icon['thumbnail'];
                echo pxl_print_html($thumbnail_icon); ?>
            </div>
        <?php endif; ?>
        <<?php echo esc_attr($settings['title_tag']); ?> class="pxl-item--title el-empty"><?php echo pxl_print_html($settings['title']); ?></<?php echo esc_attr($settings['title_tag']); ?>>
        <div class="pxl-item--description el-empty"><?php echo pxl_print_html($settings['desc']); ?></div>
    </div>
</div>