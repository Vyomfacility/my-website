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
if(isset($settings['testimonial']) && !empty($settings['testimonial']) && count($settings['testimonial'])): ?>
    <div class="pxl-swiper-slider pxl-testimonial-carousel pxl-testimonial-carousel3" <?php if($drap !== false) : ?>data-cursor-drap="<?php echo esc_html('DRAG', 'herrington'); ?>"<?php endif; ?>>
        <div class="pxl-carousel-inner">

            <div <?php pxl_print_html($widget->get_render_attribute_string( 'carousel' )); ?>>
                <div class="pxl-swiper-wrapper">
                    <?php foreach ($settings['testimonial'] as $key => $value):
                        $title = isset($value['title']) ? $value['title'] : '';
                        $position = isset($value['position']) ? $value['position'] : '';
                        $desc = isset($value['desc']) ? $value['desc'] : '';
                        $image = isset($value['image']) ? $value['image'] : '';
                        $star = isset($value['star']) ? $value['star'] : '';
                        $number = isset($value['number']) ? $value['number'] : '';
                        $desc_number = isset($value['desc_number']) ? $value['desc_number'] : '';
                        ?>
                        <div class="pxl-swiper-slide">
                            <div class="pxl-item--inner wow <?php echo esc_attr($settings['pxl_animate']); ?>" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
                                <div class="pxl-item--holder ">
                                    <div class="meta-top">
                                        <?php if(!empty($image['id'])) { 
                                            $img = pxl_get_image_by_size( array(
                                                'attach_id'  => $image['id'],
                                                'thumb_size' => '90x90',
                                                'class' => 'no-lazyload',
                                            ));
                                            $thumbnail = $img['thumbnail'];?>
                                            <div class="pxl-item--avatar ">
                                                <?php echo wp_kses_post($thumbnail); ?>
                                            </div>
                                        <?php } ?>
                                        <span class="quote">“</span>
                                    </div>
                                    <div class="pxl-item--desc el-empty"><?php echo pxl_print_html($desc); ?></div>
                                    <div class="pxl-item--meta">
                                        <h3 class="pxl-item--title el-empty"><?php echo pxl_print_html($title); ?></h3>
                                        <div class="pxl-item--star pxl-item--<?php echo esc_attr($star); ?>-star">
                                            <svg  width="800px" version="1.1" id="Capa_1" viewBox="0 0 53.867 53.867">
                                                <polygon  points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
                                            </svg>
                                            <svg  width="800px" version="1.1" id="Capa_1" viewBox="0 0 53.867 53.867">
                                                <polygon  points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
                                            </svg>
                                            <svg  width="800px" version="1.1" id="Capa_1" viewBox="0 0 53.867 53.867">
                                                <polygon  points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
                                            </svg>
                                            <svg  width="800px" version="1.1" id="Capa_1" viewBox="0 0 53.867 53.867">
                                                <polygon  points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
                                            </svg>
                                            <svg  width="800px" version="1.1" id="Capa_1" viewBox="0 0 53.867 53.867">
                                                <polygon  points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798 10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
                                            </svg>
                                        </div>
                                        <div class="pxl-item--position el-empty"><?php echo pxl_print_html($position); ?></div>
                                    </div>
                                    <?php if (!empty($number) || !empty($desc_number)): ?>
                                    <div class="meta-bottom">
                                        <?php if (!empty($number)): ?>
                                            <div class="number">
                                                <?php echo pxl_print_html($number); ?>
                                            </div>
                                        <?php endif ?>
                                        <?php if (!empty($desc_number)): ?>
                                            <p class="des-number"> <?php echo pxl_print_html($desc_number); ?> </p>
                                        <?php endif ?>
                                    </div>
                                <?php endif ?>
                            </div>
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
        <div class="pxl-swiper-arrow-wrap style-1">
            <div class="pxl-swiper-arrow pxl-swiper-arrow-prev" tabindex="0" role="button" aria-label="previous slide" aria-controls="swiper-wrapper-5f10c24cfcd53105d">
                <svg width="20" height="38" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path stroke="#000" id="svg_3" d="m20.21811,38.88319l-19.7456,-20.72803" opacity="undefined" stroke-linecap="undefined" stroke-linejoin="undefined" fill="none"></path>
                        <path stroke="#000" id="svg_5" d="m20.00751,-0.49215l-19.55631,19.26847" opacity="undefined" stroke-linecap="undefined" stroke-linejoin="undefined" fill="none"></path>
                    </g>
                </svg>
            </div>
            <div class="pxl-swiper-arrow pxl-swiper-arrow-next" tabindex="0" role="button" aria-label="next slide" aria-controls="swiper-wrapper-5f10c24cfcd53105d">
                <svg width="20" height="38" xmlns="http://www.w3.org/2000/svg">
                 <g>
                    <path stroke="#000" id="svg_3" d="m20.21811,38.88319l-19.7456,-20.72803" opacity="undefined" stroke-linecap="undefined" stroke-linejoin="undefined" fill="none"></path>
                    <path stroke="#000" id="svg_5" d="m20.00751,-0.49215l-19.55631,19.26847" opacity="undefined" stroke-linecap="undefined" stroke-linejoin="undefined" fill="none"></path>
                </g>
            </svg>
        </div>
    </div>
<?php endif; ?>
  </div>
<?php endif; ?>

</div>
<?php endif; ?>
