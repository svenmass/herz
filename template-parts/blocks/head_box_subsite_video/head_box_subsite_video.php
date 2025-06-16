<?php

/* Head Box Block Template. */

$headboxsubsitebg = get_field('head_box_subsite_bg');

$headboxsubsitebgcolor = get_field('head_box_links_backgroundcolor');
$headboxsubsiteleftheadline = get_field('head_box_subsite_links_uberschrift');
$headboxsubsiteleftparagraph = get_field('head_box_subsite_links_absatz');
$headboxsubsiteleftbottomtext = get_field('head_box_subsite_links_bottom_text');
$linklinks = get_field('head_box_subsite_links_link');
$linkrechts = get_field('head_box_subsite_rechts_link');
$iframe = get_field('head_box_subsite_rechts_iframe');

?>
<div id="videoclick" class="row col-has space-between">
    <div class="col-md-6 col-sm-12 col-has-full head-box-subsite" style="background-color:<?php echo $headboxsubsitebgcolor; ?>">
        <div class="head-box-subsite flex-box-column has-box-padding">
            <h2><?php echo $headboxsubsiteleftheadline; ?></h2>
            <p><?php echo $headboxsubsiteleftparagraph; ?></p>
            <p><a href="<?php echo $linklinks; ?>"><?php echo $headboxsubsiteleftbottomtext; ?></a></p>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-has-full">
        <a href="<?php echo $linkrechts; ?>">
            <div class="video-wrapper has-box-bg" style="background-image: url('<?php echo $headboxsubsitebg; ?>');">
            </div>
            <a href="#">
                <div class="video-iframe"><?php echo $iframe; ?></div>
            </a>
        </a>
    </div>
</div>