<?php
foreach (Navigation::getAllCategories() as $nav) {
    $html->addToMenu('<a href="?page=clanky">'.$nav['title'].'</a>');
}