<?php
/**
 * Το αρχείο αυτό εμφανίζει το navigation
 * Workshop Helper
 * Κώδικας 1E
 *
 * @url https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
wp_nav_menu(array(
        'theme_location' => 'wc-primary',
        'container_class' => false,
        'menu_class' => 'navigation',
        'menu_id' => 'primary-navigation',
        'fallback_cb' => false // είναι καλό να είναι στο false
    )
);

