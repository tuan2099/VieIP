<section class="py-20 overflow-hidden">
  <div class="container mx-auto px-4 md:px-6 max-w-[1440px] relative">

    <!-- NỀN tràn sang PHẢI, vẫn bám mép trái của container -->
    <div class="absolute inset-y-0 left-0 right-0 lg:right-[calc(50%-50vw)]
                bg-[#1a1a22] rounded-l-3xl -z-10"></div>

    <!-- Nội dung (không để bg ở đây nữa) -->
    <div class="relative grid gap-12 lg:grid-cols-5 items-center pt-[140px]">
      <!-- Left Image -->
      <div class="flex justify-center col-span-2">
        <img
          src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/Girl-Sitting.png"
          alt="Creative person working on laptop"
          class="w-full max-w-lg rounded-2xl object-cover"
          width="500" height="600" loading="lazy" />
      </div>

      <!-- Right Content -->
      <div class="col-span-3">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
          <div>
            <p class="text-sm font-semibold text-pink-500 uppercase tracking-wide">Portfolio</p>
            <h1 class="mt-2 text-3xl md:text-4xl font-bold leading-tight relative">
              <div class="custom_bg_text absolute -z-10 h-[110px] w-[110px] -left-[5%] -top-[15%]"></div>
              <span class="">
                Our Recent Works
              </span>
            </h1>
          </div>
          <div class="mt-4 md:mt-0">
            <a href="#" class="inline-flex items-center rounded-full border border-purple-500 px-5 py-2 text-sm font-medium text-purple-200 hover:bg-purple-500 hover:text-white">
              Explore All Projects
              <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Grid ảnh -->
        <div class="relative lg:mr-[calc(50%-50vw)] lg:pr-4 overflow-visible">

            <!-- Swiper -->
            <div class="portfolio-swiper swiper">
                <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <article class="overflow-hidden rounded-2xl">
                    <img src="https://picsum.photos/600/400?random=42"
                        alt=""
                        class="w-full h-80 object-cover" />
                    </article>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <article class="overflow-hidden rounded-2xl">
                    <img src="https://picsum.photos/600/400?random=43"
                        alt=""
                        class="w-full h-80 object-cover" />
                    </article>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <article class="overflow-hidden rounded-2xl">
                    <img src="https://picsum.photos/600/400?random=44"
                        alt=""
                        class="w-full h-80 object-cover" />
                    </article>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <article class="overflow-hidden rounded-2xl">
                    <img src="https://picsum.photos/600/400?random=45"
                        alt=""
                        class="w-full h-80 object-cover" />
                    </article>
                </div>

                <div class="swiper-slide">
                    <article class="overflow-hidden rounded-2xl">
                    <img src="https://picsum.photos/600/400?random=45"
                        alt=""
                        class="w-full h-80 object-cover" />
                    </article>
                </div>

                <div class="swiper-slide">
                    <article class="overflow-hidden rounded-2xl">
                    </article>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>

  </div>
</section>



<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.portfolio-swiper', {
      spaceBetween: 24,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      slidesPerView: 3,
      breakpoints: {
        // 640:  { slidesPerView: 1.6, spaceBetween: 24 },
        // 768:  { slidesPerView: 2.0, spaceBetween: 24 },
        // 1024: { slidesPerView: 2.6, spaceBetween: 28 },
        // 1280: { slidesPerView: 3.2, spaceBetween: 28 }
      },
      // điều hướng
      navigation: {
        nextEl: '.portfolio-next',
        prevEl: '.portfolio-prev',
      },
      pagination: {
        el: '.portfolio-pagination',
        clickable: true,
      },
      grabCursor: true,
      watchOverflow: true
    });
  });
</script>