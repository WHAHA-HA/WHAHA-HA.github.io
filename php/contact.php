<?php
$subjectPrefix = '[Contact From Your Site]';
$emailTo = '<YOUR EMAIL ADDRESS>';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = stripslashes(trim($_POST['name']));
    $email   = stripslashes(trim($_POST['email']));
    // $phone   = stripslashes(trim($_POST['phone']));
    // $subject = stripslashes(trim($_POST['subject']));
    $message = stripslashes(trim($_POST['messages']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email)) {
        die("injecttry");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if($name && $email && $emailIsValid && $message){
        $subject = "$subjectPrefix";
        $body = "Name: $name <br /> Email: $email <br /> Message: $message";

        $headers .= sprintf( 'Return-Path: %s%s', $email, PHP_EOL );
        $headers .= sprintf( 'From: %s%s', $email, PHP_EOL );
        $headers .= sprintf( 'Reply-To: %s%s', $email, PHP_EOL );
        $headers .= sprintf( 'Message-ID: <%s@%s>%s', md5( uniqid( rand( ), true ) ), $_SERVER[ 'HTTP_HOST' ], PHP_EOL );
        $headers .= sprintf( 'X-Priority: %d%s', 3, PHP_EOL );
        $headers .= sprintf( 'X-Mailer: PHP/%s%s', phpversion( ), PHP_EOL );
        $headers .= sprintf( 'Disposition-Notification-To: %s%s', $email, PHP_EOL );
        $headers .= sprintf( 'MIME-Version: 1.0%s', PHP_EOL );
        $headers .= sprintf( 'Content-Transfer-Encoding: 8bit%s', PHP_EOL );
        $headers .= sprintf( 'Content-Type: text/html; charset="utf-8"%s', PHP_EOL );

        mail($emailTo, "=?utf-8?B?".base64_encode($subject)."?=", $body, $headers);
        $emailSent = true;
  echo "Your Messages Has Been Sent!";
  
    } else {
        $hasError = true;
        echo "Your Message Sending Failed. Please fill-up the form correctly!";
    }
}
?>