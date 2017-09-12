<?php
/* Template Name: Trends */

$durationOptions = [
    0 => "Last Available Date",
    1 => "Year To Date",
    2 => "Last 14 Days",
    3 => "Last 1 Month",
    4 => "Last 3 Months",
    5 => "Last 1 Year",
    6 => "Last 5 Years"
];

$params = [
    "RSAFund" => true,
    "RetireeFund" => true,
    "duration" => array_get($_GET, 'duration', 3)
];
$json_params = json_encode($params);
$cacheKey = "leadway_trends_info-" . md5($json_params);
$trends = get_transient($cacheKey);

if (!$trends) {
    $trends = wp_remote_post("https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart", [
        'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
        'body' => json_encode($params),
        'method' => 'POST'
    ]);
    if (is_array($trends) && isset($trends['body'])) {
        $trends_json = json_decode($trends['body']);
        $trends = $trends_json->Data;
        set_transient($cacheKey, $trends, DAY_IN_SECONDS);
    } else {
        $trends = false;
    }
}
get_header();

?>

<!-- Body and Main Content of page -->
<div class="container-fluid" id="m-top">
    <div class="row">
        <div class="col-12">
            <div class="page-wrapper" style="min-height:300px;padding: 50px 0;">
                <div class="page-content">
                    <br/>

                    <h1 class="page-title text-center"><?php _e('Trends'); ?></h1>

                    <div class="text-center" style="margin: 20px 0">
                        <?php foreach($durationOptions as $key => $option) {
                            $active = $key == array_get($_GET, 'duration', 3) ? 'btn-primary active' : 'btn-default';
                            echo '<a href="?duration='. $key .'" class="btn ' . $active . '" role="button">'.$option.'</a>';
                        } ?>
                    </div>


                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 col-sm-offset-2">
                            <?php if ($trends): ?>
                                <canvas id="trendChart"></canvas>
                            <?php else: ?>
                                <h2>No trend data available at this time, please check back soon.</h2>
                            <? endif ?>
                        </div>
                    </div>

                </div>
                <!-- .page-content -->
            </div>
            <!-- .page-wrapper -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
    var ctx = document.getElementById('trendChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [
                <?php
                foreach($trends->Datelabels as $label):
                    echo "'$label',";
                endforeach
                ?>
            ],
            datasets: [{
                label: "RSA Fund",
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [
                    <?php
                    foreach($trends->values as $value):
                        echo "$value,";
                    endforeach
                    ?>
                ],
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>