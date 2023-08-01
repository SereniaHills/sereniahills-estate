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

<main id="main">

    <?= do_shortcode($post_data->post_content); ?>

    <section class="section-page position-relative">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-gold m-titleheader mb-0 f-36">
                    <h1 class="titlecontent f-80 l-spacing-1">
                        Award Winning Developer
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-4">
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

                <div class="col-md-4 p-4">
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
                <div class="col-md-4 p-4">
                    <div class="card p-4 text-center">
                        <img src="<?= content_url(); ?>/uploads/2023/07/FINAL-MEDAL.png" class="card-img-top"
                            alt="Gambar 3" style="width:100%;max-width:200px;margin:auto;">
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
    <section class="section-page position-relative my-4">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-gold m-titleheader mb-2 f-36">
                    <h1 class="titlecontent f-80 l-spacing-1">
                        Convenient Surroundings
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-fill" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="border nav-link active" id="ex2-tab-1" data-bs-toggle="tab" href="#ex2-tabs-1"
                                role="tab" aria-controls="ex2-tabs-1" aria-selected="true">PONDOK INDAH MALL</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="border nav-link" id="ex2-tab-2" data-bs-toggle="tab" href="#ex2-tabs-2" role="tab"
                                aria-controls="ex2-tabs-2" aria-selected="false">T. B . SIMATUPANG CBD</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="border nav-link" id="ex2-tab-3" data-bs-toggle="tab" href="#ex2-tabs-3" role="tab"
                                aria-controls="ex2-tabs-3" aria-selected="false">PONDOK INDAH GOLF COURSE</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="ex2-content">
                        <div class="tab-pane bg-white p-4 fade show active" id="ex2-tabs-1" role="tabpanel"
                            aria-labelledby="ex2-tab-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?= content_url(); ?>/uploads/2023/07/20130315-IMG_7176.png"
                                        class="img-fluid" alt="PIM">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-white p-4 fade" id="ex2-tabs-2" role="tabpanel"
                            aria-labelledby="ex2-tab-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?= content_url(); ?>/uploads/2023/07/TB-simatupang.png" class="img-fluid"
                                        alt="PIM">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane bg-white p-4 fade" id="ex2-tabs-3" role="tabpanel"
                            aria-labelledby="ex2-tab-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?= content_url(); ?>/uploads/2023/07/20130215-PIGA-1c-2.png"
                                        class="img-fluid" alt="PIM">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-gold m-titleheader f-36" style="text-transform: uppercase;">Location</div>
        </div>
    </div>
    <section class="bg-map section-page p-0 position-relative">
        <div class="container">
            <div class="row">
                <div id="map-desktop" class="col-lg-12">
                    <?php
                    echo do_shortcode('[smartslider3 slider="7"]');
                    ?>
                </div>
                <div id="map-mobile" class="col-lg-12">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mobile-SE-Map-Web-3-3-1.png"
                        class="img img-fluid" alt="Map Serenia Estate Mobile">
                </div>
            </div>
        </div>
    </section>
    <section class="section-page p-0 my-4">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 content">
                    <h1 class="titlecontent f-80 l-spacing-1">Prime City Centre Location</h1>
                    <div class="container container-first-section">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="p-title">
                                    <p class="f-30">
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
    <section class="section-page p-0 position-relative mb-3">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-gold m-titleheader mb-3 f-36">
                    <a href="<?= get_site_url().'/units'; ?>">UNIT TYPES</a>
                </div>
            </div>
            <div class="row">

                <?php 
                        foreach ($latest_types as $key => $value) {
                            echo '<div class="col-md-4">
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

            </div>
        </div>
    </section>

    <section class="py-2">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 content">
                    <!-- <h1 class="titlecontent f-80 l-spacing-1">Above it all, panoramic citywide views</h1>
                    <div class="container container-first-section">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="p-title">
                                    <p class="f-30">
                                        Serenia Hills Estates Sky57 and City57 are part of the ensemble of tall
                                        buildings at Serenia Hills Estate Standing more than 900 feet high,
                                        residents are welcomed to a sanctuary above the bustle of Jakarta. &nbsp;
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div> -->
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