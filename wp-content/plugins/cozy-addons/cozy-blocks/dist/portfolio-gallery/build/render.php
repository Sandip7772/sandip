<?php

use CozyBlock\Helpers\CozyHelpers;

$client_id      = ! empty( $attributes['blockClientId'] ) ? $attributes['blockClientId'] : '';
$cozy_block_var = 'cozyPortfolioGallery_' . str_replace( '-', '_', $client_id );

$attributes['portfolioTemplates'] = array( ...CozyHelpers::get_cozy_portfolio_gallery_templates() );
$attributes['portfolioTax']       = get_terms( array( 'ca_portfolio_gallery_category' ) );

wp_localize_script( 'cozy-block-scripts', $cozy_block_var, $attributes );
wp_add_inline_script( 'cozy-block-scripts', 'document.addEventListener("DOMContentLoaded", function(event) { window.cozyBlockPortfolioGalleryInit( "' . $client_id . '" ) }) ' );

$block_id = 'cozyBlock_' . str_replace( '-', '_', $client_id );

$width1 = $attributes['gridOptions']['displayColumn'] <= 3 ? $attributes['gridOptions']['displayColumn'] : 3;
$width2 = $attributes['gridOptions']['displayColumn'] <= 2 ? $attributes['gridOptions']['displayColumn'] : 2;

$block_styles = <<<BLOCK_STYLES
#$block_id  {
    font-family: {$attributes['typography']['fontFamily']};
    font-weight: {$attributes['typography']['fontWeight']};
    font-size: {$attributes['typography']['fontSize']}px;
    color: {$attributes['typography']['color']};
}

#$block_id.source-template:not(.layout-type-default) > .cozy-layout-wrapper .cozy-portfolio:hover .cozy-portfolio-gallery__image-overlay {
    background-color: {$attributes['featuredImage']['overlayColor']};
    opacity: {$attributes['featuredImage']['opacity']};
}

#$block_id .cozy-portfolio-gallery__title {
    font-family: {$attributes['titleTypography']['fontFamily']};
    font-weight: {$attributes['titleTypography']['fontWeight']};
    font-size: {$attributes['titleTypography']['fontSize']}px;
    color: {$attributes['titleTypography']['color']};
}
#$block_id .cozy-portfolio-gallery__title:hover {
    color: {$attributes['titleTypography']['colorHover']};
}

#$block_id .cozy-portfolio-gallery__subtitle {
    font-family: {$attributes['subtitleTypography']['fontFamily']};
    font-weight: {$attributes['subtitleTypography']['fontWeight']};
    font-size: {$attributes['subtitleTypography']['fontSize']}px;
    color: {$attributes['subtitleTypography']['color']};
}

#$block_id .cozy-layout-wrapper {
    text-align: {$attributes['textAlign']};
}

#$block_id.layout-grid .cozy-layout-grid {
    grid-template-columns: repeat({$attributes['gridOptions']['displayColumn']}, auto);
    grid-gap: {$attributes['gridOptions']['columnGap']}px;
}
#$block_id.layout-grid.has-masonry .cozy-layout-grid {
    column-count: {$attributes['gridOptions']['displayColumn']};
    grid-column-gap: {$attributes['gridOptions']['columnGap']}px;
}
#$block_id.layout-grid.has-masonry .cozy-layout-grid .cozy-portfolio {
    margin-bottom: {$attributes['gridOptions']['columnGap']}px;
}
@media screen and (max-width: 1024px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(
            $width1,
            auto
        ) !important;
    }
}

@media screen and (max-width: 767px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(
            $width2,
            auto
        ) !important;
    }
}

@media screen and (max-width: 400px) {
    #$block_id.layout-grid .cozy-layout-grid {
        grid-template-columns: repeat(
            1,
            auto
        ) !important;
    }
}

