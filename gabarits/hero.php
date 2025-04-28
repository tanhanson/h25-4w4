<?php 
$hero_carrousel_count = get_theme_mod('hero_carrousel_count', 6); // Récupérer le nombre d'images à afficher
$hero_background = [];
for ($k = 0; $k < $hero_carrousel_count; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, ''); // Récupérer l'image de fond pour chaque carrousel
}

$hero_auteur = get_theme_mod('hero_auteur', 'Hanson Tan'); // Récupérer l'auteur
$hero_couleur = get_theme_mod('hero_text_color', '#ffffff'); // Récupérer la couleur du texte pour le Hero
?>

<section class="hero" style="color: <?php echo $hero_couleur; ?>;">
    <!-- Carrousel -->
    <?php for ($k = 0; $k < $hero_carrousel_count; $k++) : ?>
        <div class="hero__carrousel" style="background-image: url(<?php echo esc_url($hero_background[$k]); ?>)">
        </div>
    <?php endfor; ?>

    <!-- Radios pour le carrousel -->
    <div class="hero__radio">
        <?php for ($k = 0; $k < $hero_carrousel_count; $k++) : ?>
            <input class="hero__radio__input" data-id_radio="<?php echo $k; ?>" type="radio" name="carrousel" <?php echo $k == 0 ? 'checked="checked"' : ''; ?>>
        <?php endfor; ?>
    </div>

    <!-- Contenu du Hero -->
    <div class="hero__contenu global">
        <div class="hero__animation">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>
        <div class="hero__animation">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>
        <p class="hero__courriel"><?php echo antispambot(get_bloginfo('admin_email')); ?></p>
        <p class="hero__adresse">5800 Sherbrooke-est - Montréal (Québec) H1X 2A2</p>
        <p class="hero__auteur">Auteur : <?php echo $hero_auteur; ?></p>
        <div class="hero__icone">
            <?php get_template_part('gabarits/icones'); ?>
        </div>
        <button class="hero__bouton" type="submit">S'INSCRIRE</button>
    </div>
</section>
