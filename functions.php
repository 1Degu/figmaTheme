<?php
function figma_dynamic_title_support(){
add_theme_support('title-tag');
}

add_action('after_theme_setup','figma_dynamic_title_support');

function figma_register_scripts(){

    wp_enqueue_script('figma_js','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', array(),'3.4.1',true);
    wp_enqueue_script('figma_carousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(),'3.4.1',true);
    wp_enqueue_script('figma_owl','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', array(),'3.4.1',true);
    wp_enqueue_script('figma_js','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js', array(),'3.4.1',true);

}

?>
