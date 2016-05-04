<?php
$container = '<!DOCTYPE html>';
$container .= '<html>';
$container .= '<meta http-equiv="Content-language" content="cs">';
$container .= '<meta charset="UTF-8">';
$container .= '<head><link rel="stylesheet" type="text/css" href="css/screen.css">';
$container .= '<script src="js/page.js"></script>';
$container .= "<title>{$html->getTitle()}</title>";
$container .= '</head>';
$container .= '<body>';
$container .= '<div id="page">';

$container .= '<div id="header">';
$container .= '<div id="topHeader"></div>';
$container .= '<div id="logo"></div>';
$container .= '<div id="avatar"></div>';
$container .= '<a id="zprava" href="index.php?page=message" title="Odeslat zprávu"></a>';
$container .= '<div id="hledani"><div id="hledani_ikona" onclick="searching()"></div><input type="text" id="hledani_text" onkeypress="if (event.keyCode == 13) { searching() };"></div>';
$container .= '</div>';

$container .= '<div id="content">';
$container .= $html->getContent();
$container .= '</div>';

$container .= '<div id="footer">';
$container .= '<div id="bottomLink"></div>';
$container .= '<div id="footer_menu">';
$container .= '<a id="footer_rss" title="Přihlásit se k odběru" href="?page=rss"></a>';
$container .= '<a id="footer_fb" title="Sdílet na Facebooku"></a>';
$container .= '<a id="footer_google" title="Sdílet na Google plus"></a>';
$container .= '<a id="footer_tisk" title="Vytisknout" onclick="window.print()"></a>';
$container .= '</div>';
$container .= '</div>';

$container .= '</div>';

$container .= '<div id="navigation">';
$container .= '<ul id="menu">';
foreach ($html->getMenu() as $menu) {
    $container .= "<li>$menu</li>";
}
$container .= '</ul>';
$container .= '</div>';

$container .= '</body>';
$container .= '</html>';

return $container;