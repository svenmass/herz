<?php

/* About Us Block Template. */

$aboutusbgcolor = get_field('about_us_hintergrundfarbe');
$aboutusparagraph1 = get_field('about_us_absatz_1');
$aboutusparagraph2 = get_field('about_us_absatz_2');
$aboutusparagraph3 = get_field('about_us_absatz_3_full');
$aboutusheadline = get_field('about_us_ueberschrift');

?>
<div class="row space-between no-gutters about-us" style="background-color:<?php echo $aboutusbgcolor; ?>" aria-label="Über uns Abschnitt">
    <div class="col-md-12 col-sm-12 col-has">
        <h2><?php echo $aboutusheadline; ?></h2>
    </div>
    <div class="col-md-6 col-sm-12 col-has">
        <p><?php echo $aboutusparagraph1; ?></p>
    </div>

    <div class="col-md-6 col-sm-12 col-has">
        <p><?php echo $aboutusparagraph2; ?></p>
    </div>
    <div class="col-md-12 col-sm-12 col-has container-fluid">
        <?php echo $aboutusparagraph3; ?>
    </div>
</div>