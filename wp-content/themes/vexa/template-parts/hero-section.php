<?php
$hero = get_field('hero_section');

if ( $hero ) {
    $title       = isset($hero['title']) ? $hero['title'] : '';
    $desc        = isset($hero['desc']) ? $hero['desc'] : '';
    $btn_text    = isset($hero['button']) ? $hero['button'] : '';
    $btn_link    = isset($hero['button_link']) ? $hero['button_link'] : '#';
    $image_field = isset($hero['image']) ? $hero['image'] : '';

    $img_url = '';
    $img_alt = '';
    if (is_array($image_field)) {
        $img_url = $image_field['url'] ?? '';
        $img_alt = $image_field['alt'] ?? '';
    } elseif (is_numeric($image_field)) {
        $img_url = wp_get_attachment_image_url($image_field, 'large');
        $img_alt = get_post_meta($image_field, '_wp_attachment_image_alt', true);
    } else {
        $img_url = $image_field;
    }
}
?>

<section class="py-20 relative">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px] z-10">
        <div class="grid lg:grid-cols-2 gap-1 items-center">
            <!-- Left Content -->
            <div>
                <h1 class="text-3xl md:text-[65px] font-bold leading-tight relative">
                <div class="custom_bg_text absolute -z-10 h-[110px] w-[110px] -left-[5%] -top-[15%]"></div>
                <?php
                    echo wp_kses_post( $title );
                    ?>
                </h1>
                <p class="mt-6 text-base text-gray-300 leading-relaxed max-w-lg">
                <?php echo esc_html( $desc ); ?>
                </p>
                <div class="mt-8">
                <a
                    href="<?php echo esc_url( $btn_link ?: '#' ); ?>"
                    class="inline-block bg-[#552ae0] rounded-full border-2 border-[#552ae0] px-12 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#552ae0]"
                    aria-label="Contact us"
                >
                    <?php echo esc_html( $btn_text ); ?>
                </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="flex justify-center">
                <?php if ( $img_url ) : ?>
                    <img src="<?php echo esc_url( $img_url ); ?>"
                        alt="<?php echo esc_attr( $img_alt ?: 'Hero image' ); ?>"
                        class="rounded-full object-cover"
                        width="640" height="600" loading="lazy" />
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="custom_blur -z-10"></div>
    <img class="absolute top-[65%] -z-10" src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2025/03/Abstract-Shape-1-164-297x339.png"/>
    <img class="absolute top-[15%] left-[7%] -z-10" src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2025/03/myIcon-167.svg"/>
    <img class="absolute top-[25%] left-[47%] " src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2025/03/Abstract-Shape-2-165-267x283.png"/>
</section>