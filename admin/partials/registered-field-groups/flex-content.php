<?php

$content_settings_tab_clone_args = [
	'label'             => 'Content',
	'name'              => 'content_settings_tab',
	'type'              => 'clone',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => array(
		'width' => '',
		'class' => '',
		'id'    => '',
	),
	'clone'             => array(
		0 => 'group_afl_content_settings_tab',
	),
	'display'           => 'seamless',
	'layout'            => 'block',
	'prefix_label'      => 0,
	'prefix_name'       => 0,
	'replace'           => 1,
];

$advanced_settings_tab_clone_args = [
	'label'             => 'Advanced Settings',
	'name'              => 'advanced_settings_tab',
	'type'              => 'clone',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => array(
		'width' => '',
		'class' => '',
		'id'    => '',
	),
	'clone'             => array(
		0 => 'group_afl_advanced_settings_tab',
	),
	'display'           => 'seamless',
	'layout'            => 'block',
	'prefix_label'      => 0,
	'prefix_name'       => 0,
	'replace'           => 1,
];

$label_label_color_name_clone_args = [
	'label'             => 'Label/Label Color/Name',
	'name'              => 'label_label_color_name',
	'type'              => 'clone',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => array(
		'width' => '',
		'class' => '',
		'id'    => '',
	),
	'clone'             => array(
		0 => 'group_afl_label_label_color_name',
	),
	'display'           => 'seamless',
	'layout'            => 'block',
	'prefix_label'      => 0,
	'prefix_name'       => 0,
	'replace'           => 1,
];

$classes_id_indent_hide_clone_args = [
	'label'             => 'Classes/ID/Indent',
	'name'              => 'classes_id_indent',
	'type'              => 'clone',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => array(
		'width' => '',
		'class' => '',
		'id'    => '',
	),
	'clone'             => array(
		0 => 'group_afl_classes_id_indent',
	),
	'display'           => 'seamless',
	'layout'            => 'block',
	'prefix_label'      => 0,
	'prefix_name'       => 0,
	'replace'           => 1,
];

$prepend_append_clone_args = [
	'label'             => 'Prepend/Append',
	'name'              => 'prepend_append',
	'type'              => 'clone',
	'instructions'      => '',
	'required'          => 0,
	'conditional_logic' => 0,
	'wrapper'           => array(
		'width' => '',
		'class' => '',
		'id'    => '',
	),
	'clone'             => array(
		0 => 'group_afl_prepend_append',
	),
	'display'           => 'seamless',
	'layout'            => 'block',
	'prefix_label'      => 0,
	'prefix_name'       => 0,
	'replace'           => 1,
];

/*——————————————————————————————————————————————————————————
/  Open Row
——————————————————————————————————————————————————————————*/
#region Open Row
$open_row_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'message'                => array(
		'key'               => 'open_row_field_message',
		'label'             => '',
		'name'              => 'open_row_field_message',
		'type'              => 'message',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => [
			'width' => '',
			'class' => '',
			'id'    => '',
		],
		'default_value'     => '',
		'message'           => 'This layout has no content fields.',
		'new_lines'         => '',
		'esc_html'          => false,
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
];
$open_row_sub_fields = apply_filters( 'afl/sub_fields/layout=open_row', $open_row_sub_fields );

$open_row_layout_args                                                = [
	'key'        => 'afl_layout_open_row',
	'name'       => 'layout_open_row',
	'label'      => 'Open Row',
	'display'    => 'block',
	'sub_fields' => $open_row_sub_fields,
	'min'        => '',
	'max'        => '',
];
$open_row_layout_args['sub_fields']['content_tab']['key']            = 'open_row_field_content_tab';
$open_row_layout_args['sub_fields']['advanced_tab']['key']           = 'open_row_field_advanced_tab';
$open_row_layout_args['sub_fields']['label_label_color_name']['key'] = 'open_row_field_label_label_color_name';
$open_row_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'open_row_field_classes_id';

$open_row_layout_args = apply_filters( 'afl/layout_args/layout=open_row', $open_row_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Close Row
——————————————————————————————————————————————————————————*/
#region Close Row
$close_row_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'message'                => array(
		'key'               => 'close_row_field_message',
		'label'             => '',
		'name'              => 'close_row_message',
		'type'              => 'message',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => [
			'width' => '',
			'class' => '',
			'id'    => '',
		],
		'default_value'     => '',
		'message'           => 'This layout has no content fields.',
		'new_lines'         => '',
		'esc_html'          => false,
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
];
$close_row_sub_fields = apply_filters( 'afl/sub_fields/layout=close_row', $close_row_sub_fields );

$close_row_layout_args                                                = [
	'key'        => 'acf_layout_close_row',
	'name'       => 'layout_close_row',
	'label'      => 'Close Row',
	'display'    => 'block',
	'sub_fields' => $close_row_sub_fields,
	'min'        => '',
	'max'        => '',
];
$close_row_layout_args['sub_fields']['content_tab']['key']            = 'close_row_field_content_tab';
$close_row_layout_args['sub_fields']['advanced_tab']['key']           = 'close_row_field_advanced_tab';
$close_row_layout_args['sub_fields']['label_label_color_name']['key'] = 'close_row_field_label_label_color_name';
$close_row_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'close_row_field_classes_id';

$close_row_layout_args = apply_filters( 'afl/layout_args/layout=close_row', $close_row_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Open Column
——————————————————————————————————————————————————————————*/
#region Open Column
$open_column_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'message'                => array(
		'key'               => 'open_column_field_message',
		'label'             => '',
		'name'              => 'open_column_message',
		'type'              => 'message',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => [
			'width' => '',
			'class' => '',
			'id'    => '',
		],
		'default_value'     => '',
		'message'           => 'This layout has no content fields.',
		'new_lines'         => '',
		'esc_html'          => false,
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'inside_classes'         => array(
		'key'               => 'open_column_field_inside_classes',
		'label'             => 'Inside Classes',
		'name'              => 'inside_class',
		'type'              => 'text',
		'instructions'      => 'Comma-separated list. No default. Can modified with a filter.',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '75',
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
	'include_background'     => array(
		'key'               => 'open_column_field_include_background',
		'label'             => 'Include Background',
		'name'              => 'include_background',
		'type'              => 'true_false',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => [
			'width' => '25',
			'class' => '',
			'id'    => '',
		],
		'default_value'     => '',
	),
	'background_color'       => array(
		'key'               => 'open_column_field_background_color',
		'label'             => 'Background Color',
		'name'              => 'background_color',
		'type'              => 'color_picker',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'open_column_field_include_background',
					'operator' => '==',
					'value'    => 1,
				),
			),
		),
		'wrapper'           => [
			'width' => '50',
			'class' => '',
			'id'    => '',
		],
		'default_value'     => '',
	),
	'background_image'       => array(
		'key'               => 'open_column_field_background_image',
		'label'             => 'Background Image',
		'name'              => 'background_image',
		'type'              => 'file',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'open_column_field_include_background',
					'operator' => '==',
					'value'    => 1,
				),
			),
		),
		'wrapper'           => [
			'width' => '50',
			'class' => '',
			'id'    => '',
		],
		'default_value'     => '',
		'return_format'     => 'id',
		'preview_size'      => 'thumbnail',
		'library'           => 'all',
		'min_size'          => 0,
		'max_size'          => 0,
		'mime_types'        => '',
	),
];
$open_column_sub_fields = apply_filters( 'afl/sub_fields/layout=open_column', $open_column_sub_fields );

$open_column_layout_args                                                = [
	'key'        => 'field_open_column',
	'name'       => 'layout_open_column',
	'label'      => 'Open Column',
	'display'    => 'block',
	'sub_fields' => $open_column_sub_fields,
	'min'        => '',
	'max'        => '',
];
$open_column_layout_args['sub_fields']['content_tab']['key']            = 'open_column_field_content_tab';
$open_column_layout_args['sub_fields']['advanced_tab']['key']           = 'open_column_field_advanced_tab';
$open_column_layout_args['sub_fields']['label_label_color_name']['key'] = 'open_column_field_label_label_color_name';
$open_column_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'open_column_field_classes_id';

