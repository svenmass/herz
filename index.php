<?php
get_header(); ?>
<div class="container starter-template">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e('Kein Eintrag'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>