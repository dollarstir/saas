<?php

function topbar($title = 'Blank Page')
{
    include 'title.php';

    echo '<!DOCTYPE html>
    <html lang="zxx">
    <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="main/assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="main/assets/css/animate.css">
    
    <link rel="stylesheet" href="main/assets/css/icofont.min.css">
    
    <link rel="stylesheet" href="main/assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="main/assets/css/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="main/assets/css/magnific-popup.css">
    
    <link rel="stylesheet" href="main/assets/css/meanmenu.css">
    
    <link rel="stylesheet" href="main/assets/css/style.css">
    
    <link rel="stylesheet" href="main/assets/css/responsive.css">
    '.Yolk::uicore('cssa').'
    
    <title>'.title($title).'</title>
    
    '.getfavicons().'
    </head>';
}
