<?php
echo '<footer>';

echo '<section class="pt-5" style="background:#211d1b;padding:50px 0px;">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-5 text-center pb-5">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
$logoFooter = get_field('logo_footer','options'); 

if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",[
    'class'=>'w-100 h-auto',
    'style'=>'max-width:300px;'
]); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",[
    'class'=>'w-100 h-auto',
    'style'=>'max-width:300px;'
]);
}

echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

echo '<section class="bg-black" style="padding:25px 0px;">';
echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';
echo '<div class="col-lg-3">';

echo get_template_part('partials/si');

echo '</div>';

echo '<div class="col-lg-6 text-center text-white">';

echo '<div class="text-gray-1 pt-4">';

the_field('website_message','options');

echo '</div>';
echo '</div>';

echo '<div class="col-lg-3 text-right text-white">';
echo '<a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer" style="" class="">';
echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/04/created-by-inside-out-creative.png" style="width:150px;" class="h-auto ml-2" alt="">';
// echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/06/created-by-inside-out-creative-black.png" style="width:150px;" class="h-auto ml-2" alt="">';
echo '</a>';
echo '</div>';


echo '</div>';
echo '</div>';
echo '</section>';
echo '<div class="bg-black text-center pt-3 pb-3 pl-5 pr-5">';
    echo '<div class="d-flex justify-content-center align-items-center">';

    echo '</div>';
echo '</div>';
echo '</footer>';

if(get_field('footer', 'options')) { the_field('footer', 'options'); }
if(get_field('footer_code')) { the_field('footer_code'); }

wp_footer();

echo '</body>';
echo '</html>';
?>