#$block_id.layout-grid.has-isotope .cozy-isotope-filter__wrapper {
    justify-content: {$attributes['isotopeStyles']['textAlign']};
    margin-bottom: {$attributes['isotopeStyles']['marginBottom']}px;
    font-family: {$attributes['isotopeStyles']['fontFamily']};
    font-weight: {$attributes['isotopeStyles']['fontWeight']};
    font-size: {$attributes['isotopeStyles']['fontSize']}px;
}
#$block_id.layout-grid.has-isotope .cozy-isotope-filter__label {
    margin: 0 {$attributes['isotopeStyles']['spacing']}px;
    padding: {$attributes['isotopeStyles']['padding']['top']}px {$attributes['isotopeStyles']['padding']['right']}px {$attributes['isotopeStyles']['padding']['bottom']}px {$attributes['isotopeStyles']['padding']['left']}px;
    border-radius: {$attributes['isotopeStyles']['borderRadius']}px;
    border-width: {$attributes['isotopeStyles']['border']['width']}px;
    border-style: {$attributes['isotopeStyles']['border']['style']};
    border-color: {$attributes['isotopeStyles']['border']['color']};
    background-color: {$attributes['isotopeStyles']['bgColor']};
    color: {$attributes['isotopeStyles']['color']};
}
#$block_id.layout-grid.has-isotope.isotop-filter__has-box-shadow .cozy-isotope-filter__label {
    box-shadow: {$attributes['isotopeStyles']['boxShadow']['horizontal']}px {$attributes['isotopeStyles']['boxShadow']['vertical']}px {$attributes['isotopeStyles']['boxShadow']['blur']}px {$attributes['isotopeStyles']['boxShadow']['spread']}px {$attributes['isotopeStyles']['boxShadow']['color']} {$attributes['isotopeStyles']['boxShadow']['position']};
}
#$block_id.layout-grid.has-isotope .cozy-isotope-filter__label.active {
    border-width: {$attributes['isotopeStyles']['borderActive']['width']}px;
    border-style: {$attributes['isotopeStyles']['borderActive']['style']};
    border-color: {$attributes['isotopeStyles']['borderActive']['color']};
    background-color: {$attributes['isotopeStyles']['bgColorActive']};
    color: {$attributes['isotopeStyles']['colorActive']};
}
#$block_id.layout-grid.has-isotope.isotop-filter__has-box-shadow .cozy-isotope-filter__label.active {
    box-shadow: {$attributes['isotopeStyles']['boxShadowActive']['horizontal']}px {$attributes['isotopeStyles']['boxShadowActive']['vertical']}px {$attributes['isotopeStyles']['boxShadowActive']['blur']}px {$attributes['isotopeStyles']['boxShadowActive']['spread']}px {$attributes['isotopeStyles']['boxShadowActive']['color']} {$attributes['isotopeStyles']['boxShadowActive']['position']};
}

#$block_id.layout-grid.has-isotope .cozy-isotope-filter__search-bar-wrapper .cozy-search-bar {
    padding: {$attributes['searchBar']['padding']['top']}px {$attributes['searchBar']['padding']['right']}px {$attributes['searchBar']['padding']['bottom']}px {$attributes['searchBar']['padding']['left']}px;
    border-radius: {$attributes['searchBar']['borderRadius']}px;
    border-width: {$attributes['searchBar']['border']['width']}px;
    border-style: {$attributes['searchBar']['border']['style']};
    border-color: {$attributes['searchBar']['border']['color']};
    background-color: {$attributes['searchBar']['bgColor']};
    color: {$attributes['searchBar']['color']};
}
#$block_id.layout-grid.has-isotope .cozy-isotope-filter__search-bar-wrapper .cozy-search-bar:focus {
    border-width: {$attributes['searchBar']['borderFocus']['width']}px;
    border-style: {$attributes['searchBar']['borderFocus']['style']};
    border-color: {$attributes['searchBar']['borderFocus']['color']};
    background-color: {$attributes['searchBar']['bgColorFocus']};
}
#$block_id.layout-grid.has-isotope .cozy-isotope-filter__search-bar-wrapper .cozy-search-bar:active {
    border-color: {$attributes['searchBar']['borderFocus']['color']};
}

#$block_id.source-template:not(.layout-type-default) .cozy-layout-wrapper > .cozy-portfolio .cozy-portfolio-gallery__title-cat-wrapper {
    width: {$attributes['featuredImage']['width']}px;
    padding: {$attributes['titleMargin']['top']}px {$attributes['titleMargin']['right']}px {$attributes['titleMargin']['bottom']}px {$attributes['titleMargin']['left']}px;
}
#$block_id.source-template:not(.layout-type-default) .cozy-layout-wrapper > .cozy-portfolio .cozy-portfolio-gallery__title-cat-wrapper .cozy-portfolio-gallery__title {
    color: {$attributes['galleryOptions']['titleColor']};
    margin-bottom: {$attributes['galleryOptions']['marginBottom']}px;
}
#$block_id.source-template:not(.layout-type-default) .cozy-layout-wrapper > .cozy-portfolio .cozy-portfolio-gallery__title-cat-wrapper .cozy-overlay-icon-wrapper {
    width: {$attributes['galleryOptions']['iconBoxSize']}px;
    height: {$attributes['galleryOptions']['iconBoxSize']}px;
    border-radius: {$attributes['galleryOptions']['iconBoxBorderRadius']}px;
    background-color: {$attributes['galleryOptions']['iconBoxBgColor']};
}
#$block_id.source-template:not(.layout-type-default) .cozy-layout-wrapper > .cozy-portfolio .cozy-portfolio-gallery__title-cat-wrapper .cozy-overlay-icon-wrapper:hover {
    background-color: {$attributes['galleryOptions']['iconBoxBgColorHover']};
}

