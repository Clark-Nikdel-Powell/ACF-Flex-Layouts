<?php
namespace CNP;

if ( class_exists( 'OrganismTemplate' ) && ! class_exists( 'ACF_Gallery' ) ) {

	class ACF_Gallery extends OrganismTemplate {

		public $images;
		public $image_size;

		public function __construct( $data ) {

			if ( ! isset( $data['name'] ) || empty( $data['name'] ) ) {
				$data['name'] = 'acf-gallery';
			}

			if ( ! isset( $data['structure'] ) ) {
				$data['structure'] = [
					'inside'     => [
						'children' => [ 'images', 'footer' ],
					],
					'images'     => [
						'parts' => array(),
					],
					'footer'     => [
						'children' => [ 'pagination', 'captions', 'nav' ],
					],
					'pagination' => [
						'parts' => [
							'current'   => [
								'content' => '1',
							],
							'separator' => [
								'content' => '/',
							],
							'total'     => [
								'content' => '1',
							],
						],
					],
					'captions'   => [
						'parts' => array(),
					],
					'nav'        => [
						'parts' => [
							'prev' => [
								'tag'     => 'button',
								'class'   => [ $data['name'] . '__nav-item' ],
								'content' => '<',
							],
							'next' => [
								'tag'     => 'button',
								'class'   => [ $data['name'] . '__nav-item' ],
								'content' => '>',
							],
						],
					],
				];
			}

			$this->images     = $data['images'];
			$this->image_size = $data['image_size'];

			parent::__construct( $data );

		}

		public function get_markup() {

			try {

				if ( empty( $this->images ) ) {
					throw new \Exception( 'No images defined.' );
				}

				$images_count = count( $this->images );

				if ( 1 === $images_count ) {
					$this->attributes['class'][] = 'gallery--hidePagination';
					$this->attributes['class'][] = 'gallery--hideNav';
				}
				if ( 1 < $images_count ) {
					$this->structure['pagination']['parts']['total']['content'] = $images_count;
				}

				foreach ( $this->images as $image_index => $image_data ) {
					$this->generate_image( $image_index, $image_data );
				}

				parent::get_markup();

			} catch ( \Exception $e ) {

				echo '<!-- Gallery failed: ', $e->getMessage(), '-->', "\n";

			}
		}

		public function generate_image( $image_index, $image_data ) {

			$image_number = (string) ( $image_index + 1 );

			$this->structure['images']['parts'][ 'image-' . $image_index ] = [
				'atom'          => 'Image',
				'attachment_id' => $image_data['id'],
				'size'          => $this->image_size,
				'attributes'    => [
					'data-image' => $image_number,
					'class'      => [ $this->name . '__image' ],
				],
			];

			$caption_classes = [ $this->name . '__caption' ];

			if ( 0 === $image_index ) {
				$caption_classes[] = $this->name . '__caption--isActive';
			}

			if ( isset( $this->structure['captions'] ) ) {

				$this->structure['captions']['parts'][ 'caption-' . $image_index ] = [
					'attributes' => [
						'data-image' => $image_number,
						'class'      => $caption_classes,
					],
					'content'    => $image_data['caption'],
				];
			}
		}
	}
}
