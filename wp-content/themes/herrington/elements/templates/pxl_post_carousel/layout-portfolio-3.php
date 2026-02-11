<?php
extract($settings);
$html_id = pxl_get_element_id($settings);
$tax = ['portfolio-category'];
$select_post_by = $widget->get_setting('select_post_by', '');
$source = $post_ids = [];
if($select_post_by === 'post_selected'){
    $post_ids = $widget->get_setting('source_'.$settings['post_type'].'_post_ids', '');
}else{
    $source  = $widget->get_setting('source_'.$settings['post_type'], '');
}
$orderby = $widget->get_setting('orderby', 'date');
$order = $widget->get_setting('order', 'desc');
$limit = $widget->get_setting('limit', 6);
$settings['layout']    = $settings['layout_'.$settings['post_type']];
extract(pxl_get_posts_of_grid('portfolio', [
    'source' => $source,
    'orderby' => $orderby,
    'order' => $order,
    'limit' => $limit,
    'post_ids' => $post_ids,
    'tax'=> $tax,
]));

$pxl_animate = $widget->get_setting('pxl_animate', '');
$col_xs = $widget->get_setting('col_xs', '');
$col_sm = $widget->get_setting('col_sm', '');
$col_md = $widget->get_setting('col_md', '');
$col_lg = $widget->get_setting('col_lg', '');
$col_xl = $widget->get_setting('col_xl', '');
$col_xxl = $widget->get_setting('col_xxl', '');
if($col_xxl == 'inherit') {
    $col_xxl = $col_xl;
}
$slides_to_scroll = $widget->get_setting('slides_to_scroll', '');

$arrows = $widget->get_setting('arrows', false);
$pagination = $widget->get_setting('pagination', false);
$pagination_type = $widget->get_setting('pagination_type', 'bullets');
$pause_on_hover = $widget->get_setting('pause_on_hover', false);
$autoplay = $widget->get_setting('autoplay', false); 
$autoplay_speed = $widget->get_setting('autoplay_speed', '5000');
$infinite = $widget->get_setting('infinite', false);
$speed = $widget->get_setting('speed', '500');
$center = $widget->get_setting('center', false);
$drap = $widget->get_setting('drap', false);

$img_size = $widget->get_setting('img_size');
$show_excerpt = $widget->get_setting('show_excerpt');
$show_icon = $widget->get_setting('show_icon');
$show_category = $widget->get_setting('show_category');
$num_words = $widget->get_setting('num_words');
$show_button = $widget->get_setting('show_button');
$button_text = $widget->get_setting('button_text');

$opts = [
    'slide_direction'               => 'horizontal',
    'slide_percolumn'               => 1, 
    'slide_percolumnfill'           => 1, 
    'slide_mode'                    => 'slide', 
    'center_slide'                  => false, 
    'slides_to_show'                => (int)$col_xl, 
    'slides_to_show_xxl'            => (int)$col_xxl, 
    'slides_to_show_lg'             => (int)$col_lg, 
    'slides_to_show_md'             => (int)$col_md, 
    'slides_to_show_sm'             => (int)$col_sm, 
    'slides_to_show_xs'             => (int)$col_xs, 
    'slides_to_scroll'              => (int)$slides_to_scroll,  
    'slides_gutter'                 => 30, 
    'arrow'                         => (bool)$arrows,
    'pagination'                    => (bool)$pagination,
    'pagination_type'               => $pagination_type,
    'autoplay'                      => (bool)$autoplay,
    'pause_on_hover'                => (bool)$pause_on_hover,
    'pause_on_interaction'          => true,
    'delay'                         => (int)$autoplay_speed,
    'loop'                          => $infinite,
    'speed'                         => (int)$speed,
    'center'                        => (bool)$center,
];

$widget->add_render_attribute( 'carousel', [
    'class'         => 'pxl-swiper-container',
    'dir'           => is_rtl() ? 'rtl' : 'ltr',
    'data-settings' => wp_json_encode($opts)
]); ?>