#$block_id.source-template .cozy-layout-wrapper .cozy-portfolio-gallery__featured-image-wrapper {
    width: {$attributes['featuredImage']['width']}px;
    height: {$attributes['featuredImage']['height']}px;
}

#$block_id.source-template.layout-type-default.featured-image__position-before .cozy-layout-wrapper > .cozy-portfolio .cozy-portfolio-gallery__title {
    margin-top: {$attributes['featuredImage']['marginTop']}px;
}
#$block_id.source-template.layout-type-default.featured-image__position-after .cozy-layout-wrapper > .cozy-portfolio .cozy-portfolio-gallery__title {
    margin-bottom: {$attributes['featuredImage']['marginBottom']}px;
}

#$block_id.icon-view-stacked .cozy-portfolio-icon__wrapper {
    padding: {$attributes['iconBoxStyles']['padding']['top']}px {$attributes['iconBoxStyles']['padding']['right']}px {$attributes['iconBoxStyles']['padding']['bottom']}px {$attributes['iconBoxStyles']['padding']['left']}px;
    border-width: {$attributes['iconBoxStyles']['borderWidth']}px;
    border-style: {$attributes['iconBoxStyles']['borderType']};
    border-color: {$attributes['iconBoxStyles']['borderColor']};
    border-radius: {$attributes['iconBoxStyles']['borderRadius']}px;
    background-color: {$attributes['iconBoxStyles']['bgColor']};
}
#$block_id.layout-grid.has-isotope .cozy-search-bar__icon-wrapper {
    top: {$attributes['searchIcon']['top']}px;
    right: {$attributes['searchIcon']['right']}px;
}
#$block_id .cozy-portfolio-icon {
    width: {$attributes['portfolioIcon']['size']}px;
    height: {$attributes['portfolioIcon']['size']}px;
}

#$block_id.has-popup-view .cozy-portfolio-popup {
    padding: {$attributes['popup']['padding']['top']}px {$attributes['popup']['padding']['right']}px {$attributes['popup']['padding']['bottom']}px {$attributes['popup']['padding']['left']}px;
    background-color: {$attributes['popup']['bgColor']};
}
#$block_id.has-popup-view.popup-view-dimension__custom .cozy-portfolio-popup {
    width: {$attributes['popup']['width']}px;
    height: {$attributes['popup']['height']}px;
}
#$block_id.has-popup-view .cozy-popup-content__wrapper > .cozy-popup-content__sticky .cozy-portfolio-gallery__cpt {
    margin: {$attributes['portfolioCPT']['margin']['top']}px {$attributes['portfolioCPT']['margin']['right']}px {$attributes['portfolioCPT']['margin']['bottom']}px {$attributes['portfolioCPT']['margin']['left']}px;    
    padding: {$attributes['portfolioCPT']['padding']['top']}px {$attributes['portfolioCPT']['padding']['right']}px {$attributes['portfolioCPT']['padding']['bottom']}px {$attributes['portfolioCPT']['padding']['left']}px;    
    border-radius: {$attributes['portfolioCPT']['borderRadius']['top']}px {$attributes['portfolioCPT']['borderRadius']['right']}px {$attributes['portfolioCPT']['borderRadius']['bottom']}px {$attributes['portfolioCPT']['borderRadius']['left']}px;    
    border-width: {$attributes['portfolioCPT']['border']['top']}px {$attributes['portfolioCPT']['border']['right']}px {$attributes['portfolioCPT']['border']['bottom']}px {$attributes['portfolioCPT']['border']['left']}px;
    border-style: {$attributes['portfolioCPT']['border']['type']};
    border-color: {$attributes['portfolioCPT']['border']['color']};
    background-color: {$attributes['portfolioCPT']['bgColor']};
    color: {$attributes['portfolioCPT']['color']};
}
#$block_id.has-popup-view.portfolio-cpt__has-box-shadow .cozy-popup-content__wrapper > .cozy-popup-content__sticky .cozy-portfolio-gallery__cpt {
    box-shadow: {$attributes['portfolioCPT']['boxShadow']['horizontal']}px {$attributes['portfolioCPT']['boxShadow']['vertical']}px {$attributes['portfolioCPT']['boxShadow']['blur']}px {$attributes['portfolioCPT']['boxShadow']['spread']}px {$attributes['portfolioCPT']['boxShadow']['color']} {$attributes['portfolioCPT']['boxShadow']['position']};
}
#$block_id.has-popup-view .cozy-popup-content__wrapper > .cozy-popup-content__sticky .cozy-portfolio-gallery__cpt  .cozy-portfolio-gallery__subtitle {
    color: {$attributes['portfolioCPT']['subtitleColor']};
}
#$block_id.has-popup-view .cozy-portfolio-popup .cozy-popup-icon.popup-close-icon {
    top: {$attributes['popup']['top']}px;
    left: {$attributes['popup']['left']}%;
}
#$block_id.has-popup-view .cozy-popup-content__wrapper > .cozy-popup-content__default .cozy-portfolio-gallery__category-label, #$block_id:not(.layout-type-default) .cozy-layout-wrapper > .cozy-portfolio .cozy-portfolio-gallery__category-label {
    background-color: {$attributes['popup']['catBgColor']};
    color: {$attributes['popup']['catColor']};
}
@media screen and (max-width: {$attributes['popup']['responsiveWidth']}px) {
    #$block_id.has-popup-view.popup-view-dimension__custom .cozy-portfolio-popup {
        max-height: 100vh;
        height: 100%;
        width: 100%;
    }
}

