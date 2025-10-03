<?php

// Disable licenses ACF plugin
add_action('init', function () {
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

function vexatheme_scripts()
{
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awsome/all.min.css', array(), '6.4');
    wp_enqueue_script('font-awesome', get_template_directory_uri() . '/assets/font-awsome/all.min.js', array(), '6.4');
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);
    // Google Fonts
    wp_enqueue_style('google-fonts-philosopher', 'https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap', [], null);
    wp_enqueue_style('google-fonts-lexend', 'https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap', [], null);

    // Swiper
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11', true);

    // AOS
    wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1');
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);
}

add_action('wp_enqueue_scripts', 'vexatheme_scripts');

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

function my_menu_link_class($atts, $item, $args)
{
    if ($args->theme_location === 'primary') {
        $atts['class'] = 'hover:text-pink-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400';
        if ($item->title === 'Home') {
            $atts['class'] = 'text-pink-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400';
        }
        if ($item->title === 'Contact Us') {
            $atts['class'] = 'inline-block bg-[#552ae0] rounded-full border-2 border-[#552ae0] px-12 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#552ae0]';
        }

        if ($item->title === 'Liên hệ') {
            $atts['class'] = 'inline-block hover:bg-[#552ae0] rounded-full border-2 border-[#552ae0] px-12 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#552ae0]';
        }
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'my_menu_link_class', 10, 3);

// functions.php
function vexatheme_register_menus()
{
    register_nav_menus([
        'primary' => __('Primary Menu', 'vexa'),
        'footer' => __('Footer Menu', 'vexa'),
    ]);
}

add_action('after_setup_theme', 'vexatheme_register_menus');


// Thêm class cho link <a>
add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
    if ($args->theme_location === 'footer') {
        $atts['class'] = 'text-[#7C91B3C2] hover:text-slate-700 focus:outline-none focus:underline';
    }
    return $atts;
}, 10, 3);

// Chèn dot hồng vào trước mỗi item
add_filter('walker_nav_menu_start_el', function ($item_output, $item, $depth, $args) {
    if ($args->theme_location === 'footer') {
        $dot = '<span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>';
        $item_output = '<li class="relative pl-3">' . $dot . $item_output . '</li>';
    }
    return $item_output;
}, 10, 4);

// beracrum
function vexa_breadcrumbs()
{
    if (is_front_page()) return;

    $home_url = home_url('/');
    echo '<nav class="text-sm" aria-label="Breadcrumb">';
    echo '<ol class="flex items-center gap-2 text-gray-300">';

    // Home
    echo '<li><a href="' . $home_url . '" class="text-[20px] text-[#e432568f] hover:text-white">Home</a></li>';

    // separator
    $sep = '<span class="opacity-60">›</span>';

    // Current
    echo '<li class="px-1">' . $sep . '</li>';
    echo '<li class="text-[20px] text-[#e43256]">' . esc_html(get_the_title()) . '</li>';

    echo '</ol></nav>';
}

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
});

/**
 * Allow SVG upload (admin only) + fix mime + basic safety check + show in Media.
 */

// 1) Cho phép SVG (giới hạn admin để an toàn)
add_filter('upload_mimes', function ($mimes) {
    if (current_user_can('manage_options')) {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
    }
    return $mimes;
});

// 2) Sửa kiểm tra loại file để WP không chặn SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes, $real_mime) {
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if (in_array($ext, ['svg', 'svgz'], true)) {
        $data['ext'] = 'svg';
        $data['type'] = 'image/svg+xml';
        $data['proper_filename'] = $filename;
    }
    return $data;
}, 10, 5);

// 3) Chặn SVG có <script> hoặc on* handlers (an toàn cơ bản)
add_filter('wp_handle_upload_prefilter', function ($file) {
    if (isset($file['type']) && $file['type'] === 'image/svg+xml') {
        $contents = @file_get_contents($file['tmp_name']);
        if ($contents && preg_match('/<\s*script|on\w+\s*=/i', $contents)) {
            $file['error'] = __('SVG contains scripts/event handlers. Please export a clean SVG.', 'textdomain');
        }
    }
    return $file;
});

// 4) Sửa hiển thị thumbnail SVG trong Media/Library
add_action('admin_head', function () {
    echo '<style>
    td.media-icon img[src$=".svg"], 
    .attachment .thumbnail img[src$=".svg"],
    img[src$=".svg"].attachment-post-thumbnail { width:100%!important; height:auto!important; }
  </style>';
});


