<?php 
    global $vexatheme_option;
    $preloader_img = get_template_directory_uri().'/assets/img/loading-1.svg' ;
?>

    
<!-- HERO CARD -->
<section aria-labelledby="hero-title" class="relative max-w-[1400px] -mt-[8%] mx-auto pb-28">
  <!-- ẢNH TRANG TRÍ: ở ngoài card -->
  <img
    src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/09/3D_Shape-1.svg"
    class="absolute left-14 -top-14 w-24 rotate-[60deg] drop-shadow-[0_12px_24px_rgba(0,0,0,.35)] pointer-events-none z-20"
    alt=""
    loading="lazy"
    width="96"
    height="96"
    aria-hidden="true"
  />

  <!-- CARD -->
  <div class="relative rounded-[35px] overflow-hidden z-10 max-w-[1250px] w-full mx-auto">
    <!-- nền gradient (bo góc riêng để không lòi ra khi overflow-visible) -->
    <div class="absolute inset-0 rounded-[35px] bg-gradient-to-br from-cyan-400 via-orange-400 to-rose-500"></div>

    <!-- nội dung -->
    <div class="relative px-6 sm:px-10 lg:px-14 pt-16 sm:pt-24 pb-8 sm:pb-10 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-0 items-center">
      <h2 id="hero-title" class="max-w-96 text-white text-3xl sm:text-4xl font-bold leading-[1.2] sm:leading-[52px]">
        Build Your Ideal<br />Brand Identity Today
      </h2>

      <form class="mt-6 lg:mt-8 relative" action="#" method="post" aria-label="Email sign-up">
        <label for="hero-email" class="sr-only">Email address</label>
        <input
          id="hero-email"
          name="email"
          type="email"
          inputmode="email"
          autocomplete="email"
          required
          class="w-full h-14 sm:h-16 pl-6 sm:pl-7 pr-36 sm:pr-40 rounded-[35px] bg-white shadow-inner ring-1 ring-slate-300 placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Enter Your Email Address"
        />
        <button
          type="submit"
          class="absolute right-1 top-1 h-12 sm:h-14 px-10 sm:px-[60px] rounded-[35px] bg-gradient-to-b from-[#451fc2] to-[#5d30ee] text-white font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        >
          Send
        </button>
      </form>
    </div>
  </div>
</section>

