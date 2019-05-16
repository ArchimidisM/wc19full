<?php
/**
 * Το αρχείο αυτό εμφανίζει τα single posts και τα attachments
 * Workshop Helper
 * Κώδικας 2A
 * Κώδικας 2Δ
 * @url https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 */

get_header();
?>
    <div class="single-post-container">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <?php if (have_posts()):
                        while (have_posts()): the_post(); ?>
                            <article class="single-entry">
                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('full', array('class' => 'img-responsive')); endif;
                                ?>
                                <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                            </article>
                        <?php endwhile;
                    endif; ?>

                </div>
                <div class=" col-sm-4 col-xs-12">
                    <p>Sidebar</p>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();