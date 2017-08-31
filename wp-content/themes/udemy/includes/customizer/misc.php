<?php

function ru_misc_customizer_section($wp_customize) {
  $wp_customize->add_setting('ru_header_show_search', array(
    'default' =>  'yes'
  ));
  $wp_customize->add_setting('ru_header_show_cart', array(
    'default' =>  'yes'
  ));
  $wp_customize->add_setting('ru_footer_copyright_text', array(
    'default' =>  'Copyright &copy; 2017 All Rights Reserved by rG devWorks'
  ));
  $wp_customize->add_setting('ru_footer_tos_page', array(
    'default' =>  0
  ));
  $wp_customize->add_setting('ru_footer_privacy_page', array(
    'default' =>  0
  ));

  $wp_customize->add_section('ru_misc_section', array(
    'title'     =>  __('Udemy Misc Settings', 'udemy'),
    'priority'  =>  30
  ));

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'ru_header_show_search_input',
    array(
      'label'   => __('Show Search Button in Header', 'udemy'),
      'section' => 'ru_misc_section',
      'settings'=> 'ru_header_show_search',
      'type'    => 'checkbox',
      'choices' => array(
        'yes'   => __('Yes', 'udemy')
      )
    )
  ));
  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'ru_header_show_cart_input',
    array(
      'label'   => __('Show Shopping Cart in Header', 'udemy'),
      'section' => 'ru_misc_section',
      'settings'=> 'ru_header_show_cart',
      'type'    => 'checkbox',
      'choices' => array(
        'yes'   => __('Yes', 'udemy')
      )
    )
  ));

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'ru_footer_copyright_text_input',
    array(
      'label'   => __('Set Copyright Text', 'udemy'),
      'section' => 'ru_misc_section',
      'settings'=> 'ru_footer_copyright_text'
    )
  ));

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'ru_footer_tos_page_input',
    array(
      'label'   => __('TOS Page', 'udemy'),
      'section' => 'ru_misc_section',
      'settings'=> 'ru_footer_tos_page',
      'type'    => 'dropdown-pages'
    )
  ));

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    'ru_footer_privacy_page_input',
    array(
      'label'   => __('Privacy Policy Page', 'udemy'),
      'section' => 'ru_misc_section',
      'settings'=> 'ru_footer_privacy_page',
      'type'    => 'dropdown-pages'
    )
  ));
}
 ?>
