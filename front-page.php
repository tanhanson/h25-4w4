<?php get_header(); ?>
<?php get_template_part("gabarits/hero"); ?>

    <!-- <section class="galerie">
        
            <h4>Nos destinations favorites</h4>
            <div class="galerie global">
            
            <figure class="galerie__figure">
                <img src="images/paysage1.jpg" alt="paysage1" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage2.jpg" alt="paysage2" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage3.jpg" alt="paysage3" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage4.jpg" alt="paysage4" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage5.jpg" alt="paysage5" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage6.jpg" alt="paysage6" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage7.jpg" alt="paysage7" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage8.jpg" alt="paysage8" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage9.jpg" alt="paysage9" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img src="images/paysage10.jpg" alt="paysage10" class="galerie__img">
            </figure>
        </div>
        </section> -->

        <section class="populaire">
            <div class="global">

            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if(in_category("galerie")){
                the_content();
            } else{?>
           <?php get_template_part( 'gabarits/carte'); ?>
            <?php } ?>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <!-- section rest api -->
<section class="destination">
    <?php categories_liste("destination") ?>
    <h2 class="destination__titre">Articles de la catégorie</h2>
    <div class="destination__list"></div>
</section>
 
    <footer></footer>
    <?php get_footer() ?>
</body>
</html>