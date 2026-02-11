<?php

if ( ! empty( $settings['button_link']['url'] ) ) {
    $widget->add_render_attribute( 'button', 'href', $settings['button_link']['url'] );

    if ( $settings['button_link']['is_external'] ) {
        $widget->add_render_attribute( 'button', 'target', '_blank' );
    }

    if ( $settings['button_link']['nofollow'] ) {
        $widget->add_render_attribute( 'button', 'rel', 'nofollow' );
    }
}

if ( ! empty( $settings['link_download']['url'] ) ) {
    $widget->add_render_attribute( 'button2', 'href', $settings['link_download']['url'] );

    if ( $settings['link_download']['is_external'] ) {
        $widget->add_render_attribute( 'button2', 'target', '_blank' );
    }

    if ( $settings['link_download']['nofollow'] ) {
        $widget->add_render_attribute( 'button2', 'rel', 'nofollow' );
    }
}

?>
<div class="pxl-pricing pxl-pricing1 <?php echo esc_attr($settings['pxl_animate'].' '.$settings['popular']); ?>" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
    <div class="content-inner">
        <?php if(!empty($settings['title_box'])) : ?>
            <h5 class="pxl-item--title-box el-empty">
                <?php if ($settings['popular']== 'is-popular'): ?>
                    <svg id="fi_3303088" enable-background="new 0 0 512 512" height="14" viewBox="0 0 512 512" width="14" xmlns="http://www.w3.org/2000/svg"><g id="Star"><g><path d="m397.929 498.915-141.929-88.814-141.929 88.813c-5.156 3.267-11.807 3.018-16.772-.586-4.951-3.589-7.222-9.829-5.728-15.762l40.605-162.437-126.812-107.518c-4.688-3.926-6.519-10.313-4.629-16.128 1.89-5.83 7.134-9.917 13.228-10.342l165.514-11.558 62.607-155.288c4.6-11.338 23.232-11.338 27.832 0l62.607 155.288 165.514 11.558c6.094.425 11.338 4.512 13.228 10.342 1.89 5.815.059 12.202-4.629 16.128l-126.813 107.52 40.605 162.437c1.494 5.933-.776 12.173-5.728 15.762-5.067 3.68-11.699 3.763-16.771.585z"></path></g></g></svg>
                <?php endif ?>
                <?php echo pxl_print_html($settings['title_box']); ?>
            </h5>
        <?php endif; ?>
        <?php if (!empty($settings['price']) ) : ?>
            <div class="pxl-item--price">
                <?php echo pxl_print_html($settings['price']); ?>
                <?php if (!empty($settings['time']) ) : ?>
                    <span class="time"><?php echo pxl_print_html($settings['time']); ?></span>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if(!empty($settings['desc'])) : ?>
            <p class="pxl-item-description el-empty"><?php echo pxl_print_html($settings['desc']); ?></p>
        <?php endif; ?>

        <?php if(!empty($settings['button_text_docs'])) : ?>
            <div class="pxl-item--button_docs">
                <a class="btn-doc" <?php pxl_print_html($widget->get_render_attribute_string( 'button2' )); ?>>
                    <span><?php echo pxl_print_html($settings['button_text_docs']); ?> </span>
                    <span class="icon-download">
                        <svg id="fi_13361181" enable-background="new 0 0 100 100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="m86.0065079 97.5h-72.0130148c-2.1413622 0-3.8775511-1.7361908-3.8775511-3.8775482 0-2.1413651 1.7361889-3.8775558 3.8775511-3.8775558h72.0130157c2.1413574 0 3.8775482 1.7361908 3.8775482 3.8775558-.0000009 2.1413574-1.7361917 3.8775482-3.8775491 3.8775482z"></path><path d="m50 78.3271408c-2.1413612 0-3.877552-1.7361908-3.877552-3.8775558v-68.0720339c0-2.1413627 1.7361908-3.8775511 3.877552-3.8775511s3.877552 1.7361884 3.877552 3.8775511v68.0720339c0 2.141365-1.7361908 3.8775558-3.877552 3.8775558z"></path><path d="m50 78.3328171c-.9921074 0-1.9851608-.3786621-2.7415504-1.1360016l-28.2854844-28.2854843c-1.5146675-1.5137215-1.5146675-3.9693756 0-5.4830971 1.5127754-1.5146713 3.9703255-1.5146713 5.483099 0l25.5439358 25.5429878 25.5439377-25.5429878c1.5127716-1.5146713 3.9703217-1.5146713 5.4830933 0 1.5146713 1.5137215 1.5146713 3.9693756 0 5.4830971l-28.2854806 28.2854843c-.7563896.7573395-1.749443 1.1360016-2.7415504 1.1360016z"></path></svg>
                    </span>
                </a>
            </div>
        <?php endif; ?>

        <?php if(isset($settings['feature']) && !empty($settings['feature']) && count($settings['feature'])): ?>
        <div class="pxl-item--feature ">
            <?php foreach ($settings['feature'] as $key => $value): ?>
                <div class="<?php echo esc_attr($value['active']); ?> d-flex">
                    <div class="content">
                        <?php if ($value['active']== 'is-active'): ?>
                            <i class="caseicon-check"></i>
                        <?php endif ?>
                        <?php if ($value['active'] != 'is-active'): ?>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" id="fi_10412365"><path d="m6.81 25.19a2 2 0 0 0 2.83 0l6.36-6.36 6.36 6.36a2 2 0 0 0 2.83-2.83l-6.36-6.36 6.36-6.36a2 2 0 0 0 -2.83-2.83l-6.36 6.36-6.36-6.36a2 2 0 0 0 -2.83 2.83l6.36 6.36-6.36 6.36a2 2 0 0 0 0 2.83z"></path></svg>
                        <?php endif ?>
                        <?php echo pxl_print_html($value['feature_text'])?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <?php if(!empty($settings['button_text'])) : ?>
        <div class="pxl-item--button">
            <a class="btn-see" <?php pxl_print_html($widget->get_render_attribute_string( 'button' )); ?>>
                <span><?php echo pxl_print_html($settings['button_text']); ?> </span>
            </a>
        </div>
    <?php endif; ?>
</div>
</div>