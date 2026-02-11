<?php
$col_xs = $widget->get_setting('col_xs', '');
$col_sm = $widget->get_setting('col_sm', '');
$col_md = $widget->get_setting('col_md', '');
$col_lg = $widget->get_setting('col_lg', '');
$col_xl = $widget->get_setting('col_xl', '');
$col_xxl = $widget->get_setting('col_xxl', '');
if ($col_xxl == 'inherit') {
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
$widget->add_render_attribute('carousel', [
    'class'         => 'pxl-swiper-container',
    'dir'           => is_rtl() ? 'rtl' : 'ltr',
    'data-settings' => wp_json_encode($opts)
]);
if (isset($settings['testimonial']) && !empty($settings['testimonial']) && count($settings['testimonial'])): ?>
    <div class="pxl-swiper-slider pxl-testimonial-carousel pxl-testimonial-carousel5" <?php if ($drap !== false) : ?>data-cursor-drap="<?php echo esc_html('DRAG', 'herrington'); ?>" <?php endif; ?>>
        <div class="pxl-carousel-inner">

            <div <?php pxl_print_html($widget->get_render_attribute_string('carousel')); ?>>
                <div class="pxl-swiper-wrapper">
                    <?php foreach ($settings['testimonial'] as $key => $value):
                        $title = isset($value['title']) ? $value['title'] : '';
                        $position = isset($value['position']) ? $value['position'] : '';
                        $desc = isset($value['desc']) ? $value['desc'] : '';
                        $image = isset($value['image']) ? $value['image'] : '';
                    ?>
                        <div class="pxl-swiper-slide">
                            <div class="pxl-item--inner wow <?php echo esc_attr($settings['pxl_animate']); ?>" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
                                <?php if (!empty($image['id'])) {
                                    $img = pxl_get_image_by_size(array(
                                        'attach_id'  => $image['id'],
                                        'thumb_size' => 'full',
                                        'class' => 'no-lazyload',
                                    ));
                                    $thumbnail = $img['url']; ?>
                                    <div class="pxl-item--image" style="background-image: url(<?php echo esc_url($thumbnail); ?>);">
                                    </div>
                                <?php } ?>
                                <div class="pxl-item--meta">
                                    <div class="pxl-item--desc el-empty"><?php echo pxl_print_html($desc); ?></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="20" viewBox="0 0 26 20" fill="none">
                                        <path d="M2.30854 18.2262C0.806459 16.6308 0 14.8415 0 11.9408C0 6.83667 3.58312 2.26188 8.79375 0L10.096 2.00958C5.2325 4.64042 4.28167 8.05437 3.9025 10.2069C4.68562 9.80146 5.71083 9.66 6.71562 9.75333C9.34646 9.99687 11.4202 12.1567 11.4202 14.8415C11.4202 16.1952 10.8824 17.4934 9.92523 18.4507C8.96802 19.4079 7.66975 19.9456 6.31604 19.9456C4.75125 19.9456 3.255 19.231 2.30854 18.2262ZM16.8919 18.2262C15.3898 16.6308 14.5833 14.8415 14.5833 11.9408C14.5833 6.83667 18.1665 2.26188 23.3771 0L24.6794 2.00958C19.8158 4.64042 18.865 8.05437 18.4858 10.2069C19.269 9.80146 20.2942 9.66 21.299 9.75333C23.9298 9.99687 26.0035 12.1567 26.0035 14.8415C26.0035 16.1952 25.4658 17.4934 24.5086 18.4507C23.5513 19.4079 22.2531 19.9456 20.8994 19.9456C19.3346 19.9456 17.8383 19.231 16.8919 18.2262Z" fill="#121C27" />
                                    </svg>
                                    <h3 class="pxl-item--title el-empty"><?php echo pxl_print_html($title); ?></h3>
                                    <div class="pxl-item--position el-empty"><?php echo pxl_print_html($position); ?></div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <?php if ($pagination !== false || $arrows !== false): ?>
            <div class="pxl-swiper-arrow-wrap ">
                <div class="pxl-swiper-arrow pxl-swiper-arrow-prev">
                    <svg width="20" height="38" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path stroke="#000" id="svg_3" d="m20.21811,38.88319l-19.7456,-20.72803" opacity="undefined" stroke-linecap="undefined" stroke-linejoin="undefined" fill="none" />
                            <path stroke="#000" id="svg_5" d="m20.00751,-0.49215l-19.55631,19.26847" opacity="undefined" stroke-linecap="undefined" stroke-linejoin="undefined" fill="none" />
                        </g>
                    </svg>
                </div>
                <div class="pxl-swiper-arrow pxl-swiper-arrow-next">
                    <svg width="20" height="38" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path stroke="#000" id="svg_3" d="m20.21811,38.88319l-19.7456,-20.72803" opacity="undefined" stroke-linecap="undefined" stroke-linejoin="undefined" fill="none" />
                            <path stroke="#000" id="svg_5" d="m20.00751,-0.49215l-19.55631,19.26847" opacity="undefined" stroke-linecap="undefined" stroke-linejoin="undefined" fill="none" />
                        </g>
                    </svg>
                </div>
            </div>
        <?php endif; ?>

    </div>
<?php endif; ?>