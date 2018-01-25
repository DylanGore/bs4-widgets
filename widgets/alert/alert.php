<?php

/*
    Widget Name: BS4 Alert
    Description: Bootstrap 4 Alert
    Author: Dylan Gore
    Author URI: https://dylangore.ie
    Widget URI: http://getbootstrap.com/docs/4.0/components/alerts/
    Video URI: 
*/

class BS4_Alert_Widget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return 'alert-template';
    }

    function get_style_name($instance) {
        return 'tpl';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'bs4-alert-widget',
    
            // The name of the widget for display purposes.
            __('BS4 Alert Widget', 'bs4-alert-widget-text-domain'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A Bootstrap 4 alert widget.', 'bs4-alert-widget-text-domain'),
                'panels_groups' => array('bs4-widgets'),
                'panels_icon' => 'dashicons dashicons-editor-bold',
                'help' => 'http://getbootstrap.com/docs/4.0/components/alerts/'
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'text' => array(
                    'type' => 'text',
                    'label' => __('Alert text', 'bs4-widgets'),
                    'default' => 'This is an alert.'
                ),
                'alert-type' => array(
                    'type' => 'select',
                    'label' => __( 'Alert Type', 'bs4-widgets' ),
                    'default' => 'primary',
                    'options' => array(
                        'primary'    => __( 'Primary', 'bs4-widgets' ),
                        'secondary'  => __( 'Secondary', 'bs4-widgets' ),
                        'success' => __( 'Success', 'bs4-widgets' ),
                        'danger'   => __( 'Danger', 'bs4-widgets' ),
                        'warning'    => __( 'Warning', 'bs4-widgets' ),
                        'info'  => __( 'Info', 'bs4-widgets' ),
                        'light' => __( 'Light', 'bs4-widgets' ),
                        'dark'   => __( 'Dark', 'bs4-widgets' )
                    ),
                ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

}

siteorigin_widget_register('bs4-alert-widget', __FILE__, 'BS4_Alert_Widget');