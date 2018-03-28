<?php

if (array_get($_POST, 'submitted')) {

    $response1 = "";

    // function to generate response
    function my_contact_form_generate_response($type, $message)
    {
        return $response1 = [
            'type' => $type,
            'message' => $message
        ];
    }

    // response messages
    $missing_content = "Please supply all information.";
    $email_invalid   = "Email Address Invalid.";
    $message_unsent  = "Message was not sent. Try Again.";
    $message_sent    = "Thanks! Your message has been sent.";
	$captcha_error = "Captcha error ocurred!";
	$robot_error = "You're a Robot!";

    // user posted variables
    $email = $_POST['email'];
    $message = $_POST['feedback'];

    // php mailer variables
    $admin_email = get_option('admin_email');
    $to = $admin_email;
    $subject = "Someone sent feedback from ".get_bloginfo('name');
    $headers = 'From: "'.get_bloginfo('name').'" <'. $email . ">\r\n" .
        'Reply-To: ' . $email . "\r\n";


    // to sender feedback message
    $feedback_banner_img_path = get_bloginfo('template_directory') . "/images/banner.png";
    $to_sender_message = "<img src='{$feedback_banner_img_path}' alt='Leadway pensure feedback banner image'>".
        '<h1 style="text-align:center;color:#a4a4a4;font-weight:100">Thanks for your feedback</h1>'.
        '<p style="text-align:center;color:#1d69a6">At Leadway Pensure PFA we believe the best results are achieved when feedback is incorporated into service optimisation, ensuring the best customer experience is continously achieved.</p>'.
        '<p style="color:#1d69a6">Your faithfully,</p>'.
        '<p style="color:#a4a4a4">Leadway Pensure PFA</p>';
    $to_sender_headers = 'From: "Leadway Pensure" <'. $admin_email . ">\r\n" .
        'Reply-To: ' . $admin_email . "\r\n".
        'Content-Type: text/html; charset=UTF-8' . "\r\n";

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
			// validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$response1 = my_contact_form_generate_response("error", $email_invalid);
			} else {
				if(empty($message)){
					$response1 = my_contact_form_generate_response("error", $missing_content);
				} else {
					$sent = wp_mail($to, $subject, htmlspecialchars($message), $headers);
					$to_sender = wp_mail(trim($email), "Thanks for your feedback", $to_sender_message, $to_sender_headers);
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