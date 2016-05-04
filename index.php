<?php
include 'Configuration/PersonalConfig.php';
include 'Configuration/DatabaseConfig.php';
function __autoload($className)
{
    include_once 'Models/Classes/' . $className . '.class.php';
}

$html = new HTML();

$html->setTitle('novy titulek');
include 'Controllers/navigation/navigation.php';

if (isset($_GET['page']) && $_GET['page']!="") {
    $html->setGET_PAGE($_GET['page']);
}

include 'Controllers/'.$html->getPage.'.php';
    
print include 'Views/page.php';