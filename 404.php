<?php
    $hero_404 = get_theme_mod('hero_erreur', '404');
    $hero_erreur = get_theme_mod('hero_erreur', 'Oops ! On dirait que tu tes perdu dans le cyberespace... ');
    $hero_solution = get_theme_mod('hero_erreur', 'Ne t`inquiète pas, tu peux toujours retourner à la maison en cliquant sur ce bouton!' );
?>
<?php get_header(); ?>

<div class="conteneur-erreur">
        <h1><?php echo $hero_404; ?></h1>
        <p><?php echo $hero_erreur; ?></p>
        <p><?php echo $hero_solution; ?></p>
        <img class = "image-erreur" src="<?php echo esc_url(get_theme_mod('hero_imageErreur')); ?>" alt="Image d'erreur">
        <br>
        <a href="<?php echo home_url(); ?>" class="bouton-accueil">Retourner à l'accueil</a>
    </div>

 
   
    <?php wp_footer() ?>
</body>
</html>