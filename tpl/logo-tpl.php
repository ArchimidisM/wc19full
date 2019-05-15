<?php
/**
 * Το αρχείο αυτό εμφανίζει το logo αν υπάρχει αλλιώς το site title.
 * Workshop Helper
 * Κώδικας 1E
 *
 * @url https://developer.wordpress.org/reference/functions/has_custom_logo/
 * @url https://developer.wordpress.org/reference/functions/get_custom_logo/
 * @url https://developer.wordpress.org/reference/functions/get_bloginfo/
 */

if (has_custom_logo()):
    the_custom_logo();
else: ?>
    <div class="no-logo">
        <h1><?php echo get_bloginfo('site');?></h1>
        <h3><?php echo get_bloginfo('description');?></h3>
    </div>
<?php
endif;

?>

