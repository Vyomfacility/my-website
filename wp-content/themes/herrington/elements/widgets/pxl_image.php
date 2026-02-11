<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_image',
        'title' => esc_html__('BR Image', 'herrington' ),
        'icon' => 'eicon-image',
        'categories' => array('pxltheme-core'),
        'scripts' => array(
            'tilt',
            'pxl-tweenmax',
        ),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'tab_content',
                    'label' => esc_html__('Content', 'herrington' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'source_type',
                            'label' => esc_html__('Source Type', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                's_img' => 'Select Image',
                                'f_img' => 'Featured Image',
                            ],
                            'default' => 's_img',
                        ),
                        array(
                            'name' => 'image',
                            'label' => esc_html__('Choose Image', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                            'condition' => [
                                'source_type' => ['s_img'],
                            ],
                        ),
                        array(
                            'name' => 'image_link',
                            'label' => esc_html__('Link', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::URL,
                        ),
                        array(
                            'name' => 'image_type',
                            'label' => esc_html__('Image Type', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'img' => 'Image',
                                'bg' => 'Background',
                            ],
                            'default' => 'img',
                        ),
                        array(
                            'name' => 'img_size',
                            'label' => esc_html__('Image Size', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'description' => 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height).',
                            'condition' => [
                                'image_type' => ['img'],
                            ],
                        ),
                        array(
                            'name' => 'image_align',
                            'label' => esc_html__('Image Alignment', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::CHOOSE,
                            'control_type' => 'responsive',
                            'options' => [
                                'left' => [
                                    'title' => esc_html__('Left', 'herrington' ),
                                    'icon' => 'fa fa-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__('Center', 'herrington' ),
                                    'icon' => 'fa fa-align-center',
                                ],
                                'right' => [
                                    'title' => esc_html__('Right', 'herrington' ),
                                    'icon' => 'fa fa-align-right',
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single' => 'text-align: {{VALUE}};',
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'tab_style_img',
                    'label' => esc_html__('Image', 'herrington' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'style-im',
                            'label' => esc_html__( 'Style', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'df' => esc_html__( 'Default', 'herrington' ),
                                'block-blur' => esc_html__( 'Block Blur 1', 'herrington' ),
                                'block-blur2' => esc_html__( 'Block Blur 2', 'herrington' ),
                                'block-blur3' => esc_html__( 'Block Blur 3', 'herrington' ),
                                'block-blur4' => esc_html__( 'Block Blur 4', 'herrington' ),
                                'block-blur5' => esc_html__( 'Block Blur 5', 'herrington' ),
                                'block-blur6' => esc_html__( 'Block Blur 6', 'herrington' ),
                                'block-blur7' => esc_html__( 'Block Blur 7', 'herrington' ),
                                'block-blur8' => esc_html__( 'Block Blur 8', 'herrington' ),
                                'block-blur9' => esc_html__( 'Block Blur 9', 'herrington' ),
                                'block-blur10' => esc_html__( 'Block Blur 10', 'herrington' ),
                                'block-blur11' => esc_html__( 'Block Blur 11', 'herrington' ),
                            ],
                            'default' => 'df',
                        ),
                        array(
                            'name' => 'w_block',
                            'label' => esc_html__('Width Block', 'herrington' ),
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
                                '{{WRAPPER}} .pxl-image-single .block' => 'width: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur .block:nth-child(1),{{WRAPPER}} .pxl-image-single .block-blur3 .block:nth-child(1),{{WRAPPER}} .pxl-image-single .block-blur7 .block:nth-child(1)' => 'left: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur .block:nth-child(2),{{WRAPPER}} .pxl-image-single .block-blur3 .block:nth-child(2),{{WRAPPER}} .pxl-image-single .block-blur7 .block:nth-child(2)' => 'bottom: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur2 .block:nth-child(2),{{WRAPPER}} .pxl-image-single .block-blur10 .block:nth-child(2) ' => 'right: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur4 .block:nth-child(2),{{WRAPPER}} .pxl-image-single .block-blur5 .block:nth-child(2) ' => 'right: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur4 .block:nth-child(3),{{WRAPPER}} .pxl-image-single .block-blur5 .block:nth-child(3) ' => 'right: calc({{SIZE}}{{UNIT}} + {{SIZE}}{{UNIT}}) !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur4 .block:nth-child(5),{{WRAPPER}} .pxl-image-single .block-blur5 .block:nth-child(5) ' => 'right: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur9 .block:nth-child(2)' => 'right: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur8 .block:nth-child(2)' => 'left: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur11 .block:nth-child(2)' => 'left: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur11 .block:nth-child(3)' => 'left: calc({{SIZE}}{{UNIT}} + {{SIZE}}{{UNIT}}) !important;',
                            ],
                            'condition' => [
                                'style-im!' => ['df'],
                            ],
                        ),
                        array(
                            'name' => 'h_block',
                            'label' => esc_html__('Height Block', 'herrington' ),
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
                                '{{WRAPPER}} .pxl-image-single .block' => 'height: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur9 .block:nth-child(1)' => 'top: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur8 .block:nth-child(2)' => 'bottom: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur2 .block:nth-child(3),{{WRAPPER}} .pxl-image-single .block-blur10 .block:nth-child(3) ' => 'bottom: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur4 .block:nth-child(4),{{WRAPPER}} .pxl-image-single .block-blur5 .block:nth-child(4) ' => 'bottom: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur4 .block:nth-child(5),{{WRAPPER}} .pxl-image-single .block-blur5 .block:nth-child(5) ' => 'bottom: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur4 .block:nth-child(6),{{WRAPPER}} .pxl-image-single .block-blur5 .block:nth-child(6) ' => 'bottom: calc({{SIZE}}{{UNIT}} + {{SIZE}}{{UNIT}}) !important;',
                                '{{WRAPPER}} .pxl-image-single .block-blur11 .block:nth-child(2)' => 'bottom: {{SIZE}}{{UNIT}} !important; height: calc({{SIZE}}{{UNIT}} / 2) !important;',
                            ],
                            'condition' => [
                                'style-im!' => ['df'],
                            ],
                        ),
                        array(
                            'name' => 'image_max_height',
                            'label' => esc_html__('Image Max Height', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'description' => esc_html__('Enter number.', 'herrington' ),
                            'condition' => [
                                'image_type' => 'img',
                            ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 3000,
                                ],
                            ],
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single img' => 'max-height: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'image_type' => 'img',
                            ],
                        ),
                        array(
                            'name' => 'image_width',
                            'label' => esc_html__('Image Width', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::CHOOSE,
                            'options' => [
                                'auto' => [
                                    'title' => esc_html__( 'Auto', 'herrington' ),
                                    'icon' => 'fas fa-arrows-alt-v',
                                ],
                                '100%' => [
                                    'title' => esc_html__( 'Full', 'herrington' ),
                                    'icon' => 'fas fa-arrows-alt-h',
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single img' => 'width: {{VALUE}};',
                            ],
                            'condition' => [
                                'image_type' => 'img',
                            ],
                            'control_type' => 'responsive',
                        ),
                        array(
                            'name' => 'image_height',
                            'label' => esc_html__('Image Height', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'description' => esc_html__('Enter number.', 'herrington' ),
                            'condition' => [
                                'image_type' => 'bg',
                            ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 3000,
                                ],
                            ],
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single .pxl-item--bg' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'border_radius',
                            'label' => esc_html__('Border Radius', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single img, {{WRAPPER}} .pxl-item--inner, {{WRAPPER}} .pxl-image-single .pxl-item--bg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'border_type',
                            'label' => esc_html__( 'Border Type', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                '' => esc_html__( 'None', 'herrington' ),
                                'solid' => esc_html__( 'Solid', 'herrington' ),
                                'double' => esc_html__( 'Double', 'herrington' ),
                                'dotted' => esc_html__( 'Dotted', 'herrington' ),
                                'dashed' => esc_html__( 'Dashed', 'herrington' ),
                                'groove' => esc_html__( 'Groove', 'herrington' ),
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single img' => 'border-style: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'border_width',
                            'label' => esc_html__( 'Border Width', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single img' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                            ],
                            'condition' => [
                                'border_type!' => '',
                            ],
                            'responsive' => true,
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__( 'Border Color', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single img' => 'border-color: {{VALUE}} !important;',
                            ],
                            'condition' => [
                                'border_type!' => '',
                            ],
                        ),
                        array(
                            'name'         => 'box_shadow',
                            'label' => esc_html__( 'Box Shadow', 'herrington' ),
                            'type'         => \Elementor\Group_Control_Box_Shadow::get_type(),
                            'control_type' => 'group',
                            'selector'     => '{{WRAPPER}} .pxl-image-single img'
                        ),
                        array(
                            'name' => 'img_effect',
                            'label' => esc_html__('Image Effect', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                '' => 'None',
                                'pxl-image-effect1' => 'Zigzag',
                                'pxl-image-tilt' => 'Tilt',
                                'pxl-image-spin' => 'Spin',
                                'pxl-image-zoom' => 'Zoom',
                                'pxl-image-bounce' => 'Bounce',
                                'slide-up-down' => 'Slide Up Down',
                                'slide-top-to-bottom' => 'Slide Top To Bottom ',
                                'pxl-image-effect2' => 'Slide Bottom To Top ',
                                'slide-right-to-left' => 'Slide Right To Left ',
                                'slide-left-to-right' => 'Slide Left To Right ',
                                'pxl-hover1' => 'ZoomIn',
                                'pxl-hover2' => 'ZoomOut',
                                'rotate-z' => 'Rotate Z',
                                'pxl-animation-round' => 'Round',
                                'pxl-image-parallax' => 'Parallax Hover',
                                'pxl-parallax-scroll' => 'Parallax Scroll',
                            ],
                            'default' => '',
                            'condition' => [
                                'image_type' => 'img',
                            ],
                        ),
                        array(
                            'name' => 'parallax_scroll_type',
                            'label' => esc_html__('Parallax Scroll Type', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'y' => 'Effect Y',
                                'x' => 'Effect X',
                                'z' => 'Effect Z',
                            ],
                            'default' => 'y',
                            'condition' => [
                                'img_effect' => 'pxl-parallax-scroll',
                            ],
                        ),
                        array(
                            'name' => 'parallax_scroll_value_x',
                            'label' => esc_html__('Parallax Value', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'condition' => [
                                'img_effect' => 'pxl-parallax-scroll',
                            ],
                            'default' => '80',
                            'description' => esc_html__('Enter number.', 'herrington' ),
                        ),
                        array(
                            'name' => 'parallax_value',
                            'label' => esc_html__('Parallax Value', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'condition' => [
                                'img_effect' => 'pxl-image-parallax',
                            ],
                            'default' => '40',
                            'description' => esc_html__('Enter number.', 'herrington' ),
                        ),
                        array(
                            'name' => 'max_tilt',
                            'label' => esc_html__('Max Tilt', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'condition' => [
                                'img_effect' => 'pxl-image-tilt',
                            ],
                            'default' => '10',
                            'description' => esc_html__('Enter number.', 'herrington' ),
                        ),
                        array(
                            'name' => 'speed_tilt',
                            'label' => esc_html__('Speed Tilt', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'condition' => [
                                'img_effect' => 'pxl-image-tilt',
                            ],
                            'default' => '400',
                            'description' => esc_html__('Enter number.', 'herrington' ),
                        ),
                        array(
                            'name' => 'perspective_tilt',
                            'label' => esc_html__('Perspective Tilt', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'condition' => [
                                'img_effect' => 'pxl-image-tilt',
                            ],
                            'default' => '1000',
                            'description' => esc_html__('Enter number.', 'herrington' ),
                        ),
                        array(
                            'name' => 'speed_effect',
                            'label' => esc_html__('Speed', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 100000,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-single, {{WRAPPER}} .pxl-image-single img' => 'animation-duration: {{SIZE}}ms;',
                            ],
                            'condition' => [
                                'img_effect!' => ['pxl-image-tilt','pxl-hover1','pxl-parallax-scroll'],
                            ],
                            'description' => 'Enter number, unit is ms.',
                        ),
                        array(
                            'name' => 'img_display',
                            'label' => esc_html__('Hide on Screen <= 1400px', 'herrington'),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => false,
                        ),
                        array(
                            'name' => 'hide_parallax_sm',
                            'label' => esc_html__('Disable Parallax on Mobile <= 767px', 'herrington'),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => false,
                            'condition' => [
                                'img_effect' => ['pxl-parallax-scroll'],
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