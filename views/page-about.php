<?php
/*
Template Name: About
*/
?>

<?php 

$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'about') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}

$getPeoples = getPeoples()['peoples'];

?>
<style type="text/css">
section {
    padding: 0 0;
}

.contentBlack p {
    color: #fff !important;
}

.contentGray p {
    color: #201D1D !important;
}

.container-avana,
.container-integra,
.container-terra,
.container-lounge {
    padding: 3rem;
}

.content-avana,
.content-integra,
.content-terra,
.content-lounge {
    height: 245px;
}

.btn-about {
    border: 1px solid #fff;
    color: #fff;
}

.btn-about:hover {
    background: #fff;
}

.content-avana p,
.content-integra p,
.content-terra p,
.content-lounge p {
    font-weight: 400;
}

@media screen and (max-width: 769px) {

    .container-avana,
    .container-integra,
    .container-terra,
    .container-lounge {
        padding: 1rem;
    }

    .content-avana,
    .content-integra,
    .content-terra,
    .content-lounge {
        height: auto;
    }
}

@media screen and (max-width: 575px) {

    .container-integra .row .col-lg-6.order-lg-1.order-sm-2.order-xs-2,
    .container-lounge .row .col-lg-6.order-lg-1.order-sm-2.order-xs-2 {
        order: 2;
    }
}
</style>
<?php //do_shortcode($post_data->post_content); ?>
<section class="pt-4 pb-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-xs-12">
                <div class="fs-5 text-secondary fw-normal">
                    <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book.
                    </p>
                    <p>
                        It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of.
                    </p>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section><!-- end -->

<section class="pb-5">
    <!-- wp:nextend/smartslider3 {"slider":"3"} -->
    <div class="wp-block-nextend-smartslider3"><?php echo do_shortcode('[smartslider3 slider="3"]'); ?></div>
    <!-- /wp:nextend/smartslider3 -->

</section>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pb-5">
                <div class="card border-0" style="background-color:#c36a46;">
                    <?php echo do_shortcode('[smartslider3 slider="9"]'); ?>
                    <div class="card-body text-white">
                        <h4 class="fs-5 text-white text-secondary fw-bold">Integra</h4>
                        <p class="card-text text-white fs-5 text-secondary fw-normal">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="border-0 card-footer pb-3 text-right" style="background-color: unset;">
                        <a href="<?php echo get_site_url(); ?>/integra/"
                            class="align-items-center btn learn-more p-2 rounded-0 text-center text-uppercase">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-5">
                <div class="card border-0" style="background-color: #c98838;">
                    <?php echo do_shortcode('[smartslider3 slider="14"]'); ?>
                    <div class="card-body text-white">
                        <h4 class="fs-5 text-white text-secondary fw-bold">Avana</h4>
                        <p class="card-text text-white fs-5 text-secondary fw-normal">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="border-0 card-footer pb-3 text-right" style="background-color: unset;">
                        <a href="<?php echo get_site_url(); ?>/avana/"
                            class="align-items-center btn learn-more p-2 rounded-0 text-center text-uppercase">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-5">
                <div class="card border-0" style="background-color: #8e9b55;">
                    <?php echo do_shortcode('[smartslider3 slider="15"]'); ?>
                    <div class="card-body text-white">
                        <h4 class="fs-5 text-white text-secondary fw-bold">Terra</h4>
                        <p class="card-text text-white fs-5 text-secondary fw-normal">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <div class="border-0 card-footer pb-3 text-right" style="background-color: unset;">
                        <a href="<?php echo get_site_url(); ?>/terra/"
                            class="align-items-center btn learn-more p-2 rounded-0 text-center text-uppercase">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color:#bcbcb6;">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col-lg-6 order-lg-1 order-sm-2 order-xs-2">
                <div class="row">
                    <div class="col-12 content-lounge">
                        <h1 class="text-white fs-1">Residences Lounge</h1>
                        <p class="text-white fs-5">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries
                        </p>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-about rounded-0 text-uppercase mt-4 mb-4" type="button"
                            data-bs-toggle="modal" data-bs-target="#getEnquireModal">
                            Enquire Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0 order-lg-2 order-sm-1 order-xs-1">
                <?php echo do_shortcode('[smartslider3 slider="15"]'); ?>
            </div>
        </div>
    </div>
</section>
<section class="pt-4 pb-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-xs-12">
                <div class="fs-5 text-secondary fw-normal">

                    A beacon of commerce and retail, phase two affirms the next chapter of the promenade’s
                    story.

                    A state of the art office tower combining traditional business and optimising innovative
                    new spaces for the new tech and creative frontier,  with active and lifestyle retail,

                    health focussed dining and entertainment facilities.

                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section><!-- GRAY -->
