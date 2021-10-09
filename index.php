<?php
require_once "controller/autoload.php";

$view = "top.html";

$uri = $_SERVER['REQUEST_URI'];
$uri = substr($uri, 1);
$split_uri = explode('/', $uri);
$route1 = $split_uri[0];
// $route2 = $split_uri[1];

switch ($route1) {
    case 'top':
        break;
    case 'home':
        $view = "home.php";
        break;
    case 'new':
        $view = "new.php";
        break;
    case 'login':
        $view = "login.php";
        break;
    case 'signup':
        $tmp = $split_uri;
        $tmp[] = "f";
        switch ($tmp[1]) {
            case 's':
                $view = "s2.php";
                break;
            case 't':
                $view = "s3.php";
                break;
            default:
                $view = "s1.php";
                break;
        }
    default:
        // アカウントがあれば表示
        break;
}
// routing

include "view/" . $view;
