# Asgaros Forum Widget Injector Plugin

This plugin adds recent posts and recent topics widgets to the Asgaros Forum using the `asgarosforum_content_header` hook.

## Instructions:

### 1. Install the Widget Shortcode Plugin:
You must install and activate the [Widget Shortcode plugin](https://de.wordpress.org/plugins/widget-shortcode/). This plugin allows any widget to be used as a shortcode.

### 2. Create Widgets:
- Go to **Appearance > Widgets**.
- Add your recent posts and recent topics widgets to a widget area.
- Copy the widget shortcode that is generated by the Widget Shortcode plugin for both widgets.

### 3. Edit the Plugin Code:
- Replace `your-recent-posts-widget-id` with the actual widget ID from the Widget Shortcode plugin for the recent posts widget.
- Replace `your-recent-topics-widget-id` with the actual widget ID from the Widget Shortcode plugin for the recent topics widget.

### 4. Activate the Custom Plugin:
- Once the shortcodes are injected, the Asgaros Forum should display the widgets in the header section.

## Example:

```php
// Function to inject the widget shortcode for recent posts in Asgaros Forum
function asgarosforum_inject_recent_posts_widget() {
    echo do_shortcode('[widget id="your-recent-posts-widget-id"]');
}

// Function to inject the widget shortcode for recent topics in Asgaros Forum
function asgarosforum_inject_recent_topics_widget() {
    echo do_shortcode('[widget id="your-recent-topics-widget-id"]');
}

add_action('asgarosforum_content_header', 'asgarosforum_inject_recent_posts_widget');
add_action('asgarosforum_content_header', 'asgarosforum_inject_recent_topics_widget');
```

- Replace the widget IDs with the correct IDs generated by the Widget Shortcode plugin.
