<section class="py-20 overflow-hidden">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px] relative">

        <!-- NỀN tràn sang PHẢI, vẫn bám mép trái của container -->
        <div class="absolute inset-y-0 left-0 right-0 lg:right-[calc(50%-50vw)]
                bg-[#1a1a22] rounded-l-3xl -z-10"></div>

        <!-- Nội dung (không để bg ở đây nữa) -->
        <div class="relative grid grid-cols-1  gap-12 lg:grid-cols-5 items-center pt-[140px]">
            <!-- Left Image -->
            <div class="flex justify-center col-span-2">
                <img
                        src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/Girl-Sitting.png"
                        alt="Creative person working on laptop"
                        class="w-full max-w-lg rounded-2xl object-cover"
                        width="500" height="600" loading="lazy"/>
            </div>

            <!-- Right Content -->
            <div class="col-span-3">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
                    <div>
                        <p class="text-sm font-semibold text-[#E43256] tracking-wide font-['Lexend']">Portfolio</p>
                        <h1 class="mt-2 text-3xl md:text-4xl font-bold leading-tight relative">
                            <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[5%] -top-[15%]"></div>
                            <span class="font-['Philosopher']">
                Our Recent Works
              </span>
                        </h1>
                    </div>
                    <div class="mt-4 md:mt-0">
                        <a href="#"
                           class="font-['Lexend'] inline-flex hover:bg-[#552ae0] rounded-full border-2 border-[#552ae0] px-12 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#552ae0]">
                            Explore All Projects
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Grid ảnh -->
                <?php
                // --------- Cấu hình ----------
                $post_type = 'portfolio';
                $per_page = 8;
                $cat_slug = '';
                $taxonomy = 'portfolio_cat';
                $loop = true;
                $autoplay = true;

                $slider_id = 'portfolio-swiper-' . uniqid();

                // WP_Query
                $args = [
                        'post_type' => $post_type,
                        'posts_per_page' => $per_page,
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                ];

                if (!empty($cat_slug)) {
                    $args['tax_query'] = [[
                            'taxonomy' => $taxonomy,
                            'field' => 'slug',
                            'terms' => sanitize_title($cat_slug),
                    ]];
                }

                $q = new WP_Query($args);
                if ($q->have_posts()) : ?>
                    <div class="relative lg:mr-[calc(50%-50vw)] lg:pr-4 overflow-visible">
                        <div id="<?php echo esc_attr($slider_id); ?>"
                             class="portfolio-swiper swiper">
                            <div class="swiper-wrapper">
                                <?php while ($q->have_posts()) : $q->the_post(); ?>
                                    <div class="swiper-slide">
                                        <article class="relative overflow-hidden rounded-2xl group">
                                            <!-- Ảnh -->
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('large', [
                                                        'class' => 'lg:w-full h-[25rem] object-cover transform-gpu will-change-transform transition-transform duration-500 ease-out group-hover:scale-105',
                                                        'loading' => 'lazy',
                                                        'alt' => esc_attr(get_the_title()),
                                                ]);
                                            } else {
                                                echo '<img src="https://picsum.photos/600/400?random=' . esc_attr(get_the_ID()) .
                                                        '" class="lg:w-full h-[25rem] object-cover transform-gpu will-change-transform transition-transform duration-500 ease-out group-hover:scale-105" alt="">';
                                            }
                                            ?>

                                            <!-- Overlay đỏ + info -->
                                            <div
                                                    class="pointer-events-none absolute inset-0
                                bg-gradient-to-t from-red-600/80 to-transparent
                                opacity-0 transition-opacity duration-500 ease-out
                                group-hover:opacity-100">
                                            </div>

                                            <!-- Text (title + meta) trượt lên -->
                                            <div class="absolute inset-x-0 bottom-0 p-6 text-white
                                    flex flex-col justify-end">
                                                <div class="transform-gpu translate-y-6 opacity-0
                                      transition-all duration-500 ease-out
                                      group-hover:translate-y-0 group-hover:opacity-100">
                                                    <h3 class="font-semibold text-lg">
                                                        <a href="<?php the_permalink(); ?>"
                                                           class="hover:underline font-['Philosopher']"><?php the_title(); ?></a>
                                                    </h3>
                                                    <?php if ($position ?? null): ?>
                                                        <p class="text-sm/relaxed opacity-90"><?php echo esc_html($position); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                                <div class="swiper-slide hidden lg:block"></div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>

    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.portfolio-swiper', {
            slidesPerView: 1,      // <-- mặc định cho mobile
            spaceBetween: 16,
            autoHeight: true,      // giữ chiều cao theo nội dung (mobile rất cần)
            grabCursor: true,
            watchOverflow: true,
            breakpoints: {
                0: {
                    // mobile
                    slidesPerView: 1,
                },
                640: {
                    // tablet
                    slidesPerView: 1.5,
                },
                1024: {
                    // desktop
                    slidesPerView: 2.2,
                },
            },
        });
    });

</script>