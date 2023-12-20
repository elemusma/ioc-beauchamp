<?php

if(have_rows('sections')): while(have_rows('sections')): the_row();

echo '<section class="position-relative d-flex align-items-center justify-content-center ' . get_sub_field('classes') . '" style="min-height:75vh;' . get_sub_field('style') . '" id="' . get_sub_field('id') . '">';

echo get_template_part('partials/bg-img');

echo get_sub_field('code_block');

echo '<div class="container w-100">';

echo '<div class="row justify-content-center ' . get_sub_field('row_classes') . '" style="' . get_sub_field('row_style') . '">';

echo '<div class="col-lg-9 text-center pb-4 ' . get_sub_field('column_classes') . '" style="' . get_sub_field('column_style') . '">';
echo '<div data-aos="fade-up">';

    echo get_sub_field('content');

echo '</div>';
echo '</div>';

echo '</div>';

echo '</div>';

echo '</section>';

endwhile; endif;


// start of old slides

// if(have_rows('sections')): while(have_rows('sections')): the_row();
// $image = get_sub_field('image');
// $label = get_sub_field('label');
// $dataAos = get_sub_field('data_aos');
// $background = get_sub_field('background');
// $section = sanitize_title_with_dashes($label);
// $content = get_sub_field('content');


// echo '<section id="section-' . $section . '" class="full-height pt-5 pb-5 position-relative overflow-h section-full d-flex align-items-center" style="min-height:100vh;">';

// echo '<div class="container">';
// echo '<div class="row align-items-center">';
// echo '<div class="col-md-6" data-aos="' . $dataAos . '" data-aos-delay="200" style="background:' . $background . '">';
// echo '<div class="text-white" style="margin-bottom:-1rem;">';

// echo $content;

// echo '</div>';
// echo '</div>';

// echo '<div class="col-md-6">';
// echo '<div class="position-relative">';

// echo '<div style="background: #9bbec7;top: -25px;right: 20px;position: absolute;height: 65%;width: 65%;opacity:.25;"></div>';

// echo '<div style="background: #e2c391;width: 25%;height: 90%;position: absolute;bottom: -20px;right: -35px;opacity: 85%;z-index: 0 !important;"></div>';

// echo '<div class="position-relative z-1">';

// echo wp_get_attachment_image($image['id'],'full', '',['class'=>'w-100 h-auto img-bg','style'=>'object-fit:contain;top:0;left:0;']);

// echo '</div>';

// echo '</div>';

// echo '</div>';



// echo '</div>';

// echo '</div>';


// echo '</section>';


// endwhile; 
// endif;


// if(have_rows('sections')):
// echo '<div class="position-fixed side-navbar" style="top:25%;right:25px;transform:translate(0, 50%);z-index:2;">';
// echo '<ul class="list-unstyled text-right mr-md-4 mr-0">';

// while(have_rows('sections')): the_row();
// $label = get_sub_field('label');
// $section = sanitize_title_with_dashes($label);
// $rowIndex=get_row_index();
// // if($rowIndex == '1'){}

// echo '<li id="anchor-section-' . $section . '" class="mt-2 mb-2 position-relative">';

// echo '<a href="#section-' . $section . '" class="pl-md-5 pl-2 pr-2 text-white position-relative h5">';

// echo $label;

// echo '</a>';

// echo '</li>';

// endwhile;

// echo '</ul>';

// echo '</div>';

// endif;

// end of old slides

wp_enqueue_script('slides', get_theme_file_uri('/blocks/slides/slides.js'));

?>