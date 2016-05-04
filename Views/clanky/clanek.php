<?php
$container = "<h1>{$clanek['title']}</h1>";
$date = date('H:i - j. n. Y', $clanek['timestamp']);
$container .= "<div>Vytvořeno: $date</div>";
$container .= "<div><strong>{$clanek['description']}</strong></div>";
$container .= $clanek['text'];

return $container;