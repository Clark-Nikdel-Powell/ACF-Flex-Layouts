<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    ACF_Flex_Layouts
 * @subpackage ACF_Flex_Layouts/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    ACF_Flex_Layouts
 * @subpackage ACF_Flex_Layouts/admin
 * @author     Your Name <email@example.com>
 */
class ACF_Flex_Layouts_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $acf_flex_layouts The ID of this plugin.
	 */
	private $acf_flex_layouts;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $acf_flex_layouts The name of this plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $acf_flex_layouts, $version ) {

		$this->acf_flex_layouts = $acf_flex_layouts;
		$this->version          = $version;

	}

	public function register_template_post_type() {

		$acf_flex_layout_template_post_type_labels = [
			'name'               => _x( 'Templates', 'post type general name', 'acf-flex-layouts' ),
			'singular_name'      => _x( 'Template', 'post type singular name', 'acf-flex-layouts' ),
			'menu_name'          => _x( 'Templates', 'admin menu', 'acf-flex-layouts' ),
			'name_admin_bar'     => _x( 'Template', 'add new on admin bar', 'acf-flex-layouts' ),
			'add_new'            => _x( 'Add New', 'book', 'acf-flex-layouts' ),
			'add_new_item'       => __( 'Add New Template', 'acf-flex-layouts' ),
			'new_item'           => __( 'New Template', 'acf-flex-layouts' ),
			'edit_item'          => __( 'Edit Template', 'acf-flex-layouts' ),
			'view_item'          => __( 'View Template', 'acf-flex-layouts' ),
			'all_items'          => __( 'All Templates', 'acf-flex-layouts' ),
			'search_items'       => __( 'Search Templates', 'acf-flex-layouts' ),
			'parent_item_colon'  => __( 'Parent Templates:', 'acf-flex-layouts' ),
			'not_found'          => __( 'No templates found.', 'acf-flex-layouts' ),
			'not_found_in_trash' => __( 'No templates found in Trash.', 'acf-flex-layouts' ),
		];
		$acf_flex_layout_template_post_type_labels = apply_filters( 'acf_flex_layouts/post_type/labels', $acf_flex_layout_template_post_type_labels );

		$acf_flex_layout_template_post_type_args = [
			'labels'             => $acf_flex_layout_template_post_type_labels,
			'description'        => __( 'Description.', 'acf-flex-layouts' ),
			'public'             => false,
			'publicly_queryable' => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => false,
			'rewrite'            => false,
			'capability_type'    => 'page',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => [ 'title' ],
			'menu_icon'          => 'dashicons-layout',
		];
		$acf_flex_layout_template_post_type_args = apply_filters( 'acf_flex_layouts/post_type/args', $acf_flex_layout_template_post_type_args );

		register_post_type( 'afl_template', $acf_flex_layout_template_post_type_args );
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in ACF_Flex_Layouts_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The ACF_Flex_Layouts_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->acf_flex_layouts, plugin_dir_url( __FILE__ ) . 'css/acf-flex-layouts-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in ACF_Flex_Layouts_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The ACF_Flex_Layouts_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->acf_flex_layouts, plugin_dir_url( __FILE__ ) . 'js/acf-flex-layouts-admin.js', array( 'jquery' ), $this->version, true );

	}

	public function register_flex_layouts() {

		if ( function_exists( 'acf_add_local_field_group' ) ) {

			include_once( plugin_dir_path( __FILE__ ) . 'partials/registered-field-groups/advanced-tab.php' );
			include_once( plugin_dir_path( __FILE__ ) . 'partials/registered-field-groups/content-tab.php' );
			include_once( plugin_dir_path( __FILE__ ) . 'partials/registered-field-groups/label-label-color-name.php' );
			include_once( plugin_dir_path( __FILE__ ) . 'partials/registered-field-groups/classes-id-indent-hide.php' );
			include_once( plugin_dir_path( __FILE__ ) . 'partials/registered-field-groups/prepend-append.php' );
			include_once( plugin_dir_path( __FILE__ ) . 'partials/registered-field-groups/flex-content.php' );

		}
	}

	public function add_expand_all_collapse_all_buttons( $field ) {

		$field['label'] = '<div class="text">Layouts</div>';

		$field['label'] .= '<div class="expand-collapse-layouts-buttons">';
		$field['label'] .= '<a href="#" class="acf-icon small collapse-all-layouts" title="Collapse all Layouts"><span class="collapse-all-layouts-icon"></span><span class="screen-reader-text">Collapse all Layouts</span></a>';
		$field['label'] .= '<a href="#" class="acf-icon small expand-all-layouts" title="Expand all Layouts"><span class="expand-all-layouts-icon"></span><span class="screen-reader-text">Expand all Layouts</span></a>';
		$field['label'] .= '</div>';

		return $field;
	}

	/**
	 * filter_acf_flexible_content_layouts_title
	 *
	 * Adds the Flex Content label to the title bar, so that you can see what it is when the layout fields are collapsed.
	 *
	 * @param $title The title of the Flexible Content Layout
	 * @param $field
	 * @param $layout
	 * @param $i
	 *
	 * @return string
	 */
	public function add_flexible_content_label( $title, $field, $layout, $i ) {

		$label = '';
		$label = get_sub_field( 'label' );

		if ( '' !== trim( $label ) ) {
			$title .= ': ' . $label;
		}

		return $title;
	}

	/**
	 * filter_acf_flexible_content_label_color
	 *
	 * Adds a background color to the Flexible Content title bar
	 *
	 * @param $title
	 * @param $field
	 * @param $layout
	 * @param $i
	 *
	 * @return string $title
	 */
	public function add_flexible_content_label_color( $title, $field, $layout, $i ) {

		$bg_color    = '';
		$text_color  = '';
		$label_color = get_sub_field( 'label_color' );

		if ( '' !== $label_color ) {

			switch ( $label_color ) {

				case 'Turquoise':

					$bg_color   = '#1abc9c';
					$text_color = '#ffffff';

					break;

				case 'Green Sea':

					$bg_color   = '#16a085';
					$text_color = '#ffffff';

					break;

				case 'Emerald':

					$bg_color   = '#2ecc71';
					$text_color = '#ffffff';

					break;

				case 'Nephritis':

					$bg_color   = '#27ae60';
					$text_color = '#ffffff';

					break;

				case 'Peter River':

					$bg_color   = '#3498db';
					$text_color = '#ffffff';

					break;

				case 'Belize Hole':

					$bg_color   = '#2980b9';
					$text_color = '#ffffff';

					break;

				case 'Amethyst':

					$bg_color   = '#9b59b6';
					$text_color = '#ffffff';

					break;

				case 'Wisteria':

					$bg_color   = '#8e44ad';
					$text_color = '#ffffff';

					break;

				case 'Wet Asphalt':

					$bg_color   = '#34495e';
					$text_color = '#ffffff';

					break;

				case 'Midnight Blue':

					$bg_color   = '#2c3e50';
					$text_color = '#ffffff';

					break;

				case 'Sun Flower':

					$bg_color   = '#f1c40f';
					$text_color = '#ffffff';

					break;

				case 'Orange':

					$bg_color   = '#f39c12';
					$text_color = '#ffffff';

					break;

				case 'Carrot':

					$bg_color   = '#e67e22';
					$text_color = '#ffffff';

					break;

				case 'Pumpkin':

					$bg_color   = '#d35400';
					$text_color = '#ffffff';

					break;

				case 'Alizarin':

					$bg_color   = '#e74c3c';
					$text_color = '#ffffff';

					break;

				case 'Pomegranate':

					$bg_color   = '#c0392b';
					$text_color = '#ffffff';

					break;

				case 'Clouds':

					$bg_color   = '#ecf0f1';
					$text_color = '#000000';

					break;

				case 'Silver':

					$bg_color   = '#bdc3c7';
					$text_color = '#000000';

					break;

				case 'Concrete':

					$bg_color   = '#95a5a6';
					$text_color = '#ffffff';

					break;

				case 'Asbestos':

					$bg_color   = '#7f8c8d';
					$text_color = '#ffffff';

					break;
			}

			if ( '' !== $bg_color && '' !== $text_color ) {
				$title .= '<style type="text/css"> .layout[data-id="' . $i . '"] .acf-fc-layout-order {background-color: ' . $bg_color . '; color: ' . $text_color . ';} </style>';
			}
		}

		return $title;
	}

	public function import_template() {

		// Bail early if no ACF data
		if ( empty( $_POST['acf'] ) ) {
			return;
		}

		// Flex layouts from this page
		if ( isset( $_POST['acf']['field_layouts'] ) && is_array( $_POST['acf']['field_layouts'] ) && ! empty( $_POST['acf']['field_layouts'] ) ) {
			$current_page_flex_layouts = $_POST['acf']['field_layouts'];
		} else {
			$current_page_flex_layouts = array();
		}

		// Determine if there are any pages to import
		if ( isset( $_POST['acf']['field_import'] ) ) {
			$pages_to_import = $_POST['acf']['field_import'];
		} else {
			$pages_to_import = array();
		}

		// If there aren't any layouts to import, skip the rest.
		if ( empty( $pages_to_import ) ) {
			return;
		}

		// Loop through the (possibly) multiple pages that we'll import.
		foreach ( $pages_to_import as $page_id ) {

			// Get the layouts value from the selected page.
			$layouts_from_page = get_field_object( 'layouts', $page_id, false, true );

			// Add the value to this page.
			if ( ! empty( $layouts_from_page['value'] ) ) {
				$current_page_flex_layouts = array_merge( $current_page_flex_layouts, $layouts_from_page['value'] );
			}
		}

		// Re-set the Layout field value with any imported pages, then continue saving.
		$_POST['acf']['field_layouts'] = $current_page_flex_layouts;


		// Clear out the pages to import setting
		$_POST['acf']['field_import'] = array();
	}
}
