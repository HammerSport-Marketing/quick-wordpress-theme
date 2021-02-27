<?php

/**
 * Template Name: Services Page
 *
 * @package HammerSport
 * @subpackage Quick Ui Kit
 * @since Quick Ui Kit
 */
get_header();?>

<!-- Main content -->
<main>
    <!-- Hero slice  -->

    <?php if(have_rows('hero_slice')) : 
        while (have_rows('hero_slice')) : the_row();    
    if (get_sub_field('display')) : ?>
        <section class="section-half-rounded pt-5 pt-lg-8 pb-7 pb-lg-10">
            <div class="jumbotron section-inner left-0 rounded-right bg-primary overflow-hidden col-lg-11">
                <img 
                    src="<?php the_sub_field('bg_image') ?>" 
                    alt="Image" 
                    class="img-as-bg blend-mode--multiply"
                >
            </div>
            <div class="container pt-5 pb-7">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1 class="display-4 text-white lh-110">
                            <?php the_sub_field('headline') ?>
                        </h1>
                        <p class="lead mb-4 text-white mt-4">
                            <?php the_sub_field('subheadline') ?>
                        </p>
                        <div class="mt-5">
                            <!-- Focused Button -->
                            <?php if(have_rows('focused_button')) : 
                                while (have_rows('focused_button')) : the_row();    
                            if (get_sub_field('display')) : ?>
                                <a href="<?php the_sub_field('link') ?>" class="btn btn-lg btn-warning hover-translate-y-n3"><?php the_sub_field('text') ?></a>
                            <?php 
                            endif;
                                endwhile;
                            else: 
                            ?>
                                <div> Please check your ACF config. Something went wrong!</div>
                            <?php endif;?>
                            <!-- Button -->
                            <?php if(have_rows('button')) : 
                                while (have_rows('button')) : the_row();    
                            if (get_sub_field('display')) : ?>
                                <a href="<?php the_sub_field('link') ?>" class="btn btn-lg btn-white btn-icon hover-translate-y-n3">
                                    <span class="btn-inner--text"><?php the_sub_field('text') ?></span>
                                    <span class="btn-inner--icon"><?php the_sub_field('icon') ?></i></span>
                                </a>
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
            </div>
        </section>
    <?php 
    endif;
        endwhile;
    else: 
    ?>
        <div> Please check your ACF config. Something went wrong!</div>
    <?php endif;?>

    <!-- Slice 1 - Services Cards -->

    <?php if(have_rows('slice_1')) : 
        while (have_rows('slice_1')) : the_row();    
    if (get_sub_field('display')) : ?>    
        <section class="slice pt-0">
            <div class="container position-relative zindex-100">
                <div class="row">
                    <?php   for($i = 1; $i < 5 ; $i++) :
                                if(have_rows('card_'.$i)) : 
                                    while (have_rows('card_'.$i)) : the_row(); 
                    ?>  
                        <div class="col-lg-3 col-sm-6 mt-n7">
                            <div class="card hover-translate-y-n10 hover-shadow-lg">
                                <div class="card-body p-5 text-center">
                                    <div class="pb-4">
                                        <img alt="Image placeholder" src="<?php the_sub_field('image')?>" class="svg-inject img-fluid" style="height: 50px">
                                    </div>
                                    <div class="pt-2">
                                        <h5 class="mb-0">
                                            <?php the_sub_field('title')?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                                    endwhile;
                                endif;
                            endfor;
                    ?>                  
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

    <!-- Slice 2  -->

    <?php if(have_rows('slice_2')) : 
        while (have_rows('slice_2')) : the_row();    
    if (get_sub_field('display')) : ?>       
        <section class="slice py-5 pb-lg-7">
            <div class="container">
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-12 col-md-5 col-lg-6">
                        <!-- Image -->
                        <figure>
                            <img alt="Image placeholder" src="<?php the_sub_field('image')?>" class="card-img shadow-lg position-relative zindex-100">
                        </figure>
                        <!-- Decoration -->
                        <div class="w-75 position-absolute bottom-n5 left-n5 rotate-180">
                            <img src="<?php echo get_theme_file_uri('/src/assets/img/svg/shapes/bubble-1.svg');?>" class="svg-inject fill-section-secondary" alt="Image placeholder" />
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-5">
                        <!-- Heading -->
                        <h1 class="h2 text-center text-md-left mb-4">
                            <?php the_sub_field('title') ?>
                        </h1>
                        <!-- Text -->
                        <p class="lead text-center text-md-left text-muted">
                            <?php the_sub_field('description') ?>
                        </p>
                        <!-- Buttons -->
                        <?php if(have_rows('button')) : 
                            while (have_rows('button')) : the_row();   
                        ?>
                            <div class="text-center text-md-left mt-5">
                                <a href="<?php the_sub_field('link')?>" class="btn btn-primary btn-icon">
                                    <span class="btn-inner--text"><?php the_sub_field('text')?></span><span class="btn-inner--icon">
                                        <?php the_sub_field('icon')?>
                                    </span>
                                </a>
                            </div>
                            </div>
                        <?php 
                            endwhile;
                        else: 
                        ?>
                            <div> Please check your ACF config. Something went wrong!</div>
                        <?php endif;?>                        
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

    <!-- Slice 3 -->

    <?php if(have_rows('slice_3')) : 
        while (have_rows('slice_3')) : the_row();    
    if (get_sub_field('display')) : ?>       
        <section class="slice pt-10 bg-section-secondary">
            <!-- SVG separator -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="row">
                    <div class="col-md-6">
                        <span class="badge badge-primary badge-pill">
                            <?php the_sub_field('tag')?>
                        </span>
                        <h5 class="h5 lh-180 mt-4 mb-6">
                            <?php the_sub_field('focused_text')?>
                        </h5>
                    </div>
                </div>
                <div class="row mx-lg-n4">
                <?php for( $i = 1; $i < 3; $i++) : ?>
                    <div class="col-md-6 px-lg-4">
                        <?php for($j = 1; $j < 3; $j++) : 
                            if(have_rows('block_'.($j + ($i-1) * 2))) : 
                                while (have_rows('block_'.($j + ($i-1) * 2))) : the_row();
                        ?>
                                    <div class="card hover-shadow-lg hover-translate-y-n10 mb-5">
                                        <div class="d-flex p-5">
                                            <div>
                                                <span class="badge badge-danger badge-pill">
                                                    <?php the_sub_field('tag') ?>
                                                </span>
                                            </div>
                                            <div class="pl-4">
                                                <a href="<?php the_sub_field('link')?>" class="d-block h5 stretched-link">
                                                    <?php the_sub_field('title')?>
                                                </a>
                                                <p>
                                                    <?php the_sub_field('description')?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="px-5">
                                            <img src="<?php the_sub_field('image')?>" class="img-fluid" alt="Image placeholder" />
                                        </div>
                                    </div>
                        <?php   endwhile;
                            endif;
                        endfor; 
                        ?>
                    </div>
                <?php endfor ?>
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

    <!-- Slice 4 - Testimonials -->

    <?php if(have_rows('slice_4')) : 
        while (have_rows('slice_4')) : the_row();    
    if (get_sub_field('display')) : ?>   
        <section class="slice slice-lg delimiter-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-center mb-5">
                            <span class="badge badge-lg badge-warning badge-pill">
                                <?php the_sub_field('title') ?>
                            </span>
                        </div>
                        <div class="swiper-js-container">
                            <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0">
                                <div class="swiper-wrapper">
                                <?php for($i = 1; $i < 4 ; $i++) :
                                    if(have_rows('testimonial_'.$i)) : 
                                        while (have_rows('testimonial_'.$i)) : the_row();    
                                ?> 
                                    <div class="swiper-slide">
                                        <div class="text-center">
                                            <p class="h4 lh-180 px-4 font-weight-300">
                                                "<?php the_sub_field('text')?>"
                                            </p>
                                            <div class="text-center mt-4">
                                                <span class="h6 font-weight-light">
                                                    <?php the_sub_field('name')?>
                                                </span>
                                                <span class="h6 text-muted">
                                                    <?php the_sub_field('role')?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php       endwhile;
                                        endif;
                                    endfor;
                                ?>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button swiper-button-next btn-dark zindex-101"></div>
                            <div class="swiper-button swiper-button-prev btn-dark zindex-101"></div>
                        </div>
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

    <!-- Slice 5 - Blog posts -->
    <?php if(have_rows('slice_5')) : 
        while (have_rows('slice_5')) : the_row();    
    if (get_sub_field('display')) : ?>      
        <section class="slice slice-lg">
            <div class="container">
                <!-- Title -->
                <div class="row mb-6 justify-content-center text-center">
                    <div class="col-lg-8 col-md-10">
                        <h3 class=" mt-4">
                            <?php the_sub_field('title') ?>
                        </h3>
                        <div class="mt-3">
                            <p class="lead lh-180">
                                <?php the_sub_field('description') ?>                        
                            </p>
                        </div>
                    </div>
                </div>
                <!-- News -->
                <div class="row">
                <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 3, // Number of recent posts thumbnails to display
                        'post_status' => 'publish' // Show only the published posts
                    ));
                    foreach( $recent_posts as $post_item ) : 
                ?>
                    <div class="col-lg-4">
                        <div class="card bg-cover bg-size--cover" style="background-image: url(<?php echo get_the_post_thumbnail_url($post_item['ID']);?>);" >
                            <!-- Mask -->
                            <span class="mask bg-dark opacity-5"></span>
                            <!-- Card body -->
                            <div class="card-body pt-10 mt-auto position-relative">
                                <!-- Title -->
                                <a href="<?php echo get_permalink($post_item['ID']) ?>" class="d-block h5 mb-3 text-white stretched-link">
                                    <?php echo $post_item['post_title'] ?>
                                </a>
                                <!-- Text -->
                                <p class="mb-0 text-white">
                                    <?php echo get_the_excerpt($post_item['ID'] ) ?>
                                </p>
                            </div>
                            <!-- Meta -->
                            <div class="card-body position-relative delimiter-top">
                                <div class="d-flex align-items-center">
                                    <!-- Author's avatar -->
                                    <div>
                                        <a href="#" class="avatar avatar-sm rounded-circle d-inline-block">
                                            <img alt="Image placeholder" src="<?php echo get_avatar_url( $post_item['ID'], 32 )?>">
                                        </a>
                                    </div>
                                    <!-- Author's name -->
                                    <div class="pl-3">
                                        <a href="#" class="h6 stretched-link text-white text-sm">
                                            <?php echo get_the_author_meta('nicename',$post_item['ID'] ) ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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