<?php 

/**
 * Template name: Blog
 * @author : Hoang Anh Tuan
 */

get_header();
?>

<section class="py-20 relative" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
    background-repeat: no-repeat;">
    <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
        <h1 class="text-[65px] text-white"><?php the_title(); ?></h1>
        <div class=""><?php vexa_breadcrumbs(); ?></div>
    </div>
    <div class="custom_blur -z-10"></div>
</section>

<!-- Content -->
<div class="container mx-auto px-4 md:px-6 max-w-[1440px] py-12 mb-64">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 "> 
        <div class="lg:col-span-2  rounded-bl-[20px] rounded-br-[20px]">
            
        </div>
        <aside class="lg:col-span-1">
            <img src="https://demo.phlox.pro/agency-aestry/wp-content/uploads/sites/279/2021/05/336-x-280-ad.jpg"/>
        </aside>
    </div>
</div>

<?php 
get_footer();