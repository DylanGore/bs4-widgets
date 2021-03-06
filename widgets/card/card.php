<?php

/*
    Widget Name: BS4 Card
    Description: Bootstrap 4 Card
    Author: Dylan Gore
    Author URI: https://dylangore.ie
    Widget URI: http://getbootstrap.com/docs/4.0/components/card/
    Video URI: 
*/

class BS4_Card_Widget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return 'card-template';
    }

    function get_style_name($instance) {
        return 'tpl';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'bs4-card-widget',
    
            // The name of the widget for display purposes.
            __('BS4 Card Widget', 'bs4-card-widget-text-domain'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('A Boostrap 4 card widget.', 'bs4-card-widget-text-domain'),
                'panels_groups' => array('bs4-widgets'),
                'panels_icon' => 'dashicons dashicons-editor-bold',
                'help' => 'http://getbootstrap.com/docs/4.0/components/card/'
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'card-title' => array(
                    'type' => 'text',
                    'label' => __('Card Title', 'bs4-widgets'),
                    'default' => 'Card Title'
                ),
                'card-text' => array(
                    'type' => 'tinymce',
                    'label' => __('Card Body Text', 'bs4-widgets'),
                    'default' => 'Card Body Text'
                ),
                'show-card-image' => array(
                    'type' => 'checkbox',
                    'default' => false,
                    'label' => __('Show card image', 'bs4-widgets'),
                ),
                'img-src' => array(
                    'type' => 'text',
                    'label' => __('Image Source URL', 'bs4-widgets'),
                    'default' => ''
                ),
                //TODO Proper image code
                // 'card-image' => array(
                //     'type' => 'media',
                //     'label' => __('Card Image', 'bs4-widgets'),
                //     'library' => 'image',
                //     'fallback' => true,
                // ),
                'card-image-loc' => array(
                    'type' => 'select',
                    'label' => __('Card Image Location', 'bs4-widgets'),
                    'default' => 'top',
                    'options' => array(
                        'top'  => __( 'Top', 'bs4-widgets' ),
                        'bottom'  => __( 'Bottom', 'bs4-widgets' ),
                        'overlay'  => __( 'Overlay (WIP)', 'bs4-widgets' ),
                    ),
                ),
                'card-image-alt' => array(
                    'type' => 'text',
                    'label' => __('Card Image Alt Text', 'bs4-widgets'),
                    'default' => 'Image'
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

siteorigin_widget_register('bs4-card-widget', __FILE__, 'BS4_Card_Widget');