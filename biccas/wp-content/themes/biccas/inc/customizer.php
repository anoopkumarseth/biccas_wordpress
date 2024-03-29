<?php

function biccas_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('theme_options', array(
        'title'   => __('Theme Options', 'Biccas'),
        'description' => sprintf(__('Biccas Theme Options','biccas')),
        'priority'    => 130
    ));


    // image
    $wp_customize->add_setting('footer_logo', array(
        'default'   => get_bloginfo('template_directory').'/img/logo.jpg',
        'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'   => __('Footer Logo', 'biccas'),
        'section' => 'theme_options',
        'settings' => 'footer_logo',
        'priority'  => 1
    )));

    // title
    $wp_customize->add_setting('footer_copyright', array(
        'default'   => _x('&copy; 2022 Biccas Inc. Copyright and rights reserved', 'biccas'),
        'type'      => 'theme_mod'
      ));
  
      $wp_customize->add_control('footer_copyright', array(
        'label'   => __('Footer Copyright Text', 'biccas'),
        'section' => 'theme_options',
        'priority'  => 2
      ));
      
}
add_action('customize_register', 'biccas_customize_register');