$open_column_layout_args = apply_filters( 'afl/layout_args/layout=open_column', $open_column_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Close Column
——————————————————————————————————————————————————————————*/
#region Close Column
$close_column_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'message'                => array(
		'key'               => 'close_column_field_message',
		'label'             => '',
		'name'              => 'close_column_message',
		'type'              => 'message',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => [
			'width' => '',
			'class' => '',
			'id'    => '',
		],
		'default_value'     => '',
		'message'           => 'This layout has no content fields.',
		'new_lines'         => '',
		'esc_html'          => false,
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
];
$close_column_sub_fields = apply_filters( 'afl/sub_fields/layout=close_column', $close_column_sub_fields );

$close_column_layout_args                                                = [
	'key'        => 'field_close_column',
	'name'       => 'layout_close_column',
	'label'      => 'Close Column',
	'display'    => 'block',
	'sub_fields' => $close_column_sub_fields,
	'min'        => '',
	'max'        => '',
];
$close_column_layout_args['sub_fields']['content_tab']['key']            = 'close_column_field_content_tab';
$close_column_layout_args['sub_fields']['advanced_tab']['key']           = 'close_column_field_advanced_tab';
$close_column_layout_args['sub_fields']['label_label_color_name']['key'] = 'close_column_field_label_label_color_name';
$close_column_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'close_column_field_classes_id';

$close_column_layout_args = apply_filters( 'afl/layout_args/layout=close_column', $close_column_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Content
——————————————————————————————————————————————————————————*/
#region Content
$content_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'content'                => array(
		'key'               => 'content_field_content',
		'label'             => 'Content',
		'name'              => 'content',
		'type'              => 'wysiwyg',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'default_value'     => '',
		'tabs'              => 'all',
		'toolbar'           => 'full',
		'media_upload'      => 1,
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
];
$content_sub_fields = apply_filters( 'afl/sub_fields/layout=content', $content_sub_fields );

$content_layout_args                                                = [
	'key'        => 'afl_layout_content',
	'name'       => 'layout_content',
	'label'      => 'Content',
	'display'    => 'block',
	'sub_fields' => $content_sub_fields,
	'min'        => '',
	'max'        => '',
];
$content_layout_args['sub_fields']['content_tab']['key']            = 'content_field_content_tab';
$content_layout_args['sub_fields']['advanced_tab']['key']           = 'content_field_advanced_tab';
$content_layout_args['sub_fields']['label_label_color_name']['key'] = 'content_field_label_label_color_name';
$content_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'content_field_classes_id';

$content_layout_args = apply_filters( 'afl/layout_args/layout=content', $content_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Header
——————————————————————————————————————————————————————————*/
#region Header
$header_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'title'                  => array(
		'key'               => 'header_field_title',
		'label'             => 'Title',
		'name'              => 'title',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Title',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
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
	'subtitle'               => array(
		'key'               => 'header_field_subtitle',
		'label'             => 'Subtitle',
		'name'              => 'subtitle',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Subtitle',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
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
	'description'            => array(
		'key'               => 'header_field_description',
		'label'             => 'Description',
		'name'              => 'description',
		'type'              => 'textarea',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Description',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'default_value'     => '',
		'placeholder'       => '',
		'maxlength'         => '',
		'rows'              => 3,
		'new_lines'         => 'wpautop',
		'readonly'          => 0,
		'disabled'          => 0,
	),
	'link'                   => array(
		'key'               => 'header_field_link',
		'label'             => 'Link',
		'name'              => 'link',
		'type'              => 'page_link',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Link',
				),
			),
		),
		'wrapper'           => array(
			'width' => '50',
			'class' => '',
			'id'    => '',
		),
		'post_type'         => array(),
		'taxonomy'          => array(),
		'allow_null'        => 0,
		'allow_archives'    => 1,
		'multiple'          => 0,
	),
	'link_text'              => array(
		'key'               => 'header_field_link_text',
		'label'             => 'Link Text',
		'name'              => 'link_text',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Link',
				),
			),
		),
		'wrapper'           => array(
			'width' => '50',
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
	'background_image'       => array(
		'key'               => 'header_field_background_image',
		'label'             => 'Background Image',
		'name'              => 'background_image',
		'type'              => 'image',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_background_type',
					'operator' => '==',
					'value'    => 'Image',
				),
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Background',
				),
			),
		),
		'wrapper'           => array(
			'width' => '100',
			'class' => '',
			'id'    => '',
		),
		'return_format'     => 'id',
		'preview_size'      => 'thumbnail',
		'library'           => 'all',
		'min_width'         => '',
		'min_height'        => '',
		'min_size'          => '',
		'max_width'         => '',
		'max_height'        => '',
		'max_size'          => '',
		'mime_types'        => '',
	),
	'mp4'                    => array(
		'key'               => 'header_field_mp4',
		'label'             => 'MP4',
		'name'              => 'mp4',
		'type'              => 'file',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_background_type',
					'operator' => '==',
					'value'    => 'Video',
				),
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Background',
				),
			),
		),
		'wrapper'           => array(
			'width' => '33.333',
			'class' => '',
			'id'    => '',
		),
		'return_format'     => 'array',
		'library'           => 'all',
		'min_size'          => '',
		'max_size'          => '',
		'mime_types'        => 'mp4',
	),
	'webm'                   => array(
		'key'               => 'header_field_webm',
		'label'             => 'Webm',
		'name'              => 'webm',
		'type'              => 'file',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_background_type',
					'operator' => '==',
					'value'    => 'Video',
				),
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Background',
				),
			),
		),
		'wrapper'           => array(
			'width' => '33.333',
			'class' => '',
			'id'    => '',
		),
		'return_format'     => 'array',
		'library'           => 'all',
		'min_size'          => '',
		'max_size'          => '',
		'mime_types'        => 'webm',
	),
	'jpg'                    => array(
		'key'               => 'header_field_jpg',
		'label'             => 'JPG',
		'name'              => 'jpg',
		'type'              => 'file',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_background_type',
					'operator' => '==',
					'value'    => 'Video',
				),
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Background',
				),
			),
		),
		'wrapper'           => array(
			'width' => '33.333',
			'class' => '',
			'id'    => '',
		),
		'return_format'     => 'array',
		'library'           => 'all',
		'min_size'          => '',
		'max_size'          => '',
		'mime_types'        => 'jpg',
	),
	'background_color'       => array(
		'key'               => 'header_field_background_color',
		'label'             => 'Background Color',
		'name'              => 'background_color',
		'type'              => 'color_picker',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_background_type',
					'operator' => '==',
					'value'    => 'Color',
				),
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Background',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'default_value'     => '',
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'elements'               => array(
		'key'               => 'header_field_elements',
		'label'             => 'Elements',
		'name'              => 'elements',
		'type'              => 'select',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Title'       => 'Title',
			'Subtitle'    => 'Subtitle',
			'Description' => 'Description',
			'Link'        => 'Link',
			'Background'  => 'Background',
		),
		'default_value'     => array(
			0 => 'Title',
			1 => 'Subtitle',
			2 => 'Description',
			3 => 'Link',
			4 => 'Background',
		),
		'allow_null'        => 0,
		'multiple'          => 1,
		'ui'                => 1,
		'ajax'              => 1,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
		'return_format'     => 'value',
	),
	'background_type'        => array(
		'key'               => 'header_field_background_type',
		'label'             => 'Background Type',
		'name'              => 'background_type',
		'type'              => 'radio',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'header_field_elements',
					'operator' => '==',
					'value'    => 'Background',
				),
			),
		),
		'wrapper'           => array(
			'width' => '100',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Image' => 'Image',
			'Video' => 'Video',
			'Color' => 'Color',
		),
		'other_choice'      => 0,
		'save_other_choice' => 0,
		'default_value'     => '',
		'layout'            => 'horizontal',
		'allow_null'        => 0,
		'return_format'     => 'value',
	),
];
$header_sub_fields = apply_filters( 'afl/sub_fields/layout=header', $header_sub_fields );

