<?php
/*
Plugin Name:        Asgaros Forum Recent Posts and Topics Widgets
Description:        Inject recent forum posts and recent topics into the Asgaros Forum header.
Version:            1.0.0
Author:             WP Speed Expert
Author URI:         https://wpspeedexpert.com
Text Domain:        asgarosforum-widget-injector
License:            GPLv2 or later
GitHub Plugin URI:  https://github.com/WPSpeedExpert/asgarosforum-widget-injector
GitHub Branch:      main
*/

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

// Function to display recent forum posts
function asgarosforum_inject_recent_posts() {
    global $wpdb;
    $posts_table = $wpdb->prefix . 'forum_posts';
    $topics_table = $wpdb->prefix . 'forum_topics';

    // Query the database for the 5 most recent posts
    $recent_posts = $wpdb->get_results("
        SELECT p.*, t.name AS topic_name, t.id AS topic_id
        FROM $posts_table p
        JOIN $topics_table t ON p.parent_id = t.id
        ORDER BY p.date DESC
        LIMIT 5
    ");

    echo '<div class="content-container">';
    echo '<div class="title-element">Recent Forum Posts</div>';

    if (!empty($recent_posts)) {
        echo '<ul>';
        foreach ($recent_posts as $post) {
            $post_url = esc_url(add_query_arg('postid', $post->id, get_permalink()));
            $topic_url = esc_url(add_query_arg('topicid', $post->topic_id, get_permalink()));
            echo '<li><a href="' . $topic_url . '">' . esc_html($post->topic_name) . '</a> <small>(' . date('F j, Y', strtotime($post->date)) . ')</small></li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No recent posts available.</p>';
    }

    echo '</div>';
}

// Function to display recent forum topics
function asgarosforum_inject_recent_topics() {
    global $wpdb;
    $topics_table = $wpdb->prefix . 'forum_topics';

    // Query the database for the 5 most recent topics
    $recent_topics = $wpdb->get_results("
        SELECT * FROM $topics_table
        ORDER BY date DESC
        LIMIT 5
    ");

    echo '<div class="content-container">';
    echo '<div class="title-element">Recent Forum Topics</div>';

    if (!empty($recent_topics)) {
        echo '<ul>';
        foreach ($recent_topics as $topic) {
            $topic_url = esc_url(add_query_arg('topicid', $topic->id, get_permalink()));
            echo '<li><a href="' . $topic_url . '">' . esc_html($topic->name) . '</a> <small>(' . date('F j, Y', strtotime($topic->date)) . ')</small></li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No recent topics available.</p>';
    }

    echo '</div>';
}

// Hook the functions to inject content at the top of the forum
add_action('asgarosforum_content_header', 'asgarosforum_inject_recent_posts');
add_action('asgarosforum_content_header', 'asgarosforum_inject_recent_topics');
