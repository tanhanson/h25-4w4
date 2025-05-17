<?php get_header(); ?>

<!-- Section principale pour afficher un article individuel -->
<section class="populaire">
    <div class="global single-post">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <div class="haut-page">
                    <!-- Affiche l'image à la une si disponible, sinon une image par défaut -->
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default.png" alt="Image par défaut">
                    <?php endif; ?>

                    <!-- Titre de l'article et informations sur l'auteur -->
                    <h2><?php the_title(); ?></h2>
                    <p>Par <?php the_author(); ?> | Publié le <?php the_time('j F Y'); ?></p>
                </div>

                <!-- Affiche les catégories liées à l'article, sauf celle en cours si sur une page catégorie -->
                <div class="categories">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        $output = [];
                        foreach ($categories as $category) {
                            if (is_category() && get_queried_object_id() === $category->term_id) continue;
                            $output[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                        }
                        echo implode(', ', $output);
                    }
                    ?>
                </div>

                <!-- Contenu principal de l'article -->
                <div class="description">
                    <div><?php the_content(); ?></div>
                </div>

                <!-- Champs personnalisés (ACF) pour les températures -->
                <div class="temperatures">
                    <p>Température maximum : <?php the_field('temperature_maximum'); ?> C&#176;</p>
                    <p>Température minimum : <?php the_field('temperature_minimum'); ?> C&#176;</p>
                    <p>Température moyenne : <?php the_field('temperature_moyenne'); ?> C&#176;</p>
                </div>
            </article>
        <?php endwhile; endif; ?>

    </div>
</section>

<?php get_footer(); ?>
</body>
</html>
