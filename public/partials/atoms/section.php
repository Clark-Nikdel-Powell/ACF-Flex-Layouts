<?php
namespace CNP;

/**
 * Class ACF_Section
 *
 * A simple open row atom.
 *
 * @package CNP
 */
if ( class_exists( 'CNP\AtomTemplate' ) && ! class_exists( 'CNP\ACF_Section' ) ) {

	class ACF_Section extends AtomTemplate {

		private $prepend;
		private $append;

		public function __construct( $data ) {

			// Set the name before the parent construct so that default classes can get added.
			if ( ! isset( $data['name'] ) || empty( $data['name'] ) ) {
				$data['name'] = 'acf-section';
			}

			parent::__construct( $data );

			$this->tag      = 'div';
			$this->tag_type = 'split';
			$this->prepend  = $data['prepend'];
			$this->append   = $data['append'];

			if ( isset( $data['section_layouts'] ) && ! empty( $data['section_layouts'] ) ) {
				$this->content = get_acf_organisms( $data['section_layouts'] );
			}
		}

		public function get_markup() {

			parent::get_markup();

			$this->markup = $this->before . $this->markup['open'] . $this->prepend . $this->content . $this->append . $this->markup['close'] . $this->after;
		}
	}
}