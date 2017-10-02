<?php /* Template Name: Token */ ?>

<?php get_header(); ?>

<style>
    .spinner {
        text-align: center;
        width: 20px;
        height: 20px;
        display: none;

        position: relative;
        margin: 10px auto;
    }

    .double-bounce1, .double-bounce2 {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #333;
        opacity: 0.6;
        position: absolute;
        top: 0;
        left: 0;

        -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
        animation: sk-bounce 2.0s infinite ease-in-out;
    }

    .double-bounce2 {
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
    }

    @-webkit-keyframes sk-bounce {
        0%, 100% {
            -webkit-transform: scale(0.0)
        }
        50% {
            -webkit-transform: scale(1.0)
        }
    }

    @keyframes sk-bounce {
        0%, 100% {
            transform: scale(0.0);
            -webkit-transform: scale(0.0);
        }
        50% {
            transform: scale(1.0);
            -webkit-transform: scale(1.0);
        }
    }
</style>

<!-- Body and Main Content of page -->
<div class="container-fluid" id="enroll-cont">

    <?php include_once('partials/chart-header.php') ?>

    <div class="row" id="background">
        <div class="col-12" style="color:white">
            <div class="row" id="ad-text">

                <div class="col-sm-6 col-md-5 hidden-xs-down" id="sms-msg">
                    Receive your token via EMAIL today to get started
                </div>
                <div class="col-sm-3 offset-sm-9 col-md-3 offset-md-9 back">
                    <a class="" href="#">
                        <figure>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" alt=""
                                 class="img-fluid back-logo">
                            <figcaption class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i> back to
                                Leadway-Pensure.com
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="row enroll">
                <div class="col-sm-4 hidden-xs-down" id="enroll-msg">
                    <span id="v-mob" style=""> Enroll via mobile today! </span>

                    <p style="font-size:8em;font-weight:600"> 0<sup style="font-size:.2em;position: absolute;
        top: 29%;">%</sup> <span style="font-size:.3em;position: absolute;
        top: 41%;"> Hassle. </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 offset-sm-3 col-md-7 offset-md-5 token" style="position:absolute; bottom:14%">
            <div class="row" id=token-form>
                <div class="col-12">
                    <div class="row">
                        <div class="col-5 col-sm-4 col-md-3 enroll-tab text-center" id="req-tab">
                            Requirement
                        </div>
                        <div class="col-5 col-sm-4 col-md-3 enroll-tab text-center" id="requ-tab">
                            Request Token
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div id="requirement">
                        <h6 class="text-center form-pad mOff enroll-heading" style="color:white"> Fill out the form
                            below to recieve your token instantly! </h6>

                        <form data-parsley-validate id="token-data" class="token-data">
                            <input type="hidden" name="formName" value="token-form" />

                            <div class="row ">
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> First Name </label>
                                    <input name=firstname class="form-control e-fields text-center" type="text"
                                           placeholder="stark" required="" id='f-name' data-parsley-group="block1">
                                </div>
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> Middle Name </label>
                                    <input name=middlename class="form-control e-fields text-center" type="text"
                                           placeholder="snow" required="" id='l-name' data-parsley-group="block1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> Surname </label>
                                    <input name=surname class="form-control e-fields text-center" type="text"
                                           placeholder="John" required="" data-parsley-group="block1">
                                </div>
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> Email </label>
                                    <input name=emailaddress class="form-control e-fields text-center" type="text"
                                           placeholder="Johnsnow@xxxxxxx" required="" data-parsley-group="block1" id="token-email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center form-pad">
                                    <label class="form-label"> Mobile no </label>
                                    <input name=mobileno class="form-control e-fields text-center" type="number" 
                                           placeholder="080xxxxxxx" data-parsley-minlength="11"
                                           data-parsley-maxlength="15" required="" data-parsley-group="block1">
                                </div>
                                <div class="col-12 col-sm-6 text-center form-pad" id="button-holder">
                                    <!-- enrollment field -->

                                    <button class="btn btn-purple" id="recaptcha"> I'm not a Robot</button>

                                    <!--  g-recaptcha 6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7 -->
                                </div>
							</div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center form-pad">

                            <!-- <a href="enroll.html"> -->
                            <div class="spinner">
                                <div class="double-bounce1"></div>
                                <div class="double-bounce2"></div>
                            </div>
                            <!--  </a> -->
                        </div>
                    </div>
                    </form>
                </div>
                <div id="r-token">
                    <div class="requirementHolder">
                        <h6 class="text-center">
                            You're opting to board the <span style="color:#"> Leading </span> team.</br> Below a re the
                            requirements necessary to complete the process </h6>

                        <ol class="enrollmentRequirement text-center">
                            <li> Fill out your name, phone number, mobile no and email address to recieve token</li>
                            <li> Information on your Personal, Employment and next of Kin</li>
                            <li> White background passport (max size = 500kb)</li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-10 token-entry">
        <form data-parsley-validate method="POST" action="/enroll" id="token-validation-form">
            <input type="hidden" name="formName" value="token-validate-form" />
            <div class="row">
                <div class="col-12 col-sm-4 email-field">
                    <input name="email" class="form-control e-fields" type="text" placeholder="Email-address"
                           required="" id="logon-email" readonly="">
                </div>
                <div class="col-12 col-sm-4 token-field">
                    <input name="otp" class="form-control e-fields" type="text" placeholder="Token no" required="true">
                </div>
                <div class="col-12 col-sm-3 text-center">
                    <input type=submit class="btn btn-purple" value="Enroll now" id="call-json">
                </div>
            </div>
        </form>

        <form action="/enroll" id="validated-token-form" method="POST">
            <input type="hidden" name="token" id="valid-token">
            <input type="hidden" name="email" id="valid-email">
        </form>
    </div>
