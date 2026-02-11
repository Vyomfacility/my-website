 <?php
 $col_xs = $widget->get_setting('col_xs', '');
 $col_sm = $widget->get_setting('col_sm', '');
 $col_md = $widget->get_setting('col_md', '');
 $col_lg = $widget->get_setting('col_lg', '');
 $col_xl = $widget->get_setting('col_xl', '');
 $col_xxl = $widget->get_setting('col_xxl', '');
 if($col_xxl == 'inherit') {
    $col_xxl = $col_xl;
}
$slides_to_scroll = $widget->get_setting('slides_to_scroll');
$arrows = $widget->get_setting('arrows', false);  
$pagination = $widget->get_setting('pagination', false);
$pagination_type = $widget->get_setting('pagination_type', 'bullets');
$pause_on_hover = $widget->get_setting('pause_on_hover', false);
$autoplay = $widget->get_setting('autoplay', false);
$autoplay_speed = $widget->get_setting('autoplay_speed', '5000');
$infinite = $widget->get_setting('infinite', false);  
$speed = $widget->get_setting('speed', '500');
$drap = $widget->get_setting('drap', false);  
$opts = [
    'slide_direction'               => 'horizontal',
    'slide_percolumn'               => 1, 
    'slide_mode'                    => 'slide', 
    'slides_to_show'                => (int)$col_xl,
    'slides_to_show_xxl'            => (int)$col_xxl, 
    'slides_to_show_lg'             => (int)$col_lg, 
    'slides_to_show_md'             => (int)$col_md, 
    'slides_to_show_sm'             => (int)$col_sm, 
    'slides_to_show_xs'             => (int)$col_xs, 
    'slides_to_scroll'              => (int)$slides_to_scroll,
    'arrow'                         => (bool)$arrows,
    'pagination'                    => (bool)$pagination,
    'pagination_type'               => $pagination_type,
    'autoplay'                      => (bool)$autoplay,
    'pause_on_hover'                => (bool)$pause_on_hover,
    'pause_on_interaction'          => true,
    'delay'                         => (int)$autoplay_speed,
    'loop'                          => (bool)$infinite,
    'speed'                         => (int)$speed
];
$widget->add_render_attribute( 'carousel', [
    'class'         => 'pxl-swiper-container',
    'dir'           => is_rtl() ? 'rtl' : 'ltr',
    'data-settings' => wp_json_encode($opts)
]);
$pxl_g_id = uniqid();
$image_size = !empty($settings['img_size']) ? $settings['img_size'] : 'full';
if(isset($settings['image_3']) && !empty($settings['image_3']) && count($settings['image_3'])): ?>
    <div id="pxl-gallery-<?php echo esc_attr($pxl_g_id); ?>" class="pxl-swiper-slider pxl-image-carousel pxl-image-carousel3 <?php echo esc_attr($settings['style']); ?>" <?php if($drap !== false) : ?>data-cursor-drap="<?php echo esc_html('DRAG', 'herrington'); ?>"<?php endif; ?>>
        <div class="pxl-carousel-inner">
            <div <?php pxl_print_html($widget->get_render_attribute_string( 'carousel' )); ?>>
                <div class="pxl-swiper-wrapper">
                    <?php foreach ($settings['image_3'] as $key => $value):
                        $image_3 = isset($value['image_3']) ? $value['image_3'] : '';
                        $image_3_2 = isset($value['image_3_2']) ? $value['image_3_2'] : '';
                        $title_2 = isset($value['title_2']) ? $value['title_2'] : '';
                        $btn_text = isset($value['btn_text']) ? $value['btn_text'] : '';
                        $desc = isset($value['desc']) ? $value['desc'] : '';
                        $btn_link = isset($value['btn_link']) ? $value['btn_link'] : '';
                        $link_key_2 = $widget->get_repeater_setting_key( 'btn_link', 'value', $key );
                        if ( ! empty( $value['btn_link']['url'] ) ) {
                            $widget->add_render_attribute( $link_key_2, 'href', $value['btn_link']['url'] );

                            if ( $value['btn_link']['is_external'] ) {
                                $widget->add_render_attribute( $link_key_2, 'target', '_blank' );
                            }

                            if ( $value['btn_link']['nofollow'] ) {
                                $widget->add_render_attribute( $link_key_2, 'rel', 'nofollow' );
                            }
                        }
                        $link_attributes_2 = $widget->get_render_attribute_string( $link_key_2 );
                        ?>
                        <div class="pxl-swiper-slide">
                            <div class="pxl-item--inner <?php echo esc_attr($settings['pxl_animate']); ?> wow" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
                                <?php if(!empty($image_3['id'])) { 
                                    $img = pxl_get_image_by_size( array(
                                        'attach_id'  => $image_3['id'],
                                        'thumb_size' => $image_size,
                                        'class' => 'no-lazyload',
                                    ));
                                    $thumbnail = $img['thumbnail'];
                                    ?>
                                    <div class="pxl-item--image ">
                                        <?php echo wp_kses_post($thumbnail); ?>
                                        <?php if(!empty($image_3_2['id'])) { 
                                            $img2 = pxl_get_image_by_size( array(
                                                'attach_id'  => $image_3_2['id'],
                                                'thumb_size' => $image_size,
                                                'class' => 'no-lazyload',
                                            ));
                                            $thumbnail_2 = $img2['thumbnail'];
                                            echo wp_kses_post($thumbnail_2);
                                        }
                                        ?>
                                    </div>
                                    <h3 class="pxl-item--title">    
                                        <a <?php echo implode( ' ', [ $link_attributes_2 ] ); ?> >
                                            <?php echo pxl_print_html($title_2); ?>
                                        </a>
                                    </h3>
                                    <p class="pxl-item--description">    
                                        <?php echo pxl_print_html($desc); ?>
                                    </p>
                                    <a <?php echo implode( ' ', [ $link_attributes_2 ] ); ?> class="btn-more btn btn-glossy">
                                        <?php echo pxl_print_html($btn_text); ?>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <?php if($pagination !== false || $arrows !== false): ?>
            <div class="pxl-swiper-bottom pxl-flex-middle">
                <?php if($pagination !== false): ?>
                    <div class="pxl-swiper-dots style-1"></div>
                <?php endif; ?>
                <?php if($arrows !== false): ?>
                    <div class="pxl-swiper-arrow-wrap <?php echo esc_attr($settings['arr_style']); ?>">
                        <div class="pxl-swiper-arrow pxl-swiper-arrow-prev"><i class="fas fa-arrow-left rtl-icon"></i></div>
                        <div class="pxl-swiper-arrow pxl-swiper-arrow-next"><i class="fas fa-arrow-right rtl-icon"></i></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
<?php endif; ?>
