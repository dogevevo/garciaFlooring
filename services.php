<?php include('php/secction/header.php') ?>


    <!-- Page Title -->
    <section class="page-title text-center">
        <div class="bg-layer" style="background-image: url(img/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(img/shape/shape-18.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Our Services</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <section class="section-padding pt_130">
        <div class="gray-bg p_absolute l_0 t_0 r_0 h_548"></div>
        <div class="auto-container">
            <div class="section_heading text-center mb_60">
                <span class="section_heading_title_small"><?php echo $servicesTittle[0]?></span>
                <h2 class="section_heading_title_big"><?php echo $servicesTittle[0]?></h2>
            </div>

            <div class="row">
                <?php for($b = 1; $b <= 5; $b++)  { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-1-block text-center wow fadeInLeft" data-wow-delay=".2s" data-wow-duration=".8s">
                        <div class="feature-1-image hvr-img-zoom-1"><img src="img/services/<?php echo $b?>.jpg" alt=""></div>
                        <h4 class="feature-1-title"><?php echo  $SN[$b]?></h4>
                        <p class="feature-1-text"><?php echo  $SD[$b]?></p>
                        <div class="feature-1-link"><a class="feature-1-link-btn hvr-zoom-1 hvr-zoom-1-primary" href="#"> <img src="img/icons/1.png" alt="" height="50" width="50"> </a></div>
                    </div>
                </div>
                <?php } ?>
               
            </div>
        </div>
    </section>



<?php include('php/secction/footer.php') ?>
