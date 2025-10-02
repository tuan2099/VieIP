<?php
$about = get_field('about_section') ?: get_field('about_section', 'option') ?: [];

// Texts
$sub_title = $about['sub_title'] ?? '';
$title_raw = $about['title'] ?? ''; // WYSIWYG
$desc_raw = $about['desc'] ?? '';
$button_title = $about['button_title'] ?? '';
$button_link = $about['button_link'] ?? '';

$allowed_inline = [
        'span' => ['class' => true],
        'strong' => [], 'b' => [], 'em' => [], 'i' => [], 'u' => [], 'br' => []
];
$title_html = $title_raw ? wp_kses($title_raw, $allowed_inline) : '';
$desc_html = $desc_raw ? wpautop(esc_html($desc_raw)) : '';

$img1_field = $about['imge_1'] ?? $about['image_1'] ?? null;
$img1_url = $img1_alt = '';
$img1_w = '';
$img1_h = '';
if ($img1_field) {
    if (is_array($img1_field)) {
        $img1_url = $img1_field['url'] ?? '';
        $img1_alt = $img1_field['alt'] ?? '';
        $img1_w = $img1_field['width'] ?? '';
        $img1_h = $img1_field['height'] ?? '';
    } elseif (is_numeric($img1_field)) {
        $img1_url = wp_get_attachment_image_url((int)$img1_field, 'full');
        $img1_alt = get_post_meta((int)$img1_field, '_wp_attachment_image_alt', true);
    } else {
        $img1_url = esc_url_raw($img1_field); // URL string
    }
}

$img2_field = $about['imgge_2'] ?? $about['image_2'] ?? null;
$img2_url = $img2_alt = '';
$img2_w = '';
$img2_h = '';
if ($img2_field) {
    if (is_array($img2_field)) {
        $img2_url = $img2_field['url'] ?? '';
        $img2_alt = $img2_field['alt'] ?? '';
        $img2_w = $img2_field['width'] ?? '';
        $img2_h = $img2_field['height'] ?? '';
    } elseif (is_numeric($img2_field)) {
        $img2_url = wp_get_attachment_image_url((int)$img2_field, 'full');
        $img2_alt = get_post_meta((int)$img2_field, '_wp_attachment_image_alt', true);
    } else {
        $img2_url = esc_url_raw($img2_field); // URL string
    }
}
?>

<section class="py-20">
    <div class="container mx-auto px-6 md:px-6 max-w-[1440px]">
        <div class="grid md:grid-cols-3 items-center gap-3">
            <!-- Left Content -->
            <div>
                <p class="text-sm font-semibold text-[#E43256] tracking-wide font-['Lexend']">
                    <?php echo esc_html($sub_title); ?>
                </p>
                <h1 class="mt-2 text-3xl md:text-[40px] font-bold leading-tight relative font-['Philosopher']">
                    <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[5%] lg:-top-[7%] -top-[25%]"></div>
                    <?php echo $title_html; ?>
                </h1>
                <p class="mt-6 text-base text-gray-400 leading-relaxed max-w-lg font-['Lexend']">
                    <?php echo wp_kses_post(nl2br($desc_raw)); ?>
                </p>
                <div class="mt-8">
                    <a
                            href="<?php echo $button_link ? esc_url($button_link) : '#'; ?>"
                            class="inline-block  font-['Lexend'] rounded-full border-2 border-[#552ae0] px-8 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
                            aria-label="Know more about us"
                    >
                        <?php echo esc_html($button_title); ?>
                    </a>
                </div>
            </div>

            <!-- Right Images -->
            <div class="grid grid-cols-2 gap-1 col-span-2 static lg:relative h-full">
                <div class="col-span-2 md:col-span-1 static lg:absolute right-[40%] -top-[30%]">
                    <img src="<?php echo esc_url($img1_url); ?>"
                         alt="<?php echo esc_attr($img1_alt); ?>"
                         class="w-full rounded-2xl"
                            <?php if ($img1_w) echo 'width="' . (int)$img1_w . '"'; ?>
                            <?php if ($img1_h) echo ' height="' . (int)$img1_h . '"'; ?>
                         loading="lazy"/>
                </div>
                <div class="col-span-2 md:col-span-1 static lg:absolute right-0 -top-[60%]">
                    <img src="<?php echo esc_url($img2_url); ?>"
                         alt="<?php echo esc_attr($img2_alt); ?>"
                         class="w-full rounded-2xl"
                            <?php if ($img2_w) echo 'width="' . (int)$img2_w . '"'; ?>
                            <?php if ($img2_h) echo ' height="' . (int)$img2_h . '"'; ?>
                         loading="lazy"/>
                </div>
            </div>
        </div>
    </div>
</section>
