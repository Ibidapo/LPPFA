<?php /* Template Name: News */ ?>

<?php
$featured_news = get_field("featured_posts");
$recent_news = get_posts(['category' => 2, 'numberposts' => 3]);
?>

<?php get_header(); ?>
<!-- Body and Main Content of Page -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 news-bg">
            <h1 class="text-center">What's New!</h1>

            <div class="row">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="news1">

                    </div>
                </div>
                <div class=" col-12 col-md-7 col-lg-8">
                    <div class="row other-news">
                        <?php foreach ($featured_news as $key => $news) { ?>
                            <div class="col-12 col-lg-6 <?= $key > 1 ? "hidden-md-down" : "" ?>">
                                <div class="media">
                                    <img class="d-flex align-self-center mr-3" src="<?= get_the_post_thumbnail_url($news->ID); ?>"
                                         alt="leadway Pensure News"/>

                                    <div class="media-body">
                                        <h6 class="mt-0"><?= $news->post_title ?></h6>

                                        <p>
                                            <?= summary($news->post_content, 100) ?>
                                            <a href="<?= get_permalink($news) ?>">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 news-sub">
                    <p class="text-center"><?= get_field("subscribe_text")?></p>

                    <form class="form-inline">
                        <div class="form-group mx-auto text-center">
                            <input type="text" class="form-control" placeholder="E-mail">
                            <a class="btn btn-outline-purple" role="button" type="submit">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 news-tab">
                    <ul class="hidden-sm-down nav nav-fill nav-tabs" id="newsTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#m-news" role="tab"> Recent Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#gall" role="tab"> Gallery </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#cald" role="tab"> Calendar </a>
                        </li>
                    </ul>
                    <form class="hidden-md-up mx-auto">
                        <div class="form-group text-center">
                            <select class="form-control" id="m-newsTab" data-aos="fade">
                                <option value="0">Recent Stories</option>
                                <option value="1">Gallery</option>
                                <option value="2">Calender</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row tab-content">
        <div class="tab-pane fade col-12 active show" role="tabpanel" id="m-news" aria-expanded="true">
            <div class="row">
                <?php foreach ($recent_news as $key => $news) { ?>
                    <div class="col-12">
                        <div class="media">
                            <img class="d-flex align-self-center" src="<?= get_the_post_thumbnail_url($news->ID); ?>" alt="leadway Pensure News"/>

                            <div class="media-body">
                                <h4 class="mt-0"><?= $news->post_title ?></h4>

                                <p>
                                    <?= summary($news->post_content, 100) ?>
                                    <a href="<?= get_permalink($news) ?>">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="gall" aria-expanded="false">
            <h1 class="text-center">Gallery Coming Soon!</h1>
        </div>
        <div class="tab-pane fade col-12 text-center" role="tabpanel" id="cald" aria-expanded="false">
            <h1 class="text-center">Calendar Coming Soon!</h1>
        </div>
    </div>
</div>

<?php get_footer(); ?>

</body>
</html>