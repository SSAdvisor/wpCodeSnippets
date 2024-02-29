<?php
// Remove Application Passwords for all users except the Superuser.
$current_user = wp_get_current_user();
if ($current_user->has_cap('delete_users') != true) {
	add_filter( 'wp_is_application_passwords_available', '__return_false' );
}