<?php

function get_acf_organisms( $all_layouts = array() ) {

	$content = '';

	// Loop through the layouts
	foreach ( $all_layouts as $layout_index => $layout_data ) {

		$acf_atom_or_organism_class_name = '';

		// E.g., a layout named "layout_content" has a suffix titled "Content."
		// "layout_post_list" becomes "PostList"
		$acf_atom_or_organism_class_suffix = str_replace( ' ', '', ucwords( str_replace( [ 'layout', '_' ], [ '', ' ' ], $layout_data['acf_fc_layout'] ) ) );

		if ( class_exists( '\CNP\OrganismTemplate' ) ) {
			$acf_atom_or_organism_class_name = 'CNP\\ACF_' . $acf_atom_or_organism_class_suffix;
		}
		if ( class_exists( '\CNP\TemplateLibrary\Organism' ) ) {
			$acf_atom_or_organism_class_name = 'CNP\\TemplateLibrary\\ACF' . $acf_atom_or_organism_class_suffix;
		}

		$acf_atom_or_organism_class_name = apply_filters( 'afl/class_name_for_output', $acf_atom_or_organism_class_name, $layout_data );

		$layout_name                     = str_replace( 'layout_', '', $layout_data['acf_fc_layout'] );
		$acf_atom_or_organism_class_name = apply_filters( 'afl/class_name_for_output/layout=' . $layout_name, $acf_atom_or_organism_class_name, $layout_data );

		// Turn off filter suppression by default. If we need to enable it, do it manually.
		$layout_data['suppress_filters'] = false;

		if ( class_exists( $acf_atom_or_organism_class_name ) ) {
			$atom_or_organism = new $acf_atom_or_organism_class_name( $layout_data );

			if ( class_exists( '\CNP\OrganismTemplate' ) && false === $atom_or_organism->hide ) {
				$atom_or_organism->get_markup();
				$content .= $atom_or_organism->markup;
			}
			if ( class_exists( '\CNP\TemplateLibrary\Organism' ) && false === $atom_or_organism->hide ) {
				$content .= $atom_or_organism->get_markup();
			}
		}
	}

	return $content;

}
