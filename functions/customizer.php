<?php

function theme_4w4_customize_register($wp_customize) {
    // SECTION HERO
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Hero', 'theme_4w4'),
        'priority' => 30,
    ));

    // Auteur
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Hanson Tan', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Couleur du texte
    $wp_customize->add_setting('hero_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_text_color', array(
        'label' => __('Couleur du texte', 'theme_4w4'),
        'section' => 'hero_section',
    )));

    // Nombre d'images du carrousel
    $wp_customize->add_setting('hero_carrousel_count', array(
        'default' => 3,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('hero_carrousel_count', array(
        'label' => __('Nombre d\'images pour le carrousel', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10,
        ),
    ));

    // Champs dynamiques d'images en arrière-plan
    $nombre_images = get_theme_mod('hero_carrousel_count', 3);

    for ($k = 0; $k < $nombre_images; $k++) {
        $wp_customize->add_setting('hero_background_' . $k, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
            'label' => __('Image en arrière-plan ' . ($k + 1), 'theme_4w4'),
            'section' => 'hero_section',
        )));
    }

    // (... les autres sections comme footer, erreur, etc. peuvent suivre ici sans conflit)

add_action('customize_register', 'theme_4w4_customize_register');

    // Section Footer
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section Footer', 'theme_4w4'),
        'priority' => 30,
    ));

    // Ajout des paramètres pour le Footer
    $wp_customize->add_setting('footer_adresse', array(
        'default' => __('5800 Sherbrooke-est Montréal (Québec) H1X 2A2', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_telephone', array(
        'default' => __('(514-254-7131)', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_telephone', array(
        'label' => __('Téléphone', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_mission', array(
        'default' => __('Notre mission est de', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_mission', array(
        'label' => __('Mission', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_copyright', array(
        'default' => __('Texte de copyright', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_copyright', array(
        'label' => __('Copyright', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

 // Section Footer réseaux sociaux (à ajouter dans customize_register)
$wp_customize->add_section('footer_social_section', array(
    'title'    => __('Icônes sociales du pied de page', 'mon_theme'),
    'priority' => 30,
));

// Image de destination dans le footer
$wp_customize->add_setting('footer_destination_image', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_destination_image', array(
    'label'    => __('Image de destination (Footer)', 'theme_4w4'),
    'section'  => 'footer_social_section',
    'settings' => 'footer_destination_image',
)));



$social_networks = ['linkedin', 'behance', 'github'];

foreach ($social_networks as $network) {
    $wp_customize->add_setting('footer_social_' . $network . '_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_social_' . $network . '_url', array(
        'label'   => ucfirst($network) . ' URL',
        'section' => 'footer_social_section',
        'type'    => 'url',
    ));

    $wp_customize->add_setting('footer_social_' . $network . '_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_social_' . $network . '_icon', array(
        'label'    => ucfirst($network) . ' Icône',
        'section'  => 'footer_social_section',
        'settings' => 'footer_social_' . $network . '_icon',
    )));
}
    // Section Erreur
    $wp_customize->add_section('erreur_section', array(
        'title' => __('Section Erreur', 'theme_4w4'),
        'priority' => 30,
    ));

    // Ajout du texte d'erreur
    $wp_customize->add_setting('erreur_404', array(
        'default' => __('Texte d\'erreur', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('erreur_404', array(
        'label' => __('Erreur', 'theme_4w4'),
        'section' => 'erreur_section',
        'type' => 'text',
    ));

    // Ajout de la couleur de fond pour Erreur
    $wp_customize->add_setting('erreur_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_couleur', array(
        'label' => __('Couleur de fond pour l\'erreur', 'theme_4w4'),
        'section' => 'erreur_section',
    )));

    // Ajout de l'image de fond pour Erreur
    $wp_customize->add_setting('erreur_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
        'label' => __('Image de fond pour l\'erreur', 'theme_4w4'),
        'section' => 'erreur_section',
    )));

    // Ajout de l'image d'erreur
    $wp_customize->add_setting('erreur_imageErreur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_imageErreur', array(
        'label' => __('Image d\'erreur', 'theme_4w4'),
        'section' => 'erreur_section',
    )));

    // Section 404
    $wp_customize->add_section('section_404', array(
        'title' => __('Section 404', 'theme_4w4'),
        'priority' => 30,
    ));

    // Ajout du texte d'erreur pour 404
    $wp_customize->add_setting('erreur_404_text', array(
        'default' => __('Page introuvable', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('erreur_404_text', array(
        'label' => __('Message d\'erreur 404', 'theme_4w4'),
        'section' => 'section_404',
        'type' => 'text',
    ));

    // Ajout de la couleur pour la page 404
    $wp_customize->add_setting('erreur_404_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_404_couleur', array(
        'label' => __('Couleur de fond pour 404', 'theme_4w4'),
        'section' => 'section_404',
    )));

    // Ajout de l'image de fond pour la page 404
    $wp_customize->add_setting('erreur_404_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_404_background', array(
        'label' => __('Image de fond pour 404', 'theme_4w4'),
        'section' => 'section_404',
    )));

    // Ajout de l'image d'erreur pour la page 404
    $wp_customize->add_setting('erreur_404_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_404_image', array(
        'label' => __('Image d\'erreur 404', 'theme_4w4'),
        'section' => 'section_404',
    )));

    // Ajout du contrôle pour la couleur de texte dans le Footer
    $wp_customize->add_setting('footer_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur', array(
        'label' => __('Couleur de texte du Footer', 'theme_4w4'),
        'section' => 'footer_section',
    )));

    $wp_customize->add_section('footer_social_section', array(
    'title'    => __('Footer - Image et Réseaux Sociaux', 'theme_4w4'),
    'priority' => 35,
));




}

add_action('customize_register', 'theme_4w4_customize_register');
