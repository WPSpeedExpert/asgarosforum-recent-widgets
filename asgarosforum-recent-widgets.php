<?php
/*
Plugin Name:        Asgaros Forum Recent Widgets
Description:        Adds recent posts and recent topics widgets to Asgaros Forum using the shortcodes [asgarosforum-recent-posts] and [asgarosforum-recent-topics].
Version:            1.0.0
Author:             WP Speed Expert
Author URI:         https://wpspeedexpert.com
Text Domain:        asgarosforum-recent-widgets
Domain Path:        /languages
License:            GPLv2 or later
GitHub Plugin URI:  https://github.com/WPSpeedExpert/asgarosforum-recent-widgets
GitHub Branch:      main
*/

// Function to display recent posts widget content
function asgarosforum_widget_recent_posts_custom_content() {
    echo do_shortcode('[asgarosforum-recent-posts]');
}

// Function to display recent topics widget content
function asgarosforum_widget_recent_topics_custom_content() {
    echo do_shortcode('[asgarosforum-recent-topics]');
}

// Hook the recent posts widget into Asgaros Forum content header
add_action('asgarosforum_content_header', 'asgarosforum_widget_recent_posts_custom_content');

// Hook the recent topics widget into Asgaros Forum content header
add_action('asgarosforum_content_header', 'asgarosforum_widget_recent_topics_custom_content');
