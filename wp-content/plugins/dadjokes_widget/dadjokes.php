<?php
/*
Plugin Name: Dad Jokes
Description: Display a random dad joke on your site
Version: 1.0.0
Author: Mohammed-Aymen Benadra
Author URI: http://github.com/aymenBenadra
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

// Load Class
require_once(plugin_dir_path(__FILE__) . 'includes/dadjokes-class.php');

// Register Widget
function register_dadjokes()
{
  register_widget('Dad_Jokes_Widget');
}

// Hook in function
add_action('widgets_init', 'register_dadjokes');
