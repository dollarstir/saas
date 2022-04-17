<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('az/main.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('az/main.php', $context);
        }
    ),
]);
$router->launch();
