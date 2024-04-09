<?php
$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyProductCarousel_' . str_replace( '-', '_', $client_id );

$currency_symbol = get_woocommerce_currency_symbol();
// Get the currency position (left, right, left_space, right_space)
$currency_position              = get_option( 'woocommerce_currency_pos' );
$attributes['currencySymbol']   = $currency_symbol;
$attributes['currencyPosition'] = $currency_position;

wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockProductCarouselInit( "' . $client_id . '" ) }) ' );

$output  = '<div class="cozy-block-wrapper">';
$output .= $content;
$output .= '</div>';

echo $output;
