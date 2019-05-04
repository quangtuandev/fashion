<?php

class TM_EPO_FIELDS_variations extends TM_EPO_FIELDS {

	public function display_field( $element = array(), $args = array() ) {

		$current_builder = $element['builder'];

		if ( TM_EPO_WPML()->is_active() ) {
			$id_for_meta = $args['product_id'];
			$wpml_is_original_product = TM_EPO_WPML()->is_original_product( $args['product_id'] );
			if ( !$wpml_is_original_product ) {
				$id_for_meta = floatval( TM_EPO_WPML()->get_original_id( $args['product_id'] ) );
			}

			$builder = tc_get_post_meta( $id_for_meta, 'tm_meta', TRUE );

			if ( !$current_builder ) {

				if ( !isset( $builder['tmfbuilder'] ) ) {
					$builder['tmfbuilder'] = array();
				}
				$current_builder = $builder['tmfbuilder'];

			}

		}

		$variations_disabled = is_array( $current_builder ) &&
								isset( $current_builder['variations_disabled'] ) 
								? $current_builder['variations_disabled'] : "";
		$display = array(
			'builder' => $current_builder,
			'variation_section_disabled' => $variations_disabled,
		);

		return $display;
	}

	public function validate() {
		return array( 'passed' => TRUE, 'message' => FALSE );
	}

}