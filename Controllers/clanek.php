<?php
if (!isset($_GET['id']) || $_GET['id']=="") {
    return include 'Controllers/clanky.php';
}

$clanekClass = new Clanky();

$clanek = $clanekClass->getEntryById($_GET['id']);

$html->setTitle($clanek['title']);
$html->addToContent(include 'Views/clanky/clanek.php');