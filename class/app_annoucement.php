<?php
if (!defined("ABSPATH")) {
    die("Access denied");
}

include_once ABSPATH . '/wp-load.php'; // 2nd method

class App_Announcement extends WP_Widget{

    public function __construct(){

        parent::__construct(
            "wpa_announcement",
            "WPA Annoncement",
            [

                "description" => "This is a custom widget for wordpress announcement"

            ]
         ) ;
    }


    // Create widget Admin view

    public function form($instance) {

        $old_title = isset($instance['wpa_title']) ? $instance['wpa_title'] : "";
        $old_decription = isset($instance['wpa_description']) ? $instance['wpa_description'] : "";
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('wpa_title')); ?>">Title</label>
            <input type="text"
                   name="<?php echo esc_attr($this->get_field_name('wpa_title')); ?>" 
                   id="<?php echo esc_attr($this->get_field_id('wpa_title')); ?>" 
                   value="<?php echo esc_attr($old_title); ?>" 
                   class="widefat">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('wpa_description')); ?>">Title</label>
            <input type="text-area"
                   name="<?php echo esc_attr($this->get_field_name('wpa_description')); ?>" 
                   id="<?php echo esc_attr($this->get_field_id('wpa_description')); ?>" cols="30" rows="10"
                   value="<?php echo esc_attr($old_decription); ?>"
                   class="widefat">
        </p>
        <?php
    }

    // To save form data 

    public function update( $new_instance, $old_instance){

        $instance = [];

        $instance['wpa_title'] = isset($new_instance['wpa_title']) ? $new_instance['wpa_title'] : "";

        $instance['wp_description'] = isset($new_instance['wpa_description']) ? $new_instance['wpa_description'] : "";

        return $instance;
    }

    
}