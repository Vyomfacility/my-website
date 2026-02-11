<?php

add_action( 'pxl_post_metabox_register', 'herrington_page_options_register' );
function herrington_page_options_register( $metabox ) {
	
	$panels = [
		'post' => [
			'opt_name'            => 'post_option',
			'display_name'        => esc_html__( 'Post Settings', 'herrington' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'post_settings' => [
					'title'  => esc_html__( 'Post Settings', 'herrington' ),
					'icon'   => 'el el-refresh',
					'fields' => array_merge(
						herrington_sidebar_pos_opts(['prefix' => 'post_', 'default' => true, 'default_value' => '-1']),
						herrington_page_title_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'           => 'custom_main_title',
								'type'         => 'text',
								'title'        => esc_html__( 'Custom Main Title', 'herrington' ),
								'subtitle'     => esc_html__( 'Custom heading text title', 'herrington' ),
								'required' => array( 'pt_mode', '!=', 'none' )
							),
							array(
								'id'           => 'custom_sub_title',
								'type'         => 'text',
								'title'        => esc_html__( 'Custom Sub title', 'herrington' ),
								'subtitle'     => esc_html__( 'Add short description for page title', 'herrington' ),
								'required' => array( 'pt_mode', '!=', 'none' )
							)
						),
						array(
							array(
								'id'          => 'featured-video-url',
								'type'        => 'text',
								'title'       => esc_html__( 'Video URL', 'herrington' ),
								'description' => esc_html__( 'Video will show when set post format is video', 'herrington' ),
								'validate'    => 'url',
								'msg'         => 'Url error!',
							),
							array(
								'id'          => 'featured-audio-url',
								'type'        => 'text',
								'title'       => esc_html__( 'Audio URL', 'herrington' ),
								'description' => esc_html__( 'Audio that will show when set post format is audio', 'herrington' ),
								'validate'    => 'url',
								'msg'         => 'Url error!',
							),
							array(
								'id'=>'featured-quote-text',
								'type' => 'textarea',
								'title' => esc_html__('Quote Text', 'herrington'),
								'default' => '',
							),
							array(
								'id'          => 'featured-quote-cite',
								'type'        => 'text',
								'title'       => esc_html__( 'Quote Cite', 'herrington' ),
								'description' => esc_html__( 'Quote will show when set post format is quote', 'herrington' ),
							),
							array(
								'id'       => 'featured-link-url',
								'type'     => 'text',
								'title'    => esc_html__( 'Format Link URL', 'herrington' ),
								'description' => esc_html__( 'Link will show when set post format is link', 'herrington' ),
							),
							array(
								'id'          => 'featured-link-text',
								'type'        => 'text',
								'title'       => esc_html__( 'Format Link Text', 'herrington' ),
							),
						)
					)
				]
			]
		],
		'page' => [
			'opt_name'            => 'pxl_page_options',
			'display_name'        => esc_html__( 'Page Options', 'herrington' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header' => [
					'title'  => esc_html__( 'Header', 'herrington' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						herrington_header_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						herrington_header_mobile_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'       => 'header_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Header Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							
							array(
								'id'       => 'logo_m',
								'type'     => 'media',
								'title'    => esc_html__('Mobile Logo', 'herrington'),
							),
							array(
								'id'       => 'p_menu',
								'type'     => 'select',
								'title'    => esc_html__( 'Menu', 'herrington' ),
								'options'  => herrington_get_nav_menu_slug(),
								'default' => '',
							),
						),
						array(
							array(
								'id'       => 'sticky_scroll',
								'type'     => 'button_set',
								'title'    => esc_html__('Sticky Scroll', 'herrington'),
								'options'  => array(
									'-1' => esc_html__('Inherit', 'herrington'),
									'pxl-sticky-stt' => esc_html__('Scroll To Top', 'herrington'),
									'pxl-sticky-stb'  => esc_html__('Scroll To Bottom', 'herrington'),
								),
								'default'  => '-1',
							),
						)
					)
				],
				'page_title' => [
					'title'  => esc_html__( 'Page Title', 'herrington' ),
					'icon'   => 'el el-indent-left',
					'fields' => array_merge(
						herrington_page_title_opts([
							'default'         => true,
							'default_value'   => '-1'
						])
					)
				],
				'content' => [
					'title'  => esc_html__( 'Content', 'herrington' ),
					'icon'   => 'el-icon-pencil',
					'fields' => array_merge(
						herrington_sidebar_pos_opts(['prefix' => 'page_', 'default' => false, 'default_value' => '0']),
						array(
							array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Spacing Top/Bottom', 'herrington' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							), 
						)
					)
				],
				'footer' => [
					'title'  => esc_html__( 'Footer', 'herrington' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
						herrington_footer_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'          => 'footer_max_width',
								'type'        => 'text',
								'title'       => esc_html__('Footer Max Width', 'herrington'),
								'subtitle'       => esc_html__('Enter number.', 'herrington'),
								'transparent' => false,
								'default'     => '',
								'force_output' => true,
							),
							array(
								'id'       => 'footer_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Footer Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							array(
								'id'       => 'p_footer_fixed',
								'type'     => 'button_set',
								'title'    => esc_html__('Footer Fixed', 'herrington'),
								'options'  => array(
									'inherit' => esc_html__('Inherit', 'herrington'),
									'on' => esc_html__('On', 'herrington'),
									'off' => esc_html__('Off', 'herrington'),
								),
								'default'  => 'inherit',
							),
							array(
								'id'       => 'back_top_top_style',
								'type'     => 'button_set',
								'title'    => esc_html__('Back to Top Style', 'herrington'),
								'options'  => array(
									'style-default' => esc_html__('Default', 'herrington'),
									'style-round' => esc_html__('Round', 'herrington'),
								),
								'default'  => 'style-default',
							),
						)
					)
				],
				'colors' => [
					'title'  => esc_html__( 'Colors', 'herrington' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
						array(
							array(
								'id'       => 'content_bgp_color',
								'type'     => 'color_rgba',
								'title'    => esc_html__('Body Background Color', 'herrington'),
								'subtitle' => esc_html__('Body Background color.', 'herrington'),
								'output'   => array('background-color' => 'body')
							),
							array(
								'id'          => 'primary_color',
								'type'        => 'color',
								'title'       => esc_html__('Primary Color', 'herrington'),
								'transparent' => false,
								'default'     => ''
							),
						)
					)
				],
				'extra' => [
					'title'  => esc_html__( 'Extra', 'herrington' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
						array(
							array(
								'id' => 'body_custom_class',
								'type' => 'text',
								'title' => esc_html__('Body Custom Class', 'herrington'),
							),
						)
					)
				]
			]
		],
		'portfolio' => [
			'opt_name'            => 'pxl_portfolio_options',
			'display_name'        => esc_html__( 'Product Options', 'herrington' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header' => [
					'title'  => esc_html__( 'General', 'herrington' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						array(
							array(
								'id'          => 'client',
								'type'        => 'text',
								'title'       => esc_html__( 'Client', 'herrington' ),
							),
							array(
								'id'          => 'date_finish',
								'type'        => 'text',
								'title'       => esc_html__( 'Start Day', 'herrington' ),
							),
						)
					)
				],
				'header1' => [
					'title'  => esc_html__( 'Header', 'herrington' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						herrington_header_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						herrington_header_mobile_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'       => 'header_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Header Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							array(
								'id'       => 'p_menu',
								'type'     => 'select',
								'title'    => esc_html__( 'Menu', 'herrington' ),
								'options'  => herrington_get_nav_menu_slug(),
								'default' => '',
							),
						),
						array(
							array(
								'id'       => 'sticky_scroll',
								'type'     => 'button_set',
								'title'    => esc_html__('Sticky Scroll', 'herrington'),
								'options'  => array(
									'-1' => esc_html__('Inherit', 'herrington'),
									'pxl-sticky-stt' => esc_html__('Scroll To Top', 'herrington'),
									'pxl-sticky-stb'  => esc_html__('Scroll To Bottom', 'herrington'),
								),
								'default'  => '-1',
							),
							array(
								'id'       => 'header_margin',
								'type'     => 'spacing',
								'mode'     => 'margin',
								'title'    => esc_html__('Margin', 'herrington'),
								'width'    => false,
								'unit'     => 'px',
								'output'    => array('#pxl-header-elementor .pxl-header-elementor-main'),
							),
						)
					)
					
				],
				'page_title' => [
					'title'  => esc_html__( 'Page Title', 'herrington' ),
					'icon'   => 'el el-indent-left',
					'fields' => array_merge(
						herrington_page_title_opts([
							'default'         => true,
							'default_value'   => '-1'
						])
					)
				],
				'content' => [
					'title'  => esc_html__( 'Content', 'herrington' ),
					'icon'   => 'el-icon-pencil',
					'fields' => array_merge(
						herrington_sidebar_pos_opts(['prefix' => 'page_', 'default' => false, 'default_value' => '0']),
						array(
							array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Spacing Top/Bottom', 'herrington' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							), 
						)
					)
				],
				'footer' => [
					'title'  => esc_html__( 'Footer', 'herrington' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
						herrington_footer_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'       => 'footer_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Footer Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							array(
								'id'       => 'p_footer_fixed',
								'type'     => 'button_set',
								'title'    => esc_html__('Footer Fixed', 'herrington'),
								'options'  => array(
									'inherit' => esc_html__('Inherit', 'herrington'),
									'on' => esc_html__('On', 'herrington'),
									'off' => esc_html__('Off', 'herrington'),
								),
								'default'  => 'inherit',
							),
							array(
								'id'       => 'back_top_top_style',
								'type'     => 'button_set',
								'title'    => esc_html__('Back to Top Style', 'herrington'),
								'options'  => array(
									'style-default' => esc_html__('Default', 'herrington'),
									'style-round' => esc_html__('Round', 'herrington'),
								),
								'default'  => 'style-default',
							),
						)
					)
				],
			]
		],
		'product' => [
			'opt_name'            => 'pxl_product_options',
			'display_name'        => esc_html__( 'Portfolio Options', 'herrington' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header1' => [
					'title'  => esc_html__( 'Header', 'herrington' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						herrington_header_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						herrington_header_mobile_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'       => 'header_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Header Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							array(
								'id'       => 'p_menu',
								'type'     => 'select',
								'title'    => esc_html__( 'Menu', 'herrington' ),
								'options'  => herrington_get_nav_menu_slug(),
								'default' => '',
							),
						),
						array(
							array(
								'id'       => 'sticky_scroll',
								'type'     => 'button_set',
								'title'    => esc_html__('Sticky Scroll', 'herrington'),
								'options'  => array(
									'-1' => esc_html__('Inherit', 'herrington'),
									'pxl-sticky-stt' => esc_html__('Scroll To Top', 'herrington'),
									'pxl-sticky-stb'  => esc_html__('Scroll To Bottom', 'herrington'),
								),
								'default'  => '-1',
							),
							array(
								'id'       => 'header_margin',
								'type'     => 'spacing',
								'mode'     => 'margin',
								'title'    => esc_html__('Margin', 'herrington'),
								'width'    => false,
								'unit'     => 'px',
								'output'    => array('#pxl-header-elementor .pxl-header-elementor-main'),
							),
						)
					)
					
				],
				'page_title' => [
					'title'  => esc_html__( 'Page Title', 'herrington' ),
					'icon'   => 'el el-indent-left',
					'fields' => array_merge(
						herrington_page_title_opts([
							'default'         => true,
							'default_value'   => '-1'
						])
					)
				],
				'content' => [
					'title'  => esc_html__( 'Content', 'herrington' ),
					'icon'   => 'el-icon-pencil',
					'fields' => array_merge(
						herrington_sidebar_pos_opts(['prefix' => 'page_', 'default' => false, 'default_value' => '0']),
						array(
							array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Spacing Top/Bottom', 'herrington' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							), 
						)
					)
				],
				'footer' => [
					'title'  => esc_html__( 'Footer', 'herrington' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
						herrington_footer_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
					)
				],
			]
		],
		'service' => [
			'opt_name'            => 'pxl_service_options',
			'display_name'        => esc_html__( 'Service Options', 'herrington' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header' => [
					'title'  => esc_html__( 'General', 'herrington' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						array(
							array(
								'id'=> 'service_external_link',
								'type' => 'text',
								'title' => esc_html__('External Link', 'herrington'),
								'validate' => 'url',
								'default' => '',
							),
							array(
								'id'=>'multi_text_country',
								'type' => 'multi_text',
								'title' => ('Multi Text Option'),
								'title'    => esc_html('Mutil Text', 'herrington'),
							),
							array(
								'id'       => 'service_icon_type',
								'type'     => 'button_set',
								'title'    => esc_html__('Icon Type', 'herrington'),
								'options'  => array(
									'icon'  => esc_html__('Icon', 'herrington'),
									'image'  => esc_html__('Image', 'herrington'),
								),
								'default'  => 'icon'
							),
							array(
								'id'       => 'service_icon_font',
								'type'     => 'pxl_iconpicker',
								'title'    => esc_html__('Icon', 'herrington'),
								'required' => array( 0 => 'service_icon_type', 1 => 'equals', 2 => 'icon' ),
								'force_output' => true
							),
							array(
								'id'       => 'service_icon_img',
								'type'     => 'media',
								'title'    => esc_html__('Icon Image', 'herrington'),
								'default' => '',
								'required' => array( 0 => 'service_icon_type', 1 => 'equals', 2 => 'image' ),
								'force_output' => true
							),
						)
					)
				],
				'header1' => [
					'title'  => esc_html__( 'Header', 'herrington' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						herrington_header_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						herrington_header_mobile_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'       => 'header_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Header Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							array(
								'id'       => 'p_menu',
								'type'     => 'select',
								'title'    => esc_html__( 'Menu', 'herrington' ),
								'options'  => herrington_get_nav_menu_slug(),
								'default' => '',
							),
						),
						array(
							array(
								'id'       => 'sticky_scroll',
								'type'     => 'button_set',
								'title'    => esc_html__('Sticky Scroll', 'herrington'),
								'options'  => array(
									'-1' => esc_html__('Inherit', 'herrington'),
									'pxl-sticky-stt' => esc_html__('Scroll To Top', 'herrington'),
									'pxl-sticky-stb'  => esc_html__('Scroll To Bottom', 'herrington'),
								),
								'default'  => '-1',
							),
							array(
								'id'       => 'header_margin',
								'type'     => 'spacing',
								'mode'     => 'margin',
								'title'    => esc_html__('Margin', 'herrington'),
								'width'    => false,
								'unit'     => 'px',
								'output'    => array('#pxl-header-elementor .pxl-header-elementor-main'),
							),
						)
					)
					
				],
				'page_title' => [
					'title'  => esc_html__( 'Page Title', 'herrington' ),
					'icon'   => 'el el-indent-left',
					'fields' => array_merge(
						herrington_page_title_opts([
							'default'         => true,
							'default_value'   => '-1'
						])
					)
				],
				'content' => [
					'title'  => esc_html__( 'Content', 'herrington' ),
					'icon'   => 'el-icon-pencil',
					'fields' => array_merge(
						herrington_sidebar_pos_opts(['prefix' => 'page_', 'default' => false, 'default_value' => '0']),
						array(
							array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Spacing Top/Bottom', 'herrington' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							), 
						)
					)
				],
				'footer' => [
					'title'  => esc_html__( 'Footer', 'herrington' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
						herrington_footer_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'       => 'footer_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Footer Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							array(
								'id'       => 'p_footer_fixed',
								'type'     => 'button_set',
								'title'    => esc_html__('Footer Fixed', 'herrington'),
								'options'  => array(
									'inherit' => esc_html__('Inherit', 'herrington'),
									'on' => esc_html__('On', 'herrington'),
									'off' => esc_html__('Off', 'herrington'),
								),
								'default'  => 'inherit',
							),
							array(
								'id'       => 'back_top_top_style',
								'type'     => 'button_set',
								'title'    => esc_html__('Back to Top Style', 'herrington'),
								'options'  => array(
									'style-default' => esc_html__('Default', 'herrington'),
									'style-round' => esc_html__('Round', 'herrington'),
								),
								'default'  => 'style-default',
							),
						)
					)
				],
			]
		],
		'industries' => [
			'opt_name'            => 'pxl_industries_options',
			'display_name'        => esc_html__( 'Industries Options', 'herrington' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'header' => [
					'title'  => esc_html__( 'General', 'herrington' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						array(
							array(
								'id'=> 'industries_external_link',
								'type' => 'text',
								'title' => esc_html__('External Link', 'herrington'),
								'validate' => 'url',
								'default' => '',
							),
							array(
								'id'       => 'industries_icon_type',
								'type'     => 'button_set',
								'title'    => esc_html__('Icon Type', 'herrington'),
								'options'  => array(
									'icon'  => esc_html__('Icon', 'herrington'),
									'image'  => esc_html__('Image', 'herrington'),
								),
								'default'  => 'icon'
							),
							array(
								'id'       => 'industries_icon_font',
								'type'     => 'pxl_iconpicker',
								'title'    => esc_html__('Icon', 'herrington'),
								'required' => array( 0 => 'industries_icon_type', 1 => 'equals', 2 => 'icon' ),
								'force_output' => true
							),
							array(
								'id'       => 'industries_icon_img',
								'type'     => 'media',
								'title'    => esc_html__('Icon Image', 'herrington'),
								'default' => '',
								'required' => array( 0 => 'industries_icon_type', 1 => 'equals', 2 => 'image' ),
								'force_output' => true
							),
						)
					)
				],
				'header1' => [
					'title'  => esc_html__( 'Header', 'herrington' ),
					'icon'   => 'el-icon-website',
					'fields' => array_merge(
						herrington_header_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						herrington_header_mobile_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'       => 'header_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Header Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							array(
								'id'       => 'p_menu',
								'type'     => 'select',
								'title'    => esc_html__( 'Menu', 'herrington' ),
								'options'  => herrington_get_nav_menu_slug(),
								'default' => '',
							),
						),
						array(
							array(
								'id'       => 'sticky_scroll',
								'type'     => 'button_set',
								'title'    => esc_html__('Sticky Scroll', 'herrington'),
								'options'  => array(
									'-1' => esc_html__('Inherit', 'herrington'),
									'pxl-sticky-stt' => esc_html__('Scroll To Top', 'herrington'),
									'pxl-sticky-stb'  => esc_html__('Scroll To Bottom', 'herrington'),
								),
								'default'  => '-1',
							),
							array(
								'id'       => 'header_margin',
								'type'     => 'spacing',
								'mode'     => 'margin',
								'title'    => esc_html__('Margin', 'herrington'),
								'width'    => false,
								'unit'     => 'px',
								'output'    => array('#pxl-header-elementor .pxl-header-elementor-main'),
							),
						)
					)
					
				],
				'page_title' => [
					'title'  => esc_html__( 'Page Title', 'herrington' ),
					'icon'   => 'el el-indent-left',
					'fields' => array_merge(
						herrington_page_title_opts([
							'default'         => true,
							'default_value'   => '-1'
						])
					)
				],
				'content' => [
					'title'  => esc_html__( 'Content', 'herrington' ),
					'icon'   => 'el-icon-pencil',
					'fields' => array_merge(
						herrington_sidebar_pos_opts(['prefix' => 'page_', 'default' => false, 'default_value' => '0']),
						array(
							array(
								'id'             => 'content_spacing',
								'type'           => 'spacing',
								'output'         => array( '#pxl-wapper #pxl-main' ),
								'right'          => false,
								'left'           => false,
								'mode'           => 'padding',
								'units'          => array( 'px' ),
								'units_extended' => 'false',
								'title'          => esc_html__( 'Spacing Top/Bottom', 'herrington' ),
								'default'        => array(
									'padding-top'    => '',
									'padding-bottom' => '',
									'units'          => 'px',
								)
							), 
						)
					)
				],
				'footer' => [
					'title'  => esc_html__( 'Footer', 'herrington' ),
					'icon'   => 'el el-website',
					'fields' => array_merge(
						herrington_footer_opts([
							'default'         => true,
							'default_value'   => '-1'
						]),
						array(
							array(
								'id'       => 'footer_display',
								'type'     => 'button_set',
								'title'    => esc_html__('Footer Display', 'herrington'),
								'options'  => array(
									'show' => esc_html__('Show', 'herrington'),
									'hide'  => esc_html__('Hide', 'herrington'),
								),
								'default'  => 'show',
							),
							array(
								'id'       => 'p_footer_fixed',
								'type'     => 'button_set',
								'title'    => esc_html__('Footer Fixed', 'herrington'),
								'options'  => array(
									'inherit' => esc_html__('Inherit', 'herrington'),
									'on' => esc_html__('On', 'herrington'),
									'off' => esc_html__('Off', 'herrington'),
								),
								'default'  => 'inherit',
							),
							array(
								'id'       => 'back_top_top_style',
								'type'     => 'button_set',
								'title'    => esc_html__('Back to Top Style', 'herrington'),
								'options'  => array(
									'style-default' => esc_html__('Default', 'herrington'),
									'style-round' => esc_html__('Round', 'herrington'),
								),
								'default'  => 'style-default',
							),
						)
					)
				],
			]
		],

		'pxl-template' => [ //post_type
		'opt_name'            => 'pxl_hidden_template_options',
		'display_name'        => esc_html__( 'Template Options', 'herrington' ),
		'show_options_object' => false,
		'context'  => 'advanced',
		'priority' => 'default',
		'sections'  => [
			'header' => [
				'title'  => esc_html__( 'General', 'herrington' ),
				'icon'   => 'el-icon-website',
				'fields' => array(
					array(
						'id'    => 'template_type',
						'type'  => 'select',
						'title' => esc_html__('Type', 'herrington'),
						'options' => [
							'df'       	   => esc_html__('Select Type', 'herrington'), 
							'header'       => esc_html__('Header Desktop', 'herrington'),
							'header-mobile'       => esc_html__('Header Mobile', 'herrington'),
							'footer'       => esc_html__('Footer', 'herrington'), 
							'mega-menu'    => esc_html__('Mega Menu', 'herrington'), 
							'page-title'   => esc_html__('Page Title', 'herrington'), 
							'tab' => esc_html__('Tab', 'herrington'),
							'hidden-panel' => esc_html__('Hidden Panel', 'herrington'),
							'popup' => esc_html__('Popup', 'herrington'),
							'widget' => esc_html__('Widget Sidebar', 'herrington'),
							'page' => esc_html__('Page', 'herrington'),
							'slider' => esc_html__('Slider', 'herrington'),
						],
						'default' => 'df',
					),
					array(
						'id'    => 'header_type',
						'type'  => 'select',
						'title' => esc_html__('Header Type', 'herrington'),
						'options' => [
							'px-header--default'       	   => esc_html__('Default', 'herrington'), 
							'px-header--transparent'       => esc_html__('Transparent', 'herrington'),
							'px-header--left_sidebar'       => esc_html__('Left Sidebar', 'herrington'),
						],
						'default' => 'px-header--default',
						'indent' => true,
						'required' => array( 0 => 'template_type', 1 => 'equals', 2 => 'header' ),
					),

					array(
						'id'    => 'header_mobile_type',
						'type'  => 'select',
						'title' => esc_html__('Header Type', 'herrington'),
						'options' => [
							'px-header--default'       	   => esc_html__('Default', 'herrington'), 
							'px-header--transparent'       => esc_html__('Transparent', 'herrington'),
						],
						'default' => 'px-header--default',
						'indent' => true,
						'required' => array( 0 => 'template_type', 1 => 'equals', 2 => 'header-mobile' ),
					),

					array(
						'id'    => 'hidden_panel_position',
						'type'  => 'select',
						'title' => esc_html__('Hidden Panel Position', 'herrington'),
						'options' => [
							'top'       	   => esc_html__('Top', 'herrington'),
							'right'       	   => esc_html__('Right', 'herrington'),
							'left'       	   => esc_html__('Left', 'herrington'),
						],
						'default' => 'right',
						'required' => array( 0 => 'template_type', 1 => 'equals', 2 => 'hidden-panel' ),
					),
					array(
						'id'          => 'hidden_panel_height',
						'type'        => 'text',
						'title'       => esc_html__('Hidden Panel Height', 'herrington'),
						'subtitle'       => esc_html__('Enter number.', 'herrington'),
						'transparent' => false,
						'default'     => '',
						'force_output' => true,
						'required' => array( 0 => 'hidden_panel_position', 1 => 'equals', 2 => 'top' ),
					),
					array(
						'id'          => 'hidden_panel_width',
						'type'        => 'text',
						'title'       => esc_html__('Hidden Panel Width', 'herrington'),
						'subtitle'       => esc_html__('Enter number.', 'herrington'),
						'transparent' => false,
						'default'     => '',
						'force_output' => true,
						'required' => array( 0 => 'hidden_panel_position', 1 => 'equals', 2 => 'left' ),
					),
					array(
						'id'          => 'hidden_panel_boxcolor',
						'type'        => 'color',
						'title'       => esc_html__('Box Color', 'herrington'),
						'transparent' => false,
						'default'     => '',
						'required' => array( 0 => 'template_type', 1 => 'equals', 2 => 'hidden-panel' ),
					),

					array(
						'id'          => 'header_sidebar_width',
						'type'        => 'slider',
						'title'       => esc_html__('Header Sidebar Width', 'herrington'),
						"default"   => 300,
						"min"       => 50,
						"step"      => 1,
						"max"       => 900,
						'force_output' => true,
						'required' => array( 0 => 'header_type', 1 => 'equals', 2 => 'px-header--left_sidebar' ),
					),

					array(
						'id'          => 'header_sidebar_border',
						'type'        => 'border',
						'title'       => esc_html__('Header Sidebar Border', 'herrington'),
						'force_output' => true,
						'required' => array( 0 => 'header_type', 1 => 'equals', 2 => 'px-header--left_sidebar' ),
						'default' => '',
					),
				),

],
]
],
];

$metabox->add_meta_data( $panels );
}
