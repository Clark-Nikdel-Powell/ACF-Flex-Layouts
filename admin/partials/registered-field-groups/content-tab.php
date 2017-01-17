<?php
acf_add_local_field_group( array(
	'key'                   => 'group_afl_content_settings_tab',
	'title'                 => 'Content Settings Tab',
	'fields'                => array(
		array(
			'key'               => 'content_settings_tab_key',
			'label'             => 'Content',
			'name'              => 'content_settings_tab',
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
