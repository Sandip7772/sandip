<?php

function add_cozy_button_hover_styles( $block_content, $block ) {
	// Check if it's a core/button block
	if ( 'core/button' === $block['blockName'] ) {
		// Extract the existing class attribute
		preg_match( '/<div class="([^"]+)"/', $block_content, $matches );
		$existingClass = isset( $matches[1] ) ? $matches[1] : '';

		// Extract the custom styles from block attributes
		$customStyles = array(
			'--cozyButtonBgColorHover' => '',
			'--cozyButtonColorHover'   => '',
			'--cozyButtonBorderHover'  => '',
		);
		if ( isset( $block['attrs']['cozyHoverStyles'] ) ) {
			$cozyHoverStyles = $block['attrs']['cozyHoverStyles'];

			$customStyles = array(
				'--cozyButtonBgColorHover' => strtolower( $cozyHoverStyles['bgColor'] ?? '' ),
				'--cozyButtonColorHover'   => strtolower( $cozyHoverStyles['color'] ?? '' ),
				'--cozyButtonBorderHover'  => strtolower( $cozyHoverStyles['borderColor'] ?? '' ),
			);
		}

		// Build the inline style string
		$inlineStyles = '';
		foreach ( $customStyles as $style => $value ) {
			$inlineStyles .= "$style: $value; ";
		}

		// Append the custom class and inline styles to the class attribute
		$updatedClass  = trim( $existingClass . ' cozy-button-hover-styles' );
		$block_content = preg_replace( '/<div class="[^"]+"/', '<div class="' . esc_attr( $updatedClass ) . '" style="' . esc_attr( $inlineStyles ) . '"', $block_content );
	}

	return $block_content;
}
add_filter( 'render_block', 'add_cozy_button_hover_styles', 10, 2 );

function get_theme_json_url() {
	$theme_directory = '';
	$theme_json_url  = '';

	$active_theme = wp_get_theme();
	$parent_theme = $active_theme->parent();
	if ( false !== $parent_theme ) {
		$parent_theme_uri = get_template_directory_uri();
		$theme_json_url   = $parent_theme_uri . '/theme.json';
		return esc_url( $theme_json_url ); // Return the URL of theme.json
	} else {
		$theme_directory = get_theme_file_uri(); // Get URL to the theme directory
		$theme_json_url  = trailingslashit( $theme_directory ) . 'theme.json';
	}

	return esc_url( $theme_json_url ); // Return the URL of theme.json
}

function cozy_get_fonts_from_active_theme() {
	$theme_json_url = get_theme_json_url(); // Path to theme.json

	// Make an HTTP request to fetch the contents of theme.json
	$response = wp_remote_get( $theme_json_url );

	if ( ! is_wp_error( $response ) && 200 === $response['response']['code'] ) {
		$json_content = wp_remote_retrieve_body( $response ); // Get the JSON content

		// Decode JSON content
		$decoded_json = json_decode( $json_content, true );

		// Identify fields containing translatable text and extract them
		$translatables = array();
		if ( isset( $decoded_json['settings']['typography']['fontFamilies'] ) ) {
			$font_data_array = $decoded_json['settings']['typography']['fontFamilies']; // Example field
			// Add more fields as needed

			foreach ( $font_data_array as $font_data ) {
				if ( isset( $font_data['fontFamily'] ) ) {
					if (
						isset( $font_data['fontFamily'] ) &&
						! preg_match( '/^(sans|serif|system)/i', $font_data['fontFamily'] ) &&
						substr_count( $font_data['fontFamily'], ',' ) <= 1
					) {
						$font_family_parts = explode( ',', $font_data['fontFamily'] );
						$first_part        = trim( $font_family_parts[0] );
						$translatables[]   = array(
							'label' => str_replace( '"', '', $first_part ),
							'value' => $first_part,
						);
					}
				}
			}
		}
		return $translatables;
	}

	return array();
}
