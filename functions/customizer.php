<?php

function theme_4w4_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    // Création d'une novuelle section dans le customizer
    $wp_customize->add_section('hero_section', array(
      'title' => __('Section Hero', 'theme_4w4'),
      'priority' => 30,
  ));
  
  ////////////////////////////////// ajout de la donnée
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Hanson Tan', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  ////////////////////////////////// ajout du contrôle de la donnée
  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_4w4'),
    'section' => 'hero_section',
    'type' => 'text',
  
  ));
  
  /////////////////////////////// footer
  
  $wp_customize->add_section('footer_section', array(
    'title' => __('Section Footer', 'theme_4w4'),
    'priority' => 30,
  ));
  $wp_customize->add_setting('footer_adresse', array(
    'default' => __('5800 Sherbrooke-est Montréal (Québec) H1X 2A2', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('footer_adresse', array(
    'label' => __('Adresse', 'theme_4w4'),
    'section' => 'footer_section',
    'type' => 'text',
  
  ));
  
  $wp_customize->add_setting('footer_telephone', array(
    'default' => __('(514-254-7131)', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('footer_telephone', array(
    'label' => __('Telephone', 'theme_4w4'),
    'section' => 'footer_section',
    'type' => 'text',
  
  ));
  
  
  $wp_customize->add_setting('footer_mission', array(
    'default' => __('Notre mission est de', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('footer_mission', array(
    'label' => __('Mission', 'theme_4w4'),
    'section' => 'footer_section',
    'type' => 'text',
  
  ));

  $wp_customize->add_setting('footer_copyright', array(
    'default' => __('Texte de copyright', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('footer_copyright', array(
    'label' => __('Copyright', 'theme_4w4'),
    'section' => 'footer_section',
    'type' => 'text',
  
  ));

  $wp_customize->add_setting('hero_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  ////////////////////////////////// ajout du contrôle de la donnée
  
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label' => __('Image en arrière plan', 'theme_4w4'),
    'section' => 'hero_section',
  )));
  
  ////////////////////////////////// ajout de la donnée image en arrière-plan
  
  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  ////////////////////////////////// ajout du contrôle de la donnée
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Selection de couleur', 'theme_4w4'),
    'section' => 'hero_section',
  )));
  
  }
  
  add_action('customize_register', 'theme_4w4_customize_register');

  ?>