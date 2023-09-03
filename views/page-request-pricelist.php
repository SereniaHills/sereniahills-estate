<?php
/*
Template Name: Request pricelist
*/
?>

<?php 

$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'request-pricelist') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}
?>

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
        echo do_shortcode('[smartslider3 slider="16"]');
        ?>
    </div>
</div>

<!-- Maps Booking View -->
<?php include (__DIR__ . '/forms/register-pricelist.php'); ?>
<!-- End Maps Booking View -->
<section style="overflow: visible;" class="section-page section-requestpricelist d-none">
    <div id="containerRequestPricelist" class="container bg-white px-lg-5 py-3 py-lg-5" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="carousel-text-pricelist">
                    <h5 class="title-request-pricelist f-36">.</h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-3 mt-lg-0">
                <form action="#" id="form-home-request" name="requestBrochure" class="form-all php-email-form">
                    
                </form>

            </div>
        </div>

    </div>
</section>
<?php // echo $contents; ?>