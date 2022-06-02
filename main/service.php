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
                    <?php servicedetail($context['id']); ?>
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
                                <?php sidebaradress(); ?>
                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h3>Download Brochures</h3>
                            <ul>
                               <?php download($context['id'], 'service'); ?>
                                
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