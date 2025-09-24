<?php 
$services = get_field('services_section');

$sub_title    = $services['subtitle']    ?? '';
$title        = $services['title']        ?? '';
?>

<section class="py-20">
  <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
    <!-- Section Header -->
    <header class="mb-12">
      <p
        class="text-sm font-semibold text-[#E43256] tracking-wide font-['Lexend']"
      >
        <?php echo esc_html( $sub_title ); ?>
      </p>
      <h1 class="font-['Philosopher'] mt-3 text-3xl md:text-4xl font-bold leading-tight relative">
        <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[1%] -top-[15%]"></div>
        <span
          class=""
        >
          <?php echo esc_html( $title ); ?>
        </span>
      </h1>
    </header>

    <!-- Services Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-6">
      <?php
        $args = array(
          'post_type'      => 'service',
          'posts_per_page' => 6,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
      ?>
          <a href="<?php the_permalink(); ?>" class="block group">
            <article
              class="relative overflow-hidden rounded-2xl bg-[#15151f] 
                    group border-4 border-transparent hover:border-red-500 
                    transition-all duration-500"
            >
              <!-- Background Image -->
              <?php if ($thumbnail): ?>
                <img
                  src="<?php echo esc_url($thumbnail); ?>"
                  alt="<?php the_title_attribute(); ?>"
                  class="absolute inset-0 w-full h-full object-cover opacity-0 
                        group-hover:opacity-100 transition-opacity duration-700"
                  loading="lazy"
                />
              <?php else: ?>
                <img
                  src="https://picsum.photos/600/400?random=<?php echo rand(1,1000); ?>"
                  alt="<?php the_title_attribute(); ?>"
                  class="absolute inset-0 w-full h-full object-cover opacity-0 
                        group-hover:opacity-100 transition-opacity duration-700"
                  loading="lazy"
                />
              <?php endif; ?>

              <!-- Overlay -->
              <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

              <!-- Text -->
              <div
                class="relative p-6 flex items-center h-40 md:h-56 
                      transform translate-x-0 group-hover:translate-x-[40%] 
                      transition-transform duration-700"
              >
                <h2 class="text-[24px] font-semibold text-white font-['Philosopher']">
                  <?php the_title(); ?>
                </h2>
              </div>
            </article>
            </a>
      <?php
          endwhile;
          wp_reset_postdata();
        endif;
      ?>
    </div>
  </div>
</section>