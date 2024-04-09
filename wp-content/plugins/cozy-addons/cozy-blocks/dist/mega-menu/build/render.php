<?php

use CozyBlock\Helpers\CozyHelpers;

$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyMegaMenu_' . str_replace( '-', '_', $client_id );

$attributes['megaMenuTemplates'] = CozyHelpers::get_cozy_mega_menu_templates();

wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockMegaMenuInit( "' . $client_id . '" ) }) ' );

$output   = '<div class="cozy-block-wrapper">';
$output  .= $content;
$output  .= '</div>';

echo $output;
