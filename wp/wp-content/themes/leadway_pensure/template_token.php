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
        0%, 100% { -webkit-transform: scale(0.0) }
        50% { -webkit-transform: scale(1.0) }
    }

    @keyframes sk-bounce {
        0%, 100% {
            transform: scale(0.0);
            -webkit-transform: scale(0.0);
        } 50% {
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
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" alt="" class="img-fluid back-logo">
                                <figcaption class="back"> <i class="fa fa-arrow-left" aria-hidden="true"></i> back to Leadway-Pensure.com </figcaption>
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
                                Request token
                            </div>
                            <div class="col-5 col-sm-4 col-md-3 enroll-tab text-center" id="requ-tab" >
                                Requirements
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="r-token">
                            <h6 class="text-center form-pad mOff enroll-heading" style="color:white"> Fill out the form below to recieve your token instantly! </h6>
                            <form data-parsley-validate id="token-data">
                                <input type="hidden" name="formName" value="token-form"/>
                                <div class="row ">
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> First Name </label>
                                        <input name= firstname class="form-control e-fields text-center" type="text" placeholder="stark" required="" id='f-name'>
                                    </div>
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> Middle Name </label>
                                        <input name=middlename class="form-control e-fields text-center" type="text" placeholder="snow" required="" id='l-name'>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> Surname </label>
                                        <input name=surname class="form-control e-fields text-center" type="text" placeholder="John" data-parsley-minlength="11" data-parsley-maxlength="15" required="">
                                    </div>
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> Email </label>
                                        <input name=emailaddress class="form-control e-fields text-center" type="text" placeholder="Johnsnow@xxxxxxx" required="">
                                    </div>
                                </div>
<div class="row">
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        <label class="form-label"> Mobile no </label>
                                        <input name=mobileno class="form-control e-fields text-center" type="number" placeholder="080xxxxxxx" data-parsley-minlength="11" data-parsley-maxlength="15" required="">
                                    </div>
                                    <div class="col-12 col-sm-6 text-center form-pad">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center form-pad">

                                       <!-- <a href="enroll.html"> -->
                                        <input class="btn btn-purple validate" id="token-submit" type="submit" value="Get token">
                                        <div class="spinner">
                                            <div class="double-bounce1"></div>
                                            <div class="double-bounce2"></div>
                                        </div>
                                      <!--  </a> -->
                                    </div>
                                </div>
                            </form>
                        </div>
             <div id="requirement">
                <div class="requirementHolder">  
                            <h6 class="text-center"> 
                            You are opting to board the <span style="color:#"> Leading </span> team.</br> Below a re the requirements necessary to complete the process </h6>  
                               
                            <ol class="enrollmentRequirement text-center">
                             <li> Fill out your name, phone number, mobile no and email address to recieve token </li>
                             <li> Information on your Personal, Employment and next of Kin </li>
                             <li> White background passport (max size = 500kb) </li>                     
                     
                            </ol>  
                     </div> 
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-10 token-entry">
            <form data-parsley-validate method="POST" action="/enroll">
                <div class="row">
                    <div class="col-12 col-sm-4 email-field">
                        <input name="email" class="form-control e-fields" type="text" placeholder="Email-address" required="">
                    </div>
                    <div class="col-12 col-sm-4 token-field">
                        <input name="token" class="form-control e-fields"  type="text" placeholder="Token no" required="">
                    </div>
                    <div class="col-12 col-sm-3 text-center">
                        <input type=submit class="btn btn-purple" value="Enroll now" id="call-json">
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/progressbar.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/parsley.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/sweetalert/sweetalert.min.js"></script>

<script>
    $(document).ready(function() {
        $('#requ-tab').click(function() {
            $('#r-token').fadeOut(100,  function(){$('#requirement').fadeIn(200)});
        });

        $('#req-tab').click(function(){
            $('#requirement').fadeOut(100, function(){ $('#r-token').fadeIn(200)});
        });
    });


        function convertFormToJSON(form){

        var array =  jQuery(form).serializeArray();
        var json = {};

        json['clientID'] = '9dy8earw04r09wjefsdp90zsjs';
        jQuery.each(array, function(){ 
              json[this.name] = this.value || '' ;
        });
    return json;

    }

     //sample string generation block 

    $('#call-json').click(function(){
     
       var form = document.getElementById('token-data');
       var json= convertFormToJSON(form);
      
       console.log(JSON.stringify(json))
    });


    var form = $("#token-data");
    form.bind('submit', function (event) {

        event.preventDefault();

        var spinner = $(".spinner");
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
            } else {
                swal({
                    title: "Error!",
                    text: responseText,
                    type: "error"
                });
            }

            console.log(body);
        }).fail(function (body) {
            spinner.hide();
            console.log(body)
        })
    })
</script>

</body>
</html>