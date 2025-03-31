<?php

function theme_4w4_customize_register($wp_customize) {
    // Création d'une nouvelle section pour le Hero
    $wp_customize->add_section('hero_section', array(
      'title' => __('Section Hero', 'theme_4w4'),
      'priority' => 30,
  ));
  
  ////////////////////////////////// ajout de la donnée pour Hero
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Hanson Tan', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  ////////////////////////////////// ajout du contrôle pour Hero
  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_4w4'),
    'section' => 'hero_section',
    'type' => 'text',
  ));
  
  /////////////////////////////// Footer
  
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
    'label' => __('Téléphone', 'theme_4w4'),
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

  // Ajout de la section "Erreur"
  $wp_customize->add_section('erreur_section', array(
    'title' => __('Section Erreur', 'theme_4w4'),
    'priority' => 30,
  ));
  
  ////////////////////////////////// ajout de la donnée pour Erreur
  $wp_customize->add_setting('erreur_404', array(
    'default' => __('Texte d\'erreur', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('erreur_404', array(
    'label' => __('Erreur', 'theme_4w4'),
    'section' => 'erreur_section',
    'type' => 'text',
  ));

  // Ajout de la couleur pour Erreur
  $wp_customize->add_setting('erreur_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  ////////////////////////////////// ajout du contrôle pour Erreur
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_couleur', array(
    'label' => __('Image en arrière-plan', 'theme_4w4'),
    'section' => 'erreur_section',
  )));
  
  ////////////////////////////////// ajout de la donnée image en arrière-plan pour Erreur
  $wp_customize->add_setting('erreur_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  ////////////////////////////////// ajout du contrôle de la donnée pour Erreur
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
    'label' => __('Sélection de couleur', 'theme_4w4'),
    'section' => 'erreur_section',
  )));

  // Ajout de l'image d'erreur pour la section Erreur
  $wp_customize->add_setting('erreur_imageErreur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_imageErreur', array(
    'label' => __('Image d\'erreur', 'theme_4w4'),
    'section' => 'erreur_section',
  )));

  //                                                          Ajout de la section "Erreur examen intra"
  $wp_customize->add_section('section_404', array(
    'title' => __('Section 404', 'theme_4w4'),
    'priority' => 30,
  ));
  
  ////////////////////////////////// ajout de la donnée pour Erreur
  $wp_customize->add_setting('erreur_404', array(
    'default' => __('Texte d\'erreur', 'theme_4w4'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  
  $wp_customize->add_control('erreur_404', array(
    'label' => __('Erreur', 'theme_4w4'),
    'section' => 'section_404',
    'type' => 'text',
  ));

  // Ajout de la couleur pour Erreur
  $wp_customize->add_setting('erreur_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  ////////////////////////////////// ajout du contrôle pour Erreur
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_couleur', array(
    'label' => __('couleur_404', 'theme_4w4'),
    'section' => 'section_404',
  )));
  
  ////////////////////////////////// ajout de la donnée image en arrière-plan pour Erreur
  $wp_customize->add_setting('erreur_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  ////////////////////////////////// ajout du contrôle de la donnée pour Erreur
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
    'label' => __('Sélection de couleur', 'theme_4w4'),
    'section' => 'section_404',
  )));

  // Ajout de l'image d'erreur pour la section Erreur
  $wp_customize->add_setting('erreur_imageErreur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_imageErreur', array(
    'label' => __('Image d\'erreur', 'theme_4w4'),
    'section' => 'section_404',
  )));
}

add_action('customize_register', 'theme_4w4_customize_register');

?>
