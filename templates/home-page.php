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

    <!-- Hero Slice -->

    <?php if(have_rows('hero_slice')) : 
        while (have_rows('hero_slice')) : the_row();    
    ?>
    <!-- Check if this section display is enabled -->
    <?php if (get_sub_field('display')) : ?>
        <section class="slice py-5">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-12 col-md-5 col-lg-6 order-md-2">
                        <!-- Image -->
                        <figure class="w-100">
                            <img alt="Image placeholder" src="<?php the_sub_field('image') ?>" class="img-fluid mw-md-120">
                        </figure>
                    </div>
                    <?php
                    if (have_rows('headline')) :
                        while (have_rows('headline')) : the_row();
                    ?>
                            <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                                <!-- Heading -->
                                <h1 class="display-4 text-center text-md-left mb-3">
                                    <?php the_sub_field('catch_phrase') ?> <strong class="text-primary"> <?php the_sub_field('focus_item') ?> </strong>
                                </h1>
                                <!-- Description Text -->
                                <p class="lead text-center text-md-left text-muted">
                                    <?php the_sub_field('hero_description_text') ?>
                                </p>
                                <!-- Call to action -->
                                <?php 
                                if(have_rows('call_to_action')) :
                                    while (have_rows('call_to_action')) : the_row();
                                ?>
                                <div class="text-center text-md-left mt-5">
                                    <!-- Focused Button -->
                                    <?php
                                    if(have_rows('focused_button')) :
                                        while (have_rows('focused_button')) : the_row();
                                    ?>
                                    <a href="<?php the_sub_field('url') ?>" class="btn btn-primary btn-icon">
                                        <span class="btn-inner--text">
                                            <?php the_sub_field('label') ?>
                                        </span>
                                        <span class="btn-inner--icon">
                                            <i data-feather="arrow-right"></i>
                                        </span>
                                    </a>
                                    <?php 
                                        endwhile;
                                    else : ?>
                                            <div> Please check your ACF config. Something went wrong!</div>
                                    <?php endif;?>
                                    <!-- Transparent BG Button -->
                                    <?php
                                    if(have_rows('transparent_bg_button')) :
                                        while (have_rows('transparent_bg_button')) : the_row();
                                    ?>
                                        <a href="<?php the_sub_field('url') ?>" class="btn btn-neutral btn-icon d-none d-lg-inline-block"><?php the_sub_field('label') ?></a>
                                    <?php 
                                        endwhile;
                                    else : ?>
                                            <div> Please check your ACF config. Something went wrong!</div>
                                    <?php endif;?>
                                </div>
                                <?php 
                                    endwhile;
                                else : ?>
                                        <div> Please check your ACF config. Something went wrong!</div>
                                <?php endif;?>
                            </div>
                    <?php endwhile;
                    else : ?>
                        <div> Please check your ACF config. Something went wrong!</div>
                    <?php endif;?>
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

    <!-- Slice 1 -->

    <?php if(have_rows('slice_1')) : 
        while (have_rows('slice_1')) : the_row();    
    ?>
    <?php if (get_sub_field('display')) : ?>
        <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6">
            <div class="container">
                <!-- Title -->
                <div class="row justify-content-lg-end">
                    <div class="col-lg-5 text-lg-right">
                        <h6 class="display-4 text-danger"><?php the_sub_field('red_focus_text') ?></h6>
                        <p class="lh-180 mb-3">
                            <?php the_sub_field('description') ?>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="display-4 lh-130">
                            <?php the_sub_field('heading_text'); ?>
                        </h3>
                    </div>
                </div>
                <!-- Cards -->
                <?php if(have_rows('cards')) : 
                    while (have_rows('cards')) : the_row();    
                ?>
                    <div class="row mt-5">
                    <?php for($i = 1; $i < 4 ; $i++) : ?>
                        <?php if(have_rows('card_'.$i)) : 
                            while (have_rows('card_'.$i)) : the_row();    
                        ?>
                            <div class="col-md-4">
                                <div class="card border-0 bg-soft-danger">
                                    <div class="card-body pb-5">
                                        <div class="pt-4 pb-5">
                                            <img src="<?php the_sub_field('image'); ?>" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                                        </div>
                                        <h5 class="h4 lh-130 text-dark mb-3"><?php the_sub_field('title'); ?></h5>
                                        <p class="text-dark opacity-6 mb-0"><?php the_sub_field('description'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endwhile;
                        endif; 
                        ?>                     
                    <?php endfor; ?>
                    </div>
                <?php
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

    <!-- Slice 2 -->

    <?php if(have_rows('slice_2')) : 
        while (have_rows('slice_2')) : the_row();    
    ?>
    <?php if (get_sub_field('display')) : ?>    
        <section class="slice slice-lg">
            <div class="container">
                <div class="row row-grid justify-content-around align-items-center">
                    <div class="col-lg-6 order-lg-2 ml-lg-auto pl-lg-6">
                        <!-- Heading -->
                        <h5 class="h2 mt-4">
                            <?php the_sub_field('title')?>
                        </h5>
                        <!-- Text -->
                        <p class="lead lh-190 my-4">
                            <?php the_sub_field('description')?>
                        </p>
                        <!-- List -->
                        <?php if(have_rows('items_list')) : 
                            while (have_rows('items_list')) : the_row();    
                        ?>
                            <ul class="list-unstyled">
                                <?php for($i = 1; $i < 4; $i++) : ?>
                                    <?php if(have_rows('item_'.$i)) : 
                                        while (have_rows('item_'.$i)) : the_row();    
                                    ?>
                                        <?php if (get_sub_field('display')) : ?>  
                                            <li class="py-2">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                                                            <?php the_sub_field('item_icon') ?> 
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="h6 mb-0"> <?php the_sub_field('text')?> </span>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endif;?> 
                                    <?php
                                        endwhile;
                                    else: 
                                    ?>
                                        <div> Please check your ACF config. Something went wrong!</div>
                                    <?php endif;?>   
                                <?php endfor; ?>                              
                            </ul>
                        <?php
                            endwhile;
                        else: 
                        ?>
                            <div> Please check your ACF config. Something went wrong!</div>
                        <?php endif;?>                        
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <!-- Image -->
                        <div class="position-relative zindex-100">
                            <img alt="Image placeholder" src="<?php the_sub_field('image') ?>" class="img-fluid">
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
    <?php if (get_sub_field('display')) : ?>   
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
                                    <?php the_sub_field('title')?>
                                </h2>
                                <h4 class="text-white mt-3"><?php the_sub_field('subtitle')?></h4>
                                <!-- Play button -->
                                <?php if(have_rows('button')) : 
                                    while (have_rows('button')) : the_row();    
                                ?>
                                    <a href="https://www.youtube.com/watch?v=zodT9bCdIiI" data-fancybox data-toggle="tooltip" data-placement="bottom" title="Watch video in lightbox" class="btn btn-warning btn-icon hover-translate-y-n10 mt-4">
                                        <span class="btn-inner--icon">
                                            <?php the_sub_field('icon')?>
                                        </span>
                                        <span class="btn-inner--text"><?php the_sub_field('text')?></span>
                                    </a>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
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
    <?php if (get_sub_field('display')) : ?>     
        <section class="slice pt-0">
            <div class="container position-relative zindex-100">
                <div class="row">
                    <!-- Blocks loop -->
                    <?php for($i = 1; $i<4 ; $i++) : ?>
                        <?php if(have_rows('block_'.$i)) : 
                            while (have_rows('block_'.$i)) : the_row();    
                        ?>
                        <?php if (get_sub_field('display')) : ?> 
                            <div class="col-xl-4 col-sm-6 mt-n7">
                                <div class="card bg-soft-warning border-0 mb-5 hover-translate-y-n10">
                                    <div class="d-flex p-5">
                                        <div>
                                            <span class="badge badge-warning badge-pill">
                                                <?php the_sub_field('tag')?>
                                            </span>
                                        </div>
                                        <div class="pl-4">
                                            <h5 class="lh-130 text-dark">
                                                <?php the_sub_field('title')?>
                                            </h5>
                                            <p class="text-dark opacity-6">
                                                <?php the_sub_field('subtitle')?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pb-5">
                                        <img src="<?php the_sub_field('image')?>" class="img-fluid img-center" style="height: 200px;" alt="Illustration" />
                                    </div>
                                </div>
                            </div>
                        <?php endif;?>
                        <?php
                            endwhile;
                        else: 
                        ?>
                            <div> Please check your ACF config. Something went wrong!</div>
                        <?php endif;?>
                    <?php endfor; ?>
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

    <!-- Slice 5 -->

    <?php if(have_rows('slice_5')) : 
        while (have_rows('slice_5')) : the_row();    
    ?>
    <?php if (get_sub_field('display')) : ?> 
        <section class="slice slice-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="badge badge-primary badge-pill">
                            <?php the_sub_field('tag')?>
                        </span>
                        <h5 class="lh-180 mt-4 mb-6">
                            <?php the_sub_field('title')?>
                        </h5>
                    </div>
                </div>
                <!-- Features -->
                <?php if(have_rows('items_list')) : 
                    while (have_rows('items_list')) : the_row();    
                ?>
                <?php if (get_sub_field('display')) : ?> 
                    <div class="row mx-lg-n4">
                        <!-- Features - Col 1 -->
                        <?php for($i = 1; $i < 10; $i++): ?>
                            <?php if(have_rows('item_'.$i)) : 
                                while (have_rows('item_'.$i)) : the_row();    
                            ?>
                                <?php if (get_sub_field('display')) : ?>
                                    <div class="col-lg-4 col-md-6 px-lg-4">
                                        <div class="card shadow-none">
                                            <div class="p-3 d-flex">
                                                <div>
                                                    <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                                        <?php the_sub_field('icon')?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="h6"><?php the_sub_field('title')?></span>
                                                    <p class="text-sm text-muted mb-0">
                                                        <?php the_sub_field('description')?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif;?>
                            <?php
                                endwhile;
                            else: 
                            ?>
                                <div> Please check your ACF config. Something went wrong!</div>
                            <?php endif;?>
                        <?php endfor;?>
                    </div>
                <?php endif;?>
                <?php
                    endwhile;
                else: 
                ?>
                    <div> Please check your ACF config. Something went wrong!</div>
                <?php endif;?>
            </div>
        </section>
    <?php endif;?>
    <?php
        endwhile;
    else: 
    ?>
        <div> Please check your ACF config. Something went wrong!</div>
    <?php endif;?>
    <!-- Slice 6 -->
    <?php if(have_rows('slice_6')) : 
        while (have_rows('slice_6')) : the_row();    
    ?>
    <?php if (get_sub_field('display')) : ?> 
        <section class="slice slice-lg bg-section-secondary">
            <div class="container">
                <!-- Section title -->
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class=" mt-4"><?php the_sub_field('title') ?></h2>
                        <div class="mt-2">
                            <p class="lead lh-180"><?php the_sub_field('description') ?></p>
                        </div>
                    </div>
                </div>
                <!-- Price cards -->
                <?php if(have_rows('price_cards')) : 
                    while (have_rows('price_cards')) : the_row();    
                ?>
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <?php if(have_rows('card_1')) : 
                        while (have_rows('card_1')) : the_row();    
                    ?>
                        <div class="col-lg-4 col-md">
                            <div class="card card-pricing text-center px-3 shadow hover-scale-110">
                                <div class="card-header py-5 border-0 delimiter-bottom">
                                    <div class="h1 text-center mb-0"><?php the_sub_field('title') ?></div>
                                    <span class="h6 text-muted"><?php the_sub_field('subtitle') ?></span>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled text-sm mb-4">
                                        <!-- Stripping <ul> tags from list to keep theme styling -->
                                        <?php echo(strip_tags(get_sub_field('features_list'),'<li>')) ?>
                                    </ul>
                                    <?php if(have_rows('button')) : 
                                        while (have_rows('button')) : the_row();    
                                    ?>
                                        <a href="<?php the_sub_field('url') ?>" class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3" target="_blank"><?php the_sub_field('text') ?></a>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    
                    <!-- Card 2 -->
                    <?php if(have_rows('card_2')) : 
                        while (have_rows('card_2')) : the_row();    
                    ?>
                        <div class="col-lg-4 col-md">
                            <div class="card card-pricing bg-primary text-center px-3 shadow hover-scale-110">
                                <div class="card-header py-5 border-0 delimiter-bottom">
                                    <div class="h1 text-white text-center mb-0"><?php the_sub_field('title') ?></span>
                                    </div>
                                    <span class="h6 text-white"><?php the_sub_field('subtitle') ?></span>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                                        <!-- Stripping <ul> tags from list to keep theme styling -->
                                        <?php echo(strip_tags(get_sub_field('features_list'),'<li>')) ?>
                                    </ul>
                                    <?php if(have_rows('button')) : 
                                        while (have_rows('button')) : the_row();    
                                    ?>
                                        <a href="<?php the_sub_field('url') ?>" class="btn btn-sm btn-white hover-translate-y-n3 hover-shadow-lg mb-3" target="_blank"><?php the_sub_field('text') ?></a>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>                                
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                <?php
                    endwhile;
                endif;
                ?>
                </div>
                <?php if(have_rows('call_to_action')) : 
                    while (have_rows('call_to_action')) : the_row();    
                ?>
                    <div class="mt-5 text-center">
                        <p class="mb-2">
                            <?php the_sub_field('text'); ?>
                        </p>
                        <?php if(have_rows('link')) : 
                            while (have_rows('link')) : the_row();    
                        ?>
                            <a href="<?php the_sub_field('url')?>" class="text-warning text-underline--dashed">
                                <?php the_sub_field('text')?>
                                <?php the_sub_field('icon')?>
                            </a>
                        <?php
                            endwhile;
                        endif; ?>
                    </div>
                <?php
                    endwhile;
                endif; ?>
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