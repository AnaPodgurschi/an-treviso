<?php
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}
require_once __DIR__ . '/inc/acf.php';
require_once __DIR__ . '/inc/func.php';
require_once __DIR__ . '/inc/bs-setup.php';
require_once __DIR__ . '/inc/bs-widgets.php';
require_once __DIR__ . '/inc/bs-styles.php';
//require_once __DIR__ . '/inc/bs-post-type.php';
//require_once __DIR__ . '/inc/bs-taxonomy.php';
require_once __DIR__ . '/shortcodes/email.php';
require_once __DIR__ . '/shortcodes/full_address.php';
require_once __DIR__ . '/shortcodes/full_company_name.php';
require_once __DIR__ . '/shortcodes/phone_number.php';
require_once __DIR__ . '/shortcodes/short_company_name.php';
require_once __DIR__ . '/shortcodes/vat.php';
require_once __DIR__ . '/inc/class-tgm-plugin-activation.php';
require_once __DIR__ . '/shortcodes/privacy.php';
require_once __DIR__ . '/inc/tgm_example.php';
//require_once __DIR__ . '/api/terms-api.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
