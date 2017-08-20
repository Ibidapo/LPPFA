<?php /* Template Name: Socials */ ?>

<?php
$social_options = get_option('theme_social_options');
?>

<?php get_header(); ?>
<!-- Body and Main Content of page -->
<!-- Body and Main Content of page -->
<div class="container-fluid" style="padding-bottom:92px">
    <div class="row">
        <div class="col-12" style="background-color:rgb(220, 232, 255)">
            <div class="row" id="social">
                <div class="col-12 col-md-4 text-center">
                    <h1 class="mOff social-heading"> SOCIAL </h1>
                </div>
                <div class="col-12 col-md-8">
                    <ul class="nav nav-tabs nav-fill text-center f-height">
                        <li class="nav-item ">
                            <a class="nav-link active f-height" data-toggle="tab" href="#game"> <img class="social-tab" src=<?php echo get_bloginfo('template_directory'); ?>/images/g-pad.png alt=""> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link f-height" data-toggle="tab" href="#facebook">
                                <img class="social-tab" src=<?php echo get_bloginfo('template_directory'); ?>/images/facebook.png alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link f-height" data-toggle="tab" href="#insta"> <img class="social-tab" src=<?php echo get_bloginfo('template_directory'); ?>/images/instagram.png alt=""> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link f-height" data-toggle="tab" href="#twitter"><img class="social-tab" src=<?php echo get_bloginfo('template_directory'); ?>/images/twitter.png alt=""> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link f-height" data-toggle="tab" href="#lin"><img class="social-tab" src=<?php echo get_bloginfo('template_directory'); ?>/images/linkedin.png alt=""> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 social tab-content">
            <div class="tab-pane active social-pane game" id="game" role="tabpanel">
                <div class="row">
                    <div class="col-12 col-sm-8">
                        <div class=>
                            <div class="col-12 text-center">
                                <img class=img-fluid src="<?php echo get_bloginfo('template_directory'); ?>/images/livew.png" style="margin-top:15%" alt="">
                            </div>
                            <div class="col-sm-12" id=g-instruct>
                                <ul class="nav nav-tabs nav-fill text-center g-instruct">
                                    <li class="nav-item  ">
                                        <a class="nav-link active g-instruct" data-toggle="tab" href="#participate"> How to participate </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link  g-instruct" data-toggle="tab" href="#live">  The Live community </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a class="nav-link g-instruct one" data-toggle="tab" href="#leaderboard"> Leaderboards </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 tab-content text-center">
                                <div class="tab-pane active social-pane" id="participate" role="tabpanel" style="height:100px"> </div>
                                <div class="tab-pane social-pane" id="live" role="tabpanel" style="height:100px;background-color:blue"> </div>
                                <div class="tab-pane social-pane" id="leaderboard" role="tabpanel" style="height:100px;background-color:darkgrey"> </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-sm-4 text-center">
                        <img class=img-fluid src="<?php echo get_bloginfo('template_directory'); ?>/images/screen.png" id=phone alt="">
                    </div>
                </div>

            </div>

            <div class="tab-pane social-pane" id="facebook" role="tabpanel">
                <div class=row>
                    <div class="fb-page col-12 col-sm-6" data-href="https://www.facebook.com/iNspireleaership.productivity/" data-tabs="timeline,messages,events" data-width="700px" data-height="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/iNspireleaership.productivity/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/iNspireleaership.productivity/">iNspire Leadership</a>
                        </blockquote>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class=row>
                            <div class= col-12 style="padding:70px;top:62px;">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook-1.png" class='img-fluid'>
                            </div>
                            <h5 class="col-12 text-center" style="color:darkgrey; padding:16px">  Browse our timeline on facebook. Follow our page
                                to stay updated on our events, recent news and
                                peer 2 peer competitions!  </h5>
                            <div class="fb-like col-12 " data-href="https://www.facebook.com/leadwaypensure/" data-width="80px" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

                            <h5 class="col-12 text-center" style="color:darkgrey; padding: 16px">  Browse our timeline on facebook. Follow our page
                                to stay updated on our events, recent news and
                                peer 2 peer competitions!  </h5>
                            <div class="fb-like col-12 text-center" data-href="https://www.facebook.com/leadwaypensure/" data-width="80px" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane social-pane text-center" id="insta" role="tabpanel">
                <div class="row">
                    <div class="col-12">
                        <img src=<?php echo get_bloginfo('template_directory'); ?>/images/insta.gif alt="" class="social-img" style="padding:10px">
                        <h5 style="color:darkgrey"> Hi there, you too can follow our story. Review our timeline below to get started!  </h5>
                        <hr class="social-strip">
                    </div>
                </div>
                <div class=social-feed id=instafeed > </div>
            </div>
            <div class="tab-pane text-center social-pane" id="twitter" role="tabpanel">
                <div class="col-12">
                    <img src=<?php echo get_bloginfo('template_directory'); ?>/images/twit.png alt="" class="social-img" style="padding:10px">
                    <h5 style="color:darkgrey"> Hi there, you too can follow our story. Review our timeline below to get started!  </h5>
                    <a class="twitter-follow-button text-center" href="https://twitter.com/LeadwayPensure">
                        Follow @LeadwayPensurePFA</a>
                    <hr class="social-strip">
                </div>
                <div class=social-feed id=twitfeed>
                    <a class="twitter-grid" data-lang="en" data-limit="9" data-partner="tweetdeck" href="https://twitter.com/OAOD_iNspire/timelines/894512301486870529">leadway test </a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
            <div class="tab-pane social-pane" id="lin" role="tabpanel">
                <script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                <script type="IN/FollowCompany" data-id="7110418" data-counter="top"></script>
                <script type="IN/CompanyProfile" data-id="7110418" data-format="inline" data-related="false"></script>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/instafeed.min.js"></script>
<script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        userId: '5841177351',
        accessToken: '5841177351.1677ed0.1de19abc5aad4ec69d45cf394c997311',
        clientId: 'fbc60c6a8fc5453caaafd62d806b23ed',
        resolution: 'low_resolution'

    });
    feed.run();
</script>
<script src="http://s7.addthis.com/js/300/addthis_widget.js" type="text/javascript"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59878ab10d303b8d"></script>

</body>
</html>