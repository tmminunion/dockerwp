<?php
/*
Plugin Name: My Plugin
Plugin URI: http://example.com
Description: A custom plugin for WordPress
Author: Your Name
Author URI: http://example.com
Version: 1.0
*/

// Basic plugin functionality
function my_plugin_function() {
    echo "Hello, this is my custom plugin!";
}
add_action('wp_footer', 'my_plugin_function');