<!-- Footer of page -->
<footer class="container-fluid">
    <hr class="hr-red">
    <div class="row">
        <div class="col-12 col-md-6 align-self-center newsHeader">
            <h1>LATEST NEWS</h1>
        </div>
        <div class="col-12 col-md-6 newsFeed">
            <ul class="list-unstyled">
                <li class="media">
                    <img class="d-flex align-self-center mr-3"
                         src="<?php echo get_bloginfo('template_directory'); ?>/images/vas.png" alt="" height=50
                         width=50>

                    <div class="media-body">
                        <h5 class="mt-0">Leadway unveils value added services</h5>

                        <p>Following our masterplan to becoma a consumer oriented brand we have implemented... <a
                                href="#">Read more</a></p>
                    </div>
                </li>
                <li class="media">
                    <img class="d-flex align-self-center mr-3"
                         src="<?php echo get_bloginfo('template_directory'); ?>/images/vas.png" alt="" height=50
                         width=50>

                    <div class="media-body">
                        <h5 class="mt-0">Leadway unveils value added services</h5>

                        <p>Following our masterplan to becoma a consumer oriented brand we have implemented... <a
                                href="#">Read more</a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px">
        <a class="col-12 col-md-6 btn-red" data-toggle="collapse" href="#sign" aria-expanded="false"
           aria-controls="sign">Sign-Up for News Letter</a>
        <a class="col-12 col-md-6 btn-red" data-toggle="collapse" data-target="#feed" aria-expanded="false"
           aria-controls="feed">Give us your Feedback</a>
    </div>
    <div class="row justify-content-around" style="margin-bottom: 10px">
        <div class="col-12 col-md-4 collapse" id="sign">
            <form>
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" placeholder="E-mail Address" required>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-outline-red btn-sm">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-4 collapse" id="feed">
            <form>
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" placeholder="E-mail Address" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control form-control-sm" rows="3" cols="inherit"
                              placeholder="Please write here" required></textarea>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-outline-red btn-sm">Post Feedback</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12 col-md-6 col-lg-3">
            <h6>Regulatory Requirements</h6>
            <nav class="nav flex-column">
                <a class="nav-link active" href="#">Regulatory Information</a>
                <a class="nav-link" href="#">Pension Reform Act</a>
                <a class="nav-link" href="#"> Whistle Blowing</a>
                <a class="nav-link" href="#">Code of Ethics and Conduct</a>
                <a class="nav-link" href="#">Retired and Terminal Benefits</a>
            </nav>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <h6>Quick Links</h6>
            <nav class="nav flex-column">
                <a class="nav-link active" href="#">Blog</a>
                <a class="nav-link" href="#">Enroll Now</a>
                <a class="nav-link" href="#">Benefits</a>
                <a class="nav-link" href="#">Our Philosophy</a>
                <a class="nav-link" href="#">Branch Network</a>
            </nav>
        </div>
        <div class="col-12 col-md-6 col-lg-3 app">
            <h6>Our Mobile App</h6>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/hand.png" alt="">
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <h6> Our Game Board</h6>
            <table class="table table-striped text-left mx-auto">
                <thead>
                <tr>
                    <th> #</th>
                    <th> Name</th>
                    <th> Score</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1.</th>
                    <td> Ayo Thomas</td>
                    <td> 10,000</td>
                </tr>
                <tr>
                    <th>2.</th>
                    <td> Kemi Juba</td>
                    <td> 9,432</td>
                </tr>
                <tr>
                    <th>3.</th>
                    <td> Chinenye Dike</td>
                    <td> 9,010</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul class="nav justify-content-center" style="margin-top: 15px">
                <li class="nav-item">
                    <a class="nav-link" href="#">Site Map</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Legal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terms & Conditions</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row signature">
        <div class="col-12 col-md-4 align-self-center text-center "><img
                src="<?php echo get_bloginfo('template_directory'); ?>/images/pencom.png" height="90" width="90"
                alt=""/></div>
        <div class="col-12 col-md-4 align-self-center text-center">&copy; Leadway Pensure 2017</div>
        <div class="col-12 col-md-4 align-self-center text-center">Web Design & Digital by iNspire</div>
    </div>
    <a id="share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
    <a id="print"><i class="fa fa-print" aria-hidden="true"></i></a>
    <a href="javascript:" id="back-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</footer>
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
<script src="<?php echo get_bloginfo('template_directory'); ?>/owlcarousel/owl.carousel.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/595a40d350fd5105d0c83b06/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/index.js"></script>
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
            default:
                document.write("Not working");
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
<?php wp_footer(); ?>
</body>
</html>