<!-- FOOTER TOP (blue section) -->
<footer class="max-w-[1440px] mx-auto pb-9 px-6 sm:px-9" role="contentinfo" aria-labelledby="footer-title">
  <div class="max-w-[1400px] mx-auto pb-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-6">
    <!-- LEFT big column -->
    <section class="space-y-6 lg:col-span-2" aria-labelledby="footer-cta-title">
      <a
        href="<?php echo esc_url( home_url( '/' ) ); ?>"
        class="text-2xl font-bold text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
      >
        <img class="w-[150px]" src="<?php if(is_page() && !empty($vexatheme_meta['custom_header'])){ echo esc_url($vexatheme_meta['main_logo']['url']); } else{ echo esc_url($vexatheme_option['main_logo']['url']); }?>" alt="<?php echo esc_attr(get_bloginfo ('name')); ?>">
      </a>

      <h3 id="footer-cta-title" class="text-[#7c91b3] text-2xl sm:text-3xl font-bold font-['Philosopher'] leading-9 sm:leading-10">
        We’re Ready to Grow With You. Talk<br/>to an Expert Today.
      </h3>

      <div class="flex items-center gap-4 flex-wrap">
        <a href="#contact" class="inline-flex items-center h-12 px-12 rounded-[35px] bg-gradient-to-b from-[#451fc2] to-[#5d30ee] text-white text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" title="Get in touch">
          GET IN TOUCH <span class="ml-2 text-base" aria-hidden="true">&rsaquo;</span>
        </a>

        <span class="h-8 w-2 bg-blue-300" aria-hidden="true"></span>

        <div class="flex items-center gap-3">
          <i class="fa-solid fa-phone w-6 h-6 text-rose-500"></i>
          <div class="leading-tight">
            <div class="text-[#7C91B3C2] text-xs">CALL US NOW!</div>
            <a href="tel:5666787813" class="text-[#7c91b3] text-base font-bold" title="Call 566-678-7813"><?php echo esc_html($vexatheme_option['telphone']); ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Company -->
    <nav aria-labelledby="footer-company-title" class="space-y-4">
      <h4 id="footer-company-title" class="text-[#7c91b3] text-lg font-bold font-['Philosopher']">Company</h4>

      <?php
      wp_nav_menu([
        'theme_location' => 'footer',
        'container'      => false,
        'menu_class'     => 'space-y-3 pl-3 relative',
        'fallback_cb'    => false,
      ]);
      ?>
    </nav>

    <!-- Services -->
    <nav aria-labelledby="footer-services-title" class="space-y-4">
      <h4 id="footer-services-title" class="text-[#7c91b3] text-lg font-bold font-['Philosopher']">Services</h4>

      <ul class="space-y-3 pl-3">
        <?php
        $q = new WP_Query([
          'post_type'           => 'service',
          'posts_per_page'      => 5,          
          'ignore_sticky_posts' => true,
          'orderby'             => 'date',
          'order'               => 'DESC',
        ]);

        if ( $q->have_posts() ) :
          while ( $q->have_posts() ) : $q->the_post(); ?>
            <li class="relative pl-3">
              <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
              <a href="<?php echo esc_url( get_permalink() ); ?>"
                class="text-[#7C91B3C2] hover:text-slate-700 focus:outline-none focus:underline">
                <?php echo esc_html( get_the_title() ); ?>
              </a>
            </li>
          <?php endwhile;
          wp_reset_postdata();
        else : ?>
          <li class="relative pl-3">
            <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
            <span class="text-slate-500/80">Chưa có dịch vụ.</span>
          </li>
        <?php endif; ?>
      </ul>
    </nav>


    <!-- Latest Articles -->
    <section aria-labelledby="footer-latest-title" class="space-y-4">
      <h4 id="footer-latest-title" class="text-[#7c91b3] text-lg font-bold font-['Philosopher']">
        Latest Articles
      </h4>

      <?php
      // Lấy 2 bài mới nhất (đổi số ở posts_per_page nếu cần)
      $latest = new WP_Query([
        'post_type'           => 'post',
        'posts_per_page'      => 2,
        'ignore_sticky_posts' => true,
      ]);

      if ( $latest->have_posts() ) :
        while ( $latest->have_posts() ) : $latest->the_post();
          $excerpt = get_the_excerpt();
        if ( ! $excerpt ) {
          $excerpt = wp_strip_all_tags( get_the_content() );
        }
        // Giới hạn 30 từ
        $excerpt = wp_trim_words( $excerpt, 15, '…' );
      ?>
        <article class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <h5 class="sr-only"><?php the_title(); ?></h5>

          <a href="<?php echo esc_url( get_permalink() ); ?>"
            class="underline text-[#7C91B3C2] hover:text-slate-800 text-justify block">
            <?php echo esc_html( $excerpt ); ?>
          </a>

          <div class="mt-2 text-xs text-slate-500/70">
            <time datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
              <?php echo esc_html( get_the_date() ); ?>
            </time>
          </div>
        </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <article class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <h5 class="sr-only">No articles</h5>
          <span class="text-slate-500/80">Chưa có bài viết.</span>
        </article>
      <?php endif; ?>
    </section>


  <!-- Structured Data: Organization with contact -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Your Company",
    "url": "https://example.com",
    "telephone": "+1-566-678-7813"
  }
  </script>
</footer>

<!-- FOOTER BOTTOM -->
<div class="max-w-[1440px] mx-auto px-6 sm:px-9 bg-black" role="contentinfo">
    <div class="max-w-[1440px] mx-auto">
        <div class="py-5 text-slate-300 text-xs sm:text-sm text-center">
          <?php echo wp_kses_post($vexatheme_option['_copyright']); ?>
        </div>
    </div>
</div>
