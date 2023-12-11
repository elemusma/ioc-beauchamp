<?php

$image = get_field('image');

if($image){
    echo wp_get_attachment_image($image['id'],'full','',[
        'class'=>'w-100 h-auto block-img' . get_field('image_classes'),
        'style'=>'' . get_field('image_style')
    ]);
}

?>