<?php

/**
 * Template name: Blog
 * @author : Hoang Anh Tuan
 */

get_header();
?>
    <section class="py-20 relative"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
                     background-repeat: no-repeat;">
        <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
            <h1 class="text-[65px] text-white font-['Philosopher']"><?php the_title(); ?></h1>
            <div class="font-['Lexend']"><?php vexa_breadcrumbs(); ?></div>
        </div>
        <div class="custom_blur -z-10"></div>
    </section>

    <!-- Content -->
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px] py-12 mb-64">
        <?php
        $q = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                'ignore_sticky_posts' => true,
        ]);

        if ($q->have_posts()) :
            while ($q->have_posts()) : $q->the_post();

                $permalink = get_permalink();
                $title = get_the_title();
                $date_iso = get_the_date('c');
                $date_txt = get_the_date('F j, Y');
                $author = get_the_author();

                // Ảnh đại diện (fallback nếu chưa có)
                if (has_post_thumbnail()) {
                    $img_html = get_the_post_thumbnail(get_the_ID(), 'full', [
                            'class' => 'w-full h-[420px] md:h-[520px] lg:h-[560px] object-cover rounded-[32px] shadow-2xl',
                            'alt' => esc_attr($title),
                            'loading' => 'lazy',
                    ]);
                } else {
                    $img_html = '<img src="https://picsum.photos/1600/900" alt="' . esc_attr($title) . '" class="w-full h-[420px] md:h-[520px] lg:h-[560px] object-cover rounded-[32px] shadow-2xl" loading="lazy">';
                }
                ?>

                <section class="relative overflow-hidden">
                    <div class="px-10 md:px-0 py-20 md:py-28">
                        <div class="relative">

                            <!-- Ảnh lớn -->
                            <div class="ml-auto max-w-5xl">
                                <a href="<?php echo esc_url($permalink); ?>"
                                   aria-label="<?php echo esc_attr($title); ?>">
                                    <?php echo $img_html; ?>
                                </a>
                            </div>

                            <!-- Card overlay -->
                            <article
                                    class="absolute left-0 bottom-0 translate-y-1/3 md:translate-y-1/3 lg:-translate-y-24 w-full max-w-lg max-h-lg">
                                <div class="rounded-[28px] md:rounded-[32px] p-8 md:p-12 text-white
                                bg-[radial-gradient(120%_120%_at_0%_0%,#13b38b_0%,#e94b35_70%,#e63b7a_100%)]
                                shadow-xl">
                                    <h2 class="text-3xl md:text-[42px] font-semibold leading-tight font-['Philosopher']">
                                        <a href="<?php echo esc_url($permalink); ?>" class="hover:opacity-90">
                                            <?php echo esc_html($title); ?>
                                        </a>
                                    </h2>

                                    <div class="mt-6 space-y-1 font-['Philosopher']">
                                        <p class="text-sm/6 text-white/80 font-['Lexend']">
                                            <time datetime="<?php echo esc_attr($date_iso); ?>"><?php echo esc_html($date_txt); ?></time>
                                        </p>
                                        <p class="text-sm font-bold tracking-wide text-[black] font-['Lexend']">
                                            BY <?php echo esc_html($author); ?></p>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>
                </section>

            <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 ">
            <div class="lg:col-span-2 ">
                <?php
                $args = [
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'ignore_sticky_posts' => 1,
                ];

                $q = new WP_Query($args);

                if ($q->have_posts()) :
                    while ($q->have_posts()) : $q->the_post();

                        $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        if (!$img) {
                            // Fallback khi không có thumbnail
                            $img = 'https://picsum.photos/768';
                        }

                        $excerpt = has_excerpt()
                                ? get_the_excerpt()
                                : wp_trim_words(wp_strip_all_tags(get_the_content()), 32, ' …');
                        ?>

                        <article
                                class="bg-[#1a1a22] mb-[30px] rounded-3xl shadow-xl ring-1 ring-white/5 overflow-hidden">
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
                                <!-- Image -->
                                <figure class="col-span-2">
                                    <a href="<?php the_permalink(); ?>"
                                       class="block rounded-tl-[20px] rounded-bl-[20px] overflow-hidden">
                                        <img
                                                src="<?php echo esc_url($img); ?>"
                                                alt="<?php echo esc_attr(get_the_title()); ?>"
                                                class="w-full h-72 md:h-[420px] object-cover"/>
                                    </a>
                                </figure>

                                <!-- Content -->
                                <div class="flex flex-col col-span-3 justify-center p-6 md:p-10">
                                    <p class="text-sm font-medium text-[#e43256] font-['Lexend']">
                                        By Posted On: <?php echo esc_html(get_the_author()); ?>
                                    </p>

                                    <h2 class="mt-3 text-3xl md:text-[30px] font-semibold leading-tight">
                                        <a href="<?php the_permalink(); ?>"
                                           class="hover:underline hover:text-[#D35135] transition font-['Philosopher']">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                    <p class="mt-4 text-[#6a7c99] font-medium leading-relaxed font-['Lexend']">
                                        <?php echo esc_html($excerpt); ?>
                                    </p>

                                    <p class="mt-6 text-sm font-medium text-[#FFFFFFB0] font-['Lexend']">
                                        Posted On: <span
                                                class="font-medium text-[#FFFFFFB0] font-['Lexend']"><?php echo esc_html(get_the_date('M d, Y')); ?></span>
                                    </p>
                                </div>
                            </div>
                        </article>

                    <?php
                    endwhile;

                    // Phân trang (tuỳ chọn)
                    // the_posts_pagination();

                    wp_reset_postdata();
                else :
                    echo '<p class="text-slate-300">Chưa có bài viết.</p>';
                endif;
                ?>
            </div>

            <aside class="lg:col-span-1">
                <img class="w-full object-cover"
                     src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/336-x-280-ad.jpg"/>
                <section class="max-w-6xl mx-auto py-12">
                    <div class="">
                        <?php
                        $q = new WP_Query([
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'ignore_sticky_posts' => true,
                        ]);

                        if ($q->have_posts()) :
                            while ($q->have_posts()) : $q->the_post(); ?>
                                <article
                                        class="bg-[#1a1a22] my-[25px] rounded-3xl overflow-hidden shadow-lg/30 shadow-black/20 hover:shadow-black/30 transition-shadow">
                                    <a href="<?php the_permalink(); ?>" class="block">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large', [
                                                    'class' => 'w-full h-64 object-cover',
                                                    'alt' => esc_attr(get_the_title()),
                                                    'loading' => 'lazy',
                                            ]);
                                        } else {
                                            echo '<img src="https://picsum.photos/800/500?random=' . esc_attr(get_the_ID()) . '" class="w-full h-64 object-cover" alt="">';
                                        }
                                        ?>
                                    </a>

                                    <div class="p-6 md:p-7">
                                        <h3 class="text-xl md:text-2xl font-semibold leading-snug">
                                            <a href="<?php the_permalink(); ?>"
                                               class="text-white hover:underline hover:text-[#D35135] transition font-['Philosopher']">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <p class="mt-4 text-sm text-white/70 font-['Lexend']">
                                            <?php echo esc_html(get_the_date('F j, Y')); ?>
                                        </p>
                                    </div>
                                </article>
                            <?php endwhile;
                            wp_reset_postdata();
                        else: ?>
                            <p>Chưa có bài viết.</p>
                        <?php endif; ?>
                    </div>
                </section>
            </aside>
        </div>
    </div>

<?php
get_footer();