<article class="carte carte--grande">
  <figure class="carte__image">
    <img src="voyage.jpg" alt="Image de voyage">
  </figure>
  <div class="carte__contenu">
    <?php
    if (has_post_thumbnail()) {
      the_post_thumbnail('thumbnail'); 
    } 
    ?>
    <h4 class="carte__titre">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h4>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, "..."); ?></p>
   <?php
  // Récupère les catégories du post
  $categories = get_the_category();

  if (!empty($categories)) {
      $output = [];

      foreach ($categories as $category) {
          // Exclure la catégorie 'populaire' uniquement si on est sur la front-page
          if (is_front_page() && strtolower($category->name) === 'populaire') {
              continue; // saute cette catégorie
          }
          // Prépare le lien vers la catégorie
          $output[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
      }

      // Affiche les liens séparés par une virgule
      echo '<p class="carte__categories">' . implode(', ', $output) . '</p>';
  }
?>
    <p>Température maximum : <?php the_field('temperature_maximum'); ?> °C</p>
  </div>
</article>
