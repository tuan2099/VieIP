<section class="py-20 relative overflow-hidden xl:overflow-visible"
         style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover; background-repeat: no-repeat;"
         data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
        <h1 class="text-[65px] text-white font-['Philosopher']"
            data-aos="fade-up" data-aos-delay="100" data-aos-duration="700" data-aos-once="true">
            <?php the_title(); ?>
        </h1>
        <div class="font-['Lexend']"
             data-aos="fade-up" data-aos-delay="200" data-aos-duration="700" data-aos-once="true">
            <?php vexa_breadcrumbs(); ?>
        </div>
    </div>
    <div class="custom_blur -z-10"
         data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800" data-aos-once="true"></div>
</section>