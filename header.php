<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"><!-- Font Awesome -->

    <?php wp_head(); ?>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of
                        cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="../../pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header class="" id="header-main">
        <!-- Navbar -->
        <?php
        if (has_nav_menu('primary')) { ?>

        <?php } ?>

        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark" id="navbar-main">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="/">
                    <img alt="Image placeholder" src="<?php echo get_theme_file_uri('/src/assets/img/brand/light-mono.svg'); ?>" id="navbar-logo">
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapse -->

                <?php
                if (has_nav_menu('primary')) { ?>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse navbar-collapse-overlay bg-dark text-white',
                        'container_id'    => 'navbar-main-collapse',
                        'menu_class'      => 'navbar-nav ml-lg-auto ',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    )); ?>
                <?php } ?>
                    <!-- Right navigation -->
                    <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                        <!-- Auth -->
                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/authentication/login-basic.html">
                                Sign in
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-sm btn-white btn-icon ml-3" target="_blank">
                                <span class="btn-inner--icon"><i data-feather="shopping-bag"></i></span>
                                <span class="btn-inner--text">Buy now</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Mobile button -->
                    <!-- <div class="d-lg-none px-4 text-center">
                        <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-block btn-sm btn-primary" target="_blank">Purchase now</a>
                    </div> -->
            </div>
        </nav>
    </header>
    <!-- Omnisearch -->
    <div id="omnisearch" class="omnisearch">
        <div class="container">
            <div class="omnisearch-container">
                <!-- Search form -->
                <form class="omnisearch-form">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i data-feather="search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="omnisearch-suggestions">
                    <h6 class="heading">Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i data-feather="clock"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i data-feather="clock"></i>
                                        <span>iphone 8</span> in Smartphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i data-feather="clock"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i data-feather="clock"></i>
                                        <span>beats pro solo 3</span> in Headphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i data-feather="clock"></i>
                                        <span>smasung galaxy 10</span> in Phones
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .navbar-toggler {
            z-index: 101;
        }
        #navbar-main-collapse.show > ul > li > a > span, #navbar-main-collapse.show > ul > li > ul> li> a > span {
            color: white;
        }
    </style>