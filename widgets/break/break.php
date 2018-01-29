<?php

/*
    Widget Name: BS4 Break
    Description: Bootstrap 4 Page Break/Horizontal Rule
    Author: Dylan Gore
    Video URI: 
*/

class BS4_Break_Widget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return 'break-template';
    }

    function get_style_name($instance) {
        return 'tpl';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'bs4-break-widget',
    
            // The name of the widget for display purposes.
            __('BS4 Break Widget', 'bs4-break-widget-text-domain'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A Bootstrap 4 break widget. (Page Break/Horizontal Rule)', 'bs4-break-widget-text-domain'),
                'panels_groups' => array('bs4-widgets'),
                'panels_icon' => 'dashicons dashicons-editor-bold'
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'type' => array(
                    'type' => 'select',
                    'label' => __( 'Break Type', 'bs4-widgets' ),
                    'default' => 'left',
                    'options' => array(
                        'hr'  => __( 'Horizontal Rule (<hr>)', 'bs4-widgets' ),
                        'br'  => __( 'Page Break (<br>)', 'bs4-widgets' ),
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

siteorigin_widget_register('bs4-break-widget', __FILE__, 'BS4_Break_Widget');