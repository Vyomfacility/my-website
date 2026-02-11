<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_search_form',
        'title' => esc_html__('BR Search Form', 'herrington' ),
        'icon' => 'eicon-site-search',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'herrington' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'lists',
                            'label' => esc_html__('Content', 'herrington'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'content',
                                    'label' => esc_html__('Content', 'herrington' ),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'rows' => 10,
                                    'show_label' => false,
                                ),
                            ),
                            'title_field' => '{{{ content }}}',
                        ),
                        array(
                            'name' => 'button_text',
                            'label' => esc_html__('Text', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => esc_html__('Find Solution', 'herrington'),
                        ),

                        array(
                            'name' => 'input_typography',
                            'label' => esc_html__('Input Typography', 'herrington' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-select-higthlight',
                        ),
                    ),
                ),
                herrington_widget_animation_settings(),
            ),
        ),
    ),
    herrington_get_class_widget_path()
);