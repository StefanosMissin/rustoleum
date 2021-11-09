<?php
/**
* Template Name: HOME DECORATIVE
*
*/

get_header();

$products_text = get_field('home_decorative_section_product_text');
$products_image = get_field('home_decorative_section_product_image');
$empneusi_text = get_field('home_decorative_section_empneusi_text');
$empneusi_image = get_field('home_decorative_section_empneusi_image');


$decorative_categories = get_terms( array(
    'taxonomy' => 'product_categories',
    'hide_empty' => false,
) );

?>



<main id="primary" class="site-main font_roboto">
    <section id="home_decorative_product_information">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="font_noto_serif"><?php _e("Προϊόντα","zonepage");?></h2>
                    <div class="products_text">
						<div class="text">
							<?php echo $products_text;?>
						</div>
                        <a class="link" href="/about"><?php _e("Δείτε όλα τα προϊόντα","zonepage");?></a>
                    </div>
                </div>
                <div class="col-md-6 image">
                    <img src="<?php echo $products_image;?>">
                </div>
            </div>
        </div>
    </section>
	
	<section id="home_decorative_categories">
        <div class="container">
            <div class="row mt-5">
                <?php 
                    foreach($decorative_categories as $category) {
                    ?>
                        <div class="col-md-4 mb-4">
                            <div class="image">
                                <?php $category_image = get_field("product_category_image", $category->taxonomy . '_' . $category->term_id); ?>
                                <a href="/"><img src="<?php echo $category_image?>"></a>
                            </div>
                            <div class="texts">
                                <a href="/"><h3><?php echo $category->name; ?></h3></a>
                                <a class="link" href="/"><?php _e("Δείτε περισσότερα","zonepage");?></a>
                            </div>
                        </div>
                    <?php
                    };
                ?>
            </div>
        </div>
	</section>


    <section id="home_decorative_empneusi">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="font_noto_serif"><?php _e("Έμπνευση","zonepage");?></h2>
                    <div class="products_text">
						<div class="text">
							<?php echo $empneusi_text;?>
						</div>
                        <a class="link" href="/about"><?php _e("Δείτε Περισσότερα","zonepage");?></a>
                    </div>
                </div>
                <div class="col-md-6 image">
                    <img src="<?php echo $empneusi_image;?>">
                </div>
            </div>
        </div>
    </section>


    <section id="decorative_blog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <h2 class="font_noto_serif"><?php _e("How To","zonepage");?></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate, ipsum ut bibendum pulvinar, mi nunc finibus leo, non elementum diam dui non diam. In blandit varius ipsum vitae convallis. Suspendisse a lacus elit. Duis laoreet eget enim sit amet auctor. Sed nec leo interdum sem ullamcorper vestibulum.</p>
                </div>
                
            </div>
        </div>
    </section>

    <section id="other_info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-5 pb-5 diktuo_sinergatwn">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="font_noto_serif"><?php _e("Δίκτυο Συνεργατών","zonepage");?></h2>
                                <p>Aliquam imperdiet quam eu nisi pellentesque, id luctus massa sollicitudin. Nullam et orci mauris. Quisque tempor semper lacus eget imperdiet. Vivamus aliquet libero accumsan orci congue, rutrum fringilla sapien hendrerit. Mauris sed lorem efficitur, facilisis risus volutpat, tincidunt nisi.</p>
                                <a class="link" href="/"><?php _e("Δείτε Περισσότερα","zonepage");?></a>
                            </div>
                        </div>
                </div>
                <div class="col-md-6 pt-5 pb-5 faq">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="font_noto_serif"><?php _e("Συχνές Ερωτήσεις","zonepage");?></h2>
                                <p>Aliquam imperdiet quam eu nisi pellentesque, id luctus massa sollicitudin. Nullam et orci mauris. Quisque tempor semper lacus eget imperdiet. Vivamus aliquet libero accumsan orci congue, rutrum fringilla sapien hendrerit. Mauris sed lorem efficitur, facilisis risus volutpat, tincidunt nisi.</p>
                                <a class="link" href="/"><?php _e("Δείτε Περισσότερα","zonepage");?></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php
get_footer();