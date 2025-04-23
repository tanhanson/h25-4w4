<?php get_header()?>
<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_couleur = get_theme_mod('hero_couleur', '');


for($k=0; $k<3; $k++){
    $hero_background[$k]= get_theme_mod('hero_background_' . $k, '');
}

?>

    <section class = "hero" style=" color : <?php echo $hero_couleur ?>;" >
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[0]?>)"></div>
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1]?>)"></div>
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2]?>)"></div>
        <div class="hero__radio">
                <input class="hero__radio__input" data-id_radio="0" type="radio" name="carrousel" checked="checked">
                <input class="hero__radio__input" data-id_radio="1" type="radio" name="carrousel">
                <input class="hero__radio__input" data-id_radio="2" type="radio" name="carrousel">
            </div>
        <div class="hero__contenu global">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description">
            <?php bloginfo('description'); ?>
            </p>
            <p class="hero__courriel">
            <?php bloginfo('admin_email'); ?>
            </p>
            <p class="hero__adresse">
                5800 Sherbrooke-est - Montréal (Québec) H1X 2A2
            </p>
            <p class="hero__auteur">Auteur : <?php  echo $hero_auteur ?></p>
                
                <div class="hero__icone">
                   <?php get_template_part('gabarits/icones'); ?>
                </div>

                <button class = "hero__bouton" type = "submit"> S'INSCRIRE</button>
            </div>
    </section>

    <section class = "inscription">
         
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