$header_layout_args                                                = [
	'key'        => 'afl_layout_header',
	'name'       => 'layout_header',
	'label'      => 'Header',
	'display'    => 'block',
	'sub_fields' => $header_sub_fields,
	'min'        => '',
	'max'        => '',
];
$header_layout_args['sub_fields']['content_tab']['key']            = 'header_field_content_tab';
$header_layout_args['sub_fields']['advanced_tab']['key']           = 'header_field_advanced_tab';
$header_layout_args['sub_fields']['label_label_color_name']['key'] = 'header_field_label_label_color_name';
$header_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'header_field_classes_id';

$header_layout_args = apply_filters( 'afl/layout_args/layout=header', $header_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Slideshow
——————————————————————————————————————————————————————————*/
#region Slideshow
$slideshow_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'slideshow_background'   => array(
		'key'               => 'slideshow_field_background',
		'label'             => 'Slideshow Background',
		'name'              => 'slideshow_background',
		'type'              => 'image',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'slideshow_field_elements',
					'operator' => '==',
					'value'    => 'Slideshow Background',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'return_format'     => 'id',
		'preview_size'      => 'medium',
		'library'           => 'all',
		'min_width'         => '',
		'min_height'        => '',
		'min_size'          => '',
		'max_width'         => '',
		'max_height'        => '',
		'max_size'          => '',
		'mime_types'        => '',
	),
	'slides'                 => array(
		'key'               => 'slideshow_field_slides',
		'label'             => 'Slides',
		'name'              => 'slides',
		'type'              => 'repeater',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'collapsed'         => 'slideshow_field_slide_title',
		'min'               => '',
		'max'               => '',
		'layout'            => 'block',
		'button_label'      => 'Add Slide',
		'sub_fields'        => array(
			array(
				'key'               => 'slideshow_field_slide_title',
				'label'             => 'Title',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Title',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
				'key'               => 'slideshow_field_slide_subtitle',
				'label'             => 'Subtitle',
				'name'              => 'subtitle',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Subtitle',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
				'key'               => 'slideshow_field_slide_description',
				'label'             => 'Description',
				'name'              => 'description',
				'type'              => 'textarea',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Description',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'maxlength'         => '',
				'rows'              => 3,
				'new_lines'         => 'wpautop',
				'readonly'          => 0,
				'disabled'          => 0,
			),
			array(
				'key'               => 'slideshow_field_slide_link',
				'label'             => 'Link',
				'name'              => 'link',
				'type'              => 'page_link',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Link',
						),
					),
				),
				'wrapper'           => array(
					'width' => 50,
					'class' => '',
					'id'    => '',
				),
				'post_type'         => array(),
				'taxonomy'          => array(),
				'allow_null'        => 0,
				'multiple'          => 0,
				'allow_archives'    => 1,
			),
			array(
				'key'               => 'slideshow_field_slide_link_text',
				'label'             => 'Link Text',
				'name'              => 'link_text',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Link',
						),
					),
				),
				'wrapper'           => array(
					'width' => 50,
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
				'key'               => 'slideshow_field_slide_background',
				'label'             => 'Background Type',
				'name'              => 'background_type',
				'type'              => 'radio',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Background',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'choices'           => array(
					'Image' => 'Image',
					'Video' => 'Video',
					'Color' => 'Color',
				),
				'allow_null'        => 0,
				'other_choice'      => 0,
				'save_other_choice' => 0,
				'default_value'     => '',
				'layout'            => 'horizontal',
				'return_format'     => 'value',
			),
			array(
				'key'               => 'slideshow_field_slide_background_image',
				'label'             => 'Background Image',
				'name'              => 'background_image',
				'type'              => 'image',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_slide_background',
							'operator' => '==',
							'value'    => 'Image',
						),
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Background',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'id',
				'preview_size'      => 'thumbnail',
				'library'           => 'all',
				'min_width'         => '',
				'min_height'        => '',
				'min_size'          => '',
				'max_width'         => '',
				'max_height'        => '',
				'max_size'          => '',
				'mime_types'        => '',
			),
			array(
				'key'               => 'slideshow_field_slide_mp4',
				'label'             => 'MP4',
				'name'              => 'mp4',
				'type'              => 'file',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_slide_background',
							'operator' => '==',
							'value'    => 'Video',
						),
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Background',
						),
					),
				),
				'wrapper'           => array(
					'width' => '33.333',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'array',
				'library'           => 'all',
				'min_size'          => '',
				'max_size'          => '',
				'mime_types'        => 'mp4',
			),
			array(
				'key'               => 'slideshow_field_slide_webm',
				'label'             => 'Webm',
				'name'              => 'webm',
				'type'              => 'file',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_slide_background',
							'operator' => '==',
							'value'    => 'Video',
						),
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Background',
						),
					),
				),
				'wrapper'           => array(
					'width' => '33.333',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'array',
				'library'           => 'all',
				'min_size'          => '',
				'max_size'          => '',
				'mime_types'        => 'webm',
			),
			array(
				'key'               => 'slideshow_field_slide_jpg',
				'label'             => 'JPG',
				'name'              => 'jpg',
				'type'              => 'file',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_slide_background',
							'operator' => '==',
							'value'    => 'Video',
						),
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Background',
						),
					),
				),
				'wrapper'           => array(
					'width' => '33.333',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'array',
				'library'           => 'all',
				'min_size'          => '',
				'max_size'          => '',
				'mime_types'        => 'jpg',
			),
			array(
				'key'               => 'slideshow_field_slide_background_color',
				'label'             => 'Background Color',
				'name'              => 'background_color',
				'type'              => 'color_picker',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'slideshow_field_slide_background',
							'operator' => '==',
							'value'    => 'Color',
						),
						array(
							'field'    => 'slideshow_field_elements',
							'operator' => '==',
							'value'    => 'Slide Background',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			array(
				'key'               => 'slideshow_field_slide_classes',
				'label'             => 'Classes',
				'name'              => 'class',
				'type'              => 'text',
				'instructions'      => 'Comma-separated list.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => 50,
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
				'key'               => 'slideshow_field_slide_id',
				'label'             => 'ID',
				'name'              => 'id',
				'type'              => 'text',
				'instructions'      => 'One word only.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '33',
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
				'key'               => 'slideshow_field_slide_hide',
				'label'             => 'Hide',
				'name'              => 'hide',
				'type'              => 'true_false',
				'instructions'      => 'Don\'t show this.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '17',
					'class' => 'afl-field-hide',
					'id'    => '',
				),
				'default_value'     => false,
			),
		),
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'elements'               => array(
		'key'               => 'slideshow_field_elements',
		'label'             => 'Elements',
		'name'              => 'elements',
		'type'              => 'select',
		'instructions'      => 'Controls elements for individual slides.',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Slideshow Background'   => 'Slideshow Background',
			'Slide Background'       => 'Slide Background',
			'Slide Title'            => 'Slide Title',
			'Slide Subtitle'         => 'Slide Subtitle',
			'Slide Description'      => 'Slide Description',
			'Slide Link'             => 'Slide Link',
			'Slide Foreground Image' => 'Slide Foreground Image',
		),
		'default_value'     => array(
			0 => 'Slide Foreground Image',
			2 => 'Slide Title',
			3 => 'Slide Subtitle',
			4 => 'Slide Description',
			5 => 'Slide Link',
		),
		'allow_null'        => 0,
		'multiple'          => 1,
		'ui'                => 1,
		'ajax'              => 1,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
		'return_format'     => 'value',
	),
];
$slideshow_sub_fields = apply_filters( 'afl/sub_fields/layout=slideshow', $slideshow_sub_fields );

