<?php
/**
* Template Name: HOME DECORATIVE
*
*/

get_header();

$left_image = get_field('home_general_image_left');
$left_image_link = get_field('home_general_image_left_link');
$right_image = get_field('home_general_image_right');
$right_image_link = get_field('home_general_image_right_link');
$title = get_field('home_general_title');
$text = get_field('home_general_text');
$button_text = get_field('home_general_button_text');
$button_link = get_field('home_general_button_link');

?>



<main id="primary" class="site-main font_roboto">
    <section id="home_decorative_product_information">
       <h2 class="font_noto_serif"><?php _e("Προϊόντα","zonepage");?></h2>
    </section>


</main>

<?php
get_footer();