<?php
$active = intval($settings['active']);
$accordion = $widget->get_settings('accordion');
$wg_id = pxl_get_element_id($settings);
if (!empty($accordion)) : ?>
    <div class="pxl-accordion pxl-accordion1 <?php echo esc_attr($settings['style'] . ' ' . $settings['pxl_animate']); ?>" data-wow-delay="<?php echo esc_attr($settings['pxl_animate_delay']); ?>ms">
        <?php foreach ($accordion as $key => $value):
            $is_active = ($key + 1) == $active;
            $pxl_id = isset($value['_id']) ? $value['_id'] : '';
            $title = isset($value['title']) ? $value['title'] : '';
            $desc = isset($value['desc']) ? $value['desc'] : '';
            $image = isset($value['image']) ? $value['image'] : '';
            $icon_key = $widget->get_repeater_setting_key('pxl_icon', 'icons', $key);
            $widget->add_render_attribute($icon_key, [
                'class' => $value['pxl_icon'],
                'aria-hidden' => 'true',
            ]); ?>
            <div class="pxl--item <?php echo esc_attr($is_active ? 'active' : ''); ?> ">

                <<?php pxl_print_html($settings['title_tag']); ?> class="pxl-accordion--title" data-target="<?php echo esc_attr('#' . $wg_id . '-' . $pxl_id); ?>">
                    <?php if (! empty($value['pxl_icon']['value'])) : ?>
                        <span class="pxl-title--icon pxl-mr-10">
                            <?php \Elementor\Icons_Manager::render_icon($value['pxl_icon'], ['aria-hidden' => 'true']); ?>
                        </span>
                    <?php endif; ?>
                    <span class="pxl-title--text pxl-pr-20"><?php echo wp_kses_post($title); ?></span>

                    <?php if ($settings['style'] == 'style2') : ?><i class="caseicon-angle-arrow-down "></i><?php endif; ?>
                    <?php if ($settings['style'] == 'style1') : ?><i class="pxl-icon--plus pxl-r-9"></i><?php endif; ?>
                    <?php if ($settings['style'] == 'style4') : ?><i class="pxl-icon--plus pxl-r-9"></i><?php endif; ?>
                    <?php if ($settings['style'] == 'style5') : ?><i class="pxl-icon--plus pxl-r-9"></i><?php endif; ?>
                    <?php if ($settings['style'] == 'style3') : ?><i class="pxl-icon--plus pxl-r-9"></i><?php endif; ?>
                    <?php if ($settings['style'] == 'style6') : ?><i class="pxl-icon--plus pxl-r-9"></i><?php endif; ?>

                </<?php pxl_print_html($settings['title_tag']); ?>>
                <div id="<?php echo esc_attr($wg_id . '-' . $pxl_id); ?>" class="pxl-accordion--content" <?php if ($is_active) { ?>style="display: block;" <?php } ?>>
                    <?php echo wp_kses_post(nl2br($desc)); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>