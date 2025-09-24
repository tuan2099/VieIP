<?php 

/**
 * Template name: Blog
 * @author : Hoang Anh Tuan
 */

get_header();
?>
<section class="py-20 relative" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
    background-repeat: no-repeat;">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
        <h1 class="text-[65px] text-white"><?php the_title(); ?></h1>
        <div class=""><?php vexa_breadcrumbs(); ?></div>
    </div>
    <div class="custom_blur -z-10"></div>
</section>

<!-- Content -->
<div class="container mx-auto px-4 md:px-6 max-w-[1440px] py-12 mb-64">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 "> 
        <div class="lg:col-span-2 ">
            <?php
                $args = [
                'post_type'           => 'post',
                'posts_per_page'      => 6,
                'ignore_sticky_posts' => 1,
                ];

                $q = new WP_Query($args);

                if ( $q->have_posts() ) :
                while ( $q->have_posts() ) : $q->the_post();

                    $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if ( ! $img ) {
                    // Fallback khi không có thumbnail
                    $img = 'https://picsum.photos/768';
                    }

                    $excerpt = has_excerpt()
                    ? get_the_excerpt()
                    : wp_trim_words( wp_strip_all_tags( get_the_content() ), 32, ' …' );
                    ?>
                    
                    <article class="bg-[#1a1a22] mb-[30px] rounded-3xl shadow-xl ring-1 ring-white/5 overflow-hidden">
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-0">
                        <!-- Image -->
                        <figure class="col-span-2">
                            <a href="<?php the_permalink(); ?>" class="block rounded-tl-[20px] rounded-bl-[20px] overflow-hidden">
                            <img
                                src="<?php echo esc_url($img); ?>"
                                alt="<?php echo esc_attr(get_the_title()); ?>"
                                class="w-full h-72 md:h-[420px] object-cover" />
                            </a>
                        </figure>

                        <!-- Content -->
                        <div class="flex flex-col col-span-3 justify-center p-6 md:p-10">
                            <p class="text-sm font-medium text-[#e43256]">
                            By Posted On: <?php echo esc_html( get_the_author() ); ?>
                            </p>

                            <h2 class="mt-3 text-3xl md:text-[30px] font-semibold leading-tight">
                                <a href="<?php the_permalink(); ?>" class="hover:underline hover:text-[#D35135] transition">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <p class="mt-4 text-[#6a7c99] font-medium leading-relaxed">
                            <?php echo esc_html( $excerpt ); ?>
                            </p>

                            <p class="mt-6 text-sm font-medium text-[#FFFFFFB0]">
                            Posted On: <span class="font-medium text-[#FFFFFFB0]"><?php echo esc_html( get_the_date('M d, Y') ); ?></span>
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
            <img src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/336-x-280-ad.jpg"/>
        </aside>
    </div>
</div>

<?php 
get_footer();