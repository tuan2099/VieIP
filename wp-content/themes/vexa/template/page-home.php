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

<section class="py-20">
  <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
    <!-- Section Header -->
    <header class="mb-12">
      <p
        class="text-[18px] text-pink-500 uppercase tracking-wide"
      >
        Our Services
      </p>
      <h1 class="mt-3 text-3xl md:text-4xl font-bold leading-tight relative">
        <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[1%] -top-[15%]"></div>
        <span
          class=""
        >
          Wide Variety of Services
        </span>
      </h1>
    </header>

    <!-- Services Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
                <h2 class="text-[24px] font-semibold text-white">
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

<section class="py-20">
  <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
    <div class="grid md:grid-cols-3 items-center gap-3">
      <!-- Left Content -->
      <div>
        <p class="text-[18px] text-pink-500 uppercase tracking-wide">
          About Us
        </p>
        <h1 class="mt-2 text-3xl md:text-[40px] font-bold leading-tight relative">
          <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[5%] -top-[7%]"></div>
          <span class=""> We Are Who Will<br />Grow Your Business </span>
        </h1>
        <p class="mt-6 text-base text-gray-400 leading-relaxed max-w-lg">
          Over the years, we have worked with Fortune 500s and brand-new
          startups. We help ambitious businesses like yours generate more
          profits by building awareness, driving web traffic, connecting
          with customers, and growing overall sales. Give us a call.
        </p>
        <div class="mt-8">
          <a
            href="#"
            class="inline-block rounded-full border-2 border-[#552ae0] px-8 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
            aria-label="Know more about us"
          >
            Know More
          </a>
        </div>
      </div>

      <!-- Right Images -->
      <div class="grid grid-cols-2 gap-1 col-span-2 static lg:relative h-full">
        <div class="col-span-2 md:col-span-1 static lg:absolute right-[40%] -top-[30%]">
          <img
            src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/About-image-1.png"
            alt="Team brainstorming session"
            class="w-full rounded-2xl"
            width="636"
            height="484"
            loading="lazy"
          />
        </div>
        <div class="col-span-2 md:col-span-1 static lg:absolute right-0 -top-[60%]">
          <img
            src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/About-image-2.png"
            alt="Smiling professional woman"
            class="w-full rounded-2xl"
            width="400"
            height="500"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Section -->
<section class="py-16">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
        <!-- Section Header -->
        <header class="flex flex-col md:flex-row md:items-center md:justify-between mb-12" >
            <div>
                <p class="text-[18px] text-pink-500 uppercase tracking-wide">
                Blog
                </p>
                <h2 class="mt-2 text-3xl md:text-[40px] font-bold leading-tight relative">
                <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[8%] -top-[7%]"></div>
                <span class=""> Latest Posts From Blog </span>
                </h2>
            </div>
            <div class="mt-6 md:mt-0">
                <a
                href="#"
                class="inline-block rounded-full border-2 border-[#552ae0] px-8 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
                >
                Read All Posts
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
                        <time datetime="<?php echo get_the_date('c'); ?>" class="text-xs font-semibold uppercase text-blue-400">
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

<?php 
get_footer();