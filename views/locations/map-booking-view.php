<section id="booking" class="bg-white pt-4 pb-4">
    <div class="container position-relative">
        <div class="row gx-5">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="row">
                    <div class="col">
                        <h1 class="mb-3 titlecontent text-light-blue fw-bold">Our Location</h1>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col d-flex">
                        <h6 class="text-dark title-map-form">
                            Serenia Mansion Club House Jln. Karang Tengah Raya No.9 Lebak Bulus,
                            Jakarta Selatan 12440
                        </h6>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col d-flex justify-content-between">
                        <div class="col-md-6 d-flex">
                            <div class="text-dark me-5">
                                <h6 class="text-light-cream title-map-form fw-bold">Telephone.</h6>
                                <h6 class="title-map-form">+62 8778 8665 757</h6>
                            </div>

                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="text-dark">
                                <h6 class="text-light-cream title-map-form fw-bold">WhatsApp.</h6>
                                <h6 class="title-map-form">+62 759 200 66</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.776440306403!2d106.7701555!3d-6.2710805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f17c7c0cc1ef%3A0xad0cebf1588d1fab!2sSerenia%20Hills%20at%20Pondok%20Pinang!5e0!3m2!1sid!2sid!4v1690870382262!5m2!1sid!2sid"
                    style="height: 324px; width: 100%" id="map" class="mb-3 border" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a href="https://www.google.com/maps/place/Serenia+Hills+at+Pondok+Pinang/@-6.2710805,106.7701555,15z/data=!4m6!3m5!1s0x2e69f17c7c0cc1ef:0xad0cebf1588d1fab!8m2!3d-6.2710805!4d106.7701555!16s%2Fg%2F11kpjgqgwb?entry=ttu"
                    target="_blank">
                    <button type="button" class="btn b-white border-button learn-more rounded-0 text-uppercase">Open in
                        Google Maps
                    </button>
                </a>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-3 titlecontent text-light-blue fw-bold">Book a Viewing</h1>
                <h6 class="mb-3 text-dark title-map-form lh-base">Complete the form below and a member of our
                    sales and
                    marketing team shall
                    contact you with the details of your appointment or enquiry.</h6>
                <form action="#" id="form-booking" name="requestBookingViewMaps" class="form-all php-email-form">
                    <input type="hidden" name="_token" value="HTOIO8YcWrbSk0h20dFiZkg2jVvblz63ASXexJRE">

                    <div id="success-book" class="alert alert-success d-none">Thank you, we will contact you
                        soon!</div>
                    <input type="hidden" name="url_current" value="/">
                    <div class="mb-3">
                        <input type="text" class="form-control rounded-0 py-2" id="fullname" name="name"
                            placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control rounded-0 py-2" id="email_booking" name="email"
                            placeholder="email@example.com" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control rounded-0 py-2" id="phone_booking" name="phone"
                            placeholder="Phone Number" required>
                    </div>
                    <div class="row row-cols-lg-auto g-3 align-items-center mb-3">
                        <div class="col-lg-6">
                            <input type="date" name="date" class="form-control py-2 rounded-0" id="date_booking"
                                name="date" required>
                        </div>
                        <div class="col-lg-6">
                            <select name="time" id="time_booking" class="form-control form-select f-20" required>
                                <option value="09:00-12:00">09:00-12:00</option>
                                <option value="12:00-13:00">12:00-13:00</option>
                                <option value="13:00-15:00">13:00-15:00</option>
                                <option value="15:00-18:00">15:00-18:00</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control rounded-0" id="message" rows="8	" name="message"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="row row-cols-lg-auto g-3 align-items-center mb-3 position-relative">
                        <div class="col-lg-6">
                            <div class="g-recaptcha" id="rcaptcha"
                                data-sitekey="6LfNRiMfAAAAAMoJeUPuZpEl3M-zj3bIqE7KTwYq"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 d-flex justify-content-end" style="right: 8px;top:43px;">
                                <button type="submit" role="button"
                                    class="btn b-white border-button learn-more rounded-0 d-flex align-items-center">
                                    <span class="span_send">
                                        SUBMIT
                                    </span>
                                    <div id="loading-booking-maps"
                                        class="spinner-border text-light position-absolute d-none" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>