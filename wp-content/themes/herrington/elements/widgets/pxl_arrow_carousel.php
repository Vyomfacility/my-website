<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_arrow_carousel',
        'title' => esc_html__('BR Nav Carousel', 'herrington'),
        'icon' => 'eicon-animation',
        'categories' => array('pxltheme-core'),
        'scripts' => array(),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'style_section',
                    'label' => esc_html__('Style', 'herrington'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Style', 'herrington'),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'description' => esc_html__('You need to enable Arrows in the Carousel widgets and place both widgets together inside the same Inner Section for them to work properly.', 'herrington'),
                            'options' => [
                                'style-1' => 'Style 1',
                                'style-2' => 'Style 2',
                                'style-3' => 'Style 3',
                            ],
                            'default' => 'style-1',
                        ),
                        array(
                            'name' => 'color',
                            'label' => esc_html__('Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-arrow' => 'color: {{VALUE}} !important;',
                                '{{WRAPPER}} .pxl-navigation-arrow svg path' => 'fill: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'color_hover',
                            'label' => esc_html__('Color Hover', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-arrow:hover ' => 'color: {{VALUE}} !important;',
                                '{{WRAPPER}} .pxl-navigation-arrow:hover svg path ' => 'fill: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__('Border Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-arrow' => 'border-color: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'border_color_hover',
                            'label' => esc_html__('Border Color Hover', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-arrow:hover ' => 'border-color: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'bg_color',
                            'label' => esc_html__('Background Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-arrow ' => 'background-color: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'bg_color_hv',
                            'label' => esc_html__('Background Color Hover', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-arrow:hover ' => 'background-color: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'fs_ic',
                            'label' => esc_html__('Font Size Icon', 'herrington'),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => ['px'],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-arrow' => 'font-size: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .pxl-navigation-arrow svg ' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'bs_ic',
                            'label' => esc_html__('Box Size', 'herrington'),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => ['px'],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-arrow' => 'width: {{SIZE}}{{UNIT}} !important; height: {{SIZE}}{{UNIT}} !important;',
                            ],
                        ),
                    ),
                ),
            ),
        ),
    ),
    herrington_get_class_widget_path()
);
