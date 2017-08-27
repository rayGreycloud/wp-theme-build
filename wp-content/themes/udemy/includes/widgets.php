<?php

function ru_widgets() {
  register_sidebar(array(
    'name'        => __('My First Theme Sidebar', 'udemy'),
    'id'          => 'ru_sidebar',
    'description'   => __('Sidebar for the udemy theme', 'udemy'),
    'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
    'after_widget' => '<div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',

  ));
}

?>
