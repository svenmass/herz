<?php

/* Headbox Block Template. */

$backgroundimage = get_field('head_box_left_hintergrundbild');
$paneltopbg = get_field('head_box_left_paneltop_bg');
$paneltopimage = get_field('head_box_left_paneltop_image');
$panelbottomueberschrift = get_field('head_box_left_panelbottom_ueberschrift');
$panelbottomsubheadline = get_field('head_box_left_panelbottom_subheadline');
$paneltopueberschrift = get_field('head_box_left_paneltop_ueberschrift');
$paneltopsubheadline = get_field('head_box_left_paneltop_subheadline');
$paneltopprice = get_field('head_box_left_paneltop_price');
$paneltopbottomlink = get_field('head_box_left_bottom_link');

$panelrighttopbackgroundcolor = get_field('head_box_right_top_hintergrundfarbe');
$panelrighttopueberschrift = get_field('head_box_right_top_ueberschrift');
$panelrighttopsubheadline = get_field('head_box_right_top_subheadline');
$panelrighttopimage = get_field('head_box_right_top_image');
$panelrighttopicon = get_field('head_box_right_top_icon');
$panelrighttoplink = get_field('head_box_right_top_link');

$panelrightbottombackgroundcolor = get_field('head_box_right_bottom_hintergrundfarbe');
$panelrightbottomueberschrift = get_field('head_box_right_bottom_ueberschrift');
$panelrightbottomsubheadline = get_field('head_box_right_bottom_subheadline');
$panelrightbottomimage = get_field('head_box_right_bottom_image');
$panelrightbottomlink = get_field('head_box_right_bottom_link');

/*
?>
<div class="row space-between head-box">
    <div class="col-md-6 col-sm-12 padding-right">
        <div class="head-box-left" style="background-image: url('<?php echo $backgroundimage; ?>');">
            <div class="head-box-left-top-wrap" style="background-image: url('<?php echo $paneltopbg; ?>');">
                <h2><?php echo $paneltopueberschrift; ?></h2>
                <p><?php echo $paneltopsubheadline; ?></p>
                <h3><?php echo $paneltopprice; ?><?php echo ' €'; ?></h3>
                <img src='<?php echo $paneltopimage; ?>' alt="Bild des oberen Panels">
            </div>
            <div class="head-box-left-bottom-wrap">
                <h2><?php echo $panelbottomueberschrift; ?></h2>
                <div class="bottom-link-wrap">
                    <p><a href="<?php echo $paneltopbottomlink; ?>" aria-label="Mehr über <?php echo $panelbottomsubheadline; ?>"><?php echo $panelbottomsubheadline; ?></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 padding-left">
        <div class="head-box-right" style="background-color:<?php echo $panelrighttopbackgroundcolor; ?>">
            <div class="head-box-right-top-wrap">
                <img src='<?php echo $panelrighttopimage; ?>' alt="Bild des rechten oberen Panels">
                <h2><?php echo $panelrighttopueberschrift; ?></h2>
                <div class="bottom-link-wrap">
                    <a href="<?php echo $panelrighttoplink; ?>" aria-label="Mehr über <?php echo $panelrighttopsubheadline; ?>">
                        <?php echo $panelrighttopsubheadline; ?><img class="icon" src='<?php echo $panelrighttopicon; ?>' alt="Icon des rechten oberen Panels">
                    </a>
                </div>
            </div>
        </div>
        <div class="head-box-right-alt">
            <div class="head-box-right-bottom">
                <div class="head-box-right-bottom-left-wrap" style="background-image: url('<?php echo $panelrightbottomimage; ?>');">
                </div>
                <div class="head-box-right-bottom-right-wrap" style="background-color:<?php echo $panelrightbottombackgroundcolor; ?>">
                    <h2><?php echo $panelrightbottomueberschrift; ?></h2>
                    <div class="bottom-link-wrap">
                        <p><a href="<?php echo $panelrightbottomlink; ?>" aria-label="Mehr über <?php echo $panelrightbottomsubheadline; ?>"><?php echo $panelrightbottomsubheadline; ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php */ ?>

<div class="row ">

    <div class="col-md-12">

        <div class="head-box-grid">

            <div class="head-box-grid-box box-1" style="background-image: url('<?php echo $backgroundimage; ?>');">

                <div class="head-box-left-top-wrap" style="background-image: url('<?php echo $paneltopbg; ?>');">
                    <h2><?php echo $paneltopueberschrift; ?></h2>
                    <p><?php echo $paneltopsubheadline; ?></p>
                    <h3><?php echo $paneltopprice; ?><?php echo ' €'; ?></h3>
                    <img src='<?php echo $paneltopimage; ?>' alt="Bild des oberen Panels">
                </div>

                <div class="head-box-left-bottom-wrap">
                    <h2><?php echo $panelbottomueberschrift; ?></h2>
                    <div class="bottom-link-wrap">
                        <p><a href="<?php echo $paneltopbottomlink; ?>" aria-label="<?php echo $panelbottomsubheadline; ?>"><?php echo $panelbottomsubheadline; ?></a></p>
                    </div>
                </div>

            </div>




            <div class="head-box-grid-box box-2" style="background-color:<?php echo $panelrighttopbackgroundcolor; ?>">

                <img src='<?php echo $panelrighttopimage; ?>' alt="Bild des rechten oberen Panels">
                <h2><?php echo $panelrighttopueberschrift; ?></h2>
                <div class="bottom-link-wrap">
                    <a href="<?php echo $panelrighttoplink; ?>" aria-label="<?php echo $panelrighttopsubheadline; ?>">
                        <?php echo $panelrighttopsubheadline; ?>
                    </a>
                </div>

            </div>


            <div class="head-box-grid-box box-3 head-box-right-alt">
                <div class="head-box-right-bottom">
                    <div class="head-box-right-bottom-left-wrap" style="background-image: url('<?php echo $panelrightbottomimage; ?>');">
                    </div>
                    <div class="head-box-right-bottom-right-wrap" style="background-color:<?php echo $panelrightbottombackgroundcolor; ?>">
                        <h2><?php echo $panelrightbottomueberschrift; ?></h2>
                        <div class="bottom-link-wrap">
                            <p><a href="<?php echo $panelrightbottomlink; ?>" aria-label="<?php echo $panelrightbottomsubheadline; ?>"><?php echo $panelrightbottomsubheadline; ?></a></p>
                            <!-- DEBUG: ACF-Feld Inhalt: "<?php echo $panelrightbottomsubheadline; ?>" -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>