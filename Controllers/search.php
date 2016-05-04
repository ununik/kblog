<?php
$search = new Search();

if (isset($_GET['search'])) {
    $search->search = $_GET['search'];
}
$html->setTitle('Hledání na webu');


$html->addToContent(include 'Views/search/search.php');