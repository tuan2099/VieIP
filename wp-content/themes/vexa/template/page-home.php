<?php 

/**
 * Template name: Home
 * @author : Hoang Anh Tuan
 */

get_header();
?>

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

<!-- Services Section -->
<?php get_template_part( 'template-parts/ourteam-section' ); ?>

<!-- About Section -->
<?php get_template_part( 'template-parts/about-section' ); ?>

<!-- Blog Section -->
<?php get_template_part( 'template-parts/blog-section' ); ?>

<!-- Blog Section -->
<?php get_template_part( 'template-parts/testerminal-section' ); ?>


<?php 
get_footer();