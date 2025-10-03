<?php
global $vexatheme_option;
$preloader_img = get_template_directory_uri().'/assets/img/loading-1.svg' ;
?>

<?php

/**
 * Template name: Contact
 * @author : Hoang Anh Tuan
 */

get_header();
?>

<section class="py-20 relative overflow-hidden xl:overflow-visible" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
    background-repeat: no-repeat;">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
        <h1 class="text-[65px] text-white font-['Philosopher']"><?php the_title(); ?></h1>
        <div class="font-['Lexend']"><?php vexa_breadcrumbs(); ?></div>
    </div>
    <div class="custom_blur -z-10 w-full"></div>
</section>


<!-- nền gradient tối -->
<div class="pointer-events-none fixed inset-0 -z-10">
<div class="absolute -left-40 -top-40 h-96 w-96 rounded-full blur-3xl opacity-30"
     style="background: radial-gradient(60% 60% at 50% 50%, #ff5a6a 0%, #6b7cff 60%, transparent 70%);"></div>
<div class="absolute right-0 top-20 h-96 w-96 rounded-full blur-3xl opacity-20"
     style="background: radial-gradient(60% 60% at 50% 50%, #00f8b4 0%, #6b7cff 60%, transparent 70%);"></div>
</div>

<!-- Header -->
<div class="my-8 flex items-center gap-4 max-w-[1440px] m-auto p-5 lg:p-0">
    <h1 class="mt-2 text-3xl md:text-[40px] font-bold leading-tight relative font-['Philosopher']">
        <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[5%] lg:-top-[7%] -top-[25%]"></div>
        Get In Touch
    </h1>
</div>

<!-- Grid -->
<section class="grid gap-10 lg:grid-cols-2 max-w-[1440px] m-auto mb-12 lg:mb-28  p-5 lg:p-0">
    <!-- LEFT: FORM CARD -->
    <div class="relative">
    <span class="absolute -left-4 top-1/3 z-10 grid h-7 w-7 place-items-center rounded-full">
      <span class="absolute inline-block h-7 w-7 rounded-full ring-2 ring-emerald-300"></span>
      <span class="absolute inline-block h-3 w-3 rounded-full bg-emerald-300 blur-[1px]"></span>
    </span>

    <div class="rounded-2xl bg-[#15161c] p-8 shadow-2xl ring-1 ring-white/10 sm:p-12">
          <form class="space-y-6">
                <!-- Name -->
                <label class="block">
                    <input type="text" placeholder="Your Name"
                         class="w-full rounded-full border border-white/20 bg-[#0f1016] px-6 py-4 text-base text-white/90 placeholder-white/40 outline-none focus:border-white/30 border-[3px]" />
                </label>
                <!-- Subject -->
                <label class="block">
                    <input type="text" placeholder="Subject"
                         class="w-full rounded-full border border-white/20 bg-[#0f1016] px-6 py-4 text-base text-white/90 placeholder-white/40 outline-none focus:border-white/30 border-[3px]" />
                </label>
                <!-- Email -->
                <label class="block">
                    <input type="email" placeholder="Email"
                         class="w-full rounded-full border border-white/20 bg-[#0f1016] px-6 py-4 text-base text-white/90 placeholder-white/40 outline-none focus:border-white/30 border-[3px]" />
                </label>
                <!-- Body -->
                <label class="block">
                    <textarea rows="8" placeholder="Body"
                            class="w-full resize-y rounded-3xl border border-white/20 bg-[#0f1016] px-6 py-4 text-base text-white/90 placeholder-white/40 outline-none focus:border-white/30 border-[3px]"></textarea>
                </label>
                <button class="font-['Lexend'] w-full lg:w-auto lg:w-none text-center inline-block bg-[#552ae0] rounded-full border-2 border-[#552ae0] px-12 py-3 text-[16px] font-medium text-purple-200 hover:bg-[#552ae0] hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-[#552ae0]" aria-label="Contact us" >
                    Contact Us
                </button>
          </form>
    </div>
  </div>

  <!-- RIGHT: IMAGE -->
  <div class="">
        <img
          class="inset-0 h-full w-full object-cover opacity-90"
          src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/Contact-Image.png"
          alt="Support agent" />
  </div>
</section>