</div>

</div>
<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/progressbar.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/parsley.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/sweetalert/sweetalert.min.js"></script>

<script>
    $(document).ready(function () {
        $('#requ-tab').click(function () {
            $('#r-token').fadeOut(100, function () {
                $('#requirement').fadeIn(200)
            });
        });

        $('#req-tab').click(function () {
            $('#requirement').fadeOut(100, function () {
                $('#r-token').fadeIn(200)
            });
        });
    });
    // function for submitting token request form after validation successful

    function notRobot() {

        var submitTokenForm = document.getElementById('token-data').submit;
    }

    //$('token-submit').click(function(){

    //var tokenFormValidationCheck = document.getElementById('token-data');
    //console.log(tokenFormValidationCheck);

    //if($('.token-data').parsley().validate({group: 'block1'})){

    //alert ("successful validation check");
    //var tokenSubmit = document.getElementById('token-submit');
    //tokensubmit.setAttribute('data-sitekey', '6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7' );
    //tokensubmit.setAttribute('data-callback', 'notRobot()');
    //tokensubmit.setAttribute('type', 'submit');

    //}else {

    //}
    //});

    function convertFormToJSON(form) {

        var array = jQuery(form).serializeArray();
        var json = {};

        json['clientID'] = '9dy8earw04r09wjefsdp90zsjs';
        jQuery.each(array, function () {
            json[this.name] = this.value || '';
        });
        return json;

    }
    
   $('#recaptcha').click(function(){
       
       var tokenEmail = document.getElementById('token-email').value;
       var g_captcha_response = $("#g-recaptcha-response").val() 
         console.log(g_captcha_response);
         console.log(tokenEmail);   
           
       $('#logon-email').val(tokenEmail);
       
       });
    
   


    //sample string generation block

    $('#call-json').click(function () {
        var form = document.getElementById('token-data');
        var json = convertFormToJSON(form);
        console.log(JSON.stringify(json))
    });


    var spinner = $(".spinner");

    var form = $("#token-data");
    form.bind('submit', function (event) {
        event.preventDefault();
        spinner.show();

        $.ajax({
            type: "POST",
            url: "<?php echo get_bloginfo('template_directory'); ?>/submit.php",
            data: form.serialize(),
            dataType: "json"
        }).done(function (body) {
            spinner.hide();
            var responseText = body.response.Message;
            if (body.response.StatusCode == "00") {
                responseText = "A mail has been sent to your email address with instructions. Please check.";
                swal({
                    title: "Successful!",
                    text: responseText,
                    type: "success"
                });

                $('#logon-email').val(body.request.emailaddress);
            } else {
                swal({
                    title: "Error!",
                    text: responseText,
                    type: "error"
                });
            }
        }).fail(function (body) {
            spinner.hide();
        })
    });

    // validate OTP form
    // redirects to enroll page if successful
    var validateForm = $('#token-validation-form');
    validateForm.bind('submit', function (event) {
        event.preventDefault();
        spinner.show();

        $.ajax({
            type: "POST",
            url: "<?php echo get_bloginfo('template_directory'); ?>/submit.php",
            data: validateForm.serialize(),
            dataType: "json"
        }).done(function (body) {
            spinner.hide();
            var responseText = body.response.Message;
            if (body.response.StatusCode == "00") {
                swal({
                    title: "Successful!",
                    text: responseText,
                    type: "success"
                }, function(){
                    $('#valid-token').val(body.request.otp);
                    $('#valid-email').val(body.request.email);
                    $('#validated-token-form').submit();
                });
            } else {
                swal({
                    title: "Error!",
                    text: responseText,
                    type: "error"
                });
            }
        }).fail(function (response) {
            spinner.hide();
            swal({
                title: "Error!",
                type: "error"
            });
        })
    });
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>