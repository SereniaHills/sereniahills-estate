<?php $latest_journal = getLatestJournal(); ?>
<section id="section-6" class="bg-white py-5 section-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-dark-gray">Life at Serenia Estate</h3>
            </div>
            <div class="col-lg-6">
                <a href="<?php echo get_site_url(); ?>/journal" class="btn float-end">See All Journal</a>
            </div>
        </div>
        <div class="row">
            <?php 
            
            foreach ($latest_journal as $key => $value) {
                
                echo '<div class="col-md-6 p-3">
                        <img src="'.get_the_post_thumbnail_url($value->ID).'" class="img-fluid"
                            alt="'.$value->post_title.'">
                        <div class="text-dark-gray">
                            <h3 class="fs-5 pt-3 pb-2">'.$value->post_title.'</h3>
                            <p class="fs-6">'.$value->post_excerpt.'</p>
                            <a href="'.get_site_url().'/'.$value->post_name.'"
                                class="btn btn-lg lh-1 fs-6 button-journal opacity-1 rounded-0">
                                Baca Lebih Lanjut
                            </a>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
</section>