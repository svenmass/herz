<?php
get_header(); ?>
<?php

$headline = get_field('headline', 'option');
$text = get_field('text', 'option');
$bgcolor = get_field('bgcolor', 'option');
$image = get_field('image', 'option');

?>
<div class="container starter-template">
<main>
    <div class="row space-between">
        <div class="col-md-12 col-has">
            <div class="flex-box-row has-error has-box-padding text-left" style="background-color:<?php echo $bgcolor; ?>">
                <div class="col-md-6 flex-box-column">
                    <h2><?php echo $headline; ?></h2>
                    <p><?php echo $text; ?></p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="<?php echo $image; ?>" alt="404 Fehlerbild" />
                </div>
            </div>
        </div>
    </div>
</main>
</div>
<?php get_footer(); ?>