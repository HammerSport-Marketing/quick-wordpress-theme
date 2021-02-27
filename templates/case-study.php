<?php

/**
 * Template Name: Case study Page
 *
 * @package HammerSport
 * @subpackage Quick Ui Kit
 * @since Quick Ui Kit
 */
get_header();?>

<!-- Main content -->
<main>
    <!-- Heading -->

    <?php if(have_rows('heading')) : 
        while (have_rows('heading')) : the_row();    
    if (get_sub_field('display')) : ?>
        <section class="section-half-rounded">
            <div class="jumbotron section-inner left-0 rounded-right bg-primary overflow-hidden col-lg-5">
                <img src="<?php the_sub_field('featured_image') ?>" alt="Image" class="img-as-bg">
            </div>
            <div class="container text-center text-lg-left py-5">
                <div class="row">
                    <div class="col-lg-7 ml-auto">
                        <div class="card bg-dark shadow-lg border-0 mb-0">
                            <div class="px-5 py-6">
                                <a href="#" class="badge badge-primary badge-pill">
                                    <?php the_sub_field('tag') ?>
                                </a>
                                <h2 class="h2 lh-180 text-white font-weight-bold mt-3 mb-3">
                                    <?php the_sub_field('title') ?>                            
                                </h2>
                                <!-- User meta -->
                                <?php if(have_rows('user_meta')) : 
                                    while (have_rows('user_meta')) : the_row();    
                                if (get_sub_field('display')) : ?>
                                    <div class="media align-items-center mt-5">
                                        <a href="#" class="avatar avatar-sm rounded-circle mr-3">
                                            <img alt="Image placeholder" src="<?php the_sub_field('image')?>">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="h6 text-white mb-0"><?php the_sub_field('name')?></a>
                                        </div>
                                    </div>
                                <?php 
                                endif;
                                    endwhile;
                                else: 
                                ?>
                                    <div> Please check your ACF config. Something went wrong!</div>
                                <?php endif;?>

                            </div>
                        </div>
                        <!-- Time to read section -->
                        <?php if(have_rows('time_to_read')) : 
                            while (have_rows('time_to_read')) : the_row();    
                        if (get_sub_field('display')) : ?>
                            <div class="mt-4 text-right">
                                <span class="badge badge-white badge-lg badge-pill shadow font-weight-light">Time to read: <strong><?php the_sub_field('time')?> min</strong></span>
                            </div>
                        <?php 
                        endif;
                            endwhile;
                        else: 
                        ?>
                            <div> Please check your ACF config. Something went wrong!</div>
                        <?php endif;?>                    
                    </div>
                </div>
            </div>
        </section>
    <?php 
    endif;
        endwhile;
    else: 
    ?>
        <div> Please check your ACF config. Something went wrong!</div>
    <?php endif;?>

    <!-- Content body -->
    <?php if(have_rows('content_body')) : 
        while (have_rows('content_body')) : the_row();    
    if (get_sub_field('display')) : ?>
        <section class="slice">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <!-- Text -->
                        <p class="lh-190">
                            <?php the_sub_field('text') ?>
                        </p>
                        <!-- Blockquote -->

                        <?php if(have_rows('blockquote')) : 
                            while (have_rows('blockquote')) : the_row();    
                        if (get_sub_field('display')) : ?>
                            <blockquote class="blockquote blockquote-card my-5 py-5 px-5 rounded-right bg-soft-primary">
                                <h5 class="h2 font-weight-700"><?php the_sub_field('title') ?></h5>
                                <p class="lead">
                                    <?php the_sub_field('lead') ?>
                                </p>
                                <!-- Footer -->
                                <?php if(have_rows('footer')) : 
                                    while (have_rows('footer')) : the_row();  
                                ?>
                                    <footer class="blockquote-footer">
                                        <?php the_sub_field('role') ?>
                                        <cite class="font-weight-600" title="Source Title">
                                            <?php the_sub_field('name') ?>
                                        </cite>
                                    </footer>
                                <?php endwhile;
                                    endif;
                                ?>
                            </blockquote>
                        <?php 
                        endif;
                            endwhile;
                        else: 
                        ?>
                            <div> Please check your ACF config. Something went wrong!</div>
                        <?php endif;?>

                        <!-- Article -->
                        <?php if(have_rows('article')) : 
                            while (have_rows('article')) : the_row();    
                        ?>
                            <article>
                                <!-- Wordpress Rich text editor -->
                                <?php the_sub_field('body') ?>
                                <!-- Milestones -->
                                <?php if(have_rows('milestones')) : 
                                    while (have_rows('milestones')) : the_row();    
                                if (get_sub_field('display')) : ?>
                                    <div class="row my-5">
                                        <?php for($i = 0; $i < 4; $i++) : 
                                           if(have_rows('milestone_'.$i)) : 
                                            while (have_rows('milestone_'.$i)) : the_row();      
                                        ?>
                                        <!-- Card -->
                                            <div class="col-sm-4">
                                                <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                                                    <div class="p-4 text-center">
                                                        <div class="icon bg-warning text-white rounded-circle icon-shape">
                                                            <?php the_sub_field('icon') ?>
                                                        </div>
                                                        <h3 class="mt-3 mb-0">
                                                            <span 
                                                                class="counter font-weight-bolder" 
                                                                data-from="<?php the_sub_field('data_from') ?>" 
                                                                data-to="<?php the_sub_field('data_to') ?>" 
                                                                data-speed="3000" 
                                                                data-refresh-interval="200"
                                                            ></span>
                                                            <span class="counter-extra">
                                                                <?php the_sub_field('unit') ?>
                                                            </span>
                                                        </h3>
                                                        <p class="text-muted mb-0">
                                                            <?php the_sub_field('title') ?>
                                                        </p>
                                                        <span class="d-sm-block pl-2 text-success">
                                                            <?php the_sub_field('percentage') ?> %
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                                endwhile;
                                            endif;
                                        endfor;
                                        ?>
                                    </div>
                                <?php 
                                endif;
                                    endwhile;
                                else: 
                                ?>
                                    <div> Please check your ACF config. Something went wrong!</div>
                                <?php endif;?>                                
                            </article>
                        <?php 
                            endwhile;
                        else: 
                        ?>
                            <div> Please check your ACF config. Something went wrong!</div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </section>
    <?php 
    endif;
        endwhile;
    else: 
    ?>
        <div> Please check your ACF config. Something went wrong!</div>
    <?php endif;?>
</main>
<?php get_footer(); ?>