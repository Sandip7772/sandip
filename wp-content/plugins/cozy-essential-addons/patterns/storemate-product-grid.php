<?php

/**
 * Title: PRO: Product Grid
 * Slug: cozy-essential-addons/storemate-product-grid
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

    <!-- wp:cozy-block/product-carousel {"blockClientId":"9e535ea0-4d1d-4ead-aae0-053d844ff98e","namespace":"cozy-block/product-carousel","saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"amount","labelAfter":"","padding":{"top":10,"right":10,"bottom":10,"left":10},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"color":"#FFFFFF"},"labelTypography":{"color":"#FFFFFF"}},"gridOptions":{"displayColumn":4,"columnGap":30},"reviewStyles":{"fontSize":14,"color":"#F4B104"}} -->
    <style>
        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e.layout-grid .cozy-layout-grid {
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

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e.on-sale .cozy-sale-badge {
            padding: 10px 10px 10px 10px;
            border: 1px none #000;
            border-radius: 50px;
            background-color: #5566ca;
            rotate: 0deg;
            top: 10px;
            font-size: undefinedpx;
            font-weight: undefined;
            font-family: undefined;
            color: #FFFFFF;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e.on-sale.sale-badge-display-block .cozy-sale-badge * {
            margin-bottom: 0px;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e.on-sale.sale-badge-display-flex .cozy-sale-badge {
            gap: 0px;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e.on-sale.sale-badge-position-left .cozy-sale-badge {
            left: 0px;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e.on-sale.sale-badge-position-right .cozy-sale-badge {
            right: 10px;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e.on-sale .cozy-sale-badge .label-before,
        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e.on-sale .cozy-sale-badge .label-after {
            font-size: undefinedpx;
            font-weight: undefined;
            font-family: undefined;
            color: #FFFFFF;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .cozy-template-two .wp-block-read-more:hover,
        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
            background-color: #5566ca !important;
            color: #fff !important;
            opacity: 1 !important;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .wc-block-components-product-rating__stars {
            font-size: 14px;
            color: #F4B104;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-button-prev::after,
        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-button-next::after {
            font-size: 15px;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-button-prev,
        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-button-next {
            width: 35px;
            height: 35px;
            border-radius: 50px;
            color: #007cba;
            background-color: #fff;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-button-prev:hover,
        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-button-next:hover {
            color: #fff;
            background-color: #007cba;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-pagination {
            bottom: 0px;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-pagination .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            border-radius: 10px;
            background-color: #252525;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-pagination .swiper-pagination-bullet-active {
            width: 10px;
            border-radius: 10px;
            background-color: #007cba;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-pagination .swiper-pagination-bullet:hover {
            background-color: #a5a5a5;
        }

        #cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e .swiper-pagination .swiper-pagination-bullet-active:hover {
            background-color: #164861;
        }
    </style>
    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_9e535ea0_4d1d_4ead_aae0_053d844ff98e"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
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
    </div>
    <!-- /wp:cozy-block/product-carousel -->
</div>
<!-- /wp:group -->