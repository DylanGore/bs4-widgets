<?php

/*
    Widget Name: BS4 Heading
    Description: Bootstrap 4 Heading
    Author: Dylan Gore
    Author URI: https://dylangore.ie
    Widget URI: https://getbootstrap.com/docs/4.0/content/typography/#headings
    Video URI: 
*/

class BS4_Heading_Widget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return 'heading-template';
    }

    function get_style_name($instance) {
        return 'tpl';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'bs4-heading-widget',
    
            // The name of the widget for display purposes.
            __('BS4 Heading Widget', 'bs4-heading-widget-text-domain'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A Bootstrap 4 heading widget.', 'bs4-heading-widget-text-domain'),
                'panels_groups' => array('bs4-widgets'),
                'panels_icon' => 'dashicons dashicons-editor-bold',
                'help' => 'https://getbootstrap.com/docs/4.0/content/typography/#headings'
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
                    'label' => __( 'Heading Size', 'bs4-widgets' ),
                    'default' => 'display-1',
                    'options' => array(
                        'h1'    => __( 'H1', 'bs4-widgets' ),
                        'h2'  => __( 'H2', 'bs4-widgets' ),
                        'h3' => __( 'H3', 'bs4-widgets' ),
                        'h4'   => __( 'H4', 'bs4-widgets' ),
                        'h5' => __( 'H5', 'bs4-widgets' ),
                        'h6'   => __( 'H6', 'bs4-widgets' )
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

siteorigin_widget_register('bs4-heading-widget', __FILE__, 'BS4_Heading_Widget');