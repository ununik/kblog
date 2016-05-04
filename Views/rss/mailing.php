<?php
$container = '<h2>Zasílání novinek na mail</h2>';
$container .= '<p>Chcete-li dostávat nové články z tohoto blogu do mailu, stačí do následujícího pole vložit svůj mail.</p>';

$container .= '<ul>';
foreach ($err as $err) {
    $container .= '<li>' . $err . '</li>';
}
$container .= '</ul>';

$container .= '<form action="" method="post">';
$container .= '<div class="form_part">';
$container .= '<label for="form_mail">Mail</label>';
$container .= '<input type="text" id="form_mail" name="mail" value="'. $mail .'">';
$container .= '</div>';

$container .= '<input type="submit" value="odeslat" name="mailing">';
$container .= '</form>';

return $container;