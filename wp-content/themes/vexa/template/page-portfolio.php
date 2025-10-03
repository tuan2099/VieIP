<?php

/**
 * Template name: Portfolio
 * @author : Hoang Anh Tuan
 */

get_header();
$taxonomy = 'portfolio_type';
$terms = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
]);

$active = 'all';
if (is_tax($taxonomy)) {
    $qo = get_queried_object();
    if ($qo && !is_wp_error($qo)) $active = $qo->slug;
}
?>

<style>
    .masonry-container {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 1.5rem;
    }

    @media (min-width: 640px) {
        .masonry-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .masonry-container {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .masonry-column {
        display: flex;
        flex-direction: column;
    }

    .masonry-item {
        opacity: 1;
        transition: all 0.5s ease;
    }

    .masonry-item.hidden {
        opacity: 0;
        transform: scale(0.8);
        height: 0;
        margin: 0;
        overflow: hidden;
    }

    .filter-btn.active {
        background: linear-gradient(135deg, #ec4899, #8b5cf6);
        box-shadow: 0 4px 15px rgba(236, 72, 153, 0.4);
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(12px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeOutDown {
        from { opacity: 1; transform: translateY(0); }
        to   { opacity: 0; transform: translateY(12px); }
    }

    .fade-in-up   { animation: fadeInUp .35s ease both; }
    .fade-out-down{ animation: fadeOutDown .25s ease both; }

    /* Mượt hơn và tối ưu */
    .masonry-item { will-change: transform, opacity; }
    @media (prefers-reduced-motion: reduce) {
        .fade-in-up, .fade-out-down { animation: none !important; }
    }
</style>

<!-- Header Section -->
<?php get_template_part('template-parts/header-section'); ?>

<div class="max-w-[1440px] mx-auto p-5 lg:p-0">
    <!-- Filter Navigation -->
    <div class="flex justify-center mb-12">
        <nav class="inline-flex flex-wrap items-center gap-1 bg-gray-900 bg-opacity-50 backdrop-blur-sm rounded-full border-2 border-purple-500 p-2">
            <button class="filter-btn active px-6 py-2 rounded-full text-white font-medium transition-all duration-300"
                    data-filter="all">
                All
            </button>
            <?php if (!empty($terms)): ?><span class="text-white">•</span><?php endif; ?>

            <?php $count = count($terms);
            foreach ($terms as $i => $term): ?>
                <button
                        class="filter-btn <?php echo($active === $term->slug ? 'active ' : ''); ?>px-4 py-2 rounded-full text-white font-medium hover:bg-white hover:bg-opacity-10 transition-all duration-300"
                        data-filter="<?php echo esc_attr($term->slug); ?>">
                    <?php echo esc_html($term->name); ?>
                </button>
                <?php if ($i < $count - 1): ?><span class="text-white">•</span><?php endif; ?>
            <?php endforeach; ?>
        </nav>
    </div>

    <div class="masonry-container lg:mb-64 mb-32">
        <?php
        $pt = 'portfolio';
        $tax = 'portfolio_type';

        $q = new WP_Query([
                'post_type' => $pt,
                'posts_per_page' => -1,
                'ignore_sticky_posts' => true,
                'no_found_rows' => true,
                'orderby' => 'date',
                'order' => 'DESC',
        ]);

        $cols = [[], [], [], []];
        $i = 0;
        if ($q->have_posts()) {
            while ($q->have_posts()) {
                $q->the_post();
                $cols[$i % 4][] = get_the_ID();
                $i++;
            }
            wp_reset_postdata();
        }

        $heights = ['h-80', 'h-96', 'h-72', 'h-96', 'h-72', 'h-80'];
        ?>

        <?php foreach ($cols as $colIdx => $ids): ?>
            <!-- Column <?php echo $colIdx + 1; ?> -->
            <div class="masonry-column">
                <?php foreach ($ids as $k => $post_id):
                    $img = get_the_post_thumbnail_url($post_id, 'large') ?: 'https://via.placeholder.com/600x800?text=Portfolio';
                    $title = get_the_title($post_id);
                    $link = get_permalink($post_id);

                    $terms = wp_get_post_terms($post_id, $tax);
                    $first = (!is_wp_error($terms) && !empty($terms)) ? $terms[0] : null;
                    $term_slug = $first ? $first->slug : 'uncategorized';
                    $term_name = $first ? $first->name : '';

                    $h = $heights[($k + $colIdx) % count($heights)];
                    ?>
                    <div class="masonry-item group cursor-pointer mb-6"
                         data-category="<?php echo esc_attr($term_slug); ?>">
                        <a href="<?php echo esc_url($link); ?>" class="block">
                            <div class="relative overflow-hidden rounded-3xl <?php echo esc_attr($h); ?> transform transition-all duration-500 hover:scale-105 hover:shadow-2xl bg-cover bg-center"
                                 style="background-image: url('<?php echo esc_url($img); ?>');">
                                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-70 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <h3 class="text-white text-xl font-bold mb-2"><?php echo esc_html($title); ?></h3>
                                    <?php if ($term_name): ?>
                                        <p class="text-gray-300 text-sm"><?php echo esc_html($term_name); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<script>
    const filterBtns = document.querySelectorAll('.filter-btn');
    const columns    = Array.from(document.querySelectorAll('.masonry-column'));
    const allItems   = Array.from(document.querySelectorAll('.masonry-item')); // thứ tự gốc

    // Hiệu ứng vào
    function animateIn(el, delayMs = 0) {
        el.classList.remove('hidden');
        el.style.animation = 'fadeInUp .35s ease both';
        el.style.animationDelay = delayMs + 'ms';
        el.addEventListener('animationend', () => {
            el.style.animation = '';
            el.style.animationDelay = '';
        }, { once: true });
    }

    // Render danh sách item vào 4 cột (trái → phải)
    function renderToColumns(list) {
        columns.forEach(col => col.innerHTML = '');
        list.forEach((el, idx) => {
            columns[idx % columns.length].appendChild(el);
            animateIn(el, (idx % columns.length) * 40); // stagger nhẹ theo cột
        });
    }

    // Lọc theo slug
    function applyFilter(filter) {
        const matched = (filter === 'all')
            ? allItems
            : allItems.filter(el => {
                const one = el.getAttribute('data-category') || '';
                const many = (el.getAttribute('data-cats') || '').split(/\s+/);
                return one === filter || many.includes(filter);
            });

        renderToColumns(matched);
    }

    // Nút filter
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            applyFilter(filter);
        });
    });

    // (tuỳ chọn) gọi 1 lần để “nén” lại ngay từ đầu
    // applyFilter('all');
</script>



<?php
get_footer(); ?>
