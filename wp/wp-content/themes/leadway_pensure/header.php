<?php
$options = get_option('theme_options');

$results = [];
$cacheKey = "leadway_rsa_rf_info";
$rsa_rf = get_transient($cacheKey);

if (!$rsa_rf) {
    $rsa_rf['rsa'] = wp_remote_post("https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart", [
        'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
        'body' => json_encode([
            "RSAFund" => true,
            "duration" => 0
        ]),
        'method' => 'POST'
    ]);
    $rsa_rf['rf'] = wp_remote_post("https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart", [
        'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
        'body' => json_encode([
            "RetireeFund" => true,
            "duration" => 0
        ]),
        'method' => 'POST'
    ]);
    if (
        is_array($rsa_rf['rsa']) && isset($rsa_rf['rsa']['body']) &&
        is_array($rsa_rf['rf']) && isset($rsa_rf['rf']['body'])
    ) {
        $rsa_json = json_decode($rsa_rf['rsa']['body']);
        $rf_json = json_decode($rsa_rf['rf']['body']);
        $rsa_rf['rsa'] = $rsa_json->Data;
        $rsa_rf['rf'] = $rf_json->Data;
        set_transient($cacheKey, $rsa_rf, DAY_IN_SECONDS);
    } else {
        $rsa_rf = false;
    }
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title><?php echo wp_title( '|', false, 'right' ) . get_bloginfo('name'); ?></title>
        <!-- Hotjar Tracking Code for lppfa.inspireleadership.biz -->
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description"
              content="<?php echo get_bloginfo('description'); ?>">
        <!-- Bootstrap and Custom CSS files-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
              integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
              crossorigin="anonymous">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet"
              href="<?php echo get_bloginfo('template_directory'); ?>/owlcarousel/assets/owl.carousel.css">
        <link rel="stylesheet"
              href="<?php echo get_bloginfo('template_directory'); ?>/owlcarousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/docs.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/design.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/dropzone.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/parsley.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/custom.css">

        <!-- sweet alerts -->
        <link rel="stylesheet" type="text/css"
              href="<?php echo get_bloginfo('template_directory'); ?>/vendors/sweetalert/sweetalert.css">

        <!--Google Fonts and Fonts Awesome links -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <script>
            (function (h, o, t, j, a, r) {
                h.hj = h.hj || function () {
                    (h.hj.q = h.hj.q || []).push(arguments)
                };
                h._hjSettings = {hjid: 536413, hjsv: 5};
                a = o.getElementsByTagName('head')[0];
                r = o.createElement('script');
                r.async = 1;
                r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
                a.appendChild(r);
            })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
        </script>
      
        <script>

        var captchaSubmit = function(){
       

        var recaptchaButton =  document.getElementById('recaptcha');
        
        var buttonHolder =  document.getElementById('button-holder'); 
      if ( recaptchaButton !== null) {
         recaptchaButton.parentNode.removeChild(recaptchaButton);

 }else if ( recaptchaButton == null ){
         var createGetTokenButton = document.createElement('button'); 
         createGetTokenButton.id = 'token-submit'; 
         createGetTokenButton.setAttribute('class','btn btn-purple validate'); 
         createGetTokenButton.setAttribute('type', 'submit'); 
         buttonHolder.appendChild(createGetTokenButton);
         createGetTokenButton.innerHTML = "Get token";  
}  
}
        var onloadCallback = function(){  grecaptcha.render('recaptcha',
        {"sitekey":"6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7","callback":captchaSubmit});
                
  } 
//var myCallBack = function() {
//	alert('Rendering...');
//	grecaptcha.render('recaptcha',
//  {"sitekey":"6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7","callback":captchaSubmit});
//}

     </script> 

        
        <script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit' async defer></script>
        
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-105192236-1', 'auto');
            ga('send', 'pageview');
        </script>


        <!-- custom CSS for theme -->
        <? if (isset($options['custom_css'])): ?>
            <style>
                <?= $options['custom_css'] ?>
            </style>
        <? endif ?>

        <!-- custom JS for theme -->
        <? if (isset($options['custom_js'])): ?>
            <script>
                <?= $options['custom_js'] ?>
            </script>
        <? endif ?>

        <?php wp_head(); ?>

    </head>
<body style="overflow-x: hidden;">

<?php if (
    is_page_template("template_socials.php") ||
    is_page_template("template_blog.php")
): ?>
    <!-- fb plugin -->
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
<?php endif ?>

<?php if (
    !is_page_template("template_enroll.php") &&
    !is_page_template("template_login.php") &&
    !is_page_template("template_token.php")
): ?>
    <!-- Mobile navigation -->
    <nav class="m-style navbar fixed-top hidden-lg-up">
        <div class="button_container" id="toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </div>
        <a href="<?php echo get_bloginfo('wpurl'); ?>" class="m-logo navbar-brand">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" class="img-responsive"
                 width="85" alt="Leadway Alternate Logo">
        </a>
        <form class="form-inline mob-search">
            <input name="s" class="form-control" type="text" placeholder="Search" value="<?= get_search_query() ?>">
        </form>
        <div class="overlay text-center" id="overlay">
            <ul class="menu">
                <li><a data-toggle="collapse" href="#log" aria-expanded="false" aria-controls="log">Login / Register <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    <ul class="sub-menu collapse" id="log">
                        <li><a href="/login">Client login</a></li>
                        <li><a href="#">Employer login</a></li>
                        <li><a href="/enroll">Register</a></li>
                    </ul>
                </li>
                <li><a href="/company">Our Company</a></li>
                <li><a href="/services">Products & Services</a></li>
                <li><a href="/benefits">Benefits</a></li>
                <li><a href="/investment">Investments</a></li>
                <li><a href="/career">Careers</a></li>
                <li><a data-toggle="collapse" href="#med" aria-expanded="false" aria-controls="med">Media <i class="fa fa-chevron-down"></i></a>
                    <ul class="sub-menu collapse" id="med">
                        <li><a href="/news">News & Events</a></li>
                        <li><a href="/social">Social</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
                </li>
                <li><a data-toggle="collapse" href="#cont" aria-expanded="false" aria-controls="cont">Contact Us <i class="fa fa-chevron-down"></i></a>
                    <ul class="sub-menu collapse" id="cont">
                        <li><a href="/contact">Branch Network</a></li>
                        <li><a href="/faq">FAQs</a></li>
                        <li><a href="/downloads">Downloads</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <?php if (
        !is_page_template("template_blog.php") &&
        !is_single()
    ) { ?>
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
                    <?php if ($rsa_rf) { ?>
                        <td>
                            <span class="head-td"> RSA FUND</span><br>
                            <span>&#8358;<?= array_get($rsa_rf['rsa']->values, 0) ?>
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/pos.png" alt="">
                            </span>
                        </td>
                        <td>
                            <span class="head-td">RETIREE FUND</span><br>
                            <span> &#8358;<?= array_get($rsa_rf['rf']->values, 0) ?>
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/neg.png" alt="">
                            </span>
                        </td>
                    <?php } ?>
                    <td>
                        <a href="/login" style="color: white; font-weight: 500">LOGIN</a>
                    </td>
                    <td>
                        <a href="/calculator" class="nav-calc"> <img
                                src="<?php echo get_bloginfo('template_directory'); ?>/images/calc.png">
                            <span>Calculator</span></a>
                    </td>
                    <td>
                        <button onclick="location='/trends'" type="button" class="btn btn-outline-secondary v-trends">
                            VIEW TRENDS
                        </button>
                    </td>
                    <td>
                        <span id="date"></span>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- Navbar -->
            <div class="navStyle2" <?= (is_page_template('template_homepage.php') ? 'style="display: none;"' : '') ?>>
                <div class="nav nav-fill mr-auto">
                    <form class="form-inline search" action="/">
                        <input name="s" class="form-control" type="text" placeholder="Search" id="search-index"
                               value="<?= get_search_query() ?>">
                    </form>

                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary-header-menu',
                        'menu_id' => 'main__header-menu',
                        'menu_class' => "nav-fill",
                        'walker' => new My_Walker_Nav_Menu()
                    )); ?>

                    <a class="navbar-brand" href="/"><img class="logo" src="<?= asset() ?>/images/logo.png"
                                                          alt="Leadway Logo"></a>
                </div>
            </div>
        </nav>
    <?php } ?>
<?php endif ?>