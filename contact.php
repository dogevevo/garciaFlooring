<?php include('php/secction/header.php') ?>

<
    <!-- Page Title -->
    <section class="page-title text-center">
        <div class="bg-layer" style="background-image: url(img/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(img/shape/shape-17.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- contact-form-section -->
    <section class="contact-form-section text-center">
        <div class="auto-container">
            <div class="section_heading mb_50">
                <span class="section_heading_title_small">Contact Info</span>
                <h2 class="section_heading_title_big">Contact Information</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"> <img width="55px" src="img/icons/phone.png"  alt=""> </div>
                            <h3>Phone Number</h3>
                            <p><a href="tel:<?php echo $Phone?>"><?php echo $Phone?></a> (24/7)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img width="55px" src="img/icons/mail.png"  alt=""></div>
                            <h3>Email Address</h3>
                            <p><a href="mailto:<?php echo $Mail?>"><?php echo $Mail?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><img width="55px" src="img/icons/maps.png"  alt=""></div>
                            <h3>Our Location</h3>
                            <p><?php echo $Address?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form-section end -->


    <!-- contact-section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="inner-container p_relative">
                <div class="image-layer">
                    <!-- <div class="vector-1"><img src="img/shape/shape-22.png" alt=""></div>
                    <div class="vector-2"><img src="img/shape/vector-3.png" alt=""></div> -->
                </div>
                <div class="section_heading text-center mb_50">
                    <span class="section_heading_title_small">Get In Touch</span>
                    <h2 class="section_heading_title_big">Get in Touch with <br> <?php echo $Company?> </h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="mail2.php" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Your email" required="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Phone">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn text-center">
                                <button class="btn-1" type="submit" name="submit-form">Send Message <span></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="map">
            <?php echo $GoogleMap?>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- newsletter -->
    <section class="newsletter-1">
        <div class="auto-container">
            <div class="newsletter-1-bg">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h4 class="newsletter-1-title">Subscribe To Our Newsletter</h4>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-1-form">
                            <form>
                                <input type="email" placeholder="e-mail address">
                                <button class="btn-1">Subscribe Now <span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('php/secction/footer.php') ?>
