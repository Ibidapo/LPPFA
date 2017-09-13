<?php /* Template Name: Login */ ?>

<?php
$options = get_option('theme_options');
$slider_images = get_field("slider_images");
?>

<?php get_header(); ?>
<!-- Mobile navigation -->
<nav class="m-style navbar fixed-top hidden-lg-up">
    <div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>
    <a href="/" class="m-logo navbar-brand">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" class="img-responsive"  width="85" alt="Leadway Alternate Logo">
    </a>
    <form class="form-inline mob-search">
        <input class="form-control" type="text" placeholder="Search">
    </form>
    <div class="overlay text-center" id="overlay">
        <ul class="menu">
            <li><a data-toggle="collapse" href="#log" aria-expanded="false" aria-controls="log">Login / Register <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                <ul class="sub-menu collapse" id="log">
                    <li><a href="login.html">Client login</a></li>
                    <li><a href="#">Employer login</a></li>
                    <li><a href="enroll.html">Register</a></li>
                </ul>
            </li>
            <li><a href="company.html">Our Company</a></li>
            <li><a href="services.html">Products & Services</a></li>
            <li><a href="benefits.html">Benefits</a></li>
            <li><a href="investment.html">Investments</a></li>
            <li><a href="career.html">Careers</a></li>
            <li><a data-toggle="collapse" href="#med" aria-expanded="false" aria-controls="med">Media <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu collapse" id="med">
                    <li><a href="news.html">News & Events</a></li>
                    <li><a href="social.html">Social</a></li>
                    <li><a href="downloads.html">Downloads</a></li>
                </ul>
            </li>
            <li><a data-toggle="collapse" href="#cont" aria-expanded="false" aria-controls="cont">Contact Us <i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu collapse" id="cont">
                    <li><a href="contact.html">Branch Network</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- Desktop navigation -->
<nav class="navbar fixed-top hidden-md-down pOff">
    <!-- desktop price charts start -->
    <table class="table table-responsive mOff">
        <tbody>
        <tr>
            <td>
                <div id="google_translate_element"></div>
            </td>
            <td>
                <span><i class="fa fa-phone" aria-hidden="true" style="color: #2068a4"></i>
                    <?= $options['phone_number'] ?>
                </span>
            </td>
            <td>
                <span class="head-td"> RSA FUNDS</span><br>
                <span>&#8358;2.3433 <img src="<?php echo get_bloginfo('template_directory'); ?>/images/pos.png" alt=""></span>
            </td>
            <td>
                <span class="head-td">RETIREE FUNDS</span><br>
                <span> &#8358;2.3433 <img src="<?php echo get_bloginfo('template_directory'); ?>/images/neg.png" alt=""></span>
            </td>
            <td>
                <span class="head-td">RSA ACCOUNTS </span><br>
                <span> 500,000 </span>
            </td>
            <td>
                <a href="/calculator" class="nav-calc"> <img src="<?php echo get_bloginfo('template_directory'); ?>/images/calc.png"> <span>Calculator</span></a>
            </td>
            <td>
                <button type="button" class="btn btn-outline-secondary v-trends"><span>&#8594;</span> VIEW TRENDS </button>
            </td>
            <td>
                <span id="date"></span>
            </td>
        </tr>
        </tbody>
    </table>
</nav>
<!-- Body and Main Content of page -->
<div class="container" id="login-page">
    <div class="row">
        <div class="col-xs-10 offset-xs-1 col-md-5 text-center">
            <div class="login-logo">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/p-online_Logo.png" width="230"/>
            </div>
            <form>
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" class="form-control" id="user">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="text" class="form-control" id="pass">
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
            <div class="login-links">
                <a href="#">Forgot Username or Password?</a><br/><a href="#">Not registered with Leadway Pensure? Enroll now</a>
            </div>
        </div>
        <div class="hidden-sm-down col-md-7">
            <div class="hanger"></div>
            <div class="hanged">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach($slider_images as $key => $image): ?>
                        <div class="carousel-item <?= $key == 0 ? "active" : "" ?>">
                            <img class="d-block img-fluid" src="<?= $image['url'] ?>"  alt="<?= $image['alt'] ?>"/>
                        </div>
                        <? endforeach ?>
                    </div>
                </div>
                <div class="text-center" id="adButton">
                    <?= get_field("learn_more_button") ?>
                </div>
            </div>
            <div class="login-ad">
                <?= get_field("slider_bottom_text") ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script>
    $('#login-page').mouseenter(function(){
        $('#adButton').fadeIn('slow');
    }).mouseleave(function(){
        $('#adButton').fadeOut('slow');
    });
</script>

</body>
</html>