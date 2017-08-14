<?php
$options = get_option('theme_options');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <!-- Hotjar Tracking Code for lppfa.inspireleadership.biz -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="<?php echo get_bloginfo( 'description' ); ?>">
    <!-- Bootstrap and Custom CSS files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/owlcarousel/assets/owl.carousel.css">
    <link rel="stylesheet"
          href="<?php echo get_bloginfo('template_directory'); ?>/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/docs.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/design.css">
    <!--Google Fonts and Fonts Awesome links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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

    <?php wp_head(); ?>

</head>
<body>
<!-- Mobile navigation -->
<nav class="m-style navbar fixed-top hidden-lg-up">
    <div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
    </div>
    <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="m-logo row navbar-brand" data-toggle="tooltip" title="Home" data-placement="bottom">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" class="img-responsive"
             width="85" alt="">
    </a>

    <div class="overlay text-center" id="overlay">
        <ul class="menu">
            <li><a data-toggle="collapse" href="#lang" aria-expanded="false" aria-controls="lang">Select Language <i
                        class="fa fa-chevron-down" aria-hidden="true"></i></a>
                <ul class="sub-menu collapse" id="lang">
                    <li><a href="#">English</a></li>
                    <li><a href="#">Yoruba</a></li>
                    <li><a href="#">Igbo</a></li>
                    <li><a href="#">Hausa</a></li>
                </ul>
            </li>
            <li><a href="/company">Our Company</a></li>
            <li><a data-toggle="collapse" href="#prod" aria-expanded="false" aria-controls="prod">Products & Services <i
                        class="fa fa-chevron-down" aria-hidden="true"></i></a>
                <ul class="sub-menu collapse" id="prod">
                    <li><a href="#">Retire Savings Account</a></li>
                    <li><a href="#">Additional Voluntary Contribution</a></li>
                    <li><a href="#">Managed Funds</a></li>
                    <li><a href="#">Cross-Border Services</a></li>
                    <li><a href="#">NSITF</a></li>
                    <li><a href="#">SMS Services</a></li>
                </ul>
            </li>
            <li><a href="#">Benefits</a></li>
            <li><a href="#">Investment</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Login</a></li>
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
                <div class="form-group">
                    <select class="form-control language">
                        <option>English</option>
                        <option>Yoruba</option>
                        <option>Hausa</option>
                        <option>Igbo</option>
                    </select>
                </div>
            </td>
            <td>
                <span><i class="fa fa-phone" aria-hidden="true" style="color: #2068a4"></i>
                    <?= $options['phone_number']; ?>
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
                <span class="head-td">RSA ADMIN FEE</span><br>
                <span> &#8358;100 </span>
            </td>
            <td>
                <a href="#" class="nav-calc"> <img src="<?php echo get_bloginfo('template_directory'); ?>/images/calc.png"> <span>Calculator</span></a>
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
    <!-- Navbar -->
    <div class="navStyle2" <?= (is_page_template('template_homepage.php') ? 'style="display: none;"': '')?>>
        <ul class="nav nav-fill mr-auto">
            <form class="form-inline search">
                <input class="form-control" type="text" placeholder="Search">
            </form>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/services" id="ps" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"> Products & Services </a>

                <div class="dropdown-menu ps" aria-labelledby="ps">
                    <a class="dropdown-item" href="/services#rsa"><i class="fa fa-chevron-right"
                                                                         aria-hidden="true"></i> Retirement Savings
                        Account</a>
                    <a class="dropdown-item" href="/services#avc"><i class="fa fa-chevron-right"
                                                                         aria-hidden="true"></i> Additional Voluntary
                        Contribution</a>
                    <a class="dropdown-item disabled" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        Cross-Border Benefits</a>
                    <a class="dropdown-item" href="/services#mf"><i class="fa fa-chevron-right"
                                                                        aria-hidden="true"></i> Managed Funds</a>
                    <a class="dropdown-item" href="/services#nst"><i class="fa fa-chevron-right"
                                                                         aria-hidden="true"></i> NSITF</a>
                    <a class="dropdown-item" href="/services#pms"><i class="fa fa-chevron-right"
                                                                         aria-hidden="true"></i> SMS Services</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/company" id="oc" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Our Company</a>

                <div class="dropdown-menu oc" aria-labelledby="oc">
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meet
                        Leadway Pensure</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Leadership</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Why Leadway
                        Pensure?</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Financial
                        Reports</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> C.S.R</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="in" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Investment</a>

                <div class="dropdown-menu in" aria-labelledby="in">
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Financial
                        Markets</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Wealth
                        Planning</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Retirement
                        Planning</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Performance
                        Fund</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        Podcasts</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="ne" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">News | Events</a>

                <div class="dropdown-menu" aria-labelledby="ne">
                    <a class="dropdown-item" href="/careers"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        Careers</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        Calendar</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Gallery</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dl" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Downloads</a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dl">
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Regulatory
                        Information </a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Retired &
                        Terminal Benefits</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Corporate
                        Governance</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:" id="co" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Contact</a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="co">
                    <a class="dropdown-item" href="contact.html"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        Branch Network</a>
                    <a class="dropdown-item disabled" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        Help Desk</a>
                    <a class="dropdown-item disabled" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        FAQ's</a>
                </div>
            </li>
            <a class="navbar-brand" href="index.html"><img class="logo"
                                                           src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png"
                                                           alt=""></a>
        </ul>
    </div>
</nav>