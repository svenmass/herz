<?php

/* Trustleiste Block Template. */

$bgcolor = get_field('trustleiste_hintergrundfarbe');
$leiste = get_field('trustleiste_full');

?>
<div class="row space-between no-gutters about-us" style="background-color:<?php echo $bgcolor; ?>">
    <div class="col-md-12 col-sm-12 col-has container-fluid">
        <?php echo $leiste; ?>
    </div>
</div>