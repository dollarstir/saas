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
        <div class="accordion-content" id="item1">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                aliquip ex ea commodo.</p>
        </div>
    </div>';
    }
}
