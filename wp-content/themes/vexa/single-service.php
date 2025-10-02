<?php
get_header(); ?>

    <section class="py-20 relative overflow-hidden xl:overflow-visible"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
                     background-repeat: no-repeat;">
        <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
            <h1 class="text-[65px] text-white"><?php the_title(); ?></h1>
            <div class=""><?php vexa_breadcrumbs(); ?></div>
        </div>
        <div class="custom_blur -z-10"></div>
    </section>

    <section class=" py-16 md:py-24 max-w-[1440px] mx-auto">
        <?php if (has_post_thumbnail()) : ?>
            <div class="h-[500px] rounded-[20px] overflow-hidden">
                <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
            </div>
        <?php endif; ?>
    </section>


    <!-- Content -->
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px] py-12 lg:mb-64 mb-32">
        <div class="max-w-[500px] my-10 mx-auto text-center">
            <div class="relative inline-block">
                <span
                        aria-hidden="true"
                        class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-2
                       w-14 h-14 rounded-full
                       bg-gradient-to-br from-cyan-400 via-orange-400 to-rose-500 z-0">
              </span>
                <h2 class="relative z-10 text-white text-3xl md:text-4xl font-bold font-['Philosopher'] leading-tight">
                    Corporate identity
                </h2>
            </div>
        </div>
        <div class="max-w-[900px] mx-auto text-[#6A7C99] lg:mb-32">
            <?php the_content(); ?>
        </div>

        <div class="max-w-[500px] my-20 mx-auto text-center">
            <div class="relative inline-block">
                <span
                        aria-hidden="true"
                        class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-2
                       w-14 h-14 rounded-full
                       bg-gradient-to-br from-cyan-400 via-orange-400 to-rose-500 z-0">
              </span>
                <h2 class="relative z-10 text-white text-3xl md:text-4xl font-bold font-['Philosopher'] leading-tight">
                    Team of Experts
                </h2>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 lg:mb-32">
            <?php
            $q = new WP_Query([
                    'post_type' => 'team',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
            ]);

            if ($q->have_posts()) :
                while ($q->have_posts()) : $q->the_post();

                    // Ảnh đại diện
                    $img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                    if (!$img_url) {
                        $img_url = 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=360&fit=crop'; // nếu cần
                    }

                    // Chức danh (thử nhiều key để không phải đổi ACF)
                    $role = get_post_meta(get_the_ID(), 'role', true);
                    if (!$role) $role = get_post_meta(get_the_ID(), 'job_title', true);
                    if (!$role) $role = get_post_meta(get_the_ID(), 'position', true);

                    // Social (nếu có ACF/meta)
                    $facebook = get_post_meta(get_the_ID(), 'facebook', true);
                    $linkedin = get_post_meta(get_the_ID(), 'linkedin', true);
                    $twitter = get_post_meta(get_the_ID(), 'twitter', true);
                    ?>
                    <div class="group relative overflow-hidden rounded-3xl shadow-2xl transition-transform duration-300">
                        <div class="aspect-[3/4] relative">
                            <img src="<?php echo esc_url($img_url); ?>"
                                 alt="<?php echo esc_attr(get_the_title()); ?>"
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-red-600/90 via-red-600/40 to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <h3 class="text-2xl font-bold mb-1"><?php the_title(); ?></h3>
                                <?php if ($role): ?>
                                    <p class="text-sm text-gray-100 mb-4"><?php echo esc_html($role); ?></p>
                                <?php endif; ?>
                                <div class="flex space-x-3">
                                    <?php if ($facebook): ?>
                                        <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener"
                                           class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($linkedin): ?>
                                        <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener"
                                           class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($twitter): ?>
                                        <a href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener"
                                           class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                            </svg>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else:
                // Nếu chưa có bài team, tạm không render gì để giữ nguyên layout
            endif;
            ?>

        </div>
        <div class="text-left my-20">
            <div class="relative inline-block">
                <span
                        aria-hidden="true"
                        class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-2
                       w-14 h-14 rounded-full
                       bg-gradient-to-br from-cyan-400 via-orange-400 to-rose-500 z-0">
              </span>
                <h2 class="relative z-10 text-white text-3xl md:text-4xl font-bold font-['Philosopher'] leading-tight">
                    Team of Experts
                </h2>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16 lg:mb-32">
            <!-- Left Column -->
            <div class="space-y-6 lg:space-y-8">
                <!-- Feature 1 -->
                <div class="flex items-start gap-4 group">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-8 h-8 rounded-full border-2 border-red-500 flex items-center justify-center group-hover:bg-red-500 transition-colors duration-300">
                            <svg class="w-4 h-4 text-red-500 group-hover:text-white transition-colors duration-300"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-400 text-base sm:text-lg leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                        Free consultation and brief preparation
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="flex items-start gap-4 group">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-8 h-8 rounded-full border-2 border-red-500 flex items-center justify-center group-hover:bg-red-500 transition-colors duration-300">
                            <svg class="w-4 h-4 text-red-500 group-hover:text-white transition-colors duration-300"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-400 text-base sm:text-lg leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                        We provide support to all our customers 24/7
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="flex items-start gap-4 group">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-8 h-8 rounded-full border-2 border-red-500 flex items-center justify-center group-hover:bg-red-500 transition-colors duration-300">
                            <svg class="w-4 h-4 text-red-500 group-hover:text-white transition-colors duration-300"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-400 text-base sm:text-lg leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                        Personal offers and discounts for clients
                    </p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6 lg:space-y-8">
                <!-- Feature 4 -->
                <div class="flex items-start gap-4 group">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-8 h-8 rounded-full border-2 border-red-500 flex items-center justify-center group-hover:bg-red-500 transition-colors duration-300">
                            <svg class="w-4 h-4 text-red-500 group-hover:text-white transition-colors duration-300"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-400 text-base sm:text-lg leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                        We always complete the work on time
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="flex items-start gap-4 group">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-8 h-8 rounded-full border-2 border-red-500 flex items-center justify-center group-hover:bg-red-500 transition-colors duration-300">
                            <svg class="w-4 h-4 text-red-500 group-hover:text-white transition-colors duration-300"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-400 text-base sm:text-lg leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                        You can come to our office for a discussion
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="flex items-start gap-4 group">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-8 h-8 rounded-full border-2 border-red-500 flex items-center justify-center group-hover:bg-red-500 transition-colors duration-300">
                            <svg class="w-4 h-4 text-red-500 group-hover:text-white transition-colors duration-300"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                      d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-400 text-base sm:text-lg leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                        We employ only highly qualified specialists
                    </p>
                </div>
            </div>
        </div>
        <div class="text-left my-20">
            <div class="relative inline-block">
                <span
                        aria-hidden="true"
                        class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-2
                       w-14 h-14 rounded-full
                       bg-gradient-to-br from-cyan-400 via-orange-400 to-rose-500 z-0">
              </span>
                <h2 class="relative z-10 text-white text-3xl md:text-4xl font-bold font-['Philosopher'] leading-tight">
                    Example of Works
                </h2>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5">
            <?php
            $q = new WP_Query([
                    'post_type'      => 'portfolio',
                    'posts_per_page' => 4,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
            ]);

            $gradients = [
                    'from-pink-400/80 via-pink-300/40 to-transparent',
                    'from-orange-600/70 via-red-500/40 to-transparent',
                    'from-blue-600/80 via-purple-500/50 to-pink-500/30',
                    'from-green-400/60 via-blue-300/30 to-transparent',
            ];

            if ($q->have_posts()) :
                $i = 0;
                while ($q->have_posts()) : $q->the_post();
                    $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$img) {
                        $img = get_template_directory_uri() . '/vexa/assets/images/placeholder-600x450.jpg';
                    }

                    $subtitle = get_post_meta(get_the_ID(), 'subtitle', true);
                    if (!$subtitle) $subtitle = has_excerpt() ? get_the_excerpt() : '';

                    $brand_text = get_post_meta(get_the_ID(), 'brand_text', true);

                    $gradient_class = get_post_meta(get_the_ID(), 'gradient_class', true);
                    if (!$gradient_class) {
                        $gradient_class = $gradients[$i % count($gradients)];
                    }
                    ?>
                    <div class="group relative overflow-hidden rounded-3xl aspect-[4/3] cursor-pointer transition-transform duration-500 hover:scale-105 hover:z-10">
                        <img src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t <?php echo esc_attr($gradient_class); ?> mix-blend-multiply"></div>

                        <?php if ($brand_text) : ?>
                            <!-- Kiểu brand chữ lớn ở giữa (như CÉLINE) -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-white text-6xl font-bold tracking-widest" style="text-shadow: 2px 2px 20px rgba(0,0,0,0.5)">
                                    <?php echo esc_html($brand_text); ?>
                                </div>
                            </div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-black/50">
                                <div class="text-center text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <h3 class="text-2xl font-bold mb-2"><?php the_title(); ?></h3>
                                    <?php if ($subtitle): ?><p class="text-sm"><?php echo esc_html($subtitle); ?></p><?php endif; ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <!-- Kiểu hover hiện tiêu đề + mô tả -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <div class="text-center text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    <h3 class="text-2xl font-bold mb-2"><?php the_title(); ?></h3>
                                    <?php if ($subtitle): ?><p class="text-sm"><?php echo esc_html($subtitle); ?></p><?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
    </div>


<?php get_footer();
