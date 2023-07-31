<?php
/*
Template Name: Journal
*/
?>
<?php 

$post_data = get_post();

if (isset($post_data)) {
    foreach ($post_data as $key => $value) {
        if ($post_data->post_name == 'journal') {
            $contents = $post_data->post_content;
        } else {
            $contents = '';
        }
    }
}

?>

<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/journal.css" rel="stylesheet">
<!-- content -->
<div id="carouselRequestPricelistIndicators" class="carousel slide" data-bs-ride="carousel">
    <?php
    echo do_shortcode('[smartslider3 slider="12"]');
    ?>
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pb-5">
                <div class="text-white py-2 px-3" style="background:#3c4749;">
                    <h3 class="label">Section</h3>
                </div>
                <div class="text-white py-2" style="background:#bcbcb6;">
                    <ul class="text-white tree">
                        <li class="pb-2">
                            <a href="https://sereniahills.co.id/journal?category_name=feature-stories"
                                class="text-white">
                                Feature Stories
                            </a>
                        </li>
                        <li class="pb-2">
                            <a href="https://sereniahills.co.id/journal?category_name=interiors" class="text-white">
                                Interiors
                            </a>
                        </li>
                        <li class="pb-2">
                            <a href="https://sereniahills.co.id/journal?category_name=lifestyle" class="text-white">
                                Lifestyle
                            </a>
                        </li>
                        <!-- <li class="pb-2">
                            <a href="https://sereniahills.co.id/journal?category_name=nature-surrounding"
                                class="text-white">
                                Nature &amp; Surrounding
                            </a>
                        </li>
                        <li class="pb-2">
                            <a href="https://sereniahills.co.id/journal?category_name=people" class="text-white">
                                People
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container p-0">
                    <?php 
                        $journals = journal()['lists'];
                        // echo '<pre>';
                        // print_r($journals);
                        // exit();
                    ?>
                    <?php 
                        foreach ($journals as $key => $value) {
                            echo '<div class="row pb-5">
                                    <div class="col-md-8">
                                        <h6 class="date">'.date('j F Y', strtotime($value->post_date)).'</h6>
                                        <h3>'.$value->post_title.'</h3>
                                        <p>'.$value->post_excerpt.'</p>
                                        <a href="'.get_site_url().'/'.$value->post_name.'"
                                            class="read-more">Read More</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-fluid"
                                            src="'.get_the_post_thumbnail_url($value->ID).'" alt="'.$value->post_title.'">
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>