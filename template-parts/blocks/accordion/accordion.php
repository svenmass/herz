<?php

/* Accordion Block Template. */

//$uniqueid = get_sub_field( 'faq_unique_id' );
$uniqueid = uniqid('repeater_accordion');
$count = 0;

?>
<?php

// check if the repeater field has rows of data
if (have_rows('repeater_accordion')) : ?>
    <?php // loop through the rows of data 
    ?>
    <div class="row space-between">
        <div class="col-md-12 col-sm-12 col-has">

            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2><?php the_field('accordion_ueberschrift'); ?></h2>
                    </div>
                </div>
                <?php while (have_rows('repeater_accordion')) : the_row(); ?>

                    <?php // display a sub field value 
                    ?>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne-<?php echo esc_attr($uniqueid); ?>-<?php echo esc_attr($count); ?>" aria-expanded="false" aria-controls="collapseOne-<?php echo esc_attr($uniqueid); ?>-<?php echo esc_attr($count); ?>">
                                    <p class="accordion-title"><?php the_sub_field('accordion_pannel_ueberschrift'); ?></p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne-<?php echo esc_attr($uniqueid); ?>-<?php echo esc_attr($count); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <?php the_sub_field('accordion_pannel_text'); ?>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                <?php
                endwhile; ?>
            </div>
        </div>
    </div>
<?php
else :

// no rows found

endif;

?>