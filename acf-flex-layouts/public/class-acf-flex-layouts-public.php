<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    ACF_Flex_Layouts
 * @subpackage ACF_Flex_Layouts/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    ACF_Flex_Layouts
 * @subpackage ACF_Flex_Layouts/public
 * @author     Your Name <email@example.com>
 */
class ACF_Flex_Layouts_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/acf-flex-layouts-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/acf-flex-layouts-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * add_acf_organisms_to_content
	 *
	 * Filters the ACF organisms into the content filter, so that
	 * organism content can be located during site searches.
	 *
	 * @since 0.1
	 *
	 * @see (calls) cnp_get_acf_organism_markup
	 * @global object $post Post object.
	 *
	 * @param string $content The post content.
	 *
	 * @return string The modified post content.
	 */
	function add_acf_organisms_to_content( $content ) {

		global $post;

		// Check the post for layouts data
		$all_layouts = get_field( 'layouts', $post->ID );

		// If we have layouts, get the layout markup.
		if ( ! empty( $all_layouts ) ) {

			// Loop through the layouts
			foreach ( $all_layouts as $layout_index => $layout_data ) {

				// E.g., a layout named "layout_content" has a PHP class titled "CNP\ACF_Content."
				// "layout_post_list" becomes "CNP\ACF_PostList"
				$acf_atom_or_organism_class_suffix = str_replace( ' ', '', ucwords( str_replace( [ 'layout', '_' ], [ '', ' ' ], $layout_data['acf_fc_layout'] ) ) );

				$acf_atom_or_organism_class_name = 'CNP\\ACF_' . $acf_atom_or_organism_class_suffix;

				$acf_atom_or_organism_class_name = apply_filters( 'acf_flex_layouts_class_name_for_output', $acf_atom_or_organism_class_name );

				$layout_name                     = str_replace( 'layout_', '', $layout_data['acf_fc_layout'] );
				$acf_atom_or_organism_class_name = apply_filters( 'acf_flex_layouts_class_name_for_output/layout=' . $layout_name, $acf_atom_or_organism_class_name );

				if ( class_exists( $acf_atom_or_organism_class_name ) ) {
					$atom_or_organism = new $acf_atom_or_organism_class_name( $layout_data );
					$atom_or_organism->get_markup();

					$content = apply_filters( $atom_or_organism->name . '_before', $content );

					if ( '' !== $atom_or_organism->markup ) {
						$content .= $atom_or_organism->markup;
					}

					$content = apply_filters( $atom_or_organism->name . '_after', $content );
				}
			}
		}

		return $content;

	}
}
