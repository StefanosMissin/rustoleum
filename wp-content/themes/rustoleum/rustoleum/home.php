<?php
/**
* Template Name: HOME GENERAL
*
*/

get_header();

$left_image = get_field('home_general_image_left');
$right_image = get_field('home_general_image_right');
$title = get_field('home_general_title');
$text = get_field('home_general_text');
$button_text = get_field('home_general_button_text');
$button_link = get_field('home_general_button_link');

?>



<main id="primary" class="site-main">
    <section id="home_general_hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 left_image">
                    <img src="<?php echo $left_image; ?>">
                    <p class="image-text"><?php _e("Διακόσμηση","zonepage"); ?></p>
                </div>
                <div class="col-md-6 right_image">
                    <img src="<?php echo $right_image; ?>">
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
            </div>
        </div>
    </section>
</main>

<?php
get_footer();