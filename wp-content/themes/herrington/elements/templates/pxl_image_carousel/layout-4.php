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
    'center_slide'                    => 'true', 
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
if(isset($settings['image_4']) && !empty($settings['image_4']) && count($settings['image_4'])): ?>
    <div id="pxl-gallery-<?php echo esc_attr($pxl_g_id); ?>" class="pxl-swiper-slider pxl-image-carousel pxl-image-carousel4 <?php echo esc_attr($settings['style']); ?>" <?php if($drap !== false) : ?>data-cursor-drap="<?php echo esc_html('DRAG', 'herrington'); ?>"<?php endif; ?>>
        <div class="pxl-carousel-inner">
            <div <?php pxl_print_html($widget->get_render_attribute_string( 'carousel' )); ?>>
                <div class="pxl-swiper-wrapper">
                    <?php foreach ($settings['image_4'] as $key => $value):
                        $image_l4 = isset($value['image_l4']) ? $value['image_l4'] : '';
                        $sub_title_3 = isset($value['sub_title_3']) ? $value['sub_title_3'] : '';
                        $title_3 = isset($value['title_3']) ? $value['title_3'] : '';
                        $desc_3 = isset($value['desc_3']) ? $value['desc_3'] : '';
                        $link_key = $widget->get_repeater_setting_key( 'btn_link', 'value', $key );
                        if ( ! empty( $value['btn_link']['url'] ) ) {
                            $widget->add_render_attribute( $link_key, 'href', $value['btn_link']['url'] );
                            if ( $value['btn_link']['is_external'] ) {
                                $widget->add_render_attribute( $link_key, 'target', '_blank' );
                            }

                            if ( $value['btn_link']['nofollow'] ) {
                                $widget->add_render_attribute( $link_key, 'rel', 'nofollow' );
                            }
                        }
                        $link_attributes = $widget->get_render_attribute_string( $link_key );
                        ?>
                        <div class="pxl-swiper-slide">
                            <div class="pxl-item--inner <?php echo esc_attr($settings['pxl_animate']); ?> wow" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
                                <div class="icon-box">
                                </div>
                                <div class="content-top">
                                    <?php if(!empty($image_l4['id'])) { 
                                        $img = pxl_get_image_by_size( array(
                                            'attach_id'  => $image_l4['id'],
                                            'thumb_size' => $image_size,
                                            'class' => 'no-lazyload',
                                        ));
                                        $thumbnail = $img['thumbnail']; ?>
                                        <div class="pxl-item--image ">
                                            <?php echo wp_kses_post($thumbnail); ?>
                                        </div>
                                    <?php } ?>

                                    <div class="content-right">
                                        <div class="pxl-item--sub-title">    
                                            <?php echo pxl_print_html($sub_title_3); ?>
                                        </div>
                                        <h3 class="pxl-item--title">    
                                            <a <?php echo implode( ' ', [ $link_attributes ] ); ?>>
                                                <?php echo pxl_print_html($title_3); ?>
                                            </a>
                                        </h3>
                                        <a class="btn_link" <?php echo implode( ' ', [ $link_attributes ] ); ?>>
                                            <i class="caseicon-long-arrow-right-three"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="pxl-item--description">    
                                    <?php echo pxl_print_html($desc_3); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <?php if($pagination !== false ): ?>
            <div class="pxl-swiper-bottom pxl-flex-middle">
                <?php if($pagination !== false): ?>
                    <div class="pxl-swiper-dots style-1"></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
<?php endif; ?>
