<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/submenu.css" rel="stylesheet">
<style>
.menu-sub {
    height: auto;
}

.title-unit {
    font-size: 2em;
    letter-spacing: 0.2em;
    color: #fff;
}

.title-link-submenu {
    font-size: 15px !important;
    color: #fff;
}

.title-link-submenu:hover {
    background: none !important;
    color: #fff !important;
}

.navbar li.submenu-li:hover>a {
    background: none !important;
    color: #fff !important;
}
</style>
<section class="menu-sub position-relative d-none d-lg-block">
    <div class="menu-top pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="float-start pull-left">
                        <h1 class="title-unit"><?= $unit_type_detail->post_title?></h1>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav class="navbar">
                        <ul>
                            <li class="submenu-li"><a href="#section-2" class="title-link-submenu"
                                    style="margin-right: 91px;padding-left:0;">Overview</a>
                            </li>
                            <li class="submenu-li"><a href="#section-3" class="title-link-submenu"
                                    style="margin-right: 85px;">Floor
                                    Plan</a></li>
                            <li class="submenu-li"><a href="#section-4" class="title-link-submenu"
                                    style="margin-right: 85px;">Lifestyle</a>
                            </li>
                            <li class="submenu-li"><a href="#section-5" class="title-link-submenu"
                                    style="margin-right: 85px;">Location</a>
                            </li>
                            <li class="submenu-li"><a href="#section-6" class="title-link-submenu"
                                    style="margin-right: 81px;">Journal</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="d-none d-lg-block pt-3 pb-3" style="background:#63666a;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <nav class="navbar">
                    <ul>
                        <li class="submenu-li">
                            <a href="<?= get_site_url()?>/wp-content/uploads/SE-Brochure-Digital-N-rev.pdf"
                                class="title-link-submenu" style="padding-left: 0;margin-right:3px;" download>Download
                                Brochure</a>
                        </li>
                        <li class="submenu-li"><a href="tel:085781134555" class="title-link-submenu">Call Us</a></li>
                        <li class="submenu-li">
                            <a data-bs-toggle="modal" class="title-link-submenu">
                                Request Callback
                            </a>
                        </li>
                        <li class="submenu-li">
                            <a data-bs-toggle="modal" data-bs-target="#myModal-requestCallback"
                                class="title-link-submenu">Book Appointment</a>
                        </li>
                        <li class="submenu-li">
                            <a href="mailto:info@sereniahills.co.id?Subject=Hello%20again" class="title-link-submenu"
                                style="margin-right: 13px;">Email
                                Us</a>
                        </li>
                        <li class="submenu-li">
                            <a href="https://api.whatsapp.com/send?phone=6285781134555&amp;text=" target="_blank"
                                class="title-link-submenu" style="padding-right: 0;">Whatsapp</a>
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
                </nav>
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