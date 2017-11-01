<?php /* Template Name: Blog */ ?>

<?php
$options = get_option('theme_options');
$social_options = get_option('theme_social_options');

$investment_series = get_posts(['category' => 6, 'numberposts' => 7]);
$firstInvNews = ($firstInvNewsArr = array_splice($investment_series, 0,1)) ? $firstInvNewsArr[0] : false;

$comics = get_posts(['category' => 7, 'numberposts' => 7]);
$firstComNews = ($firstComNewsArr = array_splice($comics, 0,1)) ? $firstComNewsArr[0] : false;

$videos = get_posts(['category' => 8, 'numberposts' => 7]);
$firstVidNews = ($firstVidNewsArr = array_splice($videos, 0,1)) ? $firstVidNewsArr[0] : false;

$career_tips = get_posts(['category' => 7, 'numberposts' => 7]);
$firstCTNews = ($firstCTNewsArr = array_splice($career_tips, 0,1)) ? $firstCTNewsArr[0] : false;

$recent_releases = get_posts(['numberposts' => 3]);
$latest_news = get_posts(['category' => 2, 'numberposts' => 3]);
?>

<?php get_header(); ?>

<style>
.seriesCap {
    position: absolute;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    right: 0;
    padding: 10px;
    color: #fff;
    top: 77%;
}

.seriesCap p {
    color: #fff;
}

#series1 span.badge {
    left: 83%;
    top: 2%;
    background: #000;
    font-weight: 800;
}
</style>
<!-- Desktop navigation -->
<nav class="navbar fixed-top hidden-md-down pOff">
    
    <!-- chart header -->
    <?php include_once('partials/chart-table.php') ?>

    <!-- Navbar -->
    <div class="navBlog">
        <div class="col-md-12">
            <ul class="hidden-sm-down nav nav-fill nav-tabs" id="blogTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#blogHome" role="tab">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#articles" role="tab"> Articles </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#comic" role="tab">Comic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#blogVids" role="tab">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#careerTip" role="tab">Career Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" height="80"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Body and Main Content of page -->
