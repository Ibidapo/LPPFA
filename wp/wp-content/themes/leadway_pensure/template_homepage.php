<?php /* Template Name: Homepage */ ?>

<?php
$slider_images = get_field('homepage_slider_images');
$hero_nav_items = get_field("homepage_hero_nav");
$hero_nav_items = [array_splice($hero_nav_items, 0, 2), array_splice($hero_nav_items, 0, 2)];
$faq_items = get_field("faq_items");
$customer_testimonials = get_field("customer_testimonials");

$social_options = get_option('theme_social_options');

?>
<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container-fluid">
    <div class="row landing">
        <!-- Main Homepage Slider -->
        <div class="col-12" id="slider">
            <!-- carousel start -->
            <div id="top-slide" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php foreach ($slider_images as $key => $image) { ?>
                        <div class="carousel-item <?php if ($key === 0) echo 'active' ?>">
                            <img src="<?php echo $image['url']; ?>" alt="Third slide">

                            <div class="carousel-caption d-none d-md-block">
                                <h1><?= $image['title'] ?></h1>

                                <p><?= $image['caption'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- /slider -->

        <div class="col-12 hidden-md-down" id="slider-icon">
            <ul class="style4 pOff ">
                <?php foreach ($hero_nav_items[0] as $key => $item) { ?>
                    <li class="nav-item m-nav style4">
                        <a class="nav-link style3" href="<?= $item['nav_link'] ?>">
                            <figure>
                                <img src="<?= $item['nav_image']['url'] ?>" height="60"
                                     width="45" alt="">
                                <figcaption> <?= $item['nav_title'] ?></figcaption>
                            </figure>
                        </a>
                    </li>
                <?php } ?>
                <li class="nav-item m-nav style4">
                    <a id="scroll-btn" href="javascript:">
                        <div><span></span></div>
                    </a>
                </li>
                <?php foreach ($hero_nav_items[1] as $key => $item) { ?>
                    <li class="nav-item m-nav style4">
                        <a class="nav-link style3" href="<?= $item['nav_link'] ?>">
                            <figure>
                                <img src="<?= $item['nav_image']['url'] ?>" height="60"
                                     width="45" alt="">
                                <figcaption> <?= $item['nav_title'] ?></figcaption>
                            </figure>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- main navigation start -->
        <nav class="navbar hidden-md-down pOff style3">
            <div class="navStyle3 mx-auto">
                <ul class="nav nav-fill mOff">
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Products & Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Benefits </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Investments </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand mOff pOf logo" href="<?php echo get_bloginfo('wpurl'); ?>"><img
                                src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" width="85"
                                alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Our Company </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="career.html"> Careers </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> News | Events </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"> Contact </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row row-margin">
        <div class="col-12 col-lg-5 offset-lg-1 intro-box text-center" id="about">
            <h5 class="hidden-lg-up"><?= get_field("about_us_image")['caption'] ?></h5>
            <img class="connect" src="<?= get_field("about_us_image")['url'] ?>" alt="">
        </div>
        <!-- intro-box start -->
        <div class="col-12 col-lg-5 intro-box text-center">
            <?= get_field("about_us_content") ?>
        </div>
    </div>

    <?php if ($faq_items): ?>

        <div class="row message-box-container">
            <div class="col-12 col-md-5 col-lg-4 offset-lg-1 message-box text-center">
                <p class="message-box" data-aos="fade-right">
                    <?= get_field("faq_text") ?>
                </p>
            </div>
            <div class="col-12 col-md-7 col-lg-6 solutions hidden-sm-down text-center">
                <h5> Some frequently asked questions </h5>

                <div class="row">
                    <?php foreach ($faq_items as $key => $item) { ?>
                        <div class="col-12 col-sm-4">
                            <p>
                                <a href="<?= $item['link'] ?>"><i class="fa fa-chevron-right"
                                                                  aria-hidden="true"></i> <?= $item['title'] ?></a>
                            </p>
                        </div>
                    <?php } ?>
                    <!--<div class="col-12 col-sm-4">
                        <p><i class="fa fa-chevron-right" aria-hidden="true"></i> When to claim benefits?</p>
                    </div>
                    <div class="col-12 col-sm-4">
                        <p><i class="fa fa-chevron-right " aria-hidden="true"></i> How to retrieve lost pin?</p>
                    </div>-->
                </div>
            </div>
            <div class="col-12 solutions1 hidden-md-up text-center">
                <h5> Some frequently asked questions </h5>

                <div class="row">
                    <?php foreach ($faq_items as $key => $item) { ?>
                        <div class="col-12 col-sm-4">
                            <figure>
                                <img src="<?= $item['image']['url'] ?>" class="" alt="<?= $item['image']['alt'] ?>">
                                <figcaption class="FAQ"> <?= $item['title'] ?></figcaption>
                            </figure>
                            <a href="<?= $item['link'] ?>" type="button" class="btn btn-outline-white space"> Read
                                more</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    <?php endif; ?>


    <!-- Customer Testimonials? -->
    <?php if ($customer_testimonials): ?>
        <div class="row" style="position: relative">
            <div class="customer-intro">We celebrate every customer !</div>
            <div class="hidden-sm-down col-md-8 col-lg-7 offset-lg-1 customer-txt">
                <?php foreach ($customer_testimonials as $key => $item) { ?>
                    <div id="<?= $key == 0 ? "grad-txt" : ($key == 1 ? "emp-txt" : "retr-txt") ?>">
                        <?= $item['content'] ?>
                    </div>
                <?php } ?>
            </div>
            <div class="hidden-sm-down col-md-4 col-lg-3 customer-pic">
                <div id="customer-slide" class="carousel slide" data-ride="carousel" data-aos="fade-left">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($customer_testimonials as $key => $item) { ?>
                            <div class="carousel-item <?= $key == 0 ? "active" : "" ?>" id="<?= ++$key ?>">
                                <img class="d-block mx-auto"
                                     src="<?= $item['image']['url'] ?>"
                                     alt="<?= $item['image']['alt'] ?>">
                            </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#customer-slide" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customer-slide" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="hidden-md-up col-12 customer-txt">
                <div id="mob-customer-slide" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($customer_testimonials as $key => $item) { ?>
                            <div class="carousel-item <?= $key == 0 ? "active" : "" ?>">
                                <div class="card">
                                    <img class="card-img-top" src="<?= $item['image']['url'] ?>"
                                         alt="<?= $item['image']['alt'] ?>"/>

                                    <div class="card-block">
                                        <?= $item['content'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#mob-customer-slide" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mob-customer-slide" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!-- /testimonials   -->


    <!-- Digital Section -->
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1 vids-bg">
            <div class="row" style="padding-top: 3%;padding-bottom: 3%">
                <div class="col-12 col-md-5 ">
                    <div class="vids-txt">
                        <?= get_field("digital_section_content") ?>
                        <ul class="nav nav-justified hidden-sm-down">
                            <?php if (isset($social_options['facebook'])): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $social_options['facebook'] ?>"><i
                                            class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
                                </li>
                            <?php endif ?>
                            <?php if (isset($social_options['twitter'])): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $social_options['twitter'] ?>">
                                        <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                            <?php if (isset($social_options['instagram'])): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $social_options['instagram'] ?>">
                                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="owl-carousel owl-theme">
                        <?php foreach (get_field('digital_section_videos') as $key => $item) { ?>
                            <div class="item-video" data-merge="<?= ++$key ?>">
                                <a class="owl-video" href="<?= $item['youtube_link'] ?>"></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  /digital  -->
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1 invest-bg">
            <div class="invest-txt" data-aos="fade-right">
                <?= get_field("info_section_1") ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-5 col-lg-4 offset-lg-1 benefit-txt text-center">
            <div data-aos="fade-up">
                <?= get_field("info_section_2") ?>
            </div>
        </div>
        <div class="hidden-sm-down col-md-7 col-lg-6 benefit-bg">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/Benefits.png" alt=""/>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-10 offset-lg-1 culture">
            <div class="hidden-sm-down culture-pic"><img
                    src="<?php echo get_bloginfo('template_directory'); ?>/images/bulb.jpg" alt=""></div>
            <div class="culture-txt float-right">
                <?= get_field("info_section_3") ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="hidden-sm-down col-lg-11 call-s8 mx-auto">
            <div class="s8-txt">
                <?= get_field("info_section_4") ?>
            </div>
            <div class="hidden-sm-down" id="s8-pic" data-aos="fade-left"><img
                    src="<?php echo get_bloginfo('template_directory'); ?>/images/mobile.png" alt=""></div>
        </div>
        <div class="hidden-md-up col-12 call-s8">
            <div class="s8-txt">
                <?= get_field("info_section_4") ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-11 reg mx-auto">
            <div class="hidden-sm-down reg-pic float-left" data-aos="fade"><img
                    src="<?php echo get_bloginfo('template_directory'); ?>/images/jar.png" alt=""></div>
            <div class="reg-txt float-right">
                <?= get_field("info_section_5") ?>
                <div class="hidden-md-up text-center"><a class="btn btn-outline-blue" href="#">Get Started</a></div>
                <span class="hidden-sm-down reg-btn"><a class="btn btn-outline-blue" href="#">Get Started</a></span>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>


