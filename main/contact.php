<?php
involve('header');
topbar('Contact Us');
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


    <?php navbar(5); ?>


    <div class="page-title title-bg-7">
        <div class="container">
            <div class="title-text text-center">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        Contact Us
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <?php contactpage(); ?>


    <section class="contact-section contact-style-two pb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Ask Any Question</h2>
                <!-- <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet
                    a own blind you ago hand.</p> -->
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact-area">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="number" id="number" class="form-control" required
                                            data-error="Please enter your number" placeholder="Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-lg-12 col-md-12 text-center">
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
                <img src="main/assets/img/newsletter-img.png" alt="newsletter image">
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