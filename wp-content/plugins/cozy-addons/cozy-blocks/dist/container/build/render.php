<?php
$client_id     = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$container_var = 'cozyContainer_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $container_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockContainerInit( "' . $client_id . '" ) }) ' );

$output  = '<div class="cozy-block-wrapper ' . ( 'sticky' === $attributes['position'] ? 'position-sticky' : '' ) . '">';
$output .= $content;
$output .= '</div>';

echo $output;
