<?php
$options = get_option('theme_options');

$results = [];
$cacheKey = "leadway_rsa_rf_info";
$rsa_rf = get_transient($cacheKey);

if (!$rsa_rf) {
    $rsa_rf['rsa'] = wp_remote_post("https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart", [
        'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
        'body' => json_encode([
            "RSAFund" => true,
            "duration" => 0
        ]),
        'method' => 'POST'
    ]);
    $rsa_rf['rf'] = wp_remote_post("https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/Chart", [
        'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
        'body' => json_encode([
            "RetireeFund" => true,
            "duration" => 0
        ]),
        'method' => 'POST'
    ]);
    if (
        is_array($rsa_rf['rsa']) && isset($rsa_rf['rsa']['body']) &&
        is_array($rsa_rf['rf']) && isset($rsa_rf['rf']['body'])
    ) {
        $rsa_json = json_decode($rsa_rf['rsa']['body']);
        $rf_json = json_decode($rsa_rf['rf']['body']);
        $rsa_rf['rsa'] = $rsa_json->Data;
        $rsa_rf['rf'] = $rf_json->Data;
        set_transient($cacheKey, $rsa_rf, DAY_IN_SECONDS);
    } else {
        $rsa_rf = false;
    }
}
?>
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
                <span>&#8358;<?= array_get($rsa_rf['rsa']->values, 0) ?>
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/pos.png" alt="">
                </span>
            </td>
            <td>
                <span class="head-td">RETIREE FUND</span><br>
                <span> &#8358;<?= array_get($rsa_rf['rf']->values, 0) ?>
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