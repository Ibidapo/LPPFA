<?php

if (array_get($_POST, 'career_submitted')) {
    unset($_POST['career_submitted']);

    $response = "";
    //response generation function
    function my_contact_form_generate_response($type, $message)
    {
        return $response = [
            'type' => $type,
            'message' => $message
        ];
    }

    function make_readable($var) {
        return ucfirst(trim(str_replace("_", " ", $var)));
    }

    add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

    remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );

    function wpdocs_set_html_mail_content_type() {
        return 'text/html';
    }

    //response messages
    $missing_content = "Please supply all information.";
    $email_invalid   = "Email Address Invalid.";
    $message_unsent  = "Details could not sent. Please try again.";
    $message_sent    = "Thanks! Your CV has been uploaded and details sent.";

    $message = "<h4>Applicant's Details:</h4><hr>";
    foreach($_POST as $key => $value) {
        $key = make_readable($key);
        $message .= "<p><b>{$key}:</b> {$value}</p>";
    }

    //user posted variables
    $email = $_POST['email'];
    $name = trim($_POST['surname'] . " " . $_POST['other_names']);

    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Someone just uploaded their CV on ".get_bloginfo('name');
    $headers = 'From: "'. $name .'" <'. $email . ">\r\n" .
        'Reply-To: ' . $email . "\r\n".
        'Content-Type: text/html; charset=UTF-8' . "\r\n";

    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $response = my_contact_form_generate_response("error", $email_invalid);
    }
    else {
        if(empty($message) || empty($name)){
            $response = my_contact_form_generate_response("error", $missing_content);
        } else  {
            if ( ! function_exists( 'wp_handle_upload' ) ) {
                require_once( ABSPATH . 'wp-admin/includes/file.php' );
            }
            $uploadedFile = $_FILES['cv'];
            $uploadOverrides = array( 'test_form' => false );
            $moveFile = wp_handle_upload( $uploadedFile, $uploadOverrides );
            if ( $moveFile && ! isset( $moveFile['error'] ) ) {
                $message .= "<a href='{$moveFile['url']}'>Click to view CV</a>";
                $attachments = $moveFile[ 'file' ];
                $sent = wp_mail($to, $subject, $message, $headers, $attachments);
                if($sent){
                    $response = my_contact_form_generate_response("success", $message_sent);
                    $_POST = [];
                }
                else
                    $response = my_contact_form_generate_response("error", $message_unsent);
            } else {
                $response = my_contact_form_generate_response("error", "Error uploading CV: {$moveFile['error']}");
            }
        }
    }
}

?>