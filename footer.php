

<footer class="position-relative" id="footer-main">
    <div class="footer pt-lg-7 footer-dark bg-dark">
        <!-- SVG shape -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px"
                viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Footer -->
        <div class="container pt-4">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h3 class="text-secondary mb-2">
                                <?php
                                    echo get_theme_mod('footer_headline_title');
                                ?>
                            </h3>
                            <p class="lead mb-0 text-white opacity-8">
                                <?php
                                    echo get_theme_mod('footer_headline_subtitle');
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-5 text-lg-right mt-4 mt-lg-0">
                            <a href="<?php echo get_theme_mod('footer_button_1_url'); ?>" class="btn btn-white btn-icon my-2" target="_blank">
                                <span class="btn-inner--text"><?php echo get_theme_mod('footer_button_1_text'); ?></span>
                            </a>
                            <a href="<?php echo get_theme_mod('footer_button_2_url'); ?>"
                                class="btn btn-primary my-2 ml-0 ml-sm-3" target="_blank">
                                <?php echo get_theme_mod('footer_button_2_text'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider divider-fade divider-dark my-5">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <!-- Theme's logo -->
                    <a href="index.html">
                        <img alt="Image placeholder"
                            src="<?php echo get_theme_mod( 'your_theme_secondary_logo' ); ?>" id="footer-logo">
                    </a>
                    <!-- Company's mission -->
                    <p class="mt-4 text-sm opacity-8 pr-lg-4">
                        <?php echo get_theme_mod( 'footer_company_mission' ); ?>
                    </p>
                    <!-- Social -->
                    <ul class="nav mt-4">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="<?php echo get_theme_mod('footer_social_url_1') ?>" target="_blank">
                                <i class="fab <?php echo get_theme_mod('o2_fa_icon_picker_1'); ?>"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_theme_mod('footer_social_url_2') ?>" target="_blank">
                                <i class="fab <?php echo get_theme_mod('o2_fa_icon_picker_2'); ?>"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_theme_mod('footer_social_url_3') ?>" target="_blank">
                                <i class="fab <?php echo get_theme_mod('o2_fa_icon_picker_3'); ?>"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_theme_mod('footer_social_url_4') ?>" target="_blank">
                                <i class="fab <?php echo get_theme_mod('o2_fa_icon_picker_4'); ?>"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                    <!-- Menu 1 -->
                    <?php
                        echo get_footer_menu('footer-menu-1');
                    ?>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <?php
                        echo get_footer_menu('footer-menu-2');
                    ?>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <?php
                        echo get_footer_menu('footer-menu-3');
                    ?>
                </div>
            </div>
            <hr class="divider divider-fade divider-dark my-4">
            <div class="row align-items-center justify-content-md-between pb-4">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        <?php echo get_theme_mod('footer_copyright_text'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php echo get_horizontal_footer_menu('horizontal-footer-menu'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>

</footer>
</body>

</html>