<?php
$code = get_theme_mod('erreur_404', '404');
$message = get_theme_mod('erreur_erreur', 'Oops, vous avez échoué sur l\'île 404!');
$solution = get_theme_mod('erreur_solution', 'Pas de panique, cher membre explorateur!...');
$image = get_theme_mod('erreur_imageErreur', '');
$couleur = get_theme_mod('couleur_404', '#eeee22');
?>

<?php get_header(); ?>

<div class="conteneur_erreur1">
  <div class="conteneur-erreur" style="background-image: url(<?php echo esc_url($image); ?>); color: <?php echo esc_attr($couleur); ?>;">
    
    <h1><?php echo esc_html($message); ?></h1>
    <p><?php echo esc_html($solution); ?></p>

    <div class="bouton-erreur">
      <a href="<?php echo home_url(); ?>" class="bouton-accueil">Retour à l'accueil</a>
    </div>

    <?php
    wp_nav_menu([
      'menu' => '404',
      'container' => 'nav'
    ]);
    ?>
    
  </div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