#$block_id .cozy-dynamic-loader {
    margin-top: {$attributes['ajaxButton']['marginTop']}px;
    padding: {$attributes['ajaxButton']['padding']['top']}px {$attributes['ajaxButton']['padding']['right']}px {$attributes['ajaxButton']['padding']['bottom']}px {$attributes['ajaxButton']['padding']['left']}px;
    border-style: {$attributes['ajaxButton']['border']['type']};
    border-width: {$attributes['ajaxButton']['border']['width']}px;
    border-color: {$attributes['ajaxButton']['border']['color']};
    border-radius: {$attributes['ajaxButton']['borderRadius']}px;
    background-color: {$attributes['ajaxButton']['bgColor']};
    color: {$attributes['ajaxButton']['color']};
    font-size: {$attributes['ajaxButton']['fontSize']}px;
    font-weight: {$attributes['ajaxButton']['fontWeight']};
    font-family: {$attributes['ajaxButton']['fontFamily']};
}
#$block_id .cozy-dynamic-loader:hover {
    background-color: {$attributes['ajaxButton']['bgColorHover']};
    color: {$attributes['ajaxButton']['colorHover']};
    border-color: {$attributes['ajaxButton']['border']['colorHover']};
}

#$block_id .swiper-button-prev::after,
#$block_id .swiper-button-next::after {
    font-size: {$attributes['navigation']['iconSize']}px;
}
#$block_id .swiper-button-prev,
#$block_id .swiper-button-next {
    width: {$attributes['navigation']['iconBoxWidth']}px;
    height: {$attributes['navigation']['iconBoxHeight']}px;
    border-radius: {$attributes['navigation']['borderRadius']}px;
    color: {$attributes['navigation']['color']};
    background-color: {$attributes['navigation']['backgroundColor']};
}
#$block_id .swiper-button-prev:hover,
#$block_id .swiper-button-next:hover {
    color: {$attributes['navigation']['colorHover']};
    background-color: {$attributes['navigation']['backgroundColorHover']};
}
#$block_id .swiper-pagination {
    bottom: {$attributes['pagination']['verticalPosition']}px;
}
#$block_id .swiper-pagination .swiper-pagination-bullet {
    width: {$attributes['pagination']['width']}px;
    height: {$attributes['pagination']['height']}px;
    border-radius: {$attributes['pagination']['borderRadius']}px;
    background-color: {$attributes['pagination']['color']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active {
    width: {$attributes['pagination']['activeWidth']}px;
    border-radius: {$attributes['pagination']['activeBorderRadius']}px;
    background-color: {$attributes['pagination']['activeColor']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet:hover {
    background-color: {$attributes['pagination']['colorHover']};
}
#$block_id .swiper-pagination .swiper-pagination-bullet-active:hover {
    background-color: {$attributes['pagination']['activeColorHover']};
}
BLOCK_STYLES;

$output  = '<div class="cozy-block-wrapper">';
$output .= '<style>' . $block_styles . '</style>';
$output .= $content;
$output .= '</div>';

echo $output;
