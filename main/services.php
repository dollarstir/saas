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

    <div class="page-title title-bg-2">
        <div class="container">
            <div class="title-text text-center">
                <h2>Our Services</h2>
                <ul>
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="transport-section transport-style-three pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Services</span>
                <h2>We Provide Products Allover The World by Our Transport Systems</h2>
            </div>
            <div class="row">
                <?php services(); ?>
            </div>
        </div>
    </section>


    <div class="choose-style-two pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>We are Top Rated Transport Logistic</h2>
                <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet
                    a own blind you ago hand.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="choose-card">
                                <i class="icofont-fast-delivery"></i>
                                <h3>Fast & Safe Delivery</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="choose-card">
                                <i class="icofont-ssl-security"></i>
                                <h3>Product Security</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="choose-card">
                                <i class="icofont-diamond"></i>
                                <h3>Price Oriented </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-image">
                        <img src="assets/img/why-choose/choose-img.png" alt="why Choose image">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-12 col-sm-4">
                            <div class="choose-card">
                                <i class="icofont-ui-browser"></i>
                                <h3>Secured Payment</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-4">
                            <div class="choose-card">
                                <i class="icofont-live-support"></i>
                                <h3>24/7 Support</h3>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-4">
                            <div class="choose-card">
                                <i class="icofont-like"></i>
                                <h3>Well Experienced</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="newsletter-section">
        <div class="container">
            <div class="newsletter-area">
                <h2>Join Newsletter For Daily Update</h2>
                <div class="col-lg-6 p-0">
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required
                            autocomplete="off">
                        <button class="default-btn electronics-btn" type="submit">
                            Subscribe Now
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
                <img src="assets/img/newsletter-img.png" alt="newsletter image">
            </div>
        </div>
    </div>


    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <a href="index.html">
                            <img src="assets/img/logo-2.png" alt="logo">
                        </a>
                        <ul>
                            <li>
                                <i class="icofont-phone"></i>
                                <a href="tel:+0112345678">
                                    +1 123 456 789
                                </a>
                            </li>
                            <li>
                                <i class="icofont-ui-message"></i>
                                <a href="../../cdn-cgi/l/email-protection.html#3058555c5c5f70565948511e535f5d">
                                    <span class="__cf_email__"
                                        data-cfemail="6f070a0303002f0906170e410c0002">[email&#160;protected]</span>
                                </a>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                28/A , New York, USA
                            </li>
                        </ul>
                        <div class="footer-social">
                            <a href="#" target="_blank">
                                <i class="icofont-facebook"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="icofont-instagram"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="icofont-twitter"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="icofont-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Our Services</h3>
                        <ul>
                            <li>
                                <a href="service-details.html">Air Freight</a>
                            </li>
                            <li>
                                <a href="service-details.html">Road Freight</a>
                            </li>
                            <li>
                                <a href="ocean-freight.html">Ocean Freight</a>
                            </li>
                            <li>
                                <a href="service-details.html">Warehousing</a>
                            </li>
                            <li>
                                <a href="service-details.html">Storage</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Our Support</h3>
                        <ul>
                            <li>
                                <a href="privacy.html">Privacy & Policy</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQS</a>
                            </li>
                            <li>
                                <a href="terms.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="service.html">Our Services</a>
                            <li>
                                <a href="blog.html">Our Blog</a>
                            </li>
                            <li>
                                <a href="contact.html">Eemrgency Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright @2021 Fixa. All Rights Reserved by <a href="https://hibootstrap.com"
                    target="_blank">HiBootstrap</a></p>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </footer>


    <div class="top-btn">
        <i class="icofont-scroll-bubble-up"></i>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>