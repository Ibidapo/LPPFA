<?php /* Template Name: Login */ ?>

<?php

?>

<?php get_header(); ?>
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
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/images/login-grad.png"  alt="LPPFA Login slide1"/>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/images/login-emp.png"  alt="LPPFA Login slide2"/>
                        </div>
                    </div>
                </div>
                <div class="text-center" id="adButton"><a class="btn btn-outline-white" href="/">Learn more</a></div>
            </div>
            <div class="login-ad">We celebrate every client!</div>
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