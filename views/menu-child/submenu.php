<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/submenu.css" rel="stylesheet">
<section class="menu-sub position-relative d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-quantum">
                    <div class="menu-top">
                        <div class="wrapper">
                            <div class="float-start pull-left">
                                <a href="https://sereniahills.co.id" class="logo">
                                    <?= $unit_type_detail->post_title?>
                                </a>
                            </div>
                            <div class="pt-2 float-end pull-right desktop">
                                <ul>
                                    <li><a href="#section-2">Overview</a></li>
                                    <li><a href="#section-3">Unit Detail</a></li>
                                    <li><a href="#section-4">Lifestyle</a></li>
                                    <li><a href="#section-5">Location</a></li>
                                    <li><a href="#section-6">Journal</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="menuBottom" class="menu-bottom">
                        <div class="float-end pull-right">
                            <div class="wrapper">
                                <ul>
                                    <li><a href="<?= get_site_url()?>/wp-content/uploads/SE-Brochure-Digital-N-rev.pdf"
                                            class="menu-download-brochure" download>Download
                                            Brochure</a></li>
                                    <li><a href="tel:085781134555">Call us</a></li>
                                    <li>
                                        <a class="menu-request-callback" data-bs-toggle="modal"
                                            data-bs-target="#myModal-requestCallback">
                                            Request Callback
                                        </a>
                                    </li>
                                    <li>
                                        <a class="menu-book-appointment" data-bs-toggle="modal"
                                            data-bs-target="#myModal-requestCallback">Book Appointment</a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@sereniahills.co.id?Subject=Hello%20again">Email us</a>
                                    </li>
                                    <li>
                                        <a href="https://api.whatsapp.com/send?phone=6285781134555&amp;text="
                                            target="_blank">whatsapp</a>
                                    </li>
                                </ul>
                                <div class="popup" id="download-brochure" style="display: none">
                                    <form>
                                        <fieldset>
                                            <legend>Download Brochure</legend>
                                            <div class="row">
                                                <label>Email</label>
                                                <input type="text" placeholder="Your Email Address">
                                            </div>
                                            <div class="row">
                                                <div class="pull-left">
                                                    <a href="https://sereniahills.co.id/wp-content/uploads/2019/10/Quantum-Digital-Brochure-N2.pdf"
                                                        target="_blank" class="btn"> Download
                                                    </a>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="popup" id="request-callback" style="display: none">
                                    <form action="<?= get_site_url()?>" method="post" name="formRequestCallback">
                                        <fieldset>
                                            <legend>Book Appointment</legend>
                                            <div class="row">
                                                <label>Nama</label>
                                                <input type="text" placeholder="Full Name" name="your-name">
                                            </div>
                                            <div class="row">
                                                <label>No Tlp</label>
                                                <input type="text" placeholder="08xx - xxx - xxx"
                                                    name="telephone-number">
                                            </div>
                                            <div class="row">
                                                <label>Best time to call</label>
                                                <select name="time-call">
                                                    <option>9:00-12:00</option>
                                                    <option>12:00-13:00</option>
                                                    <option>13:00-15:00</option>
                                                    <option>15:00-18:00</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <label>Perihal</label>
                                                <textarea placeholder="textarea" name="perihal"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="pull-left">
                                                    <input type="hidden" name="action" value="request_call_back">
                                                    <input class="btn btn-book-appointment" type="submit"
                                                        value="Submit">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="popup" id="book-appointment" style="display: none">
                                    <form>
                                        <fieldset>
                                            <legend>Book Appointment</legend>
                                            <div class="row">
                                                <label>Nama</label>
                                                <input type="text" placeholder="Full Name">
                                            </div>
                                            <div class="row">
                                                <label>No Tlp</label>
                                                <input type="text" placeholder="08xx - xxx - xxx">
                                            </div>
                                            <div class="row">
                                                <label>Best time to call</label>
                                                <select>
                                                    <option>9:00-12:00</option>
                                                    <option>12:00-13:00</option>
                                                    <option>13:00-15:00</option>
                                                    <option>15:00-18:00</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <label>Perihal</label>
                                                <textarea placeholder="textarea"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="pull-left">
                                                    <input class="btn" type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal" id="myModal-requestCallback" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Book Appointment</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="<?= get_site_url()?>" method="post">
                                <div class="mb-3">
                                    <label for="fullnameRequestcallback" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" id="fullname-requestcallback"
                                        name="fullnameRequestcallback">
                                </div>
                                <div class="mb-3">
                                    <label for="phoneRequestcallback" class="col-form-label">No Tlp</label>
                                    <input type="tel" id="phone-requestcallback" class="form-control"
                                        name="phoneRequestcallback" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                        placeholder="08xx - xxx - xxx">
                                </div>
                                <div class="mb-3">
                                    <label for="timeCallRequestcallback" class="col-form-label">Best time to
                                        call</label>
                                    <select class="form-select" aria-label="Default Best time Call"
                                        name="timeCallRequestcallback">
                                        <option>9:00-12:00</option>
                                        <option>12:00-13:00</option>
                                        <option>13:00-15:00</option>
                                        <option>15:00-18:00</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="perihalRequestcallback" class="col-form-label">Perihal</label>
                                    <textarea class="form-control" id="perihal-requestcallback"
                                        name="perihalRequestcallback"></textarea>
                                </div>
                                <div class="mb-3 text-right">
                                    <button type="button" class="btn bg-dark-gray text-white">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(window).scroll(function() {
    if ($(window).scrollTop() > $('#heroAvana').height()) {
        //alert("near bottom!");
        // console.log("near bottom!: " + $(window).scrollTop());
        // console.log("heroAvana bottom!: " + $('#heroAvana').height());
        $('#menuBottom').addClass("position-fixed");
        $('#menuBottom').css('top', '60px');
        $('#menuBottom').css('right', '0');
    } else {
        // console.log("near top!" + $(window).scrollTop());
        // console.log("heroAvana top!: " + $('#heroAvana').height());
        $('#menuBottom').removeClass("position-fixed");
        $('#menuBottom').css('top', 'unset');
        $('#menuBottom').css('right', 'unset');
    }
});
</script>