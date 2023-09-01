<?php
/*
Template Name: Homepage
*/
?>

<?php 
$post_data = get_post();

if (isset($post_data)) {
    if ($post_data->post_name == 'homepages') {
        $content_homepage = $post_data->post_content;
    } else {
        $content_homepage = '';
    }
}

?>
<?php // echo do_shortcode($post_data->post_content); ?>

<!-- ======= First Section ======= -->
<section class="mt-4 mb-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 col-sm-12 content">
                <h1 class="titlecontent f-50 l-spacing-1">Elegantly designed amidst<br />natural serenity</h1>
                <div class="container p-0 m-0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-title">
                                <p class="f-30">With 24-hour security, smart homes in various sizes, a clubhouse, and a
                                    pool, residents can enjoy a safe and luxurious lifestyle. Serenia Hills’ success in
                                    Lebak Bulus, recognized with the FIABCI Prix d’excellence gold award, marks a
                                    significant milestone for Intiland.</p>
                                <p class="f-30 mb-0">The new Serenia Estate is perfectly situated, just minutes away
                                    from
                                    Pondok Indah’s vibrant lifestyle district and the prestigious Pondok Indah Golf
                                    Course.</p>
                            </div>
                        </div>
                        <div class="col-lg-4"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- wp:nextend/smartslider3 {"slider":"3"} -->
<div class="wp-block-nextend-smartslider3"><?php echo do_shortcode('[smartslider3 slider="3"]'); ?></div>
<!-- /wp:nextend/smartslider3 -->

<section class="mt-4 mb-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 col-sm-12 content">
                <h1 class="titlecontent f-80 l-spacing-1">
                    Embrace The Ultimate Blend Of Lifestyle and Invesment<br>
                    In South Jakarta’s Finest Residential Offering.
                </h1>
                <div class="container p-0 m-0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-title">
                                <p class="f-30 mb-0">
                                    A step above the rest, fortunate residents can nestle in with unrivalled
                                    privacy and security, indulgent amenities, anticipatory service, and state of the
                                    art technology. An impressive portfolio of exclusive amenities exceeding your
                                    entertainment, relaxation and business needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative mt-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-gold m-titleheader mb-0 f-36">
                <h1 class="titlecontent f-80 l-spacing-1">
                    Award Winning Developer
                </h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center">
                    <img src="<?= content_url(); ?>/uploads/2023/07/LOGO-prix-new-Aug-gold-2022-png.png"
                        class="card-img-top" alt="Gambar 1" style="width:100%;max-width:200px;margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title">
                            Indonesia Property <br>
                            Awards 2016
                        </h5>
                        <hr>
                        <p class="card-text bold">BEST DEVELOPER</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center">
                    <img src="<?= content_url(); ?>/uploads/2023/07/Property-Guru-2018.png" class="card-img-top"
                        alt="Gambar 2" style="width:100%;max-width:200px;margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title">
                            FIABCI World Prix d’Excellence<br>
                            Award 2021
                        </h5>
                        <hr>
                        <p class="card-text bold">BEST LOW-RISE RESIDENTIAL</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <img src="<?= content_url(); ?>/uploads/2023/07/FINAL-MEDAL.png" class="card-img-top" alt="Gambar 3"
                        style="width:100%;max-width:200px;margin:auto;">
                    <div class="card-body">
                        <h5 class="card-title">
                            Golden Property<br>
                            Awards 2017
                        </h5>
                        <hr>
                        <p class="card-text bold">BEST PROPERTY CONCEPT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="position-relative mt-2 mb-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-gold m-titleheader mb-3 f-36">
                <h1 class="titlecontent f-80 l-spacing-1">
                    Convenient Surroundings
                </h1>
            </div>
        </div>
        <div class="row mb-4">
            <!-- Tab Desktop -->
            <?php include (__DIR__ . '/tabs/desktop-tab.php'); ?>
            <!-- End Tab Desktop -->
            <!-- Tab Mobile -->
            <?php include (__DIR__ . '/tabs/mobile-tab.php'); ?>
            <!-- End Tab Mobile -->
        </div>
    </div>
</section>

<section class="bg-map p-0 position-relative">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12" style="text-transform: uppercase;">
                <h1 class="text-white titlecontent f-80 l-spacing-1">
                    Location
                </h1>
            </div>
        </div>
        <div class="row">
            <div id="map-desktop" class="col-lg-12 mb-4">
                <?php echo do_shortcode('[smartslider3 slider="7"]'); ?>
            </div>
            <div id="middle-desktop" class="col-lg-12 mb-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mobile-SE-Map-Web-3-3-1.png"
                    class="img img-fluid" alt="Map Serenia Estate Middle">
            </div>
            <div id="map-mobile" class="col-lg-12 mb-4">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mobile-SE-Map-Web-3-3-1.png"
                    class="img img-fluid w-100" alt="Map Serenia Estate Mobile">
            </div>
        </div>
    </div>
</section>
<section class="mt-4 mb-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 col-sm-12 content">
                <h1 class="titlecontent mb-3 f-80 l-spacing-1">Prime City Centre Location</h1>
                <div class="container p-0 m-0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-title">
                                <p class="f-30 mb-0">
                                    Situated a mere 5 minutes from Pondok Indah and 7 minutes from the Lebak Bulus
                                    MRT Station, Serenia Hills at Pondok Pinang spans across 2.2 hectares of
                                    meticulously designed land, offering a collection of 113 homes within a private,
                                    secure,
                                    and exclusive gated complex.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php 
    $latest_types = latest_types_homepage()['latest_types'];
?>
<section class="mb-4">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= get_site_url().'/units'; ?>">
                    <h3 class="titlecontent mb-4" style="font-size:25px;">Unit Types</h1>
                </a>
            </div>
        </div>
        <div class="row">

            <?php 
                foreach ($latest_types as $key => $value) {
                    echo '<div class="col-md-4 mb-4">
                            <div class="card">
                                <a href="'.get_site_url().'/'.$value->post_name.'">
                                    <img src="'.get_the_post_thumbnail_url($value->ID).'"
                                        class="card-img-top" alt="'.$value->post_title.'">
                                </a>
                                <div class="card-body">
                                    <a href="'.get_site_url().'/'.$value->post_name.'">
                                        <h5 class="card-title">'.$value->post_title.'</h5>
                                        '.$value->post_excerpt.'
                                    </a>
                                </div>
                            </div>
                        </div>';
                }
            ?>

            <div class="col-md-12 text-left">
                <button class="btn text-uppercase learn-more b-white" type="button" data-bs-toggle="modal"
                    data-bs-target="#getEnquireModal">Get Offer</button>
            </div>
        </div>
    </div>
</section>
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