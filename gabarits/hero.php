<?php
// Récupère le nombre d'images dans le carrousel depuis le Customizer
$hero_carrousel_count = get_theme_mod('hero_carrousel_count', 3);
$hero_background = [];

// Récupère les URL des images de fond du carrousel
for ($k = 0; $k < $hero_carrousel_count; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}

// Récupère le nom de l’auteur et la couleur du texte pour l’en-tête
$hero_auteur = get_theme_mod('hero_auteur', 'Hanson Tan');
$hero_couleur = get_theme_mod('hero_text_color', '#ffffff');
?>

<section class="hero" style="color: <?php echo esc_attr($hero_couleur); ?>;">
    <!-- Carrousel d'images de fond -->
    <?php foreach ($hero_background as $index => $bg_url): ?>
        <?php if (!empty($bg_url)): ?>
            <div class="hero__caroussel <?php echo ($index === 0) ? 'active' : ''; ?>" 
                 style="background-image: url(<?php echo esc_url($bg_url); ?>);">
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Boutons radio pour le carrousel -->
    <div class="hero__radio">
        <?php foreach ($hero_background as $index => $bg_url): ?>
            <?php if (!empty($bg_url)): ?>
                <label class="hero__radio__label">
                    <input class="hero__radio__input" 
                           data-id_radio="<?php echo esc_attr($index); ?>" 
                           type="radio" name="carrousel" 
                           <?php echo ($index === 0) ? 'checked' : ''; ?>>
                    <span class="custom-radio-style"></span>
                </label>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <!-- Contenu textuel de la section héro -->
    <div class="hero__contenu global">
        <!-- Animation texte 1 -->
        <div class="hero__animation hero__animation--active">
            <h1 class="hero__titre">Voyagez plus loin </h1>
            <p class="hero__description">Découvrez des destinations uniques avec notre club passionné d'aventures. </p>
        </div>
        <!-- Animation texte 2 -->
        <div class="hero__animation">
            <h1 class="hero__titre">Rencontrez la communauté</h1>
            <p class="hero__description">Partagez vos expériences avec d'autres passionnés de voyage.</p>
        </div>
        <!-- Animation texte 3 -->
        <div class="hero__animation">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>

        <!-- Coordonnées -->
        <p class="hero__courriel"><?php echo antispambot(get_bloginfo('admin_email')); ?></p>
        <p class="hero__adresse">5800 Sherbrooke-est - Montréal (Québec) H1X 2A2</p>
        <p class="hero__auteur">Auteur : <?php echo esc_html($hero_auteur); ?></p>

        <!-- Icônes sociales -->
        <div class="hero__icone">
             <?php
                $social_networks = ['linkedin', 'behance', 'github'];
                foreach ($social_networks as $network) {
                    $url = get_theme_mod('footer_social_' . $network . '_url');
                    $icon = get_theme_mod('footer_social_' . $network . '_icon');
                    if ($url && $icon) {
                        echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer">';
                        echo '<img src="' . esc_url($icon) . '" alt="' . esc_attr($network) . ' icon" />';
                        echo '</a>';
                    }
                }
                ?>
        </div>

        <!-- Bouton d'appel à l'action -->
        <button class="hero__bouton" type="submit">S'inscrire</button>
    </div>
</section>
