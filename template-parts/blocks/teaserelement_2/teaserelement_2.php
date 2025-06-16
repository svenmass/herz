<?php

/* Teaserelement 2 Block Template. */

$teaser2bgleft = get_field('teaserelement_2_links_background_image');
$teaser2imageleft = get_field('teaserelement_2_links_image');
$teaser2ueberschriftleft = get_field('teaserelement_2_links_uberschrift');
$teaser2subheadlineleft = get_field('teaserelement_2_links_subheadline');
$teaser2paragraphleft = get_field('teaserelement_2_links_absatz');
$teaser2linkleft = get_field('teaserelement_2_links_link');

$teaser2bgright = get_field('teaserelement_2_rechts_background_image');
$teaser2imageright = get_field('teaserelement_2_rechts_image');
$teaser2ueberschriftright = get_field('teaserelement_2_rechts_uberschrift');
$teaser2subheadlineright = get_field('teaserelement_2_rechts_subheadline');
$teaser2paragraphright = get_field('teaserelement_2_rechts_absatz');
$teaser2linkright = get_field('teaserelement_2_rechts_link');

?>
<div class="row space-between">
    <div class="col-md-6 col-sm-12 col-has">
        <div class="teaserelement-2-box teaserelement-box flex-box-column has-box-padding has-box-bg" style="background-image: url('<?php echo $teaser2bgleft; ?>');">
            <div>
                <h2><?php echo $teaser2ueberschriftleft; ?></h2>
                <p><?php echo $teaser2paragraphleft; ?></p>
            </div>
            <img src="<?php echo $teaser2imageleft; ?>" />
            <div class="bottom-link-wrap">
                <a href="<?php echo $teaser2linkleft; ?>"><?php echo $teaser2subheadlineleft; ?></a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12 col-has">
        <div class="teaserelement-2-box teaserelement-box flex-box-column has-box-padding has-box-bg" style="background-image: url('<?php echo $teaser2bgright; ?>');">
            <div>
                <h2><?php echo $teaser2ueberschriftright; ?></h2>
                <p><?php echo $teaser2paragraphright; ?></p>
            </div>
            <img src="<?php echo $teaser2imageright; ?>" />
            <div class="bottom-link-wrap">
                <a href="<?php echo $teaser2linkright; ?>"><?php echo $teaser2subheadlineright; ?></a>
            </div>
        </div>
    </div>
</div>