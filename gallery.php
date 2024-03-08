<?php include('php/secction/header.php') ?>

    <section class="page-title text-center">
        <div class="bg-layer" style="background-image: url(img/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(img/shape/shape-17.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Gallery 1</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Gallery 1</li>
                </ul>
            </div>
        </div>
    </section>





    <!-- seccion gallery -->


    <!-- gallery-page-section -->
    <section class="gallery-page-section section-padding">
        <div class="auto-container">
            <div class="section_heading text-center mb_50">
                <span class="section_heading_title_small">Portfolio</span>
                <h2 class="section_heading_title_big mb_20">Some of Our Recent <br> Projects</h2>
            </div>
            <div class="sortable-masonry">
                <div class="filters text-center mb_60">
                </div>

                <div class="items-container row clearfix">
                    <?php for ($b = 1; $b <= 14; $b++) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all summer swimming repair">
                            <div class="gallery-block-1">
                                <div class="gallery-block-1-inner-box">
                                    <div class="gallery-block-10-image">
                                        <img src="img/gallery/temp/<?php echo $b?>.png" alt="">
                                    </div> 
                                    <div class="gallery-block-1-overlay">
                                        <div class="gallery-block-1-lower-content">
                                            <div class="gallery-block-1-link-btn">
                                                <a href="img/gallery/temp/<?php echo $b?>.png" class="lightbox-image" data-fancybox="gallery"><span class="icon-24"></span></a>
                                            </div>
                                        </div>
                                    </div>                           
                                </div>
                            </div>
                        </div>
                    <?php }  ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- gallery-page-section end -->

<?php // include('php/secction/seccion-partner.php'); ?>
<?php include('php/secction/footer.php') ?>