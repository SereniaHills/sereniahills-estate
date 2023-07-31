<?php
/*
Template Name: Journal
*/
?>
<?php 

$post_data = get_post();

?>
<style>
.page-content .box-right p {
    font-size: .9rem;
    color: #505355;
}
</style>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/journal.css" rel="stylesheet">
<!-- content -->
<div id="carouselRequestPricelistIndicators" class="carousel slide" data-bs-ride="carousel">
    <img src="<?php echo get_the_post_thumbnail_url($post_data->ID); ?>" class="img w-100" />
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="box-right">
                    <?php echo $post_data->post_content; ?>
                </div>

            </div>
        </div>
    </div>
</section>