<?php
/**
 * Template Name: Contact Page
 *
 * @package HammerSport
 * @subpackage Quick Ui Kit
 * @since Quick Ui Kit
 */

//user posted variables
if( isset($_POST['message_name']) &&
    isset($_POST['message_email']) &&
    isset($_POST['message_text']) &&
    isset($_POST['message_phone'])
  ) {
    $name = $_POST['message_name'];
    $message = $_POST['message_text'];
    $phone = $_POST['message_phone'];
    $email = $_POST['message_email'];
    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Someone sent a message from ".get_bloginfo('name')."And his number is: ".$phone;
    $headers = 'From: '. $email . "\r\n" .
      'Reply-To: ' . $email . "\r\n";
    if (!( empty($name) || empty($message) || empty($email) || empty($phone))){
        $sent = wp_mail($to, $subject, strip_tags($message), $headers);
    }
}



get_header();?>
<main>
    <!-- Main content -->
    
    <?php if(have_rows('hero_slice')) : 
        while (have_rows('hero_slice')) : the_row();    
    if (get_sub_field('display')) : ?>
        <section class="slice py-6 pt-lg-7 pb-lg-8 bg-gradient-primary">
            <!-- Container -->
            <div class="container d-flex align-items-center text-center text-lg-left">
                <div class="col px-0">
                    <div class="row row-grid align-items-center">
                        <div class="col-lg-6">
                            <!-- Heading -->
                            <?php if(have_rows('title')) : 
                                while (have_rows('title')) : the_row();   ?>
                                <h1 class="h1 text-white text-center text-lg-left my-4">
                                    <?php the_sub_field('regular_text') ?> <strong><?php the_sub_field('focused_text') ?></strong>
                                </h1>
                            <?php endwhile;
                                endif; ?>
                            <!-- Text -->
                            <p class="lead text-white text-center text-lg-left opacity-8">
                                <?php the_sub_field('subtitle') ?>.
                            </p>
                            <!-- Buttons -->
                            <?php if(have_rows('button')) : 
                                while (have_rows('button')) : the_row();   ?>
                                <div class="mt-5 text-center text-lg-left">
                                    <a href="#sct-form-contact" data-scroll-to class="btn btn-white btn-lg btn-icon">
                                        <span class="btn-inner--icon">
                                            <?php the_sub_field('icon') ?>
                                        </span>
                                        <span class="btn-inner--text">
                                            <?php the_sub_field('text') ?>
                                        </span>
                                    </a>
                                </div>
                            <?php endwhile;
                                endif; ?>

                            <!-- Clients -->
                            <?php if(have_rows('brands_list')) : 
                                while (have_rows('brands_list')) : the_row();   ?>
                                <div class="d-flex align-items-center justify-content-center justify-content-lg-left mt-5">
                                    <div class="col-auto text-sm text-white pl-0 pr-4">
                                        <?php the_sub_field('headline') ?>
                                    </div>
                                    <!-- Brand -->
                                    <?php if(have_rows('brands')) : 
                                            while (have_rows('brands')) : the_row();   
                                        for($i = 1; $i < 5 ; $i++) :
                                    ?>
                                        <?php if(have_rows('brand_'.$i)) : 
                                            while (have_rows('brand_'.$i)) : the_row();  
                                                if (get_sub_field('display')) : ?>
                                                    <div class="client-group col">
                                                        <div class="row">
                                                            <div class="client col-3 py-3">
                                                                <img alt="Image placeholder" src="<?php the_sub_field('image')?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                        <?php 
                                                endif;
                                            endwhile;
                                        endif; ?>        
                                    <?php 
                                        endfor; 
                                            endwhile;
                                         endif; ?>  
                                </div>
                            <?php endwhile;
                                endif; ?>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="shape-container shape-line shape-position-bottom">
                <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
    <?php 
    endif;
        endwhile;
    else: 
    ?>
        <div> Please check your ACF config. Something went wrong!</div>
    <?php endif;?>

    <!-- Slice 1 -->

    <?php if(have_rows('slice_1')) : 
        while (have_rows('slice_1')) : the_row();    
    if (get_sub_field('display')) : ?>
        <section class="slice slice-lg">
            <div class="container">
                <div class="row">
                    <!-- Cards -->
                    <?php if(have_rows('cards')) : 
                        while (have_rows('cards')) : the_row();   
                            for ($i = 1; $i < 4; $i++) :
                                if(have_rows('card_'.$i)) : 
                                    while (have_rows('card_'.$i)) : the_row() ?>
                                        <div class="col-lg-4">
                                            <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                                                <div class="px-5 pb-5 pt-5">
                                                    <div class="py-4">
                                                        <div class="icon text-warning icon-sm mx-auto">
                                                            <?php the_sub_field('icon') ?>
                                                        </div>
                                                    </div>
                                                    <h5 class="">
                                                        <?php the_sub_field('title') ?>
                                                    </h5>
                                                    <p class=" mt-2 mb-0">
                                                        <?php the_sub_field('description') ?>
                                                    </p>
                                                    <!-- Call to action -->
                                                    <?php if(have_rows('call_to_action')) : 
                                                        while (have_rows('call_to_action')) : the_row(); ?>
                                                    <div class="mt-4">
                                                        <a href="<?php the_sub_field('action') ?>" class="link-underline-warning">
                                                            <?php the_sub_field('text') ?>
                                                        </a>
                                                    </div>
                                                    <?php endwhile;
                                                    endif ?>
                                                </div>
                                            </div>
                                        </div>
                    <?php 
                                    endwhile;
                                endif;
                            endfor;
                        endwhile;
                    endif;?>
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

    <!-- Slice 2 -->

    <?php if(have_rows('slice_2')) : 
        while (have_rows('slice_2')) : the_row();    
    if (get_sub_field('display')) : ?>
        <section class="slice slice-lg">
            <div class="container">
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <h3>
                            <?php the_sub_field('strong_text') ?>
                        </h3>
                        <p class="lead my-4">
                            <?php the_sub_field('regular_paragraph_1') ?>
                        <p>
                            <?php the_sub_field('regular_paragraph_2') ?>
                        </p>
                    </div>
                    <!-- Google map -->
                    <div class="col-lg-6">
                        <div id="map-custom" class="map-canvas rounded-left" data-lat="25.7617" data-lng="-80.1918" data-color="#0c66ff" style="height: 600px;"></div>
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
    <!-- Slice 3 -->

    <?php if(have_rows('slice_3')) : 
        while (have_rows('slice_3')) : the_row();    
    if (get_sub_field('display')) : ?>
        <section class="section-half-rounded">
            <div class="jumbotron section-inner left-0 rounded-bottom-right bg-section-secondary overflow-hidden col-lg-11"></div>
            <div class="container text-center text-lg-left">
                <!-- Title -->
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <span class="badge badge-primary badge-pill">
                            <?php the_sub_field('tag') ?>
                        </span>
                        <h5 class="h5 lh-180 mt-4 mb-6">
                            <?php the_sub_field('title') ?>
                        </h5>
                    </div>
                </div>
                <!-- Team -->
                <div class="row">
                    <?php if(have_rows('team_cards')) : 
                        while (have_rows('team_cards')) : the_row();   
                            for ($i = 1; $i < 5 ; $i++) :
                                if(have_rows('member_'.$i)) : 
                                    while (have_rows('member_'.$i)) : the_row(); 
                        ?>
                        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                            <div data-animate-hover="2">
                                <div class="animate-this">
                                    <a href="<?php the_sub_field('action')?>">
                                        <img 
                                            alt="Image placeholder"
                                            class="img-fluid rounded shadow"
                                            src="<?php the_sub_field('image')?>">
                                    </a>
                                </div>
                                <div class="mt-3">
                                    <h5 class="h6 mb-0"><?php the_sub_field('full_name')?></h5>
                                    <p class="text-muted text-sm mb-0"><?php the_sub_field('company_role')?></p>
                                </div>
                            </div>
                        </div>
                    <?php           endwhile;
                                endif;
                            endfor;
                        endwhile;
                    endif; ?>
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

    <!-- Slice 4 -->
    <?php if(have_rows('slice_4')) : 
        while (have_rows('slice_4')) : the_row();    
    if (get_sub_field('display')) : ?>
        <section class="slice slice-lg" id="sct-form-contact">
            <div class="container position-relative zindex-100">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h3>
                            <?php the_sub_field('title') ?>
                        </h3>
                        <p class="lh-190">
                            <?php the_sub_field('description') ?>
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <!-- Form -->
                        <form id="form-contact" action="<?php the_permalink(); ?>" method="post">
                            <div class="form-group">
                                <input 
                                    class="form-control form-control-lg" 
                                    type="text" 
                                    placeholder="Your name"
                                    required
                                    name="message_name"
                                >
                            </div>
                            <div class="form-group">
                                <input 
                                    class="form-control form-control-lg" 
                                    type="email" 
                                    placeholder="email@example.com" 
                                    required
                                    name="message_email"
                                >
                            </div>
                            <div class="form-group">
                                <input 
                                    class="form-control form-control-lg" 
                                    type="text" 
                                    placeholder="+40-745-234-567" 
                                    required
                                    name="message_phone"
                                >
                            </div>
                            <div class="form-group">
                                <textarea 
                                    class="form-control form-control-lg" 
                                    data-toggle="autosize" 
                                    placeholder="Tell us a few words ..." 
                                    rows="3" 
                                    required
                                    name="message_text"
                                ></textarea>
                            </div>
                            <input type="hidden" name="submitted" value="1">
                            <div class="text-center">
                                <!-- <div class="g-recaptcha" data-sitekey="6Lfs5ScUAAAAANAJwGrdfvWLFRRiVbKRE2vfoaFj"></div> -->
                                <button type="reset" class="btn-reset d-none"></button>
                                <button type="submit" class="btn btn-block btn-lg btn-primary mt-4"><?php the_sub_field('button') ?></button>
                            </div>
                        </form>
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
<?php get_footer();?>