<div class="container" id="blogPage">
    <!-- Mobile Blog tab selection -->
    <div class="row hidden-lg-up">
        <div class="col-12 m-blogTab">
            <form class="mx-auto">
                <div class="form-group text-center">
                    <label class="text-center" for="m-blogTab">Our Blog</label>
                    <select class="form-control" id="m-blogTab" data-aos="fade">
                        <option value="0">Recent releases</option>
                        <option value="1">Articles</option>
                        <option value="2">Comic</option>
                        <option value="3">Videos</option>
                        <option value="4">Career Tips</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <!-- Main Content of Page -->
    <div class="row tab-content">
        <div class="tab-pane fade show active col-12" role="tabpanel" id="blogHome">
            <div class="row">
                <div class="col-md-7" id="series1">
                    <?php if ($firstInvNews) : $categories = get_the_category($firstInvNews->ID); ?>
                        <img src="<?= get_the_post_thumbnail_url($firstInvNews->ID); ?>"/>

                         <?php foreach($categories as $category): ?>
                            <!-- <span class="badge badge-primary">
                                <?= $category->name ?>
                            </span> -->
                        <?php endforeach ?> 

                        <div class="seriesCap">
                            <!-- <span class="cap-color">
                                Confident</span> because<br>my finances are<br><span class="cap-color">pensure
                            </span> -->
							<p><?= summary($firstInvNews->post_content, 100) ?></p>
                            
                            <a href="<?= get_permalink($firstInvNews) ?>" class="btn btn-primary">Learn more</a>
                        </div>
                    <?php endif ?>
                </div>
                <div class="col-md-5 otherSeries">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="hidden-md-down">Recent Releases</h5>
                            <h6 class="hidden-lg-up">Recent Releases</h6>
                        </div>
                        <? foreach ($recent_releases as $news) { ?>
                            <div class="col-11 col-md-12 mx-auto">
                                <div class="media">
                                    <img  class="d-flex align-self-center mr-3" src="<?= get_the_post_thumbnail_url($news->ID); ?>"
                                          alt="<?= $news->post_title ?>"/>
                                    <div class="media-body">
                                        <h6 class="mt-0"><?= $news->post_title ?></h6>
                                        <p>
                                            <?= get_the_excerpt($news) ?>
                                            <a href="<?= get_permalink($news) ?>">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
            <hr class="hr-red">
            <div class="row">
                <div class="col-12 col-md-6 align-self-center newsHeader">
                    <h1>LATEST NEWS</h1>
                </div>
                <div class="col-12 col-md-6 newsFeed">
                    <ul class="list-unstyled">
                        <?php foreach ($latest_news as $news) { ?>
                            <li class="media">
                                <img class="d-flex align-self-center mr-3"
                                     src="<?= get_the_post_thumbnail_url($news->ID); ?>" alt="<?= $news->post_title ?>" height="50">

                                <div class="media-body">
                                    <h5 class="mt-0"><?= $news->post_title ?></h5>

                                    <p>
                                        <?= summary($news->post_content, 150) ?>
                                        <a href="<?= get_permalink($news) ?>">Read more</a>
                                    </p>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <hr class="hr-red">
            <div class="row">
                <div class="col-md-4 blog-com">
                    <div class="blogCap">
                        <h3>Comics</h3>
                        <p>Loosen up! Read our latest releases across all titles here.</p>
                    </div>
                </div>
                <div class="col-md-4 blog-vid">
                    <div class="blogCap">
                        <h3>Video</h3>
                        <p>Catch up on recent financial stories, tips and comical content.</p>
                    </div>
                </div>
                <div class="col-md-4 blog-tip">
                    <div class="blogCap">
                        <h3>Career Tips</h3>
                        <p>Take your career to the next level with tips on workplace etiquettes and more.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="articles">
            <?php if ($firstInvNews) : $categories = get_the_category($firstInvNews->ID); ?>
                <div class="row topSeries">
                    <div class="col-12 col-md-5 col-lg-6 story-pic">
                        <img src="<?= get_the_post_thumbnail_url($firstInvNews->ID); ?>">
                    </div>
                    <div class="col-12 col-md-7 col-lg-6 story">
                            <h3 class="hidden-md-down text-right"><span class="badge badge-primary">Articles</span></h3>
                            <h5 class="hidden-lg-up text-right"><span class="badge badge-primary">Articles</span></h5>

                        <span class="news-date">
                            <?= date ( "F j, Y", strtotime($firstInvNews->post_date) ) ?>
                        </span>
                        <h5><?= $firstInvNews->post_title ?></h5>
                        <p><?= summary($firstInvNews->post_content, 100) ?></p>
                        <span>
							<a href="<?= $social_options['facebook'] ?>"><img src="<?= asset() ?>/images/facebook.png"></a>
							<a href="<?= $social_options['twitter'] ?>"><img src="<?= asset() ?>/images/twitter.png"></a>
						</span>
                        <span class="float-right link">&rarr; <a href="<?= get_permalink($firstInvNews) ?>">Read More</a></span>
                    </div>
                </div>
            <?php endif ?>
            <div class="row recent">
                <div class="col-12">
                    <h2>Recent releases</h2>
                </div>
                <? foreach ($career_tips as $news) { $categories = get_the_category($news->ID); ?>
                    <div class="offset-1 col-10 offset-sm-0 col-sm-6 col-md-4">
                            <span class="badge badge-success">Articles</span>

                        <span class="news-date">
                            <?= date ( "F j, Y", strtotime($news->post_date) ) ?>
                        </span>
                        <a href="<?= get_permalink($news) ?>">
                            <figure>
                                <img src="<?= get_the_post_thumbnail_url($news->ID); ?>" alt="<?= $news->post_title ?>"/>
                                <figcaption>
                                    <h5>
                                        <?= $news->post_title ?>
                                    </h5>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                <? } ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="comic">
            <?php if ($firstComNews) : $categories = get_the_category($firstComNews->ID); ?>
                <div class="row topSeries">
                    <div class="col-12 col-md-5 col-lg-6 story-pic">
                        <img src="<?= get_the_post_thumbnail_url($firstComNews->ID); ?>">
                    </div>
                    <div class="col-12 col-md-7 col-lg-6 story">
                        <?php foreach($categories as $category): ?>
                            <h3 class="hidden-md-down text-right"><span class="badge badge-primary"><?= $category->name ?></span></h3>
                            <h5 class="hidden-lg-up text-right"><span class="badge badge-primary"><?= $category->name ?></span></h5>
                        <?php endforeach ?>

                        <span class="news-date">
                            <?= date ( "F j, Y", strtotime($firstComNews->post_date) ) ?>
                        </span>
                        <h5><?= $firstComNews->post_title ?></h5>
                        <p><?= summary($firstComNews->post_content, 100) ?></p>
                        <span>
							<a href="<?= $social_options['facebook'] ?>"><img src="<?= asset() ?>/images/facebook.png"></a>
							<a href="<?= $social_options['twitter'] ?>"><img src="<?= asset() ?>/images/twitter.png"></a>
						</span>
                        <span class="float-right link">&rarr; <a href="<?= get_permalink($firstComNews) ?>">Read More</a></span>
                    </div>
                </div>
            <?php endif ?>
            <div class="row recent">
                <div class="col-12">
                    <h2>Recent releases</h2>
                </div>
                <? foreach ($comics as $news) { $categories = get_the_category($news->ID); ?>
                    <div class="offset-1 col-10 offset-sm-0 col-sm-6 col-md-4">
                        <?php foreach($categories as $category): ?>
                            <span class="badge badge-success"><?= $category->name ?></span>
                        <?php endforeach ?>

                        <span class="news-date">
                            <?= date ( "F j, Y", strtotime($news->post_date) ) ?>
                        </span>
                        <a href="<?= get_permalink($news) ?>">
                            <figure>
                                <img src="<?= get_the_post_thumbnail_url($news->ID); ?>" alt="<?= $news->post_title ?>"/>
                                <figcaption>
                                    <h5>
                                        <?= $news->post_title ?>
                                    </h5>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                <? } ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="blogVids">
            <?php if ($firstVidNews) : $categories = get_the_category($firstVidNews->ID); ?>
                <div class="row topSeries">
                    <div class="col-12 col-md-5 col-lg-6 story-pic">
                        <img src="<?= get_the_post_thumbnail_url($firstVidNews->ID); ?>">
                    </div>
                    <div class="col-12 col-md-7 col-lg-6 story">
                        <?php foreach($categories as $category): ?>
                            <h3 class="hidden-md-down text-right"><span class="badge badge-primary"><?= $category->name ?></span></h3>
                            <h5 class="hidden-lg-up text-right"><span class="badge badge-primary"><?= $category->name ?></span></h5>
                        <?php endforeach ?>

                        <span class="news-date">
                            <?= date ( "F j, Y", strtotime($firstVidNews->post_date) ) ?>
                        </span>
                        <h5><?= $firstVidNews->post_title ?></h5>
                        <p><?= summary($firstVidNews->post_content, 100) ?></p>
                        <span>
							<a href="<?= $social_options['facebook'] ?>"><img src="<?= asset() ?>/images/facebook.png"></a>
							<a href="<?= $social_options['twitter'] ?>"><img src="<?= asset() ?>/images/twitter.png"></a>
						</span>
                        <span class="float-right link">&rarr; <a href="<?= get_permalink($firstVidNews) ?>">Read More</a></span>
                    </div>
                </div>
            <?php endif ?>
            <div class="row recent">
                <div class="col-12">
                    <h2>Recent releases</h2>
                </div>
                <? foreach ($videos as $news) { $categories = get_the_category($news->ID); ?>
                    <div class="offset-1 col-10 offset-sm-0 col-sm-6 col-md-4">
                        <?php foreach($categories as $category): ?>
                            <span class="badge badge-success"><?= $category->name ?></span>
                        <?php endforeach ?>

                        <span class="news-date">
                            <?= date ( "F j, Y", strtotime($news->post_date) ) ?>
                        </span>
                        <a href="<?= get_permalink($news) ?>">
                            <figure>
                                <img src="<?= get_the_post_thumbnail_url($news->ID); ?>" alt="<?= $news->post_title ?>"/>
                                <figcaption>
                                    <h5>
                                        <?= $news->post_title ?>
                                    </h5>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                <? } ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="careerTip">
            <?php if ($firstCTNews) : $categories = get_the_category($firstCTNews->ID); ?>
                <div class="row topSeries">
                    <div class="col-12 col-md-5 col-lg-6 story-pic">
                        <img src="<?= get_the_post_thumbnail_url($firstCTNews->ID); ?>">
                    </div>
                    <div class="col-12 col-md-7 col-lg-6 story">
                        <?php foreach($categories as $category): ?>
                            <h3 class="hidden-md-down text-right"><span class="badge badge-primary"><?= $category->name ?></span></h3>
                            <h5 class="hidden-lg-up text-right"><span class="badge badge-primary"><?= $category->name ?></span></h5>
                        <?php endforeach ?>

                        <span class="news-date">
                            <?= date ( "F j, Y", strtotime($firstCTNews->post_date) ) ?>
                        </span>
                        <h5><?= $firstCTNews->post_title ?></h5>
                        <p><?= summary($firstCTNews->post_content, 100) ?></p>
                        <span>
							<a href="<?= $social_options['facebook'] ?>"><img src="<?= asset() ?>/images/facebook.png"></a>
							<a href="<?= $social_options['twitter'] ?>"><img src="<?= asset() ?>/images/twitter.png"></a>
						</span>
                        <span class="float-right link">&rarr; <a href="<?= get_permalink($firstCTNews) ?>">Read More</a></span>
                    </div>
                </div>
            <?php endif ?>
            <div class="row recent">
                <div class="col-12">
                    <h2>Recent releases</h2>
                </div>
                <? foreach ($career_tips as $news) { $categories = get_the_category($news->ID); ?>
                    <div class="offset-1 col-10 offset-sm-0 col-sm-6 col-md-4">
                        <?php foreach($categories as $category): ?>
                            <span class="badge badge-success"><?= $category->name ?></span>
                        <?php endforeach ?>

                        <span class="news-date">
                            <?= date ( "F j, Y", strtotime($news->post_date) ) ?>
                        </span>
                        <a href="<?= get_permalink($news) ?>">
                            <figure>
                                <img src="<?= get_the_post_thumbnail_url($news->ID); ?>" alt="<?= $news->post_title ?>"/>
                                <figcaption>
                                    <h5>
                                        <?= $news->post_title ?>
                                    </h5>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="hidden-sm-down text-center">Join the Conversation</h2>
            <h4 class="hidden-md-up text-center">Join the Conversation</h4>
        </div>
        <div class="col-md-4">

            <div class="fb-page" style="padding: 0" data-href="<?= $social_options['facebook'] ?>"
                 data-tabs="timeline,messages,events" data-width="700px" data-height="500px"
                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                 data-show-facepile="true">
                <blockquote cite="<?= $social_options['facebook'] ?>"
                            class="fb-xfbml-parse-ignore">
                    <a href="<?= $social_options['facebook'] ?>">Leadway Pensure</a>
                </blockquote>
            </div>

        </div>
        <!-- <div class="col-md-4">
            <div class=social-feed id=instafeed > </div>
		</div> -->
        <div class="col-md-4" id=twitfeed>
			<a class="twitter-timeline" href="https://twitter.com/LeadwayPensure?ref_src=twsrc%5Etfw" data-tweet-limit="10">Tweets by Leadway Pensure</a> 
			<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="col-md-4">
            <script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
            <script type="IN/FollowCompany" data-id="7110418" data-counter="top"></script>
            <script type="IN/CompanyProfile" data-id="7110418" data-format="inline" data-related="false"></script>
        </div>

    </div>
</div>
<a href="javascript:void(Tawk_API.toggle())" style="padding-left: 15px;" class="hidden-md-down" id="chat-icon"><img src="https://www.leadway-pensure.com/wp-content/uploads/2017/09/chat-icon.png"></a>

<footer class="container" id="blog-Ft">
    <div class="row">
        <div class="col-12 col-md-4 align-self-center text-center text-md-left">
            <a href="https://www.facebook.com/leadwaypensure/"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook.png"></a>
            <!-- <a href=""><img src="<?php echo get_bloginfo('template_directory'); ?>/images/instagram.png"></a> -->
            <a href="https://twitter.com/LeadwayPensure"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/twitter.png"></a>
            <a href="http://www.linkedin.com/company/leadway-pensure-pfa-limited?trk=cws-cpw-coname-0-0"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/linkedin.png"></a>
        </div>
        <div class="col-12 col-md-4 align-self-center text-center">&copy; Leadway Pensure 2017</div>
    </div>
    <a  href="javascript:window.print()" data-toggle="tooltip" title="Print" data-placement="left" id="print"><i class="fa fa-print" aria-hidden="true"></i></a>
    <a href="javascript:" data-toggle="tooltip" title="Back to Top" data-placement="left" id="back-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</footer>
<?php get_footer(); ?>
<script>
    $(document).ready(function(){
        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            $(".container").attr("class", "container-fluid");
        }

        $('#blogTab a[href="'+ window.location.hash+ '"]').tab('show'); // Select tab by name if provided in location hash

        $("#m-blogTab").change(function (){
            var i = $(this).val();

            if(i == 0){
                $('a[href="#blogHome"]').tab('show');
            }else if(i == 1){
                $('a[href="#articles"]').tab('show');
            }else if(i == 2) {
                $('a[href="#comic"]').tab('show');
            }else if(i == 3) {
                $('a[href="#blogVids"]').tab('show');
            }else if(i == 4) {
                $('a[href="#careerTip"]').tab('show');
            }
        });

        $('.blog-com').click(function(){
            $('a[href="#comic"]').tab('show');
        });

        $('.blog-vid').click(function(){
            $('a[href="#blogVids"]').tab('show');
        });

        $('.blog-tip').click(function(){
            $('a[href="#careerTip"]').tab('show');
        });
    });
</script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/instafeed.min.js"></script>
<!-- <script type="text/javascript">
    var feed = new Instafeed({
        get: 'user',
        userId: '5841177351',
        accessToken: '5841177351.1677ed0.1de19abc5aad4ec69d45cf394c997311',
        clientId: 'fbc60c6a8fc5453caaafd62d806b23ed',
        resolution: 'thumbnail'

    });
    feed.run();
</script> -->

</body>
</html>