<?php
/*
Template Name: All Articles Page
*/
?>
<?php
get_header(); ?>
<div class="container starter-template">
<main>
    <h2> <?php the_title(); ?></h2>
    <div class="row space-between">
        <?php query_posts('showposts=-1'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php $wp_query->is_home = false; ?>
                <article class="col-md-6 col-sm-12 col-has">
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
                </article>
        <?php endwhile;
        endif; ?>
    </div>
</main>
</div>
<?php get_footer(); ?>