<?php

// turn on error reporting if debug mode is on
if (defined('WP_DEBUG') && WP_DEBUG) {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}


// load required classes and methods
require_once("../../../wp-load.php");
require_once "../../../wp-includes/http.php";


// get required info for forms
$_POST['ClientID'] = "9dy8earw04r09wjefsdp90zsjs";
$params = json_encode($_POST);
$request_args = [
    'headers' => array('Content-Type' => 'application/json; charset=utf-8'),
    'body' => $params,
    'method' => 'POST'
];
$formName = array_get($_POST, 'formName');


// process form based on type
switch ($formName) {
	case 'token-form':
		$userInfo = json_decode($params, true);
		$_SESSION['user'] = $userInfo;
		$_SESSION['user_full_name'] = $userInfo['firstname'] ." ". $userInfo['middlename'] ." ". $userInfo['surname'];
		$url = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/SendEnrolmentToken";
		$response = sendRequest($url, $request_args);
		return die($response);
		break;

	case 'enroll-form':
		$url = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/EnrolWebsiteProspect";
		$response = sendRequest($url, $request_args);
		return die($response);
		break;

	case 'token-validate-form':
		$url = "https://mapps.leadway-pensure.com/LeadwayMobileApplicationWebAPI/WebData/ValidateOTP";
		$response = sendRequest($url, $request_args);
		return die($response);
		break;

	default:
		# code...
		break;
}

// ================================
// Helper functions
// ================================

function sendRequest($url, $request_args) {
	$request_params = json_decode($request_args['body'], true);
	unset($request_params['ClientID']);
	$response = wp_remote_post($url, $request_args);
	$response = getResponse($response);
	return json_encode([
		'request' => $request_params,
		'response' => $response
	]);
}


function sendMail($from_name, $from, $to, $subject, $message, $headers = false) {
    if (!$headers) {
        $headers = 'From: "' . $from_name . '" <' . $from . ">\r\n" .
            'Reply-To: ' . $from . "\r\n";
    }
    return wp_mail($to, $subject, $message, $headers);
}
