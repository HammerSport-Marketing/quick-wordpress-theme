<?php

/**
 * Template Name: Service Type 
 * @package HammerSport
 * @subpackage Quick Ui Kit
 * @since Quick Ui Kit
 */
get_header();
?>

<!-- Main content -->
    <!-- Heading -->
    <?php if(have_rows('heading')) : 
        while (have_rows('heading')) : the_row();    
    ?>
    <!-- Check if this section display is enabled -->
    <?php if (get_sub_field('display')) : ?>
        <div 
            class="min-vh-100 py-9 py-lg-0 bg-cover bg-size--cover" 
            style="background-image: url(<?php the_sub_field('background_image') ?>);"
        ></div>
        <section class="section-half-rounded bg-transparent pt-6 pb-10 mt-n17 zindex-100">
            <!-- Jumbotron shape -->
            <div class="jumbotron section-inner left-0 rounded-top-right bg-primary overflow-hidden col-xl-10 col-lg-11"></div>
            <!-- Container -->
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-xl-9 col-lg-11 offset-lg-1 offset-xl-2">
                        <a href="#" class="badge badge-warning badge-pill">
                            <?php the_sub_field('tag')?>
                        </a>
                        <!-- Heading -->
                        <h1 class="h2 text-white mt-3 mb-6 pr-5">
                            <?php the_sub_field('service_name')?>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
    <?php
        endwhile;
    else: 
    ?>
        <div> Please check your ACF config. Something went wrong!</div>
    <?php endif;?>

<!-- Content Slice -->
<section class="section-half-rounded bg-transparent py-5 mt-n10 zindex-101">
    <!-- Jumbotron shape -->
    <div class="jumbotron section-inner right-0 rounded-0 overflow-hidden col-xl-10 col-lg-12"></div>
    <!-- Container -->
    <div class="container pb-6">
        <div class="row row-grid align-items-center">
            <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1">
                <article>
                    <!-- Text -->
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <!-- Text -->
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                    <!-- Heading -->
                    <h5>This is a secondary heading</h5>
                    <!-- Text -->
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <!-- Image -->
                    <figure class="figure">
                        <a href="../../assets/img/theme/light/blog-1-800x600.jpg" data-fancybox>
                            <img alt="Image placeholder" src="../../assets/img/theme/light/blog-1-800x600.jpg" class="img-fluid rounded hover-translate-y-n3 hover-shadow-lg">
                        </a>
                        <figcaption class="mt-3 text-muted text-sm text-center">Figure one: Type here your description</figcaption>
                    </figure>
                    <!-- Heading -->
                    <h5 class="h3">This is a primary heading</h5>
                    <!-- Text -->
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <!-- List -->
                    <ul class="list-unstyled list-bullet">
                        <li class="py-2">
                            <span class="badge badge-circle rounded-circle badge-success mr-2"><i data-feather="check"></i></span>
                            Design websites, layouts, app interfaces and more
                        </li>
                        <li class="py-2">
                            <span class="badge badge-circle rounded-circle badge-success mr-2"><i data-feather="check"></i></span>
                            Help to build/code/assemble these things
                        </li>
                        <li class="py-2">
                            <span class="badge badge-circle rounded-circle badge-success mr-2"><i data-feather="check"></i></span>
                            Use WordPress, a lot
                        </li>
                        <li class="py-2">
                            <span class="badge badge-circle rounded-circle badge-success mr-2"><i data-feather="check"></i></span>
                            Collaborate closely with your team members
                        </li>
                        <li class="py-2">
                            <span class="badge badge-circle rounded-circle badge-success mr-2"><i data-feather="check"></i></span>
                            Always learn somthing new
                        </li>
                    </ul>
                    <!-- Heading -->
                    <h5>1. This is a secondary heading</h5>
                    <!-- Image -->
                    <figure class="figure">
                        <a href="../../assets/img/theme/light/blog-1-800x600.jpg" data-fancybox>
                            <img alt="Image placeholder" src="../../assets/img/theme/light/blog-2-800x600.jpg" class="img-fluid rounded hover-translate-y-n3 hover-shadow-lg">
                        </a>
                        <figcaption class="mt-3 text-muted text-sm text-center">Figure two: Type here your description</figcaption>
                    </figure>
                    <!-- Text -->
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <!-- Heading -->
                    <h5>2. This is a secondary heading</h5>
                    <!-- Text -->
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <!-- Milestones -->
                    <div class="row my-5">
                        <div class="col-sm-4">
                            <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                                <div class="p-4 text-center">
                                    <div class="icon bg-warning text-white rounded-circle icon-shape">
                                        <i data-feather="dollar-sign"></i>
                                    </div>
                                    <h3 class="mt-3 mb-0">
                                        <span class="counter font-weight-bolder" data-from="0" data-to="10" data-speed="3000" data-refresh-interval="200"></span>
                                        <span class="counter-extra">k</span>
                                    </h3>
                                    <p class="text-muted mb-0">
                                        Customers
                                    </p>
                                    <span class="d-sm-block pl-2 text-success">
                                        30%
                                        <small data-feather="chevron-up"></small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                                <div class="p-4 text-center">
                                    <div class="icon bg-danger text-white rounded-circle icon-shape">
                                        <i data-feather="download"></i>
                                    </div>
                                    <h3 class="mt-3 mb-0">
                                        <span class="counter font-weight-bolder" data-from="0" data-to="53" data-speed="3000" data-refresh-interval="200"></span>
                                        <span class="counter-extra">k</span>
                                    </h3>
                                    <p class="text-muted mb-0">
                                        Downloads
                                    </p>
                                    <span class="d-sm-block pl-2 text-success">
                                        50%
                                        <small data-feather="chevron-up"></small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                                <div class="p-4 text-center">
                                    <div class="icon bg-success text-white rounded-circle icon-shape">
                                        <i data-feather="users"></i>
                                    </div>
                                    <h3 class="mt-3 mb-0">
                                        <span class="counter font-weight-bolder" data-from="0" data-to="98" data-speed="3000" data-refresh-interval="200"></span>
                                        <span class="counter-extra">%</span>
                                    </h3>
                                    <p class="text-muted mb-0">
                                        Happy users
                                    </p>
                                    <span class="d-sm-block pl-2 text-success">
                                        100%
                                        <small data-feather="chevron-up"></small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
