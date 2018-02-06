<?php

/*
    Widget Name: BS4 Paragraph
    Description: Bootstrap 4 Paragraph
    Author: Dylan Gore
    Author URI: https://dylangore.ie
    Widget URI: https://getbootstrap.com/docs/4.0/content/typography/#lead
    Video URI: 
*/

class BS4_Paragraph_Widget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return 'paragraph-template';
    }

    function get_style_name($instance) {
        return 'tpl';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'bs4-paragraph-widget',
    
            // The name of the widget for display purposes.
            __('BS4 Paragraph Widget', 'bs4-paragraph-widget-text-domain'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A Bootstrap 4 paragraph widget.', 'bs4-paragraph-widget-text-domain'),
                'panels_groups' => array('bs4-widgets'),
                'panels_icon' => 'dashicons dashicons-editor-bold',
                'help' => 'https://getbootstrap.com/docs/4.0/content/typography/#lead'
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'text' => array(
                    'type' => 'tinymce',
                    'label' => __('Text', 'bs4-widgets'),
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius ut metus sed pellentesque.'
                ),
                'type' => array(
                    'type' => 'select',
                    'label' => __( 'Paragraph Type', 'bs4-widgets' ),
                    'default' => 'normal',
                    'options' => array(
                        'normal'    => __( 'Normal', 'bs4-widgets' ),
                        'lead'  => __( 'Lead', 'bs4-widgets' )
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

siteorigin_widget_register('bs4-paragraph-widget', __FILE__, 'BS4_Paragraph_Widget');