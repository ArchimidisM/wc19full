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
                 *
                 *
                 * @url https://developer.wordpress.org/reference/functions/the_post_thumbnail/
                 * @url https://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters
                 * Φτιάχνουμε το wordpress loop για το featured post.
                 */

                $featuredArgs = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'ignore_sticky_posts' => true,
                    'category_name' => 'featured'
                );

                $featuredQ = new WP_Query($featuredArgs);

                if ($featuredQ->have_posts()):
                    while ($featuredQ->have_posts()): $featuredQ->the_post(); ?>

                        <div class="featured-post">
                            <?php if (has_post_thumbnail()):
                                the_post_thumbnail('featured', array('class' => 'img-responsive featured-post-image'));
                            endif; ?>
                            <div class="featured-post-texts">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <a class="featured-post-link" href="<?php the_permalink(); ?>"></a>
                        </div>

                    <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</div>

<!-- Main content --->
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
               <?php get_sidebar();?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
