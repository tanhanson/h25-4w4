<?php  
    $footer_adresse = get_theme_mod('footer_adresse', '5800 Sherbrooke-est Montréal (Québec) H1X 2A2');  
    $footer_telephone = get_theme_mod('footer_telephone', '(514) 254-7131');  
    $footer_mission = get_theme_mod('footer_mission', 'Notre mission consiste de...'); 
    $footer_couleur = get_theme_mod('footer_couleur', '#cccccc');
    $footer_image_destination = get_theme_mod('footer_image_destination');

    if (function_exists('genere_vague')) {
        genere_vague($footer_couleur);
    }
?>

<footer style="background-color: <?= esc_attr($footer_couleur); ?>; position: relative;">
    
    
    
    <div class="piedpage">
        <?php
    $image_footer = get_theme_mod('footer_destination_image');
    if ($image_footer) {
        echo '<div class="footer__background-image">';
        echo '<img src="' . esc_url($image_footer) . '" alt="Image de fond du footer">';
        echo '</div>';
    }
    ?>
        <section class="piedpage__s1">
            <!-- Liens sur les voyages -->
            <div class="piedpage__s1__externe">
                <h4>LIENS SUR LES VOYAGES</h4>
                <?php wp_nav_menu(array(
                    'menu' => 'externe',
                    'container' => 'nav',
                )); ?>
            </div>

            <!-- Adresse et recherche -->
            <div class="piedpage__s1__adresse">
                <h4>ADRESSE ET RECHERCHE</h4>
                <div class="piedpage__s1__adresse__coord">
                    <?= esc_html($footer_adresse); ?>
                </div>
                <div class="piedpage__s1__description">
                    Téléphone: <?= esc_html($footer_telephone); ?>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>

            <!-- Mission -->
            <div class="piedpage__s1__mission">
                <h4>MISSION DU CLUB</h4>
                <div class="piedpage__s1__mission__texte">
                    <?= esc_html($footer_mission); ?>
                </div>
            </div>
        </section>

        <!-- Bas du footer : icônes -->
        <section class="piedpage__s2">
            <div class="piedpage__s2__icone">
                <?php
                $social_networks = ['linkedin', 'behance', 'github'];
                foreach ($social_networks as $network) {
                    $url = get_theme_mod('footer_social_' . $network . '_url');
                    $icon = get_theme_mod('footer_social_' . $network . '_icon');
                    if ($url && $icon) {
                        echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer">';
                        echo '<img src="' . esc_url($icon) . '" alt="' . esc_attr($network) . ' icon" />';
                        echo '</a>';
                    }
                }
                ?>
            </div>
        </section>
    </div>
</footer>

<?php wp_footer(); ?>