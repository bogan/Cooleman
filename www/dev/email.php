<?php

$from = "admin@coolemanridge.org.au";

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// All the neccessary headers for the email.
$headers = array('Content-Type: text/plain; charset="UTF-8";',
    'From: ' . $from,
    'Reply-To: ' . $from,
    'Return-Path: ' . $from,
);

// send email
mail("rohanthomas@bigpond.com","My Test Email",$msg, implode("\n", $headers));
?>