<?php if (is_array($posts)): ?>
    <div class="pxl-swiper-slider pxl-portfolio-carousel pxl-portfolio-carousel3 pxl-portfolio-style1 ">
        <div class="pxl-carousel-inner" >
            <div <?php pxl_print_html($widget->get_render_attribute_string( 'carousel' )); ?>>
                <div class="pxl-swiper-wrapper">
                    <?php
                    foreach ($posts as $post):
                        $image_size = !empty($img_size) ? $img_size : '480x605';
                        $img_id       = get_post_thumbnail_id( $post->ID );
                        $img          = pxl_get_image_by_size( array(
                            'attach_id'  => $img_id,
                            'thumb_size' => $image_size
                        ) );
                        $thumbnail    = $img['thumbnail']; 
                        $thumbnail_url    = $img['url']; 
                        $filter_class = '';
                        if ($select_post_by === 'term_selected' )
                            $filter_class = pxl_get_term_of_post_to_class($post->ID, array_unique($tax));
                        ?>
                        <div class="pxl-swiper-slide <?php echo esc_attr($pxl_animate); ?> wow" data-filter="<?php echo esc_attr($filter_class); ?>" <?php if($drap !== false): ?>data-cursor-drap="<?php echo esc_html('Drag.', 'herrington'); ?>"<?php endif; ?>>
                            <div class="pxl-post--inner " >
                                <div class="pxl-post-bg" style="background-image:url(<?php echo esc_url($thumbnail_url); ?>);"></div>
                                <div class="pxl-post--holder">
                                    <div class="pxl-meta-top">
                                        <?php if($show_category == 'true'): ?>
                                            <div class="pxl-post--category">
                                                <?php the_terms( $post->ID, 'portfolio-category', '', '&nbsp-&nbsp' ); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if($show_icon == 'true'): ?>
                                            <div class="pxl-icon-p">
                                                <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m495.418 146.225-83.042 19.497-4.409-52.266-66.698 60.703 19.321-120.659-57.056 20.039-47.534-73.539-47.534 73.539-57.056-20.039 19.321 120.659-66.698-60.703-4.409 52.266-83.042-19.497 28.696 89.179-45.278 21.577 128.397 99.961-14.238 57.32 126.841-20.633v118.371h30v-118.371l126.841 20.633-14.238-57.32 128.397-99.961-45.278-21.577z"/></g></svg>
                                            </div>
                                        <?php endif; ?>
                                        <h5 class="pxl-post--title">
                                            <a href="<?php echo esc_url(get_permalink( $post->ID )); ?>"><?php echo esc_attr(get_the_title($post->ID)); ?></a>
                                        </h5>
                                        <?php if($show_excerpt == 'true'): ?>
                                            <div class="pxl-post--content">
                                                <?php if($show_excerpt == 'true'): ?>
                                                    <?php
                                                    echo wp_trim_words( $post->post_excerpt, $num_words, $more = null );
                                                    ?>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="btn-readmore">
                                            <a href="<?php echo esc_url(get_permalink( $post->ID )); ?>">   
                                                <span class="btn--text">
                                                    <?php if(!empty($button_text)) {
                                                        echo esc_attr($button_text);
                                                    } else {
                                                        echo esc_html__('Continue Reading', 'herrington');
                                                    } ?>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="meta-bottom">
                                        <?php if($show_category == 'true'): ?>
                                            <div class="pxl-post--category">
                                                <?php the_terms( $post->ID, 'portfolio-category', '', '&nbsp-&nbsp' ); ?>
                                            </div>
                                        <?php endif; ?>
                                        <h5 class="pxl-post--title">
                                            <a href="<?php echo esc_url(get_permalink( $post->ID )); ?>"><?php echo esc_attr(get_the_title($post->ID)); ?></a>
                                        </h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div> 

            </div>
            <div class="container wrap-arrow <?php echo esc_attr($settings['style-pa']) ?>">
                <?php if($pagination !== false): ?>
                    <div class="pxl-swiper-dots style-1"></div>
                <?php endif; ?>
                <?php if($arrows !== false): ?>
                    <div class="pxl-swiper-arrow-wrap style-7">
                        <div class="pxl-swiper-arrow pxl-swiper-arrow-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" enable-background="new 0 0 20 20" height="512" viewBox="0 0 20 20" width="512"><path d="m12 2-1.4 1.4 5.6 5.6h-16.2v2h16.2l-5.6 5.6 1.4 1.4 8-8z" fill="#fff"></path></svg>
                        </div>
                        <div class="pxl-swiper-arrow pxl-swiper-arrow-next">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" enable-background="new 0 0 20 20" height="512" viewBox="0 0 20 20" width="512"><path d="m12 2-1.4 1.4 5.6 5.6h-16.2v2h16.2l-5.6 5.6 1.4 1.4 8-8z" fill="#fff"></path></svg>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>