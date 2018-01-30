<?php
   /*
    Plugin Name: Boostrap 4 Widgets
    Plugin URI: 
    Description: This is a Wordpress plugin created to add Bootstrap 4 components and content as widgets to SiteOrigin’s PageBuilder.
    Version: 1.0
    Author: Dylan Gore
    Author URI: https://dylangore.ie
    License: MIT
    */

    //require_once('options-menu.php');

    //define widgets folder
    function add_bs4_widgets($folders){
        $folders[] = plugin_dir_path(__FILE__).'widgets/';;
        return $folders;
    }

    //Create Tab in widgets menu
    function add_bs4_widget_tabs($tabs) {
        $tabs[] = array(
            'title' => __('Bootstrap 4 Widgets', 'bs4-widgets'),
            'filter' => array(
                'groups' => array('bs4-widgets')
        )
    );

    return $tabs;
    }

    add_filter('siteorigin_widgets_widget_folders', 'add_bs4_widgets');
    add_filter('siteorigin_panels_widget_dialog_tabs', 'add_bs4_widget_tabs', 20);

?>