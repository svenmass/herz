<?php

/* small header Block Template. */

$headline = get_field('small_header_headline');
$text = get_field('small_header_text');
$bgcolor = get_field('small_header_bgcolor');
$image = get_field('small_header_image');

?>
<div class="row space-between">
    <div class="col-md-12 col-has">
        <div class="flex-box-row small_head has-box-padding text-left" style="background-color:<?php echo $bgcolor; ?>">
            <div class="col-md-6 flex-box-column">
                <h2><?php echo $headline; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo $image; ?>" />
            </div>
        </div>
    </div>
</div>