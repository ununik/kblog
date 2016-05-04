<?php

$html->setTitle('Odeslat zprávu');

$err = array();
$mail = '';
$subject = '';
$message = '';
$saved = false;

if (count($_POST) > 0) {
    include 'Models/Library/validation.php';
    //$html->addToContent(print_r($_POST, true));
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    if (!\Validation\checkMailFormat($mail)) {
        $err[] = 'Špatný formát mailu!';
    }
    if (strlen($mail) > 255) {
        $err[] = 'Vyplněný mail je příliš dlouhý';
    }
    
    if (strlen($subject) == 0) {
        $err[] = 'Není vyplněný předmět';
    }
    if (strlen($subject) > 255) {
        $err[] = 'Vyplněný předmět je příliš dlouhý';
    }
    
    if (strlen($message) == 0) {
        $err[] = 'Není vyplněná zpráva';
    }
    
    if (count($err) == 0) {
        $messageClass = new Message();
        $messageClass->saveMessageToDB($mail, $subject, $message);
        
        $saved = true;
    }
}

if ($saved) {
    $html->addToContent(include 'Views/message/message_done.php');
} else {
    $html->addToContent(include 'Views/message/message.php');
}