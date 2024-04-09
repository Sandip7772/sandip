<?php

/**
 * Title: Homepage Template: Web Agency(PRO)
 * Slug: cozy-essential-addons/homepage-template-webagency
 * Categories: ct-patterns,fotawp-homepage
 */
$ct_patterns_images = array(
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/patterns-media/pattern_web_1.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/patterns-media/pattern_web_2.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/patterns-media/pattern_web_3.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/patterns-media/pattern_web_4.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/patterns-media/pattern_store_2.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/patterns-media/team_3.jpg',
    COZY_ESSENTIAL_ADDONS_URL . 'admin/images/patterns-media/review_star.svg',

);
?>
<!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[0]) ?>","id":1883,"dimRatio":50,"overlayColor":"black","minHeight":750,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1883" alt="" src="<?php echo esc_url($ct_patterns_images[0]) ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":30,"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foregound-alt"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"text-alter-color","fontSize":"large"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                <div class="wp-block-group"><!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
                    <!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"Style Guide","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

                    <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"150px"} -->
        <div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"980px"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.5","fontSize":"64px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"foregound-alt"} -->
            <h2 class="wp-block-heading alignwide has-text-align-center has-foregound-alt-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:64px;font-style:normal;font-weight:700;line-height:1.5"><?php echo esc_html('Most Powerful Block based WordPress Theme', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"background-alt","textColor":"heading-color","style":{"spacing":{"padding":{"left":"3rem","right":"3rem","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"radius":"12px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-heading-color-color has-background-alt-background-color has-text-color has-background wp-element-button" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:3rem;padding-bottom:var(--wp--preset--spacing--50);padding-left:3rem"><?php echo esc_html('Request Demo', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"150px"} -->
        <div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","bottom":"160px","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:120px;padding-right:var(--wp--preset--spacing--50);padding-bottom:160px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"660px"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"48px"}},"textColor":"heading-color"} -->
            <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color" style="font-size:48px;font-style:normal;font-weight:600"><?php echo esc_html('Our Services', 'fotawp') ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.9}},"textColor":"sub-heading-color","fontSize":"small"} -->
            <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.9"><?php echo esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"42px"},"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns" style="padding-top:42px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-transparent-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":1861,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[1]) ?>" alt="" class="wp-image-1861" style="border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('Web Application', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:20px"><!-- wp:button {"textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#107d79"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-text-color has-background wp-element-button" style="background-color:#107d79;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-transparent-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":1895,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[2]) ?>" alt="" class="wp-image-1895" style="border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('Mobile Application', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:20px"><!-- wp:button {"textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#107d79"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-text-color has-background wp-element-button" style="background-color:#107d79;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"dimensions":{"minHeight":"0px"},"border":{"radius":"10px"}},"backgroundColor":"transparent","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-transparent-background-color has-background" style="border-radius:10px;min-height:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"align":"center","id":1861,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($ct_patterns_images[3]) ?>" alt="" class="wp-image-1861" style="border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="padding-top:0"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"heading-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600"><?php echo esc_html('SaaS Development', 'fotawp') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"sub-heading-color","fontSize":"small"} -->
                    <p class="has-text-align-center has-sub-heading-color-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html('Check out our new&nbsp;font generatorand level up your social bios. Need more? Head over to Glyphy for all the&nbsp;fancy fonts&nbsp;and&nbsp;cool symbols&nbsp;you could ever.', 'fotawp') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"20px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:20px"><!-- wp:button {"textColor":"foregound-alt","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"color":{"background":"#107d79"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-text-color has-background wp-element-button" style="background-color:#107d79;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php echo esc_html('Read More', 'fotawp') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"color":{"background":"#107d790f"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-background" style="background-color:#107d790f;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($ct_patterns_images[4]) ?>","id":1871,"dimRatio":0,"minHeight":460,"className":"is-style-default"} -->
            <div class="wp-block-cover is-style-default" style="min-height:460px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1871" alt="" src="<?php echo esc_url($ct_patterns_images[4]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"> </p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":6,"style":{"color":{"text":"#107d79"}}} -->
            <h6 class="wp-block-heading has-text-color" style="color:#107d79"><?php echo esc_html('About Us', 'fotawp') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"48px"}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-heading-color-color has-text-color" style="font-size:48px;font-style:normal;font-weight:600"><?php echo esc_html('Explore Our Story', 'fotawp') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":1.6}},"textColor":"sub-heading-color","fontSize":"small"} -->
            <p class="has-sub-heading-color-color has-text-color has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.6"><?php echo esc_html('The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without&nbsp;controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"5px"} -->
            <div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60"}},"typography":{"textDecoration":"none"},"color":{"background":"#107d79"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-decoration:none"><a class="wp-block-button__link has-background-color has-text-color has-background wp-element-button" style="background-color:#107d79;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php echo esc_html('Read More', 'fotawp') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","right":"0","bottom":"var:preset|spacing|80","left":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:cover {"dimRatio":0,"overlayColor":"background","isDark":false} -->
    <div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"border":{"radius":"10px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"background","className":"is-style-default","layout":{"type":"constrained","contentSize":"660px"}} -->
            <div class="wp-block-group is-style-default has-background-background-color has-background" style="border-style:none;border-width:0px;border-radius:10px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":726,"width":115,"height":20,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($ct_patterns_images[6]) ?>" alt="" class="wp-image-726" style="width:115px;height:20px" width="115" height="20" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7","fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}},"color":{"text":"#292929"}},"fontSize":"medium","fontFamily":"playfair-display"} -->
                <p class="has-text-align-center has-text-color has-playfair-display-font-family has-medium-font-size" style="color:#292929;margin-bottom:var(--wp--preset--spacing--60);font-style:italic;font-weight:400;line-height:1.7"><?php echo esc_html('Not only theme, it\'s powerful tools for site building, native Full Site Editing block builder make it too easy for use and dozens of patterns, <em>Lorem ipsum</em>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'fotawp') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:image {"align":"center","id":1822,"width":70,"height":70,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url($ct_patterns_images[5]) ?>" alt="" class="wp-image-1822" style="width:70px;height:70px" width="70" height="70" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"10px"}}},"textColor":"heading-color","fontSize":"medium"} -->
                <h5 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-medium-font-size" style="padding-top:10px;font-style:normal;font-weight:600"><?php echo esc_html('Alex T', 'fotawp') ?></h5>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","right":"0","left":"0","bottom":"0"}}},"textColor":"foreground","fontSize":"x-small"} -->
                <p class="has-text-align-center has-foreground-color has-text-color has-x-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php echo esc_html('Digital Marketing, CozyThemes', 'fotawp') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"120px","right":"var:preset|spacing|40","bottom":"120px","left":"var:preset|spacing|40"}},"color":{"background":"#107d790f"}},"layout":{"type":"constrained","contentSize":"1180px","justifyContent":"center"}} -->
