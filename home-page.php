<?php

/**
 * Template Name: Home Page
 *
 * @package HammerSport
 * @subpackage Quick Ui Kit
 * @since Quick Ui Kit
 */

get_header(); ?>

<!-- Main content -->
<main>
    <?php
    if (have_rows('hero_section')) :
        while (have_rows('hero_section')) : the_row(); ?>
            <section class="slice py-5">
                <div class="container">
                    <div class="row row-grid align-items-center">
                        <div class="col-12 col-md-5 col-lg-6 order-md-2">
                            <!-- Image -->
                            <figure class="w-100">
                            
                                <img alt="Image placeholder" src="<?php echo get_theme_file_uri('/src/assets/img/svg/illustrations/illustration-1.svg'); ?>" class="img-fluid mw-md-120">
                            </figure>
                        </div>
                        <?php
                        if (have_rows('headline')) :
                            while (have_rows('headline')) : the_row();
                            $catchphrase = get_sub_field('catch_phrase');
                            $focucsItem = get_sub_field('focus_item');
                        ?>
                                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                                    <!-- Heading -->
                                    <h1 class="display-4 text-center text-md-left mb-3">
                                        <?php echo $catchphrase ?> <strong class="text-primary"> <?php echo $focucsItem ?> </strong>
                                    </h1>
                                    <!-- Text -->
                                    <p class="lead text-center text-md-left text-muted">
                                        Build a beautiful, modern website with flexible Bootstrap components built from scratch.
                                    </p>
                                    <!-- Buttons -->
                                    <?php 
                                    if(have_rows('call_to_action')) :
                                        while (have_rows('call_to_action')) : the_row();

                                    ?>
                                    <div class="text-center text-md-left mt-5">
                                        <a href="<?php the_sub_field('button_url') ?>" class="btn btn-primary btn-icon">
                                            <span class="btn-inner--text"><?php the_sub_field('button_label') ?></span><span class="btn-inner--icon">
                                                <i data-feather="arrow-right"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="btn btn-neutral btn-icon d-none d-lg-inline-block">Learn more</a>
                                    </div>
                                    <?php endwhile;
                        else :
                        // no rows found
                        endif;

                        ?>
                                </div>
                        <?php endwhile;
                        else :
                        // no rows found
                        endif;

                        ?>
                    </div>
                </div>
            </section>
    <?php endwhile;
    else :
    // no rows found
    endif;

    ?>
    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6">
        <div class="container">
            <!-- Title -->
            <div class="row justify-content-lg-end">
                <div class="col-lg-5 text-lg-right">
                    <h6 class="display-4 text-danger">3k+</h6>
                    <p class="lh-180 mb-3">
                        Our mission is to give developers some amazing possibilities to create high quality digital
                        products
                        with less time and money spent.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="display-4 lh-130">Successfuly completed projects &amp; ideas</h3>
                </div>
            </div>
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-danger">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="<?php echo get_theme_file_uri('/src/assets/img/svg/illustrations/illustration-5.svg'); ?>" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Unleash you creativity</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit contains components and pages that
                                are
                                easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-success mt-lg-5">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="<?php echo get_theme_file_uri('/src/assets/img/svg/illustrations/illustration-6.svg'); ?>" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Get more results</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit contains components and pages that
                                are
                                easy to customize and change.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-soft-warning mt-lg-7">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5">
                                <img src="<?php echo get_theme_file_uri('/src/assets/img/svg/illustrations/illustration-7.svg'); ?>" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                            </div>
                            <h5 class="h4 lh-130 text-dark mb-3">Increase your audience</h5>
                            <p class="text-dark opacity-6 mb-0">Quick Website UI Kit contains components and pages that
                                are
                                easy to customize and change.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-6 order-lg-2 ml-lg-auto pl-lg-6">
                    <!-- Heading -->
                    <h5 class="h2 mt-4">We deliver the high quality end results you need</h5>
                    <!-- Text -->
                    <p class="lead lh-190 my-4">
                        With Quick you get components and examples, including tons of variables that will help you
                        customize
                        this theme with ease.
                    </p>
                    <!-- List -->
                    <ul class="list-unstyled">
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Perfect for modern startups</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Built with customization and ease-of-use at its core</span>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="d-flex align-items-center">
                                <div>
                                    <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                        <i class="fas fa-cog"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="h6 mb-0">Quality design and thoughfully crafted code</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <!-- Image -->
                    <div class="position-relative zindex-100">
                        <img alt="Image placeholder" src="<?php echo get_theme_file_uri('/src/assets/img/svg/illustrations/illustration-2.svg'); ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-dark pt-5 pt-lg-8">
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Container -->
        <div class="container position-relative zindex-100">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <div class="mt-4 mb-6">
                            <h2 class="h1 text-white">
                                Are you ready to grow faster?
                            </h2>
                            <h4 class="text-white mt-3">Create your own experience</h4>
                            <!-- Play button -->
                            <a href="https://www.youtube.com/watch?v=zodT9bCdIiI" data-fancybox data-toggle="tooltip" data-placement="bottom" title="Watch video in lightbox" class="btn btn-warning btn-icon hover-translate-y-n10 mt-4">
                                <span class="btn-inner--icon">
                                    <i data-feather="play"></i>
                                </span>
                                <span class="btn-inner--text">Play video</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice pt-0">
        <div class="container position-relative zindex-100">
            <div class="row">
                <div class="col-xl-4 col-sm-6 mt-n7">
                    <div class="card bg-soft-warning border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5">
                            <div>
                                <span class="badge badge-warning badge-pill">New</span>
                            </div>
                            <div class="pl-4">
                                <h5 class="lh-130 text-dark">Listen to the nature</h5>
                                <p class="text-dark opacity-6">
                                    Design made simple with a clean and smart HTML markup.
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="<?php echo get_theme_file_uri('/src/assets/img/svg/illustrations/illustration-7.svg'); ?>" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 mt-sm-n7">
                    <div class="card bg-soft-success border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5">
                            <div>
                                <span class="badge badge-success badge-pill">Tips</span>
                            </div>
                            <div class="pl-4">
                                <h5 class="lh-130 text-dark">Rules not to follow</h5>
                                <p class="text-dark opacity-6">
                                    Design made simple with a clean and smart HTML markup.
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="<?php echo get_theme_file_uri('/src/assets/img/svg/illustrations/illustration-6.svg'); ?>" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-6 mt-xl-n7">
                    <div class="card bg-soft-danger border-0 mb-5 hover-translate-y-n10">
                        <div class="d-flex p-5 p">
                            <div>
                                <span class="badge badge-danger badge-pill">Update</span>
                            </div>
                            <div class="pl-3">
                                <h5 class="lh-130 text-dark">Beware the water</h5>
                                <p class="text-dark opacity-6">
                                    Design made simple with a clean and smart HTML markup.
                                </p>
                            </div>
                        </div>
                        <div class="pb-5">
                            <img src="<?php echo get_theme_file_uri('/src/assets/img/svg/illustrations/illustration-5.svg'); ?>" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="badge badge-primary badge-pill">Key features</span>
                    <h5 class="lh-180 mt-4 mb-6">Quick is a premium HTML template that includes adaptable components and
                        pages for various industries, plus new ones each month.</h5>
                </div>
            </div>
            <!-- Features -->
            <div class="row mx-lg-n4">
                <!-- Features - Col 1 -->
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">100% Responsive</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Based on Bootstrap 4</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Built with SASS</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-success text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">300+ components</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">23+ widgets</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Bootstrap Flexbox Grid</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features - Col 3 -->
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Animate CSS</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Integrated plugins</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Smart HTML markup</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-section-secondary">
        <div class="container">
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class=" mt-4">Simple, Straight Pricing</h2>
                    <div class="mt-2">
                        <p class="lead lh-180">Thousands of developers around the world have already made Quick the main
                            tool for building websites.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md">
                    <div class="card card-pricing text-center px-3 shadow hover-scale-110">
                        <div class="card-header py-5 border-0 delimiter-bottom">
                            <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">49</span></div>
                            <span class="h6 text-muted">Standard License</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-sm mb-4">
                                <li>1 end product</li>
                                <li>Use for personal or a client</li>
                                <li>Use in a free end product</li>
                                <li>6 months technical support</li>
                            </ul>
                            <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md">
                    <div class="card card-pricing bg-primary text-center px-3 shadow hover-scale-110">
                        <div class="card-header py-5 border-0 delimiter-bottom">
                            <div class="h1 text-white text-center mb-0">$<span class="price font-weight-bolder">590</span>
                            </div>
                            <span class="h6 text-white">Extended License</span>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                                <li>1 end product</li>
                                <li>Use for personal or a client</li>
                                <li>Use in a free end product</li>
                                <li>Use in an end product that is <strong class="text-success text-underline--dashed">sold</strong></li>
                                <li>6 months technical support</li>
                            </ul>
                            <a href="https://themes.getbootstrap.com/product/quick-website-ui-kit-2/" class="btn btn-sm btn-white hover-translate-y-n3 hover-shadow-lg mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center">
                <p class="mb-2">
                    Both pricings contains all 6 months free support. Need more?
                </p>
                <a href="#" class="text-warning text-underline--dashed">Contact us<i data-feather="arrow-right" class="ml-2"></i></a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>