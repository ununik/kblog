<?php
$container = '<h1>Články</h1>';
foreach ($clanky->getEntries() as $clanek) {
    $container .= '<a href="?page=clanek&id=' . $clanek['id'] . '" class="entries">';
    $container .= '<h2>' . $clanek['title'] . '</h2>';
    $container .= '<div>'.$clanek['description'].'</div>';
    $container .= '</a>';
}


if ($clanky->getNumberOfPages() > 1) {
    $container .= '<div id="pageNumbers">';
    for ($i = 1; $i <= $clanky->getNumberOfPages(); $i++) {
        if ($i == $clanky->getPageNumber()) {
            $container .= '<a href="?page=clanky&pageNum='.$i.'" class="pageNumber pageNumberActive">'.$i.'</a>';
        } else {
            $container .= '<a href="?page=clanky&pageNum='.$i.'" class="pageNumber">'.$i.'</a>';
        }
        
    }

    $container .= '</div>';
}

return $container;