<div class="wp-block-group has-background" style="background-color:#107d790f;padding-top:120px;padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"bottom":"0","top":"0","right":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":1},"color":{"text":"#107d79"}}} -->
    <h6 class="wp-block-heading has-text-align-center has-text-color" style="color:#107d79;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1"><?php echo esc_html('Blog', 'fotawp') ?></h6>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}},"typography":{"lineHeight":"1","fontSize":"48px"}}} -->
    <h1 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60);font-size:48px;line-height:1"><?php echo esc_html('Latest Articles', 'fotawp') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":29,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"},"blockGap":"var:preset|spacing|20"}},"layout":{"inherit":false}} -->
        <div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-featured-image {"isLink":true,"height":"280px","style":{"border":{"radius":"0px"}}} /-->

            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|40","top":"30px"}},"typography":{"fontSize":"24px","lineHeight":"1.3"}},"textColor":"foreground","className":"is-style-title-hover-secondary-color"} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
            <div class="wp-block-group has-x-small-font-size" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-date /-->

                <!-- wp:paragraph -->
                <p>.</p>
                <!-- /wp:paragraph -->

                <!-- wp:post-author-name /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-excerpt {"moreText":"","style":{"typography":{"fontSize":"18px"}}} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"},"color":{"background":"#107d79"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
    <div class="wp-block-group has-background" style="background-color:#107d79;padding-top:8rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:8rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"64px"}},"textColor":"foregound-alt"} -->
        <h2 class="wp-block-heading has-text-align-center has-foregound-alt-color has-text-color" style="font-size:64px;font-style:normal;font-weight:700"><?php echo esc_html('Let\'s Connect Today', 'fotawp') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.7}},"textColor":"foregound-alt","fontSize":"small"} -->
        <p class="has-text-align-center has-foregound-alt-color has-text-color has-small-font-size" style="line-height:1.7"><?php echo esc_html('The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.', 'fotawp') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:button {"backgroundColor":"background","textColor":"heading-color","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"1.2rem","bottom":"1.2rem"}}},"className":"is-style-button-hover-secondary-bgcolor"} -->
            <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-background-background-color has-text-color has-background wp-element-button" style="padding-top:1.2rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:1.2rem;padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html('Schedule an Appointment', 'fotawp') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"color":{"background":"#107d79"},"border":{"top":{"color":"#1e9692","width":"1px"},"right":{},"bottom":{},"left":{}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background" style="border-top-color:#1e9692;border-top-width:1px;background-color:#107d79;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"textColor":"background"} -->
            <p class="has-background-color has-text-color"><?php echo esc_html('Proudly powered by WordPress&nbsp;|&nbsp;Theme: FotaWP by&nbsp;CozyThemes.', 'fotawp') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"foregound-alt","iconColorValue":"#FEFEFE","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"spotify"} /-->

                <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                <!-- wp:social-link {"url":"#","service":"behance"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->