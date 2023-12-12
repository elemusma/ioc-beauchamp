<?php

echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');

echo get_field('code_block');

echo '<div class="container">';

echo '<div class="row justify-content-center ' . get_field('row_classes') . '" style="' . get_field('row_style') . '">';

echo '<div class="col-lg-6 ' . get_field('column_classes') . '" style="' . get_field('column_style') . '">';

echo '<div data-aos="fade-up">';
    echo get_field('content');
echo '</div>';
echo '</div>';

echo '<div class="col-lg-6 ' . get_field('image_column_classes') . '" style="' . get_field('image_column_style') . '">';

    echo get_template_part('partials/block-img');


echo '</div>';

echo '</div>';

echo '</div>';

echo '</section>';

?>