<?php

function title($page)
{
    $res = fetchall('appsettings');

    return $res[0]['appname'].' - '.$page;
}

function getfavicons()
{
    $res = fetchall('appsettings');
    $ss = ($res[0]['favicon'] == '') ? '<link rel="icon" type="image/png" href="main/assets/img/favicon.png">' : '<link rel="icon" type="image/'.$res[0]['icontype'].'" href="yolkassets/upload/'.$res[0]['favicon'].'">';
    echo $ss;
}

function logo()
{
    $res = fetchall('appsettings');

    $ss = ($res[0]['logo'] == '') ? '<img src="main/assets/img/logo-2.png" alt="logo">' : '<img src="yolkassets/upload/'.$res[0]['logo'].'" alt="logo">';

    return $ss;
}
// getting agents

function agents()
{
    $res = fetchall('agent');

    foreach ($res as $row) {
        echo '<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
        <div class="worker-card">
            <div class="worker-img">
                <img loading="lazy" src="yolkassets/upload/'.$row['pic'].'">
            </div>
            <div class="worker-text">
                <h3>'.$row['firstname'].' '.$row['lastname'].'</h3>
                <p>'.$row['services'].'</p>
            </div>
            <div class="worker-social">
                <a href="agent/" target="_blank">
                    <i class="icofont-facebook"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="icofont-twitter"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="icofont-instagram"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="icofont-swoosh-right"></i>
                </a>
            </div>
        </div>
    </div>';
    }
}

function newsletter($email)
{
    return $res = insert('newsletter', ['email' => $email]);
}
function questions($name, $email, $phone, $subject, $message)
{
    $dd = date('jS F, Y');

    return $res = insert('messages', [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
        'datesent' => $dd,
    ]);
}
function aboutus()
{
    $res = fetchall('aboutpage');
    $row = $res[0];

    echo '<section class="about-section about-style-two pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="yolkassets/upload/'.$row['image'].'"
                        alt="about image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>'.$row['title'].'</h2>
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                aria-controls="about" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mission-tab" data-bs-toggle="tab" href="#mission" role="tab"
                                aria-controls="mission" aria-selected="false">Our Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="goal-tab" data-bs-toggle="tab" href="#goal" role="tab"
                                aria-controls="goal" aria-selected="false">Our Goal</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="about" role="tabpanel"
                            aria-labelledby="about-tab">
                            <p>
                            '.$row['content'].'
                            </p>
                        </div>
                        <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                            <p>'.$row['mission'].'
                            </p>
                        </div>
                        <div class="tab-pane fade" id="goal" role="tabpanel" aria-labelledby="goal-tab">
                            <p>'.$row['goals'].'
                            </p>
                        </div>
                    </div>
                    <!--<div class="theme-btn">
                        <a href="about.html" class="default-btn">Know More</a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>';
}

function faq()
{
    $res = fetchall('faq');
    $num = 0;
    foreach ($res as $row) {
        ++$num;
        echo '<div class="accordion-item">
        <div class="accordion-title" data-tab="item'.$num.'">
            <h2>'.$row['title'].'<i class="icofont-stylish-right down-arrow"></i></h2>
        </div>
        <div class="accordion-content" id="item'.$num.'">
            <p>'.$row['content'].'</p>
        </div>
    </div>';
    }
}
function contactpage()
{
    $res = fetchall('contactpage');
    $row = $res[0];

    echo '<div class="contact-card-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <i class="icofont-phone"></i>
                    <a href="tel:'.$row['phone1'].'">+'.$row['phone1'].'</a>
                    <a href="tel:'.$row['phone2'].'">'.$row['phone2'].'</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-card">
                    <i class="icofont-ui-message"></i>
                    <a href="mailto:'.$row['email1'].'"><span
                            class="__cf_email__"
                            >'.$row['email1'].'</span></a>
                            <a href="mailto:'.$row['email2'].'"><span
                            class="__cf_email__"
                            >'.$row['email2'].'</span></a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                <div class="contact-card">
                    <i class="icofont-location-pin"></i>
                    <ul>
                        <li>'.$row['address1'].'</li>
                        <li>'.$row['address2'].'</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>';
}
function services()
{
    $res = fetchall('services');
    foreach ($res as $row) {
        if (strlen($row['content']) > 40) {
            $content = substr($row['content'], 0, 40).'...';
        } else {
            $content = $row['content'];
        }
        echo '<div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
        <div class="transport-card">
            <div class="transport-img">
                <img src="yolkassets/upload/'.$row['image'].'" alt="'.$row['title'].'">
            </div>
            <div class="transport-text">
                <h3>'.$row['title'].'</h3>
                <p>'.$content.'</p>
                <div class="theme-btn">
                    <a href="service-details.html" class="default-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>';
    }
}

function testimony()
{
    $res = fetchall('testimony');
    foreach ($res as $row) {
        echo '<div class="feedback-items">
        <i class="icofont-quote-right"></i>
        <p>'.$row['feedback'].'.</p>
        <img loading="lazy" src="yolkassets/upload/'.$row['pic'].'" alt="client image">
        <h3>'.$row['name'].'</h3>
        <span>'.$row['position'].'</span>
    </div>';
    }
}

function partners()
{
    $res = fetchall('partners');
    foreach ($res as $row) {
        echo '';
    }
}
// logical navbar by Frederick Ennin

function navbar($pid)
{
    $pages = [
        'Home' => 'home',
        'About' => 'aboutus',
        'Services' => 'services',
        'Agents' => 'agents',
        'Contact' => 'contactus',
    ];
    $tt = '<div class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="header-left">
                    <ul>
                        <li>
                            <a href="">
                                <i class="icofont-ui-message"></i>
                                <span class="__cf_email__">[email&#160;protected]</span>
                            </a>
                        </li>
                        <li>
                            <a href="main/tel:+10235415654">
                                <i class="icofont-phone"></i>
                                +10235415654
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-right">
                    <ul class="header-social">
                        <li>
                            <a href="main/#" target="_blank">
                                <i class="icofont-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="main/#" target="_blank">
                                <i class="icofont-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="main/#" target="_blank">
                                <i class="icofont-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="main/#" target="_blank">
                                <i class="icofont-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area">

    <div class="mobile-nav">
        <a href="home" class="logo">
            '.logo().'
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="home">
                    <img loading="lazy" src="main/assets/img/logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">';
    $num = 0;
    foreach ($pages as $key => $value) {
        ++$num;

        if ($pid == $num) {
            $tt .= '<li class="nav-item">
                 <a href="'.$value.'" class="nav-link active">'.$key.'</a>
                </li>';
        } else {
            $tt .= '<li class="nav-item">
                 <a href="'.$value.'" class="nav-link">'.$key.'</a>
                </li>';
        }
    }
    $tt .= ' </ul>
                </div>
            </nav>
        </div>
    </div>
</div>';

    echo $tt;
}
