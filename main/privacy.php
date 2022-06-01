<?php
involve('header');
topbar('Privacy Policy');
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


    <?php navbar(0); ?>


    <div class="page-title title-bg-1">
        <div class="container">
            <div class="title-text text-center">
                <h2>Privacy and Policy</h2>
                <ul>
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>Privacy and Policy</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="privacy-section pt-100 pb-100">
        <div class="container">
            <div class="privacy-text">
                
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


    <?php involve('footer'); ?>


    <div class="top-btn">
        <i class="icofont-scroll-bubble-up"></i>
    </div>

    <?php involve('script'); ?>
</body>

</html>