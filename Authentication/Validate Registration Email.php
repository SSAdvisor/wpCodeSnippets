<?php
function validate_email_on_registration($errors, $sanitized_user_login, $user_email) {
	$INV = 'invalid_email';
	$MSG = __('<strong>ERROR</strong>: Invalid email address.');
	if (is_email($user_email)) {
		$user = explode('@', $user_email)[0];
		$uparts = explode('.', $user);
		if (count($uparts) > 2) {
			$errors->add($INV, $MSG);
		}
	}
    return $errors;
}
add_filter('registration_errors', 'validate_email_on_registration', 10, 3);
