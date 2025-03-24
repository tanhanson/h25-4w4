<?php
    $hero_erreur = get_theme_mod('hero_erreur', 'Oops ! On dirait que tu tes perdu dans le cyberespace... ');
    $hero_solution = get_theme_mod('hero_erreur', 'Ne t`inquiète pas, tu peux toujours retourner à la maison en cliquant sur le logo du site!' );
?>
<?php get_header(); ?>
<h1>404</h1>
<p> <?php echo $hero_erreur ?></p>
<p> <?php echo $hero_solution?></p>

 
   
    <?php wp_footer() ?>
</body>
</html>