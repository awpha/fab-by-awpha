<?php
/*
 * Functions
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// Include Rational Option Pages by Jeremy Hixon
if ( !class_exists( 'RationalOptionPages' ) ) {
	require_once('admin/RationalOptionPages.php');
}

// Check awpha theme
// Change 'parent_slug'

// Add to menu
$fab_menu = array(
	// sub page of the "Settings" menu item
	'fab_awpha'	=> array(
		'parent_slug'	=> 'options-general.php',
		'page_title'	=> __( 'FAB settings', 'fab_awpha' ),
		'menu_slug'		=> 'fab-settings',
		'capability'	=> 'manage_options',
		'sections'		=> array(
			//Sections
			'general-settings'	=> array(
				'title'			=> __( 'General Settings', 'fab_awpha' ),
				'text'			=> '',
				'fields'		=> array(
					'enabled'		=> array(
						'id'			=> 'enabled',
						'type'			=> 'checkbox',
						'title'			=> __( 'Enable FAB', 'fab_awpha' ),
						'text'			=> __( 'Display FAB on pages.' ),
					),
					'not_in'		=> array(
						'id'			=> 'not_in',
						'title'			=> __( 'Do not show FAB', 'fab_awpha' ),
						'text'			=> __( 'Type pages/posts IDs that FAB will not be shown. Separate with comma. eg. <code>2,54,637</code>' ),
					),
			//		'metabox'		=> array(
			//			'id'			=> 'metabox',
			//			'type'			=> 'checkbox',
			//			'title'			=> __( 'Control visibility per page', 'fab_awpha' ),
			//			'text'			=> __( 'If checked a metabox will be displayed in pages and posts to control FAB visibility.' ),
			//		),
				),
			),
			// Content
			'fab-content'	=> array(
				'title'			=> __( 'Style Settings', 'fab_awpha' ),
				'fields'		=> array(
					//General style settings
					'fab_style'		=> array(
						'title'			=> __( 'FAB style', 'fab_awpha' ),
						'type'			=> 'select',
						'value'			=> 'material_v2',
						'choices'		=> array(
							'material_v3'	=> __( 'Material v3 (rounded square)', 'fab_awpha' ),
							'material_v2'	=> __( 'Material v2 (circle) ', 'fab_awpha' ),
						),
					),
					'fab_z_index'	=> array(
						'id'			=> 'fab_z_index',
						'title'			=> __( 'z-index', 'fab_awpha' ),
						'text'			=> __( 'Default is 1050', 'fab_awpha' ),
					),
				),
			),

			// Primary FAB settings
			'fab-primary'	=> array(
				'title'			=> __( 'Primary FAB settings', 'fab_awpha' ),
				'fields'		=> array(
					//icon type
					'fab_primary_icon_type'		=> array(
							'title'			=> __( 'Primary FAB icon', 'fab_awpha' ),
							'id'			=> 'fab_primary_icon_type',
							'type'			=> 'select',
							'value'			=> 'material_v2',
							'choices'		=> array(
								'fab_primary_icon_type_url'				=> __( 'Upload image', 'fab_awpha' ),
								'fab_primary_icon_type_svg'				=> __( 'SVG code', 'fab_awpha' ),
								'fab_primary_icon_type_shortcode'		=> __( 'Shortcode ', 'fab_awpha' ),
							),
							'args'			=> array(
								'class'		=>	'js-show-selected',
							),
						),
						'fab_primary_icon_type_url'	=> array(
							'title'			=> __( 'Upload icon', 'sample-domain' ),
							'id'			=> 'fab_primary_icon_type_url',
							'type'			=> 'media',
								'args'			=> ['class' => 'fab_primary_icon_type_url hidden'],
						),
						'fab_primary_icon_type_svg'		=> array(
							'id'			=> 'fab_primary_icon_type_svg',
							'type'			=> 'textarea',
							'title'			=> __( 'Icon SVG code', 'fab_awpha' ),
							'text'			=> __( 'Insert the SVG code.' ),
							'sanitize' 		=> false,
							'args'			=> ['class' => 'fab_primary_icon_type_svg hidden'],
						),
						'fab_primary_icon_type_shortcode'		=> array(
							'id'			=> 'fab_primary_icon_type_shortcode',
							'title'			=> __( 'Icon Shortcode', 'fab_awpha' ),
							'text'			=> __( 'eg. <code>[shortcode]</code>' ),
							'args'			=> ['class' => 'fab_primary_icon_type_shortcode hidden'],
						),

					// Button tag
					'fab_primary_button_tag'	=> array(
							'title'			=> __( 'Primary FAB button tag', 'fab_awpha' ),
							'id'			=> 'fab_primary_button_tag',
							'type'			=> 'select',
							'value'			=> 'button',
							'choices'		=> array(
								'fab_primary_button_tag_button'		=> __( '&lt;button&gt;', 'fab_awpha' ),
								'fab_primary_button_tag_a'			=> __( '&lt;a&gt;', 'fab_awpha' ),
							),
							'args'			=> array(
								'class'		=>	'js-show-selected',
							),
						),
						'fab_primary_button_tag_a_href'	=> array(
							'id'			=> 'fab_primary_button_tag_a_href',
							'title'			=> __( 'URL link', 'fab_awpha' ),
							'args'			=> array(
								'class'		=>	'fab_primary_button_tag_a_href hidden',
							),
						),
						'fab_primary_button_tag_a_target_blank'	=> array(
							'id'			=> 'fab_primary_button_tag_a_target_blank',
							'type'			=> 'checkbox',
							'title'			=> __( 'Open in new tab', 'fab_awpha' ),
							'text'			=> __( 'Check to open URL in a new tab.', 'fab_awpha' ),
							'args'			=> array(
								'class'		=>	'fab_primary_button_tag_a_target_blank hidden',
							),
						),

					'fab_primary_label'	=> array(
						'id'			=> 'fab_primary_label',
						'title'			=> __( 'Label', 'fab_awpha' ),
					),
					'fab_primary_title'	=> array(
						'id'			=> 'fab_primary_title',
						'title'			=> __( 'Title', 'fab_awpha' ),
					),
					//Colors
					'fab_primary_icon_color'	=> array(
						'id'			=> 'fab_primary_icon_color',
						'title'			=> __( 'Icon color', 'fab_awpha' ),
						'value'			=> '',
						'type'			=> 'color',
					),
					'fab_primary_icon_color_hover'	=> array(
						'id'			=> 'fab_primary_icon_color_hover',
						'title'			=> __( 'Hover icon color', 'fab_awpha' ),
						'value'			=> '',
						'type'			=> 'color',
					),
					'fab_primary_bg_color'	=> array(
						'id'			=> 'fab_primary_bg_color',
						'title'			=> __( 'Button color', 'fab_awpha' ),
						'value'			=> '',
						'type'			=> 'color',
					),
					'fab_primary_bg_color_hover'	=> array(
						'id'			=> 'fab_primary_bg_color_hover',
						'title'			=> __( 'Hover button color', 'fab_awpha' ),
						'value'			=> '',
						'type'			=> 'color',
					),

					// Advanced Settings
					'fab_primary_id'	=> array(
						'id'			=> 'fab_primary_id',
						'title'			=> __( 'Button ID', 'fab_awpha' ),
					),
					'fab_primary_classes'	=> array(
						'id'			=> 'fab_primary_classes',
						'title'			=> __( 'Button classes', 'fab_awpha' ),
					),
					'fab_primary_attr'	=> array(
						'id'			=> 'fab_primary_attr',
						'title'			=> __( 'Button attributes', 'fab_awpha' ),
					),

					
				),
			),
		),
	),
);
$option_page = new RationalOptionPages( $fab_menu );




