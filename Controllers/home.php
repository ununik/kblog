<?php
$page = new Page();
$homePage = $page->getHomePage();

$html->addToContent(include 'Views/home/home.php');