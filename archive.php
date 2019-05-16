<?php
/**
 * Το αρχείο αυτό εμφανίζει τα archive των posts.
 * Workshop Helper
 * Κώδικας 2A
 *
 * @url https://developer.wordpress.org/themes/template-files-section/post-template-files/#archive-php
 * @url https://developer.wordpress.org/reference/functions/the_archive_title/
 * @url https://developer.wordpress.org/reference/functions/the_archive_description
 * @url https://codex.wordpress.org/Function_Reference/previous_posts_link
 * @url https://codex.wordpress.org/Function_Reference/next_posts_link
 */
/*
 * Kώδικας 3Α
 */
get_header();

?>
<div class="container-fluid container">
    <div class="row">
        <div class="col-xs-12">
            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
        </div>
    </div>
</div>
    <div class="main-content-wrapper">
        <div class="container-fluid container">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <?php
                    /**
                     * Κώδικας 2Γ
                     *
                     * @url https://developer.wordpress.org/reference/functions/the_post_thumbnail/
                     * @url https://developer.wordpress.org/reference/functions/the_excerpt/
                     * @url https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length
                     * Φτιάχνουμε το wordpress loop για τα άλλα posts.
                     */
                    if (have_posts()): ?>
                        <div class="blog-listings">
                            <div class="row">


                                <?php while(have_posts()): the_post(); ?>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="blog-listing">

                                            <?php if(has_post_thumbnail()):
                                                the_post_thumbnail('blog-list',array('class'=>'img-responsive'));
                                            endif;?>
                                            <h3><?php the_title();?></h3>
                                            <p>
                                                <?php the_excerpt();?>
                                            </p>
                                            <a href="<?php the_permalink();?>" class="blog-listing-read-more">Read More</a>
                                        </div>
                                    </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p>Sidebar Maybe</p>
                </div>
            </div>
            <div class="pagination">
                <?php previous_posts_link( '« Newer Entries' ); ?>
                <?php next_posts_link( 'Next Entries >>' ); ?>
            </div>
        </div>
    </div>
<?php get_footer();