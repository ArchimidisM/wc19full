<?php get_header(); ?>
<!-- Δημιουργούμε τo featured post kai main content wrappers
Κώδικας 1Δ -->
<div class="featured-post-wrapper">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <?php
                /**
                 * Κώδικας 2B
                 * @url https://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters
                 *
                 * Φτιάχνουμε το wordpress loop για το featured post.
                 */
                ?>
                <img src="https://placehold.it/1280x450" class="img-responsive"/>
            </div>
        </div>
    </div>
</div>

<!-- Main content --->
<div class="main-content-wrapper">
    <div class="container-fluid container">
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <p> Blog Listing</p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <p>Sidebar Maybe</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
