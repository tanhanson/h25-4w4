<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club De Voyages</title>
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php wp_head() ?>
   
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
              
            </figure>
            <input type="checkbox" id="menu-burger">
            <label for="menu-burger" class="menu-burger">
                <span class="menu-burger__icone"></span>
            </label>
             
         
            </label>
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'div',
                    'container_class' => 'entete__menu',

                ));?>
                <?php get_search_form(); ?>
                <!-- <form class="recherche">
                    <input type="search" placeholder="Rechercher" class="recherche__input">
                    <img class="recherche__img"  src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
                </form> -->
            </div>
        </div>
    </header>