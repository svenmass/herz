<?php

/* Head Box Subsite 2 Block Template. */

$bgimage = get_field('head_box_subsite_2_rechts_hintergrundbild');

$bgcolor = get_field('head_box_subsite_2_links_backgroundcolor');
$headline = get_field('head_box_subsite_2_subsite_links_uberschrift');
$paragraph = get_field('head_box_subsite_2_links_absatz');
$bottomtext = get_field('head_box_subsite_2_links_bottom_text');

?>
<div class="row col-has space-between">
    <div class="col-md-6 col-sm-12 col-has-full head-box-subsite" style="background-color:<?php echo $bgcolor; ?>">
        <div class="head-box-subsite flex-box-column has-box-padding">
            <h2><?php echo $headline; ?></h2>
            <p><?php echo $paragraph; ?></p>
            <p><?php echo $bottomtext; ?></p>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-has-full has-box-bg" style="background-image: url('<?php echo $bgimage; ?>');" alt="Hintergrundbild der Unterseite 2">
    </div>
</div>