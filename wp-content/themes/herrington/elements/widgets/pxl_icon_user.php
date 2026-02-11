<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_icon_user',
        'title' => esc_html__('BR User', 'herrington'),
        'icon' => 'eicon-user-circle-o',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'source_section',
                    'label' => esc_html__('Source Settings', 'herrington'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'box_color',
                            'label' => esc_html__('Background Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon--users .icon-user' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Icon Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon--users .icon-user svg ' => 'fill: {{VALUE}};',
                            ],
                        ),

                        array(
                            'name' => 'icon_box_size',
                            'label' => esc_html__('Box Size', 'herrington'),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => ['px', '%', 'em'],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon--users .icon-user ' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_box_size',
                            'label' => esc_html__('Icon Size', 'herrington'),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => ['px', '%', 'em'],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon--users .icon-user svg ' => 'width: {{SIZE}}{{UNIT}}; ',
                            ],
                        ),
                        array(
                            'name' => 'icon_border_color',
                            'label' => esc_html__('Box Border Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon--users .icon-user ' => 'border: 1px solid {{VALUE}}; border-radius: 1000px;overflow: hidden;',
                            ],
                        ),

                        array(
                            'name' => 'title',
                            'label' => esc_html__('Title Box', 'herrington'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Title Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon--users .pxl-user-heading' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'button_color',
                            'label' => esc_html__('Background Button Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon--users  button' => 'background-color: {{VALUE}};',
                                '{{WRAPPER}} .pxl-icon--users  .btn' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__('Input Border Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-icon--users .fields-content .field-group input' => 'border-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'button_to_color',
                            'label' => esc_html__('Link Color', 'herrington'),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .btn-sign-up  span' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'link_typography',
                            'label' => esc_html__('Link Typography', 'herrington'),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .btn-sign-up  span:nth-child(1)',
                        ),
                    ),
                ),
            ),
        ),
    ),
    herrington_get_class_widget_path()
);
