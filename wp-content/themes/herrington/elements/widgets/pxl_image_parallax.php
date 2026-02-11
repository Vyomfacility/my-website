<?php
pxl_add_custom_widget(
    [
        'name' => 'pxl_image_parallax',
        'title' => esc_html__('BR Image Parallax', 'herrington' ),
        'icon' => 'eicon-image',
        'categories' => ['pxltheme-core'],
        'scripts' => [
            'tilt',
            'pxl-tweenmax',
        ],
        'params' => [
            'sections' => [
                [
                    'name'     => 'content_section',
                    'label'    => esc_html__( 'Image', 'herrington' ),
                    'tab'      => 'content',
                    'controls' => [
                        [
                            'name' => 'source_type',
                            'label' => esc_html__('Source Type', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                's_img' => 'Select Image',
                                'f_img' => 'Featured Image',
                            ],
                            'default' => 's_img',
                        ],
                        [
                            'name' => 'img_size',
                            'label' => esc_html__('Image Size', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'description' => 'Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height).',
                            'condition' => [
                                'source_type' => ['f_img'],
                            ],
                        ],
                        [
                            'name' => 'image',
                            'label' => esc_html__( 'Choose Image', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                            'dynamic' => [
                                'active' => true,
                            ],
                            'condition' => [
                                'source_type' => ['s_img'],
                            ],
                            'default' => [
                                'url' => \Elementor\Utils::get_placeholder_image_src()
                            ],
                        ],
                        [
                            'name' => 'image',
                            'label' => esc_html__( 'Image Size', 'herrington' ),
                            'type' => \Elementor\Group_Control_Image_Size::get_type(),
                            'control_type' => 'group',
                            'default' => 'full',  
                            'condition' => [
                                'source_type' => ['s_img'],
                            ],
                        ],
                        [
                            'name' => 'align',
                            'label' => esc_html__( 'Alignment', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::CHOOSE,
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
                            ],
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}}' => 'text-align: {{VALUE}};',
                            ],
                        ],
                        [
                            'name' => 'link_to',
                            'label' => esc_html__( 'Link', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'none',
                            'options' => [
                                'none' => esc_html__( 'None', 'herrington' ),
                                'file' => esc_html__( 'Media File', 'herrington' ),
                                'custom' => esc_html__( 'Custom URL', 'herrington' ),
                            ],
                        ],
                        [
                            'name' => 'link',
                            'label' => esc_html__( 'Link', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::URL,
                            'dynamic' => [
                                'active' => true,
                            ],
                            'placeholder' => esc_html__( 'https://your-link.com', 'herrington' ),
                            'condition' => [
                                'link_to' => 'custom',
                            ],
                            'show_label' => false,
                        ],
                        [
                            'name' => 'open_lightbox',
                            'label' => esc_html__( 'Lightbox', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'default',
                            'options' => [
                                'default' => esc_html__( 'Default', 'herrington' ),
                                'yes' => esc_html__( 'Yes', 'herrington' ),
                                'no' => esc_html__( 'No', 'herrington' ),
                            ],
                            'condition' => [
                                'link_to' => 'file',
                            ],
                        ]
                    ],
                ],  
                [
                    'name' => 'parallax_section',
                    'label' => esc_html__('Parallax Settings', 'herrington' ),
                    'tab'      => 'content',
                    'controls' => [
                        [
                            'name' => 'pxl_parallax',
                            'label' => esc_html__( 'Parallax Type', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                ''        => esc_html__( 'None', 'herrington' ),
                                'x'       => esc_html__( 'Transform X', 'herrington' ),
                                'y'       => esc_html__( 'Transform Y', 'herrington' ),
                                'z'       => esc_html__( 'Transform Z', 'herrington' ),
                                'rotateX' => esc_html__( 'RotateX', 'herrington' ),
                                'rotateY' => esc_html__( 'RotateY', 'herrington' ),
                                'rotateZ' => esc_html__( 'RotateZ', 'herrington' ),
                                'scaleX'  => esc_html__( 'ScaleX', 'herrington' ),
                                'scaleY'  => esc_html__( 'ScaleY', 'herrington' ),
                                'scaleZ'  => esc_html__( 'ScaleZ', 'herrington' ),
                                'scale'   => esc_html__( 'Scale', 'herrington' ),
                            ],
                        ],
                        [
                            'name' => 'parallax_value',
                            'label' => esc_html__('Value', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => '',
                            'condition' => [ 'pxl_parallax!' => '']  
                        ],
                        [
                            'name' => 'pxl_parallax_two',
                            'label' => esc_html__( 'Parallax Two Type', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                ''        => esc_html__( 'None', 'herrington' ),
                                'x'       => esc_html__( 'Transform X', 'herrington' ),
                                'y'       => esc_html__( 'Transform Y', 'herrington' ),
                                'z'       => esc_html__( 'Transform Z', 'herrington' ),
                                'rotateX' => esc_html__( 'RotateX', 'herrington' ),
                                'rotateY' => esc_html__( 'RotateY', 'herrington' ),
                                'rotateZ' => esc_html__( 'RotateZ', 'herrington' ),
                                'scaleX'  => esc_html__( 'ScaleX', 'herrington' ),
                                'scaleY'  => esc_html__( 'ScaleY', 'herrington' ),
                                'scaleZ'  => esc_html__( 'ScaleZ', 'herrington' ),
                                'scale'   => esc_html__( 'Scale', 'herrington' ),
                            ],
                        ],
                        [
                            'name' => 'parallax_value_two',
                            'label' => esc_html__('Value', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => '',
                            'condition' => [ 'pxl_parallax!' => '']  
                        ],
                    ]
                ],
                [
                    'name'     => 'bg_parallax_section',
                    'label'    => esc_html__('Background Parallax', 'herrington' ),
                    'tab'      => 'content',
                    'controls' => [
                        [
                            'name'    => 'pxl_bg_parallax',
                            'label'   => esc_html__( 'Background Parallax Type', 'herrington' ),
                            'type'    => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                ''                  => esc_html__( 'None', 'herrington' ),
                                'basic'             => esc_html__( 'Basic', 'herrington' ),
                                'rotate'            => esc_html__( 'Rotate', 'herrington' ),
                                'mouse-move'        => esc_html__( 'Mouse Move', 'herrington' ),
                                'mouse-move-rotate' => esc_html__( 'Mouse Move Rotate', 'herrington' ),
                            ],
                        ],
                        [
                            'name' => 'bg_parallax_width',
                            'label' => esc_html__('Background Width', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'default' => [
                                'unit' => '%',
                            ],
                            'tablet_default' => [
                                'unit' => '%',
                            ],
                            'mobile_default' => [
                                'unit' => '%',
                            ],
                            'size_units' => [ '%', 'px', 'vw' ],
                            'range' => [
                                '%' => [
                                    'min' => 1,
                                    'max' => 100,
                                ],
                                'px' => [
                                    'min' => 1,
                                    'max' => 1920,
                                ],
                                'vw' => [
                                    'min' => 1,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-wg' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [ 'pxl_bg_parallax!' => '']  
                        ],
                        [
                            'name' => 'bg_parallax_height',
                            'label' => esc_html__('Background Height', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'default' => [
                                'unit' => 'px',
                            ],
                            'tablet_default' => [
                                'unit' => 'px',
                            ],
                            'mobile_default' => [
                                'unit' => 'px',
                            ],
                            'size_units' => [ 'px', 'vh' ],
                            'range' => [
                                'px' => [
                                    'min' => 1,
                                    'max' => 1000,
                                ],
                                'vh' => [
                                    'min' => 1,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-image-wg' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [ 'pxl_bg_parallax!' => '']  
                        ],
                    ]
                ],
                [
                    'name'     => 'style_section',
                    'label'    => esc_html__( 'Style', 'herrington' ),
                    'tab'      => 'style',
                    'controls' => [
                       [
                        'name' => 'overflow_check',
                        'label' => esc_html__('Overflow', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'default' => 'true',            
                    ],
                    [
                        'name'        => 'width',
                        'label' => esc_html__( 'Width', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::SLIDER,
                        'control_type' => 'responsive',
                        'default' => [
                            'unit' => '%',
                        ],
                        'tablet_default' => [
                            'unit' => '%',
                        ],
                        'mobile_default' => [
                            'unit' => '%',
                        ],
                        'size_units' => [ '%', 'px', 'vw' ],
                        'range' => [
                            '%' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                            'px' => [
                                'min' => 1,
                                'max' => 1000,
                            ],
                            'vw' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .pxl-image--inner' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ],
                    [
                        'name'        => 'space',
                        'label' => esc_html__( 'Max Width', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::SLIDER,
                        'control_type' => 'responsive',
                        'default' => [
                            'unit' => '%',
                        ],
                        'tablet_default' => [
                            'unit' => '%',
                        ],
                        'mobile_default' => [
                            'unit' => '%',
                        ],
                        'size_units' => [ '%', 'px', 'vw' ],
                        'range' => [
                            '%' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                            'px' => [
                                'min' => 1,
                                'max' => 1000,
                            ],
                            'vw' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .pxl-image--inner' => 'max-width: {{SIZE}}{{UNIT}};',
                        ],
                    ],
                    [
                        'name'        => 'height',
                        'label' => esc_html__( 'Height', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::SLIDER,
                        'control_type' => 'responsive',
                        'default' => [
                            'unit' => 'px',
                        ],
                        'tablet_default' => [
                            'unit' => 'px',
                        ],
                        'mobile_default' => [
                            'unit' => 'px',
                        ],
                        'size_units' => ['px', 'vh' ],
                        'range' => [
                            'px' => [
                                'min' => 1,
                                'max' => 1000,
                            ],                        
                            'vh' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .pxl-image--inner' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ],
                    [
                        'name'        => 'max-height',
                        'label' => esc_html__( 'Height Img', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::SLIDER,
                        'control_type' => 'responsive',
                        'default' => [
                            'unit' => '%',
                        ],
                        'tablet_default' => [
                            'unit' => '%',
                        ],
                        'mobile_default' => [
                            'unit' => '%',
                        ],
                        'size_units' => [ '%', 'px', 'vh' ],
                        'range' => [
                            '%' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                            'px' => [
                                'min' => 1,
                                'max' => 1000,
                            ],                        
                            'vh' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .pxl-image--inner .pxl-image-wg' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ],
                    [
                        'name'        => 'maxx-height',
                        'label' => esc_html__( 'Max Height', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::SLIDER,
                        'control_type' => 'responsive',
                        'default' => [
                            'unit' => '%',
                        ],
                        'tablet_default' => [
                            'unit' => '%',
                        ],
                        'mobile_default' => [
                            'unit' => '%',
                        ],
                        'size_units' => [ '%', 'px', 'vh' ],
                        'range' => [
                            '%' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                            'px' => [
                                'min' => 1,
                                'max' => 1000,
                            ],                        
                            'vh' => [
                                'min' => 1,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .pxl-image--inner .pxl-image-wg img' => 'max-height: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}};',
                        ],
                    ],
                    [
                        'name'        => 'object-fit',
                        'label' => esc_html__( 'Object Fit', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'control_type' => 'responsive',
                        'condition' => [
                            'height[size]!' => '',
                        ],
                        'options' => [
                            '' => esc_html__( 'Default', 'herrington' ),
                            'fill' => esc_html__( 'Fill', 'herrington' ),
                            'cover' => esc_html__( 'Cover', 'herrington' ),
                            'contain' => esc_html__( 'Contain', 'herrington' ),
                        ],
                        'default' => '',
                        'selectors' => [
                            '{{WRAPPER}} img' => 'object-fit: {{VALUE}};',
                        ],
                    ],
                    [
                        'name'        => 'separator_panel_style',
                        'type' => \Elementor\Controls_Manager::DIVIDER,
                        'style' => 'thick',
                    ],
                    [
                        'name' => 'image_effects',
                        'control_type' => 'tab',
                        'tabs' => [
                            [
                                'name' => 'normal',
                                'label' => esc_html__('Normal', 'herrington' ),
                                'type' => \Elementor\Controls_Manager::TAB,
                                'controls' => [
                                    [
                                        'name'        => 'opacity',
                                        'label' => esc_html__( 'Opacity', 'herrington' ),
                                        'type' => \Elementor\Controls_Manager::SLIDER,
                                        'range' => [
                                            'px' => [
                                                'max' => 1,
                                                'min' => 0.10,
                                                'step' => 0.01,
                                            ],
                                        ],
                                        'selectors' => [
                                            '{{WRAPPER}} img' => 'opacity: {{SIZE}};',
                                        ],
                                    ],
                                    [
                                        'name' => 'css_filters',
                                        'label' => esc_html__('CSS Filters', 'herrington' ),
                                        'type' => \Elementor\Group_Control_Css_Filter::get_type(),
                                        'control_type' => 'group',
                                        'selector' => '{{WRAPPER}} img',
                                    ],       
                                ],
                            ],
                            [
                                'name' => 'hover',
                                'label' => esc_html__('Hover', 'herrington' ),
                                'type' => \Elementor\Controls_Manager::TAB,
                                'controls' => [
                                    [
                                        'name'        => 'opacity_hover',
                                        'label' => esc_html__( 'Opacity Hover', 'herrington' ),
                                        'type' => \Elementor\Controls_Manager::SLIDER,
                                        'range' => [
                                            'px' => [
                                                'max' => 1,
                                                'min' => 0.10,
                                                'step' => 0.01,
                                            ],
                                        ],
                                        'selectors' => [
                                            '{{WRAPPER}}:hover img' => 'opacity: {{SIZE}};',
                                        ],
                                    ],
                                    [
                                        'name' => 'css_filters_hover',
                                        'label' => esc_html__('CSS Filters Hover', 'herrington' ),
                                        'type' => \Elementor\Group_Control_Css_Filter::get_type(),
                                        'control_type' => 'group',
                                        'selector' => '{{WRAPPER}}:hover img',
                                    ],  
                                    [
                                        'name' => 'background_hover_transition',
                                        'label' => esc_html__( 'Transition Duration', 'herrington' ),
                                        'type' => \Elementor\Controls_Manager::SLIDER,
                                        'range' => [
                                            'px' => [
                                                'max' => 3,
                                                'step' => 0.1,
                                            ],
                                        ],
                                        'selectors' => [
                                            '{{WRAPPER}} img' => 'transition-duration: {{SIZE}}s',
                                        ],
                                    ],
                                    [
                                        'name' => 'hover_animation',
                                        'label' => esc_html__( 'Hover Animation', 'herrington' ),
                                        'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
                                    ]     
                                ]
                            ]
                        ],

                    ], 
                    [
                        'name' => 'image_border',
                        'type' => \Elementor\Group_Control_Border::get_type(),
                        'control_type' => 'group',
                        'selector' => '{{WRAPPER}} img, {{WRAPPER}} .pxl-bg-parallax',
                        'separator' => 'before',
                    ],
                    [
                        'name'         => 'image_border_radius',
                        'label'        => esc_html__( 'Border Radius', 'herrington' ),
                        'type'         => \Elementor\Controls_Manager::DIMENSIONS,
                        'control_type' => 'responsive',
                        'size_units'   => [ 'px', '%' ],
                        'selectors'    => [
                            '{{WRAPPER}} img, {{WRAPPER}} .pxl-image--inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .pxl-bg-parallax' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ],
                    [
                        'name'         => 'image_box_shadow',
                        'label'        => esc_html__( 'Box Shadow', 'herrington' ),
                        'type'         => \Elementor\Group_Control_Box_Shadow::get_type(),
                        'control_type' => 'group',
                        'exclude' => [
                            'box_shadow_position',
                        ],
                        'selector' => '{{WRAPPER}} img',
                    ]   
                ],
            ],  
            [
                'name' => 'custom_style_section',
                'label' => esc_html__('Custom Style', 'herrington' ),
                'tab'      => 'style',
                'controls' => [
                    [
                        'name' => 'custom_style',
                        'label' => esc_html__( 'Style', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'options' => [
                            ''           => esc_html__( 'None', 'herrington' ),
                            'pxl-image-effect1' => esc_html__('Zigzag', 'herrington' ),
                            'pxl-image-tilt' => esc_html__('Tilt', 'herrington' ),
                            'slide-top-to-bottom' => esc_html__('Slide Top To Bottom ', 'herrington' ),
                            'pxl-image-effect2' => esc_html__('Slide Bottom To Top ', 'herrington' ),
                            'slide-right-to-left' => esc_html__('Slide Right To Left ', 'herrington' ),
                            'slide-left-to-right' => esc_html__('Slide Left To Right ', 'herrington' ),
                            'skew-in' => esc_html__( 'Skew In', 'herrington' ),
                        ],
                    ],
                    [
                        'name' => 'parallax_valuee',
                        'label' => esc_html__('Parallax Value', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'condition' => [
                            'custom_style' => 'pxl-image-parallax',
                        ],
                        'default' => '40',
                        'description' => esc_html__('Enter number.', 'herrington' ),
                    ],
                    [
                        'name' => 'max_tilt',
                        'label' => esc_html__('Max Tilt', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'condition' => [
                            'custom_style' => 'pxl-image-tilt',
                        ],
                        'default' => '10',
                        'description' => esc_html__('Enter number.', 'herrington' ),
                    ],
                    [
                        'name' => 'speed_tilt',
                        'label' => esc_html__('Speed Tilt', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'condition' => [
                            'custom_style' => 'pxl-image-tilt',
                        ],
                        'default' => '400',
                        'description' => esc_html__('Enter number.', 'herrington' ),
                    ],
                    [
                        'name' => 'perspective_tilt',
                        'label' => esc_html__('Perspective Tilt', 'herrington' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'condition' => [
                            'custom_style' => 'pxl-image-tilt',
                        ],
                        'default' => '1000',
                        'description' => esc_html__('Enter number.', 'herrington' ),
                    ],
                    [
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
                            '{{WRAPPER}} .pxl-image-single' => 'animation-duration: {{SIZE}}ms;',
                        ],
                        'condition' => [
                            'custom_style!' => ['pxl-image-tilt','pxl-hover1'],
                        ],
                        'description' => 'Enter number, unit is ms.',
                    ],
                ]
            ],
            herrington_widget_animation_settings(),    
        ], 
    ],
],
herrington_get_class_widget_path()
);