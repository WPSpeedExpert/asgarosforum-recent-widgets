<?php
/*
Plugin Name:        Asgaros Forum Recent Posts and Topics Widgets
Description:        Inject recent posts and recent topics widgets into the Asgaros Forum header.
Version:            1.0.2
Author:             Your Name
Author URI:         https://example.com
Text Domain:        asgarosforum-widgets
License:            GPLv2 or later
*/

// Function to display recent posts widget
function asgarosforum_inject_recent_posts_widget() {
    // Check if the widget class exists
    if ( class_exists( 'WP_Widget_Recent_Posts' ) ) {
        // Create an instance of the widget class
        $recent_posts_widget = new WP_Widget_Recent_Posts();

        // Set the widget's options (optional, adjust as needed)
        $instance = array(
            'title'    => 'Recent Posts',
            'number'   => 5, // Number of posts to display
            'show_date'=> true
        );

        // Render the widget using its widget() method
        echo '<div class="asgarosforum-recent-posts-widget">';
        $recent_posts_widget->widget( array(), $instance );
        echo '</div>';
    }
}

// Function to display recent topics widget (assuming a custom widget exists)
function asgarosforum_inject_recent_topics_widget() {
    // Check if a custom widget for recent topics exists (replace with your actual widget class)
    if ( class_exists( 'WP_Widget_Recent_Topics' ) ) {
        // Create an instance of the custom recent topics widget
        $recent_topics_widget = new WP_Widget_Recent_Topics();

        // Set the widget's options (optional, adjust as needed)
        $instance = array(
            'title'    => 'Recent Topics',
            'number'   => 5, // Number of topics to display
        );

        // Render the widget using its widget() method
        echo '<div class="asgarosforum-recent-topics-widget">';
        $recent_topics_widget->widget( array(), $instance );
        echo '</div>';
    }
}

// Hook the functions to the Asgaros Forum content header
add_action('asgarosforum_content_header', 'asgarosforum_inject_recent_posts_widget');
add_action('asgarosforum_content_header', 'asgarosforum_inject_recent_topics_widget');

?>
