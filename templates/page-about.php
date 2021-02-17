<?php

/**
 * Template Name: About Page
 *
 * @package HammerSport
 * @subpackage Quick Ui Kit
 * @since Quick Ui Kit
 */
get_header(); ?>
<!-- Main content -->
<main>

    <!-- Hero Slice -->

    <?php if(have_rows('hero_slice')) : 
        while (have_rows('hero_slice')) : the_row();    
    ?>
    <!-- Check if this section display is enabled -->
    <?php if (get_sub_field('display')) : ?>
        <section class="slice py-8 bg-dark bg-cover bg-size--cover"
            style="background-image: url('<?php the_sub_field('header_background'); ?>');">
            <!-- Mask -->
            <span class="mask bg-gradient-dark opacity-9"></span>
            <!-- Container -->
            <div class="container d-flex align-items-center text-center text-lg-left pt-5 pb-5 pt-lg-6">
                <div class="col px-0">
                    <div class="row row-grid align-items-center">
                        <div class="col-lg-8 text-center text-lg-left">
                            <!-- Heading -->
                            <h1 class="text-white mb-4">
                                <?php the_sub_field('headline'); ?>
                            </h1>
                            <!-- Text -->
                            <p class="lead text-white opacity-8">
                                <?php the_sub_field('subheadline'); ?>
                            </p>
                            <!-- Buttons -->
                            <?php if(have_rows('call_to_action')) : 
                                while (have_rows('call_to_action')) : the_row();    
                            ?>
                                <div class="mt-5">
                                    <a href="<?php the_sub_field('url') ?>" class="btn btn-warning btn-lg btn-icon">
                                        <span class="btn-inner--icon">
                                            <?php the_sub_field('icon') ?>
                                        </span>
                                        <span class="btn-inner--text"><?php the_sub_field('text') ?></span>
                                    </a>
                                </div>
                            <?php endwhile;
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="shape-container shape-line shape-position-bottom">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px"
                    viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
    <?php endif;?>

    <?php
        endwhile;
    else: 
    ?>
        <div> Please check your ACF config. Something went wrong!</div>
    <?php endif;?>

    <!-- Slice 1 -->

    <?php if(have_rows('slice_1')) : 
        while (have_rows('slice_1')) : the_row();    
    ?>
    <!-- Check if this section display is enabled -->
    <?php if (get_sub_field('display')) : ?>
        <section class="slice slice-lg">
            <div class="container">
                <span class="badge badge-primary badge-pill">
                    <?php the_sub_field('tag') ?>
                </span>
                <div class="row mt-4">
                    <div class="col-lg-6 pr-lg-5">
                        <p class="h5 lh-180 mb-3">
                            <?php the_sub_field('focused_text') ?>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="lead lh-180">
                            <?php the_sub_field('text') ?>
                        </p>
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

    <!-- Slice 2 -->

    <?php if(have_rows('slice_2')) : 
        while (have_rows('slice_2')) : the_row();    
    ?>
    <!-- Check if this section display is enabled -->
    <?php if (get_sub_field('display')) : ?>
        <section class="slice slice-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-6">
                        <img src="<?php the_sub_field('image_1') ?>" alt="Image"
                            class="rounded-lg img-fluid" />
                        <div class="text-right mt-4">
                            <img src="<?php the_sub_field('image_2') ?>"
                                alt="Image" class="rounded-lg img-fluid w-50" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-6">
                        <img src="<?php the_sub_field('image_3') ?>"
                            alt="Image" class="rounded-lg img-fluid w-75" />
                        <div class="text-right mt-4">
                            <img src="<?php the_sub_field('image_4') ?>"
                                alt="Image" class="rounded-lg img-fluid" />
                        </div>
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

    <!-- Slice 3 -->

    <?php if(have_rows('slice_3')) : 
        while (have_rows('slice_3')) : the_row();    
    ?>
    <!-- Check if this section display is enabled -->
    <?php if (get_sub_field('display')) : ?>
        <section class="slice slice-lg pt-10 bg-primary">
            <!-- SVG separator -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px"
                    viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Container -->
            <div class="container">
                <div class="row row-grid">
                    <div class="col-lg-8">
                        <!-- Badge -->
                        <span class="badge badge-warning badge-pill">
                            <?php the_sub_field('tag') ?>
                        </span>
                        <!-- Title -->
                        <h2 class="my-4 text-white">
                            <?php the_sub_field('title') ?>
                        </h2>
                        <!-- Text -->
                        <p class="lead text-white lh-190">
                            <?php the_sub_field('description') ?>
                        </p>
                    </div>
                </div>
                <!-- Milestones -->
                <div class="row mt-6">
                    <div class="col-lg-6">
                        <div class="row">
                            <?php if(have_rows('milestones')) : 
                                while (have_rows('milestones')) : the_row();    
                            ?>
                                <!--  Block -->
                                <?php for($i = 1; $i < 4; $i++) : 
                                    if(have_rows('block_'.$i)) : 
                                        while (have_rows('block_'.$i)) : the_row();   
                                ?>
                                    <div class="col-sm-4">
                                        <div class="card shadow-lg rounded-lg border-0 mb-sm-0">
                                            <div class="p-4 text-center text-sm-left">
                                                <h3 class="mb-0">
                                                    <span 
                                                        class="counter" 
                                                        data-from="<?php the_sub_field('data_from') ?>" 
                                                        data-to="<?php the_sub_field('data_to') ?>" 
                                                        data-speed="<?php the_sub_field('data_speed') ?>"
                                                        data-refresh-interval="200"
                                                    ></span>
                                                    <span class="counter-extra">
                                                        <?php the_sub_field('counter_unit') ?>
                                                    </span>
                                                </h3>
                                                <p class="text-muted mb-0">
                                                    <?php the_sub_field('feature_name') ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                        endwhile;
                                    endif; 
                                endfor;
                                endwhile;
                            endif;
                            ?>
                        </div>
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

    <!-- Slice 4 -->

    <?php if(have_rows('slice_4')) : 
        while (have_rows('slice_4')) : the_row();    
    ?>
    <!-- Check if this section display is enabled -->
    <?php if (get_sub_field('display')) : ?>
        <section class="slice slice-lg pb-5">
            <div class="container">
                <!-- Section title -->
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class=" mt-4">
                            <?php the_sub_field('title')?>
                        </h2>
                    </div>
                </div>
                <?php if(have_rows('team')) : 
                    while (have_rows('team')) : the_row();  
                        for($i=1 ;$i < 3 ; $i++) : ?>
                            <div class="row">
                                <?php for ($j = 1; $j < 5 ; $j++) : 
                                    if(have_rows('member_'.$j)) : 
                                        while (have_rows('member_'.$j)) : the_row();
                                ?>
                                    <!-- Classes of each element are different based on their position -->
                                    <div 
                                    class=" <?php 
                                                // Simple access formula that allows to turn a matrix index into 1D array matrices
                                                // $i gets evaluated from 1 to 2 and $j from 1 to 4.
                                                switch($j + ($i-1)*4) {
                                                    case 1: case 2: case 3: case 4:
                                                        echo "col-lg-3 col-sm-6 mb-5";
                                                        break;
                                                    case 5: case 6: case 7:
                                                        echo "col-lg-3 col-sm-6 mb-5 mb-sm-0";
                                                        break;
                                                    case 8:
                                                        echo "col-lg-3 col-sm-6 mb-0";
                                                        break;
                                                }
                                            ?>"
                                    >
                                        <div data-animate-hover="2">
                                            <div class="animate-this">
                                                <a href="<?php the_sub_field('url') ?>">
                                                    <img alt="Image placeholder" class="img-fluid rounded shadow"
                                                        src="<?php the_sub_field('image') ?>">
                                                </a>
                                            </div>
                                            <div class="mt-3">
                                                <h5 class="h6 mb-0"><?php the_sub_field('full_name') ?></h5>
                                                <p class="text-muted text-sm mb-0"><?php the_sub_field('role') ?></p>
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
                        endfor;
                    endwhile;
                endif; 
                ?>
            </div>
        </section>
    <?php endif;?>
    <?php
        endwhile;
    else: 
    ?>
        <div> Please check your ACF config. Something went wrong!</div>
    <?php endif;?>

</main>
<?php get_footer(); ?>