<?php
function user_greeting_shortcode() {
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        return 'Welcome, ' . esc_html($current_user->display_name);
    } else {
        return 'Welcome, Anonymous User';
    }
}
add_shortcode( 'user_greeting', 'user_greeting_shortcode' );