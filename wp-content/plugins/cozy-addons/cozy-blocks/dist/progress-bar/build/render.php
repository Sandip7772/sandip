<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyProgressBar_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProgressBarInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$output = '';
if ( 'circle' === $attributes['layout'] ) {
	$output = '<div class="cozy-block-wrapper ' . $block_id . ' wp-block-cozy-block-progress-bar display-flex block-align-' . $attributes['layoutCircle']['alignment'] . '">';
} else {
	$output = '<div class="cozy-block-wrapper ' . $block_id . ' ">';
}
$output .= $content;
$output .= '</div>';

echo $output;
