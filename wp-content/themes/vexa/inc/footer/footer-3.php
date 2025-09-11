<?php 
    global $vexatheme_option;
    $preloader_img = get_template_directory_uri().'/assets/img/loading-1.svg' ;
?>
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
      <ul class="pt-12 pb-28 grid grid-cols-2 md:grid-cols-6 gap-5 place-items-center" aria-label="Trusted by partner logos">
        <li class="w-28 h-8 bg-slate-500/60 rounded" aria-label="Partner logo 1"></li>
        <li class="w-24 h-9 bg-slate-500/60 rounded" aria-label="Partner logo 2"></li>
        <li class="w-40 h-10 bg-slate-500/60 rounded" aria-label="Partner logo 3"></li>
        <li class="w-16 h-11 bg-slate-500/60 rounded" aria-label="Partner logo 4"></li>
        <li class="w-32 h-6 bg-slate-500/60 rounded" aria-label="Partner logo 5"></li>
        <li class="w-32 h-6 bg-slate-500/60 rounded" aria-label="Partner logo 6"></li>
      </ul>

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

      <!-- Structured Data for SEO (Review) -->
      <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Review",
        "itemReviewed": {
          "@type": "Organization",
          "name": "Productfund"
        },
        "author": {
          "@type": "Person",
          "name": "Hannah Montana"
        },
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5",
          "bestRating": "5"
        },
        "reviewBody": "These guys are incredible. They've helped us to grow our business and now the biggest problem we seem to come across is having too much business - which is the ideal problem to have.",
        "publisher": {
          "@type": "Organization",
          "name": "Your Company"
        }
      }
      </script>
    </div>
  </div>
</section>
    
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
          class="absolute right-1 top-1 h-12 sm:h-14 px-10 sm:px-[60px] rounded-[35px] bg-gradient-to-b from-blue-600 to-blue-500 text-white font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
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
      <div class="w-32 h-10 bg-white" aria-hidden="true"></div>

      <h3 id="footer-cta-title" class="text-slate-800 text-2xl sm:text-3xl font-bold font-['Philosopher'] leading-9 sm:leading-10">
        We’re Ready to Grow With You. Talk<br/>to an Expert Today.
      </h3>

      <div class="flex items-center gap-4 flex-wrap">
        <a href="#contact" class="inline-flex items-center h-12 px-12 rounded-[35px] bg-gradient-to-b from-blue-600 to-blue-500 text-white text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" title="Get in touch">
          GET IN TOUCH <span class="ml-2 text-base" aria-hidden="true">&rsaquo;</span>
        </a>

        <span class="h-8 w-2 bg-blue-300" aria-hidden="true"></span>

        <div class="flex items-center gap-3">
          <span class="inline-block w-6 h-6 bg-rose-500 rounded" aria-hidden="true"></span>
          <div class="leading-tight">
            <div class="text-slate-600/80 text-xs">CALL US NOW!</div>
            <a href="tel:5666787813" class="text-slate-800 text-base font-bold" title="Call 566-678-7813">566-678-7813</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Company -->
    <nav aria-labelledby="footer-company-title" class="space-y-4">
      <h4 id="footer-company-title" class="text-slate-800 text-lg font-bold font-['Philosopher']">Company</h4>
      <ul class="space-y-2 pl-3 relative">
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#home" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Home</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#services" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Services</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#portfolio" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Portfolio</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#blog" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Blog</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#contact" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Contact Us</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#about" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">About</a>
        </li>
      </ul>
    </nav>

    <!-- Services -->
    <nav aria-labelledby="footer-services-title" class="space-y-4">
      <h4 id="footer-services-title" class="text-slate-800 text-lg font-bold font-['Philosopher']">Services</h4>
      <ul class="space-y-3 pl-3">
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#corporate-identity" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Corporate identity</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#ui-ux-design" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">UI/UX Design</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#brand-promotion" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Brand Promotion</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#full-development" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Full Development</a>
        </li>
        <li class="relative pl-3">
          <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
          <a href="#photo-print" class="text-slate-600/80 hover:text-slate-700 focus:outline-none focus:underline">Photo &amp; Print</a>
        </li>
      </ul>
    </nav>

    <!-- Latest Articles -->
    <section aria-labelledby="footer-latest-title" class="space-y-4">
      <h4 id="footer-latest-title" class="text-slate-800 text-lg font-bold font-['Philosopher']">Latest Articles</h4>

      <article class="relative pl-3">
        <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
        <h5 class="sr-only">Article 1</h5>
        <a href="#" class="underline text-slate-700/80 hover:text-slate-800">
          Creative agencies are probably one of the most exciting places to work at. However, working at an agency isn’t the right fit for
        </a>
        <div class="mt-2 text-xs text-slate-500/70">
          <time datetime="2021-09-12">September 12, 2021</time>
        </div>
      </article>

      <article class="relative pl-3">
        <span class="absolute -left-3 top-2 w-[5px] h-[5px] bg-rose-500 rounded-full" aria-hidden="true"></span>
        <h5 class="sr-only">Article 2</h5>
        <a href="#" class="underline text-slate-700/80 hover:text-slate-800">
          Creative agencies are probably one of the most exciting places to work at. However, working at an agency isn’t the right fit for
        </a>
        <div class="mt-2 text-xs text-slate-500/70">
          <time datetime="2021-09-12">September 12, 2021</time>
        </div>
      </article>
    </section>
  </div>

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
            <p>
                © <time datetime="2025">2025</time>
                <span class="font-semibold">Aestry Agency</span> — Phlox Elementor WordPress Theme. All rights reserved.
            </p>
        </div>
    </div>
</div>
