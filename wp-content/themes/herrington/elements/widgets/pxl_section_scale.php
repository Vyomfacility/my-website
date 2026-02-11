<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_section_scale',
        'title' => esc_html__('BR Section Scale', 'herrington' ),
        'icon' => 'eicon-animation',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_content',
                    'label' => esc_html__('Content', 'herrington' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'bg_type',
                            'label' => esc_html__('Background Type', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'img' => 'Image',
                                'video' => 'Video',
                            ],
                            'default' => 'img',
                        ),
                        array(
                            'name' => 'bg_img',
                            'label' => esc_html__('Background Image', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                            'condition' => [
                                'bg_type' => ['img'],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-section-scale .pxl-sticky-parallax' => 'background-image: url( {{URL}} );',
                            ],  
                        ),
                        array(
                            'name' => 'bg_img_position',
                            'label' => esc_html__( 'Background Image Position', 'herrington' ),
                            'type'         => \Elementor\Controls_Manager::SELECT,
                            'options'      => array(
                                ''              => esc_html__( 'Default', 'herrington' ),
                                'center center' => esc_html__( 'Center Center', 'herrington' ),
                                'center left'   => esc_html__( 'Center Left', 'herrington' ),
                                'center right'  => esc_html__( 'Center Right', 'herrington' ),
                                'top center'    => esc_html__( 'Top Center', 'herrington' ),
                                'top left'      => esc_html__( 'Top Left', 'herrington' ),
                                'top right'     => esc_html__( 'Top Right', 'herrington' ),
                                'bottom center' => esc_html__( 'Bottom Center', 'herrington' ),
                                'bottom left'   => esc_html__( 'Bottom Left', 'herrington' ),
                                'bottom right'  => esc_html__( 'Bottom Right', 'herrington' ),
                                'initial'       =>  esc_html__( 'Custom', 'herrington' ),
                            ),
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-section-scale .pxl-sticky-parallax' => 'background-position: {{VALUE}};',
                            ],
                            'condition' => [
                                'bg_type' => 'img',
                                'bg_img[url]!' => '',
                            ]        
                        ),
                        array(
                            'name' => 'bg_img_size',
                            'label' => esc_html__( 'Background Image Size', 'herrington' ),
                            'type'         => \Elementor\Controls_Manager::SELECT,
                            'hide_in_inner' => true,
                            'options'      => array(
                                ''              => esc_html__( 'Default', 'herrington' ),
                                'auto' => esc_html__( 'Auto', 'herrington' ),
                                'cover'   => esc_html__( 'Cover', 'herrington' ),
                                'contain'  => esc_html__( 'Contain', 'herrington' ),
                            ),
                            'default'      => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-section-scale .pxl-sticky-parallax' => 'background-size: {{VALUE}};',
                            ],
                            'condition' => [
                                'bg_type' => 'img',
                                'bg_img[url]!' => '',
                            ]       
                        ),
                        array(
                            'name' => 'bg_video',
                            'label' => esc_html__('Video Link', 'herrington'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'condition' => [
                                'bg_type' => ['video'],
                            ],
                            'description' => 'Video file (mp4 is recommended).'
                        ),
                        array(
                            'name' => 'overlay_color',
                            'label' => esc_html__('Overlay Color', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-section-scale .pxl-section-overlay' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'shape_1',
                            'label' => esc_html__('Shape 1', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                        ),
                        array(
                            'name' => 'shape_2',
                            'label' => esc_html__('Shape 2', 'herrington' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                        ),
                    ),
                ),
            ),
        ),
    ),
    herrington_get_class_widget_path()
);