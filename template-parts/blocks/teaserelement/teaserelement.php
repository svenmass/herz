<?php

/* Teaserelement Block Template. */

$teaserbackgroundimageleft = get_field('teaserelement_hintergrundbild_links');
$teaserueberschriftleft = get_field('teaserelement_uberschrift_links');
$teasersubheadlineleft = get_field('teaserelement_subheadline_links');
$teaserlinkleft = get_field('teaserelement_link_links');

$teaserbackgroundimageright = get_field('teaserelement_hintergrundbild_rechts');
$teaserueberschriftright = get_field('teaserelement_uberschrift_rechts');
$teasersubheadlineright = get_field('teaserelement_subheadline_rechts');
$teaserlinkright = get_field('teaserelement_link_rechts');

?>
<div class="row space-between">
    <div class="col-md-6 col-sm-12 col-has">
        <div class="teaserelement-box flex-box-column has-box-padding has-box-bg" style="background-image: url('<?php echo $teaserbackgroundimageleft; ?>');" alt="Hintergrundbild des linken Teaserelements">
            <h2><?php echo $teaserueberschriftleft; ?></h2>
            <div class="bottom-link-wrap">
                <a href="<?php echo $teaserlinkleft; ?>" aria-label="<?php echo $teasersubheadlineleft; ?>">
                    <?php echo $teasersubheadlineleft; ?>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12 col-has">
        <div class="teaserelement-box flex-box-column has-box-padding has-box-bg" style="background-image: url('<?php echo $teaserbackgroundimageright; ?>');" alt="Hintergrundbild des rechten Teaserelements">
            <h2><?php echo $teaserueberschriftright; ?></h2>
            <div class="bottom-link-wrap">
                <a href="<?php echo $teaserlinkright; ?>" aria-label="<?php echo $teasersubheadlineright; ?>">
                    <?php echo $teasersubheadlineright; ?>
                </a>
            </div>
        </div>
    </div>
</div>