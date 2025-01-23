<?php

/**
 * Plugin Name: Widget Announcement
 * Description:This Plugin provide you a wordpress widget to announce events and alerts in widget area
 * Author: Vivek Saini
 * Author URI: https://www.viveksaini.in
 * Plugin URI: https://www.ithinkservices.com/widget
 * Version: 1.0
 */

 define("WPA_PLUGIN_URL", plugin_dir_url(__FILE__));  // We define the constant for including assets like images etc.
 define("WPA_PLUGIN_PATH", plugin_dir_path(__FILE__)); // We define the constant for including absoluet path in include or require.

 include_once WPA_PLUGIN_PATH . 'class/app_annoucement.php';

 // Action hook for widgets init
 add_action("widgets_init","register_wpa_widget");

 //Define a function to register a widget

 function register_wpa_widget(){

 }