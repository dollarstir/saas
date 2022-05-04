<?php

$a = fetchall('appsettings');
$name = $a[0]['appname'];

echo '<footer class="footer-area">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="footer-widget">
<a href="main/index.html">
<img src="main/assets/img/logo-2.png" alt="logo">
</a>
<ul>
<li>
<i class="icofont-phone"></i>
<a href="main/tel:+0112345678">
+1 123 456 789
</a>
</li>
<li>
<i class="icofont-ui-message"></i>
<a href="main/../../cdn-cgi/l/email-protection.html#254d4049494a65434c5d440b464a48">
<span class="__cf_email__" data-cfemail="741c1118181b34121d0c155a171b19">[email&#160;protected]</span>
</a>
</li>
<li>
<i class="icofont-location-pin"></i>
28/A , New York, USA
</li>
</ul>
<div class="footer-social">
<a href="main/#" target="_blank">
<i class="icofont-facebook"></i>
</a>
<a href="main/#" target="_blank">
<i class="icofont-instagram"></i>
</a>
<a href="main/#" target="_blank">
<i class="icofont-twitter"></i>
</a>
<a href="main/#" target="_blank">
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
<a href="main/service-details.html">Air Freight</a>
</li>
<li>
<a href="main/service-details.html">Road Freight</a>
</li>
<li>
<a href="main/ocean-freight.html">Ocean Freight</a>
</li>
<li>
<a href="main/service-details.html">Warehousing</a>
</li>
<li>
<a href="main/service-details.html">Storage </a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="footer-widget">
<h3>Our Support</h3>
<ul>
<li>
 <a href="main/privacy.html">Privacy & Policy</a>
</li>
<li>
<a href="main/faq.html">FAQS</a>
</li>
<li>
<a href="main/terms.html">Terms & Conditions</a>
</li>
<li>
<a href="main/contact.html">Contact Us</a>
</li>
<li>
<a href="main/about.html">About Us</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="footer-widget">
<h3>Quick Links</h3>
<ul>
<li>
<a href="main/index.html">Home</a>
</li>
<li>
<a href="main/about.html">About Us</a>
</li>
<li>
<a href="main/service.html"> Our Services </a>
<li>
<a href="main/blog.html">Our Blog</a>
</li>
<li>
<a href="main/contact.html">Eemrgency Support</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="copyright-area">
<p>Copyright @2021 '.$name.'. All Rights Reserved by <a href="https://github.com/dollarstir" target="_blank">Dollarsoft</a></p>
</div>
<div class="lines">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
</div>
</footer>'
;
