<?php

namespace Cozy_Addons\ToggleContentWidgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Border;
use Elementor\Core\Schemes\Typography;
use Elementor\Core\Schemes\Color;
use Elementor\Group_Control_Image_Size;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class Cozy_Addons_ToggleContent_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'cozy-addons-toggle-content';
    }

    public function get_title()
    {
        return __('Toggle Content', 'cozy-addons');
    }

    public function get_icon()
    {
        return 'eicon-toggle cozy-toggle-icon cozy-widget-icons';
    }
    public function get_keywords()
    {
        return ['toggle content', 'cozy addons products'];
    }
    public function get_categories()
    {
        return ['cozy-addons-items'];
    }

    protected function register_controls()
    {

        $this->cozy_addons_toggle_content_options();

        $this->cozy_addons_toggle_button_wrapper_styles();
        $this->cozy_addons_toggle_button_styles();
    }

    /**
     * front content
     */
    private function cozy_addons_toggle_content_options()
    {
        $ct_property_action_access = false;
        if (cozy_addons_premium_access()) {
            $ct_property_action_access = true;
        }

        $this->start_controls_section(
            'cozy_addons_toggle_content_options',
            [
                'label' => __('General', 'cozy-addons'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'content_title',
            [
                'label' => __('Content Title', 'cozy-addons'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Content Title', 'cozy-addons'),
            ]
        );

        $repeater->add_control(
            'select_content_type',
            [
                'label' => __('Select Content Type', 'cozy-addons'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    'content-editor' => __('Text Editor', 'cozy-addons'),
                    'content-template' => __('Custom Template', 'cozy-addons'),
                ],
                'default' => 'content-editor',
            ]
        );

        $repeater->add_control(
            'editor_font_size',
            [
                'label' => __('Font Size', 'cozy-addons'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 50,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 25,
                ],
                'condition' => [
                    'select_content_type' => 'content-editor',
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .text-editor-content' => 'font-size: {{SIZE}}{{UNIT}} !important',
                ],
            ]
        );

        $repeater->add_control(
            'editor_text_alignment',
            [
                'label' => __('Text Align', 'cozy-addons'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'cozy-addons'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'cozy-addons'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'cozy-addons'),
                        'icon' => 'eicon-text-align-right',
                    ],
                    'justify' => [
                        'title' => __('Justify', 'cozy-addons'),
                        'icon' => 'eicon-text-align-justify',
                    ],
                ],
                'default' => 'center',
                'condition' => [
                    'select_content_type' => 'content-editor',
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .text-editor-content' => 'text-align: {{VALUE}}',
                ],

            ]
        );

        $repeater->add_control(
            'image_horizontal_alignment',
            [
                'label' => __('Image Horizontal Alignment', 'cozy-addons'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    '0' => [
                        'title' => __('Left', 'cozy-addons'),
                        'icon' => 'eicon-h-align-left',
                    ],
                    '0 auto' => [
                        'title' => __('Center', 'cozy-addons'),
                        'icon' => 'eicon-h-align-center',
                    ],
                    '0 0 0 auto' => [
                        'title' => __('Right', 'cozy-addons'),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'condition' => [
                    'select_content_type' => 'content-editor',
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .text-editor-content img' => 'margin: {{VALUE}}',
                ],
            ]
        );

        $repeater->add_control(
            'content_type_editor',
            [
                'label' => __('Text Editor', 'cozy-addons'),
                'type' => Controls_Manager::WYSIWYG,
                'condition' => [
                    'select_content_type' => 'content-editor',
                ],
                'default' => __('Place your content here!', 'cozy-addons'),
                'placeholder' => __('Your Text Content', 'cozy-addons'),
            ]
        );

        $args = array(
            'post_type'      => 'elementor_library',
            'tabs_group' => 'library',
        );

        $elementor_templates = get_posts($args);
        $options = [];
        foreach ($elementor_templates as $elementor_template) {
            $options[$elementor_template->ID] = $elementor_template->post_title;
        }

        $repeater->add_control(
            'content_type_template',
            [
                'label' => __('Select Template', 'cozy-addons'),
                'type' => Controls_Manager::SELECT,
                'options' => $options,
                'condition' => [
                    'select_content_type' => 'content-template',
                ],
            ]
        );

        $repeater->add_control(
            'display_template_title',
            [
                'label' => __('Display Title', 'cozy-addons'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'condition' => [
                    'select_content_type' => 'content-template',
                ],
            ]
        );

        $repeater->add_control(
            'template_title_vertical_spacing',
            [
                'label' => __('Vertical Spacing', 'cozy-addons'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 50,
                    ],
                ],
                'default' => [
                    'size' => 10,
                    'unit' => 'px',
                ],
                'condition' => [
                    'select_content_type' => 'content-template',
                    'display_template_title' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .template-content .template-title' => 'margin: {{SIZE}}{{UNIT}} 0',
                ],
            ]
        );

        $repeater->add_control(
            'template_title_alignment',
            [
                'label' => __('Horizontal Alignment', 'cozy-addons'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __('Left', 'cozy-addons'),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'cozy-addons'),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'right' => [
                        'title' => __('Right', 'cozy-addons'),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'condition' => [
                    'select_content_type' => 'content-template',
                    'display_template_title' => 'yes',
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .template-content .template-title' => 'text-align: {{VALUE}}',
                ]
            ]
        );

        $this->add_control(
            'toggle_content_fields',
            [
                'label' => __('Contents', 'cozy-addons'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'item_actions' => [
                    'add'       => $ct_property_action_access,
                    'duplicate' => $ct_property_action_access,
                    'remove'    => $ct_property_action_access,
                    'sort'      => true,
                    'update'    => true,
                ],
                'default' => [
                    [
                        'content_title' => __('Annual', 'cozy-addons'),
                    ],
                    [
                        'content_title' => __('Life Time', 'cozy-addons'),
                    ],
                ],
                'title_field' => '{{{ content_title }}}',
            ]
        );

        if (!cozy_addons_premium_access()) {
            $this->add_control(
                'cozy_toggle_content_notice_text',
                [
                    'type' => \Elementor\Controls_Manager::RAW_HTML,
                    'raw' => __('<a href="https://cozythemes.com/cozy-addons/" target="_blank">Upgrade to premium</a> version to get full access to add/remove unlimited contents!', 'cozy-addons'),
                    'content_classes' => 'ct-upsell-notice',
                ]
            );
        }

        $this->end_controls_section();
    }

    private function cozy_addons_toggle_button_wrapper_styles()
    {
        $this->start_controls_section(
            'cozy_addons_toggle_content_styles',
            [
                'label' => __('Button Wrapper Styles', 'cozy-addons'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'button_wrapper_padding',
            [
                'label' => __('Padding', 'cozy-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'default' => [
                    'top' => 6,
                    'right' => 25,
                    'bottom' => 6,
                    'left' => 25,
                    'unit' => 'px',
                ],
                'size_units' => ['%', 'px'],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );

        $this->add_control(
            'button_wrapper_width',
            [
                'label' => __('Button Wrapper Width', 'cozy-addons'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 100,
                        'max' => 1000,
                    ],
                    '%' => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'size_units' => ['px', '%'],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper' => 'width: {{SIZE}}{{UNIT}}'
                ],
            ]
        );

        $this->add_control(
            'button_gap',
            [
                'label' => __('Button Gap', 'cozy-addons'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'size_units' => ['px'],
                'default' => [
                    'unit' => 'px',
                    'size' => 15,
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper' => 'gap: {{SIZE}}{{UNIT}}',
                ],
            ]
        );

        $this->add_control(
            'button_group_tabs_bottom_margin',
            [
                'label' => __('Bottom Space', 'cozy-addons'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 250,
                    ],
                ],
                'size_units' => ['px'],
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .cozy-toggle-content' => 'margin-top: {{SIZE}}{{UNIT}}',
                ],
            ]
        );
        $this->add_control(
            'button_wrapper_horizontal_alignment',
            [
                'label' => __('Button Wrapper Horizontal Alignment', 'cozy-addons'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    '0' => [
                        'title' => __('Left', 'cozy-addons'),
                        'icon' => 'eicon-h-align-left',
                    ],
                    '0 auto' => [
                        'title' => __('Center', 'cozy-addons'),
                        'icon' => 'eicon-h-align-center',
                    ],
                    '0 0 0 auto' => [
                        'title' => __('Right', 'cozy-addons'),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'default' => '0 auto',
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper' => 'margin: {{VALUE}}',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'button_wrapper_border',
                'label' => __('Button Wrapper Border Type', 'cozy-addons'),
                'selector' => '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper',
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'button_wrapper_box_shadow',
                'label' => __('Button Wrapper Box Shadow', 'cozy-addons'),
                'selector' => '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper',
            ]
        );

        $this->add_control(
            'button_wrapper_border_radius',
            [
                'label' => __('Button Wrapper Border Radius', 'cozy-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'default' => [
                    'top' => 34,
                    'right' => 34,
                    'bottom' => 34,
                    'left' => 34,
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'button_wrapper_background_color',
            [
                'label'     => __('Background Color', 'cozy-addons'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Color::get_type(),
                    'value' => Color::COLOR_2,
                ],
                'default'   => 'rgba(255, 255, 255, 1)',
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    private function cozy_addons_toggle_button_styles()
    {
        $this->start_controls_section(
            'cozy_addons_toggle_button_styles',
            [
                'label' => __('Tabs Style', 'cozy-addons'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_control(
            'button_horizontal_alignment',
            [
                'label' => __('Button Horizontal Alignment', 'cozy-addons'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'start' => [
                        'title' => __('Left', 'cozy-addons'),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => __('Center', 'cozy-addons'),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'end' => [
                        'title' => __('Right', 'cozy-addons'),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'default' => 'center',
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .button-wrapper' => 'justify-content: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'button_padding',
            [
                'label' => __('Padding', 'cozy-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'default' => [
                    'top' => 15,
                    'right' => 30,
                    'bottom' => 15,
                    'left' => 30,
                    'unit' => 'px',
                ],
                'size_units' => ['%', 'px'],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .cozy-toggle-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $this->add_control(
            'button_border_radius',
            [
                'label' => __('Button Border Radius', 'cozy-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'default' => [
                    'top' => 60,
                    'right' => 60,
                    'bottom' => 60,
                    'left' => 60,
                ],
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .cozy-toggle-button:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'active_button_text_typography',
                'label' => __('Text Typography', 'cozy-addons'),
                'scheme' => Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .cozy-addons-content-toggle .cozy-toggle-button',
                'fields_options' => [
                    'typography' => ['default' => 'yes'],
                    'font_size' => ['default' => ['size' => 16]],
                    'font_weight' => ['default' => 600],
                ],
            ]
        );
        $this->add_control(
            'button_wrapper_text_color',
            [
                'label'     => __('Text Color', 'cozy-addons'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Color::get_type(),
                    'value' => Color::COLOR_2,
                ],
                'default'   => '#464646',
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .cozy-toggle-button' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'tabs_button_wrapper_box_shadow',
                'label' => __('Active Tab Shadow', 'cozy-addons'),
                'selector' => '{{WRAPPER}} .cozy-addons-content-toggle .cozy-toggle-button:before',
            ]
        );
        $this->add_control(
            'active_button_text_background_color',
            [
                'label'     => __('Active Background Color', 'cozy-addons'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Color::get_type(),
                    'value' => Color::COLOR_1,
                ],
                'default'   => '#ededed',
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .cozy-toggle-button.active:before' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'active_button_text_color',
            [
                'label'     => __('Active Text Color', 'cozy-addons'),
                'type'      => Controls_Manager::COLOR,
                'scheme'    => [
                    'type'  => Color::get_type(),
                    'value' => Color::COLOR_2,
                ],
                'default'   => '#565656',
                'selectors' => [
                    '{{WRAPPER}} .cozy-addons-content-toggle .cozy-toggle-button.active' => 'color: {{VALUE}};',
                ],
            ]
        );



        $this->end_controls_section();
    }


    protected function render($instance = [])
    {
        $settings = $this->get_settings(); ?>
        <section class="cozy-addons-content-toggle">
            <div class="button-wrapper">

                <?php
                $i = 1;
                foreach ($settings['toggle_content_fields'] as $content) {
                    echo "<button class='cozy-toggle-button' onclick='openContent(event, `toggle_content_" . $i . "`)'><span class='button-text'>" . $content['content_title'] . "</span></button>";
                    ++$i;
                }
                ?>
            </div>
            <?php
            $i = 1;
            foreach ($settings['toggle_content_fields'] as $content) {
                echo "<div id='toggle_content_" . $i . "' class='cozy-toggle-content'>";
                ++$i;
                if ('content-editor' == $content['select_content_type']) {
                    echo "<div class='text-editor-content'>";
                    echo $content['content_type_editor'];
                    echo "</div>";
                } else {
                    $page_id = $content['content_type_template'];
                    $args = array(
                        'post_type'      => 'elementor_library',
                        'tabs_group' => 'library',
                    );

                    $elementor_templates = get_posts($args);
                    echo "<div class='template-content'>";
                    foreach ($elementor_templates as $key => $template) {
                        # code...
                        if ($template->ID == $page_id) {
                            if ('yes' == $content['display_template_title']) {
                                echo "<div class='template-title'>" . $template->post_title . "</div>";
                            }

                            if (empty($template->post_content)) {
                                echo "<div class='empty-template'>No contents here!</div>";
                            } else {
                                echo "<div class='template-content'>" . \Elementor\Plugin::instance()->frontend->get_builder_content_for_display($template->ID) . "</div>";
                            }
                        }
                    }
                    echo "</div>";
                }
                echo "</div>";
            }
            ?>
        </section> <!-- featured-layout -->
<?php }
}
