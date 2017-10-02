<?php

if (array_get($_POST, 'company_submitted')) {

    //response generation function
    $response1 = "";

    //function to generate response
    function my_contact_form_generate_response($type, $message)
    {
        return $response1 = [
            'type' => $type,
            'message' => $message
        ];
    }

    //response messages
    $missing_content = "Please supply all information.";
    $email_invalid   = "Email Address Invalid.";
    $message_unsent  = "Message was not sent. Try Again.";
    $message_sent    = "Thanks! Email was submitted.";
	$captcha_error = "Captcha error ocurred!";
	$robot_error = "You're a Robot!";

    //user posted variables
    $email = $_POST['email'];
    $message = "Email address: {$_POST['email']}";

    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Someone just registered to receive the company profile";
    $headers = 'From: "'.get_bloginfo('name').'" <'. $email . ">\r\n" .
        'Reply-To: ' . $email . "\r\n";

	//validate reCAPTCHA
	if (isset($_POST['g-recaptcha-response'])){
		// reCaptcha info
		$secret = "6LfvHTEUAAAAAGXd908QWjoSOqwIckbPdWFuQEZr";
		$remoteip = $_SERVER["REMOTE_ADDR"];
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$response = $_POST["g-recaptcha-response"];
			
		// Curl Request
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, array(
			'secret' => $secret,
			'response' => $response,
			'remoteip' => $remoteip
			));
		$curlData = curl_exec($curl);
		curl_close($curl);
		
		// Parse data
		$recaptcha = json_decode($curlData, true);
		if ($recaptcha["success"]){	
			//validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$response1 = my_contact_form_generate_response("error", $email_invalid);
			} else {
				if(empty($message)){
					$response1 = my_contact_form_generate_response("error", $missing_content);
				} else {
					$sent = wp_mail($to, $subject, strip_tags($message), $headers);
					if($sent)
						$response1 = my_contact_form_generate_response("success", $message_sent);
					else
						$response1 = my_contact_form_generate_response("error", $message_unsent);
				}
			}
		} else {
			$response1 = my_contact_form_generate_response("error", $captcha_error);
		}
	} else {
		$response1 = my_contact_form_generate_response("error", $robot_error);
	}
}

?>