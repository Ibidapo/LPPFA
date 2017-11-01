<?php /* Template Name: Company */ ?>

<?php
$intro_title = get_field("intro_title");
$intro_content = get_field("intro_content");
$mission_statement_box_title = get_field("mission_statement_box_title");
$values_box_title = get_field("values_box_title");
$values = get_field("values");
$companies = get_field("companies");
$custodians = get_field("custodians");

$board_members = get_field("bod_members");

?>

<?php
include_once 'mail/company.php';
?>

<?php get_header(); ?>
<!-- Body and Main Content of Page -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 company-bg">
            <div class="bg-txt">
                <div class="bg-head">
                    <h2 class="hidden-sm-down"><?= $intro_title ?></h2>

                    <h3 class="hidden-md-up"><?= $intro_title ?></h3>
                </div>
                <div class="company-txt">
                    <?= $intro_content ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 company-tab">
            <ul class="hidden-sm-down nav nav-fill nav-tabs" id="compTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#meet" role="tab"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/meet.png"> Meet Leadway</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#lead" role="tab"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/people.png"> Leadership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#f-rep" role="tab"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/script.png"> Financial Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#csr" role="tab"><img
                            src="<?php echo get_bloginfo('template_directory'); ?>/images/village.png"> C.S.R</a>
                </li>
            </ul>
            <form class="hidden-md-up mx-auto">
                <div class="form-group text-center">
                    <select class="form-control" id="m-compTab" data-aos="fade">
                        <option value="0">Meet Leadway</option>
                        <option value="1">Leadership</option>
                        <option value="2">Financial Reports</option>
                        <option value="3">C.S.R</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row tab-content">
        <div class="tab-pane fade show active col-12" role="tabpanel" id="meet">
            <div class="row comp-prof">
                <div class="col-12 col-md-7 text-center">
                    <p class="prof-label v-align">
                        <?= get_field("company_profile_subscription_text") ?>
                    </p>
                </div>
                <div class="col-12 col-md-5">
                    <form class="form-inline v-align" action="<?php the_permalink(); ?>" method="post" id="company_captcha">
                        <input type="hidden" name="company_submitted" value="1">

                        <div class="form-group mx-auto text-center">
                            <input name="email" type="email" class="form-control" placeholder="E-mail">
                            <button class="btn btn-outline-purple g-recaptcha" data-sitekey="6LfvHTEUAAAAAFwUDBuiqITNXeNSjA6Wv2HhIZl7"
						data-callback="companySubmit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mission">
                <div class="vr hidden-sm-down"></div>
                <div class="col-md-6 text-justify">
                    <h2 class="hidden-sm-down text-center"><?= $mission_statement_box_title ?></h2>

                    <h3 class="hidden-md-up text-center"><?= $mission_statement_box_title ?></h3>
                    <?= get_field("mission_statement") ?>
                </div>
                <div class="col-md-6 text-center">
                    <h2 class="hidden-sm-down"><?= $values_box_title ?></h2>

                    <h3 class="hidden-md-up" style="margin-top: 30px"><?= $values_box_title ?></h3>
                    <?= get_field("values_intro_text") ?>

                    <div id="accordion6" role="tablist" aria-multiselectable="true">
                        <?php foreach ($values as $key => $value) : ?>
                            <div class="card">
                                <div class="card-header" role="tab" id="val<?= $key + 1 ?>">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion6" href="#compVal-<?= $key ?>"
                                           aria-expanded="true" aria-controls="compVal-<?= $key ?>">
                                            <?= $value['title'] ?>
                                        </a>
                                    </h5>
                                </div>
                                <div id="compVal-<?= $key ?>" class="collapse <?= $key == 0 ? "show" : "" ?>"
                                     role="tabpanel" aria-labelledby="val<?= $key + 1 ?>">
                                    <div class="card-block">
                                        <?= $value['content'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="row comps">
                <div class="vr hidden-sm-down"></div>
                <div class="col-md-4 text-center">
                    <h1 class="hidden-md-down v-align">Our Shareholders</h1>

                    <h3 class="hidden-lg-up v-align">Our Shareholders</h3>
                </div>
                <div class="col-md-8">
                    <div id="comps-slide" class="carousel slide" data-ride="carousel" data-interval="10000">
                        <div class="carousel-inner" role="listbox">
                            <?php foreach ($companies as $key => $company): ?>
                                <div class="carousel-item <?= $key == 0 ? "active" : "" ?>">
                                    <div class="card">
                                        <img class="card-img-top mx-auto" src="<?= $company['logo']['url'] ?>">

                                        <div class="card-block text-justify">
                                            <p class="card-text">
                                                <?= $company['description'] ?>
                                            </p>

                                            <div class="text-center">
                                                <a href="<?= $company['website_link'] ?>"
                                                   class="btn btn-outline-purple">Visit site</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach ?>
                        </div>
                        <a class="carousel-control-prev" href="#comps-slide" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#comps-slide" role="button" data-slide="next">
                            <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row custodian text-center">
                <div class="col-12"><h3>Custodians</h3></div>
                <?php foreach ($custodians as $custodian) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top mx-auto" src="<?= $custodian['logo']['url'] ?>"
                                 alt="<?= $custodian['logo']['alt'] ?>">

                            <div class="card-block">
                                <p class="card-text">
                                    <?= $custodian['address'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="lead">
            <div class="row">
                <div class="col-12 board-mgt text-center">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#board-dir" role="tab">Board of
                                Directors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#mgt-team" role="tab">Management Team</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content row">
                <div class="tab-pane fade show col-12 active" id="board-dir" role="tabpanel">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dir1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4 dir-img text-center">
                                    <figure class="figure">
                                        <img src="<?= array_get(get_field('chairman_photo'), 'url') ?>"
                                             class="figure-img img-fluid rounded"
                                             alt="<?= array_get(get_field('chairman_photo'), 'alt') ?>">
                                        <figcaption class="figure-caption text-center">
                                            <?= get_field('chairman_name') ?>
                                            <br>
                                            <span class="designation">Chairman</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-8 dir-history text-justify">
                                    <?= get_field('chairman_description') ?>
                                </div>
                            </div>
                        </div>

                        <?php if ($board_members) : ?>
                            <?php foreach ($board_members as $key => $member) :
                                $photo = array_get($member, 'photo');
                                ?>
                                <div class="tab-pane fade" id="dir<?= $key + 2 ?>" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4 dir-img text-center">
                                            <figure class="figure">
                                                <?php if ($photo) { ?>
                                                    <img src="<?= $photo['url'] ?>" class="figure-img img-fluid rounded"
                                                         alt="<?= $photo['url'] ?>">
                                                <?php } ?>
                                                <figcaption class="figure-caption text-center">
                                                    <?= $member['name'] ?><br>
                                                    <span class="designation"><?= $member['position'] ?></span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-8 dir-history text-justify">
                                            <?= $member['description'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>

                    </div>
                    <nav class="nav nav-tabs row text-center board" role="tablist">
                        <div class="tag">Members</div>
                        <?php if ($board_members) : ?>
                            <?php foreach ($board_members as $key => $member) :
                                $photo = array_get($member, 'photo');
                                ?>
                                <a class="nav-link col-sm-6 col-md-3" data-toggle="tab" href="#dir<?= $key + 2 ?>"
                                   role="tab">
                                    <?= $member['name'] ?><br>
                                    <span class="designation"><?= $member['position'] ?></span>
                                </a>
                            <?php endforeach ?>
                        <?php endif ?>

                        <a class="nav-link col-sm-6 col-md-3 active mx-auto" data-toggle="tab" href="#dir1"
                           role="tab">
                            Oye Hassan-Odukale<br>
                            <span class="designation">Chairman</span>
                        </a>

                    </nav>
                </div>
                <div class="tab-pane fade col-12" id="mgt-team" role="tabpanel">
                    <div class="tab-content">
                        <?php if ($management_members = get_field("management_members")) : ?>
                            <?php foreach ($management_members as $key => $member) :
                                $photo = array_get($member, 'photo');
                                ?>
                                <div
                                    class="tab-pane fade <?= ($key == count($management_members) - 1) ? "show active" : "" ?>"
                                    id="mgt<?= $key + 1 ?>" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-4 dir-img text-center">
                                            <figure class="figure">
                                                <?php if ($photo) { ?>
                                                    <img src="<?= $photo['url'] ?>"
                                                         class="figure-img img-fluid rounded"
                                                         alt="<?= $photo['url'] ?>">
                                                <?php } ?>
                                                <figcaption class="figure-caption text-center">
                                                    <?= $member['name'] ?><br>
                                                    <span class="designation"><?= $member['position'] ?></span>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-8 dir-history text-justify">
                                            <?= $member['description'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                    <nav class="nav nav-tabs row text-center board" role="tablist">
                        <div class="tag">Members</div>

                        <?php if ($management_members) : ?>
                            <?php foreach ($management_members as $key => $member) : ?>
                                <a class="nav-link col-sm-6 col-md-3 <?= ($key == count($management_members) - 1) ? "mx-auto active" : "" ?>"
                                   data-toggle="tab" href="#mgt<?= $key + 1 ?>" role="tab">
                                    <?= $member['name'] ?><br>
                                    <span class="designation"><?= $member['position'] ?></span>
                                </a>
                            <?php endforeach ?>
                        <?php endif ?>
                    </nav>
                </div>
            </div>
            <div class="row custodian text-center">
                <div class="col-12"><h3>Custodians</h3></div>
                <?php foreach ($custodians as $custodian) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top mx-auto" src="<?= $custodian['logo']['url'] ?>"
                                 alt="<?= $custodian['logo']['alt'] ?>">

                            <div class="card-block">
                                <p class="card-text">
                                    <?= $custodian['address'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="tab-pane fade col-12" role="tabpanel" id="f-rep">
            <div class="row">
                <div class="col-12 col-md-6" style="padding-left: calc(10% - 15px)">
                    <h2>Reports</h2>

                    <?= get_field('reports_intro') ?>

                    <ul>
                        <?php if ($reports = get_field('reports')): ?>
                            <?php foreach ($reports as $report) { ?>
                                <li>
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    <a href="<?= $report['file']['url'] ?>"
                                       target="_blank"><?= $report['title'] ?></a>
                                </li>
                            <?php } ?>
                        <?php endif ?>
                    </ul>
                </div>
                <div class="hidden-sm-down col-md-6 text-center">
                    <img class="img-fluid"
                         src="<?= array_get(get_field('reports_image'), 'url'); ?>"
                         alt="<?= array_get(get_field('reports_image'), 'alt'); ?>">
                </div>
            </div>
        </div>
        <div class="tab-pane fade col-12 text-center" role="tabpanel" id="csr">
            <?= get_field('csr_content') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script>
    $(document).ready(function () {

        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            $(".container").attr("class", "container-fluid");
        }

        $('#compTab a[href="' + window.location.hash + '"]').tab('show'); // Select tab by name if provided in location hash

        $('#compTab a[data-toggle="tab"], #board-dir a[data-toggle="tab"], #mgt-team a[data-toggle="tab"]').on('shown.bs.tab', function () {
            $('body,html').animate({
                scrollTop: 480
            }, 800);
        });

        $('#read').on('shown.bs.collapse', function(){
            $('a[href="#read"]').text('Read less');
			if (/MSIE (\d+\.\d+);/.test(navigator.userAgent) || navigator.userAgent.indexOf("Trident/") != -1 ){ 
				// insert conditional IE code here
				$('.company-txt').fadeIn('slow').css('width','47.5%'); 
			};
        }).on('hidden.bs.collapse',function(){
            $('a[href="#read"]').text('Read more');
			if (/MSIE (\d+\.\d+);/.test(navigator.userAgent) || navigator.userAgent.indexOf("Trident/") != -1 ){ 
				// insert conditional IE code here
				$('.company-txt').css('width','auto'); 
			};
        });

        $(".dropdown-menu.oc a:first-child").click(function () {
            $('a[href="#meet"]').tab('show');
        });

        $(".dropdown-menu.oc a:nth-child(2)").click(function () {
            $('a[href="#lead"]').tab('show');
        });

        $(".dropdown-menu.oc a:nth-child(3)").click(function () {
            $('a[href="#f-rep"]').tab('show');
        });

        $(".dropdown-menu.oc a:nth-child(4)").click(function () {
            $('a[href="#csr"]').tab('show');
        });

        $('#m-compTab').change(function () {
            var i = $(this).val();

            if (i == 0) {
                $('a[href="#meet"]').tab('show');
            } else if (i == 1) {
                $('a[href="#lead"]').tab('show');
            } else if (i == 2) {
                $('a[href="#f-rep"]').tab('show');
            } else if (i == 3) {
                $('a[href="#csr"]').tab('show');
            }
        });
    });
</script>
</body>
</html>