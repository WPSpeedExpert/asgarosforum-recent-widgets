# Asgaros Forum Recent Posts and Topics Widgets

**Contributors:** Your Name  
**Tags:** Asgaros Forum, Recent Posts, Recent Topics, WordPress, Widgets  
**Requires at least:** 5.0  
**Tested up to:** 6.3  
**Stable tag:** 1.0.0  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

Inject recent posts and recent topics widgets directly into the Asgaros Forum header without requiring any third-party plugins.

## Description

This plugin automatically injects the "Recent Posts" and "Recent Topics" widgets into the Asgaros Forum header. Unlike other solutions that require the Widget Shortcode plugin, this plugin directly calls and renders the widget classes within the forum, making it lightweight and easier to configure.

## Features

- Displays Recent Posts and Recent Topics in Asgaros Forum.
- No need for the Widget Shortcode plugin.
- Direct control over the widget rendering through WordPress core widget classes.

## Installation

### 1. Download and Install the Plugin

1. Download the ZIP file of this plugin.
2. Go to your WordPress Dashboard.
3. Navigate to **Plugins > Add New**.
4. Click **Upload Plugin** and upload the ZIP file.
5. Click **Install Now** and then **Activate**.

### 2. Configure Widgets (Optional)

The plugin uses the WordPress core `WP_Widget_Recent_Posts` to display recent posts and requires a custom widget for recent topics (if available). No configuration is needed unless you want to modify how many posts or topics are displayed.

### 3. Inject Widgets into Asgaros Forum

Once activated, the plugin will automatically inject the Recent Posts and Recent Topics widgets directly into the header of your Asgaros Forum.

## Customization

To change the number of posts or topics displayed, modify the `number` field in the plugin code:

```php
$instance = array(
    'title'    => 'Recent Posts',
    'number'   => 5, // Change this to display a different number of posts
    'show_date'=> true
);
