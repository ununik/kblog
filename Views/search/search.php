<?php
$container = '<h1>Hledání</h1>';
$container .= '<div>Hledaný výraz: <b>'.strtoupper($search->search).'</b></div>';

return $container;