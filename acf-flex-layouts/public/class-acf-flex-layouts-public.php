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
	 * @param      string $acf_flex_layouts The name of the plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $acf_flex_layouts, $version ) {

		$this->acf_flex_layouts = $acf_flex_layouts;
		$this->version          = $version;

	}

	public function add_pattern_library_atoms_and_organisms() {

		// Functions
		require_once( plugin_dir_path( __FILE__ ) . 'partials/function-get-acf-organisms.php' );

		// Atoms
		require_once( plugin_dir_path( __FILE__ ) . 'partials/atoms/section.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/atoms/open-row.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/atoms/close-row.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/atoms/open-column.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/atoms/close-column.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/atoms/content.php' );

		// Organisms
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/accordion.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/blurb.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/blurb-list.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/gallery.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/header.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/map.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/post-list.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/slideshow.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'partials/organisms/tabs.php' );

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
	public function add_acf_organisms_to_content( $content ) {

		global $post;

		// Check the post for layouts data
		$all_layouts = get_field( 'layouts', $post->ID );


		// If we have layouts, get the layout markup.
		if ( ! empty( $all_layouts ) ) {

			$content .= get_acf_organisms( $all_layouts );
		}

		return $content;

	}
}
