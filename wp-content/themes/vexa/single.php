<?php 
get_header();?>

<section class="py-20 relative" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
        background-repeat: no-repeat;">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
        <h1 class="text-[65px] text-white font-['Philosopher']"><?php the_title(); ?></h1>
        <div class="font-['Lexend']"><?php vexa_breadcrumbs(); ?></div>
    </div>
    <div class="custom_blur -z-10"></div>
</section>

<!-- Content -->
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px] py-12 mb-64"
         data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 ">
            <div class="lg:col-span-2 bg-[#1a1a22] rounded-bl-[20px] rounded-br-[20px]"
                 data-aos="fade-up" data-aos-delay="50" data-aos-duration="700" data-aos-once="true">
                <div class="mb-[56px]">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="h-[500px] rounded-tl-[20px] rounded-tr-[20px] overflow-hidden"
                             data-aos="zoom-in" data-aos-duration="700" data-aos-once="true">
                            <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mx-[10%]">
                    <h2 class="text-[45px] text-white"
                        data-aos="fade-up" data-aos-duration="650" data-aos-once="true"><?php the_title(); ?></h2>
                    <hr class="border-t border-white/20 my-8 "
                        data-aos="fade" data-aos-duration="500" data-aos-once="true">
                    <div class=" text-sm mb-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="650" data-aos-once="true">
                        <!-- Tác giả -->
                        <div class="font-semibold text-[#e43256]">
                            BY <?php the_author(); ?>
                        </div>

                        <!-- Ngày -->
                        <div class="text-gray-400">
                            <?php echo get_the_date('F j, Y'); ?>
                        </div>
                    </div>
                    <div class="entry-content"
                         data-aos="fade-up" data-aos-delay="150" data-aos-duration="700" data-aos-once="true">
                        <?php the_content(); ?>
                    </div>
                </div>
                <hr class="border-t border-white/20 my-8 mx-[10%]"
                    data-aos="fade" data-aos-duration="500" data-aos-once="true">

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 text-[#9fb6d4] mx-[10%] mb-[30px]"
                     data-aos="fade-up" data-aos-delay="100" data-aos-duration="650" data-aos-once="true">
                    <!-- Share -->
                    <?php
                    $share_url   = urlencode( get_permalink() );
                    $share_title = urlencode( get_the_title() );
                    ?>
                    <div class="relative inline-block">
                        <!-- Nút Share -->
                        <button id="shareBtn"
                                class="flex items-center gap-2 font-semibold text-[#9fb6d4] hover:text-white transition px-3 py-1 rounded-lg"
                                aria-expanded="false" aria-controls="sharePopover"
                                data-aos="zoom-in" data-aos-duration="550" data-aos-once="true">
                            <!-- icon -->
                            <i class="fa-solid fa-share-nodes"></i>
                            <span>Share</span>
                        </button>

                        <!-- Popover -->
                        <div id="sharePopover"
                             class="hidden absolute bottom-full left-0 mb-3 z-50 rounded-full bg-white/10 backdrop-blur
                                text-white px-3 py-2 shadow-lg"
                             role="menu" aria-labelledby="shareBtn"
                             data-aos="fade" data-aos-duration="400" data-aos-once="true">
                            <div class="flex items-center gap-3">
                                <a class="p-2 rounded-full hover:bg-white/20" role="menuitem" target="_blank" rel="noopener"
                                   href="https://www.facebook.com/sharer/sharer.php?u=<?=$share_url?>">
                                    <i class="fa-brands fa-facebook-f w-4 h-4"></i>
                                </a>
                                <a class="p-2 rounded-full hover:bg-white/20" role="menuitem" target="_blank" rel="noopener"
                                   href="https://twitter.com/intent/tweet?url=<?=$share_url?>&text=<?=$share_title?>">
                                    <i class="fa-brands fa-x-twitter w-4 h-4"></i>
                                </a>
                                <a class="p-2 rounded-full hover:bg-white/20" role="menuitem" target="_blank" rel="noopener"
                                   href="https://www.linkedin.com/shareArticle?mini=true&url=<?=$share_url?>&title=<?=$share_title?>">
                                    <i class="fa-brands fa-linkedin-in w-4 h-4"></i>
                                </a>
                                <a class="p-2 rounded-full hover:bg-white/20" role="menuitem" target="_blank" rel="noopener"
                                   href="https://pinterest.com/pin/create/button/?url=<?=$share_url?>&description=<?=$share_title?>">
                                    <i class="fa-brands fa-pinterest-p w-4 h-4"></i>
                                </a>
                                <a class="p-2 rounded-full hover:bg-white/20" role="menuitem"
                                   href="https://wa.me/?text=<?=$share_title?>%20<?=$share_url?>">
                                    <i class="fa-brands fa-whatsapp w-4 h-4"></i>
                                </a>
                                <a class="p-2 rounded-full hover:bg-white/20" role="menuitem"
                                   href="mailto:?subject=<?=$share_title?>&body=<?=$share_url?>">
                                    <i class="fa-regular fa-envelope w-4 h-4"></i>
                                </a>
                                <button id="copyShare" class="p-2 rounded-full hover:bg-white/20" role="menuitem" type="button" title="Copy link">
                                    <i class="fa-regular fa-copy w-4 h-4"></i>
                                </button>
                            </div>

                            <!-- mũi tên nhỏ -->
                            <svg class="absolute -bottom-2 left-6 w-4 h-4 text-[#323239]" viewBox="0 0 24 24">
                                <path d="M12 24L0 0h24L12 24z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                    <!-- Tags -->
                    <div class="flex items-start md:items-center gap-3 flex-wrap"
                         data-aos="fade-up" data-aos-delay="150" data-aos-duration="650" data-aos-once="true">
                        <span class="opacity-80 font-semibold text-[18px]">Tags:</span>
                        <div class="flex items-center gap-2 flex-wrap">
                            <?php
                            $tax_list = array( 'post_tag', 'industry', 'audience', 'service_used' );
                            $printed = false;

                            foreach ( $tax_list as $tax ) {
                                if ( taxonomy_exists( $tax ) ) {
                                    $terms = get_the_terms( get_the_ID(), $tax );
                                    if ( $terms && ! is_wp_error( $terms ) ) {
                                        foreach ( $terms as $t ) {
                                            $printed = true;
                                            echo '<a href="'.esc_url( get_term_link( $t ) ).'" class="px-2.5 py-1 rounded-full bg-white/5 hover:bg-white/10 transition font-semibold text-sm">'
                                                    . esc_html( $t->name ) . '</a>';
                                        }
                                    }
                                }
                            }

                            if ( ! $printed ) {
                                echo '<span class="opacity-70 font-semibold">No tags</span>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="lg:col-span-1"
                   data-aos="fade-left" data-aos-duration="700" data-aos-once="true">
                <img src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/336-x-280-ad.jpg"
                     alt="" loading="lazy"
                     data-aos="zoom-in" data-aos-delay="100" data-aos-duration="600" data-aos-once="true"/>
            </aside>
        </div>
    </div>


<script>
(function(){
  const btn = document.getElementById('shareBtn');
  const pop = document.getElementById('sharePopover');
  const copyBtn = document.getElementById('copyShare');

  if (!btn || !pop) return;
  const open = () => { pop.classList.remove('hidden'); btn.setAttribute('aria-expanded','true'); }
  const close = () => { pop.classList.add('hidden'); btn.setAttribute('aria-expanded','false'); }

  btn.addEventListener('click', (e)=> {
    e.stopPropagation();
    const isHidden = pop.classList.contains('hidden');
    isHidden ? open() : close();
  });

  document.addEventListener('click', (e)=>{
    if (!pop.contains(e.target) && e.target !== btn) close();
  });

  document.addEventListener('keydown', (e)=>{
    if (e.key === 'Escape') close();
  });

  if (copyBtn) {
    copyBtn.addEventListener('click', async ()=>{
      try {
        await navigator.clipboard.writeText(window.location.href);
        const old = copyBtn.title || 'Copy link';
        copyBtn.title = 'Copied!';
        copyBtn.classList.add('bg-white/20');
        setTimeout(()=>{ copyBtn.title = old; copyBtn.classList.remove('bg-white/20'); }, 1200);
      } catch(e){}
    });
  }
})();
</script>

<?php get_footer();
