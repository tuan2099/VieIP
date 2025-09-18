<?php 

/**
 * Template name: Home
 * @author : Hoang Anh Tuan
 */

get_header();
?>
<style>
  .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #444;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
</style>
<section class="py-20 relative">
  <div class="container mx-auto px-4 md:px-6 max-w-[1440px] z-10">
    <div class="grid lg:grid-cols-2 gap-1 items-center">
      <!-- Left Content -->
      <div>
        <h1 class="text-3xl md:text-[65px] font-bold leading-tight relative">
          <div class="custom_bg_text absolute -z-10 h-[110px] w-[110px] -left-[5%] -top-[15%]"></div>
          <span 
            class=""
          >
            Award Winning </span
          ><br />
          Digital Design Agency
        </h1>
        <p class="mt-6 text-base text-gray-300 leading-relaxed max-w-lg">
          Aestry routinely scans for digital marketing failures that cause
          performance issues within few days – No experience necessary for
          you.
        </p>
        <div class="mt-8">
          <a
            href="#"
            class="inline-block bg-[#552ae0] rounded-full border-2 border-[#552ae0] px-12 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#552ae0]"
            aria-label="Contact us"
          >
            Contact Us
          </a>
        </div>
      </div>

      <!-- Right Image -->
      <div class="flex justify-center">
        <img
          src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2025/03/Hero-Image-163-646x763.png"
          alt="Creative professional holding laptop"
          class=" rounded-full object-cover"
          width="640"
          height="600"
          loading="lazy"
        />
      </div>
    </div>
  </div>
  <div class="custom_blur -z-10"></div>
  <img class="absolute top-[65%] -z-10" src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2025/03/Abstract-Shape-1-164-297x339.png"/>
  <img class="absolute top-[15%] left-[7%] -z-10" src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2025/03/myIcon-167.svg"/>
  <img class="absolute top-[25%] left-[47%] " src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2025/03/Abstract-Shape-2-165-267x283.png"/>
</section>

<section class="py-20">
  <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
    <div class="grid lg:grid-cols-2 gap-12 items-center bg-[#1a1a22]">
      <!-- Left Side Image -->
      <div class="flex justify-center">
        <img
          src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/Girl-Sitting.png"
          alt="Creative person working on laptop"
          class="w-full max-w-sm rounded-2xl object-cover"
          width="500"
          height="600"
          loading="lazy"
        />
      </div>

      <!-- Right Content -->
      <div>
        <!-- Header -->
        <div
          class="flex flex-col md:flex-row md:items-center md:justify-between mb-8"
        >
          <div>
            <p
              class="text-sm font-semibold text-pink-500 uppercase tracking-wide"
            >
              Portfolio
            </p>
            <h1 class="mt-2 text-3xl md:text-4xl font-bold leading-tight">
              <div class="custom_bg_text absolute -z-10 h-[110px] w-[110px] -left-[5%] -top-[15%]"></div>
              <span
                class="bg-gradient-to-r from-green-400 via-pink-500 to-red-500 bg-clip-text text-transparent"
              >
                Our Recent Works
              </span>
            </h1>
          </div>
          <div class="mt-4 md:mt-0">
            <a
              href="#"
              class="inline-flex items-center rounded-full border border-purple-500 px-5 py-2 text-sm font-medium text-purple-200 hover:bg-purple-500 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
              aria-label="Explore all projects"
            >
              Explore All Projects
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

        <!-- Portfolio Grid -->
        <div class="grid sm:grid-cols-2 gap-6">
          <!-- Work 1 -->
          <article class="overflow-hidden rounded-2xl">
            <img
              src="https://picsum.photos/600/400?random=42"
              alt="Creative artwork 1"
              class="w-full h-48 md:h-56 object-cover"
              width="600"
              height="400"
              loading="lazy"
            />
          </article>

          <!-- Work 2 -->
          <article class="overflow-hidden rounded-2xl">
            <img
              src="https://picsum.photos/600/400?random=43"
              alt="Creative artwork 2"
              class="w-full h-48 md:h-56 object-cover"
              width="600"
              height="400"
              loading="lazy"
            />
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-20">
  <div class="container mx-auto px-4 md:px-0 max-w-[1440px] ">
    <!-- Section Header -->
    <p
      class="text-[18px] text-pink-500 uppercase tracking-wide"
    >
      Why Choose Us
    </p>
    <h1 class="mt-3 text-3xl md:text-4xl font-bold leading-tight mb-12 relative">
      <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[1%] -top-[15%]"></div>
      <span
        class=""
      >
        How We Handle Projects
      </span>
    </h1>

    <!-- Features Grid -->
    <div class="grid md:grid-cols-3 gap-6 bg-[#15151f]">
      <!-- Feature 1 -->
      <article class="rounded-2xl pt-[83px] pr-[73px] pb-[50px] pl-[80px] text-left hover:bg-[#0e0d17]">
        <div class="mb-4">
          <!-- Chess Knight Icon -->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-20 w-20 text-red-400"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="M19 22H5v-2h2v-5.5c0-.828.672-1.5 1.5-1.5h7c.828 0 1.5.672 1.5 1.5V20h2v2zM12 2c1.657 0 3 1.343 3 3v3l-2 1-1-2-2 1 1 3H9l-2-3V5c0-1.657 1.343-3 3-3h2z"
            />
          </svg>
        </div>
        <h2 class="text-[34px] font-semibold text-cyan-400">
          Best Strategies
        </h2>
        <p class="mt-4 text-[16px] text-gray-400 leading-relaxed">
          Digital marketing works when strategy, brand, and messaging
          create the right foundation for everything that comes later. We
          take the core.
        </p>
      </article>

      <!-- Feature 2 -->
      <article class="rounded-2xl pt-[83px] pr-[73px] pb-[50px] pl-[80px] text-left hover:bg-[#0e0d17]">
        <div class="mb-4">
          <!-- Megaphone Icon -->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-20 w-20 text-blue-400"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="M3 10v4c0 1.104.896 2 2 2h1v-8H5c-1.104 0-2 .896-2 2zm14.5-6.5L9 9H7v6h2l8.5 5.5c.5.323 1.5-.052 1.5-.724V4.224c0-.672-1-.999-1.5-.724z"
            />
          </svg>
        </div>
        <h2 class="text-[34px] font-semibold text-pink-500">
          Running Campaigns
        </h2>
        <p class="mt-4 text-[16px] text-gray-400 leading-relaxed">
          From creative concepts to landing pages, content creation,
          social media plans, and paid media campaigns, our team partners
          with you to create.
        </p>
      </article>

      <!-- Feature 3 -->
      <article class="rounded-2xl pt-[83px] pr-[73px] pb-[50px] pl-[80px] text-left hover:bg-[#0e0d17]">
        <div class="mb-4">
          <!-- Pen Tool Icon -->
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-20 w-20 text-orange-400"
            fill="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              d="M6.414 15.586L4 18v2h2l2.414-2.414L6.414 15.586zM18 2h-5.5L7 7.5V13l7-7h4V2z"
            />
          </svg>
        </div>
        <h2 class="text-[34px] font-semibold text-purple-400">
          Awesome Execution
        </h2>
        <p class="mt-4 text-[16px] text-gray-400 leading-relaxed">
          Your digital marketing has a lot of moving pieces. We can help
          tackle website projects, produce beautiful video and graphic
          content.
        </p>
      </article>
    </div>
  </div>
