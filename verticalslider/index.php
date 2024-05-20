<!-- html for the slider -->

<div class="col-4 d-block d-md-none p-0">
    <div id="teardropThumbsmobile" class="row carousel-indicators mobile-row teardropThumbsmobile mx-0 ">
        <?php $images = get_field('home_hero_slider');
        foreach ($images as $index => $value) {
        ?>
            <div class="col" style="padding: 0px 2px"><img src="<?php echo  $value['slide_image']; ?>" class="img-fluid img-partners mx-0" data-bs-target="#teardropProducts" data-bs-slide-to="<?php echo  $index; ?>" class="active" current-index='<?php echo $index; ?>'></div>
        <?php } ?>

    </div>
    <div class="slick_carousel_nav">
        <div class="slick-next-btn">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slickdown.svg" class="img-fluid w-40">
        </div>
        <div class="slick-prev-btn  d-none">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slickdown.svg" class="img-fluid w-40">
        </div>
    </div>
</div>