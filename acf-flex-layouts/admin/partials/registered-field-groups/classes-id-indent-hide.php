<?php
acf_add_local_field_group( array(
	'key'                   => 'group_afl_classes_id_indent',
	'title'                 => 'Classes/ID',
	'fields'                => array(
		array(
			'key'               => 'field_classes',
			'label'             => 'Classes',
			'name'              => 'class',
			'type'              => 'text',
			'instructions'      => 'Comma-separated list.',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '40',
				'class' => '',
				'id'    => '',
			),
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		),
		array(
			'key'               => 'field_id',
			'label'             => 'ID',
			'name'              => 'id',
			'type'              => 'text',
			'instructions'      => 'One word only.',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '25',
				'class' => '',
				'id'    => '',
			),
			'default_value'     => '',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
			'maxlength'         => '',
			'readonly'          => 0,
			'disabled'          => 0,
		),
		array(
			'key'               => 'field_indent_level',
			'label'             => 'Indent',
			'name'              => 'indent',
			'type'              => 'number',
			'instructions'      => 'Indent-level',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '18',
				'class' => 'indent-level',
				'id'    => '',
			),
			'default_value'     => '0',
			'placeholder'       => '',
			'prepend'           => '',
			'append'            => '',
			'min'               => '0',
			'max'               => '10',
			'step'              => '1',
			'readonly'          => 0,
			'disabled'          => 0,
		),
		array(
			'key'               => 'field_hide',
			'label'             => 'Hide',
			'name'              => 'hide',
			'type'              => 'true_false',
			'instructions'      => 'Don\'t show this.',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '17',
				'class' => '',
				'id'    => '',
			),
			'default_value'     => false,
		),
	),
	'location'              => array(
		array(
			array(
				'param'    => 'post_type',
				'operator' => '==',
				'value'    => 'post',
			),
		),
	),
	'menu_order'            => 0,
	'position'              => 'normal',
	'style'                 => 'default',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => '',
	'active'                => 1,
	'description'           => '',
) );