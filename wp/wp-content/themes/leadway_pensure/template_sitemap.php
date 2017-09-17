<?php /* Template Name: Services */ ?>

<?php
$services = get_field('services');

?>

<?php get_header(); ?>
<nav class="navbar fixed-top hidden-md-down pOff">
    <!-- desktop price charts start -->
    <table class="table table-responsive mOff">
        <tbody>
        <tr>
            <td>
                <div id="google_translate_element"></div>
            </td>
            <td>
                <span><i class="fa fa-phone" aria-hidden="true" style="color: #2068a4"></i> 01-2800850</span>
            </td>
            <td>
                <span class="head-td"> RSA FUNDS</span><br>
                <span>&#8358;2.3433 <img src="images/pos.png" alt=""></span>
            </td>
            <td>
                <span class="head-td">RETIREE FUNDS</span><br>
                <span> &#8358;2.3433 <img src="images/neg.png" alt=""></span>
            </td>
            <td>
                <a href="calculator.html" class="nav-calc"> <img src="images/calc.png"> <span>Calculator</span></a>
            </td>
            <td>
                <button type="button" class="btn btn-outline-secondary v-trends"> VIEW TRENDS </button>
            </td>
            <td>
                <span id="date"></span>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- Navbar -->
    <div class="navStyle2">
        <ul class="nav nav-fill mr-auto">
            <form class="form-inline search">
                <input class="form-control" type="text" placeholder="Search" id="search-index">
            </form>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:" id="ps" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products & Services</a>
                <div class="dropdown-menu ps" aria-labelledby="ps">
                    <a class="dropdown-item" href="services.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Retirement Savings Account</a>
                    <a class="dropdown-item" href="services.html#avc"><i class="fa fa-chevron-right" aria-hidden="true"></i> Additional Voluntary Contribution</a>
                    <a class="dropdown-item" href="services.html#cbs"><i class="fa fa-chevron-right" aria-hidden="true"></i> Cross-Border Services</a>
                    <a class="dropdown-item" href="services.html#mf"><i class="fa fa-chevron-right" aria-hidden="true"></i> Managed Funds</a>
                    <a class="dropdown-item" href="services.html#nst"><i class="fa fa-chevron-right" aria-hidden="true"></i> NSITF</a>
                    <a class="dropdown-item" href="services.html#pms"><i class="fa fa-chevron-right" aria-hidden="true"></i> SMS Services</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="company.html" id="oc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Company</a>
                <div class="dropdown-menu oc" aria-labelledby="oc">
                    <a class="dropdown-item" href="company.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meet Leadway Pensure</a>
                    <a class="dropdown-item" href="company.html#lead"><i class="fa fa-chevron-right" aria-hidden="true"></i> Leadership</a>
                    <a class="dropdown-item" href="company.html#f-rep"><i class="fa fa-chevron-right" aria-hidden="true"></i> Financial Reports</a>
                    <a class="dropdown-item" href="company.html#csr"><i class="fa fa-chevron-right" aria-hidden="true"></i> C.S.R</a>
                    <a class="dropdown-item" href="career.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Careers</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:" id="in" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Investments</a>
                <div class="dropdown-menu in" aria-labelledby="in">
                    <a class="dropdown-item" href="investment.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Financial Markets</a>
                    <a class="dropdown-item" href="investment.html#w-plan"><i class="fa fa-chevron-right" aria-hidden="true"></i> Wealth Planning</a>
                    <a class="dropdown-item" href="investment.html#r-plan"><i class="fa fa-chevron-right" aria-hidden="true"></i> Retirement Planning</a>
                    <a class="dropdown-item" href="investment.html#p-fund"><i class="fa fa-chevron-right" aria-hidden="true"></i> Performance Fund</a>
                    <a class="dropdown-item" href="investment.html#pod"><i class="fa fa-chevron-right" aria-hidden="true"></i> Podcast</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="bnf" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Benefits</a>
                <div class="dropdown-menu bnf" aria-labelledby="bnf">
                    <a class="dropdown-item" href="benefits.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> About to Retire?</a>
                    <a class="dropdown-item" href="benefits.html#pay-grnd"><i class="fa fa-chevron-right" aria-hidden="true"></i> Grounds to Retirement</a>
                    <a class="dropdown-item" href="benefits.html#pay-type"><i class="fa fa-chevron-right" aria-hidden="true"></i> Payment Types</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                <div class="dropdown-menu dropdown-menu-right md" aria-labelledby="md">
                    <a class="dropdown-item" href="news.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> News & Events</a>
                    <a class="dropdown-item" href="news.html#cald"><i class="fa fa-chevron-right" aria-hidden="true"></i> Calender</a>
                    <a class="dropdown-item" href="news.html#gall"><i class="fa fa-chevron-right" aria-hidden="true"></i> Gallery</a>
                    <a class="dropdown-item" href="social.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Social</a>
                    <a class="dropdown-item" href="blog.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Blog</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:" id="co" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="co">
                    <a class="dropdown-item" href="contact.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Branch Network</a>
                    <a class="dropdown-item" href="faq.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> FAQs</a>
                    <a class="dropdown-item" href="downloads.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Downloads</a>
                </div>
            </li>
            <a class="navbar-brand" href="index.html"><img class="logo" src="images/logo.png" alt="Leadway Logo"></a>
        </ul>
    </div>
