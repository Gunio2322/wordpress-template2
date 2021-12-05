
<?php
//obrazek wyrozniajacy
add_theme_support( 'post-thumbnails' ); 
add_image_size('standard-image', 1024,  auto,  true);
array(‘center’, ‘center’);

function puremedia_setup(){

    //  nowe funkcjonalności
    
  }
  add_action('after_setup_theme', 'puremedia_setup');
  
  

function puremedia_scripts() {
wp_enqueue_style( "style-base-css", get_template_directory_uri()."/css/base.css",false,'1.0','all');
wp_enqueue_style( "style-main-css", get_template_directory_uri()."/css/main.css",false,'1.0','all');
wp_enqueue_style( "style-media-queries-css", get_template_directory_uri()."/css/media-queries.css",false,'1.0','all');
wp_enqueue_style( "style-fonts-css", get_template_directory_uri()."/css/fonts.css",false,'1.0','all');


wp_enqueue_script( 'backstretch-script', get_template_directory_uri().'/js/backstretch.js',array('jquery'),'1.0', true);
wp_enqueue_script( 'jquery-script', get_template_directory_uri().'/js/jquery-1.10.2.min.js',array('jquery'),'1.0', true);
wp_enqueue_script( 'migrate-script', get_template_directory_uri().'/js/jquery-migrate-1.2.1.min.js',array('jquery'),'1.0', true);
wp_enqueue_script( 'fittex-script', get_template_directory_uri().'/js/jquery.fittex.js',array('jquery'),'1.0', true);
wp_enqueue_script( 'lexslider-script', get_template_directory_uri().'/js/jquery.flexslider.js',array('jquery'),'1.0', true);
wp_enqueue_script( 'main-script', get_template_directory_uri().'/js/main.js',array('jquery'),'1.0', true);
wp_enqueue_script( 'modernizr-script', get_template_directory_uri().'/js/modernizr.js',array('jquery'),'1.0', true);
}
add_action( 'wp_enqueue_scripts', 'puremedia_scripts' );





