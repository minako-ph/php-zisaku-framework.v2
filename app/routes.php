<?php

$routes = [];

$routes['/'] = function() {
    echo "<!DOCTYPE html>\n";
    echo "<p>素晴らしい山芋フレームワークへようこそ</p>\n";
    exit;
};

$routes['/phpinfo.php'] = function () {
    phpinfo();
    exit;
};

return $routes;