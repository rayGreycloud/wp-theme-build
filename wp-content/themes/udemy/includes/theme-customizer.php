<?php
function ru_customize_register($wp_customize) {
  $wp_customize->add_setting('ru_facebook_handle', array(
    'default' => '',
  ));

  $wp_customize->add_section('ru_social_section', array(
    'title'    =>  __('Udemy Social Settings', 'udemy'),
    'priority' => 30
  ));

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'ru_social_facebook_input',
      array(
        'label'   => __('Facebook Handle', 'udemy'),
        'section' => 'ru_social_section',
        'settings' => 'ru_facebook_handle'
      )
    )
  );
}
?>
