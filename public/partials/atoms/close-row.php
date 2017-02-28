<?php
namespace CNP;

/**
 * Class ACF_Close_row
 *
 * A simple close row atom.
 *
 * @package CNP
 */
if ( class_exists( 'CNP\AtomTemplate' ) && ! class_exists( 'CNP\ACF_CloseRow' ) ) {

	class ACF_CloseRow extends AtomTemplate {

		public function __construct( $data ) {

			// Set the name before the parent construct so that default classes can get added.
			if ( ! isset( $data['name'] ) || empty( $data['name'] ) ) {
				$data['name'] = 'acf-closerow';
				$this->name   = $data['name'];
			}

			parent::__construct( $data );

			$this->tag      = 'div';
			$this->tag_type = 'split';

		}

		public function get_markup() {

			parent::get_markup();

			// Reset the markup with the closing tag.
			$this->markup = $this->markup['close'];
		}
	}
}
