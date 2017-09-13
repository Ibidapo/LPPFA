<?php

if (array_get($_POST, 'company_submitted')) {

    //response generation function
    $response = "";

    //function to generate response
    function my_contact_form_generate_response($type, $message)
    {
        return $response = [
            'type' => $type,
            'message' => $message
        ];
    }

    //response messages
    $missing_content = "Please supply all information.";
    $email_invalid   = "Email Address Invalid.";
    $message_unsent  = "Message was not sent. Try Again.";
    $message_sent    = "Thanks! Email was submitted.";

    //user posted variables
    $email = $_POST['email'];
    $message = "Email address: {$_POST['email']}";

    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Someone just registered to receive the company profile";
    $headers = 'From: "'.get_bloginfo('name').'" <'. $email . ">\r\n" .
        'Reply-To: ' . $email . "\r\n";

    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $response = my_contact_form_generate_response("error", $email_invalid);
    }
    else {
        if(empty($message)){
            $response = my_contact_form_generate_response("error", $missing_content);
        } else  {
            $sent = wp_mail($to, $subject, strip_tags($message), $headers);
            if($sent)
                $response = my_contact_form_generate_response("success", $message_sent);
            else
                $response = my_contact_form_generate_response("error", $message_unsent);
        }
    }
}

?>