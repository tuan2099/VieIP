<?php
$page_id = get_queried_object_id();

$sec = get_field('our_team_sections', $page_id);

$subtitle = isset($sec['subtitle']) ? $sec['subtitle'] : '';
$title = isset($sec['title']) ? $sec['title'] : '';
$desc = isset($sec['desc']) ? $sec['desc'] : '';
$button = isset($sec['button']) ? $sec['button'] : '';
$button_link = isset($sec['button_link']) ? $sec['button_link'] : '';
?>


<section class="py-20">
    <div class="container mx-auto px-6 md:px-6 max-w-[1440px]">
        <div class="">
            <!-- Team Members -->
            <div>
                <div class="grid sm:grid-cols-3 gap-6">
                    <div class="flex flex-col justify-center">
                        <p
                                class="text-sm font-semibold text-[#E43256] tracking-wide font-['Lexend']"
                        >
                            <?php echo esc_html($subtitle); ?>
                        </p>
                        <h1 class="mt-3 text-3xl md:text-4xl font-bold leading-tight relative">
                            <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[5%] lg:-top-[7%] -top-[20%]"></div>
                            <span
                                    class="font-['Philosopher']"
                            >
                            <?php echo esc_html($title); ?>
                        </span>
                        </h1>
                        <p
                                class="mt-6 text-base text-gray-400 leading-relaxed max-w-md font-['Lexend']"
                        >
                            <?php echo wp_kses_post(nl2br($desc)); ?>
                        </p>
                    </div>
                    <!-- Member -->
                    <?php
                    $q = new WP_Query([
                            'post_type' => 'team',
                            'posts_per_page' => -1,
                            'orderby' => ['menu_order' => 'ASC', 'date' => 'DESC'],
                            'order' => 'ASC',
                    ]);

                    if ($q->have_posts()) : ?>
                        <?php while ($q->have_posts()) : $q->the_post();

                            $thumb_id = get_post_thumbnail_id();
                            if (!$thumb_id && function_exists('get_field')) {
                                $photo = get_field('photo');
                                $thumb_id = is_array($photo) ? ($photo['ID'] ?? 0) : $photo;
                            }
                            if ($thumb_id) {
                                $img_html = wp_get_attachment_image($thumb_id, 'large', false, [
                                        'class' => 'w-full h-56 md:h-96 object-cover',
                                        'alt' => esc_attr(get_the_title()),
                                        'loading' => 'lazy',
                                ]);
                            } else {
                                $seed = get_the_ID();
                                $fallback = 'https://picsum.photos/seed/' . $seed . '/600/345';
                                $img_html = '<img src="' . esc_url($fallback) . '" alt="' . esc_attr(get_the_title()) .
                                        '" class="w-full h-56 md:h-96 object-cover" loading="lazy">';
                            }

                            // ACF fields
                            $position = function_exists('get_field') ? (get_field('position') ?: '') : '';
                            $facebook = function_exists('get_field') ? (get_field('facebook') ?: '') : '';
                            $linkedin = function_exists('get_field') ? (get_field('linkedin') ?: '') : '';
                            $twitter = function_exists('get_field') ? (get_field('twitter') ?: '') : '';
                            ?>

                            <article class="relative overflow-hidden rounded-2xl group">
                                <?= $img_html; ?>

                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-red-600/80 to-transparent 
                                            opacity-0 group-hover:opacity-100 transition-opacity duration-500 
                                            flex flex-col justify-end p-6 text-white">
                                    <div>
                                        <h3 class="font-semibold text-lg font-['Philosopher']"><?php the_title(); ?></h3>
                                        <?php if ($position): ?>
                                            <p class="text-sm"><?php echo esc_html($position); ?></p>
                                        <?php endif; ?>
                                    </div>

                                    <?php if ($facebook || $linkedin || $twitter): ?>
                                        <div class="flex space-x-4 mt-3">
                                            <?php if ($facebook): ?>
                                                <a href="<?php echo esc_url($facebook); ?>" aria-label="Facebook"
                                                   class="hover:text-gray-200" target="_blank" rel="noopener">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                         aria-hidden="true">
                                                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.66 9.13 8.44 9.88v-6.99H8.9v-2.89h1.54V9.8c0-1.52.9-2.36 2.28-2.36.66 0 1.35.12 1.35.12v1.49h-.76c-.75 0-.98.47-.98.96v1.15h1.67l-.27 2.89h-1.4v6.99C18.34 21.13 22 17 22 12z"/>
                                                    </svg>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($linkedin): ?>
                                                <a href="<?php echo esc_url($linkedin); ?>" aria-label="LinkedIn"
                                                   class="hover:text-gray-200" target="_blank" rel="noopener">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                         aria-hidden="true">
                                                        <path d="M4.98 3.5C4.98 4.88 3.86 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8h4V23h-4V8zm7 0h3.84v2.05h.05c.54-1.02 1.86-2.1 3.83-2.1 4.1 0 4.86 2.7 4.86 6.2V23h-4v-6.6c0-1.58-.03-3.62-2.2-3.62-2.2 0-2.53 1.72-2.53 3.5V23h-4V8z"/>
                                                    </svg>
                                                </a>
                                            <?php endif; ?>
                                            <?php if ($twitter): ?>
                                                <a href="<?php echo esc_url($twitter); ?>" aria-label="Twitter/X"
                                                   class="hover:text-gray-200" target="_blank" rel="noopener">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"
                                                         aria-hidden="true">
                                                        <path d="M21.53 2.5 13.9 11.1l7.86 10.4h-3.4L12.9 13.9 7.2 21.5H2.5l8.2-9.9L3.3 2.5h3.4l5 6.7 6.2-6.7h3.63z"/>
                                                    </svg>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </article>

                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <!-- CTA Button -->
                    <div class="mt-8 flex items-center text-center custom_bg1 rounded-2xl">
                        <a
                                href="<?php echo esc_url($button_link); ?>"
                                class="inline-flex mx-auto items-center rounded-full border-2 border-[#552ae0] px-8 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
                                aria-label="View the whole crew font-['Lexend']"
                        >
                            <?php echo esc_html($button); ?>
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="ml-2 h-4 w-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                            >
                                <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 5l7 7-7 7"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>