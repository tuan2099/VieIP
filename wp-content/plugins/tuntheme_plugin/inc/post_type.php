<?php
/**
 * Register Custom Post Types & Taxonomies
 * Textdomain: vexa
 */

add_action( 'init', 'vexa_register_cpts', 0 );
add_action( 'init', 'vexa_register_taxonomies', 0 );

/**
 * CUSTOM POST TYPES
 */
function vexa_register_cpts() {

	// 1) PORTFOLIO
	register_post_type( 'portfolio', array(
		'labels' => array(
			'name'          => __( 'Portfolio', 'vexa' ),
			'singular_name' => __( 'Portfolio Item', 'vexa' ),
			'menu_name'     => __( 'Portfolio', 'vexa' ),
		),
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'show_in_admin_bar'  => true,
		'show_in_nav_menus'  => true,
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'         => array( 'portfolio_category', 'industry', 'audience', 'service_used' ),
		'rewrite'            => array( 'slug' => 'portfolio', 'with_front' => true ),
		'menu_icon'          => 'dashicons-portfolio',
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
	) );

	// 2) SERVICES
	register_post_type( 'service', array(
		'labels' => array(
			'name'          => __( 'Services', 'vexa' ),
			'singular_name' => __( 'Service', 'vexa' ),
			'menu_name'     => __( 'Services', 'vexa' ),
		),
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'has_archive'        => true,
		'hierarchical'       => true, 
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'         => array( 'industry', 'audience', 'service_used' ),
		'rewrite'            => array( 'slug' => 'services', 'with_front' => true ),
		'menu_icon'          => 'dashicons-hammer',
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
	) );

	// 3) TEAM
	register_post_type( 'team', array(
		'labels' => array(
			'name'          => __( 'Team', 'vexa' ),
			'singular_name' => __( 'Team Member', 'vexa' ),
			'menu_name'     => __( 'Team', 'vexa' ),
		),
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'rewrite'            => array( 'slug' => 'team', 'with_front' => true ),
		'menu_icon'          => 'dashicons-groups',
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
	) );

	// 4) PARTNERS
	register_post_type( 'partner', array(
		'labels' => array(
			'name'          => __( 'Partners', 'vexa' ),
			'singular_name' => __( 'Partner', 'vexa' ),
			'menu_name'     => __( 'Partners', 'vexa' ),
		),
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'thumbnail', 'editor', 'excerpt', 'revisions' ),
		'taxonomies'         => array( 'industry' ),
		'rewrite'            => array( 'slug' => 'partners', 'with_front' => true ),
		'menu_icon'          => 'dashicons-handshake',
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
	) );

	// 5) IP ASSETS (IP Store)
	//  - Nếu sau dùng WooCommerce để bán, có thể tắt CPT này và dùng 'product'.
	register_post_type( 'ip_asset', array(
		'labels' => array(
			'name'          => __( 'IP Assets', 'vexa' ),
			'singular_name' => __( 'IP Asset', 'vexa' ),
			'menu_name'     => __( 'IP Store', 'vexa' ),
		),
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'         => array( 'industry', 'audience' ),
		'rewrite'            => array( 'slug' => 'ip-store', 'with_front' => true ),
		'menu_icon'          => 'dashicons-art',
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
	) );
}

/**
 * TAXONOMIES
 */
function vexa_register_taxonomies() {

	// Portfolio Category (hierarchical)
	// register_taxonomy( 'portfolio_category', array( 'portfolio' ), array(
	// 	'labels' => array(
	// 		'name'              => __( 'Portfolio Categories', 'vexa' ),
	// 		'singular_name'     => __( 'Portfolio Category', 'vexa' ),
	// 		'menu_name'         => __( 'Portfolio Category', 'vexa' ),
	// 	),
	// 	'hierarchical'      => true,
	// 	'public'            => true,
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'show_in_rest'      => true,
	// 	'rewrite'           => array( 'slug' => 'portfolio-category', 'with_front' => true ),
	// ) );

	// // Industry (shared)
	// register_taxonomy( 'industry', array( 'portfolio', 'service', 'partner', 'ip_asset', 'post' ), array(
	// 	'labels' => array(
	// 		'name'          => __( 'Industries', 'vexa' ),
	// 		'singular_name' => __( 'Industry', 'vexa' ),
	// 	),
	// 	'hierarchical'      => true,
	// 	'public'            => true,
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'show_in_rest'      => true,
	// 	'rewrite'           => array( 'slug' => 'industry' ),
	// ) );

	// // Audience (shared) – dùng như tag theo đối tượng (IP Owner, Brand, Factory)
	// register_taxonomy( 'audience', array( 'portfolio', 'service', 'ip_asset', 'post' ), array(
	// 	'labels' => array(
	// 		'name'          => __( 'Audiences', 'vexa' ),
	// 		'singular_name' => __( 'Audience', 'vexa' ),
	// 	),
	// 	'hierarchical'      => false,
	// 	'public'            => true,
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'show_in_rest'      => true,
	// 	'rewrite'           => array( 'slug' => 'audience' ),
	// ) );

	// // Service Used (shared) – gắn vào Portfolio/Posts/Services để lọc “dự án theo dịch vụ”
	// register_taxonomy( 'service_used', array( 'portfolio', 'service', 'post' ), array(
	// 	'labels' => array(
	// 		'name'          => __( 'Service Used', 'vexa' ),
	// 		'singular_name' => __( 'Service Used', 'vexa' ),
	// 	),
	// 	'hierarchical'      => false,
	// 	'public'            => true,
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'show_in_rest'      => true,
	// 	'rewrite'           => array( 'slug' => 'service-used' ),
	// ) );
}

/**
 * (Khuyên dùng) Flush rewrite rules khi kích hoạt theme/plugin lần đầu
 * – tránh tình trạng 404 cho archive/single CPT.
 */
if ( function_exists( 'register_activation_hook' ) ) {
	register_activation_hook( __FILE__, function () { vexa_register_cpts(); vexa_register_taxonomies(); flush_rewrite_rules(); } );
	register_deactivation_hook( __FILE__, function () { flush_rewrite_rules(); } );
}
