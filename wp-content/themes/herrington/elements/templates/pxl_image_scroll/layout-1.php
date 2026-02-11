<div class="pxl-image-scroll">
    <?php
    if (isset($settings['image_list']) && !empty($settings['image_list']) && count($settings['image_list'])): ?>
        <div class=" pxl-image_list <?php echo esc_attr($settings['pxl_animate']); ?>" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
            <div class="wrap-image">
                <div class="before-image wow fadeInUp" data-wow-delay="700ms"></div>
                <?php
                foreach ($settings['image_list'] as $key => $image_list):
                    $image = isset($image_list['image']) ? $image_list['image'] : '';
                    $id_scroll = isset($image_list['id_scroll']) ? $image_list['id_scroll'] : '';
                ?>
                    <?php if (!empty($image['id'])) {
                        $img = pxl_get_image_by_size(array(
                            'attach_id'  => $image['id'],
                            'thumb_size' => 'full',
                            'class' => 'no-lazyload',
                        ));
                        $thumbnail = $img['thumbnail'];
                        $thumbnail_url = $img['url'];
                    ?>
                        <div class="pxl-item--image <?php echo esc_attr($id_scroll); ?>" style="background-image:url(<?php echo esc_url($thumbnail_url); ?>);">
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
            <div class="wrap-content">
                <?php
                foreach ($settings['image_list'] as $key => $image_list):
                    $text = isset($image_list['text']) ? $image_list['text'] : '';
                    $id_scroll = isset($image_list['id_scroll']) ? $image_list['id_scroll'] : '';
                ?>
                    <div class="title <?php echo esc_attr($id_scroll); ?>"><?php echo pxl_print_html($image_list['text']); ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</div>