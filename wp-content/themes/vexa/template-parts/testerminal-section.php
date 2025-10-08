<?php
$testerminal = get_field('testerminal_section');

$title = $testerminal['title'] ?? '';
$sub_title = $testerminal['subtitle'] ?? '';
?>

<section id="testimonials" aria-labelledby="testimonials-title" class="bg-[#190939]"
         data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
    <div class="max-w-[1440px] mx-auto px-6 sm:px-9">
        <div class="max-w-[1400px] mx-auto pb-36 relative">
            <!-- Head -->
            <header class="pt-24 flex flex-col items-center gap-5"
                    data-aos="fade-down" data-aos-duration="700" data-aos-once="true">
                <div class="pb-20">
                    <div class="max-w-[496.56px] mx-auto flex flex-col items-center gap-6">
                        <p class="text-center text-rose-500 text-lg font-normal font-['Lexend'] leading-normal"
                           data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
                            <?php echo esc_html($sub_title); ?>
                        </p>

                        <div class="relative z-0">
                            <span class="absolute -left-[25px] -top-[9px] w-16 h-16 bg-gradient-to-br from-cyan-400 via-orange-400 to-rose-500 rounded-full z-0 pointer-events-none"
                                  data-aos="zoom-in" data-aos-delay="100" data-aos-duration="600" data-aos-once="true"></span>

                            <h2 id="testimonials-title"
                                class="relative z-10 text-center text-white text-4xl font-bold font-['Philosopher'] leading-[52px] tracking-wide"
                                data-aos="fade-up" data-aos-delay="150" data-aos-duration="700" data-aos-once="true">
                                <?php echo esc_html($title); ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Body -->
            <section class="relative" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700" data-aos-once="true">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $items = $testerminal['testimonials'] ?? [];
                        if (!empty($items)) :
                            foreach ($items as $row) :
                                $img = $row['photo'] ?? null;
                                $quote = $row['quote'] ?? '';
                                $name = $row['name'] ?? '';
                                $role = $row['role'] ?? '';
                                $rating = (int)($row['rating'] ?? 5);

                                $img_url = '';
                                $img_alt = '';
                                if (is_array($img)) {
                                    $img_url = $img['url'] ?? '';
                                    $img_alt = $img['alt'] ?? '';
                                } elseif (is_numeric($img)) {
                                    $img_url = wp_get_attachment_image_url((int)$img, 'large');
                                    $img_alt = get_post_meta((int)$img, '_wp_attachment_image_alt', true);
                                } elseif (is_string($img)) {
                                    $img_url = $img;
                                }

                                $rating = max(1, min(5, $rating));
                                $stars = str_repeat('★', $rating);
                                ?>
                                <div class="swiper-slide">
                                    <div class="w-full grid grid-cols-1 md:grid-cols-[24rem_1fr] gap-8">
                                        <!-- Ảnh bên trái -->
                                        <figure class="md:row-span-1"
                                                data-aos="zoom-in" data-aos-duration="650" data-aos-once="true">
                                            <?php if ($img_url): ?>
                                                <img
                                                        class="w-full max-w-96 md:max-w-none md:w-96 md:h-[490px] h-auto object-cover rounded-md"
                                                        src="<?php echo esc_url($img_url); ?>"
                                                        alt="<?php echo esc_attr($img_alt ?: $name); ?>"
                                                        loading="lazy" width="768" height="980"/>
                                            <?php endif; ?>
                                        </figure>

                                        <!-- Nội dung bên phải -->
                                        <figure class="flex flex-col justify-center gap-12"
                                                data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
                                            <?php if ($quote): ?>
                                                <blockquote
                                                        class="max-w-[559px] text-[#7C91B3] text-xl font-medium font-['Lexend'] leading-relaxed"
                                                        data-aos="fade-up" data-aos-delay="100" data-aos-duration="650" data-aos-once="true">
                                                    <?php echo wp_kses_post($quote); ?>
                                                </blockquote>
                                            <?php endif; ?>

                                            <figcaption>
                                                <div class="text-yellow-400 text-3xl leading-7"
                                                     aria-label="<?php echo esc_attr($rating); ?> out of 5 stars"
                                                     role="img"
                                                     data-aos="zoom-in" data-aos-delay="150" data-aos-duration="600" data-aos-once="true">
                                                    <?php echo esc_html($stars); ?>
                                                </div>
                                                <div class="mt-3 font-['Philosopher']"
                                                     data-aos="fade-up" data-aos-delay="200" data-aos-duration="650" data-aos-once="true">
                                                    <?php if ($name): ?>
                                                        <div class="text-[#7C91B3] text-base font-bold capitalize"><?php echo esc_html($name); ?></div>
                                                    <?php endif; ?>
                                                    <?php if ($role): ?>
                                                        <div class="text-[#7C91B3] text-base tracking-wide"><?php echo esc_html($role); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </div>

                    <!-- Pagination (dots) -->
                    <div class="swiper-pagination mt-6"
                         data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-once="true"></div>
                </div>
            </section>

            <!-- Logo strip -->
            <?php
            $group = get_field('partner_section');
            $gallery = $group['partner_logos'] ?? null;

            if ($gallery && is_array($gallery)) : ?>
                <ul class="pt-12 pb-28 grid grid-cols-2 md:grid-cols-5 gap-9 place-items-center"
                    aria-label="Trusted by partner logos"
                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="700" data-aos-once="true">
                    <?php foreach ($gallery as $image) : ?>
                        <li class="w-[70px]" data-aos="zoom-in" data-aos-duration="600" data-aos-once="true">
                            <?php echo wp_get_attachment_image(
                                    $image['ID'],
                                    'medium',
                                    false,
                                    [
                                            'class' => 'max-h-24 w-full object-contain  grayscale opacity-80 hover:opacity-100 transition',
                                            'alt'   => esc_attr($image['alt'] ?: $image['title']),
                                            'data-aos' => 'zoom-in',
                                            'data-aos-duration' => '600',
                                            'data-aos-once' => 'true',
                                    ]
                            ); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php get_template_part('template-parts/partner-section'); ?>

            <!-- Họa tiết mờ -->
            <img
                    class="w-96 absolute left-[-15px] top-[130px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/Ghost-Frame.svg"
                    alt="Decorative ghost frame"
                    loading="lazy"
                    width="384"
                    height="384"
                    aria-hidden="true"
                    data-aos="fade" data-aos-duration="800" data-aos-once="true"
            />
            <img
                    class="w-64 absolute right-0 -top-[9px]"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/Faded-Rectangle.svg"
                    alt="Decorative faded rectangle"
                    loading="lazy"
                    width="256"
                    height="256"
                    aria-hidden="true"
                    data-aos="fade" data-aos-delay="100" data-aos-duration="800" data-aos-once="true"
            />
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.testimonial-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoHeight: true,
            pagination: {
                el: '.testimonial-swiper .swiper-pagination',
                clickable: true,
            },
        });
    });
</script>