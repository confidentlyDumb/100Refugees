<?php

if(isset($_POST)) {
    session_start();

    $lang            = $_SESSION['lang'];
    $text            = json_decode(file_get_contents("lang/{$lang}.json"));

    $siteOwnersEmail = 'anibal@charlesrobotics.com';
    $name            = trim(stripslashes($_POST['contactName']));
    $email           = trim(stripslashes($_POST['contactEmail']));
    $contact_message = trim(stripslashes($_POST['contactMessage']));

    strlen($name) < 2 ? $error['name']       = $text->notif->eName : null;
    
    !preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email) ?
                             $error['email'] = $text->notif->eMail : null;
    
    strlen($contact_message) < 15 ? $error['message']
                                             = $text->notif->eMesg : null;

    $subject  = "Message from 100Refugees";

    $message  = "Email from:{$name}<br />";
    $message .= "Email address:{$email}<br />";
    $message .= "Message: <br />";
    $message .= $contact_message;

    $from     = "{$name} <{$email}>";

    $headers  = "From: {$from} \r\n";
    $headers .= "Reply-To: {$email} \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if (!(isset($error) && $error)) {
        ini_set("sendmail_from", $siteOwnersEmail); // If you happen to host this
                                                    // on a Windows machine.

        $mail = mail($siteOwnersEmail, $subject, $message, $headers);
        echo $mail ? "OK" : "Something went wrong. Please try again.";
        
    } else {
        $response  = (isset($error['name']))    ? $error['name']    . "<br /> \n" : null;
        $response .= (isset($error['email']))   ? $error['email']   . "<br /> \n" : null;
        $response .= (isset($error['message'])) ? $error['message'] . "<br />"    : null;
        
        echo $response;
    }
}

?>