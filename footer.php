<footer>

<div class="piedpage global" >

<section class="piedpage__s1">
    <div class="piedpage__s1__externe">
        <?php wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav",
            
        )); ?>
    </div>
    <div class="piedpage__s1__adresse">
    <div class="piedpage__s1__adresse__coord">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi 
    </div>
    <div class="piedpage__s1__adresse__recherche">
        <?php get_search_form(); ?>
    </div>
    </div>
    <div class="piedpage__s1__description">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum mollitia voluptatum perferendis error atque earum optio blanditiis vero pariatur quaerat nesciunt eligendi quo dolor excepturi voluptatem eius, cum, quasi illo.
    </div>

</section>
<section class="piedpage__s2">
<section class="piedpage__s3">

</section>
</div>
</footer>
<?php wp_footer()?>