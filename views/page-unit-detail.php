<?php 
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parse_url = explode('/', $url);
foreach ($parse_url as $value) {
    if (!empty($value)) {
        $parseUrl[] = $value;
    }
}

$slug = end($parseUrl);

$unit_type_detail = getOneUnitType($slug);

?>

<div id="heroAvana" class="text-center">
    <img class="mb-0" src="<?= get_the_post_thumbnail_url($unit_type_detail->ID); ?>"
        alt="<?= $unit_type_detail->post_title; ?>" style="width:100%;height:850px;">
</div>
<!-- End Hero -->
<?php

$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parse_url = explode('/', $url);

foreach ($parse_url as $key => $value) {
    if (!empty($value)) {
        $url_data[] = $value;
    }
}

?>
<?php 

if (end($url_data) == 'integra') {
    echo '<style>
        .menu-top {
            background-color: #c36a46;
        }

        .button-unit-detail.active {
            background-color: #c36a46 !important;
            color: #fff !important;
        }

        .button-unit-detail {
            border: 1px solid #c36a46;
            background-color: #c36a46;
            color: #fff;
        }

        .button-unit-detail:hover {
            color: #c36a46;
            background-color: #fff;
        }

        .button-journal {
            border: 1px solid #867b6a;
            background-color: #fff;
            color: #867b6a;
        }

        .button-journal:hover {
            color: #fff;
            background-color: #867b6a;
        }

        .img-icon {
            background: #c36a46;
        }
    </style>';
    
} elseif (end($url_data) == 'avana') {
    echo '<style>
        .menu-top {
            background-color: #c98838;
        }

        .button-unit-detail.active {
            background-color: #c98838 !important;
            color: #fff !important;
        }

        .button-unit-detail {
            border: 1px solid #c98838;
            background-color: #c98838;
            color: #fff;
        }

        .button-unit-detail:hover {
            color: #c98838;
            background-color: #fff;
        }

        .button-journal {
            border: 1px solid #867b6a;
            background-color: #fff;
            color: #867b6a;
        }

        .button-journal:hover {
            color: #fff;
            background-color: #867b6a;
        }

        .img-icon {
            background: #c98838;
        }
    </style>';
} else { // terra
    echo '<style>
        .menu-top {
            background-color: #8e9b55;
        }

        .button-unit-detail.active {
            background-color: #8e9b55 !important;
            color: #fff !important;
        }

        .button-unit-detail {
            border: 1px solid #8e9b55;
            background-color: #8e9b55;
            color: #fff;
        }

        .button-unit-detail:hover {
            color: #8e9b55;
            background-color: #fff;
        }

        .button-journal {
            border: 1px solid #867b6a;
            background-color: #fff;
            color: #867b6a;
        }

        .button-journal:hover {
            color: #fff;
            background-color: #867b6a;
        }

        .img-icon {
            background: #8e9b55;
        }
    </style>';
}
?>

<!-- Submenu Unit Detail -->
<?php include (__DIR__ . '/menu-child/submenu.php'); ?>
<!-- End Submenu Unit Detail -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/unit-detail.css" rel="stylesheet">

<section id="section-2" class="mb-5 section-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="address">
                    <span class="fs-5 title-unit">marketing office</span>
                    <p class="fs-6">Serenia Mansion Club House<br>
                        Jln. Karang Tengah Raya no.9<br>
                        Lebak Bulus, Jakarta Selatan 12440<br>
                        T : 021 7666 143<br>
                        F: 021 759 200 66<br>
                        For more information email : ask@demo.sereniahills.co.id</p>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="description-unit">
                    <span class="fs-5">Rumah dengan sistem Panasonic Smart Home untuk meningkatkan<br>keamanan dan
                        kenyaman
                        Anda.</span>
                    <p class="fs-6 mt-3">
                        Serenia Hills memperkenalkan Quantum, kompleks rumah inovatif dengan sistem smart homes. Inovasi
                        smart homes dari Panasonic dipersembahkan untuk Anda bisa beraktivitas lebih maksimal. Quantum
                        yang terletak tidak jauh dari kawasan terbaik di Jakarta Selatan, memberikan Anda kemudahan
                        untuk mengakses fasilitas umum seperti sekolah, rumah sakit, pusat perbelanjaan, kawasan
                        perkantoran dan gaya hidup Internasional yang sedang berkembang pesat di wilayah T.B Simatupang.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
if (end($url_data) == 'integra') {
    include (__DIR__ . '/unit-types/'.end($url_data).'.php');
} elseif (end($url_data) == 'avana') {
    include (__DIR__ . '/unit-types/'.end($url_data).'.php');
} else { // terra
    include (__DIR__ . '/unit-types/'.end($url_data).'.php');
}
?>

<!-- Lifestyles -->
<?php include (__DIR__ . '/lifestyles/index.php'); ?>
<!-- End Lifestyles -->

<section class="bg-white py-5 section-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php echo do_shortcode('[smartslider3 slider="11"]'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Location Maps -->
<?php include (__DIR__ . '/locations/maps.php'); ?>
<!-- End Location Maps -->

<!-- Register your interest -->
<?php include (__DIR__ . '/forms/register-your-interest.php'); ?>
<!-- End Register your interest -->

<!-- Latest Journal -->
<?php include (__DIR__ . '/journals/latest-journal.php'); ?>
<!-- End Latest Journal -->