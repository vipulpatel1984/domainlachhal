<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Modifying shortcode: vc_wp_custommenu
 *
 * @var   $shortcode string Current shortcode name
 * @var   $config    array Shortcode's config
 *
 * @param $config    ['atts'] array Shortcode's attributes and default values
 */

vc_update_shortcode_param(
	'vc_wp_custommenu', array(
		'param_name' => 'title',
		'weight' => 50,
	),
	'vc_wp_custommenu', array(
		'param_name' => 'nav_menu',
		'weight' => 20,
	),
	'vc_wp_custommenu', array(
		'param_name' => 'el_class',
		'weight' => 10,
	)
);

vc_add_params(
	'vc_wp_custommenu', array(
	array(
		'param_name' => 'layout',
		'heading' => __( 'Layout', 'us' ),
		'type' => 'dropdown',
		'admin_label' => TRUE,
		'value' => array(
			__( 'Vertical', 'us' ) => 'ver',
			__( 'Horizontal', 'us' ) => 'hor',
		),
		'std' => $config['atts']['layout'],
		'edit_field_class' => 'vc_col-sm-6',
		'weight' => 40,
	),
	array(
		'param_name' => 'align',
		'heading' => __( 'Alignment', 'us' ),
		'type' => 'dropdown',
		'admin_label' => TRUE,
		'value' => array(
			__( 'Left', 'us' ) => 'left',
			__( 'Center', 'us' ) => 'center',
			__( 'Right', 'us' ) => 'right',
		),
		'std' => $config['atts']['align'],
		'edit_field_class' => 'vc_col-sm-6',
		'weight' => 30,
	),
)
);