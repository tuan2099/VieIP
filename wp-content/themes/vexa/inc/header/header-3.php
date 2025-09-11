<?php 
    global $vexatheme_option , $vexatheme_meta ; 
?>


<!-- Back to top button -->
<?php 
if ( !empty($vexatheme_option['vexatheme_scroll_top']) ) : ?>
  <a id="vexa-go-top" class="fixed bottom-6 right-6 z-50 p-3 rounded-full bg-indigo-600 text-white shadow-lg hover:bg-indigo-700"><i class="fa-solid fa-arrow-up"></i></a>
<?php endif; ?>
<!-- // Back to top button -->

<!-- ==================== Header ======================= -->
 <header class="border-b border-gray-800">
        <nav
          class="container mx-auto px-4 md:px-[20px] md:py-[20px] max-w-[1440px] flex items-center justify-between"
        >
          <!-- Logo -->
          <a
            href="<?php echo esc_url( home_url( '/' ) ); ?>"
            class="text-2xl font-bold text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
          >
            <img class="w-[150px]" src="<?php if(is_page() && !empty($vexatheme_meta['custom_header'])){ echo esc_url($vexatheme_meta['main_logo']['url']); } else{ echo esc_url($vexatheme_option['main_logo']['url']); }?>" alt="<?php echo esc_attr(get_bloginfo ('name')); ?>">
          </a>

          <!-- Desktop Menu -->
           <?php
            wp_nav_menu([
              'theme_location' => 'primary', // bạn phải register trước menu location này
              'container'      => false,     // bỏ <div> bọc ngoài
              'menu_class'     => 'hidden md:flex items-center space-x-16 text-[18px] font-medium',
              'link_class'     => 'hover:text-pink-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400',
              'fallback_cb'    => false,
            ]);
            ?>
          

          <!-- Mobile Menu Button -->
          <button
            class="md:hidden flex items-center text-gray-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
            aria-label="Open menu"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>
        </nav>
      </header>

<!-- ==================== End Header ======================= -->
