<?php

/**
 * Title: PRO: Slider
 * Slug: cozy-essential-addons/storemate-slider
 * Categories: storemate
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/storemate-assets/slider_image_1.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/storemate-assets/slider_image_2.jpg',

);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"storemate-zoom-in-up","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group storemate-zoom-in-up" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cozy-block/slider {"blockClientId":"9017677b-1222-433f-8c0f-9eed60ac55e9","pagination":{"width":12,"height":12,"borderRadius":12,"activeWidth":12,"activeBorderRadius":10,"bottom":0,"activeColor":"#007766","color":"#F4FAFA","activeColorHover":"#e56404","colorHover":"#e56404","dynamicBullets":false},"navigation":{"iconSize":16,"iconBoxWidth":50,"iconBoxHeight":50,"borderRadius":50,"backgroundColor":"#fff","color":"#007766","backgroundColorHover":"#007766","colorHover":"#fff","padding":{"top":5,"right":5,"bottom":5,"left":5,"responsive":"desktop"},"arrowIconNext":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='0' class='svg-inline\u002d\u002dfa fa-0 ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e","arrowIconPrev":"\u003csvg aria-hidden='true' focusable='false' data-prefix='fas' data-icon='angle-left' class='svg-inline\u002d\u002dfa fa-angle-left ' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'\u003e\u003cpath fill='currentColor' d='M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'\u003e\u003c/path\u003e\u003c/svg\u003e"}} -->
    <style>
        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-button-prev::after,
        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-button-next::after {
            font-size: 16px;
        }

        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-button-prev,
        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-button-next {
            width: 50px;
            height: 50px;
            border-radius: 50px;
            color: #007766;
            background-color: #fff;
        }

        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-button-prev:hover,
        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-button-next:hover {
            color: #fff;
            background-color: #007766;
        }

        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-pagination {
            bottom: var(--swiper-pagination-bottom, 0px);
        }

        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            border-radius: 12px;
            background-color: #F4FAFA;
        }

        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-pagination .swiper-pagination-bullet-active {
            width: 12px;
            border-radius: 10px;
            background-color: #007766;
        }

        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-pagination .swiper-pagination-bullet:hover {
            background-color: #e56404;
        }

        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .swiper-pagination .swiper-pagination-bullet-active:hover {
            background-color: #e56404;
        }

        #cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9 .cozy-shape-divider-wrapper svg {
            margin: 0px 0px 0px 0px;
            height: 200px;
            fill: #fff;
        }
    </style>
    <div class="wp-block-cozy-block-slider">
        <div class="cozy-block-slider swiper-container hover-show " id="cozyBlock_9017677b_1222_433f_8c0f_9eed60ac55e9">
            <div class="swiper-wrapper"><!-- wp:cozy-block/slide {"blockClientId":"92065091-45f6-4e88-9a5b-6be7fd1afd18"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":4279,"dimRatio":80,"focalPoint":{"x":0.48,"y":0.04},"minHeight":640,"customGradient":"linear-gradient(90deg,rgb(0,0,0) 0%,rgba(17,17,18,0.26) 100%)","layout":{"type":"constrained","contentSize":"1340px"}} -->
                    <div class="wp-block-cover" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgb(0,0,0) 0%,rgba(17,17,18,0.26) 100%)"></span><img class="wp-block-cover__image-background wp-image-4279" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" style="object-position:48% 4%" data-object-fit="cover" data-object-position="48% 4%" />
                        <div class="wp-block-cover__inner-container"><!-- wp:columns -->
                            <div class="wp-block-columns"><!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1,"placeholder":"Slide Title","style":{"typography":{"lineHeight":"1.4"}},"fontSize":"xxx-large"} -->
                                    <h1 class="wp-block-heading has-text-align-left has-xxx-large-font-size" style="line-height:1.4"><?php esc_html_e('Discover Your Style: Shop the Latest Trends at Storemate', 'cozy-essential-addons') ?></h1>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                                    <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                                    <div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"16px","bottom":"16px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"medium"} -->
                                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px"><?php esc_html_e('Visit Store', 'cozy-essential-addons') ?></a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column"></div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/slide -->

                <!-- wp:cozy-block/slide {"blockClientId":"f450ac8a-654d-42a2-b50f-78d322ee3624"} -->
                <div class="swiper-slide"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[1]) ?>","id":4212,"dimRatio":80,"focalPoint":{"x":0.5,"y":0},"minHeight":640,"customGradient":"linear-gradient(90deg,rgb(0,0,0) 0%,rgba(17,17,18,0.26) 100%)","layout":{"type":"constrained","contentSize":"1340px"}} -->
                    <div class="wp-block-cover" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgb(0,0,0) 0%,rgba(17,17,18,0.26) 100%)"></span><img class="wp-block-cover__image-background wp-image-4212" alt="" src="<?php echo esc_url($ct_patterns_images[1]) ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%" />
                        <div class="wp-block-cover__inner-container"><!-- wp:columns -->
                            <div class="wp-block-columns"><!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1,"placeholder":"Slide Title","style":{"typography":{"lineHeight":"1.4"}},"fontSize":"xxx-large"} -->
                                    <h1 class="wp-block-heading has-text-align-left has-xxx-large-font-size" style="line-height:1.4"><?php esc_html_e('Discover Your Style: Shop the Latest Trends at Storemate', 'cozy-essential-addons') ?></h1>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"align":"left","placeholder":"Lorem Ipsum is simply dummy text of the printing and typesetting industry."} -->
                                    <p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cozy-essential-addons') ?></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"32px"}}}} -->
                                    <div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"16px","bottom":"16px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"medium"} -->
                                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link wp-element-button" style="padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px"><?php esc_html_e('Visit Store', 'cozy-essential-addons') ?></a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column"></div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                </div>
                <!-- /wp:cozy-block/slide -->
            </div>
            <div class="swiper-button-prev cozy-block-button-prev"></div>
            <div class="swiper-button-next cozy-block-button-next"></div>
            <div class="swiper-pagination cozy-pagination"></div>
        </div>
    </div>
    <!-- /wp:cozy-block/slider -->
</div>
<!-- /wp:group -->