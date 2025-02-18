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
        $old_description = isset($instance['wpa_description']) ? $instance['wpa_description'] : "";
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
            <label for="<?php echo esc_attr($this->get_field_id('wpa_description')); ?>">Description</label>
            <input type="text-area"
                   name="<?php echo esc_attr($this->get_field_name('wpa_description')); ?>"
                   id="<?php echo esc_attr($this->get_field_id('wpa_description')); ?>" cols="30" rows="10"
                   value="<?php echo esc_attr($old_description); ?>"
                   class="widefat">
        </p>
        <?php
    }

    // To save form data

    public function update( $new_instance, $old_instance){

        $instance = [];

        $instance['wpa_title'] = isset($new_instance['wpa_title']) ? $new_instance['wpa_title'] : "";

        $instance['wpa_description'] = isset($new_instance['wpa_description']) ? $new_instance['wpa_description'] : "";

        return $instance;
    }

    // Render Widget to Frontend

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

            echo $args['before_title'];

                echo $instance['wpa_title'];

            echo $args['after_title'];

            echo '<img src="'.WPA_PLUGIN_URL.'img/trend_2601544.png"/>';

            echo '<div class="widget-description">'.wpautop( $instance['wpa_description']).'</div>';

        echo $args['after_widget'];
    }

}