<div class="grid items-start gap-12 lg:grid-cols-[1.1fr_.9fr] mb-32 lg:mb-64 max-w-[1440px] p-5 lg:p-0 mx-auto">
      <!-- MAP CARD -->
      <div class="relative rounded-2xl overflow-hidden ring-1 ring-white/10 shadow-2xl">
        <!-- Dark map (grayscale + dim) -->
        <div class="aspect-[16/11] bg-black">
          <iframe
            class="h-full w-full opacity-90 contrast-125 grayscale invert"
            src="https://maps.google.com/maps?q=Vermont%20Square%20Park%2C%20Los%20Angeles&t=&z=15&ie=UTF8&iwloc=&output=embed"
            title="Map"
            loading="lazy"
          ></iframe>
        </div>

        <!-- Marker pin -->
        <span class="absolute left-[38%] top-[46%] inline-flex h-9 w-9 -translate-x-1/2 -translate-y-1/2 items-center justify-center">
          <span class="absolute inline-block h-9 w-9 rounded-full bg-rose-500/25 animate-ping"></span>
          <svg class="relative h-9 w-9 text-rose-500 drop-shadow" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z"/>
          </svg>
        </span>

        <!-- Map corner gradient edge like screenshot -->
        <div class="pointer-events-none absolute inset-0 rounded-2xl ring-1 ring-white/10"></div>
      </div>

      <!-- RIGHT PANEL -->
      <section class="pt-2">
        <!-- Title -->
        <div class="mb-8 flex items-center gap-4">
            <h1 class="mt-2 text-3xl md:text-[40px] font-bold leading-tight relative font-['Philosopher']">
                <div class="custom_bg_text absolute -z-10 h-[60px] w-[60px] -left-[5%] lg:-top-[7%] -top-[25%]"></div>
                Fashion Photoshoot
            </h1>
        </div>

        <!-- Contact rows -->
        <ul class="space-y-8">
          <!-- Address -->
          <li class="flex items-center gap-4">
            <div class="mt-0.5 grid place-items-center h-11 w-11 rounded-xl bg-white/5 ring-1 ring-white/10">
              <!-- location icon -->
              <svg class="h-6 w-6 text-white/80" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z"/>
              </svg>
            </div>
            <div>
              <p class="text-base/7 text-white/90">
                  <?php echo esc_html($vexatheme_option['location']); ?>
              </p>
            </div>
          </li>

          <!-- Email -->
          <li class="flex items-center gap-4">
            <div class="mt-0.5 grid place-items-center h-11 w-11 rounded-xl bg-white/5 ring-1 ring-white/10">
              <!-- mail icon -->
              <svg class="h-6 w-6 text-white/80" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm-1.4 4.25-6.2 4.65a1 1 0 0 1-1.2 0L5 8.25V8l7 5 7-5v.25Z"/>
              </svg>
            </div>
            <div class="space-x-2">
              <a href="mailto:info@plox.com" class="text-white/90 hover:text-white underline decoration-white/20 hover:decoration-white"><?php echo esc_html($vexatheme_option['email']); ?></a>
              <span class="text-white/40">|</span>
              <a href="mailto:support@plox.com" class="text-white/90 hover:text-white underline decoration-white/20 hover:decoration-white">support@plox.com</a>
            </div>
          </li>

          <!-- Phone -->
          <li class="flex items-center gap-4">
            <div class="mt-0.5 grid place-items-center h-11 w-11 rounded-xl bg-white/5 ring-1 ring-white/10">
              <!-- phone icon -->
              <svg class="h-6 w-6 text-white/80" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M6.6 10.8a15 15 0 0 0 6.6 6.6l2.2-2.2a1.5 1.5 0 0 1 1.6-.35c1.13.45 2.36.7 3.6.7a1.4 1.4 0 0 1 1.4 1.4V20a2 2 0 0 1-2 2C9.61 22 2 14.39 2 4a2 2 0 0 1 2-2h2.25A1.4 1.4 0 0 1 7.65 3.4c0 1.24.24 2.47.7 3.6a1.5 1.5 0 0 1-.35 1.6L6.6 10.8Z"/>
              </svg>
            </div>
            <a href="tel:+16464442106" class="text-white/90 hover:text-white"><?php echo esc_html($vexatheme_option['telphone']); ?></a>
          </li>
        </ul>
      </section>
    </div>
</div>

<?php 
get_footer();