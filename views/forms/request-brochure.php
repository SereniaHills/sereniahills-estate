<div class="position-relative">
    <div id="carouselExampleIndicators" class="carousel slide" data-interval="false" data-bs-ride="carousel">

        <style type="text/css">
        .carousel-bannerhome {
            height: 100vh;
        }

        .carousel-bannerhome img {
            height: 100%;
        }

        @media screen and (min-width: 1025px) {

            .carousel-bannerhome {
                height: auto;
            }
        }

        @media screen and (max-width: 1024px) {
            .carousel-bannerhome {
                height: auto;
            }
        }

        @media screen and (max-width: 981px) {
            .carousel-bannerhome {
                height: 450px;
            }
        }

        @media screen and (max-width: 769px) {

            .img-slider {
                height: 740px;
            }
        }

        @media screen and (max-width: 481px) {

            .img-slider {
                height: 450px;
            }
        }
        </style>
        <?php
        echo do_shortcode('[smartslider3 slider="10"]');
        ?>
    </div>
    <!-- End Hero -->
    <style type="text/css">
    .headline-form {
        font-family: 'Titillium Web';
        font-style: normal;
        font-weight: 700;
    }
    </style>
    <div id="formBrochure" class="container position-absolute start-0 end-0 top-0 bottom-0 d-flex align-items-center">
        <div class="row pt-5">
            <div class="col-md-12">
                <form action="#" id="form-home-request" name="requestBrochure" class="form-all php-email-form">
                    <input type="hidden" name="_token" value="HTOIO8YcWrbSk0h20dFiZkg2jVvblz63ASXexJRE">
                    <h1 class="headline-form text-white fw-bold">
                        <span>A new milestone for Intiland &</span>
                        <br>
                        <span> Serenia Hills</span>
                    </h1>
                    <div class="mb-2">
                        <input type="text" id="name" name="name" class="form-control rounded-0 py-2" id="formInputName"
                            placeholder="Full Name" required>
                    </div>
                    <div class="mb-2">
                        <input type="email" id="email" name="email" class="form-control rounded-0 py-2"
                            placeholder="Email Address*" required>
                    </div>
                    <div class="mb-2">
                        <input type="tel" id="phone" name="phone" class="form-control rounded-0 py-2"
                            placeholder="Phone Number*" required>
                    </div>
                    <div class="mb-2">
                        <div class="g-recaptcha" id="rcaptcha" data-sitekey="6LfNRiMfAAAAAMoJeUPuZpEl3M-zj3bIqE7KTwYq">
                        </div>
                        <span id="captcha" style="color:red"></span>
                    </div>
                    <button type="submit" class="btn bg-dark-gray fs-6 learn-more text-uppercase w-100">
                        <span class="span_request">
                            Request Pricelist
                        </span>
                        <div class="spinner-border text-light position-absolute d-none" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                    <div class="mb-2">
                        <div id="success-message" class="alert alert-primary d-none" role="alert"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>