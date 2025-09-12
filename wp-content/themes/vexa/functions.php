<?php 

// Disable licenses ACF plugin
add_action('init', function() {
    @ini_set("display_errors", 0);

    if (!defined("ABSPATH")) {
    exit(); // Exit if accessed directly.
    }

    $lic_data = base64_encode(
    maybe_serialize([
    "key" => "********",
    "url" => home_url(),
    ])
    );
    update_option("acf_pro_license", $lic_data);
    update_option("acf_pro_license_status", [
    "status" => "active",
    "next_check" => time() * 9,
    ]);
});

function vexatheme_scripts () {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awsome/all.min.css', array(), '6.4');
    wp_enqueue_script('font-awesome', get_template_directory_uri() . '/assets/font-awsome/all.min.js', array(), '6.4');
    
    
    wp_enqueue_script('tailwindcss','https://cdn.tailwindcss.com', array(), null, false);
}
add_action('wp_enqueue_scripts', 'vexatheme_scripts');

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

function my_menu_link_class($atts, $item, $args) {
    if ($args->theme_location === 'primary') {
        $atts['class'] = 'hover:text-pink-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400';
        if ($item->title === 'Home') {
            $atts['class'] = 'text-pink-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400';
        }
        if ($item->title === 'Contact Us') {
            $atts['class'] = 'inline-block bg-[#552ae0] rounded-full border-2 border-[#552ae0] px-12 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#552ae0]';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'my_menu_link_class', 10, 3);

// functions.php
function vexatheme_register_menus() {
    register_nav_menus([
        'primary'   => __( 'Primary Menu', 'vexa' ),
        'footer'    => __( 'Footer Menu', 'vexa' ),
    ]);
}
add_action('after_setup_theme', 'vexatheme_register_menus');


// Thêm class cho link <a>
add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
    if ($args->theme_location === 'footer') {
        $atts['class'] = 'text-[#7C91B3C2] hover:text-slate-700 focus:outline-none focus:underline';
    }
    return $atts;
}, 10, 3);

// Chèn dot hồng vào trước mỗi item
add_filter('walker_nav_menu_start_el', function($item_output, $item, $depth, $args) {
    if ($args->theme_location === 'footer') {
        $dot = '<span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>';
        $item_output = '<li class="relative pl-3">' . $dot . $item_output . '</li>';
    }
    return $item_output;
}, 10, 4);

