// Replace the URL associated with the Logo
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_text() {
    return get_bloginfo('name');
}
add_filter( 'login_headertext', 'my_login_logo_text' );

// Remove the reference to Wordpress in the <title></title> tag.
function my_login_title() {
    return 'Log In | ' . get_bloginfo('name');
}
add_filter('login_title', 'my_login_title');

// Replace the Logo with the one available for the site.
add_filter( 'login_head', function () {
	$custom_logo = get_site_url('/wp-admin/images/wordpress-logo.svg');
	if (function_exists('get_custom_logo')) {
		$custom_logo_id = get_theme_mod('custom_logo');
		$custom_logo = esc_url(wp_get_attachment_image_src( $custom_logo_id , 'full' )[0]);
	}
	// Adjust the Width & Height accordingly.
	$logo_width  = 400;
	$logo_height = 100;

	printf(
		'<style>.login h1 a {background-image:url(%1$s) !important; margin:0 auto; width: %2$spx; height: %3$spx; background-size: 100%%;}</style>',
		$custom_logo,
		$logo_width,
		$logo_height
	);
}, 990 );