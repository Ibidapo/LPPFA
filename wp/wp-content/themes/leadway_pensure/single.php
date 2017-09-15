<?php
get_header();
$options = get_option('theme_options');
$social_options = get_option('theme_social_options');
?>

<?php

$params = [
    "RSAFund" => true,
    "RetireeFund" => true,
    "duration" => 0
];
$json_params = json_encode($params);
$cacheKey = "leadway_rsa_rf_info-" . md5($json_params);
$rsa_rf = get_transient($cacheKey);

if (!$rsa_rf) {
    $rsa_rf = wp_remote_post("https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart", [
        'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
        'body' => json_encode($params),
        'method' => 'POST'
    ]);
    if (is_array($rsa_rf) && isset($rsa_rf['body'])) {
        $rsa_rf_json = json_decode($rsa_rf['body']);
        $rsa_rf = $rsa_rf_json->Data;
        set_transient($cacheKey, $rsa_rf, DAY_IN_SECONDS);
    } else {
        $rsa_rf = false;
    }
}

?>
<!-- Desktop navigation -->
<nav class="navbar fixed-top hidden-md-down pOff">
    <!-- desktop price charts start -->
    <table class="table table-responsive mOff">
        <tbody>
        <tr>
            <td>
                <div id="google_translate_element"></div>
            </td>
            <td>
                        <span><i class="fa fa-phone" aria-hidden="true" style="color: #2068a4"></i>
                            <?= $options['phone_number'] ?>
                        </span>
            </td>
            <?php if ($rsa_rf) { ?>
                <td>
                    <span class="head-td"> RSA FUND</span><br>
                    <span>&#8358;<?= array_get($rsa_rf->values, 0) ?>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/pos.png" alt="">
                            </span>
                </td>
                <td>
                    <span class="head-td">RETIREE FUND</span><br>
                    <span> &#8358;<?= array_get($rsa_rf->values, 0) ?>
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/neg.png" alt="">
                            </span>
                </td>
            <?php } ?>
            <td>
                <a href="/login" style="color: white; font-weight: 500">LOGIN</a>
            </td>
            <td>
                <a href="/calculator" class="nav-calc"> <img
                        src="<?php echo get_bloginfo('template_directory'); ?>/images/calc.png">
                    <span>Calculator</span></a>
            </td>
            <td>
                <button onclick="location='/trends'" type="button" class="btn btn-outline-secondary v-trends">
                    VIEW TRENDS
                </button>
            </td>
            <td>
                <span id="date"></span>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- Navbar -->
    <div class="navBlog">
        <div class="col-md-12">
            <ul class="hidden-sm-down nav nav-fill nav-tabs" id="blogTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="/blog#blogHome" role="tab">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="/blog#blogInvest" role="tab">Investment Series</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="/blog#comic" role="tab">Comic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="/blog#blogVids" role="tab">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="/blog#careerTip" role="tab">Career Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-alt.png" height="80"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Body and Main content of Page -->
<div class="container" id="blog-pg">
    <div class="row">
        <?php
        // TO SHOW THE PAGE CONTENTS
        while (have_posts()) : the_post(); $categories = get_the_category(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="col-12 col-md-9">
                <div class="blog-img">
                    <img src="<?= the_post_thumbnail_url() ?>" alt="<?= the_post_thumbnail_caption() ?>"/>
                </div>
                <div class="blog-note">
                    <table class="table table-responsive mOff">
                        <tbody>
                        <tr>
                            <td>
                                <span class="hidden-sm-down h4"><?php the_title(); ?></span>
                                <span class="hidden-md-up h5"><?php the_title(); ?></span>
                            </td>
                            <td>
                                <?php foreach($categories as $category): ?>
                                    <span class="badge badge-danger"><?= $category->name ?></span>
                                <?php endforeach ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <span class="news-date">
                        <?= the_date(); ?>
                    </span>
                    <br><br>

                    <div class="entry-content-page">
                        <?php the_content(); ?> <!-- Page Content -->
                    </div>
                    <!-- .entry-content-page -->


                    <div class="blog-share">
                        <h6>Share with friends</h6>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a target="_blank" class="nav-link" href="http://www.facebook.com/sharer.php?u=<?= get_permalink()?>">
                                    <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-instagram fa-2x"
                                                                aria-hidden="true"></i></a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="http://twitter.com/share?text=<?= the_title_attribute()?>&url=<?= get_permalink()?>">
                                    <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 blog-link">
                <h6 class="text-center">Related Stories</h6>
                <ul>
                    <?php
                    //for use in the loop, list 5 post titles related to first tag on current post
                    $tags = get_the_tags();
                    if ($tags) {
                        $first_tag = $tags[0]->term_id;
                        $args = array(
                            'tag__in' => array($first_tag),
                            'post__not_in' => array(get_the_ID()),
                            'posts_per_page' => 5,
                            'ignore_sticky_posts' => 1
                        );
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php the_permalink() ?>" rel="bookmark"
                                       title="Permanent Link to <?php the_title_attribute(); ?>">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            <?php
                            endwhile;
                        }
                        wp_reset_query();
                    }
                    ?>
                </ul>
                <h6 class="text-center">Archives</h6>
                <ul class="archives">
                    <?php
                    $my_archives = wp_get_archives(array(
                        'type' => 'alpha',
                        'show_post_count' => true,
                        'limit' => 10,
                        'post_type' => 'post',
                        'format' => 'custom',
                        'before' => '<li class="nav-item"><i class="fa fa-chevron-right" aria-hidden="true"></i> ',
                        'after' => '</li>'
                    ));

                    print_r($my_archives);

                    ?>
                </ul>
            </div>
        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>
    </div>
</div>

<?php get_footer(); ?>

</body>
</html>