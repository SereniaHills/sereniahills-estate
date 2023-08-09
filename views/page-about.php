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
    height: 300px;
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
<section class="p-4">
    <div class="container p-lg-0" data-aos="fade-up">
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
<!-- Serenia Hills -->
<section>
    <div class="container container-avana" style="background-color:#c98838;">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <?php echo do_shortcode('[smartslider3 slider="9"]'); ?>
            </div>
            <div class="col-lg-6 contentBlack">
                <div class="row">
                    <div class="col-12 content-avana">
                        <h1 class="text-white fs-1">Avana</h1>
                        <p class="text-white fs-5">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a
                            type specimen book. It has survived not only five centuries
                        </p>
                    </div>
                    <div class="col-12 text-right">
                        <a href="/avana" class="btn btn-about rounded-0 text-uppercase mt-4" type="button">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="p-4">
    <div class="container p-lg-0" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-xs-12">
                <div class="fs-5 text-secondary fw-normal">
                    An epicurious journey awaits, a fusion of culture, cuisines and the rich tapestry of
                    Jakarta’s vibrant social scene.

                    Surrounding malls,  rooftop bars,  restaurants,  cafés and deli’s make Jakarta’s centre
                    a food and drink haven, an ideal place for enjoying the best in local and international
                    cuisine.  As the sun sets you are a stone throw away from the cities top clubs, hotels
                    bars,  fine dining and entertainment.

                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<section>
    <div class="container container-integra" style="background-color:#c36a46;">
        <div class="row">
            <div class="col-lg-6 order-lg-1 order-sm-2 order-xs-2">
                <div class="row">
                    <div class="col-12 content-integra">
                        <h1 class="text-white fs-1">Integra</h1>
                        <p class="text-white fs-5">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries
                        </p>
                    </div>
                    <div class="col-12 text-lg-start text-sm-endt text-xs-end">
                        <a href="/integra" class="btn btn-about rounded-0 text-uppercase mt-4" type="button">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0 order-lg-2 order-sm-1 order-xs-1">
                <?php echo do_shortcode('[smartslider3 slider="14"]'); ?>
            </div>
        </div>
    </div>
</section>
<section class="p-4">
    <div class="container p-lg-0" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-xs-12">
                <div class="fs-5 text-secondary fw-normal">

                    Easy access throughout the development via the promenade, internal walkways and sky
                    bridges create an oasis of unrivalled convenience.

                    Fifty Seven Promenade boasts multiple exits to Jakarta’s main thoroughfares, arteries
                    and tollsand excellent public transport links to the Trans Jakarta Bus-way, future
                    Airport Express Train, Rail network and future MRT network.

                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<!-- Black -->

<section>
    <div class="container container-terra" style="background-color:#8e9b55;">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <?php echo do_shortcode('[smartslider3 slider="15"]'); ?>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12 content-terra">
                        <h1 class="text-white">Terra</h1>
                        <p class="text-white fs-5">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries
                        </p>
                    </div>
                    <div class="col-12 text-right">
                        <a href="/terra" class="btn btn-about rounded-0 text-uppercase mt-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- -->

<section class="p-4">
    <div class="container p-lg-0" data-aos="fade-up">
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

<section style="background-color:#bcbcb6;">
    <div class="container container-lounge">
        <div class="row">
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
                        <button class="btn btn-about rounded-0 text-uppercase mt-4" type="button" data-bs-toggle="modal"
                            data-bs-target="#getEnquireModal">
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
<section>
    <div class=" container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 py-4">
                <div class="container container-first-section">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="fs-5 text-secondary fw-normal">
                                <p class="f-30"></p>

                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section><!-- end -->
<!-- Maps SQRes -->
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
<section class="section-page">
    <div class="container">
        <div class="row">
            <h1 class="titlecontent f-80 l-spacing-1">Gallery</h1>
        </div>
    </div>
</section>
<!-- Gallery Page -->

<section class="section-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item multicarousel active">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="south-quarter-gallery" src=""
                                            alt="Serenia Hills 1, Serenia Hills Residences" loading="lazy"
                                            style="height: 225px;">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="south-quarter-gallery" src=""
                                            alt="Serenia Hills 2, Serenia Hills Residences" loading="lazy"
                                            style="height: 225px;">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="south-quarter-gallery" src=""
                                            alt="Serenia Hills 3, Serenia Hills Residences" loading="lazy"
                                            style="height: 225px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item multicarousel ">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="south-quarter-gallery" src=""
                                            alt="Serenia Hills 4, Serenia Hills Residences" loading="lazy"
                                            style="height: 225px;">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="south-quarter-gallery" src=""
                                            alt="Serenia Hills 5, Serenia Hills Residences" loading="lazy"
                                            style="height: 225px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev carousel-control-prev-sqres" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next carousel-control-next-sqres" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->



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
                            <img src="" alt="Serenia Hills modal image" class="img-fluid cover">
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