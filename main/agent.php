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


    <?php navbar(4); ?>


    <div class="page-title title-bg-7">
        <div class="container">
            <div class="title-text text-center">
                <h2>AGENTS</h2>
                <ul>
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>Agents</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="worker-section worker-style-two pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Agents</span>
                <h2>Our Valuable Agents</h2>
                <!-- <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet a own blind you ago hand.</p> -->
            </div>
            <div class="row">
                <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="worker-card">
                        <div class="worker-img">
                            <img loading="lazy" src="main/assets/img/worker/1.jpg" alt="worker image">
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
                </div> -->

                <?php agents(); ?>
                
            </div>
        </div>
    </section>


    <div class="newsletter-section">
        <div class="container">
            <div class="newsletter-area">
                <h2>Join Newsletter For Daily Update</h2>
                <div class="col-lg-6 p-0">
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required
                            autocomplete="off">
                        <button class="default-btn electronics-btn" type="submit">
                            Subscribe Now
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
                <img loading="lazy" src="main/assets/img/newsletter-img.png" alt="newsletter image">
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