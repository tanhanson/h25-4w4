<?php 
$footer_adresse = get_theme_mod('footer_adresse', '5800 Sherbrooke-est Montréal (Québec) H1X 2A2');
$footer_telephone = get_theme_mod('footer_telephone', '(514-254-7131)');
$footer_mission = get_theme_mod('footer_mission', 'Notre mission est de inspirer et de faciliter vos voyages en vous offrant des expériences inoubliables. Que ce soit une escapade citadine, une aventure en pleine nature ou un séjour détente, nous vous guidons vers les meilleures destinations avec des conseils personnalisés et des offres exclusives. Voyagez mieux, explorez plus!');


?>
<footer>

<div class="piedpage global" >

<section class="piedpage__s1">

    <div class="piedpage__s1__externe">
    <h3>Lien sur le voyage</h3>
        <?php wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav",
            
        )); ?>
         <div class="hero__icone">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=discord&color=000000" width="20" height="20">
                </div>
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
</footer>
<?php wp_footer()?>