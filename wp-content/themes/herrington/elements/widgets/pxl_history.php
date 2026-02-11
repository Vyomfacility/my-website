<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_history',
        'title' => esc_html__('BR History', 'herrington'),
        'icon' => 'eicon-history',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'herrington'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'history',
                            'label' => esc_html__('History', 'herrington'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'image',
                                    'label' => esc_html__('Image', 'herrington' ),
                                    'type' => \Elementor\Controls_Manager::MEDIA,
                                ),
                                array(
                                    'name' => 'text',
                                    'label' => esc_html__('Text', 'herrington'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'date',
                                    'label' => esc_html__('Year', 'herrington'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'decs',
                                    'label' => esc_html__('Description', 'herrington'),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA, 
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'btn_text',
                                    'label' => esc_html__('Button Text', 'herrington' ),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'default' => esc_html__('View More', 'herrington'),
                                ),
                                array(
                                    'name' => 'btn_link',
                                    'label' => esc_html__('Button Link', 'herrington' ),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'default' => esc_html__('#', 'herrington'),
                                ),
                            ),
                            'title_field' => '{{{ text }}}',
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style_link',
                    'label' => esc_html__('Style', 'herrington'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                          'name' => 'align',
                          'label' => esc_html__( 'Alignment', 'herrington' ),
                          'type' => \Elementor\Controls_Manager::CHOOSE,
                          'control_type' => 'responsive',
                          'options' => [
                            'left' => [
                                'title' => esc_html__( 'Left', 'herrington' ),
                                'icon' => 'eicon-text-align-left',
                            ],
                            'center' => [
                                'title' => esc_html__( 'Center', 'herrington' ),
                                'icon' => 'eicon-text-align-center',
                            ],
                            'right' => [
                                'title' => esc_html__( 'Right', 'herrington' ),
                                'icon' => 'eicon-text-align-right',
                            ],
                            'justify' => [
                                'title' => esc_html__( 'Justified', 'herrington' ),
                                'icon' => 'eicon-text-align-justify',
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .pxl-history' => 'text-align: {{VALUE}};',
                        ],
                    ),
                        array(
                            'name' => 'link_color',
                            'label' => esc_html__('Title Color', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-history .title' => 'color: {{VALUE}};',
                            ],
                        ),
                        
                        array(
                            'name' => 'desc_color',
                            'label' => esc_html__('Description Color ', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-history .desc' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'link_typography',
                            'label' => esc_html__('Title Typography', 'herrington' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-history .title',
                        ),
                        array(
                            'name' => 'desc_typography',
                            'label' => esc_html__('Description Typography', 'herrington' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-history .desc',
                        ),
                        array(
                            'name' => 'bottom_spacer',
                            'label' => esc_html__('Bottom Spacer', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-history li' => 'margin-bottom: {{SIZE}}{{UNIT}};',
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