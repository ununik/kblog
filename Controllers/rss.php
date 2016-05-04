<?php
$html->setTitle('Odebírání novinek');

$html->addToContent('<h1>Odebírání novinek</h1>');

$mail = '';
$err = array();
if (isset($_POST['mailing'])) {
    include 'Models/Library/validation.php';
    $mail = $_POST['mail'];
    
    if (!\Validation\checkMailFormat($mail)) {
        $err[] = 'Špatný formát mailu!';
    }
    if (strlen($mail) > 255) {
        $err[] = 'Vyplněný mail je příliš dlouhý.';
    }
    $rss = new RSS();
    if (!$rss->checkIfMailExists($mail)) {
        $err[] = 'Na tento mail už novinky chodí.';
    }
    
    if(count($err) == 0) {
        $rss->addNewMailToMailingList($mail);
        return $html->addToContent(include 'Views/rss/mailing_done.php');
    }
}
$html->addToContent(include 'Views/rss/mailing.php');