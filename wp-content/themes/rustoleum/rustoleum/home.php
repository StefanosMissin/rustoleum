<?php
/**
* Template Name: HOME GENERAL
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



<main id="primary" class="site-main font-roboto">
    <section id="home_general_hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0 left_image">
                    <a href="<?php echo $left_image_link; ?>"><img src="<?php echo $left_image; ?>"></a>
                    <p class="image-text"><?php _e("Διακόσμηση","zonepage"); ?></p>
                </div>
                <div class="col-md-6 p-0 right_image">
                <a href="<?php echo $right_image_link; ?>"><img src="<?php echo $right_image; ?>"></a>
                    <p class="image-text"><?php _e("Συντήρηση & Προστασία","zonepage"); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="home_general_texts">
        <div class="container">
            <div class="col-md-12">
                <h1><?php echo $title; ?></h1>
                <div class="text">
                    <?php echo $text; ?>
                </div>
                <div class="text-center">
                    <a class="btn" href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
                </div>
                
            </div>
        </div>
    </section>
</main>

<?php
get_footer();