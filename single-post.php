<?php get_header(); ?>
<h1>----------------- single-post.php --------------------</h1>
        <section class="populaire">
            <div class="global">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
            <?php
                if (has_post_thumbnail()) {
                the_post_thumbnail('medium'); } 
                ?>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                    <p>Température maximum: <?php the_field('temperature_maximum') ?>C&#176;</p>
                    <p>Température minimum: <?php the_field('temperature_minimum') ?>C&#176;</p>
                    <p>Température moyenne: <?php the_field('temperature_moyenne') ?>C&#176;</p>
            </article>
                <?php endwhile; endif; ?>
            </div>
        </section>
 
    <?php get_footer(); ?>
    <?php wp_footer() ?>
</body>
</html>