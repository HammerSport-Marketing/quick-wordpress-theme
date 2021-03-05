

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
                            <a href="docs/index.html" class="btn btn-white btn-icon my-2" target="_blank">
                                <span class="btn-inner--icon">
                                    <i data-feather="book" class="text-primary"></i>
                                </span>
                                <span class="btn-inner--text">Documentation</span>
                            </a>
                            <a href=""
                                class="btn btn-primary my-2 ml-0 ml-sm-3" target="_blank">
                                Purchase now
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
                            <a class="nav-link pl-0" href="" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/hammersport-marketing" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/hammersport_marketing" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/hammersportmarketing" target="_blank">
                                <i class="fab fa-facebook"></i>
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
                        &copy; 2020 <a href="https://webpixels.io" class="font-weight-bold"
                            target="_blank">Webpixels</a>. All rights reserved
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Terms
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Privacy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Cookies
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>

</footer>
</body>

</html>