$slideshow_layout_args                                                = [
	'key'        => 'afl_layout_slideshow',
	'name'       => 'layout_slideshow',
	'label'      => 'Slideshow',
	'display'    => 'block',
	'sub_fields' => $slideshow_sub_fields,
	'min'        => '',
	'max'        => '',
];
$slideshow_layout_args['sub_fields']['content_tab']['key']            = 'slideshow_field_content_tab';
$slideshow_layout_args['sub_fields']['advanced_tab']['key']           = 'slideshow_field_advanced_tab';
$slideshow_layout_args['sub_fields']['label_label_color_name']['key'] = 'slideshow_field_label_label_color_name';
$slideshow_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'slideshow_field_classes_id';

$slideshow_layout_args = apply_filters( 'afl/layout_args/layout=slideshow', $slideshow_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Post List
——————————————————————————————————————————————————————————*/
#region Post List
$post_list_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'list_title'             => array(
		'key'               => 'post_list_field_list_title',
		'label'             => 'List Title',
		'name'              => 'list_title',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
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
	'post_type'              => array(
		'key'               => 'post_list_field_post_type',
		'label'             => 'Post Type',
		'name'              => 'post_type',
		'type'              => 'posttype_select',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'post_list_field_data_type',
					'operator' => '==',
					'value'    => 'Automatic',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
			'class' => '',
			'id'    => '',
		),
		'fields[post_type'  => array(
			'select_type' => 0,
		),
		'select_type'       => 2,
	),
	'number_of_posts'        => array(
		'key'               => 'post_list_field_number_of_posts',
		'label'             => 'Number of Posts',
		'name'              => 'number_of_posts',
		'type'              => 'number',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'post_list_field_data_type',
					'operator' => '==',
					'value'    => 'Automatic',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
			'class' => '',
			'id'    => '',
		),
		'default_value'     => '',
		'placeholder'       => '',
		'prepend'           => '',
		'append'            => '',
		'min'               => 1,
		'max'               => '',
		'step'              => '',
		'readonly'          => 0,
		'disabled'          => 0,
	),
	'manual_posts'           => array(
		'key'               => 'post_list_field_manual_posts',
		'label'             => 'Manual Posts',
		'name'              => 'manual_posts',
		'type'              => 'relationship',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'post_list_field_data_type',
					'operator' => '==',
					'value'    => 'Manual',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'post_type'         => array(),
		'taxonomy'          => array(),
		'filters'           => array(
			0 => 'search',
			1 => 'post_type',
			2 => 'taxonomy',
		),
		'elements'          => '',
		'min'               => '',
		'max'               => '',
		'return_format'     => 'object',
	),
	'list_link'              => array(
		'key'               => 'post_list_field_list_link',
		'label'             => 'List Link',
		'name'              => 'link',
		'type'              => 'page_link',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => 50,
			'class' => '',
			'id'    => '',
		),
		'post_type'         => array(),
		'taxonomy'          => array(),
		'allow_null'        => 0,
		'multiple'          => 0,
		'allow_archives'    => 1,
	),
	'list_link_text'         => array(
		'key'               => 'post_list_field_list_link_text',
		'label'             => 'List Link Text',
		'name'              => 'link_text',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => 50,
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
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'data_type'              => array(
		'key'               => 'post_list_field_data_type',
		'label'             => 'Data Type',
		'name'              => 'data_type',
		'type'              => 'select',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Automatic' => 'Automatic',
			'Manual'    => 'Manual',
		),
		'default_value'     => array(),
		'allow_null'        => 0,
		'multiple'          => 0,
		'ui'                => 0,
		'ajax'              => 0,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
		'return_format'     => 'value',
	),
];
$post_list_sub_fields = apply_filters( 'afl/sub_fields/layout=post_list', $post_list_sub_fields );

$post_list_layout_args                                                = [
	'key'        => 'afl_layout_post_list',
	'name'       => 'layout_post_list',
	'label'      => 'Post List',
	'display'    => 'block',
	'sub_fields' => $post_list_sub_fields,
	'min'        => '',
	'max'        => '',
];
$post_list_layout_args['sub_fields']['content_tab']['key']            = 'post_list_field_content_tab';
$post_list_layout_args['sub_fields']['advanced_tab']['key']           = 'post_list_field_advanced_tab';
$post_list_layout_args['sub_fields']['label_label_color_name']['key'] = 'post_list_field_label_label_color_name';
$post_list_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'post_list_field_classes_id';

$post_list_layout_args = apply_filters( 'afl/layout_args/layout=post_list', $post_list_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Map
——————————————————————————————————————————————————————————*/
#region Map
$map_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'title'                  => array(
		'key'               => 'map_field_title',
		'label'             => 'Title',
		'name'              => 'title',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => 75,
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
	'zoom_level'             => array(
		'key'               => 'map_field_zoom_level',
		'label'             => 'Zoom Level',
		'name'              => 'zoom_level',
		'type'              => 'number',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => 25,
			'class' => '',
			'id'    => '',
		),
		'default_value'     => 12,
		'placeholder'       => '',
		'prepend'           => '',
		'append'            => '',
		'min'               => 1,
		'max'               => 16,
		'step'              => 1,
		'readonly'          => 0,
		'disabled'          => 0,
	),
	'markers'                => array(
		'key'               => 'map_field_markers',
		'label'             => 'Markers',
		'name'              => 'markers',
		'type'              => 'repeater',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => 75,
			'class' => '',
			'id'    => '',
		),
		'min'               => '',
		'max'               => '',
		'layout'            => 'block',
		'button_label'      => 'Add Marker',
		'collapsed'         => '',
		'sub_fields'        => array(
			array(
				'key'               => 'map_field_markers_marker',
				'label'             => 'Marker',
				'name'              => 'marker',
				'type'              => 'google_map',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'center_lat'        => '',
				'center_lng'        => '',
				'zoom'              => '',
				'height'            => 200,
			),
		),
	),
	'options'                => array(
		'key'               => 'map_field_options',
		'label'             => 'Options',
		'name'              => 'options',
		'type'              => 'checkbox',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => 25,
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'show_markers'     => 'Show Markers',
			'disable_controls' => 'Disable Controls',
			'allow_panning'    => 'Allow Panning',
			'allow_dragging'   => 'Allow Dragging',
			'allow_zooming'    => 'Allow Zooming',
		),
		'default_value'     => array(
			'true' => 'true',
		),
		'layout'            => 'vertical',
		'toggle'            => 0,
		'return_format'     => 'value',
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
];
$map_sub_fields = apply_filters( 'afl/sub_fields/layout=map', $map_sub_fields );

$map_layout_args                                                = [
	'key'        => 'afl_layout_map',
	'name'       => 'layout_map',
	'label'      => 'Map',
	'display'    => 'block',
	'sub_fields' => $map_sub_fields,
	'min'        => '',
	'max'        => '',
];
$map_layout_args['sub_fields']['content_tab']['key']            = 'map_field_content_tab';
$map_layout_args['sub_fields']['advanced_tab']['key']           = 'map_field_advanced_tab';
$map_layout_args['sub_fields']['label_label_color_name']['key'] = 'map_field_label_label_color_name';
$map_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'map_field_classes_id';