</section>

<!-- Services Section -->
<?php get_template_part( 'template-parts/services-section' ); ?>

<section class="py-20">
  <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
    <div class="">
      <!-- Team Members -->
      <div>
        <div class="grid sm:grid-cols-3 gap-6">
          <div class="flex flex-col justify-center">
            <p
              class="text-sm font-semibold text-pink-500 uppercase tracking-wide"
            >
              Our Team
            </p>
            <h1 class="mt-3 text-3xl md:text-4xl font-bold leading-tight relative">
              <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[5%] -top-[15%]"></div>
              <span
                class=""
              >
                Best Team Ever
              </span>
            </h1>
            <p
              class="mt-6 text-base text-gray-400 leading-relaxed max-w-md"
            >
              We have assembled a creative team of like-minded people who
              like to challenge themselves and get better with each new
              case.
            </p>
          </div>
          <!-- Member -->
          <article class="relative overflow-hidden rounded-2xl group">
            <!-- Ảnh -->
            <img
              src="https://picsum.photos/400/400?random=32"
              alt="Team member portrait"
              class="w-full h-56 md:h-96 object-cover"
              width="400"
              height="400"
              loading="lazy"
            />

            <!-- Overlay -->
            <div
              class="absolute inset-0 bg-gradient-to-t from-red-600/80 to-transparent 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-500 
                    flex flex-col justify-end p-6 text-white"
            >
              <div>
                <h3 class="font-semibold text-lg">Steve Bullack</h3>
                <p class="text-sm">Digital Marketer</p>
              </div>
              <div class="flex space-x-4 mt-3">
                <!-- icon có thể thay bằng svg inline -->
                <a href="#" aria-label="Facebook" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48..."/>
                  </svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M16 8a6 6 0 016 6v7h-4v-7..."/>
                  </svg>
                </a>
                <a href="#" aria-label="Twitter" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69..."/>
                  </svg>
                </a>
              </div>
            </div>
          </article>
          <!-- Member -->
          <article class="relative overflow-hidden rounded-2xl group">
            <!-- Ảnh -->
            <img
              src="https://picsum.photos/400/400?random=32"
              alt="Team member portrait"
              class="w-full h-56 md:h-96 object-cover"
              width="400"
              height="400"
              loading="lazy"
            />

            <!-- Overlay -->
            <div
              class="absolute inset-0 bg-gradient-to-t from-red-600/80 to-transparent 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-500 
                    flex flex-col justify-end p-6 text-white"
            >
              <div>
                <h3 class="font-semibold text-lg">Steve Bullack</h3>
                <p class="text-sm">Digital Marketer</p>
              </div>
              <div class="flex space-x-4 mt-3">
                <!-- icon có thể thay bằng svg inline -->
                <a href="#" aria-label="Facebook" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48..."/>
                  </svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M16 8a6 6 0 016 6v7h-4v-7..."/>
                  </svg>
                </a>
                <a href="#" aria-label="Twitter" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69..."/>
                  </svg>
                </a>
              </div>
            </div>
          </article>
          <!-- Member -->
          <article class="relative overflow-hidden rounded-2xl group">
            <!-- Ảnh -->
            <img
              src="https://picsum.photos/400/400?random=32"
              alt="Team member portrait"
              class="w-full h-56 md:h-96 object-cover"
              width="400"
              height="400"
              loading="lazy"
            />

            <!-- Overlay -->
            <div
              class="absolute inset-0 bg-gradient-to-t from-red-600/80 to-transparent 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-500 
                    flex flex-col justify-end p-6 text-white"
            >
              <div>
                <h3 class="font-semibold text-lg">Steve Bullack</h3>
                <p class="text-sm">Digital Marketer</p>
              </div>
              <div class="flex space-x-4 mt-3">
                <!-- icon có thể thay bằng svg inline -->
                <a href="#" aria-label="Facebook" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48..."/>
                  </svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M16 8a6 6 0 016 6v7h-4v-7..."/>
                  </svg>
                </a>
                <a href="#" aria-label="Twitter" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69..."/>
                  </svg>
                </a>
              </div>
            </div>
          </article>
          <!-- Member -->
          <article class="relative overflow-hidden rounded-2xl group">
            <!-- Ảnh -->
            <img
              src="https://picsum.photos/400/400?random=32"
              alt="Team member portrait"
              class="w-full h-56 md:h-96 object-cover"
              width="400"
              height="400"
              loading="lazy"
            />

            <!-- Overlay -->
            <div
              class="absolute inset-0 bg-gradient-to-t from-red-600/80 to-transparent 
                    opacity-0 group-hover:opacity-100 transition-opacity duration-500 
                    flex flex-col justify-end p-6 text-white"
            >
              <div>
                <h3 class="font-semibold text-lg">Steve Bullack</h3>
                <p class="text-sm">Digital Marketer</p>
              </div>
              <div class="flex space-x-4 mt-3">
                <!-- icon có thể thay bằng svg inline -->
                <a href="#" aria-label="Facebook" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48..."/>
                  </svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M16 8a6 6 0 016 6v7h-4v-7..."/>
                  </svg>
                </a>
                <a href="#" aria-label="Twitter" class="hover:text-gray-200">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69..."/>
                  </svg>
                </a>
              </div>
            </div>
          </article>
          <!-- CTA Button -->
          <div class="mt-8 flex items-center text-center custom_bg1 rounded-2xl">
            <a
              href="#"
              class="inline-flex mx-auto items-center rounded-full border-2 border-[#552ae0] px-8 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
              aria-label="View the whole crew"
            >
              View the Whole Crew
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

