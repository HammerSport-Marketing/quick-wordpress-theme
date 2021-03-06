<?php
/**
 * Template Name: FAQ Page
 *
 * @package HammerSport
 * @subpackage Quick Ui Kit
 * @since Quick Ui Kit
 */
get_header();
?>
    <!-- Main content -->
    <section class="slice slice-lg bg-cover bg-size--cover" style="background-image: url(../../assets/img/backgrounds/img-1.jpg);">
        <!-- Mask -->
        <span class="mask bg-primary opacity-9"></span>
        <!-- Container -->
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2 class="mb-4 text-center text-white">How can we help?</h2>
                    <form>
                        <div class="form-group bg-neutral rounded-pill mb-0 px-2 py-2 shadow">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group input-group-merge shadow-none">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-0"><i data-feather="search"></i></span>
                                        </div>
                                        <input type="text" class="form-control form-control-flush shadow-none" placeholder="Search for answers ...">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-block btn-dark rounded-pill">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container position-relative zindex-100">
            <div class="my-5 text-center">
                <h6 class="text-white font-weight-light mb-0">or choose a category to quickly find the answer you need</h6>
            </div>
            <!-- Categories -->
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 mb-xl-n8">
                            <div class="card hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body p-5 text-center">
                                    <div class="pb-4">
                                        <img alt="Image placeholder" src="<?php echo get_theme_file_uri('/src/assets/img/svg/icons/Code.svg');?>" class="svg-inject img-fluid" style="height: 40px">
                                    </div>
                                    <div class="pt-2">
                                        <a href="#" class="h6 stretched-link mb-0">Getting started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 mb-xl-n8">
                            <div class="card hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body p-5 text-center">
                                    <div class="pb-4">
                                        <img alt="Image placeholder" src="<?php echo get_theme_file_uri('/src/assets/img/svg/icons/Chat.svg');?>" class="svg-inject img-fluid" style="height: 40px">
                                    </div>
                                    <div class="pt-2">
                                        <a href="#" class="h6 stretched-link mb-0">Seller questions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 mb-xl-n8">
                            <div class="card hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body p-5 text-center">
                                    <div class="pb-4">
                                        <img alt="Image placeholder" src="<?php echo get_theme_file_uri('/src/assets/img/svg/icons/Desk.svg');?>" class="svg-inject img-fluid" style="height: 40px">
                                    </div>
                                    <div class="pt-2">
                                        <a href="#" class="h6 stretched-link mb-0">Buyer questions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 mb-xl-n8">
                            <div class="card hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body p-5 text-center">
                                    <div class="pb-4">
                                        <img alt="Image placeholder" src="<?php echo get_theme_file_uri('/src/assets/img/svg/icons/Group.svg');?>" class="svg-inject img-fluid" style="height: 40px">
                                    </div>
                                    <div class="pt-2">
                                        <a href="#" class="h6 stretched-link mb-0">Customization</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG Separator -->
        <div class="shape-container shape-position-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
            </svg>
        </div>
    </section>
    <section class="slice slice-lg" id="sct-faq">
        <div class="container">
            <div class="row row-grid">
                <div class="col-lg-3">
                    <!-- Side menu -->
                    <div data-toggle="sticky" data-sticky-offset="50">
                        <div class="card">
                            <div class="list-group list-group-flush">
                                <a href="#theme-integration" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div>
                                        <i data-feather="layout" class="mr-2"></i>
                                        <span>Theme integration</span>
                                    </div>
                                    <div>
                                        <i data-feather="chevron-right"></i>
                                    </div>
                                </a>
                                <a href="#customization" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div>
                                        <i data-feather="sliders" class="mr-2"></i>
                                        <span>Customization</span>
                                    </div>
                                    <div>
                                        <i data-feather="chevron-right"></i>
                                    </div>
                                </a>
                                <a href="#fonts-and-colors" data-scroll-to data-scroll-to-offset="50" class="list-group-item list-group-item-action d-flex justify-content-between">
                                    <div>
                                        <i data-feather="edit-3" class="mr-2"></i>
                                        <span>Fonts and colors</span>
                                    </div>
                                    <div>
                                        <i data-feather="chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ml-lg-auto">
                    <!-- Theme integration -->
                    <div class="mb-5">
                        <h4 class="mb-4" id="theme-integration">Theme integration</h4>
                        <!-- Accordion -->
                        <div id="accordion-1" class="accordion accordion-spaced">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-1" data-toggle="collapse" role="button" data-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                                    <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>Which license do I need?</h6>
                                </div>
                                <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                    <h6 class="mb-0"><i data-feather="unlock" class="mr-3"></i>How do I get access to a theme?</h6>
                                </div>
                                <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                    <h6 class="mb-0"><i data-feather="folder" class="mr-3"></i>How do I see previous orders?</h6>
                                </div>
                                <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Scroll to top -->
                        <div class="text-right py-4">
                            <a href="#theme-integration" data-scroll-to data-scroll-to-offset="50" class="text-sm font-weight-bold">Back to top<i data-feather="chevron-up" class="ml-2"></i></a>
                        </div>
                    </div>
                    <!-- Customization  -->
                    <div class="mb-md">
                        <h4 class="mb-4" id="customization">Customization</h4>
                        <!-- Accordion -->
                        <div id="accordion-2" class="accordion accordion-spaced">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                                    <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>Which license do I need?</h6>
                                </div>
                                <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                    <h6 class="mb-0"><i data-feather="unlock" class="mr-3"></i>How do I get access to a theme?</h6>
                                </div>
                                <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button" data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                                    <h6 class="mb-0"><i data-feather="folder" class="mr-3"></i>How do I see previous orders?</h6>
                                </div>
                                <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3" data-parent="#accordion-2">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Scroll to top -->
                        <div class="text-right py-4">
                            <a href="#customization" data-scroll-to data-scroll-to-offset="50" class="text-sm font-weight-bold">Back to top<i data-feather="chevron-up" class="ml-2"></i></a>
                        </div>
                    </div>
                    <!-- Fonts and colors -->
                    <div class="mb-md">
                        <h4 class="mb-4" id="fonts-and-colors">Fonts and colors</h4>
                        <!-- Accordion -->
                        <div id="accordion-3" class="accordion accordion-spaced">
                            <!-- Accordion card 1 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-3-1" data-toggle="collapse" role="button" data-target="#collapse-3-1" aria-expanded="false" aria-controls="collapse-3-1">
                                    <h6 class="mb-0"><i data-feather="file" class="mr-3"></i>Which license do I need?</h6>
                                </div>
                                <div id="collapse-3-1" class="collapse" aria-labelledby="heading-3-1" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 2 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-3-2" data-toggle="collapse" role="button" data-target="#collapse-3-2" aria-expanded="false" aria-controls="collapse-3-2">
                                    <h6 class="mb-0"><i data-feather="unlock" class="mr-3"></i>How do I get access to a theme?</h6>
                                </div>
                                <div id="collapse-3-2" class="collapse" aria-labelledby="heading-3-2" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card 3 -->
                            <div class="card">
                                <div class="card-header py-4" id="heading-3-3" data-toggle="collapse" role="button" data-target="#collapse-3-3" aria-expanded="false" aria-controls="collapse-3-3">
                                    <h6 class="mb-0"><i data-feather="folder" class="mr-3"></i>How do I see previous orders?</h6>
                                </div>
                                <div id="collapse-3-3" class="collapse" aria-labelledby="heading-3-3" data-parent="#accordion-3">
                                    <div class="card-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Scroll to top -->
                        <div class="text-right py-4">
                            <a href="#fonts-and-colors" data-scroll-to data-scroll-to-offset="50" class="text-sm font-weight-bold">Back to top<i data-feather="chevron-up" class="ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer();?>