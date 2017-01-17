<?php
acf_add_local_field_group( array(
	'key'                   => 'group_afl_advanced_settings_tab',
	'title'                 => 'Advanced Settings Tab',
	'fields'                => array(
		array(
			'key'               => 'advanced_settings_tab_key',
			'label'             => 'Advanced Settings',
			'name'              => 'advanced_settings_tab',
			'type'              => 'tab',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => '',
			],
			'default_value'     => '',
		),
	),
	'location'              => array(
		array(
			array(
				'param'    => 'post_type',
				'operator' => '==',
				'value'    => 'page',
			),
		),
	),
	'menu_order'            => 0,
	'position'              => 'normal',
	'style'                 => 'default',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => '',
	'active'                => 0,
	'description'           => '',
) );
