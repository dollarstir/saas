<?php
involve('header');
topbar('Terms & Conditions');
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


    <div class="page-title title-bg-2">
        <div class="container">
            <div class="title-text text-center">
                <h2>Terms and Conditions</h2>
                <ul>
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>Terms and Conditions </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="terms-section pt-100 pb-100">
        <div class="container">
            <div class="terms-text">
                <h2>Terms of Service</h2>

                <ol>
                    <?php toc(); ?>
                </ol>
                <!-- <h3>1. Terms</h3>
                <p>By accessing the website you are agreeing to be bound by these terms of service, all applicable laws
                    and regulations, and agree that you are responsible for compliance with any applicable local laws.
                    If you do not agree with any of these terms, you are prohibited from using or accessing this site.
                    The materials contained in this website are protected by applicable copyright and trademark law.</p>
                <h3>2. Limitations</h3>
                <p>In no event shall Parcelgo or its suppliers be liable for any damages (including, without limitation,
                    damages for loss of data or profit, or due to business interruption) arising out of the use or
                    inability to use the materials on Parcelgo's website, even if Parccelgo or a Parccelgo authorized representative
                    has been notified orally or in writing of the possibility of such damage. Because some jurisdictions
                    do not allow limitations on implied warranties, or limitations of liability for consequential or
                    incidental damages, these limitations may not apply to you.</p>
                <h3>3. Accuracy of materials</h3>
                <p>The materials appearing on Parccelgo's website could include technical, typographical, or photographic
                    errors. Parccelgo does not warrant that any of the materials on its website are accurate, complete or
                    current. Parccelgo may make changes to the materials contained on its website at any time without notice.
                    However Parccelgo does not make any commitment to update the materials.</p>
                <h3>4. Links</h3>
                <p>Parccelgo has not reviewed all of the sites linked to its website and is not responsible for the contents
                    of any such linked site. The inclusion of any link does not imply endorsement by Parccelgo of the site.
                    Use of any such linked website is at the user's own risk.</p>
                <h3>5. Modifications</h3>
                <p>Parccelgo may revise these terms of service for its website at any time without notice. By using this
                    website you are agreeing to be bound by the then current version of these terms of service.</p>
                <h3>6. Governing Law</h3>
                <p>These terms and conditions are governed by and construed in accordance with the laws of UK and you
                    irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p> -->
            </div>
        </div>
    </div>


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