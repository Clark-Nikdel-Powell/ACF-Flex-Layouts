<?php
namespace CNP;

if ( class_exists( 'CNP\OrganismTemplate' ) && ! class_exists( 'CNP\ACF_Accordion' ) ) {

	class ACF_Accordion extends OrganismTemplate {

		public $panels;
		public $panel_organism_args;

		public function __construct( $data ) {

			if ( ! isset( $data['name'] ) || empty( $data['name'] ) ) {
				$data['name'] = 'acf-accordion';
			}

			$this->panels = ! empty( $data['panels'] ) ? $data['panels'] : array();

			// Isset check in case this class is extended.
			if ( ! isset( $data['structure'] ) ) {
				$data['structure'] = [
					'panels' => [
						'attributes' => [
							'data-accordion' => '',
						],
						'content'    => '',
					],
				];
			}

			// Isset check in case this class is extended.
			if ( ! isset( $data['panel_organism_args'] ) ) {
				$data['panel_organism_args'] = [
					'name'       => $this->name . $this->separator . 'panel',
					'separator'  => '-',
					'attributes' => [
						'data-accordion-item' => '',
					],
					'tag'        => 'div',
					'structure'  => [
						'title'   => [
							'atom'       => 'Link',
							'attributes' => [
								'href' => '#',
							],
							'tag_type'   => 'false_without_content',
							'content'    => '',
							'sibling'    => 'content',
						],
						'content' => [
							'attributes' => [
								'data-tab-content' => '',
							],
							'parts'      => [
								'content-title'    => [
									'tag_type' => 'false_without_content',
									'content'  => '',
								],
								'content-subtitle' => [
									'tag_type' => 'false_without_content',
									'content'  => '',
								],
								'content-text'     => [
									'tag_type' => 'false_without_content',
									'content'  => '',
								],
							],
						],
					],
				];
			}

			parent::__construct( $data );

			// Set the property now that we've had a chance to filter it
			$this->panel_organism_args = $data['panel_organism_args'];
		}

		/**
		 * get_markup
		 *
		 * Standard get_markup function, adds a check for tabs and generates tabs.
		 *
		 * @throws \Exception
		 */
		public function get_markup() {

			// Test for exceptions before we begin.
			try {

				if ( empty( $this->panels ) ) {
					throw new \Exception( 'No panels found.' );
				}
			} catch ( \Exception $e ) {
				echo '<!-- Accordion failed: ', $e->getMessage(), '-->', "\n";
			}

			foreach ( $this->panels as $panel_index => $panel_data ) {
				$panel_args = $this->panel_organism_args;
				$this::generate_panel( $panel_args, $panel_data, $panel_index );
			}

			parent::get_markup();

		}

		/**
		 * generate_panel
		 *
		 * Generates tab markup, then adds it to the tabs container.
		 *
		 * @param $panel_args
		 * @param $panel_data
		 * @param $panel_index
		 *
		 * @return bool
		 */
		public function generate_panel( $panel_args, $panel_data, $panel_index ) {

			$panel_number = $panel_index + 1;

			// Trim all panel data first, so that an empty space doesn't get used as content by mistake.
			$panel_data = Utility::multidimensional_array_map( 'trim', $panel_data );

			if ( isset( $panel_data['hide'] ) && true == $panel_data['hide'] ) {
				return false;
			}

			$panel_slug = str_replace( ' ', '-', preg_replace( '/[^A-Za-z0-9 ]/', '', strtolower( $panel_data['panel_title'] ) ) );

			// Set "is-active" class for first panel
			if ( 1 === $panel_number ) {
				$panel_args['attributes']['class'][] = 'is-active';
			}

			/*——————————————————————————————————————————
			/  Panel Title
			——————————————————————————————————————————*/
			$panel_args['structure']['title']['content'] = $panel_data['panel_title'];

			/*——————————————————————————————————————————
			/  Panel Content
			——————————————————————————————————————————*/

			// Set Content Title
			$panel_args['structure']['content']['parts']['content-title']['content'] = $panel_data['title'];

			// Set Content Subtitle
			$panel_args['structure']['content']['parts']['content-subtitle']['content'] = $panel_data['subtitle'];

			// Set Text
			$panel_args['structure']['content']['parts']['content-text']['content'] = $panel_data['text'];

			$panel = new OrganismTemplate( $panel_args );
			$panel->get_markup();

			$this->structure['panels']['content'] .= $panel->markup;
		}
	}
}
