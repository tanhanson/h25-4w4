<?php
$hero_carrousel_count = get_theme_mod('hero_carrousel_count', 3);
$hero_background = [];

for ($k = 0; $k < $hero_carrousel_count; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}

$hero_auteur = get_theme_mod('hero_auteur', 'Hanson Tan');
$hero_couleur = get_theme_mod('hero_text_color', '#ffffff');
?>

<section class="hero" style="color: <?php echo esc_attr($hero_couleur); ?>;">
    <!-- Carrousel -->
    <?php foreach ($hero_background as $index => $bg_url): ?>
        <?php if (!empty($bg_url)): ?>
            <div class="hero__caroussel <?php echo ($index === 0) ? 'active' : ''; ?>" style="background-image: url(<?php echo esc_url($bg_url); ?>);"></div>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Radios -->
    <div class="hero__radio">
        <?php foreach ($hero_background as $index => $bg_url): ?>
            <?php if (!empty($bg_url)): ?>
                <input class="hero__radio__input" data-id_radio="<?php echo esc_attr($index); ?>" type="radio" name="carrousel" <?php echo ($index === 0) ? 'checked' : ''; ?>>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <!-- Contenu -->
    <div class="hero__contenu global">
        <div class="hero__animation hero__animation--active">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>
        <div class="hero__animation">
            <h1 class="hero__titre">Lorem</h1>
            <p class="hero__description">Lorem ipsum</p>
        </div>
        <div class="hero__animation">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>

        <p class="hero__courriel"><?php echo antispambot(get_bloginfo('admin_email')); ?></p>
        <p class="hero__adresse">5800 Sherbrooke-est - Montréal (Québec) H1X 2A2</p>
        <p class="hero__auteur">Auteur : <?php echo esc_html($hero_auteur); ?></p>
        <div class="hero__icone">
            <?php get_template_part('gabarits/icones'); ?>
        </div>
        <button class="hero__bouton" type="submit">S'inscrire</button>
    </div>
</section>
