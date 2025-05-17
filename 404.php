<?php
// Récupération des valeurs personnalisées définies dans le Customizer
$code = get_theme_mod('erreur_404', '404');
$message = get_theme_mod('erreur_erreur', 'Oops, vous avez échoué sur l\'île 404!');
$solution = get_theme_mod('erreur_solution', 'Pas de panique, cher membre explorateur!...');
$image = get_theme_mod('erreur_imageErreur', '');
$couleur = get_theme_mod('couleur_404', '#eeee22');
?>

<?php get_header(); ?>

<!-- Conteneur principal pour la page 404 -->
<div class="conteneur_erreur1">
  <div class="conteneur-erreur" style="background-image: url(<?php echo esc_url($image); ?>); color: <?php echo esc_attr($couleur); ?>;">
    
    <!-- Message d'erreur personnalisé -->
    <h1><?php echo esc_html($message); ?></h1>
    <p><?php echo esc_html($solution); ?></p>

    <!-- Bouton pour retourner à la page d'accueil -->
    <div class="bouton-erreur">
      <a href="<?php echo home_url(); ?>" class="bouton-accueil">Retour à l'accueil</a>
    </div>

    <!-- Menu personnalisé pour la page 404 (s'il existe) -->
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
