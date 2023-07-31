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

<section class="section-page">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 content">
                <div class="container container-first-section">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-title mtop-content">
                                <p class="f-30">
                                <p>A holistically crafted property that binds luxury living with an active metropolitan
                                    lifestyle, creating the pinnacle of modern urban living.</p>
                                <p>Waterfront city centre living, &nbsp;integrates luxury urban residences with first
                                    class facilities and amenities alongside lush outdoor communal spaces with extensive
                                    waterfront walkways and jogging tracks.</p>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<!-- end -->
<!-- Serenia Hills -->
<section class="section-page carousel-text-leasing-office b-bluedark">
    <div class="container">
        <style type="text/css">
        .contentBlack p {
            color: #fff !important;
        }
        </style>
        <div class="row">
            <div class="col-pg-12">
                <div id="carouselABOUTSQIndicatorsSqOffice2" class="carousel slide carousel-fade"
                    data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item-aboutsq  active ">
                            <div class="b-bluedark">
                                <div class="container px-0">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3 mb-lg-0">
                                            <?php
                                            echo do_shortcode('[smartslider3 slider="9"]');
                                            ?>
                                        </div>
                                        <div class="col-lg-6 contentBlack">
                                            <h1 class="c-white">Above it all, panoramic views of the city.</h1>
                                            <p class="f-30 c-white" style="color: #fff;">
                                            <p>Soar above Jakarta with unrivalled views of the waterfront and skyline.
                                                &nbsp;Choose from our Sky57 and City57 residences at Fifty Seven
                                                Promenade tailored in every detail to suit the most demanding guests
                                                every need.</p>
                                            </p>
                                            <button class="btn learn-more b-white text-uppercase mt-4" type="button"
                                                data-bs-toggle="modal" data-bs-target="#getEnquireModal">Enquire
                                                now</button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pd-bottom-0 section-page">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 content">
                <div class="container container-first-section">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-title mtop-content">
                                <p class="f-30">
                                <p>An epicurious journey awaits, a fusion of culture, cuisines and the rich tapestry of
                                    Jakarta’s vibrant social scene.</p>
                                <p>Surrounding malls,&nbsp; rooftop bars,&nbsp; restaurants,&nbsp; cafés and deli’s make
                                    Jakarta’s centre a food and drink haven, an ideal place for enjoying the best in
                                    local and international cuisine. &nbsp;As the sun sets you are a stone throw away
                                    from the cities top clubs, hotels bars,&nbsp; fine dining and entertainment.</p>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>

            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>


<!--  -->
<section class="pd-bottom-0 section-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 text-gold">
                <h3 class="c-bluedark"></h3>
            </div>
        </div>
    </div>
    <style type="text/css">
    .contentGray p {
        color: #201D1D !important;
    }
    </style>
    <div id="carouselABOUTSQIndicatorsSqOffice3" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-item-aboutsq  active ">
                <div class="carousel-text-leasing-office b-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <img src="https://residences.57promenade.com/public/about/thumb-Your ultimate home above the clouds-1655789566.jpg"
                                    class="img-leasing-office d-block w-100"
                                    alt="Your ultimate home above the clouds - Serenia Hills Residences jaksel"
                                    loading="lazy">
                            </div>
                            <div class="col-lg-6 contentGray">
                                <h1 class="c-bluedark">Your ultimate home above the clouds</h1>
                                <p class="f-30 c-bluedark">
                                <p>Choose from our Sky57 and City57 residences at Fifty Seven Promenade tailored in
                                    every detail to suit the most demanding guests every need.</p>
                                </p>
                                <button class="btn learn-more text-uppercase mt-4" type="button" data-bs-toggle="modal"
                                    data-bs-target="#bookNowModal">Book
                                    now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-page">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 content">
                <div class="container container-first-section">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-title mtop-content">
                                <p class="f-30">
                                <p>Easy access throughout the development via the promenade, internal walkways and sky
                                    bridges create an oasis of unrivalled convenience.</p>
                                <p>Fifty Seven Promenade boasts multiple exits to Jakarta’s main thoroughfares, arteries
                                    and tollsand excellent public transport links to the Trans Jakarta Bus-way, future
                                    Airport Express Train, Rail network and future MRT network.</p>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>

            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>

