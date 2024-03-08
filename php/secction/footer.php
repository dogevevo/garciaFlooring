<div class=".container_icons_new">
		<!-- (p>lorem)*20 (código a usar si tienes instalada la extensión emmet)-->
	</div>

	<div class="social_icons_news">
        
		<!-- <a href="<?php echo $Facebook?>" target="_blank"><img src="img/icons/facebook.png" alt="facebook"></a> -->
		<!-- <a href="https://www.youtube.com/@gerardoelmilusos5178"><img src="img/icons/youtube.png" alt="youtube"></a> -->
		<!-- <a href="<?php echo $Url_Map?>" target="_blank"><img src="img/icons/google-maps.png" alt="linkedin"></a> -->
		<!-- <a href="https://www.tiktok.com/"><img src="img/icons/tik-tok.png" alt="instagram"></a> -->
		
	</div>


<style>
	
*{box-sizing:border-box;}

.container_icons_new{
			width:95%;
			max-width:900px;
			padding:32px 64px;
			margin:auto;
			z-index: 2;
}

.social_icons_news{
			/*las imágenes usadas tienen width de 48px*/
			width:48px;
			position:fixed;
			top:30px;
			left: 0;
}

		/* Extra centrado vertical*/

.social_icons_news{
			/*border:1px solid #000;*/
			top:67%;
			height:205px;
			/*para poner height 192 deberíamos haber indicado en el reset de estilos font-size:0;*/
			margin-top: -40px;
			z-index: 2;
}
</style>
	


    
    
    
    
    
    
    
<footer class="main-footer">
        <!-- <div class="footer-1-shape"><img src="img/shape/footer-shape.svg" alt=""></div> -->
        <div class="footer-1-middle">
            <div class="auto-container">
                <div class="p_relative">
                    <div class="logo mb_70"><img src="assets/images/logo-light.png" alt=""></div>
                    <div class="footer-1-shape-1 d-none d-lg-block"><img src="assets/images/shape/shape-5.png" alt=""></div>
                    <div class="footer-1-shape-2 d-none d-lg-block"><img src="assets/images/shape/shape-6.png" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-widget-1 mb_30">
                            <div class="mb_30"><h4 class="fw_sbold c_light">About Us</h4></div>
                            <p class="mb_30"><?php echo $AboutText[0]?></p>
                            <ul class="footer-social-icon d-flex align-items-center">
                                <li><a href="javascript:void(0);" class="hvr-zoom-1-primary hvr-zoom-1"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0);" class="hvr-zoom-1-primary hvr-zoom-1"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0);" class="hvr-zoom-1-primary hvr-zoom-1"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="link-widget-1 mb_30">
                            <div class="mb_30"><h4 class="fw_sbold c_light">Links</h4></div>
                            <ul class="link-widget-1-list">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact  us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="link-widget-1 mb_30">
                            <div class="mb_30"><h4 class="fw_sbold c_light">Working Hours</h4></div>
                            <p><?php echo $Schedule?><br><?php echo $Schedule2  ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contact-widget-1 mb_30">
                            <div class="mb_30"><h4 class="fw_sbold c_light">Get In Touch</h4></div>
                            <ul class="contact-widget-1-list">
                                <li><span>Add:</span> <?php echo $Address?> </li>
                                <li><span>Email:</span><a href="mailto:<?php echo $Mail?>"><?php echo $Mail?></a></li>
                                <li><span>Phone:</span><a href="tel:<?php echo $Phone?>"> <?php echo $Phone?> </a></li>
                            </ul>                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="link-widget-1 mb_30">
                            <div class="mb_30"><h4 class="fw_sbold c_light">Cover Aroud</h4></div>
                            <ul class="link-widget-1-list">
                                <li><a href="contact.php">leonor city, tn<x/a></li>
                                <li><a href="contact.php">farragut, tn</a></li>
                                <li><a href="contact.php">clinton, tn</a></li>
                                <li><a href="contact.php">jardinvaley, tn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	
</div>

<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text">Go To Top</div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/isotope.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/parallax-scroll.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/booking-form.js"></script>
<script src="js/odometer.min.js"></script>
<script src="js/script.js"></script>


</body>
</html>


