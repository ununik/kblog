<?php
$container = '<!DOCTYPE html>';
$container .= '<html>';
$container .= '<head><link rel="stylesheet" type="text/css" href="css/screen.css">';
$container .= '<script src="js/page.js"></script>';
$container .= "<title>Titulek</title>";
$container .= '</head>';
$container .= '<body>';
$container .= '<div id="page">';

$container .= '<div id="header">';
$container .= '<div id="topHeader"></div>';
$container .= '<div id="logo"></div>';
$container .= '<div id="avatar"></div>';
$container .= '<div id="hledani"><div id="hledani_ikona" onclick="searching()"></div><input type="text" id="hledani_text"></div>';
$container .= '<a id="zprava"></a>';
$container .= '</div>';

$container .= '<div id="content">';
$container .= '<h2>Lorem ipsum</h2>';
$container .= '<p>LOOOOoooooong text</p>';	
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '<p>LOOOOoooooong text</p>';
$container .= '</div>';

$container .= '<div id="footer">';
$container .= '<div id="bottomLink"></div>';
$container .= '<div id="footer_menu">';
$container .= '<a id="footer_rss" title="P�ihl�sit se k odb�ru"></a>';
$container .= '<a id="footer_fb" title="Sd�let na Facebooku"></a>';
$container .= '<a id="footer_google" title="Sd�let na G	oogle plus"></a>';
$container .= '<a id="footer_tisk" title="Vytisknout"></a>';
$container .= '</div>';
$container .= '</div>';

$container .= '</div>';

$container .= '<div id="navigation">';
$container .= '<ul id="menu">';
$container .= '<li>Menu 1</li>';
$container .= '<li>Menu 2</li>';
$container .= '</ul>';
$container .= '</div>';

$container .= '</body>';
$container .= '</html>';

return $container;