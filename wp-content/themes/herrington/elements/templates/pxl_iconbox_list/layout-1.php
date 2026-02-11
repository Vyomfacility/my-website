<?php
if (! empty($settings['button_link']['url'])) {
    $widget->add_render_attribute('button_link', 'href', $settings['button_link']['url']);

    if ($settings['button_link']['is_external']) {
        $widget->add_render_attribute('button_link', 'target', '_blank');
    }

    if ($settings['button_link']['nofollow']) {
        $widget->add_render_attribute('button_link', 'rel', 'nofollow');
    }
}
?>
<div class="pxl-icons-list pxl-icons-list1">
    <?php if (!empty($settings['bg_image']['id'])) :
        $img = pxl_get_image_by_size(array(
            'attach_id' => $settings['bg_image']['id'],
            'thumb_size' => 'full',
        ));
        $thumbnail_url = $img['url'];
    ?>
        <div class="pxl-image-scroll-bg" style="background-image:url(<?php echo esc_url($thumbnail_url); ?>);"></div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 box-content">
                <?php if (!empty($settings['title_box'])) : ?>
                    <h4 class="title-box"><?php echo pxl_print_html($settings['title_box']); ?></h4>
                <?php endif; ?>
                <?php if (!empty($settings['description_box'])) : ?>
                    <p class="description-box"><?php echo pxl_print_html($settings['description_box']); ?></p>
                <?php endif; ?>
                <?php if (!empty($settings['button_text'])) : ?>
                    <a <?php pxl_print_html($widget->get_render_attribute_string('button_link')); ?> class="btn pxl-icon-active btn-glossy btn-default  inline pxl-icon--left">
                        <span class="pxl--btn-text">
                            <?php echo pxl_print_html($settings['button_text']); ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 list-item">
                <?php $is_new = \Elementor\Icons_Manager::is_migration_allowed(); ?>
                <?php foreach ($settings['icons'] as $key => $value):
                    $title = isset($value['title']) ? $value['title'] : '';
                    $desc = isset($value['desc']) ? $value['desc'] : '';
                    $icon_key = $widget->get_repeater_setting_key('pxl_icon', 'icons', $key);
                    $widget->add_render_attribute($icon_key, [
                        'class' => $value['pxl_icon'],
                        'aria-hidden' => 'true',
                    ]);
                    $link_key = $widget->get_repeater_setting_key('link', 'value', $key);
                    if (! empty($value['link']['url'])) {
                        $widget->add_render_attribute($link_key, 'href', $value['link']['url']);

                        if ($value['link']['is_external']) {
                            $widget->add_render_attribute($link_key, 'target', '_blank');
                        }

                        if ($value['link']['nofollow']) {
                            $widget->add_render_attribute($link_key, 'rel', 'nofollow');
                        }
                    }
                    $link_attributes = $widget->get_render_attribute_string($link_key);
                ?>
                    <div class="pxl-iconbox-item  wow <?php echo esc_attr($settings['pxl_animate']); ?>" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
                        <div class="pxl-item--inner">
                            <div class="icon-box">
                                <?php if (! empty($value['pxl_icon'])) : ?>
                                    <?php if ($is_new):
                                        \Elementor\Icons_Manager::render_icon($value['pxl_icon'], ['aria-hidden' => 'true']);
                                    elseif (!empty($value['pxl_icon'])): ?>
                                        <i class="<?php echo esc_attr($value['pxl_icon']); ?>" aria-hidden="true"></i>
                                    <?php endif; ?>
                            </div>
                            <?php if (!empty($title)) : ?>
                                <h5 class="title-item"><?php echo pxl_print_html($title); ?></h5>
                            <?php endif; ?>

                            <?php if (!empty($desc)) : ?>
                                <div class="description-item"><?php echo pxl_print_html($desc); ?></div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <a class="btn-arrow " <?php echo implode(' ', [$link_attributes]); ?>>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M14.2529 1.125V10.875C14.2529 11.1734 14.1344 11.4595 13.9234 11.6705C13.7124 11.8815 13.4263 12 13.1279 12C12.8295 12 12.5434 11.8815 12.3324 11.6705C12.1214 11.4595 12.0029 11.1734 12.0029 10.875V3.84375L1.92383 13.9209C1.71248 14.1323 1.42584 14.251 1.12695 14.251C0.828065 14.251 0.541421 14.1323 0.330077 13.9209C0.118732 13.7096 0 13.4229 0 13.1241C0 12.8252 0.118732 12.5385 0.330077 12.3272L10.4091 2.25H3.37789C3.07952 2.25 2.79337 2.13147 2.58239 1.9205C2.37142 1.70952 2.25289 1.42337 2.25289 1.125C2.25289 0.826631 2.37142 0.540483 2.58239 0.329505C2.79337 0.118526 3.07952 0 3.37789 0H13.1279C13.4263 0 13.7124 0.118526 13.9234 0.329505C14.1344 0.540483 14.2529 0.826631 14.2529 1.125Z" fill="#121C27" />
                            </svg>
                        </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>