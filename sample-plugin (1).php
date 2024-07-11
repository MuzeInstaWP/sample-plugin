<?php
/**
 * InstaWP Sample Plugin
 *
 * @package       INSTAWPPRI
 * @author        Vikas
 * @version       1.0.4
 *
 * @wordpress-plugin
 * Plugin Name:   Add text to the top of posts
 * Plugin URI:    https://instawp.com
 * Description:   InstaWP Git Deployment testing
 * Version:       1.0.0
 * Author:        Vikas
 * Author URI:    https://instawp.com
 * Text Domain:   instawp-sample-plugin
 * Domain Path:   /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Include your custom code here.

// Hook into the 'the_content' filter
add_filter('the_content', 'add_my_text');

function add_my_text($content) {
    // Define the text and style
    $custom_text = '<div style="background-color: green; padding: 10px; border: 1px solid #ddd;">New change to the plugin</div>';

    // Add the custom text to the beginning of the content
    return $custom_text . $content;
}