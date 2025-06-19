</main>
<footer aria-label="Website Footer">
    <style>
        a:focus {
            outline: 2px solid #0056b3;
            outline-offset: 2px;
        }
    </style>
    <div class="footer-wrap">
        <div class="row">
            <div class="col-sm-2">
                <ul>
                    <li>
                        <?php
                        $link11 = get_field('spalte_1_link_1', 'option');
                        if ($link11) :
                            $link11_url = $link11['url'];
                            $link11_title = $link11['title']; ?>
                            <a href="<?php echo esc_url($link11_url); ?>"><?php echo esc_html($link11_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link12 = get_field('spalte_1_link_2', 'option');
                        if ($link12) :
                            $link12_url = $link12['url'];
                            $link12_title = $link12['title']; ?>
                            <a href="<?php echo esc_url($link12_url); ?>"><?php echo esc_html($link12_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link13 = get_field('spalte_1_link_3', 'option');
                        if ($link13) :
                            $link13_url = $link13['url'];
                            $link13_title = $link13['title']; ?>
                            <a href="<?php echo esc_url($link13_url); ?>"><?php echo esc_html($link13_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link14 = get_field('spalte_1_link_4', 'option');
                        if ($link14) :
                            $link14_url = $link14['url'];
                            $link14_title = $link14['title']; ?>
                            <a href="<?php echo esc_url($link14_url); ?>"><?php echo esc_html($link14_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link15 = get_field('spalte_1_link_5', 'option');
                        if ($link15) :
                            $link15_url = $link15['url'];
                            $link15_title = $link15['title']; ?>
                            <a href="<?php echo esc_url($link15_url); ?>"><?php echo esc_html($link15_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <ul>
                    <li>
                        <?php
                        $link21 = get_field('spalte_2_link_1', 'option');
                        if ($link21) :
                            $link21_url = $link21['url'];
                            $link21_title = $link21['title']; ?>
                            <a href="<?php echo esc_url($link21_url); ?>"><?php echo esc_html($link21_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link22 = get_field('spalte_2_link_2', 'option');
                        if ($link22) :
                            $link22_url = $link22['url'];
                            $link22_title = $link22['title']; ?>
                            <a href="<?php echo esc_url($link22_url); ?>"><?php echo esc_html($link22_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link23 = get_field('spalte_2_link_3', 'option');
                        if ($link23) :
                            $link23_url = $link23['url'];
                            $link23_title = $link23['title']; ?>
                            <a href="<?php echo esc_url($link23_url); ?>"><?php echo esc_html($link23_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link24 = get_field('spalte_2_link_4', 'option');
                        if ($link24) :
                            $link24_url = $link24['url'];
                            $link24_title = $link24['title']; ?>
                            <a href="<?php echo esc_url($link24_url); ?>"><?php echo esc_html($link24_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <ul>
                    <li>
                        <?php
                        $link31 = get_field('spalte_3_link_1', 'option');
                        if ($link31) :
                            $link31_url = $link31['url'];
                            $link31_title = $link31['title']; ?>
                            <a href="<?php echo esc_url($link31_url); ?>"><?php echo esc_html($link31_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link32 = get_field('spalte_3_link_2', 'option');
                        if ($link32) :
                            $link32_url = $link32['url'];
                            $link32_title = $link32['title']; ?>
                            <a href="<?php echo esc_url($link32_url); ?>"><?php echo esc_html($link32_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link33 = get_field('spalte_3_link_3', 'option');
                        if ($link33) :
                            $link33_url = $link33['url'];
                            $link33_title = $link33['title']; ?>
                            <a href="<?php echo esc_url($link33_url); ?>"><?php echo esc_html($link33_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                    <li>
                        <?php
                        $link34 = get_field('spalte_3_link_4', 'option');
                        if ($link34) :
                            $link34_url = $link34['url'];
                            $link34_title = $link34['title']; ?>
                            <a href="<?php echo esc_url($link34_url); ?>"><?php echo esc_html($link34_title); ?></a>
                        <?php endif;
                        ?>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4">
                <div class="row" style="margin: 0">
                    <div class="col-sm-8">
                        <?php
                        $uhr = get_field('footer_uhr', 'option');
                        if ($uhr) : ?>
                            <img class="footer-uhr" src="<?php echo $uhr ?>" />
                        <?php endif;
                        ?>
                        <p><?php
                            $oeffnungszeitenleft = get_field('footer_oeffnungszeiten_left', 'option');
                            if ($oeffnungszeitenleft) : ?>
                                <?php echo $oeffnungszeitenleft ?>
                            <?php endif;
                            ?></p>
                    </div>
                    <div class="col-sm-4">
                        <p><?php
                            $oeffnungszeitenright = get_field('footer_oeffnungszeiten_right', 'option');
                            if ($oeffnungszeitenright) : ?>
                                <?php echo $oeffnungszeitenright ?>
                            <?php endif;
                            ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <hr />
            </div>
            <div class="col-sm-4">

            </div>
        </div>
        <div class="row" style="margin-top: 15px">
            <div class="col-sm-2">

                <?php
                $logo = get_field('footer_logo', 'option');
                if ($logo) : ?>
                    <img src="<?php echo $logo ?>" alt="Logo der Herz Apotheke Siegen" />
                <?php endif;
                ?>
            </div>
            <div class="col-sm-4">
                <p class="adresse"><?php
                                    $adresse = get_field('footer_adresse', 'option');
                                    if ($adresse) : ?>
                        <?php echo $adresse ?>
                    <?php endif;
                    ?></p>
            </div>
            <div class="col-sm-2">
                <?php
                $socialicon1 = get_field('footer_social_logo_1', 'option');
                if ($socialicon1) : ?>
                    <a href="<?php the_field('social_logo_1_link', 'option'); ?>" target="_blank" aria-label="Besuchen Sie uns auf Social Media"><img class="footer-social" src="<?php echo $socialicon1 ?>" alt="Facebook" /></a>
                <?php endif;
                ?>
                <?php
                $socialicon2 = get_field('footer_social_logo_2', 'option');
                if ($socialicon2) : ?>
                    <a href="<?php the_field('social_logo_2_link', 'option'); ?>" target="_blank" aria-label="Besuchen Sie uns auf Social Media"><img class="footer-social" src="<?php echo $socialicon2 ?>" alt="Instagram" /></a>
                <?php endif; ?>
                <?php $socialicon3 = get_field('footer_social_logo_3', 'option');
                if ($socialicon3) : ?>
                    <a href="<?php the_field('social_logo_3_link', 'option'); ?>" target="_blank" aria-label="Besuchen Sie uns auf Social Media"><img class="footer-social" src="<?php echo $socialicon3 ?>" alt="YouTube" /></a>
                <?php endif; ?>
            </div>
            <div class="footer-social" class="col-sm-3">
                <?php
                $iframe = get_field('footer_iframe', 'option');
                if ($logo) : ?>
                    <?php echo $iframe ?>
                <?php endif;
                ?>
            </div>
        </div>
    </div>
</footer>
<!-- /.container -->
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php wp_footer(); ?>
</body>

</html>