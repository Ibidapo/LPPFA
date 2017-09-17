<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("../../../wp-load.php");
require_once "../../../wp-includes/http.php";

$_POST['ClientID'] = "9dy8earw04r09wjefsdp90zsjs";
$params = json_encode($_POST);
$request_args = [
    'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
    'body' => $params,
    'method' => 'POST'
];
$formName = array_get($_POST, 'formName');

if ($formName == 'token-form') {
    $url = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/SendEnrolmentToken";
    $response = wp_remote_post($url, $request_args);
    $response = getResponse($response);

    $userFeedback = compact('response');
    return die(json_encode($userFeedback));
}

if ($formName == 'enroll-form') {
    $url = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/EnrolWebsiteProspect";
    $response = wp_remote_post($url, $request_args);
    $response = getResponse($response);

    /*$sent = true;
    if ($response) {
        $to = array_get($_POST, 'emailaddress');
        $from = get_option('admin_email');
        $sent = sendMail("Leadway Pensure", $from, $to, "Enrollment Token", $response);
    }
    $userFeedback = [
        'response' => $response,
        'mail' => $sent
    ];*/
    $userFeedback = compact('response');
    return die(json_encode($userFeedback));
}


function sendMail($from_name, $from, $to, $subject, $message, $headers = false)
{
    if (!$headers) {
        $headers = 'From: "' . $from_name . '" <' . $from . ">\r\n" .
            'Reply-To: ' . $from . "\r\n";
    }

    return wp_mail($to, $subject, $message, $headers);
}


