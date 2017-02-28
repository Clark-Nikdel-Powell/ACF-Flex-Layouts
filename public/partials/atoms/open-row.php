<?php
namespace CNP;

/**
 * Class ACF_Open_row
 *
 * A simple open row atom.
 *
 * @package CNP
 */
if ( class_exists( 'CNP\AtomTemplate' ) && ! class_exists( 'CNP\ACF_OpenRow' ) ) {

	class ACF_OpenRow extends AtomTemplate {

		public function __construct( $data ) {

			// Set the name before the parent construct so that default classes can get added.
			if ( ! isset( $data['name'] ) || empty( $data['name'] ) ) {
				$data['name'] = 'acf-openrow';
				$this->name   = $data['name'];
			}

			parent::__construct( $data );

			$this->tag        = 'div';
			$this->tag_type   = 'split';
			$standard_classes = [ $this->name, 'row' ];
			$data_classes     = array();

			if ( ! empty( $data['class'] ) ) {
				$data_classes = Utility::parse_classes_as_array( $data['class'] );
			}

			$this->attributes['class'] = array_merge( $standard_classes, $data_classes );

		}

		public function get_markup() {

			parent::get_markup();

			// Reset the markup with just the open tag.
			$this->markup = $this->markup['open'];
		}
	}
}