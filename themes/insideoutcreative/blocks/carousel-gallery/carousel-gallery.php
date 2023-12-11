<?php

echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');

echo get_field('code_block');



echo '<div class="position-relative">';
$gallery = get_field('gallery');
if( $gallery ): 

    
    echo '<div class="carousel-gallery owl-carousel owl-theme">';


        foreach( $gallery as $image ):
        echo '<div class="position-relative">';
        // echo '<div class="position-relative">';
        // echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set" data-title="' . $image['title'] . '">';
        echo wp_get_attachment_image($image['id'], 'full','',[
            'class'=>'w-100 img-portfolio',
            'style'=>'height:600px;object-fit:cover;'
        ] );
        echo '<div class="bg-black w-100 h-100 position-absolute" style="top:0;left:0;z-index:4;opacity:.45;pointer-events:none;"></div>';
        // echo '</a>';
        // echo '</div>';
        echo '</div>';
        endforeach; 
        echo '</div>';


endif;

echo '<div class="position-absolute w-100 text-center ' . get_field('column_classes') . '" style="bottom:40px;z-index:1;' . get_field('column_style') . '">';

    echo '<div data-aos="fade-up">';
        echo get_field('content');
    echo '</div>';

echo '</div>';

echo '</div>';



// echo '<div class="col-lg-6">';

//     echo get_template_part('partials/block-img');


// echo '</div>';



echo '</section>';

?>