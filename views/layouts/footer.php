<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <h3>
                    <a href="index.html">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/All-Logos--06.png"
                            style="width: 180px;" alt="Serenia HIlls" loading="lazy">
                    </a>
                </h3>
                <div class="col-lg-4 col-md-6 footer-contact">
                    <p>
                        Marketing Gallery<br>Jln. Karang Tengah Raya No.9<br>
                        Lebak Bulus, Jakarta Selatan 12440 <br>
                        Indonesia<br>
                        <br>
                        <!-- <strong>T:</strong> +62 8778 8665 757<br> -->
                        <strong>F:</strong> 021 7666 143<br>
                        For more information email : <a href="mailto:ask@sereniahills.co.id"
                            style="color:#fff;">ask@sereniahills.co.id</a>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 footer-links">
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="index.html" style="text-transform: uppercase;">Home</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="units.html" style="text-transform: uppercase;">Units</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="about.html" style="text-transform: uppercase;">About</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="request-pricelist.html" style="text-transform: uppercase;">Request
                                Priceslist</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <p style="text-align: left;">
                        <img class="img-fluid"
                            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/All-Logos--06.png"
                            alt="Serenia HIlls" loading="lazy">
                    </p>
                    <h4>Subscribe for Exclusive Offers</h4>
                    <div id="success-message" class="alert alert-primary d-none" role="alert"></div>
                    <form action="#" id="form-subscribes" name="requestSubscribes">
                        <input type="email" name="email" id="email_subscribe" required>
                        <input type="submit" value="Subscribe">
                        <div id="spinner-subscribe" class="spinner-border text-light position-absolute d-none"
                            role="status" style="right: 35px;top: 4px;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-md-flex py-3">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright fw-light fs-6">
                &copy; Copyright Serenia HIlls. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
    </div>
</footer>
<!-- End Footer -->
<div id="preloader"></div>

<div class="announcent">
    <div class="announcent-toggle" style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chevron-left"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        </svg>
    </div>
    <div class="right-announcent icon-links b-bluedark c-white">
        <div class="d-none" style="border-bottom:0.5px solid #c3c3c3;">
            <a href="#" target="_blank" class="whatsapp">
                <i class="bx bxl-whatsapp"></i>
            </a>
        </div>
        <div style="border-bottom:0.5px solid #c3c3c3;">
            <a href="mailto:ask@sereniahills.co.id" target="_blank" class="mail-send">
                <i class="bx bx-mail-send"></i>
            </a>
        </div>
        <div class="d-none">
            <a href="tel:#" target="_blank" class="phone">
                <i class="bx bx-phone"></i>
            </a>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendor/purecounter/purecounter.js">
</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendor/aos/aos.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.0/swiper-bundle.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js">
</script>
<!-- Template Main JS File -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/style.js"></script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCk3piiPT9-8oHwggreQk3mFYfAz8VPI5U&amp;callback=initMap">
</script>

</body>

</html>