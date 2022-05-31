<?php
involve('header');
topbar('Our Trusted Agents');
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


    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="assets/img/logo.png" alt="logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Home</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link">Home Page 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-two.html" class="nav-link">Home Page 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-three.html" class="nav-link">Home Page 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Services</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="service.html" class="nav-link">Services One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-two.html" class="nav-link">Services Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ocean-freight.html" class="nav-link">Ocean Freight</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Services Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Workers</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="worker.html" class="nav-link">Workers Style One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="worker-two.html" class="nav-link">Workers Style Two</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle active">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link active">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">404</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="why-choose.html" class="nav-link">Why Choose Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy.html" class="nav-link">Privacy policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms.html" class="nav-link">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-two.html" class="nav-link">Blog Style Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div class="page-title title-bg-8">
        <div class="container">
            <div class="title-text text-center">
                <h2>FAQ</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="faq-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>FAQ</span>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="accordions">
                        
                        <?php faq(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section pt-100 pb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Ask Any Question</h2>
                <!-- <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet
                    a own blind you ago hand.</p> -->
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-img">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-area">
                        <form id="contactForm">
                            <h2>Lets Talk!</h2>
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="number" name="number" id="number" class="form-control" required
                                            data-error="Please enter your number" placeholder="Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" class="form-control" required
                                            data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="message-field" id="message" cols="30" rows="5"
                                            required data-error="Please type your message"
                                            placeholder="Write Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn contact-btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 alert-text text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="newsletter-section newsletter-style-two">
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


    <?php involve('footer'); ?>


    <div class="top-btn">
        <i class="icofont-scroll-bubble-up"></i>
    </div>

    <?php involve('script'); ?>
</body>

</html>