<?php
/* Template Name: Homepage */

$social_options = get_option('theme_social_options');

$slider_images = get_field('homepage_slider_images');
$hero_nav_items = get_field("homepage_hero_nav");
$hero_nav_items = [array_splice($hero_nav_items, 0, 2), array_splice($hero_nav_items, 0, 2)];
$faq_items = get_field("faq_items");
$customer_testimonials = get_field("customer_testimonials");

$subMenuId = array_get(get_nav_menu_locations(), 'homepage-sub-menu', 11);
$subMenuItems = wp_get_nav_menu_items($subMenuId);
$subMenuItems = [array_splice($subMenuItems, 0,4), array_splice($subMenuItems, 0,4)];

get_header();

?>
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
            <ul class="nav nav-justified mr-auto">
                <?php foreach ($hero_nav_items[0] as $key => $item) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $item['nav_link'] ?>">
                            <figure>
                                <img src="<?= $item['nav_image']['url'] ?>" alt="<?= $item['nav_image']['alt'] ?>">
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $item['nav_link'] ?>">
                            <figure>
                                <img src="<?= $item['nav_image']['url'] ?>" alt="<?= $item['nav_image']['alt'] ?>">
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
                    <?php
                    foreach ($subMenuItems[0] as $item) {
                        $itemClasses = implode(" ", $item->classes);
                        echo "<li class='nav-item {$itemClasses}'><a class='nav-link' href='{$item->url}'>{$item->title}</a></li>";
                    }
                    ?>
                    <li class="nav-item">
                        <a class="navbar-brand mOff pOf logo" href="<?php echo get_bloginfo('wpurl'); ?>">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" width="85"
                                 alt="Leadway Logo">
                        </a>
                    </li>
                    <?php
                    foreach ($subMenuItems[1] as $item) {
                        $itemClasses = implode(" ", $item->classes);
                        echo "<li class='nav-item {$itemClasses}'><a class='nav-link' href='{$item->url}'>{$item->title}</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="container">
    <div class="row row-margin">
        <div class="col-12 col-lg-6 intro-box text-center" id="about">
            <h5 class="hidden-lg-up"><?= get_field("about_us_image")['caption'] ?></h5>
            <img class="connect" src="<?= get_field("about_us_image")['url'] ?>" alt="">
        </div>
        <!-- intro-box start -->
        <div class="col-12 col-lg-6 intro-box text-center">
            <?= get_field("about_us_content") ?>
        </div>
    </div>

    <?php if ($faq_items): ?>

        <div class="row message-box-container">
            <div class="col-12 col-md-5  message-box text-center">
                <p class="message-box" data-aos="fade-right">
                    <?= get_field("faq_text") ?>
                </p>
            </div>
            <div class="col-12 col-md-7 solutions hidden-sm-down text-center">
                <h5> Some frequently asked questions </h5>
                <ul class="nav nav-fill">
                    <?php foreach ($faq_items as $key => $item) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $item['link'] ?>"><i class="fa fa-chevron-right"
                                                                               aria-hidden="true"></i>
                                <?= $item['title'] ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
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
        <div class="row" id="client-area">
            <div class="client-intro">We celebrate every client!</div>
            <div class="hidden-sm-down col-md-8 client-txt">
                <?php foreach ($customer_testimonials as $key => $item) { ?>
                    <div id="<?= $key == 0 ? "grad-txt" : ($key == 1 ? "emp-txt" : "retr-txt") ?>">
                        <?= $item['content'] ?>
                    </div>
                <?php } ?>
            </div>
            <div class="hidden-sm-down col-md-4 client-pic">
                <div id="customer-slide" class="carousel slide" data-ride="carousel" data-interval="10000"
                     data-aos="fade-left">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($customer_testimonials as $key => $item) { ?>
                            <div class="carousel-item <?= $key == 0 ? "active" : "" ?>" id="<?= $key + 1 ?>">
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
            <div class="hidden-md-up col-12 client-txt">
                <div id="mob-customer-slide" class="carousel slide" data-ride="carousel" data-interval="10000">
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
        <div class="col-12 vids-bg">
            <div class="row">
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
        <div class="col-12 invest-bg"
             style="background: url(<?= array_get(get_field("info_section_1_image"), 'url') ?>) no-repeat center;">
            <div class="invest-txt" data-aos="fade-right">
                <?= get_field("info_section_1") ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-5 benefit-txt text-center">
            <div data-aos="fade-up">
                <?= get_field("info_section_2") ?>
            </div>
        </div>
        <div class="hidden-sm-down col-md-7 benefit-bg"
             style="background: url(<?= array_get(get_field("info_section_2_image"), 'url') ?>) no-repeat center;">
            <!--            <img src="-->
            <?php //echo get_bloginfo('template_directory'); ?><!--/images/Benefits.png" alt=""/>-->
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 culture">
            <div class="hidden-sm-down culture-pic"><img
                    src="<?= array_get(get_field("info_section_3_image"), 'url') ?>"
                    alt="<?= array_get(get_field("info_section_3_image"), 'url') ?>"></div>
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
                    src="<?php echo get_bloginfo('template_directory'); ?>/images/jar.png" alt="">
            </div>
            <div class="reg-txt float-right">
                <?= get_field("info_section_5") ?>
                <div class="hidden-md-up text-center"><a href="enroll.html" class="btn btn-outline-blue">Get Started</a>
                </div>
                <span class="hidden-sm-down reg-btn v-align"><a href="enroll.html" class="btn btn-outline-blue">Get
                        Started</a></span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup" class=mailbg>
                <form action="https://leadway-pensure.us10.list-manage.com/subscribe/post" method="POST">
                    <input type="hidden" name="u" value="a7d286c921166498a0b699255">
                    <input type="hidden" name="id" value="38e9091d3c">

                    <div id="mc_embed_signup_scroll" class=text-center>
                        <h2>Subscribe to our mailing list</h2>

                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                            </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-FNAME">First Name </label>
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-LNAME">Last Name </label>
                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                                  name="b_a7d286c921166498a0b699255_38e9091d3c"
                                                                                                  tabindex="-1"
                                                                                                  value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe"
                                                  id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>
            <!--End mc_embed_signup-->
        </div>
    </div>
</div>

<?php get_footer(); ?>
<!--<script src="--><?php //echo get_bloginfo('template_directory'); ?><!--/js/index.js"></script>-->
<script>
    $(window).scroll(function () {
        if ($(document).scrollTop() > 5) {
            $('.scroll-btn').hide();
        } else {
            $('.scroll-btn').show();
        }

        if ($(document).scrollTop() > 100) {
            $('#slider-icon, .style3').fadeOut(800);
            $('.navStyle2').fadeIn(1000);
        } else {
            $('.style3, #slider-icon').fadeIn(1000);
            $('.navStyle2').fadeOut(800);
        }
    });

    $('#customer-slide, #mob-customer-slide').carousel({
        interval: 15000
    });

    $('#client-area').mouseenter(function () {
        $('#customer-slide').carousel('pause');
        $('#customer-slide .carousel-control-next, #customer-slide .carousel-control-prev').css('display', 'flex');
    }).mouseleave(function () {
        $('#customer-slide').carousel('cycle');
        $('#customer-slide .carousel-control-next, #customer-slide .carousel-control-prev').css('display', 'none');
    });

    $('#customer-slide').on('slide.bs.carousel', function (ev) {
        var id = ev.relatedTarget.id;
        id = parseInt(id);
        switch (id) {
            case 1:
                $('#emp-txt, #retr-txt').hide();
                $('#grad-txt').show();
                break;
            case 2:
                $('#grad-txt, #retr-txt').hide();
                $('#emp-txt').show();
                break;
            case 3:
                $('#emp-txt, #grad-txt').hide();
                $('#retr-txt').show();
                break;
        }
    });


    $('.owl-carousel').owlCarousel({
        loop: true,
        merge: true,
        margin: 10,
        video: true,
        videoHeight: 360,
        videoWidth: 480,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
</script>

</body>
</html>

