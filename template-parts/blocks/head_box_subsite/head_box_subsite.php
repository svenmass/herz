<?php

/* Head Box Block Template. */

$headboxsubsitebg = get_field('head_box_subsite_bg');

$headboxsubsitebgcolor = get_field('head_box_rechts_backgroundcolor');
$headboxsubsiteleftheadline = get_field('head_box_subsite_rechts_uberschrift');
$headboxsubsiteleftparagraph = get_field('head_box_subsite_rechts_absatz');
$headboxsubsiteleftbottomtext = get_field('head_box_subsite_rechts_bottom_text');
$headboxsubsitelefticon = get_field('head_box_subsite_rechts_bottom_icon');

?>
<div class="row col-has space-between">
    <div class="col-md-6 col-sm-12 col-has-full has-box-bg" style="background-image: url('<?php echo $headboxsubsitebg; ?>');">
    </div>

    <div class="col-md-6 col-sm-12 col-has-full head-box-subsite" style="background-color:<?php echo $headboxsubsitebgcolor; ?>">
        <div class="head-box-subsite flex-box-column has-box-padding">
            <h2><?php echo $headboxsubsiteleftheadline; ?></h2>
            <p><?php echo $headboxsubsiteleftparagraph; ?></p>
            <p><a href="<?php echo $teaserlinkright; ?>"><?php echo $headboxsubsiteleftbottomtext; ?></a></p>
        </div>
    </div>
</div>