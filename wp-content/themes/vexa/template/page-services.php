<?php

/**
 * Template name: Services
 * @author : Hoang Anh Tuan
 */

get_header();
?>

    <section class="py-20 relative"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
                     background-repeat: no-repeat;">
        <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
            <h1 class="text-[65px] text-white font-['Philosopher']"><?php the_title(); ?></h1>
            <div class="font-['Lexend']"><?php vexa_breadcrumbs(); ?></div>
        </div>
        <div class="custom_blur -z-10"></div>
    </section>

    <!-- Our Services Section -->
<?php get_template_part('template-parts/our-services-section'); ?>

    <!-- Services Section -->
<?php get_template_part('template-parts/services-section'); ?>

    <!-- Testerminal Section -->
<?php get_template_part('template-parts/testerminal-section'); ?>

<?php
get_footer();