<!-- About Section -->
<?php get_template_part( 'template-parts/about-section' ); ?>
<!-- Blog Section -->
<?php get_template_part( 'template-parts/blog-section' ); ?>

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
      <div class="w-full grid grid-cols-1 md:grid-cols-[24rem_1fr] gap-8">
        <!-- Ảnh bên trái -->
        <figure class="md:row-span-1">
          <img
            class="w-full max-w-96 md:max-w-none md:w-96 md:h-[490px] h-auto object-cover rounded-md"
            src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/Customer-Image.png"
            alt="Smiling customer portrait for testimonial"
            loading="lazy"
            width="768"
            height="980"
          />
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

      <!-- Dots -->
      <nav class="mt-6 flex items-center justify-center gap-3" aria-label="Testimonial pagination">
        <button type="button" class="inline-block w-3 h-3 bg-rose-500 rounded-full border border-white" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" class="inline-block w-3 h-3 bg-white rounded-full border border-gray-300" aria-label="Slide 2"></button>
      </nav>

      <!-- Logo strip -->
      <!-- <ul class="pt-12 pb-28 grid grid-cols-2 md:grid-cols-6 gap-5 place-items-center" aria-label="Trusted by partner logos">
        <li class="w-28 h-8 bg-slate-500/60 rounded" aria-label="Partner logo 1"></li>
        <li class="w-24 h-9 bg-slate-500/60 rounded" aria-label="Partner logo 2"></li>
        <li class="w-40 h-10 bg-slate-500/60 rounded" aria-label="Partner logo 3"></li>
        <li class="w-16 h-11 bg-slate-500/60 rounded" aria-label="Partner logo 4"></li>
        <li class="w-32 h-6 bg-slate-500/60 rounded" aria-label="Partner logo 5"></li>
        <li class="w-32 h-6 bg-slate-500/60 rounded" aria-label="Partner logo 6"></li>
      </ul> -->
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

<?php 
get_footer();