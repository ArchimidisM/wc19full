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

<body <?php body_class(); ?>>

<!-- Δημιουργούμε το navigation menu wrapper
το οποίο περιέχει logo + navigation
Κώδικας 1Δ,
 Κώδικας 1Ε
 -->

<div class="header-wrapper">
    <div class="container container-fluid">
        <div class="row middle-xs">
            <div class="col-sm-4 col-xs-12">
                <?php
                    get_template_part('tpl/logo-tpl');
                ?>
            </div>
            <div class="col-sm-8 col-xs-12">
                <?php get_template_part('tpl/navigation-tpl'); ?>
            </div>
        </div>
    </div>
</div>