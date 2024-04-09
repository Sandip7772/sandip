<?php

/**
 * Title: PRO: Product Showcase Categories Tabs
 * Slug: cozy-essential-addons/storemate-categort-tabs
 * Categories: storemate
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"className":"storemate-slide-up","layout":{"type":"constrained","contentSize":"1340px"}} -->
<div class="wp-block-group storemate-slide-up" style="padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cozy-block/product-tab {"blockClientId":"6ca05db1-8b13-47df-924b-fee6a9d237db","title":"Browse by Category","typography":{"fontFamily":"\u0022Montserrat\u0022","fontSize":24,"color":"#000","fontWeight":"600"}} -->
    <style>
        #cozyBlock_6ca05db1_8b13_47df_924b_fee6a9d237db .product-tab-title {
            font-weight: 600;
            font-size: 24px;
            font-family: "Montserrat";
            color: #000;
        }
    </style>
    <div class="cozy-block-product-tab" id="cozyBlock_6ca05db1_8b13_47df_924b_fee6a9d237db"><!-- wp:cozy-block/advanced-tab {"blockClientId":"2030ded6-f105-4817-904b-aea3f9355096","tabAlign":"right","columnGap":12,"innerBlocks":[{"clientId":"e62b3ce0-af60-432d-abd0-24bbc0ee0279","name":"cozy-block/advanced-tab-item","isValid":true,"originalContent":"\u003cdiv class=\u0022cozy-block-advanced-tab-item\u0022 id=\u0022cozyBlock_f2a3fbc1_14a8_4086_b4e2_aac6f2b5f575\u0022 data-client-id=\u0022f2a3fbc1-14a8-4086-b4e2-aac6f2b5f575\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"blockClientId":"e62b3ce0-af60-432d-abd0-24bbc0ee0279","tabTitle":"Accessories","enableIcon":false,"iconViewBox":{"vx":0,"vy":0,"vw":25,"vh":19},"iconPath":"M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"},"innerBlocks":[{"clientId":"a3b9d7a0-dd5c-4433-bffd-81d27033ee0b","name":"cozy-block/product-carousel","isValid":true,"originalContent":"\u003cstyle\u003e\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd.layout-grid .cozy-layout-grid {\n      row-gap: 30px;\n      column-gap: 30px;\n      grid-template-columns: repeat(4, auto);\n    }\n    @media screen and (max-width: 1024px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          3,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 767px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          2,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 400px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          1,\n          auto\n        ) !important;\n      }\n    }\n\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd.on-sale .cozy-sale-badge {\n      padding: 10px 6px 10px 6px;\n      border: 1px none #000;\n      border-radius: 50px;\n      background-color: #5566ca;\n      rotate: 0deg;\n      top: 10px;\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: #fff;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd.on-sale.sale-badge-display-block .cozy-sale-badge * {\n      margin-bottom: 0px;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd.on-sale.sale-badge-display-flex .cozy-sale-badge {\n      gap: 0px;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd.on-sale.sale-badge-position-left .cozy-sale-badge{\n      left: 0px;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd.on-sale.sale-badge-position-right .cozy-sale-badge{\n      right: 10px;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd.on-sale .cozy-sale-badge .label-before, #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd.on-sale .cozy-sale-badge .label-after {\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: ;\n    }\n\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .cozy-template-two .wp-block-read-more:hover, #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button, #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a{\n      background-color: #5566ca !important;\n      color: #fff !important;\n      opacity: 1 !important;\n    } \n\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .wc-block-components-product-rating__stars {\n      font-size: 14px;\n      color: ;\n    }\n\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-button-prev::after,\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-button-next::after {\n        font-size: 15px;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-button-prev,\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-button-next {\n        width: 35px;\n        height: 35px;\n        border-radius: 50px;\n        color: #007cba;\n        background-color: #fff;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-button-prev:hover,\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-button-next:hover {\n        color: #fff;\n        background-color: #007cba;\n    }\n\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-pagination {\n        bottom: 0px;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-pagination .swiper-pagination-bullet {\n        width: 10px;\n        height: 10px;\n        border-radius: 10px;\n        background-color: #252525;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-pagination .swiper-pagination-bullet-active {\n        width: 10px;\n        border-radius: 10px;\n        background-color: #007cba;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-pagination .swiper-pagination-bullet:hover {\n        background-color: #a5a5a5;\n    }\n    #cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd .swiper-pagination .swiper-pagination-bullet-active:hover {\n        background-color: #164861;\n    }\n  \u003c/style\u003e\u003cdiv class=\u0022cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  \u0022 id=\u0022cozyBlock_25735b09_0fb2_4c71_8adb_73fadb9a3bcd\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"cover":"","blockClientId":"a3b9d7a0-dd5c-4433-bffd-81d27033ee0b","namespace":"cozy-block/product-carousel","currencySymbol":"","currencyPosition":"","quickView":false,"layout":"grid","template":"default","buttonHoverColor":{"background":"#5566ca","text":"#fff"},"productGroup":"category","productCategory":["25"],"imageScale":true,"saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"hoverShow":true,"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":0},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700},"reviewStyles":{"fontSize":14,"color":""}},"innerBlocks":[{"clientId":"bccf4dbc-eef4-4849-818f-2b7714e2ae8d","name":"core/query","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-query cozy-query cozy-product-carousel__swiper-container\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"queryId":1,"query":{"perPage":"4","postType":"product"},"tagName":"div","namespace":"cozy-block/cozy-woo-query","enhancedPagination":false,"lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"},"innerBlocks":[{"clientId":"5f58276b-41d7-409c-909f-41648e02efd8","name":"core/post-template","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"},"innerBlocks":[{"clientId":"2ac94db6-c498-433a-a6d3-c7ea35094798","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-box\u0022\u003e\n\n\n\n\n\n\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"1d268f7c-094d-4fe1-8885-a89c45d77cf8","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-image\u0022 style=\u0022margin-bottom:14px\u0022\u003e\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"4d8e0909-fc44-4aca-a9ec-8d5a8800a995","name":"core/post-featured-image","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"isLink":true,"height":"380px","scale":"cover","rel":"","linkTarget":"_self","dimRatio":0,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]},{"clientId":"97a50345-574f-459f-868e-609c4a137788","name":"core/columns","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-columns storemate-product-buttons\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"},"innerBlocks":[{"clientId":"40f77b54-4edd-4f21-b170-268ad69de9c2","name":"core/column","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-column\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{},"innerBlocks":[{"clientId":"cc63ff67-9aa3-4b5f-8316-42f91257ca3a","name":"woocommerce/product-button","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"textAlign":"center","width":100,"isDescendentOfSingleProductBlock":false,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]}]}]}]},{"clientId":"5b429aed-e154-4ffe-a0b6-a562c0064cdd","name":"core/post-terms","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"term":"product_cat","textAlign":"center","separator":", ","prefix":"","suffix":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"},"innerBlocks":[]},{"clientId":"d347b077-b659-476d-8fbc-47f7b6197142","name":"core/post-title","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"textAlign":"center","level":3,"isLink":true,"rel":"","linkTarget":"_self","style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"},"innerBlocks":[]},{"clientId":"64518a0b-bf6e-45c0-9292-90d9816fb9bd","name":"woocommerce/product-rating","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductBlock":false,"isDescendentOfSingleProductTemplate":false,"style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}},"innerBlocks":[]},{"clientId":"14f203a7-a94b-4d1c-9c02-a37b1e30032d","name":"woocommerce/product-price","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductTemplate":false,"isDescendentOfSingleProductBlock":false,"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}},"innerBlocks":[]}]}]}]}]}]},{"clientId":"c391633e-c0f9-48d8-8593-d38ed75c68ec","name":"cozy-block/advanced-tab-item","isValid":true,"originalContent":"\u003cdiv class=\u0022cozy-block-advanced-tab-item\u0022 id=\u0022cozyBlock_d2332f72_aa73_4965_abf0_6329c41b848d\u0022 data-client-id=\u0022d2332f72-aa73-4965-abf0-6329c41b848d\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"blockClientId":"c391633e-c0f9-48d8-8593-d38ed75c68ec","tabTitle":"Clothing","enableIcon":false,"iconViewBox":{"vx":0,"vy":0,"vw":25,"vh":19},"iconPath":"M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"},"innerBlocks":[{"clientId":"5be891a8-8987-4015-88b2-9e73a10ce89b","name":"cozy-block/product-carousel","isValid":true,"originalContent":"\u003cstyle\u003e\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336.layout-grid .cozy-layout-grid {\n      row-gap: 30px;\n      column-gap: 30px;\n      grid-template-columns: repeat(4, auto);\n    }\n    @media screen and (max-width: 1024px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          3,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 767px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          2,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 400px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          1,\n          auto\n        ) !important;\n      }\n    }\n\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336.on-sale .cozy-sale-badge {\n      padding: 10px 6px 10px 6px;\n      border: 1px none #000;\n      border-radius: 50px;\n      background-color: #5566ca;\n      rotate: 0deg;\n      top: 10px;\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: #fff;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336.on-sale.sale-badge-display-block .cozy-sale-badge * {\n      margin-bottom: 0px;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336.on-sale.sale-badge-display-flex .cozy-sale-badge {\n      gap: 0px;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336.on-sale.sale-badge-position-left .cozy-sale-badge{\n      left: 0px;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336.on-sale.sale-badge-position-right .cozy-sale-badge{\n      right: 10px;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336.on-sale .cozy-sale-badge .label-before, #cozyBlock_315d0173_b288_4450_9cba_e09569250336.on-sale .cozy-sale-badge .label-after {\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: ;\n    }\n\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .cozy-template-two .wp-block-read-more:hover, #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button, #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a{\n      background-color: #5566ca !important;\n      color: #fff !important;\n      opacity: 1 !important;\n    } \n\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .wc-block-components-product-rating__stars {\n      font-size: 14px;\n      color: ;\n    }\n\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-button-prev::after,\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-button-next::after {\n        font-size: 15px;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-button-prev,\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-button-next {\n        width: 35px;\n        height: 35px;\n        border-radius: 50px;\n        color: #007cba;\n        background-color: #fff;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-button-prev:hover,\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-button-next:hover {\n        color: #fff;\n        background-color: #007cba;\n    }\n\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-pagination {\n        bottom: 0px;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-pagination .swiper-pagination-bullet {\n        width: 10px;\n        height: 10px;\n        border-radius: 10px;\n        background-color: #252525;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-pagination .swiper-pagination-bullet-active {\n        width: 10px;\n        border-radius: 10px;\n        background-color: #007cba;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-pagination .swiper-pagination-bullet:hover {\n        background-color: #a5a5a5;\n    }\n    #cozyBlock_315d0173_b288_4450_9cba_e09569250336 .swiper-pagination .swiper-pagination-bullet-active:hover {\n        background-color: #164861;\n    }\n  \u003c/style\u003e\u003cdiv class=\u0022cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  \u0022 id=\u0022cozyBlock_315d0173_b288_4450_9cba_e09569250336\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"cover":"","blockClientId":"5be891a8-8987-4015-88b2-9e73a10ce89b","namespace":"cozy-block/product-carousel","currencySymbol":"","currencyPosition":"","quickView":false,"layout":"grid","template":"default","buttonHoverColor":{"background":"#5566ca","text":"#fff"},"productGroup":"category","productCategory":["22"],"imageScale":true,"saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"hoverShow":true,"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":0},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700},"reviewStyles":{"fontSize":14,"color":""}},"innerBlocks":[{"clientId":"31a7fa88-a36a-41a9-a7e5-4261ec8b5a4a","name":"core/query","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-query cozy-query cozy-product-carousel__swiper-container\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"queryId":1,"query":{"perPage":"4","postType":"product"},"tagName":"div","namespace":"cozy-block/cozy-woo-query","enhancedPagination":false,"lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"},"innerBlocks":[{"clientId":"211118af-bc4f-493c-a779-6c890510fae4","name":"core/post-template","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"},"innerBlocks":[{"clientId":"e25a9a80-cdd2-49fb-b168-b5a0d18b2998","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-box\u0022\u003e\n\n\n\n\n\n\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"469dd46a-0f24-46eb-b0c2-5204d2e6daea","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-image\u0022 style=\u0022margin-bottom:14px\u0022\u003e\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"e328b0a0-272f-41d4-bd1e-e6bbd2c2db85","name":"core/post-featured-image","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"isLink":true,"height":"380px","scale":"cover","rel":"","linkTarget":"_self","dimRatio":0,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]},{"clientId":"d5523c17-2bf7-419e-aa6c-6372b82c0023","name":"core/columns","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-columns storemate-product-buttons\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"},"innerBlocks":[{"clientId":"c047b976-73af-4bc8-ae39-bc80c665bf10","name":"core/column","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-column\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{},"innerBlocks":[{"clientId":"d5f0cf5b-4a98-4fc9-84c1-2bd3e58edbc0","name":"woocommerce/product-button","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"textAlign":"center","width":100,"isDescendentOfSingleProductBlock":false,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]}]}]}]},{"clientId":"b0bdb1e9-d26c-427c-8e18-e3709dd0dbf0","name":"core/post-terms","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"term":"product_cat","textAlign":"center","separator":", ","prefix":"","suffix":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"},"innerBlocks":[]},{"clientId":"a4e2a428-aeee-4534-b940-e6d4b4451247","name":"core/post-title","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"textAlign":"center","level":3,"isLink":true,"rel":"","linkTarget":"_self","style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"},"innerBlocks":[]},{"clientId":"5b392754-3d66-497f-a3fa-c0870fa92d7b","name":"woocommerce/product-rating","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductBlock":false,"isDescendentOfSingleProductTemplate":false,"style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}},"innerBlocks":[]},{"clientId":"a6649de9-8b61-4278-95e4-6a746a3cfaa3","name":"woocommerce/product-price","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductTemplate":false,"isDescendentOfSingleProductBlock":false,"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}},"innerBlocks":[]}]}]}]}]}]},{"clientId":"002b33f6-4349-40b7-9666-4ffc8b4c69fd","name":"cozy-block/advanced-tab-item","isValid":true,"originalContent":"\u003cdiv class=\u0022cozy-block-advanced-tab-item\u0022 id=\u0022cozyBlock_a7a7361f_a9c3_4c93_8d08_39a955f8b844\u0022 data-client-id=\u0022a7a7361f-a9c3-4c93-8d08-39a955f8b844\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"blockClientId":"002b33f6-4349-40b7-9666-4ffc8b4c69fd","tabTitle":"Shoes","enableIcon":false,"iconViewBox":{"vx":0,"vy":0,"vw":25,"vh":19},"iconPath":"M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"},"innerBlocks":[{"clientId":"0c66b560-1cc4-4022-bcd0-ff61849b63f3","name":"cozy-block/product-carousel","isValid":true,"originalContent":"\u003cstyle\u003e\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5.layout-grid .cozy-layout-grid {\n      row-gap: 30px;\n      column-gap: 30px;\n      grid-template-columns: repeat(4, auto);\n    }\n    @media screen and (max-width: 1024px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          3,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 767px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          2,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 400px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          1,\n          auto\n        ) !important;\n      }\n    }\n\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5.on-sale .cozy-sale-badge {\n      padding: 10px 6px 10px 6px;\n      border: 1px none #000;\n      border-radius: 50px;\n      background-color: #5566ca;\n      rotate: 0deg;\n      top: 10px;\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: #fff;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5.on-sale.sale-badge-display-block .cozy-sale-badge * {\n      margin-bottom: 0px;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5.on-sale.sale-badge-display-flex .cozy-sale-badge {\n      gap: 0px;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5.on-sale.sale-badge-position-left .cozy-sale-badge{\n      left: 0px;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5.on-sale.sale-badge-position-right .cozy-sale-badge{\n      right: 10px;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5.on-sale .cozy-sale-badge .label-before, #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5.on-sale .cozy-sale-badge .label-after {\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: ;\n    }\n\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .cozy-template-two .wp-block-read-more:hover, #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button, #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a{\n      background-color: #5566ca !important;\n      color: #fff !important;\n      opacity: 1 !important;\n    } \n\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .wc-block-components-product-rating__stars {\n      font-size: 14px;\n      color: ;\n    }\n\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-button-prev::after,\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-button-next::after {\n        font-size: 15px;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-button-prev,\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-button-next {\n        width: 35px;\n        height: 35px;\n        border-radius: 50px;\n        color: #007cba;\n        background-color: #fff;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-button-prev:hover,\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-button-next:hover {\n        color: #fff;\n        background-color: #007cba;\n    }\n\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-pagination {\n        bottom: 0px;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-pagination .swiper-pagination-bullet {\n        width: 10px;\n        height: 10px;\n        border-radius: 10px;\n        background-color: #252525;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-pagination .swiper-pagination-bullet-active {\n        width: 10px;\n        border-radius: 10px;\n        background-color: #007cba;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-pagination .swiper-pagination-bullet:hover {\n        background-color: #a5a5a5;\n    }\n    #cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5 .swiper-pagination .swiper-pagination-bullet-active:hover {\n        background-color: #164861;\n    }\n  \u003c/style\u003e\u003cdiv class=\u0022cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  \u0022 id=\u0022cozyBlock_0e52e02f_f2fd_44bf_bec9_f6b924fb29f5\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"cover":"","blockClientId":"0c66b560-1cc4-4022-bcd0-ff61849b63f3","namespace":"cozy-block/product-carousel","currencySymbol":"","currencyPosition":"","quickView":false,"layout":"grid","template":"default","buttonHoverColor":{"background":"#5566ca","text":"#fff"},"productGroup":"category","productCategory":["50"],"imageScale":true,"saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"hoverShow":true,"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":0},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700},"reviewStyles":{"fontSize":14,"color":""}},"innerBlocks":[{"clientId":"81933a4a-ee06-4327-9225-ff73cc209880","name":"core/query","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-query cozy-query cozy-product-carousel__swiper-container\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"queryId":1,"query":{"perPage":"4","postType":"product"},"tagName":"div","namespace":"cozy-block/cozy-woo-query","enhancedPagination":false,"lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"},"innerBlocks":[{"clientId":"86fc3d84-8298-4374-91de-4e989c8ed001","name":"core/post-template","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"},"innerBlocks":[{"clientId":"8cc3c5cc-da5c-45b3-9b5e-aa092449ebda","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-box\u0022\u003e\n\n\n\n\n\n\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"16478e21-fd9f-441b-8ca9-97f3b5560174","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-image\u0022 style=\u0022margin-bottom:14px\u0022\u003e\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"9ab7205f-b224-405b-9348-b912f9924087","name":"core/post-featured-image","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"isLink":true,"height":"380px","scale":"cover","rel":"","linkTarget":"_self","dimRatio":0,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]},{"clientId":"5aa52719-3956-4da2-a77a-f0f14c5076f0","name":"core/columns","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-columns storemate-product-buttons\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"},"innerBlocks":[{"clientId":"a81f3f87-6127-4157-b5f6-97cc1b621b64","name":"core/column","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-column\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{},"innerBlocks":[{"clientId":"5c2c4b49-3dd5-470f-aef5-6efe1c8ccec4","name":"woocommerce/product-button","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"textAlign":"center","width":100,"isDescendentOfSingleProductBlock":false,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]}]}]}]},{"clientId":"12638b89-640d-460e-9898-e5353b05c2a4","name":"core/post-terms","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"term":"product_cat","textAlign":"center","separator":", ","prefix":"","suffix":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"},"innerBlocks":[]},{"clientId":"83e0fea0-219e-49c0-b24d-47178dbceeb9","name":"core/post-title","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"textAlign":"center","level":3,"isLink":true,"rel":"","linkTarget":"_self","style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"},"innerBlocks":[]},{"clientId":"e105406d-2cbc-489a-a37a-be3e559878ec","name":"woocommerce/product-rating","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductBlock":false,"isDescendentOfSingleProductTemplate":false,"style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}},"innerBlocks":[]},{"clientId":"c27e924c-9df1-4d53-9e7d-651699f46dc0","name":"woocommerce/product-price","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductTemplate":false,"isDescendentOfSingleProductBlock":false,"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}},"innerBlocks":[]}]}]}]}]}]},{"clientId":"e93a0940-b856-41a3-8719-1be19f715d3c","name":"cozy-block/advanced-tab-item","isValid":true,"originalContent":"\u003cdiv class=\u0022cozy-block-advanced-tab-item\u0022 id=\u0022cozyBlock_ce59af21_6dc5_4d44_b371_c4b39f7ea370\u0022 data-client-id=\u0022ce59af21-6dc5-4d44-b371-c4b39f7ea370\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"blockClientId":"e93a0940-b856-41a3-8719-1be19f715d3c","tabTitle":"Electronics","enableIcon":false,"iconViewBox":{"vx":0,"vy":0,"vw":25,"vh":19},"iconPath":"M8.4911 18.2766L0.366101 10.1516C-0.122034 9.66351 -0.122034 8.87206 0.366101 8.38387L2.13383 6.6161C2.62196 6.12792 3.41346 6.12792 3.9016 6.6161L9.37499 12.0894L21.0984 0.366101C21.5865 -0.122034 22.378 -0.122034 22.8662 0.366101L24.6339 2.13387C25.122 2.62201 25.122 3.41346 24.6339 3.90165L10.2589 18.2767C9.77069 18.7648 8.97924 18.7648 8.4911 18.2766Z"},"innerBlocks":[{"clientId":"f8575e1f-214d-46f1-9bdd-9819cb1365bf","name":"cozy-block/product-carousel","isValid":true,"originalContent":"\u003cstyle\u003e\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3.layout-grid .cozy-layout-grid {\n      row-gap: 30px;\n      column-gap: 30px;\n      grid-template-columns: repeat(4, auto);\n    }\n    @media screen and (max-width: 1024px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          3,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 767px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          2,\n          auto\n        ) !important;\n      }\n    }\n    @media screen and (max-width: 400px) {\n      .cozy-block-product-carousel.layout-grid .cozy-layout-grid {\n        grid-template-columns: repeat(\n          1,\n          auto\n        ) !important;\n      }\n    }\n\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3.on-sale .cozy-sale-badge {\n      padding: 10px 6px 10px 6px;\n      border: 1px none #000;\n      border-radius: 50px;\n      background-color: #5566ca;\n      rotate: 0deg;\n      top: 10px;\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: #fff;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3.on-sale.sale-badge-display-block .cozy-sale-badge * {\n      margin-bottom: 0px;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3.on-sale.sale-badge-display-flex .cozy-sale-badge {\n      gap: 0px;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3.on-sale.sale-badge-position-left .cozy-sale-badge{\n      left: 0px;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3.on-sale.sale-badge-position-right .cozy-sale-badge{\n      right: 10px;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3.on-sale .cozy-sale-badge .label-before, #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3.on-sale .cozy-sale-badge .label-after {\n      font-size: 10px;\n      font-weight: 400;\n      font-family: sans-serif;\n      color: ;\n    }\n\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .cozy-template-two .wp-block-read-more:hover, #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button, #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a{\n      background-color: #5566ca !important;\n      color: #fff !important;\n      opacity: 1 !important;\n    } \n\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .wc-block-components-product-rating__stars {\n      font-size: 14px;\n      color: ;\n    }\n\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-button-prev::after,\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-button-next::after {\n        font-size: 15px;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-button-prev,\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-button-next {\n        width: 35px;\n        height: 35px;\n        border-radius: 50px;\n        color: #007cba;\n        background-color: #fff;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-button-prev:hover,\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-button-next:hover {\n        color: #fff;\n        background-color: #007cba;\n    }\n\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-pagination {\n        bottom: 0px;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-pagination .swiper-pagination-bullet {\n        width: 10px;\n        height: 10px;\n        border-radius: 10px;\n        background-color: #252525;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-pagination .swiper-pagination-bullet-active {\n        width: 10px;\n        border-radius: 10px;\n        background-color: #007cba;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-pagination .swiper-pagination-bullet:hover {\n        background-color: #a5a5a5;\n    }\n    #cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3 .swiper-pagination .swiper-pagination-bullet-active:hover {\n        background-color: #164861;\n    }\n  \u003c/style\u003e\u003cdiv class=\u0022cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  \u0022 id=\u0022cozyBlock_404c35a8_63ab_4765_81fd_fd546e2ea4a3\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"cover":"","blockClientId":"f8575e1f-214d-46f1-9bdd-9819cb1365bf","namespace":"cozy-block/product-carousel","currencySymbol":"","currencyPosition":"","quickView":false,"layout":"grid","template":"default","buttonHoverColor":{"background":"#5566ca","text":"#fff"},"productGroup":"category","productCategory":["51"],"imageScale":true,"saleBadge":{"enabled":true,"display":"flex","position":"right","top":10,"right":10,"left":0,"marginBottom":0,"gap":0,"labelBefore":"","contentType":"default","labelAfter":"","padding":{"top":10,"right":6,"bottom":10,"left":6},"borderType":"none","borderWidth":1,"borderColor":"#000","borderRadius":50,"rotate":0,"bgColor":"#5566ca","typography":{"fontFamily":"sans-serif","fontSize":10,"color":"#fff","fontWeight":400},"labelTypography":{"fontFamily":"sans-serif","fontSize":10,"color":"","fontWeight":400}},"hoverShow":true,"gridOptions":{"displayColumn":4,"columnGap":30},"pagination":{"enabled":true,"width":10,"height":10,"borderRadius":10,"activeWidth":10,"activeBorderRadius":10,"activeColor":"#007cba","color":"#252525","activeColorHover":"#164861","colorHover":"#a5a5a5","verticalPosition":0},"navigation":{"enabled":true,"iconSize":15,"iconBoxWidth":35,"iconBoxHeight":35,"borderRadius":50,"backgroundColor":"#fff","color":"#007cba","backgroundColorHover":"#007cba","colorHover":"#fff"},"sliderOptions":{"loop":false,"autoplay":{"status":true,"pauseOnMouseEnter":true,"delay":2500},"centeredSlides":false,"slidesPerView":3,"spaceBetween":30,"speed":700},"reviewStyles":{"fontSize":14,"color":""}},"innerBlocks":[{"clientId":"b33bb17b-5dea-4d45-848f-b7c46ca2af0d","name":"core/query","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-query cozy-query cozy-product-carousel__swiper-container\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"queryId":1,"query":{"perPage":"4","postType":"product"},"tagName":"div","namespace":"cozy-block/cozy-woo-query","enhancedPagination":false,"lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"},"innerBlocks":[{"clientId":"c944845a-594b-45c8-90dd-17e560c25aec","name":"core/post-template","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"},"innerBlocks":[{"clientId":"f0796b5c-c968-4f45-84e6-86ee49a9dd2a","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-box\u0022\u003e\n\n\n\n\n\n\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"blockGap":"0"}},"className":"storemate-product-box","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"0136e0b0-1881-4a05-ba1a-545e4fa4c94d","name":"core/group","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-group storemate-product-image\u0022 style=\u0022margin-bottom:14px\u0022\u003e\n\n\u003c/div\u003e","validationIssues":[],"attributes":{"tagName":"div","style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"storemate-product-image","layout":{"type":"constrained"}},"innerBlocks":[{"clientId":"830a89e5-d13a-4c89-a74c-97a169436878","name":"core/post-featured-image","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"isLink":true,"height":"380px","scale":"cover","rel":"","linkTarget":"_self","dimRatio":0,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]},{"clientId":"8d69a3da-46b8-4cc7-9465-f0aecd776f5a","name":"core/columns","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-columns storemate-product-buttons\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{"isStackedOnMobile":true,"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"storemate-product-buttons"},"innerBlocks":[{"clientId":"3aa5b2e5-46bc-46d5-9a73-8b368bb32d7c","name":"core/column","isValid":true,"originalContent":"\u003cdiv class=\u0022wp-block-column\u0022\u003e\u003c/div\u003e","validationIssues":[],"attributes":{},"innerBlocks":[{"clientId":"0ee4915e-5a55-4df6-92c4-e7f8f001ca5d","name":"woocommerce/product-button","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"textAlign":"center","width":100,"isDescendentOfSingleProductBlock":false,"isDescendentOfQueryLoop":true,"className":"storemate-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}},"innerBlocks":[]}]}]}]},{"clientId":"7f4a0922-ac83-4c55-9e4f-db9c9602aa20","name":"core/post-terms","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"term":"product_cat","textAlign":"center","separator":", ","prefix":"","suffix":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"},"innerBlocks":[]},{"clientId":"92b5ff8a-7ba3-467d-a9d4-edf7f89fa18f","name":"core/post-title","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"textAlign":"center","level":3,"isLink":true,"rel":"","linkTarget":"_self","style":{"spacing":{"margin":{"left":"0","right":"0","bottom":"0px","top":"4px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"},"innerBlocks":[]},{"clientId":"ab9fc710-e149-48e9-9f1c-b0dce22ef483","name":"woocommerce/product-rating","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductBlock":false,"isDescendentOfSingleProductTemplate":false,"style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}},"innerBlocks":[]},{"clientId":"fb0bb339-1f09-4513-a121-297124750478","name":"woocommerce/product-price","isValid":true,"originalContent":"","validationIssues":[],"attributes":{"productId":0,"isDescendentOfQueryLoop":true,"textAlign":"center","isDescendentOfSingleProductTemplate":false,"isDescendentOfSingleProductBlock":false,"style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}},"innerBlocks":[]}]}]}]}]}]}],"parentAttributes":{"cover":"","blockClientId":"6ca05db1-8b13-47df-924b-fee6a9d237db","namespace":"cozy-block/product-tab","enableTitle":true,"title":"Browse by Category","typography":{"fontFamily":"\u0022Montserrat\u0022","fontSize":24,"color":"#000","fontWeight":"600"}},"separatorStyles":{"padding":{"top":0,"right":0,"bottom":0,"left":0},"border":{"width":{"top":0,"right":0,"bottom":1,"left":0},"type":"none","color":"#e2e2e2"}},"tabStyles":{"padding":{"top":5,"right":10,"bottom":5,"left":10},"border":{"width":{"top":1,"right":1,"bottom":1,"left":1},"type":"none","color":"","colorActive":"#E6E8F4"},"borderRadius":{"top":0,"right":0,"bottom":0,"left":0},"bgColor":"","bgColorActive":""},"contentStyles":{"padding":{"top":20,"right":10,"bottom":10,"left":10},"border":{"width":{"top":1,"right":1,"bottom":1,"left":1},"type":"none","color":"#000"},"borderRadius":{"top":0,"right":0,"bottom":0,"left":0},"bgColor":""},"typography":{"fontFamily":"sans-serif","fontSize":16,"color":"#a5a5a5","colorActive":"#5566ca","fontWeight":400}} -->
        <style>
            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 {
                padding: 0px 0px 0px 0px;
                border-style: none;
                border-width: 1px 1px 1px 1px;
                border-color: #000;
                border-radius: 0px 0px 0px 0px;
                background-color: ;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 .advanced-tab-title {
                font-weight: 400;
                font-size: 16px;
                font-family: sans-serif;
                color: #000;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 .cozy-tab-title {
                padding: 0px 0px 0px 0px;
                border-style: none;
                border-width: 0px 0px 1px 0px;
                border-color: #e2e2e2;
                font-weight: 400;
                font-size: 16px;
                font-family: sans-serif;
                color: #a5a5a5;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096.layout-horizontal .cozy-tab-title {
                gap: 12px;
                justify-content: right;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 .cozy-tab-title .cozy-tab-button {
                padding: 5px 10px 5px 10px;
                border-style: none;
                border-width: 1px 1px 1px 1px;
                border-color: ;
                border-radius: 0px 0px 0px 0px;
                background-color: ;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096.layout-vertical .cozy-tab-title .cozy-tab-button {
                width: undefinedpx;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 .cozy-tab-title .cozy-tab-button .display-flex {
                gap: 10px;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 .cozy-tab-title .cozy-tab-button.active {
                border-color: #E6E8F4;
                background-color: ;
                color: #5566ca;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 .cozy-tab-title .cozy-tab-button.active:after {
                height: 1px;
                bottom: -1px;
                background-color: ;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
                width: 16px;
                height: 16px;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096.icon-layout-fill .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
                fill: #a5a5a5;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096.icon-layout-outline .cozy-tab-title .cozy-tab-button .cozy-tab-icon {
                stroke: #a5a5a5;
                fill: none;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096.icon-layout-fill .cozy-tab-title .cozy-tab-button.active .cozy-tab-icon {
                fill: #5566ca;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096.icon-layout-outline .cozy-tab-title .cozy-tab-button.active .cozy-tab-icon {
                stroke: #5566ca;
                fill: none;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096.layout-vertical {
                gap: 12px;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096.layout-vertical .cozy-tab-title {
                gap: 10px;
            }

            #cozyBlock_2030ded6_f105_4817_904b_aea3f9355096 .cozy-advanced-tab-wrapper {
                padding: 20px 10px 10px 10px;
                border-style: none;
                border-width: 1px 1px 1px 1px;
                border-color: #000;
                border-radius: 0px 0px 0px 0px;
                background-color: ;
            }
        </style>
        <div class="cozy-block-advanced-tab layout-horizontal icon-layout-fill" id="cozyBlock_2030ded6_f105_4817_904b_aea3f9355096">
            <div style="display:flex;align-items:center">
                <div class="product-tab-title">Browse by Category</div>
                <div class="cozy-tab-title">
                    <div class="cozy-tab-button active" id="e62b3ce0-af60-432d-abd0-24bbc0ee0279" data-index="0">
                        <div class="display-flex justify-center align-items-center"><span>Accessories</span></div>
                    </div>
                    <div class="cozy-tab-button " id="c391633e-c0f9-48d8-8593-d38ed75c68ec" data-index="1">
                        <div class="display-flex justify-center align-items-center"><span>Clothing</span></div>
                    </div>
                    <div class="cozy-tab-button " id="002b33f6-4349-40b7-9666-4ffc8b4c69fd" data-index="2">
                        <div class="display-flex justify-center align-items-center"><span>Shoes</span></div>
                    </div>
                    <div class="cozy-tab-button " id="e93a0940-b856-41a3-8719-1be19f715d3c" data-index="3">
                        <div class="display-flex justify-center align-items-center"><span>Electronics</span></div>
                    </div>
                </div>
            </div>
            <div class="cozy-advanced-tab-wrapper"><!-- wp:cozy-block/advanced-tab-item {"blockClientId":"e62b3ce0-af60-432d-abd0-24bbc0ee0279","tabTitle":"Accessories","enableIcon":false} -->
                <div class="cozy-block-advanced-tab-item" id="cozyBlock_e62b3ce0_af60_432d_abd0_24bbc0ee0279" data-client-id="e62b3ce0-af60-432d-abd0-24bbc0ee0279"><!-- wp:cozy-block/product-carousel {"blockClientId":"a3b9d7a0-dd5c-4433-bffd-81d27033ee0b","namespace":"cozy-block/product-carousel","productGroup":"category","productCategory":["25"],"gridOptions":{"displayColumn":4,"columnGap":30}} -->
                    <style>
                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b.layout-grid .cozy-layout-grid {
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

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b.on-sale .cozy-sale-badge {
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

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b.on-sale.sale-badge-display-block .cozy-sale-badge * {
                            margin-bottom: 0px;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b.on-sale.sale-badge-display-flex .cozy-sale-badge {
                            gap: 0px;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b.on-sale.sale-badge-position-left .cozy-sale-badge {
                            left: 0px;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b.on-sale.sale-badge-position-right .cozy-sale-badge {
                            right: 10px;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b.on-sale .cozy-sale-badge .label-before,
                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b.on-sale .cozy-sale-badge .label-after {
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: ;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .cozy-template-two .wp-block-read-more:hover,
                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
                            background-color: #5566ca !important;
                            color: #fff !important;
                            opacity: 1 !important;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .wc-block-components-product-rating__stars {
                            font-size: 14px;
                            color: ;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-button-prev::after,
                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-button-next::after {
                            font-size: 15px;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-button-prev,
                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-button-next {
                            width: 35px;
                            height: 35px;
                            border-radius: 50px;
                            color: #007cba;
                            background-color: #fff;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-button-prev:hover,
                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-button-next:hover {
                            color: #fff;
                            background-color: #007cba;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-pagination {
                            bottom: 0px;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-pagination .swiper-pagination-bullet {
                            width: 10px;
                            height: 10px;
                            border-radius: 10px;
                            background-color: #252525;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-pagination .swiper-pagination-bullet-active {
                            width: 10px;
                            border-radius: 10px;
                            background-color: #007cba;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-pagination .swiper-pagination-bullet:hover {
                            background-color: #a5a5a5;
                        }

                        #cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b .swiper-pagination .swiper-pagination-bullet-active:hover {
                            background-color: #164861;
                        }
                    </style>
                    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_a3b9d7a0_dd5c_4433_bffd_81d27033ee0b"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
                        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
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
                <!-- /wp:cozy-block/advanced-tab-item -->

                <!-- wp:cozy-block/advanced-tab-item {"blockClientId":"c391633e-c0f9-48d8-8593-d38ed75c68ec","tabTitle":"Clothing","enableIcon":false} -->
                <div class="cozy-block-advanced-tab-item" id="cozyBlock_c391633e_c0f9_48d8_8593_d38ed75c68ec" data-client-id="c391633e-c0f9-48d8-8593-d38ed75c68ec"><!-- wp:cozy-block/product-carousel {"blockClientId":"5be891a8-8987-4015-88b2-9e73a10ce89b","namespace":"cozy-block/product-carousel","productGroup":"category","productCategory":["22"],"gridOptions":{"displayColumn":4,"columnGap":30}} -->
                    <style>
                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b.layout-grid .cozy-layout-grid {
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

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b.on-sale .cozy-sale-badge {
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

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b.on-sale.sale-badge-display-block .cozy-sale-badge * {
                            margin-bottom: 0px;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b.on-sale.sale-badge-display-flex .cozy-sale-badge {
                            gap: 0px;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b.on-sale.sale-badge-position-left .cozy-sale-badge {
                            left: 0px;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b.on-sale.sale-badge-position-right .cozy-sale-badge {
                            right: 10px;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b.on-sale .cozy-sale-badge .label-before,
                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b.on-sale .cozy-sale-badge .label-after {
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: ;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .cozy-template-two .wp-block-read-more:hover,
                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
                            background-color: #5566ca !important;
                            color: #fff !important;
                            opacity: 1 !important;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .wc-block-components-product-rating__stars {
                            font-size: 14px;
                            color: ;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-button-prev::after,
                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-button-next::after {
                            font-size: 15px;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-button-prev,
                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-button-next {
                            width: 35px;
                            height: 35px;
                            border-radius: 50px;
                            color: #007cba;
                            background-color: #fff;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-button-prev:hover,
                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-button-next:hover {
                            color: #fff;
                            background-color: #007cba;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-pagination {
                            bottom: 0px;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-pagination .swiper-pagination-bullet {
                            width: 10px;
                            height: 10px;
                            border-radius: 10px;
                            background-color: #252525;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-pagination .swiper-pagination-bullet-active {
                            width: 10px;
                            border-radius: 10px;
                            background-color: #007cba;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-pagination .swiper-pagination-bullet:hover {
                            background-color: #a5a5a5;
                        }

                        #cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b .swiper-pagination .swiper-pagination-bullet-active:hover {
                            background-color: #164861;
                        }
                    </style>
                    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_5be891a8_8987_4015_88b2_9e73a10ce89b"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
                        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
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
                <!-- /wp:cozy-block/advanced-tab-item -->

                <!-- wp:cozy-block/advanced-tab-item {"blockClientId":"002b33f6-4349-40b7-9666-4ffc8b4c69fd","tabTitle":"Shoes","enableIcon":false} -->
                <div class="cozy-block-advanced-tab-item" id="cozyBlock_002b33f6_4349_40b7_9666_4ffc8b4c69fd" data-client-id="002b33f6-4349-40b7-9666-4ffc8b4c69fd"><!-- wp:cozy-block/product-carousel {"blockClientId":"0c66b560-1cc4-4022-bcd0-ff61849b63f3","namespace":"cozy-block/product-carousel","productGroup":"category","productCategory":["50"],"gridOptions":{"displayColumn":4,"columnGap":30}} -->
                    <style>
                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3.layout-grid .cozy-layout-grid {
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

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3.on-sale .cozy-sale-badge {
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

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3.on-sale.sale-badge-display-block .cozy-sale-badge * {
                            margin-bottom: 0px;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3.on-sale.sale-badge-display-flex .cozy-sale-badge {
                            gap: 0px;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3.on-sale.sale-badge-position-left .cozy-sale-badge {
                            left: 0px;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3.on-sale.sale-badge-position-right .cozy-sale-badge {
                            right: 10px;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3.on-sale .cozy-sale-badge .label-before,
                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3.on-sale .cozy-sale-badge .label-after {
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: ;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .cozy-template-two .wp-block-read-more:hover,
                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
                            background-color: #5566ca !important;
                            color: #fff !important;
                            opacity: 1 !important;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .wc-block-components-product-rating__stars {
                            font-size: 14px;
                            color: ;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-button-prev::after,
                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-button-next::after {
                            font-size: 15px;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-button-prev,
                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-button-next {
                            width: 35px;
                            height: 35px;
                            border-radius: 50px;
                            color: #007cba;
                            background-color: #fff;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-button-prev:hover,
                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-button-next:hover {
                            color: #fff;
                            background-color: #007cba;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-pagination {
                            bottom: 0px;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-pagination .swiper-pagination-bullet {
                            width: 10px;
                            height: 10px;
                            border-radius: 10px;
                            background-color: #252525;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-pagination .swiper-pagination-bullet-active {
                            width: 10px;
                            border-radius: 10px;
                            background-color: #007cba;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-pagination .swiper-pagination-bullet:hover {
                            background-color: #a5a5a5;
                        }

                        #cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3 .swiper-pagination .swiper-pagination-bullet-active:hover {
                            background-color: #164861;
                        }
                    </style>
                    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_0c66b560_1cc4_4022_bcd0_ff61849b63f3"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
                        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
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
                <!-- /wp:cozy-block/advanced-tab-item -->

                <!-- wp:cozy-block/advanced-tab-item {"blockClientId":"e93a0940-b856-41a3-8719-1be19f715d3c","tabTitle":"Electronics","enableIcon":false} -->
                <div class="cozy-block-advanced-tab-item" id="cozyBlock_e93a0940_b856_41a3_8719_1be19f715d3c" data-client-id="e93a0940-b856-41a3-8719-1be19f715d3c"><!-- wp:cozy-block/product-carousel {"blockClientId":"f8575e1f-214d-46f1-9bdd-9819cb1365bf","namespace":"cozy-block/product-carousel","productGroup":"category","productCategory":["51"],"gridOptions":{"displayColumn":4,"columnGap":30}} -->
                    <style>
                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf.layout-grid .cozy-layout-grid {
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

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf.on-sale .cozy-sale-badge {
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

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf.on-sale.sale-badge-display-block .cozy-sale-badge * {
                            margin-bottom: 0px;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf.on-sale.sale-badge-display-flex .cozy-sale-badge {
                            gap: 0px;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf.on-sale.sale-badge-position-left .cozy-sale-badge {
                            left: 0px;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf.on-sale.sale-badge-position-right .cozy-sale-badge {
                            right: 10px;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf.on-sale .cozy-sale-badge .label-before,
                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf.on-sale .cozy-sale-badge .label-after {
                            font-size: 10px;
                            font-weight: 400;
                            font-family: sans-serif;
                            color: ;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .cozy-template-two .wp-block-read-more:hover,
                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .cozy-template-two .wp-block-button.wc-block-components-product-button:hover button,
                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .cozy-template-two .wp-block-button.wc-block-components-product-button:hover a {
                            background-color: #5566ca !important;
                            color: #fff !important;
                            opacity: 1 !important;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .wc-block-components-product-rating__stars {
                            font-size: 14px;
                            color: ;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-button-prev::after,
                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-button-next::after {
                            font-size: 15px;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-button-prev,
                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-button-next {
                            width: 35px;
                            height: 35px;
                            border-radius: 50px;
                            color: #007cba;
                            background-color: #fff;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-button-prev:hover,
                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-button-next:hover {
                            color: #fff;
                            background-color: #007cba;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-pagination {
                            bottom: 0px;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-pagination .swiper-pagination-bullet {
                            width: 10px;
                            height: 10px;
                            border-radius: 10px;
                            background-color: #252525;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-pagination .swiper-pagination-bullet-active {
                            width: 10px;
                            border-radius: 10px;
                            background-color: #007cba;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-pagination .swiper-pagination-bullet:hover {
                            background-color: #a5a5a5;
                        }

                        #cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf .swiper-pagination .swiper-pagination-bullet-active:hover {
                            background-color: #164861;
                        }
                    </style>
                    <div class="cozy-block-product-carousel layout-grid hover-show  on-sale sale-badge-position-right sale-badge-display-flex  " id="cozyBlock_f8575e1f_214d_46f1_9bdd_9819cb1365bf"><!-- wp:query {"queryId":1,"query":{"perPage":"4","postType":"product"},"namespace":"cozy-block/cozy-woo-query","lock":{"move":false,"remove":true},"className":"cozy-query cozy-product-carousel__swiper-container"} -->
                        <div class="wp-block-query cozy-query cozy-product-carousel__swiper-container"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"cozy-layout-grid swiper-wrapper cozy-product-carousel-template"} -->
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
                <!-- /wp:cozy-block/advanced-tab-item -->
            </div>
        </div>
        <!-- /wp:cozy-block/advanced-tab -->
    </div>
    <!-- /wp:cozy-block/product-tab -->
</div>
<!-- /wp:group -->