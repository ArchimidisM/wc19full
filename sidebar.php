<?php
/**
 * Το αρχείο αυτό εμφανίζει τη sidebar
 * Workshop Helper
 * Κώδικας 3B
 *
 * @url https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 */
if (!is_active_sidebar('sidebar')) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar'); ?>
</aside><!-- #secondary -->
