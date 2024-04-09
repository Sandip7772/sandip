<?php

$client_id  = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$slider_var = 'slider_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $slider_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockSliderInit( "' . $client_id . '" ) }) ' );

$output = '<div class="cozy-block-wrapper">';

$output .= $content;

$output .= '</div>';

echo $output;
