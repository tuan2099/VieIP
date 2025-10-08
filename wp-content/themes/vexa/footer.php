<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vexa
 */

?>
<div class="clearfix"></div>
<div class="text-3xl"></div>
<?php vexatheme_footer(); ?>
<?php wp_footer(); ?>
<script>
    AOS.init({
        once: true,
        duration: 700,
        offset: 80,
        easing: 'ease-out'
    });
</script>
</body>

</html>
