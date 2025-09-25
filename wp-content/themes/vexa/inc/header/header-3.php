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
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'hidden lg:flex items-center space-x-16 text-[18px] font-medium',
            'link_class'     => 'hover:text-pink-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400',
            'fallback_cb'    => false,
            ]);
            ?>
        

        <!-- Mobile Menu Button -->
        <button
            id="menuOpenBtn"
            class="lg:hidden flex items-center text-gray-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-purple-400"
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

<div
  id="mobileMenu"
  class="fixed inset-0 z-50 bg-black dark:bg-slate-900 text-slate-900 dark:text-slate-100 transform -translate-y-full opacity-0 pointer-events-none transition-transform duration-300 ease-out"
  role="dialog"
  aria-modal="true"
  aria-labelledby="mobileMenuTitle"
  aria-hidden="true"
>
  <!-- Close Button (centered at top) -->
  <div class="flex items-center justify-center h-16 border-b border-slate-200 dark:border-slate-800">
    <button
      id="menuCloseBtn"
      class="inline-flex items-center justify-center w-10 h-10 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-purple-500"
      aria-label="Close menu"
      type="button"
    >
      <!-- X icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>

  <!-- Menu List (centered text, stacked) -->
  <div class="h-[calc(100vh-4rem)] overflow-y-auto pt-12">
        <?php
            wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'text-[18px] font-medium text-white flex flex-col items-center justify-center text-center gap-6',
            'link_class'     => 'text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400',
            'fallback_cb'    => false,
            ]);
        ?>
  </div>
</div>


<script>
  (function () {
    const openBtn = document.getElementById('menuOpenBtn');
    const closeBtn = document.getElementById('menuCloseBtn');
    const panel = document.getElementById('mobileMenu');

    function openMenu() {
      panel.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
      panel.classList.add('translate-y-0', 'opacity-100');
      panel.setAttribute('aria-hidden', 'false');
      openBtn.setAttribute('aria-expanded', 'true');
      closeBtn.focus();
      document.body.classList.add('overflow-hidden');
    }

    function closeMenu() {
      panel.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
      panel.classList.remove('translate-y-0', 'opacity-100');
      panel.setAttribute('aria-hidden', 'true');
      openBtn.setAttribute('aria-expanded', 'false');
      openBtn.focus();
      document.body.classList.remove('overflow-hidden');
    }

    openBtn.addEventListener('click', openMenu);
    closeBtn.addEventListener('click', closeMenu);

    // Close on ESC
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeMenu();
    });
  })();
</script>

<!-- ==================== End Header ======================= -->
