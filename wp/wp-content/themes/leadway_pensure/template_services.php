<?php /* Template Name: Services */ ?>

<?php
$services = get_field('services');

?>

<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container" id="m-top">
    <div class="row">
        <div class="hidden-md-up col-12 m-prod-list">
            <form class="mx-auto">
                <div class="form-group text-center">
                    <label for="s-prod">Our Services</label>
                    <select class="form-control" id="s-prod" data-aos="fade">
                        <?php foreach ($services as $key => $service): ?>
                            <option value="<?= ++$key ?>"><?= $service['title'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12 prod-banner">
            <?php foreach ($services as $key => $service): ?>
                <img src="<?= $service['image']['url'] ?>" class="<?= strtolower($service['image']['title']) ?>-img">
            <?php endforeach ?>
        </div>
    </div>
    <div class="row tab-content">
        <?php foreach ($services as $key => $service): ?>
            <div class="col-12 col-md-9 fade show tab-pane <?= $key == 0 ? 'active' : '' ?>" role="tabpanel" id="<?= strtolower($service['image']['title']) ?>">
                <?= $service['content'] ?>
            </div>
        <?php endforeach ?>
        <!--<div class="col-12 col-md-9 fade show tab-pane active" role="tabpanel" id="rsa">
            <p class="text-justify"> The Retirement Savings Account was initiated by the Federal Government under the
                Pensions Reform Act 2004 and is used to set aside money towards an individual’s retirement. The new
                pension
                Reform Act 2014 requires the employer and employee to contribute a minimum total of 18% of the
                employee’s
                monthly emoluments (basic salary, housing and transport) to a Retirement Savings Account (RSA) which
                will be
                managed by a private sector Pension Fund Administrator (PFA).</p>
            <h4 class="hidden-sm-down text-center">Your new RSA account starts here</h4>
            <h5 class="hidden-md-up text-center">Your new RSA account starts here</h5>

            <div class="row">
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/form.png"><br><br>
                    <span>Click to Enroll now</span>
                </div>
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/phone.png"><br><br>
                    <span>Wait for SMS Notification on account registration</span>
                </div>
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/diploma.png"><br><br>
                    <span>Receive membership certificate via mail</span>
                </div>
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/talk.png"><br><br>
                    <span>Inform Employer / HR on registration status</span>
                </div>
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/cloud.png"><br><br>
                    <span>Login online here</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9 fade tab-pane" role="tabpanel" id="avc">
            <p class="text-justify"> Additional Voluntary Contributions (AVC) is the discretionary contribution made
                above the mandatory 18% employer and employee contributions into an individual’s Retirement Savings
                Account (RSA) and cannot be more than 100% percentage of your emolument. You also have the benefit of
                accessing your AVC any time before retirement. However, enjoying a TAX FREE withdrawal applies only
                after
                FIVE YEARS of making contributions!</p>
            <h4 class="hidden-sm-down text-center">Your new AVC account starts here</h4>
            <h5 class="hidden-md-up text-center">Your new AVC account starts here</h5>

            <div class="row">
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/form.png"><br><br>
                    <span>Click to Enroll now</span>
                </div>
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/phone.png"><br><br>
                    <span>Wait for SMS Notification on account registration</span>
                </div>
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/diploma.png"><br><br>
                    <span>Receive membership certificate via mail</span>
                </div>
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/talk.png"><br><br>
                    <span>Inform Employer / HR on registration status</span>
                </div>
                <div class="col-12 col-md-4 info-icon">
                    <img class="img-fluid" src="images/cloud.png"><br><br>
                    <span>Login online here</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9 fade tab-pane" role="tabpanel" id="mf">
            <p class="text-justify">As a Pension Fund Administrator, our unique responsibilities include management
                of Gratuity scheme, Legacy funds and other managed funds with tailored deliverables and value taken into
                consideration.</p>

            <p class="text-justify"><i>Gratuity Funds</i><br> Gratuity Funds are lump sum amounts that employers give
                to their employees on leaving the organization as a way of rewarding them for their past service. This
                cash
                reward is called “Gratuity”. The amount paid to the employee is normally based on the number of years of
                service
                he/she worked for the organization. Please note that Gratuity Funds are separate from the normal RSA
                Fund or Lump
                Sum payment made at retirement.</p>

            <p class="text-justify"><i>Legacy Funds</i><br> Legacy Funds are pre-scheme funds (i.e. funds up to December
                2004)
                which were privately invested by an organization for or its authorized agents on behalf of its workers
                before the
                Pension Reform Act 2004. They are usually treated as separate funds from the normal mandatory
                contributions.</p>
        </div>
        <div class="col-12 col-md-9 fade tab-pane text-center" role="tabpanel" id="cbs">
            <h1>Coming Soon!</h1>
        </div>
        <div class="col-12 col-md-9 fade tab-pane" role="tabpanel" id="nst">
            <p class="text-justify">The Pension Reform Act (PRA) 2004 made provision for contributions in the National
                Provident Fund (NPF) and its successor scheme the National Social Insurance Trust Fund (NSITF) referred
                to
                as the “old scheme” to be transferred into members’ Retirement Savings Accounts (RSAs).</p>

            <p class="text-justify">Customers who were members of the “old scheme” are required by NSITF to update
                their records on <a href="https://www.trustfundpensions.com">Trust fund’s website</a>. They are also
                required
                to submit the following documents:<br>
                1. <i>NSITF/NPF Card</i> - Means of identification (International Passport, Driver License, National ID
                and
                Employer’s ID).<br>
                2. <i>Completed NSITF Transfer Form</i> - NSITF (Trust Fund) statement of accounts/schedule for evidence
                of contribution.<br>
                3. <i>Passport</i>.</p>

            <p class="text-justify">In the event a customer does not have the original NSITF card or the organization no
                longer exists,
                the required documents to submit include:<br>
                1. A personal indemnity letter from the customer signed and stamped at the High court.<br>
                2. Sworn affidavit for missing certificate with the registration number boldly written.<br>
                3. NSITF Transfer form<br>
                4. Means of identification ( International Passport, Driver License, National ID and Employer’s ID).<br>
                5. NSITF (Trust fund) statement of accounts/evidence of contribution.<br>
                6. Passport<br>
                <i>NB:</i> For organizations that still exist, the indemnity letter should be written on the
                organization’s letter headed paper.</p>
        </div>
        <div class="col-12 col-md-9 fade tab-pane" role="tabpanel" id="pms">
            <p>The SMS Request Service will enable customers send in requests via SMS and receive feedback on the
                Phone number registered on our database.</p>

            <p>Interact with the LPPFA Smartphone to explore all the SMS services at your fingertips.</p>
            <h4 class="hidden-sm-down text-center">Our SMS Request services</h4>
            <h5 class="hidden-md-up text-center">Our SMS Request services</h5>

            <div class="row" id="sms-area">
                <div class="col-md-6">
                    <div class="pin-txt">
                        <h6 class="text-center">Want to retrieve your PIN?</h6>
                    </div>
                    <div class="bal-txt">
                        <h6 class="text-center">How to make a BALANCE enquiry?</h6>
                    </div>
                    <div class="stm-txt">
                        <h6 class="text-center">Need to see your STATEMENT of account?</h6>
                    </div>
                    <div class="help-txt">
                        <h6 class="text-center">Need some HELP with a pension scheme?</h6>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="img-box mx-auto">
                        <img class="img-fluid" src="images/slider-phone.png">

                        <div id="sms-slide" class="carousel slide" data-ride="carousel" data-interval="10000"
                             data-aos="fade">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active" id="1">
                                    <img src="images/getpin.jpg">
                                </div>
                                <div class="carousel-item" id="2">
                                    <img src="images/bal.jpg">
                                </div>
                                <div class="carousel-item" id="3">
                                    <img src="images/stm.jpg">
                                </div>
                                <div class="carousel-item" id="4">
                                    <img src="images/help.jpg">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#sms-slide" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#sms-slide" role="button" data-slide="next">
                                <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <ul class="hidden-sm-down col-md-3 nav flex-column" role="tablist" id="prod-list">
            <?php foreach ($services as $key => $service): ?>
                <li class="nav-item <?= $key == 0 ? 'show' : '' ?>">
                    <a class="nav-link <?= $key == 0 ? 'active' : '' ?>" data-toggle="tab" href="#<?= strtolower($service['image']['title']) ?>" role="tab">
                        <?= $service['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>

            <!--<li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#avc" role="tab">Additional Voluntary Contribution</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#mf" role="tab">Managed Funds</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#cbs" role="tab">Cross Border Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#nst" role="tab">NSITF</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#pms" role="tab">Personal Messaging Services</a>
            </li>-->
        </ul>
    </div>
</div>


<?php get_footer(); ?>
<script>
    $(document).ready(function() {

        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            $("#m-top").attr("class", "container-fluid");
        } else {
            $("m-top").attr("class", "container");
        }

        $('#prod-list a[href="'+ window.location.hash+ '"]').tab('show'); // Select tab by name if provided in location hash

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).closest('ul').find('.show').removeClass('show');
            $(this).parent().addClass('show');
            $('body,html').animate({
                scrollTop : 0
            }, 500);
        });

        $('a[href="#rsa"]').on('shown.bs.tab', function() {
            $('.rsa-img').css('display','block');
            $('.avc-img, .sms-img, .cbs-img, .nst-img, .mf-img').css('display','none');
        });

        $('a[href="#avc"]').on('shown.bs.tab', function() {
            $('.avc-img').css('display','block');
            $('.rsa-img, .sms-img, .cbs-img, .nst-img, .mf-img').css('display','none');
        });

        $('a[href="#cbs"]').on('shown.bs.tab', function() {
            $('.cbs-img').css('display','block');
            $('.rsa-img, .avc-img, .sms-img, .nst-img, .mf-img').css('display','none');
        });

        $('a[href="#pms"]').on('shown.bs.tab', function() {
            $('.sms-img').css('display','block');
            $('.rsa-img, .avc-img, .cbs-img, .nst-img, .mf-img').css('display','none');
        });

        $('a[href="#nst"]').on('shown.bs.tab', function() {
            $('.nst-img').css('display','block');
            $('.rsa-img, .avc-img, .cbs-img, .sms-img, .mf-img').css('display','none');
        });

        $('a[href="#mf"]').on('shown.bs.tab', function() {
            $('.mf-img').css('display','block');
            $('.rsa-img, .avc-img, .cbs-img, .sms-img, .nst-img').css('display','none');
        });

        $("#s-prod").change(function (){
            var i = $(this).val();

            if(i == 0){
                $('a[href="#rsa"]').tab('show');
            }else if(i == 1){
                $('a[href="#avc"]').tab('show');
            }else if(i == 2){
                $('a[href="#mf"]').tab('show');
            }else if(i == 3){
                $('a[href="#cbs"]').tab('show');
            }else if(i == 4){
                $('a[href="#nst"]').tab('show');
            }else if(i == 5) {
                $('a[href="#pms"]').tab('show');
            }
        });

        $(".dropdown-menu.ps a:first-child").click(function(){
            $('a[href="#rsa"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(2)").click(function(){
            $('a[href="#avc"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(4)").click(function(){
            $('a[href="#mf"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(5)").click(function(){
            $('a[href="#nst"]').tab('show');
        });

        $(".dropdown-menu.ps a:nth-child(6)").click(function(){
            $('a[href="#pms"]').tab('show');
        });

        $('#sms-slide').on('slide.bs.carousel', function (e){
            var id = e.relatedTarget.id;
            id = parseInt(id);
            switch (id) {
                case 1:
                    $('.bal-txt, .stm-txt, .help-txt').hide();
                    $('.pin-txt').show();
                    break;
                case 2:
                    $('.pin-txt, .stm-txt, .help-txt').hide();
                    $('.bal-txt').show();
                    break;
                case 3:
                    $('.pin-txt, .bal-txt, .help-txt').hide();
                    $('.stm-txt').show();
                    break;
                case 4:
                    $('.stm-txt, .pin-txt, .bal-txt').hide();
                    $('.help-txt').show();
                    break;
                default:
                    document.write("Not working");
            }
        });

        $('#sms-area').mouseenter(function(){
            if( !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
                $('#sms-slide').carousel('pause');
                $('#sms-slide .carousel-control-next, #sms-slide .carousel-control-prev').css('display', 'flex');
            }
        }).mouseleave(function(){
            if( !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
                $('#sms-slide').carousel('cycle');
                $('#sms-slide .carousel-control-next, #sms-slide .carousel-control-prev').css('display', 'none');
            }
        });
    });
</script>

