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
                <img loading="lazy" src="">
            </div>
            <div class="worker-text">
                <h3>John Doe</h3>
                <p>Road Freight Collector</p>
            </div>
            <div class="worker-social">
                <a href="#" target="_blank">
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
