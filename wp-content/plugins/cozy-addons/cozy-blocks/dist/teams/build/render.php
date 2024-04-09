<?php
$client_id = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$teams_var = 'cozyTeams_' . str_replace( '-', '_', $client_id );
wp_localize_script( 'cozy-block-scripts', $teams_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockTeamsInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$block_styles = <<<BLOCK_STYLES
@media screen and (max-width: 1024px) {
    #$block_id.display-grid .cozy-block-grid-wrapper {
        grid-template-columns: repeat(
            $width1,
            auto
        ) !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id.display-grid .cozy-block-grid-wrapper {
        grid-template-columns: repeat(
            $width2,
            auto
        ) !important;
    }
}

@media screen and (max-width: 400px) {
    #$block_id.display-grid .cozy-block-grid-wrapper {
        grid-template-columns: repeat(
            1,
            auto
        ) !important;
    }
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
