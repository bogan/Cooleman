<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
$from = 'Demo contact form <demo@domain.com>';

// an email address that will receive the email with the output of the form
$sendTo = "admin@coolemanridge.org.au";

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new Exception('Form is empty');

    $emailText = "You have a new message from your contact form\n=============================\n";

//    foreach ($_POST as $key => $value) {
//        // If the field exists in the $fields array, include it in the email
//        if (isset($fields[$key])) {
//            $emailText .= "$fields[$key]: $value\n";
//        }
//    }

    //$from = "admin@coolemanridge.org.au";
    //$sendTo = "rohanthomas@bigpond.com";
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $need = $_POST["need"];
    $message = $_POST["message"];




    $emailText .=  "Name: " . $name . "\n" ;
    $emailText .=  "Surname: " . $surname . "\n" ;
    $emailText .=  "Email : " . $email . "\n" ;
    $emailText .=  "Need: " . $need . "\n" ;
    $emailText .=  "Message: " . $message . "\n" ;

    //$sendTo = "admin@coolemanridge.org.au";
    //$from = "rohanthomas@bigpond.com";

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $email,
        'Reply-To: ' . $email,
        'Return-Path: ' . $email,
    );

    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    //$from = "admin@coolemanridge.org.au";

    // the message
    //$emailText = "First line of text\nSecond line of text";

    // use wordwrap() if lines are longer than 70 characters
    //$emailText = wordwrap($emailText,70);

    // All the neccessary headers for the email.
    //$headers = array('Content-Type: text/plain; charset="UTF-8";',
    //    'From: ' . $from,
    //    'Reply-To: ' . $from,
    //    'Return-Path: ' . $from,
    //);

    //$sendTo = "rohanthomas@bigpond.com";

    //$subject = "My Test Email";

    // Send email
    //mail($sendTo, $subject, $emailText, implode("\n", $headers));

    // send email
    //mail("rohanthomas@bigpond.com","My Test Email",$msg, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}