<!-- Maps -->
<style type="text/css">
.title-map-form {
    font-size: 18px;
    font-family: 'Titillium Web';
    font-feature-settings: normal;
    font-style: normal;
    letter-spacing: 0.1px;
    line-break: auto;
    line-height: 1.8em;
    font-weight: 400;
}
</style>
<!-- <div style="height: 591px; width: 100%" id="map"></div> -->
<!-- Maps Booking View -->
<?php include (__DIR__ . '/locations/map-booking-view.php'); ?>
<!-- End Maps Booking View -->
<!-- end -->

<!-- Modals -->
<div class="modal fade" id="getEnquireModal" tabindex="-1" aria-labelledby="getEnquireModalLabel" aria-hidden="true"
    style="">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden rounded-0">
            <div class="modal-header position-absolute top-0 end-0 border-0 overflow-hidden" style="z-index: 90;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="modal-image">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/07/shutterstock_1812849175-2-1.jpg"
                                alt="Serenia Hills modal image" class="img w-100" style="height:380px;">
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center">
                        <form name="requestBrochure" class="py-5 px-4 py-lg-0">
                            <h3 class="text-light-blue fw-bold mb-4">
                                Live surrounded by unique gardens with
                                the luxury of walkability
                            </h3>
                            <div class="mb-4">
                                <input type="text" name="name" class="form-control py-2 rounded-0" id="formInputName"
                                    placeholder="Full Name" required />
                            </div>
                            <div class="mb-4">
                                <input type="email" name="email" class="form-control py-2 rounded-0"
                                    id="requestBrochureEmailInput" placeholder="example@email.com" required />
                            </div>
                            <div class="mb-4">
                                <input type="text" name="phone" class="form-control py-2 rounded-0"
                                    id="exampleInputPhone" placeholder="Phone Number" required />
                            </div>
                            <button type="submit"
                                class="btn learn-more text-uppercase fs-6 btn-lg w-100 opacity-100 rounded-0"
                                id="requestButton">
                                Submit
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="bookNowModal" tabindex="-1" aria-labelledby="bookNowModalLabel" aria-hidden="true"
    style="z-index: 9999;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden rounded-0">
            <div class="modal-header position-absolute top-0 end-0 border-0 overflow-hidden" style="z-index: 90;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div class="modal-image">
                            <img src="#" alt="Serenia Hills modal image" class="img-fluid cover">
                        </div>
                    </div>

                    <div class="col-lg-6 pt-lg-5 pb-3">
                        <form action="#" class="py-3 px-4 py-lg-0" id=" form-booking" name="requestBookings"
                            class="form-all php-email-form">
                            <div id="success" class="alert alert-success d-none">Thank you, we will
                                contact you soon!</div>

                            <div class="mb-2">
                                <input type="text" class="form-control rounded-0 py-2" id="fullname" name="name"
                                    placeholder="Full Name" required>
                            </div>
                            <div class="mb-2">
                                <input type="email" class="form-control rounded-0 py-2" id="email_booking" name="email"
                                    placeholder="email@example.com" required>
                            </div>
                            <div class="mb-2">
                                <input type="number" class="form-control rounded-0 py-2" id="phone_booking" name="phone"
                                    placeholder="Phone Number" required>
                            </div>
                            <div class="row row-cols-lg-auto g-3 align-items-center mb-2">
                                <div class="col-lg-6">
                                    <input type="date" name="date" class="form-control py-2 rounded-0" id="date_booking"
                                        name="date" required>
                                </div>
                                <div class="col-lg-6">
                                    <select name="time" id="time_booking"
                                        class="form-control form-select f-20 rounded-0" required>
                                        <option value="09:00-12:00">09:00-12:00</option>
                                        <option value="12:00-13:00">12:00-13:00</option>
                                        <option value="13:00-15:00">13:00-15:00</option>
                                        <option value="15:00-18:00">15:00-18:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control rounded-0" id="message" rows="3" name="message"
                                    placeholder="Message"></textarea>
                            </div>
                            <button type="submit" role="button"
                                class="btn learn-more text-uppercase fs-6 btn-lg w-100 opacity-100 rounded-0">
                                <span class="span_send">
                                    SUBMIT
                                </span>
                                <div id="loading-booking-maps"
                                    class="spinner-border text-light position-absolute d-none" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- end content -->