</nav>
<!-- Body and Main Content of page -->
<div class="container" id="m-top">
    <div class="row" id="s-map">
        <div class="col-12 text-center">
            <h3 class="hidden-sm-down">SITE MAP</h3>
            <h4 class="hidden-md-up">SITE MAP</h4>
        </div>
        <div class="col-12 col-md-6">
            <a href="index.html" class="h5">Home Page</a>
            <nav class="nav flex-column">
                <a class="nav-link active" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Regulatory Information</a>
                <a class="nav-link" href="downloads.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Downloads</a>
                <a class="nav-link" href="privacy.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Privacy Policy</a>
                <a class="nav-link" href="terms.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Terms & Conditions</a>
                <a class="nav-link" href="javascript:void(Tawk_API.toggle())" target="_blank"><i class="fa fa-chevron-right" aria-hidden="true"></i> Chat with Us</a>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <a href="services.html" class="h5">Products & Services</a>
            <nav class="nav flex-column">
                <a class="nav-link active" href="services.html#rsa"><i class="fa fa-chevron-right" aria-hidden="true"></i> Retirement Savings Account</a>
                <a class="nav-link" href="services.html#avc"><i class="fa fa-chevron-right" aria-hidden="true"></i> Additional Voluntary Contributions</a>
                <a class="nav-link" href="services.html#nst"><i class="fa fa-chevron-right" aria-hidden="true"></i> NSITF</a>
                <a class="nav-link" href="services.html#cbs"><i class="fa fa-chevron-right" aria-hidden="true"></i> Cross Border Services</a>
                <a class="nav-link" href="services.html#mf"><i class="fa fa-chevron-right" aria-hidden="true"></i> Managed Funds</a>
                <a class="nav-link" href="services.html#pms"><i class="fa fa-chevron-right" aria-hidden="true"></i> SMS Services</a>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <a href="company.html" class="h5">Our Company</a>
            <nav class="nav flex-column">
                <a class="nav-link active" href="company.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Meet Leadway</a>
                <a class="nav-link" href="company.html#lead"><i class="fa fa-chevron-right" aria-hidden="true"></i> Leadership</a>
                <a class="nav-link" href="company.html#f-rep"><i class="fa fa-chevron-right" aria-hidden="true"></i> Financial Report</a>
                <a class="nav-link" href="company.html#csr"><i class="fa fa-chevron-right" aria-hidden="true"></i> C.S.R</a>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <a href="benefits.html" class="h5">Benefits</a>
            <nav class="nav flex-column">
                <a class="nav-link active" href="benefits.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> About to Retire</a>
                <a class="nav-link" href="benefits.html#pay-grnd"><i class="fa fa-chevron-right" aria-hidden="true"></i> Grounds for Retirement</a>
                <a class="nav-link" href="benefits.html#pay-type"><i class="fa fa-chevron-right" aria-hidden="true"></i> Payment Types</a>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <a href="career.html" class="h5">Careers</a>
            <nav class="nav flex-column">
                <a class="nav-link active" href="career.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Explore Vacancies</a>
                <a class="nav-link" href="career.html#cv"><i class="fa fa-chevron-right" aria-hidden="true"></i> Upload CV</a>
                <a class="nav-link" href="career.html#alm"><i class="fa fa-chevron-right" aria-hidden="true"></i> Alumni Network</a>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <a href="investment.html" class="h5">Investment</a>
            <nav class="nav flex-column">
                <a class="nav-link active" href="investment.html#f-mkt"><i class="fa fa-chevron-right" aria-hidden="true"></i> Financial Market</a>
                <a class="nav-link" href="investment.html#w-plan"><i class="fa fa-chevron-right" aria-hidden="true"></i> Additional Voluntary Contributions</a>
                <a class="nav-link" href="investment.html#p-fund"><i class="fa fa-chevron-right" aria-hidden="true"></i> Fund Perfomance</a>
                <a class="nav-link" href="investment.html#r-plan"><i class="fa fa-chevron-right" aria-hidden="true"></i> Retirement Planning</a>
                <a class="nav-link" href="investment.html#pod"><i class="fa fa-chevron-right" aria-hidden="true"></i> Podcast</a>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <a href="social.html" class="h5">Social</a>
            <nav class="nav flex-column">
                <a class="nav-link active" href="blog.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Blog</a>
                <a class="nav-link" href="news.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> News</a>
                <a class="nav-link" href="news.html#cald"><i class="fa fa-chevron-right" aria-hidden="true"></i> Calendar</a>
                <a class="nav-link" href="news.html#gall"><i class="fa fa-chevron-right" aria-hidden="true"></i> Gallery</a>
            </nav>
        </div>
        <div class="col-12 col-md-6">
            <a href="contact.html" class="h5">Contact Us</a>
            <nav class="nav flex-column">
                <a class="nav-link" href="contact.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Branch Network</a>
                <a class="nav-link" href="faq.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Frequently Asked Questions</a>
                <a class="nav-link" href="downloads.html"><i class="fa fa-chevron-right" aria-hidden="true"></i> Downloads</a>
            </nav>
        </div>
    </div>
</div>


<?php get_footer(); ?>


</body>
</html>