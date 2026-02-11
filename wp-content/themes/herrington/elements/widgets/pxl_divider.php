<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_divider',
        'title' => esc_html__('BR Divider', 'herrington' ),
        'icon' => 'eicon-divider',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'herrington' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'divider_color',
                            'label' => esc_html__('Color', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-el-divider' => 'background-color: {{VALUE}};',
                            ],
                        ),

                        array(
                            'name' => 'dot_color',
                            'label' => esc_html__('Dot Color', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-el-divider:before,{{WRAPPER}} .pxl-el-divider:after' => 'background-color: {{VALUE}} !important;',
                            ],
                        ),
                        
                        array(
                            'name' => 'divider_width',
                            'label' => esc_html__('Width', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px', '%' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 10000,
                                ],
                                '%' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-el-divider' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'divider_height',
                            'label' => esc_html__('Height', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 10000,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-el-divider' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                    ),
                ),
                herrington_widget_animation_settings(),
            ),
        ),
    ),
    herrington_get_class_widget_path()
);