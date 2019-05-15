<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    /*
     * Hook το οποίο δεν έχει κάποιες παραμέτρους και μπορούμε να δέσουμε πάνω του functions.
     * Χρησιμοποιείται για να δέσουμε πάνω του scripts , css, js αλλά και για άλλες εργασίες.
     * Τοποθετείται πάντα πριν το closing </head> tag. Είναι αναγκαίο στο theme μας.
     */
    wp_head();
    ?>
</head>

<body <?php body_class();?>>