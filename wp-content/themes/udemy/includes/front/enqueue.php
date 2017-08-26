<?php

function ru_enqueue() {
  wp_register_style('ru_google_fonts',  'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic'
  );
  wp_register_style('ru_bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');
  wp_register_style('ru_style', get_template_directory_uri().'/assets/style.css');
  wp_register_style('ru_dark', get_template_directory_uri().'/assets/css/dark.css');
  wp_register_style('ru_font_icons', get_template_directory_uri().'/assets/css/font-icons.css');
  wp_register_style('ru_animate', get_template_directory_uri().'/assets/css/animate.css');
  wp_register_style('ru_magnific_popup',  get_template_directory_uri().'/assets/css/magnific-popup.css');
  wp_register_style('ru_responsive', get_template_directory_uri().'/assets/css/responsive.css');
  wp_register_style('ru_custom', get_template_directory_uri().'/assets/css/custom.css');

  wp_enqueue_style('ru_google_fonts');
  wp_enqueue_style('ru_bootstrap');
  wp_enqueue_style('ru_style');
  wp_enqueue_style('ru_dark');
  wp_enqueue_style('ru_font_icons');
  wp_enqueue_style('ru_animate');
  wp_enqueue_style('ru_magnific_popup');
  wp_enqueue_style('ru_responsive');
  wp_enqueue_style('ru_custom');

}

 ?>
