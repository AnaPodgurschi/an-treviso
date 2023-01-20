<?php
add_action('tgmpa_register', 'bsv_eccommerce_register_required_plugins');
function bsv_eccommerce_register_required_plugins()
{
	$plugins = array(
		array(
			'name'             => 'Safe SVG',
			'slug'             => 'safe-svg',
			'required'         => true,
			'force_activation' => true
		),
		array(
			'name'             => 'Tiny Mc Advanced',
			'slug'             => 'tinymce-advanced',
			'required'         => true,
			'force_activation' => true
		),
		//		array(
		//			'name'             => 'Honey pot contact form 7',
		//			'slug'             => 'contact-form-7-honeypot',
		//			'required'         => true,
		//		),
		array(
			'name'             => 'All-in-One WP Migration',
			'slug'             => 'all-in-one-wp-migration',
		),
		//		array(
		//			'name'             => 'Woo ajax mini cart',
		//			'slug'             => 'woo-ajax-mini-cart',
		//			'required'         => true,
		//			'force_activation' => true
		//		),
		array(
			'name'             => 'Classic Editor',
			'slug'             => 'classic-editor',
			'required'         => true,
			'force_activation' => true
		),
		array(
			'name'             => 'Easy Updates Manager',
			'slug'             => 'stops-core-theme-and-plugin-updates',
			'required'         => true,
			'force_activation' => true
		),
		array(
			'name'             => 'Post Duplicator',
			'slug'             => 'post-duplicator',
			'required'         => true,
			'force_activation' => true
		),
		//		array(
		//			'name'             => 'Kama Thumbnail',
		//			'slug'             => 'kama-thumbnail',
		//		),
		//		array(
		//			'name'             => 'Contact Form 7',
		//			'slug'             => 'contact-form-7',
		//			'required'         => true,
		//			'force_activation' => true
		//		),
		//		array(
		//			'name'             => 'Woocommerce',
		//			'slug'             => 'woocommerce'
		//		),
		array(
			'name'             => 'WPS Hide Login',
			'slug'             => 'wps-hide-login'
		),
		//		array(
		//			'name'             => 'Easy Auto SKU Generator',
		//			'slug'             => 'easy-woocommerce-auto-sku-generator'
		//		),
		//		array(
		//			'name'             => 'Query Monitor',
		//			'slug'             => 'query-monitor',
		//			'required'         => true,
		//			'force_activation' => true
		//		),
		array(
			'name'             => 'Cookie Notice',
			'slug'             => 'cookie-notice'
		),
		//		array(
		//			'name'             => 'WP Fastest Cache',
		//			'slug'             => 'wp-fastest-cache',
		//			'required'         => true,
		//		),
		array(
			'name'             => 'Rank Math – SEO Plugin for WordPress',
			'slug'             => 'seo-by-rank-math'
		),
		//		array(
		//			'name'             => 'WC Fields Factory',
		//			'slug'             => 'wc-fields-factory',
		//		),
		//		array(
		//			'name' => 'Wp smoosh',
		//			'slug' => 'wp-smushit',
		//			'required'         => true,
		//			'force_activation' => true,
		////			'external_url' => 'http://wc-base-ecommerce.host1670806.hostland.pro/wp-content/uploads/2021/02/wp-smush-pro-3.8.1.zip'
		//		),
	);
	$config = array(
		'id'           => 'bsv_eccommerce',
		// Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',
		// Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins',
		// Menu slug.
		'has_notices'  => true,
		// Show admin notices or not.
		'dismissable'  => false,
		// If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => false,
		// If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,
		// Automatically activate plugins after installation or not.
		'message'      => '',
	);
	tgmpa($plugins, $config);
}
