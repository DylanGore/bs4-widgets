<?php

/*
    Widget Name: BS4 Button
    Description: Bootstrap 4 Button
    Author: Dylan Gore
    Author URI: https://dylangore.ie
    Widget URI: http://getbootstrap.com/docs/4.0/components/buttons/
    Video URI: 
*/

class BS4_Button_Widget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return 'button-template';
    }

    function get_style_name($instance) {
        return 'tpl';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'bs4-button-widget',
    
            // The name of the widget for display purposes.
            __('BS4 Button Widget', 'bs4-button-widget-text-domain'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A bs4 button widget.', 'bs4-button-widget-text-domain'),
                'panels_groups' => array('bs4-widgets'),
                'help'        => 'http://getbootstrap.com/docs/4.0/components/buttons/',
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'button-text' => array(
                    'type' => 'text',
                    'label' => __('Button text', 'bs4-widgets'),
                    'default' => 'Button'
                ),
                'button-link' => array(
                    'type' => 'link',
                    'label' => __('Button URL', 'bs4-widgets'),
                    'default' => ''
                ),
                'button-title' => array(
                    'type' => 'text',
                    'label' => __('Link Title', 'bs4-widgets'),
                    'default' => ''
                ),
                'button-target' => array(
                    'type' => 'select',
                    'label' => __( 'Link Behaviour', 'bs4-widgets' ),
                    'default' => '_self',
                    'options' => array(
                        '_self'    => __( 'Open in the same window', 'bs4-widgets' ),
                        '_blank'  => __( 'Open in a new window', 'bs4-widgets' )
                    ),
                ),
                'button-color' => array(
                    'type' => 'select',
                    'label' => __( 'Button Color', 'bs4-widgets' ),
                    'default' => 'primary',
                    'options' => array(
                        'primary'    => __( 'Primary', 'bs4-widgets' ),
                        'secondary'  => __( 'Secondary', 'bs4-widgets' ),
                        'success' => __( 'Success', 'bs4-widgets' ),
                        'danger'   => __( 'Danger', 'bs4-widgets' ),
                        'warning'    => __( 'Warning', 'bs4-widgets' ),
                        'info'  => __( 'Info', 'bs4-widgets' ),
                        'light' => __( 'Light', 'bs4-widgets' ),
                        'dark'   => __( 'Dark', 'bs4-widgets' ),
                        'link'   => __( 'Link', 'bs4-widgets' )
                    ),
                ),
                'button-size' => array(
                    'type' => 'select',
                    'label' => __( 'Button Size', 'bs4-widgets' ),
                    'default' => 'default',
                    'options' => array(
                        'default'    => __( 'Default', 'bs4-widgets' ),
                        'sm'  => __( 'Small', 'bs4-widgets' ),
                        'lg'  => __( 'Large', 'bs4-widgets' ),
                        'block'  => __( 'Block', 'bs4-widgets' )
                    ),
                ),
                'is-outline' => array(
                    'type' => 'checkbox',
                    'default' => false,
                    'label' => __('Is button outline-only?', 'bs4-widgets'),
                ),
                'is-disabled' => array(
                    'type' => 'checkbox',
                    'default' => false,
                    'label' => __('Disable button', 'bs4-widgets'),
                ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

}

siteorigin_widget_register('bs4-button-widget', __FILE__, 'BS4_Button_Widget');