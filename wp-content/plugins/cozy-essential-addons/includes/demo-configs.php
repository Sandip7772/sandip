<?php
function cozythemes_demo_importer_get_templates_lists($theme_slug)
{
    switch ($theme_slug):
        case "fotawp":
            $demo_templates_lists = array(
                'fotawp' => array(
                    'title' => esc_html__('FotaWP', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/default/',
                    'plugins' => ''
                ),
                'fotawp-pro-22' => array(
                    'title' => esc_html__('FotaWP Pro FSE', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/22/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/22/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/22/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/22/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fotawp-pro/',
                    'plugins' => ''
                ),
                'fotawp-free-2' => array(
                    'title' => esc_html__('Grid News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/2/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/grid-news/',
                    'plugins' => ''
                ),
                'fotawp-free-3' => array(
                    'title' => esc_html__('Headline News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/3/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/headline-news/',
                    'plugins' => ''
                ),
                'fotawp-free-4' => array(
                    'title' => esc_html__('Blogger Life', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/4/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/blogger-life',
                    'plugins' => ''
                ),
                'fotawp-free-5' => array(
                    'title' => esc_html__('Fota Tech', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/5/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-tech/',
                    'plugins' => ''
                ),
                'fotawp-free-6' => array(
                    'title' => esc_html__('Fota Newspaper', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/6/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/6/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/6/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/free/6/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-newspaper/',
                    'plugins' => ''
                ),
                'fotawp-pro-1' => array(
                    'title' => esc_html__('Heading News Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/headline-news-pro/',
                    'plugins' => ''
                ),

                'fotawp-pro-2' => array(
                    'title' => esc_html__('HVAC Services', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/2/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/hvac-services/',
                    'plugins' => ''
                ),
                'fotawp-pro-3' => array(
                    'title' => esc_html__('Digital Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/3/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/digital-agency/',
                    'plugins' => ''
                ),
                'fotawp-pro-4' => array(
                    'title' => esc_html__('Fota Insurance', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/4/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-insurance/',
                    'plugins' => ''
                ),
                'fotawp-pro-5' => array(
                    'title' => esc_html__('Fota Health', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/5/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/5/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/5/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/5/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-health/',
                    'plugins' => ''
                ),
                'fotawp-pro-6' => array(
                    'title' => esc_html__('Fota Homes', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/6/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/6/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/6/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/6/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-homes/',
                    'plugins' => ''
                ),
                'fotawp-pro-7' => array(
                    'title' => esc_html__('Sport News', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/7/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/7/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/7/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/7/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/magazine-demo-2/',
                    'plugins' => ''
                ),
                'fotawp-pro-8' => array(
                    'title' => esc_html__('Fota Store', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/8/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/8/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/8/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/8/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-store/',
                    'plugins' => ''
                ),
                'fotawp-pro-9' => array(
                    'title' => esc_html__('Pet Care', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/9/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/9/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/9/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/9/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/pet-care/',
                    'plugins' => ''
                ),
                'fotawp-pro-10' => array(
                    'title' => esc_html__('Fota Learning', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/10/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/10/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/10/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/10/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-learning/',
                    'plugins' => ''
                ),
                'fotawp-pro-11' => array(
                    'title' => esc_html__('Tech Blogger', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/11/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/11/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/11/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/11/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/tech-bloggers/',
                    'plugins' => ''
                ),
                'fotawp-pro-12' => array(
                    'title' => esc_html__('Buisness Coach', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/12/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/12/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/12/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/12/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/business-coach/',
                    'plugins' => ''
                ),
                'fotawp-pro-13' => array(
                    'title' => esc_html__('Fota Fitness', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/13/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/13/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/13/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/13/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-fitness/',
                    'plugins' => ''
                ),
                'fotawp-pro-14' => array(
                    'title' => esc_html__('Photography Service', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/14/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/14/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/14/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/14/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/photography-services/',
                    'plugins' => ''
                ),
                'fotawp-pro-15' => array(
                    'title' => esc_html__('Travel Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/15/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/15/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/15/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/15/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/travel-agency/',
                    'plugins' => ''
                ),
                'fotawp-pro-16' => array(
                    'title' => esc_html__('App Landing Page', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/16/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/16/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/16/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/16/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/app-landing-page/',
                    'plugins' => ''
                ),
                'fotawp-pro-17' => array(
                    'title' => esc_html__('Fota Magazine', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/17/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/17/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/17/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/17/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-magazine/',
                    'plugins' => ''
                ),
                'fotawp-pro-18' => array(
                    'title' => esc_html__('Fota Tech Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/18/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/18/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/18/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/18/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-tech-pro/',
                    'plugins' => ''
                ),
                'fotawp-pro-19' => array(
                    'title' => esc_html__('Fota Newspaper Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fotawp', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/19/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/19/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/19/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/19/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/newspaper-pro/',
                    'plugins' => ''
                ),
                'fotawp-pro-20' => array(
                    'title' => esc_html__('StartUp Agency', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('startup agency', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/20/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/20/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/20/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/20/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/startup-agency/',
                    'plugins' => ''
                ),
                'fotawp-pro-21' => array(
                    'title' => esc_html__('Fota Furniture', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fota furniture', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/21/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/21/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/21/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotawp/pro/21/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-furniture/',
                    'plugins' => ''
                )
            );
            break;
        case "fotablog":
            $demo_templates_lists = array(
                'fotablog' => array(
                    'title' => esc_html__('Fotablog', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Fotablog', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotablog/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotablog/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotablog/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fotablog/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fotablog/',
                    'plugins' => ''
                ),
            );
            break;
        case "weblogger":
            $demo_templates_lists = array(
                'weblogger' => array(
                    'title' => esc_html__('WeBlogger', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('WeBlogger', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/weblogger/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/weblogger/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/weblogger/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/weblogger/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/weblogger/',
                    'plugins' => ''
                ),
            );
            break;
        case "fota-agency":
            $demo_templates_lists = array(
                'fotablog' => array(
                    'title' => esc_html__('Fota Agency', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Fota Agency', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-agency/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-agency/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-agency/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-agency/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fota-agency/',
                    'plugins' => ''
                ),
            );
            break;
        case "fota-home-solutions":
            $demo_templates_lists = array(
                'fota-home-solutions' => array(
                    'title' => esc_html__('Fota Home Solutions', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Fota home solutions', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fota-home-solutions/',
                    'plugins' => ''
                ),
                'home-solutions-pro' => array(
                    'title' => esc_html__('Home Solution Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('home servcies pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/home-solutions/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/home-solutions-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "fota-speakers":
            $demo_templates_lists = array(
                'fota-speakers' => array(
                    'title' => esc_html__('Fota Speakers', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Fota Speakers', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fota-speakers/',
                    'plugins' => ''
                ),
                'fota-speakers-pro' => array(
                    'title' => esc_html__('Speakers Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fota speakers pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-speakers/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/speakers-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "atozshop":
            $demo_templates_lists = array(
                'atozshop' => array(
                    'title' => esc_html__('AtozShop', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('atozshop', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/atozshop/',
                    'plugins' => ''
                ),
                'atozshop-pro' => array(
                    'title' => esc_html__('AtozShop Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('atozshop pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/atozshop/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/atozshop-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "reshape-block":
            $demo_templates_lists = array(
                'reshape-block' => array(
                    'title' => esc_html__('Reshape Block', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('reshape-block', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/reshape-block/',
                    'plugins' => ''
                ),
                'reshape-pro' => array(
                    'title' => esc_html__('Reshape Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('reshape pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/reshape-block/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/reshape-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "fota-magazine":
            $demo_templates_lists = array(
                'fota-magazine' => array(
                    'title' => esc_html__('Fota Magazine', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('fota-magazine', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/fota-magazine/',
                    'plugins' => ''
                ),
                'fota-magazine-pro' => array(
                    'title' => esc_html__('Fota Magazine Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('fota magazine pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/fota-magazine/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/fota-magazine-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "musicmantra":
            $demo_templates_lists = array(
                'musicmantra' => array(
                    'title' => esc_html__('MusicMantra', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('musicmantra', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/free/1/screenshot.png',
                    'demo_url' => 'http://fotademo.cozythemes.com/musicmantra/',
                    'plugins' => ''
                ),
                'musicmantra-pro' => array(
                    'title' => esc_html__('MusicMantra Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('music mantra pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/musicmantra/pro/1/screenshot.png',
                    'demo_url' => 'https://fotademo.cozythemes.com/musicmantra-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "hello-agency":
            $demo_templates_lists = array(
                'hello-agency' => array(
                    'title' => esc_html__('Hello Agency', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Hello Agency', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/hello-agency/',
                    'plugins' => ''
                ),
                'hello-blogger' => array(
                    'title' => esc_html__('Hello Blogger', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('Hello Blogger', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/free/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/hello-blogger/',
                    'plugins' => ''
                ),
                'hello-agency-pro' => array(
                    'title' => esc_html__('Agency Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('hello agency pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/hello-agency-pro/',
                    'plugins' => ''
                ),
                'hello-agency-pro-2' => array(
                    'title' => esc_html__('Light Agency Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('hello agency light version', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/hello-agency/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/hello-agency-pro-2/',
                    'plugins' => ''
                ),

            );
            break;
        case "smartversity":
            $demo_templates_lists = array(
                'smartversity' => array(
                    'title' => esc_html__('Smartversity', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('smartversity', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/smartversity/',
                    'plugins' => ''
                ),
                'smartversity-pro' => array(
                    'title' => esc_html__('Smartversity Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('smartversity pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/smartversity/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/smartversity-pro/',
                    'plugins' => ''
                ),
            );
            break;
        case "revivenews":
            $demo_templates_lists = array(
                'revivenews' => array(
                    'title' => esc_html__('Revivenews', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('revivenews', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/revivenews/',
                    'plugins' => ''
                ),
                'revivenews-pro' => array(
                    'title' => esc_html__('Revivenews Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('revivenews pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/revivenews-pro/',
                    'plugins' => ''
                ),
                'revivenews-pro-2' => array(
                    'title' => esc_html__('Revivenews Pro 2', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('revivenews pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/revivenews-pro-2/',
                    'plugins' => ''
                ),
                'revivenews-pro-3' => array(
                    'title' => esc_html__('Revivenews Pro 3', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('revivenews pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/revivenews/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/revivenews-pro-3/',
                    'plugins' => ''
                )
            );
            break;
        case "storemate":
            $demo_templates_lists = array(
                'storemate' => array(
                    'title' => esc_html__('Storemate', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('storemate', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/free/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate/',
                    'plugins' => ''
                ),
                'storemate-pro' => array(
                    'title' => esc_html__('Storemate Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('storemate pro', 'online store'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/1/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate-pro/',
                    'plugins' => ''
                ),
                'storemate-decor' => array(
                    'title' => esc_html__('Arts & Decor PRO', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('arts decor pro', 'online store'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/2/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/2/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/2/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/2/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate-decor/',
                    'plugins' => ''
                ),
                'storemate-electronics' => array(
                    'title' => esc_html__('Electronics & Gadgets PRO', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Electronics & Gadgets pro', 'online store'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/3/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/3/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/3/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/3/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate-electronics/',
                    'plugins' => ''
                ),
                'storemate-beauty' => array(
                    'title' => esc_html__('Cosmetics and Beauty PRO', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('Beauty and Cosmetics pro', 'online store'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/4/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/4/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/4/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/storemate/pro/4/screenshot.png',
                    'demo_url' => 'https://themedemos.cozythemes.com/storemate-beauty/',
                    'plugins' => ''
                ),
            );
            break;
        case "blockbooster":
            $demo_templates_lists = array(
                'blockbooster' => array(
                    'title' => esc_html__('Blockbooster', 'cozy-essential-addons'),/*Title*/
                    'is_pro' => false,  /*Premium*/
                    'type' => 'free',
                    'author' => esc_html__('CozyThemes', 'cozy-essential-addons'),    /*Author Name*/
                    'keywords' => array('blockbooster', 'cozy-essential-addons'),  /*Search keyword*/
                    'categories' => array('free'), /*Categories*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/free/1/screenshot.jpg',
                    'demo_url' => 'https://themedemos.cozythemes.com/blockbooster/',
                    'plugins' => ''
                ),
                'blockbooster-pro' => array(
                    'title' => esc_html__('Blockbooster Pro', 'cozythemes-demo-importer'),/*Title*/
                    'is_pro' => true,  /*Premium*/
                    'type' => 'premium',
                    'author' => esc_html__('CozyThemes', 'cozythemes-demo-importer'),    /*Author Name*/
                    'keywords' => array('blockbooster pro', 'multipurpose'),  /*Search keyword*/
                    'template_url' => array(
                        'content' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/pro/1/content.json',
                        'options' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/pro/1/options.json',
                        'widgets' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/pro/1/widgets.json'
                    ),
                    'screenshot_url' => COZYTHEMES_DEMO_IMPORTER_SETUP_TEMPLATE_URL . '/blockbooster/pro/1/screenshot.jpg',
                    'demo_url' => 'https://themedemos.cozythemes.com/blockbooster-pro/',
                    'plugins' => ''
                ),
            );
            break;
        default:
            $demo_templates_lists = array();
    endswitch;

    return $demo_templates_lists;
}
