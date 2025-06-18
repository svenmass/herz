<?php
/* Head Box Block Template. */

// ACF-Felder
$headboxsubsitebg = get_field('head_box_subsite_bg');
$headboxsubsitebgcolor = get_field('head_box_rechts_backgroundcolor');
$headboxsubsiteleftheadline = get_field('head_box_subsite_rechts_uberschrift');
$headboxsubsiteleftparagraph = get_field('head_box_subsite_rechts_absatz');
$headboxsubsiteleftbottomtext = get_field('head_box_subsite_rechts_bottom_text');
$headboxsubsitelefticon = get_field('head_box_subsite_rechts_bottom_icon');

// Links aus dem Rich-Text-Feld extrahieren
$links = [];

// Rich-Text-Feld verarbeiten
if (!empty($headboxsubsiteleftbottomtext)) {
    preg_match_all('/<a\s+href=["\'](.*?)["\'].*?>(.*?)<\/a>/i', $headboxsubsiteleftbottomtext, $matches, PREG_SET_ORDER);
    
    // Bis zu zwei Links verarbeiten
    foreach (array_slice($matches, 0, 2) as $match) {
        $href = $match[1]; // href-Wert
        $text = trim(strip_tags($match[2])); // Text ohne HTML-Tags bereinigen
        if (!empty($href) && !empty($text)) {
            $links[] = [
                'href' => $href,
                'text' => $text,
                'aria_label' => $text, // aria-label ist der Link-Text
            ];
        }
    }
}

// Fallback, wenn keine Links gefunden wurden
if (empty($links)) {
    $links[] = [
        'href' => $default_href,
        'text' => $default_text,
        'aria_label' => $default_text,
    ];
}
?>

<div class="row col-has space-between">
    <div class="col-md-6 col-sm-12 col-has-full has-box-bg" style="background-image: url('<?php echo esc_url($headboxsubsitebg); ?>');" alt="Hintergrundbild der Unterseite">
    </div>

    <div class="col-md-6 col-sm-12 col-has-full head-box-subsite" style="background-color:<?php echo esc_attr($headboxsubsitebgcolor); ?>">
        <div class="head-box-subsite flex-box-column has-box-padding">
            <h2><?php echo wp_kses_post($headboxsubsiteleftheadline); ?></h2>
            <p><?php echo wp_kses_post($headboxsubsiteleftparagraph); ?></p>
            <p>
                <?php foreach ($links as $index => $link): ?>
                    <a href="<?php echo esc_url($link['href']); ?>" aria-label="<?php echo esc_attr($link['aria_label']); ?>">
                        <?php echo esc_html($link['text']); ?>
                    </a>
                    <?php if ($index < count($links) - 1): ?>
                        <br>
                    <?php endif; ?>
                <?php endforeach; ?>
            </p>
        </div>
    </div>
</div>