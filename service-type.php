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
                <?php if(have_rows('content')) : 
                    while (have_rows('content')) : the_row();    
                ?>
                    <article>
                        <!-- Article block 1 -->
                        <?php the_sub_field('block_1') ?>

                        <!-- Image -->
                        <?php if(have_rows('image_1')) : 
                            while (have_rows('image_1')) : the_row();    
                        ?>
                            <figure class="figure">
                                <a href="<?php the_sub_field('img')?>" data-fancybox>
                                    <img alt="Image placeholder" src="<?php the_sub_field('img')?>" class="img-fluid rounded hover-translate-y-n3 hover-shadow-lg">
                                </a>
                                <figcaption class="mt-3 text-muted text-sm text-center">
                                    <?php the_sub_field('caption') ?>
                                </figcaption>
                            </figure>
                        <?php endwhile;
                            endif;
                        ?>  

                        <!-- Block 2 -->

                        <?php the_sub_field('block_2') ?>

                        <!-- Image -->

                        <?php if(have_rows('image_2')) : 
                            while (have_rows('image_2')) : the_row();    
                        ?>
                            <figure class="figure">
                                <a href="<?php the_sub_field('img')?>" data-fancybox>
                                    <img alt="Image placeholder" src="<?php the_sub_field('img')?>" class="img-fluid rounded hover-translate-y-n3 hover-shadow-lg">
                                </a>
                                <figcaption class="mt-3 text-muted text-sm text-center">
                                    <?php the_sub_field('caption') ?>
                                </figcaption>
                            </figure>
                        <?php endwhile;
                            endif;
                        ?>  

                        <!-- Block 3 -->

                        <?php the_sub_field('block_3') ?>

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
                <?php endwhile;
                        endif; 
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