$map_layout_args = apply_filters( 'afl/layout_args/layout=map', $map_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Tabs
——————————————————————————————————————————————————————————*/
#region Tabs
$tab_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'background_image'       => array(
		'key'               => 'tabs_field_background_image',
		'label'             => 'Background Image',
		'name'              => 'background_image',
		'type'              => 'image',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'tabs_field_elements',
					'operator' => '==',
					'value'    => 'Section Background Image',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'return_format'     => 'id',
		'preview_size'      => 'thumbnail',
		'library'           => 'all',
		'min_width'         => '',
		'min_height'        => '',
		'min_size'          => '',
		'max_width'         => '',
		'max_height'        => '',
		'max_size'          => '',
		'mime_types'        => '',
	),
	'tabs'                   => array(
		'key'               => 'tabs_field_tabs',
		'label'             => 'Tabs',
		'name'              => 'tabs',
		'type'              => 'repeater',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'collapsed'         => 'tabs_field_tabs_tab_title',
		'min'               => '',
		'max'               => '',
		'layout'            => 'block',
		'button_label'      => 'Add Tab',
		'sub_fields'        => array(
			'tab_title'      => array(
				'key'               => 'tabs_field_tabs_tab_title',
				'label'             => 'Tab Title',
				'name'              => 'tab_title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
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
			'tabs_title'     => array(
				'key'               => 'tabs_field_tabs_title',
				'label'             => 'Title',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'tabs_field_elements',
							'operator' => '==',
							'value'    => 'Title',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
			'tabs_subtitle'  => array(
				'key'               => 'tabs_field_tabs_subtitle',
				'label'             => 'Subtitle',
				'name'              => 'subtitle',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'tabs_field_elements',
							'operator' => '==',
							'value'    => 'Subtitle',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
			'tabs_text'      => array(
				'key'               => 'tabs_field_tabs_text',
				'label'             => 'Text',
				'name'              => 'text',
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'tabs_field_elements',
							'operator' => '==',
							'value'    => 'Text',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 1,
			),
			'tabs_image'     => array(
				'key'               => 'tabs_field_tabs_image',
				'label'             => 'Image',
				'name'              => 'image',
				'type'              => 'image',
				'instructions'      => '',
				'required'          => 0,
				'return_format'     => 'id',
				'preview_size'      => 'thumbnail',
				'library'           => 'all',
				'mime_types'        => '',
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'tabs_field_elements',
							'operator' => '==',
							'value'    => 'Image',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			'tabs_link'      => array(
				'key'               => 'tabs_field_tabs_link',
				'label'             => 'Link',
				'name'              => 'link',
				'type'              => 'url',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'tabs_field_elements',
							'operator' => '==',
							'value'    => 'Link',
						),
					),
				),
				'wrapper'           => array(
					'width' => 50,
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
			),
			'tabs_link_text' => array(
				'key'               => 'tabs_field_tabs_link_text',
				'label'             => 'Link Text',
				'name'              => 'link_text',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'tabs_field_elements',
							'operator' => '==',
							'value'    => 'Link',
						),
					),
				),
				'wrapper'           => array(
					'width' => 50,
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
			'tabs_classes'   => array(
				'key'               => 'tabs_field_tabs_classes',
				'label'             => 'Classes',
				'name'              => 'class',
				'type'              => 'text',
				'instructions'      => 'Comma-separated list.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '50',
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
			'tabs_id'        => array(
				'key'               => 'tabs_field_tabs_id',
				'label'             => 'ID',
				'name'              => 'id',
				'type'              => 'text',
				'instructions'      => 'One word only.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '33',
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
			'tabs_hide'      => array(
				'key'               => 'tabs_field_tabs_hide',
				'label'             => 'Hide',
				'name'              => 'hide',
				'type'              => 'true_false',
				'instructions'      => 'Don\'t show this.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '17',
					'class' => 'afl-field-hide',
					'id'    => '',
				),
				'default_value'     => false,
			),
		),
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'elements'               => array(
		'key'               => 'tabs_field_elements',
		'label'             => 'Elements',
		'name'              => 'elements',
		'type'              => 'select',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Section Background Image' => 'Section Background Image',
			'Title'                    => 'Title',
			'Subtitle'                 => 'Subtitle',
			'Text'                     => 'Text',
			'Image'                    => 'Image',
			'Link'                     => 'Link',
		),
		'default_value'     => array(
			0 => 'Section Background Image',
			1 => 'Title',
			2 => 'Subtitle',
			3 => 'Text',
			4 => 'Link',
		),
		'allow_null'        => 0,
		'multiple'          => 1,
		'ui'                => 1,
		'ajax'              => 1,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
		'return_format'     => 'value',
	),
];
$tab_sub_fields = apply_filters( 'afl/sub_fields/layout=tab', $tab_sub_fields );

$tabs_layout_args                                                = [
	'key'        => 'afl_layout_tabs',
	'name'       => 'layout_tabs',
	'label'      => 'Tabs',
	'display'    => 'block',
	'sub_fields' => $tab_sub_fields,
	'min'        => '',
	'max'        => '',
];
$tabs_layout_args['sub_fields']['content_tab']['key']            = 'tabs_field_content_tab';
$tabs_layout_args['sub_fields']['advanced_tab']['key']           = 'tabs_field_advanced_tab';
$tabs_layout_args['sub_fields']['label_label_color_name']['key'] = 'tabs_field_label_label_color_name';
$tabs_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'tabs_field_classes_id';

$tabs_layout_args = apply_filters( 'afl/layout_args/layout=tab', $tabs_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Accordion
——————————————————————————————————————————————————————————*/
#region Accordion
$accordion_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'accordion_title'        => array(
		'key'               => 'accordion_field_accordion_title',
		'label'             => 'Accordion Title',
		'name'              => 'accordion_title',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'accordion_field_elements',
					'operator' => '==',
					'value'    => 'Accordion Title',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
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
	'panels'                 => array(
		'key'               => 'accordion_field_panels',
		'label'             => 'Panels',
		'name'              => 'panels',
		'type'              => 'repeater',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'collapsed'         => 'accordion_field_panels_panel_title',
		'min'               => '',
		'max'               => '',
		'layout'            => 'block',
		'button_label'      => 'Add Panel',
		'sub_fields'        => array(
			array(
				'key'               => 'accordion_field_panels_panel_title',
				'label'             => 'Panel Title',
				'name'              => 'panel_title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
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
				'key'               => 'accordion_field_panel_title',
				'label'             => 'Title',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'accordion_field_elements',
							'operator' => '==',
							'value'    => 'Title',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
				'key'               => 'accordion_field_panel_subtitle',
				'label'             => 'Subtitle',
				'name'              => 'subtitle',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'accordion_field_elements',
							'operator' => '==',
							'value'    => 'Subtitle',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
				'key'               => 'accordion_field_panel_text',
				'label'             => 'Text',
				'name'              => 'text',
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'accordion_field_elements',
							'operator' => '==',
							'value'    => 'Text',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 1,
			),
			array(
				'key'               => 'accordion_field_panel_classes',
				'label'             => 'Classes',
				'name'              => 'class',
				'type'              => 'text',
				'instructions'      => 'Comma-separated list.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '50',
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
				'key'               => 'accordion_field_panel_id',
				'label'             => 'ID',
				'name'              => 'id',
				'type'              => 'text',
				'instructions'      => 'One word only.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '33',
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
				'key'               => 'accordion_field_panel_hide',
				'label'             => 'Hide',
				'name'              => 'hide',
				'type'              => 'true_false',
				'instructions'      => 'Don\'t show this.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '17',
					'class' => 'afl-field-hide',
					'id'    => '',
				),
				'default_value'     => false,
			),
		),
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'elements'               => array(
		'key'               => 'accordion_field_elements',
		'label'             => 'Elements',
		'name'              => 'elements',
		'type'              => 'select',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Accordion Title' => 'Accordion Title',
			'Title'           => 'Title',
			'Subtitle'        => 'Subtitle',
			'Text'            => 'Text',
		),
		'default_value'     => array(
			1 => 'Title',
			2 => 'Subtitle',
			3 => 'Text',
		),
		'allow_null'        => 0,
		'multiple'          => 1,
		'ui'                => 1,
		'ajax'              => 1,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
		'return_format'     => 'value',
	),
];
$accordion_sub_fields = apply_filters( 'afl/sub_fields/layout=accordion', $accordion_sub_fields );

$accordion_layout_args                                                = [
	'key'        => 'afl_layout_accordion',
	'name'       => 'layout_accordion',
	'label'      => 'Accordion',
	'display'    => 'block',
	'sub_fields' => $accordion_sub_fields,
	'min'        => '',
	'max'        => '',
];
$accordion_layout_args['sub_fields']['content_tab']['key']            = 'accordion_field_content_tab';
$accordion_layout_args['sub_fields']['advanced_tab']['key']           = 'accordion_field_advanced_tab';
$accordion_layout_args['sub_fields']['label_label_color_name']['key'] = 'accordion_field_label_label_color_name';
$accordion_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'accordion_field_classes_id';

$accordion_layout_args = apply_filters( 'afl/layout_args/layout=accordion', $accordion_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Blurb
——————————————————————————————————————————————————————————*/
#region Blurb
$blurb_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'foreground_image'       => array(
		'key'               => 'blurb_field_foreground_image',
		'label'             => 'Image',
		'name'              => 'foreground_image',
		'type'              => 'image',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Image',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
			'class' => '',
			'id'    => '',
		),
		'return_format'     => 'id',
		'preview_size'      => 'thumbnail',
		'library'           => 'all',
		'min_width'         => '',
		'min_height'        => '',
		'min_size'          => '',
		'max_width'         => '',
		'max_height'        => '',
		'max_size'          => '',
		'mime_types'        => '',
	),
	'icon_name'              => array(
		'key'               => 'blurb_field_icon_name',
		'label'             => 'Icon Name',
		'name'              => 'icon_name',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Icon',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
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
	'media_placement'        => array(
		'key'               => 'blurb_field_media_placement',
		'label'             => 'Media Placement',
		'name'              => 'media_placement',
		'type'              => 'radio',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Image',
				),
			),
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Icon',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'top'   => 'Top',
			'left'  => 'Left',
			'right' => 'Right',
		),
		'other_choice'      => 0,
		'save_other_choice' => 0,
		'default_value'     => '',
		'layout'            => 'horizontal',
		'allow_null'        => 0,
		'return_format'     => 'value',
	),
	'title'                  => array(
		'key'               => 'blurb_field_title',
		'label'             => 'Title',
		'name'              => 'title',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Title',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
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
	'subtitle'               => array(
		'key'               => 'blurb_field_subtitle',
		'label'             => 'Subtitle',
		'name'              => 'subtitle',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Subtitle',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
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
	'text'                   => array(
		'key'               => 'blurb_field_text',
		'label'             => 'Text',
		'name'              => 'text',
		'type'              => 'wysiwyg',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Text',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'default_value'     => '',
		'tabs'              => 'all',
		'toolbar'           => 'full',
		'media_upload'      => 1,
	),
	'link_text'              => array(
		'key'               => 'blurb_field_link_text',
		'label'             => 'Link Text',
		'name'              => 'link_text',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Link',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
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
	'link_url'               => array(
		'key'               => 'blurb_field_link_url',
		'label'             => 'Link URL',
		'name'              => 'link_url',
		'type'              => 'page_link',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_field_elements',
					'operator' => '==',
					'value'    => 'Link',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
			'class' => '',
			'id'    => '',
		),
		'post_type'         => array(),
		'taxonomy'          => array(),
		'allow_null'        => 0,
		'multiple'          => 0,
		'allow_archives'    => 1,
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'elements'               => array(
		'key'               => 'blurb_field_elements',
		'label'             => 'Elements',
		'name'              => 'elements',
		'type'              => 'select',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Image'    => 'Image',
			'Icon'     => 'Icon',
			'Title'    => 'Title',
			'Subtitle' => 'Subtitle',
			'Text'     => 'Text',
			'Link'     => 'Link',
		),
		'default_value'     => array(
			0 => 'Image',
			1 => 'Title',
			2 => 'Subtitle',
			3 => 'Text',
			4 => 'Link',
		),
		'allow_null'        => 0,
		'multiple'          => 1,
		'ui'                => 1,
		'ajax'              => 1,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
		'return_format'     => 'value',
	),
];
$blurb_sub_fields = apply_filters( 'afl/sub_fields/layout=blurb', $blurb_sub_fields );

$blurb_layout_args                                                = [
	'key'        => 'afl_layout_blurb',
	'name'       => 'layout_blurb',
	'label'      => 'Blurb',
	'display'    => 'block',
	'sub_fields' => $blurb_sub_fields,
	'min'        => '',
	'max'        => '',
];
$blurb_layout_args['sub_fields']['content_tab']['key']            = 'blurb_field_content_tab';
$blurb_layout_args['sub_fields']['advanced_tab']['key']           = 'blurb_field_advanced_tab';
$blurb_layout_args['sub_fields']['label_label_color_name']['key'] = 'blurb_field_label_label_color_name';
$blurb_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'blurb_field_classes_id';

$blurb_layout_args = apply_filters( 'afl/layout_args/layout=blurb', $blurb_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Blurblist
——————————————————————————————————————————————————————————*/
#region Blurblist
$blurblist_blurb_icons = apply_filters( 'afl/site_icon_choices', array() );

$blurblist_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'list_title'             => array(
		'key'               => 'blurb_list_field_list_title',
		'label'             => 'List Title',
		'name'              => 'list_title',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_list_field_elements',
					'operator' => '==',
					'value'    => 'List Title',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
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
	'list_intro'             => array(
		'key'               => 'blurb_list_field_list_intro',
		'label'             => 'List Intro',
		'name'              => 'list_intro',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_list_field_elements',
					'operator' => '==',
					'value'    => 'List Intro',
				),
			),
		),
		'wrapper'           => array(
			'width' => '',
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
	'blurbs'                 => array(
		'key'               => 'blurb_list_field_blurbs',
		'label'             => 'Blurbs',
		'name'              => 'blurbs',
		'type'              => 'repeater',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'collapsed'         => 'blurb_list_field_blurbs_blurb_label',
		'min'               => '',
		'max'               => '',
		'layout'            => 'block',
		'button_label'      => 'Add Blurb',
		'sub_fields'        => array(
			'blurb_content_tab'      => $content_settings_tab_clone_args,
			'blurb_label'            => array(
				'key'               => 'blurb_list_field_blurbs_blurb_label',
				'label'             => 'Label',
				'name'              => 'label',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
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
			'blurb_icon'             => [
				'key'               => 'blurb_list_field_blurbs_blurb_icon',
				'label'             => 'Icon',
				'name'              => 'icon',
				'type'              => 'select',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_elements',
							'operator' => '==',
							'value'    => 'Blurb Icon',
						),
					),
				),
				'wrapper'           => [
					'width' => '',
					'class' => '',
					'id'    => '',
				],
				'default_value'     => '',
				'choices'           => $blurblist_blurb_icons,
				'allow_null'        => false,
				'multiple'          => false,
				'ui'                => true,
				'ajax'              => false,
				'placeholder'       => '',
			],
			'blurb_foreground_image' => array(
				'key'               => 'blurb_list_field_blurbs_blurb_foreground_image',
				'label'             => 'Foreground Image',
				'name'              => 'foreground_image',
				'type'              => 'image',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_elements',
							'operator' => '==',
							'value'    => 'Blurb Image',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'id',
				'preview_size'      => 'thumbnail',
				'library'           => 'all',
				'min_width'         => '',
				'min_height'        => '',
				'min_size'          => '',
				'max_width'         => '',
				'max_height'        => '',
				'max_size'          => '',
				'mime_types'        => '',
			),
			'blurb_title'            => array(
				'key'               => 'blurb_list_field_blurbs_blurb_title',
				'label'             => 'Title',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_elements',
							'operator' => '==',
							'value'    => 'Blurb Title',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
			'blurb_subtitle'         => array(
				'key'               => 'blurb_list_field_blurbs_blurb_subtitle',
				'label'             => 'Subtitle',
				'name'              => 'subtitle',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_elements',
							'operator' => '==',
							'value'    => 'Blurb Subtitle',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
			'blurb_text'             => array(
				'key'               => 'blurb_list_field_blurbs_blurb_text',
				'label'             => 'Text',
				'name'              => 'text',
				'type'              => 'wysiwyg',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_elements',
							'operator' => '==',
							'value'    => 'Blurb Text',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'tabs'              => 'all',
				'toolbar'           => 'full',
				'media_upload'      => 1,
			),
			'blurb_link'             => array(
				'key'               => 'blurb_list_field_blurbs_blurb_link',
				'label'             => 'Link',
				'name'              => 'link',
				'type'              => 'url',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_elements',
							'operator' => '==',
							'value'    => 'Blurb Link',
						),
						array(
							'field'    => 'blurb_list_field_link_address',
							'operator' => '==',
							'value'    => 'External',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
			),
			'blurb_page_link'        => array(
				'key'               => 'blurb_list_field_blurbs_blurb_page_link',
				'label'             => 'Page Link',
				'name'              => 'page_link',
				'type'              => 'page_link',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_link_address',
							'operator' => '==',
							'value'    => 'Internal',
						),
						array(
							'field'    => 'blurb_list_field_elements',
							'operator' => '==',
							'value'    => 'Blurb Link',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'post_type'         => array(),
				'taxonomy'          => array(),
				'allow_null'        => 0,
				'multiple'          => 0,
				'allow_archives'    => 1,
			),
			'blurb_link_text'        => array(
				'key'               => 'blurb_list_field_blurbs_blurb_link_text',
				'label'             => 'Link Text',
				'name'              => 'link_text',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_link_type',
							'operator' => '==',
							'value'    => 'Button',
						),
						array(
							'field'    => 'blurb_list_field_elements',
							'operator' => '==',
							'value'    => 'Blurb Link',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
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
			'blurb_background_image' => array(
				'key'               => 'blurb_list_field_blurbs_blurb_background_image',
				'label'             => 'Background Image',
				'name'              => 'background_image',
				'type'              => 'image',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_background_type',
							'operator' => '==',
							'value'    => 'Image',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'return_format'     => 'id',
				'preview_size'      => 'thumbnail',
				'library'           => 'all',
				'min_width'         => '',
				'min_height'        => '',
				'min_size'          => '',
				'max_width'         => '',
				'max_height'        => '',
				'max_size'          => '',
				'mime_types'        => '',
			),
			'blurb_background_color' => array(
				'key'               => 'blurb_list_field_blurbs_blurb_background_color',
				'label'             => 'Background Color',
				'name'              => 'background_color',
				'type'              => 'color_picker',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'blurb_list_field_background_type',
							'operator' => '==',
							'value'    => 'Color',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
			),
			'blurb_advanced_tab'     => $advanced_settings_tab_clone_args,
			'blurb_classes'          => array(
				'key'               => 'blurb_list_field_blurbs_blurb_classes',
				'label'             => 'Classes',
				'name'              => 'class',
				'type'              => 'text',
				'instructions'      => 'Comma-separated list.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => 40,
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
			'blurb_id'               => array(
				'key'               => 'blurb_list_field_blurbs_blurb_id',
				'label'             => 'ID',
				'name'              => 'id',
				'type'              => 'text',
				'instructions'      => 'One word only.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '38',
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
			'blurb_hide'             => array(
				'key'               => 'blurb_list_field_blurbs_blurb_hide',
				'label'             => 'Hide',
				'name'              => 'hide',
				'type'              => 'true_false',
				'instructions'      => 'Don\'t show this.',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '22',
					'class' => 'afl-field-hide',
					'id'    => '',
				),
				'default_value'     => false,
			),
		),
	),
	'list_link'              => array(
		'key'               => 'blurb_list_field_list_link',
		'label'             => 'List Link',
		'name'              => 'list_link',
		'type'              => 'page_link',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_list_field_elements',
					'operator' => '==',
					'value'    => 'List Link',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
			'class' => '',
			'id'    => '',
		),
		'post_type'         => array(),
		'taxonomy'          => array(),
		'allow_null'        => 0,
		'multiple'          => 0,
		'allow_archives'    => 1,
	),
	'list_link_text'         => array(
		'key'               => 'blurb_list_field_list_link_text',
		'label'             => 'List Link Text',
		'name'              => 'list_link_text',
		'type'              => 'text',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => array(
			array(
				array(
					'field'    => 'blurb_list_field_elements',
					'operator' => '==',
					'value'    => 'List Link',
				),
			),
		),
		'wrapper'           => array(
			'width' => 50,
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
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'elements'               => array(
		'key'               => 'blurb_list_field_elements',
		'label'             => 'Elements',
		'name'              => 'elements',
		'type'              => 'select',
		'instructions'      => 'Control layout fields.',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'List Title'     => 'List Title',
			'List Intro'     => 'List Intro',
			'Blurb Icon'     => 'Blurb Icon',
			'Blurb Image'    => 'Blurb Image',
			'Blurb Title'    => 'Blurb Title',
			'Blurb Subtitle' => 'Blurb Subtitle',
			'Blurb Text'     => 'Blurb Text',
			'Blurb Link'     => 'Blurb Link',
			'List Link'      => 'List Link',
		),
		'default_value'     => array(
			0 => 'List Title',
			1 => 'List Intro',
			2 => 'Blurb Icon',
			2 => 'Blurb Image',
			3 => 'Blurb Title',
			4 => 'Blurb Subtitle',
			5 => 'Blurb Text',
			6 => 'Blurb Link',
			7 => 'List Link',
		),
		'allow_null'        => 0,
		'multiple'          => 1,
		'ui'                => 1,
		'ajax'              => 0,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
		'return_format'     => 'value',
	),
	'background_type'        => array(
		'key'               => 'blurb_list_field_background_type',
		'label'             => 'Background Type',
		'name'              => 'background_type',
		'type'              => 'radio',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '33.333',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'None'  => 'None',
			'Image' => 'Image',
			'Color' => 'Color',
		),
		'other_choice'      => 0,
		'save_other_choice' => 0,
		'default_value'     => '',
		'layout'            => 'horizontal',
		'allow_null'        => 0,
		'return_format'     => 'value',
	),
	'link_type'              => array(
		'key'               => 'blurb_list_field_link_type',
		'label'             => 'Link Type',
		'name'              => 'link_type',
		'type'              => 'radio',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '33.333',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Button'     => 'Button',
			'Background' => 'Background',
		),
		'other_choice'      => 0,
		'save_other_choice' => 0,
		'default_value'     => '',
		'layout'            => 'horizontal',
		'allow_null'        => 0,
		'return_format'     => 'value',
	),
	'link_address'           => array(
		'key'               => 'blurb_list_field_link_address',
		'label'             => 'Link Address',
		'name'              => 'link_location',
		'type'              => 'radio',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '33.333',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'Internal' => 'Internal',
			'External' => 'External',
		),
		'other_choice'      => 0,
		'save_other_choice' => 0,
		'default_value'     => '',
		'layout'            => 'horizontal',
		'allow_null'        => 0,
		'return_format'     => 'value',
	),
	'blurb_classes'          => array(
		'key'               => 'blurb_list_field_blurb_classes',
		'label'             => 'Blurb Classes',
		'name'              => 'blurb_classes',
		'type'              => 'text',
		'instructions'      => 'Classes that are shared for each blurb (good for column classes).',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
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
];
$blurblist_sub_fields = apply_filters( 'afl/sub_fields/layout=blurblist', $blurblist_sub_fields );

$blurblist_layout_args                                                                    = [
	'key'        => 'afl_layout_blurb_list',
	'name'       => 'layout_blurb_list',
	'label'      => 'Blurb List',
	'display'    => 'block',
	'sub_fields' => $blurblist_sub_fields,
	'min'        => '',
	'max'        => '',
];
$blurblist_layout_args['sub_fields']['content_tab']['key']                                = 'blurblist_field_content_tab';
$blurblist_layout_args['sub_fields']['advanced_tab']['key']                               = 'blurblist_field_advanced_tab';
$blurblist_layout_args['sub_fields']['label_label_color_name']['key']                     = 'blurblist_field_label_label_color_name';
$blurblist_layout_args['sub_fields']['classes_id_indent_hide']['key']                     = 'blurblist_field_classes_id';
$blurblist_layout_args['sub_fields']['blurbs']['sub_fields']['blurb_content_tab']['key']  = 'blurblist_blurb_field_content_tab';
$blurblist_layout_args['sub_fields']['blurbs']['sub_fields']['blurb_advanced_tab']['key'] = 'blurblist_blurb_field_advanced_tab';

$blurblist_layout_args = apply_filters( 'afl/layout_args/layout=blurblist', $blurblist_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Gallery
——————————————————————————————————————————————————————————*/
#region Gallery
$gallery_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'images'                 => array(
		'key'               => 'gallery_field_images',
		'label'             => 'Images',
		'name'              => 'images',
		'type'              => 'gallery',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'min'               => '',
		'max'               => '',
		'preview_size'      => 'thumbnail',
		'library'           => 'all',
		'min_width'         => '',
		'min_height'        => '',
		'min_size'          => '',
		'max_width'         => '',
		'max_height'        => '',
		'max_size'          => '',
		'mime_types'        => '',
		'insert'            => 'append',
	),
	'image_size'             => array(
		'key'               => 'gallery_field_image_size',
		'label'             => 'Image Size',
		'name'              => 'image_size',
		'type'              => 'select',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => array(
			'width' => '',
			'class' => '',
			'id'    => '',
		),
		'choices'           => array(
			'large'  => 'Large',
			'medium' => 'Medium',
		),
		'default_value'     => array(
			'Large' => 'Large',
		),
		'allow_null'        => 0,
		'multiple'          => 0,
		'ui'                => 0,
		'ajax'              => 0,
		'placeholder'       => '',
		'disabled'          => 0,
		'readonly'          => 0,
		'return_format'     => 'value',
	),
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
];
$gallery_sub_fields = apply_filters( 'afl/sub_fields/layout=gallery', $gallery_sub_fields );

$gallery_layout_args                                                = [
	'key'        => 'afl_layout_gallery',
	'name'       => 'layout_gallery',
	'label'      => 'Gallery',
	'display'    => 'block',
	'sub_fields' => $gallery_sub_fields,
	'min'        => '',
	'max'        => '',
];
$gallery_layout_args['sub_fields']['content_tab']['key']            = 'gallery_field_content_tab';
$gallery_layout_args['sub_fields']['advanced_tab']['key']           = 'gallery_field_advanced_tab';
$gallery_layout_args['sub_fields']['label_label_color_name']['key'] = 'gallery_field_label_label_color_name';
$gallery_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'gallery_field_classes_id';

$gallery_layout_args = apply_filters( 'afl/layout_args/layout=gallery', $gallery_layout_args );
#endregion

/*——————————————————————————————————————————————————————————
/  Filter Layouts
——————————————————————————————————————————————————————————*/
$layouts_arr = [
	'open_row'     => $open_row_layout_args,
	'close_row'    => $close_row_layout_args,
	'open_column'  => $open_column_layout_args,
	'close_column' => $close_column_layout_args,
	'content'      => $content_layout_args,
	'header'       => $header_layout_args,
	'slideshow'    => $slideshow_layout_args,
	'post_list'    => $post_list_layout_args,
	'map'          => $map_layout_args,
	'tabs'         => $tabs_layout_args,
	'accordion'    => $accordion_layout_args,
	'blurb'        => $blurb_layout_args,
	'blurblist'    => $blurblist_layout_args,
	'gallery'      => $gallery_layout_args,
];

$extra_fields_args = [
	'content_settings_tab_clone_args'   => $content_settings_tab_clone_args,
	'advanced_settings_tab_clone_args'  => $advanced_settings_tab_clone_args,
	'label_label_color_name_clone_args' => $label_label_color_name_clone_args,
	'classes_id_indent_hide_clone_args' => $classes_id_indent_hide_clone_args,
];
$layouts_arr       = apply_filters( 'afl/group/layout_args', $layouts_arr, $extra_fields_args );

asort( $layouts_arr );


/*——————————————————————————————————————————————————————————————————————————————
/  Add Another Field Group with the "Section" Layout (Inception-style stuff here)
——————————————————————————————————————————————————————————————————————————————
The regular layouts need to be registered first, so that "Section" can clone them into it.
*/

/*——————————————————————————————————————————————————————————
/  Section Layout Args
——————————————————————————————————————————————————————————*/
#region Section
$section_sub_fields = [
	'content_tab'            => $content_settings_tab_clone_args,
	'layouts'                => [
		'key'               => 'section_field_layouts',
		'label'             => 'Section Layouts',
		'name'              => 'section_layouts',
		'type'              => 'flexible_content',
		'instructions'      => '',
		'required'          => 0,
		'conditional_logic' => 0,
		'wrapper'           => [
			'width' => '',
			'class' => '',
			'id'    => '',
		],
		'button_label'      => 'Add Layout',
		'min'               => '',
		'max'               => '',
		'layouts'           => $layouts_arr,
	],
	'advanced_tab'           => $advanced_settings_tab_clone_args,
	'label_label_color_name' => $label_label_color_name_clone_args,
	'classes_id_indent_hide' => $classes_id_indent_hide_clone_args,
	'prepend_append'         => $prepend_append_clone_args,
];
$section_sub_fields = apply_filters( 'afl/sub_fields/layout=section', $section_sub_fields );

$section_layout_args                                                = [
	'key'        => 'afl_layout_section',
	'name'       => 'layout_section',
	'label'      => 'Section',
	'display'    => 'block',
	'sub_fields' => $section_sub_fields,
	'min'        => '',
	'max'        => '',
];
$section_layout_args['sub_fields']['content_tab']['key']            = 'section_field_content_tab';
$section_layout_args['sub_fields']['advanced_tab']['key']           = 'section_field_advanced_tab';
$section_layout_args['sub_fields']['label_label_color_name']['key'] = 'section_field_label_label_color_name';
$section_layout_args['sub_fields']['classes_id_indent_hide']['key'] = 'section_field_classes_id';
$section_layout_args['sub_fields']['prepend_append']['key']         = 'section_field_prepend_append';

$section_layout_args = apply_filters( 'afl/layout_args/layout=section', $section_layout_args );

// Add Section to main layout args.
array_unshift( $layouts_arr, $section_layout_args );
$layouts_with_section_arr = $layouts_arr;

asort( $layouts_with_section_arr );

#endregion


/*——————————————————————————————————————————————————————————————————————————————
/  Register Flex Content Field Group
——————————————————————————————————————————————————————————————————————————————*/

$location_arr = array(
	array(
		array(
			'param'    => 'post_type',
			'operator' => '==',
			'value'    => 'page',
		),
	),
	array(
		array(
			'param'    => 'post_type',
			'operator' => '==',
			'value'    => 'afl_template',
		),
	),
);
$location_arr = apply_filters( 'afl/group/location_args', $location_arr );

acf_add_local_field_group( array(
	'key'                   => 'group_afl_flex_content',
	'title'                 => 'Flex Content',
	'fields'                => array(
		'import' => array(
			'key'               => 'field_import',
			'label'             => 'Import Layout',
			'name'              => 'import',
			'type'              => 'post_object',
			'instructions'      => 'Make a selection to add a preset template to the layouts list.',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => '',
			],
			'default_value'     => '',
			'post_type'         => 'afl_template',
			'taxonomy'          => '',
			'allow_null'        => true,
			'multiple'          => true,
			'return_format'     => 'id',
		),
		array(
			'key'               => 'field_layouts',
			'label'             => 'Layouts',
			'name'              => 'layouts',
			'type'              => 'flexible_content',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => [
				'width' => '',
				'class' => '',
				'id'    => '',
			],
			'button_label'      => 'Add Layout',
			'min'               => '',
			'max'               => '',
			'layouts'           => $layouts_with_section_arr,
		),
	),
	'location'              => $location_arr,
	'menu_order'            => 0,
	'position'              => 'normal',
	'style'                 => 'default',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => '',
	'active'                => 1,
	'description'           => '',
) );
