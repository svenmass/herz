<?php

/* Teamelement Block Template. */

?>
<?php

// check if the repeater field has rows of data
if (have_rows('repeater_team')) : ?>
    <?php // loop through the rows of data 
    ?>
    <div class="row space-between team">
        <?php while (have_rows('repeater_team')) : the_row(); ?>
            <?php // display a sub field value 
            ?>
            <div class="col-md-6 col-sm-12 col-has">
                <div class="row no-gutters">
                    <div class="col-md-6 col-sm-12 team-col">
                        <img src="<?php the_sub_field('teamelement_image'); ?>" alt="Teammitglied Bild" />
                    </div>
                    <div class="col-md-6 col-sm-12 has-box-padding team-col" style="background-color:<?php the_sub_field('teamelement_bg_color'); ?>">
                        <h3><?php the_sub_field('teamelement_headline'); ?></h3>
                        <p><?php the_sub_field('teamelement_subheadline'); ?></p>
                        <p><?php the_sub_field('teamelement_paragraph'); ?></p>
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