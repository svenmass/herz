<?php
get_header(); ?>
<div class="container starter-template">

                          <?php the_content(); ?>




    <?php
    // Get a list of the current post's categories
    global $post;
    $categories = get_the_category($post->ID);
    $catidlist = '';
    foreach ($categories as $category) {
        $catidlist .= $category->cat_ID . ",";
    }
    // Build our category based custom query arguments
    $custom_query_args = array(
        'post_type' => 'any', // Select entries from a custom post type, input your slug here
        'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
        'orderby' => 'rand', // Randomize the results
        'cat' => $catidlist, // Select posts in the same categories as the current post
    );
    // Initiate the custom query
    $custom_query = new WP_Query($custom_query_args);

    // Run the loop and output data for the results

    if ($custom_query->have_posts()) : ?>
        <br />
        <h2 id="recent">Auch interessant für Sie</h2>
        <hr />
        <div id="related" class="group">
            <div class="related-posts">
                <div class="row space-between">
                    <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                        <div class="col-md-6 col-sm-12 col-has">
                            <div class="row has-excerpt no-gutters">
                                <div class="col-md-6 col-sm-12">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="col-md-6 col-sm-12 has-box-padding flex-box-column text-left has-main-bg-color has-excerpt-text">
                                    <h3><?php the_title() ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="more-link" href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark">AUSFÜHRLICHER ARTIKEL</a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>

    <?php else : ?>
        <p>Leider keine Artikel</p>
    <?php endif;
    // Reset postdata
    wp_reset_postdata();
    ?>
    <br />
    <div class="row space-between" style="background-color:<?php the_field('news_about_us_hintergrundfarbe'); ?>;padding: 1rem">
        <div class="col-md-12 col-sm-12 container-fluid">
            <h2><?php the_field('news_about_us_ueberschrift'); ?></h2>
            <br />
        </div>
        <div class="col-md-6 col-sm-12 text-left">
            <p><?php the_field('news_about_us_absatz_1'); ?></p>
        </div>

        <div class="col-md-6 col-sm-12 text-left">
            <p><?php the_field('news_about_us_absatz_2'); ?></p>
        </div>
        <div class="col-md-12 col-sm-12 container-fluid">
            <?php the_field('news_about_us_absatz_3_full'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>