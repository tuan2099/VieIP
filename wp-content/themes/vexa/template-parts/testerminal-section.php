<section id="testimonials" aria-labelledby="testimonials-title" class="bg-[#190939]">
  <div class="max-w-[1440px] mx-auto px-6 sm:px-9">
    <div class="max-w-[1400px] mx-auto pb-36 relative">
      <!-- Head -->
      <header class="pt-24 flex flex-col items-center gap-5">
        <div class="pb-20">
          <div class="max-w-[496.56px] mx-auto flex flex-col items-center gap-6">
            <p class="text-center text-rose-500 text-lg font-normal font-['Lexend'] leading-normal">
              Testimonials
            </p>

            <div class="relative z-0">
              <span class="absolute -left-[25px] -top-[9px] w-16 h-16 bg-gradient-to-br from-cyan-400 via-orange-400 to-rose-500 rounded-full z-0 pointer-events-none"></span>

              <h2 id="testimonials-title" class="relative z-10 text-center text-white text-4xl font-bold font-['Philosopher'] leading-[52px] tracking-wide">
                Loved By Industry Leaders
              </h2>
            </div>
          </div>
        </div>
      </header>

      <!-- Body -->
      <section class="relative">
  <div class="swiper testimonial-swiper">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide">
        <!-- Body -->
        <div class="w-full grid grid-cols-1 md:grid-cols-[24rem_1fr] gap-8">
          <!-- Ảnh bên trái -->
          <figure class="md:row-span-1">
            <img
              class="w-full max-w-96 md:max-w-none md:w-96 md:h-[490px] h-auto object-cover rounded-md"
              src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/Customer-Image.png"
              alt="Smiling customer portrait for testimonial"
              loading="lazy" width="768" height="980" />
          </figure>

          <!-- Nội dung bên phải -->
          <figure class="flex flex-col justify-center gap-12">
            <blockquote class="max-w-[559px] text-slate-700 text-xl font-medium font-['Lexend'] leading-relaxed">
              “These guys are incredible. They've helped us to grow our business and now the biggest problem we seem to come across is having too much business - which is the ideal problem to have.”
            </blockquote>

            <figcaption>
              <div class="text-yellow-400 text-3xl leading-7" aria-label="5 out of 5 stars" role="img">★★★★★</div>
              <div class="mt-3 font-['Philosopher']">
                <div class="text-slate-700/75 text-base font-bold capitalize">Hannah Montana</div>
                <div class="text-slate-700/75 text-base tracking-wide">CEO — Productfund</div>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>

      <!-- Slide 2 (ví dụ, copy để thêm slide) -->
      <div class="swiper-slide">
        <div class="w-full grid grid-cols-1 md:grid-cols-[24rem_1fr] gap-8">
          <figure class="md:row-span-1">
            <img
              class="w-full max-w-96 md:max-w-none md:w-96 md:h-[490px] h-auto object-cover rounded-md"
              src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=768&auto=format&fit=crop"
              alt="Happy client"
              loading="lazy" />
          </figure>

          <figure class="flex flex-col justify-center gap-12">
            <blockquote class="max-w-[559px] text-slate-700 text-xl font-medium font-['Lexend'] leading-relaxed">
              “Service was fast, friendly and absolutely professional. We saw measurable growth within weeks.”
            </blockquote>

            <figcaption>
              <div class="text-yellow-400 text-3xl leading-7" aria-label="5 out of 5 stars" role="img">★★★★★</div>
              <div class="mt-3 font-['Philosopher']">
                <div class="text-slate-700/75 text-base font-bold capitalize">Roy Hipper</div>
                <div class="text-slate-700/75 text-base tracking-wide">Head of Growth — StartupX</div>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>

    </div>

    <!-- Pagination (dots) -->
    <div class="swiper-pagination mt-6"></div>
  </div>
</section>

      <!-- Logo strip -->
      <?php
      $group = get_field('partner_section'); // lấy group
      $gallery = $group['partner_logos'] ?? null; // gallery array

      if ( $gallery && is_array($gallery) ) : ?>
        <ul class="pt-12 pb-28 grid grid-cols-2 md:grid-cols-5 gap-9 place-items-center" aria-label="Trusted by partner logos">
          <?php foreach ( $gallery as $image ) : ?>
            <li class="w-[70px]">
              <?php echo wp_get_attachment_image(
                $image['ID'],
                'medium',
                false,
                [
                  'class' => 'max-h-24 w-full object-contain  grayscale opacity-80 hover:opacity-100 transition',
                  'alt'   => esc_attr($image['alt'] ?: $image['title'])
                ]
              ); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php get_template_part( 'template-parts/partner-section' ); ?>
      <!-- Họa tiết mờ -->
      <img
        class="w-96 absolute left-[-15px] top-[130px]"
        src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/Ghost-Frame.svg"
        alt="Decorative ghost frame"
        loading="lazy"
        width="384"
        height="384"
        aria-hidden="true"
      />
      <img
        class="w-64 absolute right-0 -top-[9px]"
        src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/Faded-Rectangle.svg"
        alt="Decorative faded rectangle"
        loading="lazy"
        width="256"
        height="256"
        aria-hidden="true"
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