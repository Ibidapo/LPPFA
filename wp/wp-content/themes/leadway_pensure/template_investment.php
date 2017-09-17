<?php /* Template Name: Investment */ ?>

<?php

function getId($key)
{
    $id = "kc-$key";
    switch($key) {
        case 0:
            $id = "f-mkt";
            break;
        case 1:
            $id = "w-plan";
            break;
        case 2:
            $id = "r-plan";
            break;
        case 3:
            $id = "p-fund";
            break;
        case 4:
            $id = "pod";
            break;
    }
    return $id;
}
?>

<?php get_header(); ?>

<!-- Body and Main Content of page -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 investment-bg">
            <div class="bg-txt">
                <div class="bg-head">
                    <h2 class="hidden-sm-down"><?= the_title() ?></h2>
                    <h3 class="hidden-md-up"><?= the_title() ?></h3>
                </div>
                <?= get_field("top_bar_content") ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 invest-calc">
            <div class="invest-calc-txt" data-aos="fade-right">
                <?= get_field("left_content") ?>
            </div>
        </div>
        <div class="col-md-5 multi-fund">
            <div class="multi-fund-txt v-align">
               <?= get_field("right_content") ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 invest-rep">
            <div class="invest-rep-txt v-align">
                <h2>Reports</h2>
                <p><?= get_field("reports_description") ?></p>
                <ul>
                    <?php
                    $files = get_field("report_files");
                    foreach($files as $file):
                    ?>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="<?= $file['file']['url'] ?>" target="_blank">
                            <?= $file['title'] ?>
                        </a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="col-md-7 invest-chart">
            <div class="invest-chart-txt" data-aos="fade-right">
                <?= get_field("bottom_right_content")?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
<script>
    $(document).ready(function() {
        //Resize container based on desktop or mobile viewport.
        var size = window.innerWidth;
        if (size <= 991) {
            $(".container").attr("class", "container-fluid");
        }

        $('#knowTab a[href="' + window.location.hash + '"]').tab('show'); // Select tab by name if provided in location hash

        $('#knowTab a[data-toggle="tab"]').on('shown.bs.tab', function() {
            if (size <= 767) {
                $('body,html').animate({
                    scrollTop :1900
                }, 1000);
            } else {
                $('body,html').animate({
                    scrollTop :1300
                }, 1000);
            }
        });

        $(".dropdown-menu.in a:first-child").click(function(){
            $('a[href="#f-mkt"]').tab('show');
        });

        $(".dropdown-menu.in a:nth-child(2)").click(function(){
            $('a[href="#w-plan"]').tab('show');
        });

        $(".dropdown-menu.in a:nth-child(3)").click(function(){
            $('a[href="#r-plan"]').tab('show');
        });

        $(".dropdown-menu.in a:nth-child(4)").click(function(){
            $('a[href="#p-fund"]').tab('show');
        });

        $(".dropdown-menu.in a:nth-child(5)").click(function(){
            $('a[href="#pod"]').tab('show');
        });

        $("#m-knowTab").change(function () {
            var i = $(this).val();

            if (i == 0) {
                $('a[href="#f-mkt"]').tab('show');
            } else if (i == 1) {
                $('a[href="#w-plan"]').tab('show');
            } else if (i == 2) {
                $('a[href="#r-plan"]').tab('show');
            } else if (i == 3) {
                $('a[href="#p-fund"]').tab('show');
            } else if (i == 4) {
                $('a[href="#pod"]').tab('show');
            }
        });
    });
</script>

</body>
</html>