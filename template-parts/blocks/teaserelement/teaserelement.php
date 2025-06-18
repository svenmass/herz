<?php
/* Teaserelement Block Template mit BEM-Klassen */

$teaserbackgroundimageleft = get_field('teaserelement_hintergrundbild_links');
$teaserueberschriftleft = get_field('teaserelement_uberschrift_links');
$teasersubheadlineleft = get_field('teaserelement_subheadline_links');
$teaserlinkleft = get_field('teaserelement_link_links');

$teaserbackgroundimageright = get_field('teaserelement_hintergrundbild_rechts');
$teaserueberschriftright = get_field('teaserelement_uberschrift_rechts');
$teasersubheadlineright = get_field('teaserelement_subheadline_rechts');
$teaserlinkright = get_field('teaserelement_link_rechts');
?>

<div class="teaserbox-row">

    <!-- Linker Teaser -->
    <div class="teaserbox-col">
        <div class="teaserbox" role="region" aria-label="<?php echo esc_attr($teaserueberschriftleft); ?>">
            <?php if ($teaserbackgroundimageleft): ?>
                <img src="<?php echo esc_url($teaserbackgroundimageleft); ?>" alt="" aria-hidden="true" class="teaserbox__image" />
            <?php endif; ?>
            <div class="teaserbox__overlay"></div>
            <div class="teaserbox__content">
                <h2 class="teaserbox__title"><?php echo wp_kses_post($teaserueberschriftleft); ?></h2>
                <div class="teaserbox__link-wrap">
                    <a href="<?php echo esc_url($teaserlinkleft); ?>" class="teaserbox__link" aria-label="<?php echo esc_attr($teasersubheadlineleft); ?>">
                        <?php echo wp_kses_post($teasersubheadlineleft); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Rechter Teaser -->
    <div class="teaserbox-col">
        <div class="teaserbox" role="region" aria-label="<?php echo esc_attr($teaserueberschriftright); ?>">
            <?php if ($teaserbackgroundimageright): ?>
                <img src="<?php echo esc_url($teaserbackgroundimageright); ?>" alt="" aria-hidden="true" class="teaserbox__image" />
            <?php endif; ?>
            <div class="teaserbox__overlay"></div>
            <div class="teaserbox__content">
                <h2 class="teaserbox__title"><?php echo wp_kses_post($teaserueberschriftright); ?></h2>
                <div class="teaserbox__link-wrap">
                    <a href="<?php echo esc_url($teaserlinkright); ?>" class="teaserbox__link" aria-label="<?php echo esc_attr($teasersubheadlineright); ?>">
                        <?php echo wp_kses_post($teasersubheadlineright); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>