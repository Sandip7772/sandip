<?php

/**
 * Title: PRO: Product Carousel
 * Slug: cozy-essential-addons/storemate-product-carousel
 * Categories: storemate
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"className":"storemate-slide-up","layout":{"type":"constrained","contentSize":"1340px"}} -->
<div class="wp-block-group storemate-slide-up" style="padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:heading {"level":4} -->
        <h4 class="wp-block-heading">Featured Products</h4>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"0","bottom":"0"}},"border":{"radius":"0px","bottom":{"color":"var:preset|color|heading-color","width":"2px"},"top":[],"right":[],"left":[]}},"className":"storemate-more-products is-style-button-hover-secondary-color"} -->
            <div class="wp-block-button storemate-more-products is-style-button-hover-secondary-color"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">View All</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cozy-block/product-carousel {"blockClientId":"1b9a19ef-d3b9-4eea-8dc2-81dd26e25e5b","namespace":"cozy-block/product-carousel","layout":"carousel","saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"percent","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":-40},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":"4","spaceBetween":30,"speed":700}} -->
    <style>
        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b.layout-grid .cozy-layout-grid {
            row-gap: 30px;
            column-gap: 30px;
            grid-template-columns: repeat(4, auto);
        }

        @media screen and (max-width: 1024px) {
            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                grid-template-columns: repeat(3,
                        auto) !important;
            }
        }

        @media screen and (max-width: 767px) {
            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                grid-template-columns: repeat(2,
                        auto) !important;
            }
        }

        @media screen and (max-width: 400px) {
            .cozy-block-product-carousel.layout-grid .cozy-layout-grid {
                grid-template-columns: repeat(1,
                        auto) !important;
            }
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b.on-sale .cozy-sale-badge {
            padding: 10px 6px 10px 6px;
            border: 1px none #000;
            border-radius: 50px;
            background-color: #5566ca;
            rotate: 0deg;
            top: 10px;
            font-size: 10px;
            font-weight: 400;
            font-family: sans-serif;
            color: #fff;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b.on-sale.sale-badge-display-block .cozy-sale-badge * {
            margin-bottom: 0px;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b.on-sale.sale-badge-display-flex .cozy-sale-badge {
            gap: 0px;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b.on-sale.sale-badge-position-left .cozy-sale-badge {
            left: 0px;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b.on-sale.sale-badge-position-right .cozy-sale-badge {
            right: 10px;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b.on-sale .cozy-sale-badge .label-before,
        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b.on-sale .cozy-sale-badge .label-after {
            font-size: 10px;
            font-weight: 400;
            font-family: sans-serif;
            color: ;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .cozy-template-two .wp-block-read-more:hover,
        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
            background-color: #5566ca !important;
            color: #fff !important;
            opacity: 1 !important;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .wc-block-components-product-rating__stars {
            font-size: 14px;
            color: ;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-button-prev::after,
        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-button-next::after {
            font-size: 15px;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-button-prev,
        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-button-next {
            width: 35px;
            height: 35px;
            border-radius: 50px;
            color: #007cba;
            background-color: #fff;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-button-prev:hover,
        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-button-next:hover {
            color: #fff;
            background-color: #007cba;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-pagination {
            bottom: -40px;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-pagination .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            border-radius: 10px;
            background-color: #252525;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-pagination .swiper-pagination-bullet-active {
            width: 10px;
            border-radius: 10px;
            background-color: #007cba;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-pagination .swiper-pagination-bullet:hover {
            background-color: #a5a5a5;
        }

        #cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b .swiper-pagination .swiper-pagination-bullet-active:hover {
            background-color: #164861;
        }
    </style>
    <div class="cozy-block-product-carousel layout-carousel hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_1b9a19ef_d3b9_4eea_8dc2_81dd26e25e5b"><!-- wp:query {"queryId":1,"query":{"perPage":"6","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template","layout":{"type":"default"}} -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group storemate-product-box"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}} -->
                <div class="wp-block-group storemate-product-image" style="margin-bottom:14px"><!-- wp:post-featured-image {"isLink":true,"height":"380px","style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"} -->
                    <div class="wp-block-columns storemate-product-buttons"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

                <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}} /-->

                <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
        <div class="swiper-button-prev cozy-block-button-prev"></div>
        <div class="swiper-button-next cozy-block-button-next"></div>
        <div class="swiper-pagination cozy-pagination"></div>
    </div>
    <!-- /wp:cozy-block/product-carousel -->
</div>
<!-- /wp:group -->