<?php
    $erreur_404 = get_theme_mod('erreur_404', '404');
    $erreur_message = get_theme_mod('erreur_erreur', 'Oops, vous avez échoué sur l\'île 404!');
    $erreur_solution = get_theme_mod('erreur_solution', 'Pas de panique, cher membre explorateur!, Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnés pour vous. REprenez votre périple en cliquant sur "Accueil" pour découvrir à nouveau nos voyages d\'exception!');
    $background_erreur = get_theme_mod('erreur_imageErreur', '');
    $couleur_404 = get_theme_mod('couleur_404', '#eeee22'); 
?>
<?php get_header(); ?>
<div class="conteneur_erreur1">

    <div class="conteneur-erreur" style="background-image: url(<?php echo esc_url($background_erreur); ?>);">

        <h1 style="color: <?php echo esc_attr($couleur_404); ?>;"><?php echo $erreur_message; ?></h1>
        <p style="color: <?php echo esc_attr($couleur_404); ?>;"><?php echo $erreur_solution; ?></p>

        <br>
        <div class="bouton-erreur">
            <a href="<?php echo home_url(); ?>" class="bouton-accueil">Retour à l'accueil</a>
            
        </div>
        <?php wp_nav_menu(array(
            "menu" => "404",
            "container" => "nav",
            
        )); ?>
    </div>

</div>
<?php get_footer(); ?>
<?php wp_footer() ?>

</body>
</html>