<!-- Black -->
<section class="section-page b-bluedark">
    <div class="container">
        <div class="row">
            <div class="col-pg-12">
                <div id="carouselABOUTSQIndicatorsSqOffice4" class="carousel slide carousel-fade"
                    data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item-aboutsq  active ">
                            <div class="carousel-text-leasing-office">
                                <div class="container px-0">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3 mb-lg-0">
                                            <img src="https://residences.57promenade.com/public/about/thumb-A higher state of health and wellness-1655790496.jpg"
                                                class="img-leasing-office d-block w-100"
                                                alt="A higher state of health and wellness - Serenia Hills Residences"
                                                loading="lazy">
                                        </div>
                                        <div class="col-lg-6">
                                            <h1 class="c-white">A higher state of health and wellness</h1>
                                            <p class="f-30 c-white">
                                            <p>The entire 58th floor is dedicated to health and wellness, with state of
                                                the art fitness and spa amenities afforded to panoramic views of the
                                                promenade and Jakarta skyline.&nbsp;</p>
                                            </p>
                                            <button class="btn learn-more b-white text-uppercase mt-4 type=" button"
                                                data-bs-toggle="modal" data-bs-target="#bookNowModal"">Book now</button>
										</div>

									</div>
								</div>
							</div>
						</div>
											</div>
															</div>
									</div>
								</div>
							</div>
</section>
<!--  -->
<section class=" pd-bottom-0 section-page">
                                                <div class="container" data-aos="fade-up">
                                                    <div class="row">
                                                        <div class="col-lg-12 content">
                                                            <div class="container container-first-section">
                                                                <div class="row">
                                                                    <div class="col-lg-8">
                                                                        <div class="p-title mtop-content">
                                                                            <p class="f-30">
                                                                            <p>A beacon of commerce and retail, phase
                                                                                two affirms the next chapter of the
                                                                                promenade’s story.</p>
                                                                            <p>A state of the art office tower combining
                                                                                traditional business and optimising
                                                                                innovative new spaces for the new tech
                                                                                and creative frontier,&nbsp; with active
                                                                                and lifestyle retail,&nbsp;</p>
                                                                            <p>health focussed dining and entertainment
                                                                                facilities.</p>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-1"></div>
                                                    </div>
                                                </div>
</section>

<!-- GRAY -->
<section class="pd-bottom-0 section-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h3 class="c-bluedark"></h3>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
    <div id="carouselABOUTSQIndicatorsSqOffice5" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-item-aboutsq  active ">
                <div class="carousel-text-leasing-office b-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <img src="https://residences.57promenade.com/public/about/thumb-Residences Lounge-1655792504.jpg"
                                    class="img-leasing-office d-block w-100"
                                    alt="Residences Lounge - Serenia Hills Residences" loading="lazy">
                            </div>
                            <div class="col-lg-6 contentGray">
                                <h1 class="c-bluedark">Residences Lounge</h1>
                                <p class="f-30 c-bluedark">
                                <p>A step above the rest,&nbsp; fortunate residents can nestle in with unrivalled
                                    privacy and security, indulgent amenities,&nbsp; anticipatory service,&nbsp; and
                                    state of the art technology.&nbsp; An impressive portfolio of exclusive amenities
                                    exceeding your entertainment, relaxation and business needs.</p>
                                </p>
                                <button class="btn learn-more text-uppercase mt-4" type="button" data-bs-toggle="modal"
                                    data-bs-target="#getEnquireModal">Enquire
                                    now</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pd-bottom-0 section-page">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 content">
                <div class="container container-first-section">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-title mtop-content">
                                <p class="f-30">

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>

            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>
<!-- end -->

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
                                        <img class="img-fluid" alt="south-quarter-gallery"
                                            src="https://residences.57promenade.com/public/assets_home/images/Gallery/Serenia Hills 1-thumb--1657174412.png"
                                            alt="Serenia Hills 1, Serenia Hills Residences" loading="lazy"
                                            style="height: 225px;">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="south-quarter-gallery"
                                            src="https://residences.57promenade.com/public/assets_home/images/Gallery/Serenia Hills 2-thumb--1657174488.png"
                                            alt="Serenia Hills 2, Serenia Hills Residences" loading="lazy"
                                            style="height: 225px;">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="south-quarter-gallery"
                                            src="https://residences.57promenade.com/public/assets_home/images/Gallery/Serenia Hills 3-thumb--1657174566.jpg"
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
                                        <img class="img-fluid" alt="south-quarter-gallery"
                                            src="https://residences.57promenade.com/public/assets_home/images/Gallery/Serenia Hills 4-thumb--1657174652.jpg"
                                            alt="Serenia Hills 4, Serenia Hills Residences" loading="lazy"
                                            style="height: 225px;">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="south-quarter-gallery"
                                            src="https://residences.57promenade.com/public/assets_home/images/Gallery/Serenia Hills 5-thumb--1657174676.jpg"
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
                            <img src="./public/assets_home/images/57-promenade-modal-img.png"
                                alt="Serenia Hills modal image" class="img-fluid cover">
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
                            <img src="./public/assets_home/images/57-promenade-modal-img.png"
                                alt="Serenia Hills modal image" class="img-fluid cover">
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