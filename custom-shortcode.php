<?php
/**
 * Plugin Name: Custom Welcome Shortcode
 * Plugin URI: https://github.com/yourgithubusername/custom-welcome-shortcode
 * Description: A simple plugin that adds a shortcode to display a welcome message.
 * Version: 1.0
 * Author: Fusen Chua
 * Author URI: https://github.com/yourgithubusername
 */

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

// Function to handle the shortcode
function custom_welcome_message() {
    return '<div style="padding: 10px; background: #f8f9fa; border-left: 5px solid #0073aa;">Welcome to my WordPress site!</div>';
}

// Register the shortcode [welcome_message]
add_shortcode('welcome_message', 'custom_welcome_message');
