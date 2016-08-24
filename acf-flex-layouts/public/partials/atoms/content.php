<?php
namespace CNP;

if ( class_exists( 'AtomTemplate' ) && ! class_exists( 'ACF_Content' ) ) {

	class ACF_Content extends AtomTemplate {

		public function __construct( $data ) {

			if ( ! isset( $data['name'] ) || empty( $data['name'] ) ) {
				$data['name'] = 'acf-content';
				$this->name   = $data['name'];
			}

			parent::__construct( $data );

			$this->tag      = 'div';
			$this->tag_type = 'false_without_content';

			$standard_classes = [ $this->name ];
			$data_classes     = array();

			if ( ! empty( $data['class'] ) ) {
				$data_classes = Utility::parse_classes_as_array( $data['class'] );
			}

			$this->attributes['class'] = array_merge( $standard_classes, $data_classes );

			if ( '' !== $data['content'] ) {
				$this->content = $data['content'];
			}
		}
	}
}
