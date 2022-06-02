<?php
involve('header');
topbar('Our Services');
?>

<body>

    <div class="loader-content">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="sk-folding-cube">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div>
    </div>


    <?php navbar(3); ?>

    <div class="page-title title-bg-5">
        <div class="container">
            <div class="title-text text-center">
                <h2>Service Details </h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-post-area">
                        <div class="service-details-img">
                            <img src="main/assets/img/services/service-details-2.jpg" alt="service details image">
                        </div>
                        <h2>Air Freight</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="post-img">
                                    <img src="main/assets/img/services/post-img-1.jpg.png" alt="post image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="post-img">
                                    <img src="main/assets/img/services/post-img-2.jpg.png" alt="post image">
                                </div>
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="service-sidebar">
                        <div class="sidebar-widget">
                            <h3>Features</h3>
                            <ul>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Fast & Safe Delivery
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Product Security
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Price Oriented
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Secured Payment
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    24/7 Support
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h3>Contact Us</h3>
                            <ul>
                                <?php sideaddreass(); ?>
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h3>Download Brochures</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icofont-file-alt"></i>
                                        Brochures (1)
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-file-alt"></i>
                                        Brochures (2)
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-file-alt"></i>
                                        Brochures (3)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <div class="company-section company-style-three pb-100">
        <div class="container">
            <div class="company-slider owl-carousel owl-theme">
                <div class="company-logo">
                    <a href="#"><img src="../main/assets/img/company/1.png" alt="logo"></a>
                </div>
                <div class="company-logo">
                    <a href="#"><img src="../main/assets/img/company/2.png" alt="logo"></a>
                </div>
                <div class="company-logo">
                    <a href="#"><img src="../main/assets/img/company/3.png" alt="logo"></a>
                </div>
                <div class="company-logo">
                    <a href="#"><img src="../main/assets/img/company/4.png" alt="logo"></a>
                </div>
                <div class="company-logo">
                    <a href="#"><img src="../main/assets/img/company/5.png" alt="logo"></a>
                </div>
            </div>
        </div>
    </div> -->


    <?php involve('footer'); ?>


    <div class="top-btn">
        <i class="icofont-scroll-bubble-up"></i>
    </div>

    <?php involve('script'); ?>
</body>

</html>