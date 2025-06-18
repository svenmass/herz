<?php

/* Vorteile Block Template. */

?>


<?php

// check if the repeater field has rows of data
if (have_rows('repeater_vorteile')) : ?>
    <?php // loop through the rows of data 
    ?>
    <div class="row col-has-full space-between">
        <?php while (have_rows('repeater_vorteile')) : the_row(); ?>
            <?php // display a sub field value 
            ?>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 has-box-margin-bottom">
                <div class="card vorteile">
                    <div class="card-body" style="background-color:<?php the_sub_field('vorteile_item_backgroundcolor'); ?>">
                        <?php if (get_sub_field('vorteile_item_link')) : ?>
                            <a href="<?php the_sub_field('vorteile_item_link'); ?>" aria-label="<?php the_sub_field('vorteile_item_uberschrift'); ?>">
                                <div class="vorteile-wrap flex-box-column">
                                    <h3 class="card-title"><?php the_sub_field('vorteile_item_uberschrift'); ?></h3>
                                    <img src='<?php the_sub_field('vorteile_item_image'); ?>' alt="Bild des Vorteils">
                                    <p class="card-text"><?php the_sub_field('vorteile_item_bottom_text'); ?></p>
                                </div>
                            </a>
                        <?php else : // field_name returned false 
                        ?>
                            <div class="vorteile-wrap flex-box-column">
                                <h3 class="card-title"><?php the_sub_field('vorteile_item_uberschrift'); ?></h3>
                                <img src='<?php the_sub_field('vorteile_item_image'); ?>' alt="Bild des Vorteils">
                                <p class="card-text"><?php the_sub_field('vorteile_item_bottom_text'); ?></p>
                            </div>
                        <?php endif; // end of if field_name logic 
                        ?>
                    </div>
                </div>
            </div>
        <?php
        endwhile; ?>
    </div>
<?php
else :

// no rows found

endif;
?>