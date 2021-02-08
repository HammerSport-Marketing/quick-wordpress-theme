<?php
get_header();?>
<main>
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>  
        <!-- Main content -->
        <section class="slice slice-lg pt-17 pb-0 bg-cover bg-size--cover" style="background-image: url('<?php 
        if( get_post_thumbnail_id() == false) : 
            echo get_theme_file_uri( '/src/assets/img/theme/light/blog-hero-1.jpg'); 
            else : echo get_the_post_thumbnail_url( );  endif; ?>')">
        <!-- Container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="card mb-n7 position-relative zindex-100">
                        <div class="card-body p-md-5">
                            <div class=" text-center">
                                <!-- Badge -->
                                <a href="#" class="badge badge-warning badge-pill">Bootstrap</a>
                                <!-- Heading -->
                                <h1 class="h2 lh-150 mt-3 mb-0"><?php the_title();?></h1>
                            </div>
                            <!-- Share -->
                            <div class="row align-items-center mt-5 pt-5 delimiter-top">
                                <div class="col mb-3 mb-lg-0">
                                    <div class="media align-items-center">
                                        <div>
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="<?php echo get_theme_file_uri( '/src/assets/img/theme/light/person-2.jpg');?>">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <span class="d-block h6 mb-0"><?php the_author();?></span>
                                            <span class="text-sm text-muted"><?php the_time('F j, Y'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item pr-4">
                                            <a href="#" class="text-muted"><i data-feather="share" class="mr-1 text-muted"></i> 131</a>
                                        </li>
                                        <li class="list-inline-item pr-4">
                                            <a href="#" class="text-muted"><i data-feather="eye" class="mr-1 text-muted"></i> 255</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted"><i data-feather="message-circle" class="mr-1 text-muted"></i> 14</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="shape-container shape-position-bottom">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="slice slice-lg pt-10 pb-5">
        <!-- Container -->
        <div class="container pb-6">
            <div class="row row-grid align-items-center">
                <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1">
                    <article>
                      <?php the_content(); ?>
                    </article>
                    <!-- Share -->
                    <div class="row align-items-center mt-7 py-4 border-top border-bottom">
                        <div class="col mb-3 mb-lg-0">
                            <div class="media align-items-center">
                                <div>
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img alt="Image placeholder" src="<?php echo get_theme_file_uri( '/src/assets/img/theme/light/person-2.jpg');?>">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <span class="d-block h6 mb-0"><?php the_author();?></span>
                                    <span class="text-sm text-muted"><?php the_time('F j, Y'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item pr-4">
                                    <a href="#" class="text-muted"><i data-feather="share" class="mr-1 text-muted"></i> 131</a>
                                </li>
                                <li class="list-inline-item pr-4">
                                    <a href="#" class="text-muted"><i data-feather="eye" class="mr-1 text-muted"></i> 255</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted"><i data-feather="message-circle" class="mr-1 text-muted"></i> 14</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Comments -->
                    <div class="mt-5">
                        <h6 class="mb-4">Comments</h6>
                        <!-- Comment entry -->
                        <div class="media media-comment">
                            <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="<?php echo get_theme_file_uri( '/src/assets/img/theme/light/person-3.jpg');?>" style="width: 58px;">
                            <div class="media-body">
                                <div class="media-comment-bubble left-top">
                                    <h6 class="mt-0">Alexis Ren</h6>
                                    <p class="text-sm lh-160">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    <div class="icon-actions">
                                        <a href="#" class="love active">
                                            <i data-feather="heart"></i>
                                            <span class="text-muted">10 likes</span>
                                        </a>
                                        <a href="#">
                                            <i data-feather="message-circle"></i>
                                            <span class="text-muted">1 reply</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media media-comment">
                            <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="<?php echo get_theme_file_uri( '/src/assets/img/theme/light/person-4.jpg');?>" style="width: 58px;">
                            <div class="media-body">
                                <div class="media-comment-bubble left-top">
                                    <h6 class="mt-0">Tom Cruise</h6>
                                    <p class="text-sm lh-160">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    <div class="icon-actions">
                                        <a href="#" class="love active">
                                            <i data-feather="heart"></i>
                                            <span class="text-muted">20 likes</span>
                                        </a>
                                        <a href="#">
                                            <i data-feather="message-circle"></i>
                                            <span class="text-muted">3 replies</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media media-comment align-items-center">
                            <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="<?php echo get_theme_file_uri( '/src/assets/img/theme/light/person-1.jpg');?>" style="width: 58px;">
                            <div class="media-body">
                                <form class="rounded-lg border">
                                    <div class="input-group input-group-lg input-group-merge">
                                        <!-- Prepend -->
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0 pr-2">
                                                <i data-feather="edit-2"></i>
                                            </span>
                                        </div>
                                        <!-- Input -->
                                        <input type="text" class="form-control border-0 px-1" aria-label="Find something" placeholder="Write a comment...">
                                        <!-- Append -->
                                        <div class="input-group-append">
                                            <span class="input-group-text border-0 py-0 pl-2 pr-2">
                                                <button type="button" class="btn btn-sm btn-primary">Post</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="shape-container shape-position-bottom">
            <img alt="Image placeholder" src="<?php echo get_theme_file_uri( '/src/assets/img/svg/separators/line.svg');?>" class="svg-inject fill-section-secondary">
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <section class="slice slice-lg bg-section-secondary">
        <div class="container">
            <!-- Title -->
            <div class="row align-items-center mb-5">
                <div class="col-12 col-md">
                    <h3 class="h4 mb-0">Keep reading</h3>
                    <p class="mb-0 text-muted">
                        Even more stories from Quick
                    </p>
                </div>
                <div class="col-12 col-md-auto">
                    <a href="#!" class="btn btn-sm btn-neutral d-none d-md-inline">
                        View all
                    </a>
                </div>
            </div>
            <!-- Posts -->
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img alt="Image placeholder" src="<?php echo get_theme_file_uri( '/src/assets/img/theme/light/blog-1-800x600.jpg');?>" class="card-img-top">
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
                                <img alt="Image placeholder" src="<?php echo get_theme_file_uri( '/src/assets/img/theme/light/blog-2-800x600.jpg');?>" class="card-img-top">
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
                                <img alt="Image placeholder" src="<?php echo get_theme_file_uri( '/src/assets/img/theme/light/blog-3-800x600.jpg');?>" class="card-img-top">
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
        </div>
    </section>
</main>
 <?php get_footer();  ?>