<?php

/*
    Widget Name: BS4 Display Heading
    Description: Bootstrap 4 Display Heading
    Author: Dylan Gore
    Author URI: https://dylangore.ie
    Widget URI: https://getbootstrap.com/docs/4.0/content/typography/#display-headings
    Video URI: 
*/

class BS4_Display_Heading_Widget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return 'display-heading-template';
    }

    function get_style_name($instance) {
        return 'tpl';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'bs4-display-heading-widget',
    
            // The name of the widget for display purposes.
            __('BS4 Display Heading Widget', 'bs4-display-heading-widget-text-domain'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A Bootstrap 4 display heading widget.', 'bs4-display-heading-widget-text-domain'),
                'panels_groups' => array('bs4-widgets'),
                'panels_icon' => 'dashicons dashicons-editor-bold',
                'help' => 'https://getbootstrap.com/docs/4.0/content/typography/#display-headings'
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'text' => array(
                    'type' => 'text',
                    'label' => __('Heading text', 'bs4-widgets'),
                    'default' => 'Heading'
                ),
                'size' => array(
                    'type' => 'select',
                    'label' => __( 'Display Heading Size', 'bs4-widgets' ),
                    'default' => 'display-1',
                    'options' => array(
                        'display-1'    => __( 'Display 1', 'bs4-widgets' ),
                        'display-2'  => __( 'Display 2', 'bs4-widgets' ),
                        'display-3' => __( 'Display 3', 'bs4-widgets' ),
                        'display-4'   => __( 'Display 4', 'bs4-widgets' )
                    ),
                ),
                'text-align' => array(
                    'type' => 'select',
                    'label' => __( 'Text Alignment', 'bs4-widgets' ),
                    'default' => 'left',
                    'options' => array(
                        'left'  => __( 'Left', 'bs4-widgets' ),
                        'right'  => __( 'Right', 'bs4-widgets' ),
                        'center'  => __( 'Center', 'bs4-widgets' ),
                        'justify'  => __( 'Justify', 'bs4-widgets' ),
                    ),
                ),
                'custom-classes' => array(
                    'type' => 'text',
                    'label' => __('Custom CSS Classes', 'bs4-widgets'),
                    'default' => ''
                ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

}

siteorigin_widget_register('bs4-display-heading-widget', __FILE__, 'BS4_Display_Heading_Widget');