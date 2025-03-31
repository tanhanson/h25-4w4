<?php
    $erreur_404 = get_theme_mod('erreur_404', '404');
    $erreur_message = get_theme_mod('erreur_erreur', 'Oops ! On dirait que tu t\'es perdu dans le cyberespace...');
    $erreur_solution = get_theme_mod('erreur_solution', 'Ne t\'inquiète pas, tu peux toujours retourner à la maison en cliquant sur ce bouton!');
    $background_erreur = get_theme_mod('erreur_imageErreur', '');
    $couleur_404 = get_theme_mod('couleur_404', '#eeee22'); 
?>
<?php get_header(); ?>
<div class="conteneur_erreur1">

    <div class="conteneur-erreur" style="background-image: url(<?php echo esc_url($background_erreur); ?>);">

        <h1 style="color: <?php echo esc_attr($couleur_404); ?>;"><?php echo $erreur_404; ?></h1>


        <p style="color: <?php echo esc_attr($couleur_404); ?>;"><?php echo $erreur_message; ?></p>
        <p style="color: <?php echo esc_attr($couleur_404); ?>;"><?php echo $erreur_solution; ?></p>

        <br>
        <div class="bouton-erreur">
            <a href="<?php echo home_url(); ?>" class="bouton-accueil">Retourner à l'accueil</a>
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
