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
   
    <p>3800 Rue Sherbrooke E, Montreal QC H1X2A2</p>
    </div>
    <div class="piedpage__s1__adresse__recherche">
        <?php get_search_form(); ?>
    </div>
    </div>
    
    <div class="piedpage__s1__description">
    <h3>Lien sur le voyage</h3>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum mollitia voluptatum perferendis error atque earum optio blanditiis vero pariatur quaerat nesciunt eligendi quo dolor excepturi voluptatem eius, cum, quasi illo.
    </div>

</section>
<section class="piedpage__s2">
<section class="piedpage__s3">

</section>
</div>
</footer>
<?php wp_footer()?>