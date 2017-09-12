<?php /* Template Name: Contact */ ?>

<?php

// retrieve branches from cache
$branches = get_transient("leadway_branch_info");

// if doesn't exist in cache, get from api
if (!$branches) {
    $branches = wp_remote_post("https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/ListOfBranchDetails");
    if (is_array($branches) && isset($branches['body'])) {
        $branches_json = json_decode($branches['body']);
        $branches = $branches_json->Data;
        set_transient( 'leadway_branch_info', $branches, DAY_IN_SECONDS );
    } else {
        $branches = false;
    }
}

if ($branches) {
    $branches = [
        "west" => array_filter($branches, function($branch) {
            $regions = ["ekiti", "kwara", "lagos", "ogun", "ondo", "osun", "oyo"];
            return in_array(strtolower($branch->Location), $regions);
        }),

        "east" => array_filter($branches, function($branch) {
            $regions = ["abia", "anambra", "enugu", "imo"];
            return in_array(strtolower($branch->Location), $regions);
        }),

        "north" => array_filter($branches, function($branch) {
            $regions = [
                "adamawa", "bauchi", "benue", "borno", "fct", "federal capital territory", "abuja", "kaduna", "kano",
                "kogi", "niger", "plateau", "sokoto", "zamfara"
            ];
            return in_array(strtolower($branch->Location), $regions);
        }),

        "south" => array_filter($branches, function($branch) {
            $regions = ["akwa-ibom", "bayelsa", "cross river", "cross rivers", "cross-river", "delta", "edo", "rivers"];
            return in_array(strtolower($branch->Location), $regions);
        })
    ];
}
$branches = array_map("array_values", $branches);

?>

<?php get_header(); ?>
<!-- Body and Main Content of page -->
<div class="container" id="m-top">
    <div class="row">
        <div class="col-12 text-center csr">
            <span  data-aos="fade" class="align-middle">
                <?= get_field("top_box") ?>
            </span>
        </div>
    </div>
    <div class="row" style="position: relative">
        <div class="col-md-6 contact-bg">
            <img src="<?= get_field("left_box_image")['url'] ?>"/>
        </div>
        <div class="contact-txt text-right" data-aos="fade-right">
            <?= get_field("left_box") ?>
        </div>
        <div class="col-md-6 h-office text-center">
            <?= get_field("right_box") ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 divide"></div>
        <div class="col-md-12 location text-center">
            <h1 class="hidden-sm-down" data-aos="fade">Our Locations</h1>
            <h3 class="hidden-md-up" data-aos="fade">Our Locations</h3>
            <ul class="hidden-sm-down nav nav-fill nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#west" role="tab" data-aos="fade-right">Western Region</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#east" role="tab" data-aos="fade-right">Eastern Region</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#north" role="tab" data-aos="fade-left">Northern Region</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#south" role="tab" data-aos="fade-left">Southern Region</a>
                </li>
            </ul>
            <form class="hidden-md-up mx-auto">
                <div class="form-group">
                    <select class="form-control" id="regions" data-aos="fade">
                        <option value="0">Western Region</option>
                        <option value="1">Eastern Region</option>
                        <option value="2">Northern Region</option>
                        <option value="3">Southern Region</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="row tab-content" data-aos="fade">
        <!-- Regions -->
        <?php if ($branches): ?>
            <?php foreach($branches as $key => $region): ?>
            <div class="tab-pane fade col-12 <?= $key == 'west' ? "show active": ""?>" role="tabpanel" id="<?= $key ?>">
                <div id="accordion1" role="tablist" aria-multiselectable="true">
                    <?php foreach($region as $bKey => $branch) { ?>
                        <div class="card">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#<?= slugify($branch->MapSearchName) . "-$bKey" ?>" aria-expanded="true" aria-controls="<?= $branch->Location ?>">
                                <div class="card-header" role="tab" id="<?= $key . ($bKey + 5) ?>">
                                    <h5 class="mb-0">
                                        <?= ucfirst(strtolower($branch->MapSearchName)) ?>
                                    </h5>
                                </div>
                            </a>
                            <div id="<?= slugify($branch->MapSearchName) . "-$bKey" ?>" class="collapse <?= $bKey == 0 ? "show" : ""?>" role="tabpanel" aria-labelledby="<?= $key . ($bKey + 5) ?>">
                                <div class="card-block">
                                    <div class="row justify-content-around">
                                        <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-add">
                                            <h6><?= $branch->MapSearchName ?></h6>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span><?= $branch->OfficeAddress ?>.</span><br>
                                        </div>
                                        <div class="col-11 col-sm-6 col-md-5 col-lg-4 loc-person">
                                            <h6>Key Personnel</h6>
                                            <!--<i class="fa fa-user" aria-hidden="true"></i> --><?//= $branch->MapSearchName ?><!--<br>-->
                                            <i class="fa fa-envelope" aria-hidden="true"></i> <?= $branch->EmailAddress ?><br>
                                            <i class="fa fa-phone" aria-hidden="true"></i> <?= $branch->PhoneNo ?><br>
                                        </div>
                                        <div class="col-10 text-center">
                                            <a type="button" class="btn btn-outline-loc">Get Directions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php endforeach ?>
        <?php endif ?>
    </div>
</div>


<?php get_footer(); ?>

</body>
</html>