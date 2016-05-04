<?php
$html->setTitle('Články');
$clanky = new Clanky();

if (isset($_GET['pageNum']) && $_GET['pageNum']!= "") {
    $clanky->setPageNumber($_GET['pageNum']);
}

$html->addToContent(include 'Views/clanky/clanky.php');