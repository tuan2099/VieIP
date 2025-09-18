<!-- Blog Section -->
 <?php
// Lấy group "blog_section" (trả về mảng các sub fields)
$blog = get_field('blog_section');

$sub_title    = $blog['sub_title']    ?? '';
$title        = $blog['title']        ?? '';
$button_title = $blog['button_title'] ?? '';
$button_link  = $blog['button_link']  ?? '';
?>
<section class="py-16">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
        <!-- Section Header -->
        <header class="flex flex-col md:flex-row md:items-center md:justify-between mb-12" >
            <div>
                <p class="text-[18px] text-pink-500 uppercase tracking-wide">
                <?php echo esc_html( $sub_title ); ?>
                </p>
                <h2 class="mt-2 text-3xl md:text-[40px] font-bold leading-tight relative">
                <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[8%] -top-[7%]"></div>
                <span class=""><?php echo esc_html( $title ); ?></span>
                </h2>
            </div>
            <div class="mt-6 md:mt-0">
                <a
                href="<?php echo $button_link ? esc_url( $button_link ) : '#'; ?>"
                class="inline-block rounded-full border-2 border-[#552ae0] px-8 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
                >
                <?php echo esc_html( $button_title ); ?>
                </a>
            </div>
        </header>

        <!-- Posts Grid -->
        <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
        <?php
            // WP_Query lấy 3 bài viết mới nhất
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                <!-- Post Card -->
                <article class="flex flex-col">
                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden rounded-2xl">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium_large', [
                                'class' => 'w-full object-cover',
                                'loading' => 'lazy'
                            ]); ?>
                        <?php else : ?>
                            <img src="https://picsum.photos/600/400" alt="<?php the_title(); ?>" class="w-full object-cover" loading="lazy" />
                        <?php endif; ?>
                    </a>
                    <div class="mt-4 flex flex-col flex-1">
                        <time datetime="<?php echo get_the_date('c'); ?>" class="text-xs font-semibold uppercase text-[#6A7C99]">
                            <?php echo get_the_date(); ?>
                        </time>
                        <h3 class="mt-2 text-lg font-semibold leading-snug">
                            <a href="<?php the_permalink(); ?>" class="hover:text-pink-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="mt-3">
                            <a href="<?php the_permalink(); ?>" aria-label="Read more about <?php the_title(); ?>" class="inline-flex items-center text-pink-400 hover:text-pink-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>