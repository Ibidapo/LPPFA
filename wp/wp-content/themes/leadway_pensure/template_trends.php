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

$cacheKey = "leadway_trends_page_info";
delete_transient($cacheKey);
$trends = get_transient($cacheKey);
if (!$trends) {
    $url = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart";
    $duration = array_get($_GET, 'duration', 3);
    $trends['rf'] = sendReq($url, [
        "RetireeFund" => true,
        "duration" => $duration
    ]);
    $trends['rsa'] = sendReq($url, [
        "RSAFund" => true,
        "duration" => $duration
    ]);
    $trends = [
        'rf' => [
            'label' => 'Retiree Fund',
            'bg_color' => 'rgba(255, 159, 64, 0.2)',
            'color' => 'rgba(255, 159, 64, 1)',
            'response' => ($response = getResponse($trends['rf'])) ? $response->Data : false
        ],
        'rsa' => [
            'label' => 'RSA Fund',
            'bg_color' => 'rgba(54, 162, 235, 0.2)',
            'color' => 'rgba(54, 162, 235, 1)',
            'response' => ($response = getResponse($trends['rsa'])) ? $response->Data : false
        ]
    ];
    if (isset($trends['rf']['response']) && isset($trends['rsa']['response'])) {
        set_transient($cacheKey, $trends, DAY_IN_SECONDS);
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
<?php if(isset($trends['rf']['response'])):?>
<script>
    var ctx = document.getElementById('trendChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: [
                <?php
                foreach($trends['rf']['response']->Datelabels as $label):
                    echo "'$label',";
                endforeach
                ?>
            ],
            datasets: [
                <?php
                foreach($trends as $trend): ?>
                {
                    label: '<?= $trend['label'] ?>',
                    backgroundColor: '<?= $trend['bg_color'] ?>',
                    borderColor: '<?= $trend['color'] ?>',
                    data: [
                        <?php
                        foreach($trend['response']->values as $value):
                            echo "$value,";
                        endforeach
                        ?>
                    ]
                },
                <?php endforeach ?>

            ]
        },

        // Configuration options go here
        options: {}
    });
</script>
<?php endif ?>