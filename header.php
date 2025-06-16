<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body class="<?php echo implode(' ', get_body_class()); ?>">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar navbar-dark has-main-bg-color dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand">
                <?php
                $linklogo = get_field('link_logo', 'option');
                if ($linklogo) : ?>
                    <a class="more-link" href="<?php echo $linklogo ?>">
                    <?php endif;
                    ?>
                    <?php
                    $logo = get_field('menu_logo', 'option');
                    if ($logo) : ?>
                        <img src="<?php echo $logo ?>" />
                    <?php endif;
                    ?>
                    </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'      => false,
                    'menu' => 'Main Menu',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                    'walker' => new wp_bootstrap4_navwalker()
                )); ?>
                <div class="row meta-menu-right">
                    <div class="col-lg-4 col-md-12">
                        <?php
                        $link1 = get_field('rezeptservice', 'option');
                        if ($link1) : ?>
                            <a class="more-link" href="<?php echo $link1 ?>"><?php _e('Rezeptservice', 'option'); ?></a>
                        <?php endif;
                        ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <?php
                        $link2 = get_field('kontakt', 'option');
                        if ($link2) : ?>
                            <a class="more-link" href="<?php echo $link2 ?>"><?php _e('Kontakt', 'option'); ?></a>
                        <?php endif;
                        ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <?php
                        $link3 = get_field('offnungszeiten', 'option');
                        if ($link3) : ?>
                            <a class="more-link" href="<?php echo $link3 ?>"><?php _e('Öffnungszeiten', 'option'); ?></a>
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <main>