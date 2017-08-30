<?php

function ru_social_customizer_section($wp_customize) {
  $wp_customize->add_setting('ru_facebook_handle', array(
    'default' => '',
  ));
  $wp_customize->add_setting('ru_twitter_handle', array(
    'default' => '',
  ));
  $wp_customize->add_setting('ru_instagram_handle', array(
    'default' => '',
  ));
  $wp_customize->add_setting('ru_phone_number_handle', array(
    'default' => '',
  ));
  $wp_customize->add_setting('ru_email_handle', array(
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

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'ru_social_twitter_input',
      array(
        'label'   => __('Twitter Handle', 'udemy'),
        'section' => 'ru_social_section',
        'settings' => 'ru_twitter_handle'
      )
    )
  );


  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'ru_social_instagram_input',
      array(
        'label'   => __('Instagram Handle', 'udemy'),
        'section' => 'ru_social_section',
        'settings' => 'ru_instagram_handle'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'ru_social_phone_number_input',
      array(
        'label'   => __('Phone Number Handle', 'udemy'),
        'section' => 'ru_social_section',
        'settings' => 'ru_phone_number_handle'
      )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'ru_social_email_input',
      array(
        'label'   => __('Email Handle', 'udemy'),
        'section' => 'ru_social_section',
        'settings' => 'ru_email_handle'
      )
    )
  );
}

?>
