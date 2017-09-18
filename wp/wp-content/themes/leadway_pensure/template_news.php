<?php /* Template Name: News */ ?>

<?php
$featured_news = get_field("featured_posts");
$first_featured_news = array_splice($featured_news, 0, 1);
$recent_news = get_posts(['category' => 2, 'numberposts' => 3]);
?>
<style>
    body {
        color: black;
    }
</style>
<?php get_header(); ?>
<!-- Body and Main Content of Page -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 news-bg">
            <h1 class="text-center">What's New!</h1>

            <div class="row">
                <div class="col-12 col-sm-10 col-md-5 col-lg-4 mx-auto">
                    <?php if (isset($first_featured_news[0])): $categories = get_the_category($first_featured_news[0]->ID); ?>
                        <?php foreach ($categories as $category): ?>
                            <span class="badge badge-info"><?= $category->name ?></span>
                        <?php endforeach ?>
                        <div class="news1"
                             style="background-image: url(<?= get_the_post_thumbnail_url($first_featured_news[0]->ID); ?>)">
                            <div class="news1-txt">
                                <p><?= $first_featured_news[0]->post_title ?></p>
                                <a href="<?= get_permalink($first_featured_news[0]) ?>" class="btn btn-primary">Learn
                                    more</a>
                            </div>
                        </div>
                        <span class="news-date">
                            <?= date("F j, Y", strtotime($first_featured_news[0]->post_date)) ?>
                        </span>
                    <? endif ?>
                </div>
                <div class=" col-12 col-md-7 col-lg-8">
                    <div class="row other-news">
                        <?php foreach ($featured_news as $key => $news) { ?>
                            <div class="col-12 col-lg-6 <?= $key > 1 ? "hidden-md-down" : "" ?>">
                                <div class="media">
                                    <img class="d-flex align-self-center mr-3"
                                         src="<?= get_the_post_thumbnail_url($news->ID); ?>"
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
                <div class="col-md-12 news-tab">
                    <ul class="hidden-sm-down nav nav-fill nav-tabs" id="newsTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#m-news" role="tab">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/news.png"/> Recent
                                Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#gall" role="tab">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/gallery.png"/>
                                Gallery</a>
                        </li>
                    </ul>
                    <form class="hidden-md-up mx-auto">
                        <div class="form-group text-center">
                            <select class="form-control" id="m-newsTab" data-aos="fade">
                                <option value="0">Recent Stories</option>
                                <option value="1">Gallery</option>
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
            <div class="row recent">
                <div class="col-12">
                    <h2>Recent releases</h2>
                </div>
                <?php foreach ($recent_news as $key => $news) { ?>
                    <div class="col-10 col-sm-6 col-md-4 mx-auto">
                        <span class="badge badge-info">News & Events</span>
                        <span class="news-date">
                            <?= date("F j, Y", strtotime($first_featured_news[0]->post_date)) ?>
                        </span>
                        <a href="<?= get_permalink($news) ?>">
                            <figure>
                                <img src="<?= get_the_post_thumbnail_url($news->ID); ?>"/>
                                <figcaption><h5><?= $news->post_title ?></h5></figcaption>
                            </figure>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="gall" aria-expanded="false">
           <?= get_field("gallery") ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

</body>
</html>