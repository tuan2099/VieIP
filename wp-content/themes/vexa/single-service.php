<?php 
get_header();?>

<section class="py-20 relative" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
    background-repeat: no-repeat;">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
        <h1 class="text-[65px] text-white"><?php the_title(); ?></h1>
        <div class=""><?php vexa_breadcrumbs(); ?></div>
    </div>
    <div class="custom_blur -z-10"></div>
</section>

<section class=" py-16 md:py-24 max-w-[1440px] mx-auto">
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="h-[500px] rounded-[20px] overflow-hidden">
      <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
    </div>
  <?php endif; ?>
</section>

<!-- Content -->
<div class="container mx-auto px-4 md:px-6 max-w-[1440px] py-12">
  <?php the_content(); ?>
</div>


<?php get_footer();
