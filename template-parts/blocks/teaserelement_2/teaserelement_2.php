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
<div class="teaserbox-row">

    <!-- Linker Teaser -->
    <div class="teaserbox-col">
        <div class="teaserbox" role="region" aria-label="<?php echo esc_attr($teaser2ueberschriftleft); ?>">
            <?php if ($teaser2bgleft): ?>
                <img src="<?php echo esc_url($teaser2bgleft); ?>" alt="" aria-hidden="true" class="teaserbox__image" />
            <?php endif; ?>
            <div class="teaserbox__overlay"></div>
            <div class="teaserbox__content">
                <h2 class="teaserbox__title"><?php echo wp_kses_post($teaser2ueberschriftleft); ?></h2>
                <p class="teaserbox__paragraph"><?php echo wp_kses_post($teaser2paragraphleft); ?></p>
                <?php if ($teaser2imageleft): ?>
                    <img src="<?php echo esc_url($teaser2imageleft); ?>" alt="Bild des linken Teaserelements 2" class="teaserbox__content-image" />
                <?php endif; ?>
                <div class="teaserbox__link-wrap">
                    <a href="<?php echo esc_url($teaser2linkleft); ?>" class="teaserbox__link" aria-label="<?php echo esc_attr($teaser2subheadlineleft); ?>">
                        <?php echo wp_kses_post($teaser2subheadlineleft); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Rechter Teaser -->
    <div class="teaserbox-col">
        <div class="teaserbox" role="region" aria-label="<?php echo esc_attr($teaser2ueberschriftright); ?>">
            <?php if ($teaser2bgright): ?>
                <img src="<?php echo esc_url($teaser2bgright); ?>" alt="" aria-hidden="true" class="teaserbox__image" />
            <?php endif; ?>
            <div class="teaserbox__overlay"></div>
            <div class="teaserbox__content">
                <h2 class="teaserbox__title"><?php echo wp_kses_post($teaser2ueberschriftright); ?></h2>
                <p class="teaserbox__paragraph"><?php echo wp_kses_post($teaser2paragraphright); ?></p>
                <?php if ($teaser2imageright): ?>
                    <img src="<?php echo esc_url($teaser2imageright); ?>" alt="Bild des rechten Teaserelements 2" class="teaserbox__content-image" />
                <?php endif; ?>
                <div class="teaserbox__link-wrap">
                    <a href="<?php echo esc_url($teaser2linkright); ?>" class="teaserbox__link" aria-label="<?php echo esc_attr($teaser2subheadlineright); ?>">
                        <?php echo wp_kses_post($teaser2subheadlineright); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>