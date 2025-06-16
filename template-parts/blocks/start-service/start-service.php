<?php

/* Start Service Block Template. */

?>

<?php

// check if the repeater field has rows of data
if (have_rows('repeater')) : ?>
    <?php // loop through the rows of data 
    ?>
    <div class="row space-between">
        <?php while (have_rows('repeater')) : the_row(); ?>
            <?php // display a sub field value 
            ?>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2 service-start">
                <a href="<?php the_sub_field('start_service_link'); ?>">
                    <div class="card">
                        <img src='<?php the_sub_field('start_service_item_image'); ?>' />
                        <div class="card-body">
                            <div class="service-start-wrap">
                                <h3 class="card-title"><?php the_sub_field('start_service_item_uberschrift'); ?></h3>
                                <p class="card-text"><?php the_sub_field('start_service_item_subheadline'); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php
        endwhile; ?>
    </div>
<?php
else :

// no rows found

endif;

?>