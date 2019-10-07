<?php

require __DIR__ . '/../vendor/autoload.php';

$routes = [];

$routes['/'] = function() {
    echo "<!DOCTYPE html>\n";
    echo "<p>素晴らしい山芋フレームワークへようこそ</p>\n";
};

$routes['/phpinfo.php'] = function () {
    phpinfo();
};

if (isset($routes[$_SERVER['REQUEST_URI']])) {
    $f = $routes[$_SERVER['REQUEST_URI']];
    $f();
} else {
    http_response_code( response_code(404));
    echo "<h1>404 Not Found</h1>";
}