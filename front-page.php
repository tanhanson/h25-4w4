<?php get_header(); ?>

<h1>----------------- INDEX.PHP --------------------</h1>
    <section class = "hero">
            <div class="hero__contenu global">
                <h1 class="hero__titre">Voyagez dans le monde avec Air Canada</h1>
                <p class="hero__description">
                    Découvrez des destinations uniques et inoubliables avec Voyages du Monde. Nous vous offrons des expériences authentiques, des paysages à couper le
                </p>
                <p class="hero__courriel">
                    <a href="#">info@cmaisonneuve.qc.ca</a>
                </p>
                <p class="hero__adresse">
                    5800 Sherbrooke-est Montréal (Québec) H1X 2A2
                </p>
                <div class="hero__icone">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=discord&color=000000" width="20" height="20">
                </div>

                <button class = "hero__bouton" type = "submit"> S'INSCRIRE</button>
            </div>
    </section>

    <section class = inscription>
         
            <form>
                <div class="inscription__info">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Écrivez votre nom">
                </div>
    
                <div class="inscription__info">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Écrivez votre prénom">
                </div>
    
                <div class="inscription__info">
                    <label for="courriel">Courriel</label>
                    <input type="email" id="courriel" name="courriel" placeholder="Écrivez votre courriel">
                </div>
    
                <div class="inscription__info">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" placeholder="Écrivez votre téléphone">
                </div>
    
                <button type="submit">S'INSCRIRE</button>
            </form>
    </section>

    <section class="galerie">
        
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
        </section>

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
 
    <footer></footer>
    <?php get_footer() ?>
</body>
</html>