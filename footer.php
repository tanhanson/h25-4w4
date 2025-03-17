<?php 
$footer_adresse = get_theme_mod('footer_adresse', '5800 Sherbrooke-est Montréal (Québec) H1X 2A2');
$footer_telephone = get_theme_mod('footer_telephone', '(514-254-7131)');
$footer_mission = get_theme_mod('footer_mission', 'Notre mission est de inspirer et de faciliter vos voyages en vous offrant des expériences inoubliables. Que ce soit une escapade citadine, une aventure en pleine nature ou un séjour détente, nous vous guidons vers les meilleures destinations avec des conseils personnalisés et des offres exclusives. Voyagez mieux, explorez plus!');
$footer_copyright = get_theme_mod('footer_copyright', 'Copyright © 2025 ClubVoyage. Tous droits reserves.

Tout le contenu publie sur ce site, y compris, mais sans s y limiter, les textes, images, videos, logos, graphiques et mises en page, est la propriete exclusive de ClubVoyage ou de ses partenaires et est protege par les lois sur la propriete intellectuelle. Toute reproduction, distribution, modification ou utilisation non autorisee du contenu, en tout ou en partie, est strictement interdite sans consentement ecrit prealable.

Les informations fournies sur ce site sont a titre informatif uniquement. ClubVoyage s efforce d assurer l exactitude et la mise a jour des contenus, mais ne peut garantir l absence d erreurs ou d omissions. En consequence, nous declinons toute responsabilite quant a l utilisation des informations presentees sur ce site.

Tous les noms de marques, logos et autres elements proteges par la propriete intellectuelle mentionnes sur ce site appartiennent a leurs proprietaires respectifs.

Pour toute demande d autorisation ou de collaboration, veuillez nous contacter a e6194865@cmaisonneuve.qc.ca.');


?>
<footer>

<div class="piedpage" >

<section class="piedpage__s1">

    <div class="piedpage__s1__externe">
    <h3>Lien sur le voyage</h3>
        <?php wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav",
            
        )); ?>
        
    </div>
    <div class="piedpage__s1__adresse">
    <h3>Zone de recherche</h3>
    <div class="piedpage__s1__adresse__coord">
   
    <p><?php echo $footer_adresse?></p>
    <p>Téléphone : <?php echo $footer_telephone?></p>
    </div>
    <div class="piedpage__s1__adresse__recherche">
        <?php get_search_form(); ?>
    </div>
    </div>
    
    <div class="piedpage__s1__description">
    <h3>Lien sur le voyage</h3>
        <p><?php echo $footer_mission?></p>
    </div>

</section>
<section class="piedpage__s2">
<section class="piedpage__s3">

</section>
</div>
<div class="footer__icone">
        <div class="icones">
        <?php get_template_part('gabarits/icones'); ?>
        </div>
         <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'div',
                    'container_class' => 'entete__menu',

                ));?>
        <div class="footer__copyright">
    <p><?php echo $footer_copyright ?></p>
</div>
</div>



</footer>
<?php wp_footer()?>