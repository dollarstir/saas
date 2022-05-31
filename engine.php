<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('main/main1.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('main/main1.php', $context);
        }
    ),

    new Route(
        '/agents',
        function ($context) {
            return Viewer::view('main/agent.php', $context);
        }
    ),

    new Route(
        '/aboutus',
        function ($context) {
            return Viewer::view('main/about.php', $context);
        }
    ),

    new Route(
        '/faq',
        function ($context) {
            return Viewer::view('main/faq.php', $context);
        }
    ),

    new Route(
        '/contactus',
        function ($context) {
            return Viewer::view('main/contact.php', $context);
        }
    ),

    // admin routes

    new Route(
        '/adminhome',
        function ($context) {
            return Viewer::view('main/backend/main.php', $context);
        }
    ),

    new Route(
        '/adminauth',
        function ($context) {
            return Viewer::view('main/backend/login.php', $context);
        }
    ),

    new Route(
        '/addpractice',
        function ($context) {
            return Viewer::view('main/backend/newpractice.php', $context);
        }
    ),

    new Route(
        '/viewpractices',
        function ($context) {
            return Viewer::view('main/backend/vpractice.php', $context);
        }
    ),
]);
$router->launch();
