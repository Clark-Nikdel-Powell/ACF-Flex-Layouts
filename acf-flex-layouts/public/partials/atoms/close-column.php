<?php
namespace CNP;

if ( class_exists( 'AtomTemplate' ) && ! class_exists( 'ACF_CloseColumn' ) ) {

	class ACF_CloseColumn extends AtomTemplate {

		public function __construct( $data ) {

			// Set the name before the parent construct so that default classes can get added.
			if ( ! isset( $data['name'] ) || empty( $data['name'] ) ) {
				$data['name'] = 'acf-closecolumn';
				$this->name   = $data['name'];
			}

			parent::__construct( $data );

			$this->tag      = 'div';
			$this->tag_type = 'split';
		}

		public function get_inside() {

			$data   = [
				'name'     => $this->name . '__inside',
				'tag'      => 'div',
				'tag_type' => 'split',
			];
			$inside = new AtomTemplate( $data );
			$inside->get_markup();

			return $inside->markup;
		}

		public function get_markup() {

			parent::get_markup();

			$inside       = $this->get_inside();
			$this->markup = $this->markup['close'] . $inside['close'];
		}
	}
}
