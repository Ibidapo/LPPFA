<?php if (
!is_page_template("template_blog.php")
):
    $recent_news = get_posts(['category' => 2, 'numberposts' => 3]);
    include_once 'mail/feedback.php';
    ?>
	
<?php 

?>

    <!-- Footer of page -->
    <footer class="container-fluid">
        <hr class="hr-red">
        <div class="row">
            <div class="col-12 col-md-6 align-self-center newsHeader">
                <h1>LATEST NEWS</h1>
            </div>
            <div class="col-12 col-md-6 newsFeed">
                <ul class="list-unstyled">
                    <?php foreach ($recent_news as $news) { ?>
                        <li class="media">
                            <img class="d-flex align-self-center mr-3"
                                 src="<?= get_the_post_thumbnail_url($news->ID); ?>" alt="<?= $news->post_title ?>"
                                 height="50">

                            <div class="media-body">
                                <h5 class="mt-0"><?= $news->post_title ?></h5>

                                <p>
                                    <?= summary($news->post_content, 100) ?>
                                    <a href="<?= get_permalink($news) ?>">Read more</a>
                                </p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <a class="col-12 col-md-6 btn-red" data-toggle="collapse" href="#sign" aria-expanded="false"
               aria-controls="sign">Sign-Up for News Letter</a>
            <a class="col-12 col-md-6 btn-red" data-toggle="collapse" data-target="#feed" aria-expanded="false"
               aria-controls="feed">Give us your Feedback</a>
        </div>
        <div class="row justify-content-around" style="margin-bottom: 10px">
            <div class="col-sm-10 col-md-4 collapse" id="sign">
                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup" class="text-center">
                    <form
                        action="//leadway-pensure.us10.list-manage.com/subscribe/post?u=a7d286c921166498a0b699255&amp;id=c1b945e29f"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                        target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll" class="text-center">
                            <h5 style="color:#1d69a6"> Subscribe and receive the Leading digest monthly! </h5>

                            <div class="mc-field-group">
                                <input type="text" value="" name="FNAME" class="required chimp text-center"
                                       id="mce-FNAME" placeholder="First Name">
                            </div>
                            <div class="mc-field-group">
                                <input type="email" value="" name="EMAIL" class="required email chimp text-center"
                                       id="mce-EMAIL" placeholder="E-mail Address">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                                                                      name="b_a7d286c921166498a0b699255_c1b945e29f"
                                                                                                      tabindex="-1"
                                                                                                      value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe Today" name="subscribe"
                                                      id="mc-embedded-subscribe"
                                                      class="btn btn-outline-red btn-sm news-button"></div>
                        </div>
                    </form>
                </div>
                <!--End mc_embed_signup-->
            </div>
            <div class="col-sm-10 col-md-4 collapse" id="feed">
                <h5 class="text-center"> We'd love to hear from you </h5>

                <form action="<?php the_permalink(); ?>" method="post">
                    <div class="form-group">
                        <input name="email" class="form-control form-control-sm text-center" type="email"
                               placeholder="E-mail Address" id="feed-email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="feedback" class="form-control form-control-sm text-center" rows="3"
                                  cols="inherit" placeholder="Please write here" id="feedtext" required></textarea>
                    </div>
                    <div class="text-center">
						<button type="submit" class="btn btn-outline-red btn-sm" id="footerForm">Post feedback</button>
						<!-- <button type="submit" class="btn btn-outline-red btn-sm g-recaptcha" data-sitekey="6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7"
						data-callback="feedbackSubmit">Post feedback</button> -->
					</div>
                    <input type="hidden" name="submitted" value="1">
                </form>
            </div>
        </div>
        <div class="row text-center">
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <?php if (is_active_sidebar("footer_column_$i")) : ?>
                    <div class="col-12 col-md-6 col-lg-3 <?= $i == 3 ? 'app' : '' ?>">
                        <?php strip_tags(dynamic_sidebar("footer_column_$i")) ?>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center" style="margin-top: 15px">
                    <li class="nav-item">
                        <a class="nav-link" href="/sitemap">Site Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/privacy">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/terms">Terms & Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row signature">
            <div class="col-12 col-md-4 align-self-center text-center "><img
                    src="<?php echo get_bloginfo('template_directory'); ?>/images/pencom.png" height="90" width="90"
                    alt=""/></div>
            <div class="col-12 col-md-4 align-self-center text-center">&copy; Leadway Pensure 2017</div>
           <!-- <div class="col-12 col-md-4 align-self-center text-center">Web Design & Digital by iNspire</div> -->
        </div>
        <a href="javascript:window.print()" data-toggle="tooltip" title="Print" data-placement="left" id="print"><i class="fa fa-print" aria-hidden="true"></i></a>
        <a href="javascript:" data-toggle="tooltip" title="Back to Top" data-placement="left" id="back-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
		<a href="javascript:void(Tawk_API.toggle())" class="hidden-md-down" id="chat-icon"><img src="https://www.leadway-pensure.com/wp-content/uploads/2017/09/chat-icon.png"/></a>
    </footer> 
<?php endif ?>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59c24bec4854b82732ff1144/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ha,ig,yo', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script src="<?php echo get_bloginfo('template_directory'); ?>/owlcarousel/owl.carousel.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/sweetalert/sweetalert.min.js"></script>

<?php if (
	!is_page_template("template_token.php") && !is_page_template("template_career.php") && !is_page_template("template_company.php")
): ?>
	<!-- Footer reCAPTCHA function -->
	<script type="text/javascript">
		var validateFooter = function() {
			
			var emailVal = $('#feed-email').val();
			var isValid = true;
			var emailExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
			if (!emailExp.test(emailVal)){
				$('#feed-email').css({"background": "#FFCECE"}).attr({"placeholder":"Invalid E-mail address", "value" : ""});
				alert("Invalid email!");
				isValid = false;
			} else {
				$('#feed-email').css({"background": ""});
				alert("Valid email!");
			}
			
			if ($.trim($('#feedtext').val()) == '' ){
				$('#feedtext').css({"background": "#FFCECE"}).attr({"placeholder":"Feedback cannot be empty", "value" : ""});
				isValid = false;
			} else {
				$('#feedtext').css({"background": ""});
			}
			
			if (isValid == false) {
				grecaptcha.reset(); 
			} else {
				return (true);
			}
		}
	
		var onloadFeedback = function() {
			grecaptcha.render('footerForm', {'sitekey' : '6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7', 'callback' : validateFooter});
		};
	</script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadFeedback&render=explicit" async defer></script>
<? endif ?>

<?php if (
	is_page_template("template_career.php")
): ?>
	<!-- Footer & Career reCAPTCHA function -->
	<script type="text/javascript">
		var validateFooter = function() {
			
			var emailVal = $('#feed-email').val();
			var isValid = true;
			var emailExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
			if (!emailExp.test(emailVal)){
				$('#feed-email').css({"background": "#FFCECE"}).attr({"placeholder":"Invalid E-mail address", "value" : ""});
				isValid = false;
			} else {
				$('#feed-email').css({"background": ""});    
			}
			
			if ($.trim($('#feedtext').val()) == '' ){
				$('#feedtext').css({"background": "#FFCECE"}).attr({"placeholder":"Feedback cannot be empty", "value" : ""});
				isValid = false;
			} else {
				$('#feedtext').css({"background": ""});
			}
			
			if (isValid == false) {
				grecaptcha.reset(); 
			}
		}
		
		var onloadFeedback = function() {
			grecaptcha.render('footerForm', {'sitekey' : '6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7', 'callback' : validateFooter});
			grecaptcha.render('submitCV', {'sitekey' : '6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7'});
		};
	</script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadFeedback&render=explicit" async defer></script>
<? endif ?>

<?php if (
	is_page_template("template_company.php")
): ?>
	<!-- Footer & Company reCAPTCHA function -->
	<script type="text/javascript">
		var validateFooter = function() {
			
			var emailVal = $('#feed-email').val();
			var isValid = true;
			var emailExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
			if (!emailExp.test(emailVal)){
				$('#feed-email').css({"background": "#FFCECE"}).attr({"placeholder":"Invalid E-mail address", "value" : ""});
				alert("Invalid email!");
				isValid = false;
			} else {
				$('#feed-email').css({"background": ""});
				alert("Valid email!");
			}
			
			if ($.trim($('#feedtext').val()) == '' ){
				$('#feedtext').css({"background": "#FFCECE"}).attr({"placeholder":"Feedback cannot be empty", "value" : ""});
				isValid = false;
			} else {
				$('#feedtext').css({"background": ""});
			}
			
			if (isValid == false) {
				grecaptcha.reset(); 
			} else {
				return (true);
			}
		}
		
		var onloadFeedback = function() {
			grecaptcha.render('footerForm', {'sitekey' : '6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7', 'callback' : validateFooter});
			grecaptcha.render('compForm', {'sitekey' : '6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7'});
		};
	</script>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadFeedback&render=explicit" async defer></script>
<? endif ?>

<?php if(!empty($response)):?>
    <script>
        swal({
            title: "<?= ucfirst(array_get($response, 'type', 'error')); ?>!",
            text: "<?= array_get($response, 'message') ?>",
            type: "<?= array_get($response, 'type', 'error') ?>"
        });
    </script>
<?php endif ?>

<script src="<?php echo get_bloginfo('template_directory'); ?>/js/index.js"></script>

<?php wp_footer(); ?>
