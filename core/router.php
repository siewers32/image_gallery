<?php
//routes
$routes = [
    'home' => 'home.php',
    'articles' => 'articles.php',
    'gallery' => 'gallery.php',
];

$content = "content/";

function navLinks($routes) {
    $html = "";
    if(isset($_GET['p']) && in_array($_GET['p'], array_keys($routes))) {
        $active = $_GET['p'];
    } else {
        $active = "home";
    }
    foreach($routes as $label => $link) {
        $class = ($label == $active) ? "nav active": "nav";
        $html .=  "<a class='{$class}' href='index.php?p={$label}'>{$label}</a>".PHP_EOL;
    }
    return $html;
}


function mainContent($routes, $path) {
    if(isset($_GET['p']) && in_array($_GET['p'], array_keys($routes))) {
        include($path.$routes[$_GET['p']]);
    } else {
        include($path.$routes['home']);
    }
}
