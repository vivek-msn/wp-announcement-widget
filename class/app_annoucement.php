<?php

if(defined("ABSPATH")) die("Access denied");

include_once ABSPATH . "wp-include/class-wp-widget.php"; // 1st method

include_once ABSPATH . "wp-load.php"; // 2nd method

class App_Announcement extends WP_Widget{

    public function __construct(){

    }
}