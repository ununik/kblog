<?php
$conainer = '<h1>Zpráva</h1>';
$conainer .= '<p>Touto cestou mě můžete kontaktovat. Stačí vyplnit tento formulář a vše se odešle na můj mail.</p>';

$conainer .= '<ul>';
foreach ($err as $err) {
    $conainer .= '<li>' . $err . '</li>';
}
$conainer .= '</ul>';

$conainer .= '<form action="" method="post">';

$conainer .= '<div class="form_part">';
$conainer .= '<label for="form_mail">Mail</label>';
$conainer .= '<input type="text" id="form_mail" name="mail" value="'. $mail .'">';
$conainer .= '</div>';

$conainer .= '<div class="form_part">';
$conainer .= '<label for="form_subject">Předmět</label>';
$conainer .= '<input type="text" id="form_subject" name="subject" value="'. $subject .'">';
$conainer .= '</div>';

$conainer .= '<div class="form_part">';
$conainer .= '<label for="form_message">Zpráva</label>';
$conainer .= '<textarea id="form_message" name="message">' . $message . '</textarea>';
$conainer .= '</div>';

$conainer .= '<input type="submit" value="odeslat">';
$conainer .= '</form>';

return $conainer;