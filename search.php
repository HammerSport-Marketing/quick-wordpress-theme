<?php
if (is_404()) :
    get_header('404');
else :
    get_header();
endif;
?>

   <main>
           <!-- Main content -->
    <section class="slice slice-lg py-7 bg-cover bg-size--cover" style="background-image: url(../../assets/img/backgrounds/img-5.jpg);">
        <span class="mask bg-dark opacity-8"></span>
        <div class="container d-flex align-items-center" data-offset-top="#navbar-main">
            <div class="col py-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 col-lg-7 text-center">
                        <h1 class="display-4 text-white mb-2"><strong>Quick</strong> Blog</h1>
                        <span class="text-white text-sm">#1 blog on web design resources on the internet</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="border-bottom">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text- active" href="#">UI/UX</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Frameworks</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">React</a>
                                <a class="dropdown-item" href="#">Vue JS</a>
                                <a class="dropdown-item" href="#">Angular</a>
                                <a class="dropdown-item" href="#">Laravel</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Boostrap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Technology</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
               <?php get_search_form( ); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="slice pt-5 pb-7 bg-section-secondary">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/blog-1-800x600.jpg" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body py-4">
                            <small class="d-block text-sm mb-2">25 April, 2020</small>
                            <a href="#" class="h5 stretched-link lh-150">Choose the best solution for your business</a>
                            <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                        </div>
                        <div class="card-footer border-0 delimiter-top">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                                    <span class="text-sm mb-0 avatar-content">David Wally</span>
                                </div>
                                <div class="col text-right text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                        <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/blog-2-800x600.jpg" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body py-4">
                            <small class="d-block text-sm mb-2">25 April, 2020</small>
                            <a href="#" class="h5 stretched-link lh-150">How to find the right design for your specific product</a>
                            <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                        </div>
                        <div class="card-footer border-0 delimiter-top">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                                    <span class="text-sm mb-0 avatar-content">David Wally</span>
                                </div>
                                <div class="col text-right text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                        <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/blog-3-800x600.jpg" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body py-4">
                            <small class="d-block text-sm mb-2">25 April, 2020</small>
                            <a href="#" class="h5 stretched-link lh-150">Win buyers and influence sales with marketing</a>
                            <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                        </div>
                        <div class="card-footer border-0 delimiter-top">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                                    <span class="text-sm mb-0 avatar-content">David Wally</span>
                                </div>
                                <div class="col text-right text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                        <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/blog-4-800x600.jpg" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body py-4">
                            <small class="d-block text-sm mb-2">25 April, 2020</small>
                            <a href="#" class="h5 stretched-link lh-150">Choose the best solution for your business</a>
                            <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                        </div>
                        <div class="card-footer border-0 delimiter-top">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                                    <span class="text-sm mb-0 avatar-content">David Wally</span>
                                </div>
                                <div class="col text-right text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                        <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/blog-5-800x600.jpg" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body py-4">
                            <small class="d-block text-sm mb-2">25 April, 2020</small>
                            <a href="#" class="h5 stretched-link lh-150">How to find the right design for your specific product</a>
                            <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                        </div>
                        <div class="card-footer border-0 delimiter-top">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                                    <span class="text-sm mb-0 avatar-content">David Wally</span>
                                </div>
                                <div class="col text-right text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                        <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/blog-6-800x600.jpg" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body py-4">
                            <small class="d-block text-sm mb-2">25 April, 2020</small>
                            <a href="#" class="h5 stretched-link lh-150">Win buyers and influence sales with marketing</a>
                            <p class="mt-3 mb-0 lh-170">No matter what he does, every person on earth plays a central role in the history.</p>
                        </div>
                        <div class="card-footer border-0 delimiter-top">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar avatar-sm bg-primary rounded-circle">JD</span>
                                    <span class="text-sm mb-0 avatar-content">David Wally</span>
                                </div>
                                <div class="col text-right text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i data-feather="heart" class="mr-1"></i> 50</a>
                                        <a href="#" class="action-item"><i data-feather="eye" class=" mr-1"></i> 250</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Load more -->
            <div class="mt-4 text-center">
                <a href="#" class="btn btn-neutral hover-translate-y-n3">Load more</a>
            </div>
        </div>
    </section>
   </main>
    <?php get_footer(); ?>