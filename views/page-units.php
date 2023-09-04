<?php
/*
Template Name: Units
*/
?>
<?php 

$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'units') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}

?>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/units.css" rel="stylesheet">
<!-- content -->
<div id="carouselRequestPricelistIndicators" class="carousel slide" data-bs-ride="carousel">
    <?php
    echo do_shortcode('[smartslider3 slider="8"]');
    ?>
</div>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <?php 
            $units = units()['unit_types'];
            ?>
            <?php 
                foreach ($units as $key => $value) {
                    echo '<div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-0">
                                <img class="img-fluid img-units"
                                    src="'.get_the_post_thumbnail_url($value->ID).'" alt="'.$value->post_title.'"
                                    loading="lazy">
                                <div class="card-body border-blue">
                                    <h5 class="card-title">'.$value->post_title.'</h5>
                                    <div class="d-flex justify-content-between">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bed"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 7v11m0 -4h18m0 4v-8a2 2 0 0 0 -2 -2h-8v6" />
                                                <circle cx="7" cy="10" r="1" />
                                            </svg>
                                            <small style="color:#365072;">1</small>
                                        </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bath"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1z" />
                                                <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />
                                                <path d="M4 21l1 -1.5" />
                                                <path d="M20 21l-1 -1.5" />
                                            </svg>
                                            <small style="color:#365072;">1</small>
                                        </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dimensions"
                                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 5h11" />
                                                <path d="M12 7l2 -2l-2 -2" />
                                                <path d="M5 3l-2 2l2 2" />
                                                <path d="M19 10v11" />
                                                <path d="M17 19l2 2l2 -2" />
                                                <path d="M21 12l-2 -2l-2 2" />
                                                <rect x="3" y="10" width="11" height="11" rx="2" />
                                            </svg>
                                            <small style="color:#365072;">SGA 81.91<sup>2</sup></small>
                                        </span>
                                    </div>
                                    <hr class="opacity-1" style="background-color: rgba(54, 80, 114, 0.75);" />
                                    <div class="d-flex">
                                        <a href="'.get_site_url().'/'.$value->post_name.'" class="w-100 me-2">
                                            <button
                                                class="btn second-button b-white c-white text-uppercase py-2 rounded-0 w-100">Detail</button>
                                        </a>
                                        <button class="btn main-button text-uppercase py-2 rounded-0 w-100" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal'.$key.'">Request Pricelist</button>

                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</section>

<!-- Booking View -->
<section id="booking" class="bg-white pt-4 pb-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1 class="titlecontent f-80 l-spacing-1">Book a Viewing</h1>
                <h5 class="title-book-viewing text-gold f-36" style="text-transform: inherit;">Complete the form below
                    and a member of our sales and<br>
                    marketing team shall contact you with the details of your appointment or enquiry.
                </h5>
            </div>
            <div class="col-md-6 col-sm-12">
                <!-- <form action="https://residences.SereniaHills.com/booking/create" method="post" role="form" id="form-all-booking" class="form-all-booking php-email-form"> -->
                <form action="#" id="form-booking-view" name="requestBookingView" class="form-all php-email-form">
                    <input type="hidden" name="_token" value="HTOIO8YcWrbSk0h20dFiZkg2jVvblz63ASXexJRE">
                    <div id="success" class="alert alert-success d-none">Thank you, we will contact you soon!
                    </div>
                    <input type="hidden" name="url_current" value="units">
                    <div class="row">
                        <div class="form-group mt-3">
                            <input type="text" name="name" class="form-control f-20" id="name" placeholder="Full Name*"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control f-20" name="email" id="email"
                                placeholder="Email Address*" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control f-20" name="phone" id="phone" placeholder="Phone Number*"
                            required>
                    </div>
                    <div class="row row-cols-lg-auto g-3 align-items-center mb-2">
                        <div class="col-lg-6">
                            <div class="form-group mt-3">
                                <input type="date" class="form-control f-20" name="date" id="date" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mt-3">
                                <select name="time" id="time" class="form-control form-select f-20" required>
                                    <option value="09:00-12:00">09:00-12:00</option>
                                    <option value="12:00-13:00">12:00-13:00</option>
                                    <option value="13:00-15:00">13:00-15:00</option>
                                    <option value="15:00-18:00">15:00-18:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control f-20" name="message" id="message" rows="5"
                            placeholder="Write Your Message"></textarea>
                    </div>
                    <div class="my-3">
                        <div class="mb-2">
                            <div class="g-recaptcha" id="rcaptcha-02"
                                data-sitekey="6LfNRiMfAAAAAMoJeUPuZpEl3M-zj3bIqE7KTwYq"></div>
                            <span id="captcha" style="color:red" ;></span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="btnSend" class="btn b-white learn-more c-white f-20"
                            style="float: right;padding: 8px 35px;">
                            <span class="span_send">
                                Send
                            </span>
                            <div id="loading-booking-view" class="spinner-border text-light position-absolute d-none"
                                role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                        <div style="clear: both;"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- modal booking view -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden rounded-3">
            <div class="modal-header position-absolute top-0 end-0 border-0 overflow-hidden" style="z-index: 90;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-md-6 modal-image">
                        <img src="public/assets_home/images/57-promenade-modal-img.png" class="img-lg-fluid"
                            alt="modal image" loading="lazy">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <form action="#" name="requestBookingModal" id="form-booking-modal" class="p-4">
                            <h3 class="text-light-blue fw-bold mb-4">
                                Live surrounded by unique gardens with
                                the luxury of walkability
                            </h3>
                            <div id="success-modal" class="alert alert-success d-none">Thank you, we will contact you
                                soon!</div>
                            <input type="hidden" name="url_current" id="url_current-popup" value="residences-popup">
                            <div class="mb-4">
                                <input type="text" name="name" class="form-control py-2 rounded-0" id="name-popup"
                                    placeholder="Full Name" required />
                            </div>
                            <div class="mb-4">
                                <input type="email" name="email" class="form-control py-2 rounded-0" id="email-popup"
                                    placeholder="example@email.com" required />
                            </div>
                            <div class="mb-4">
                                <input type="tel" name="phone" class="form-control py-2 rounded-0" id="phone-popup"
                                    placeholder="Phone Number" required />
                            </div>
                            <div class="mb-4">
                                <input type="date" name="date" id="date-popup" class="form-control py-2 rounded-0"
                                    id="residenceDateInput" required />
                            </div>
                            <div class="mb-4">
                                <select name="time" id="time-popup" class="form-select py-2 rounded-0" required>
                                    <option selected value="09:00-12:00">09:00-12:00</option>
                                    <option value="12:00-13:00">12:00-13:00</option>
                                    <option value="13:00-15:00">13:00-15:00</option>
                                    <option value="15:00-18:00">15:00-18:00</option>
                                </select>
                            </div>
                            <button type="submit" id="btnSend" class="btn learn-more f-20 w-100">
                                <span class="span_send">
                                    Send
                                </span>
                                <div id="loading-booking-modal"
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
<!-- end booking view -->