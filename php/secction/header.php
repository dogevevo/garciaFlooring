<?php @session_start();?>
<?php include('php/text.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $Company?></title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="css/color.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Oswald:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;1,600&family=Poppins:wght@400;500;600;700&family=Rubik:wght@400;600&display=swap" rel="stylesheet">

<!-- <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon"> -->

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

    <header class="main-header header-style-one">

        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container d-flex align-items-center justify-content-between">
                    <div class="left-column d-flex align-items-center">
                        <div class="logo-box">
                            <!-- <div class="logo"><a href="index.php"><img width="350" src="img/logo.png" alt=""></a></div> -->
                        </div>
                        <div class="ml_60 mr_60 d-none d-xl-block"><img src="img/shape/shape-1.png" alt=""></div>
                        <div class="nav-outer">
                            <div class="mobile-nav-toggler"><img src="img/icons/icon-bar-2.png" alt=""></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li class="current dropdown"><a href="index.php">Home</a>
                                           
                                        </li>                                    
                                        <li class=""><a href="about.php">About Us</a>
                                           
                                        </li>
                                        <li class=""><a href="services.php">Services</a>
                                           
                                        </li>
                                        <li class=""><a href="gallery.php">Gallery</a>
                                           
                                        </li>
                                       
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="right-column d-flex align-items-center">   
                        <div class="contact-info-1 d-flex align-items-center">
                            <div>
                                <p class="contact-info-1-phone-tel fs_15 ff_oswald mb_0">CALL US NOW!</p>
                                <h6 class="contact-info-1-phone-number fs_20 fw_medium "><a href="tel:<?php echo $Phone?>"><?php echo $Phone?></a></h6>
                            </div>
                        </div>
                        <div class="contact-info-1 d-flex align-items-center">
                            <div>
                                <p class="contact-info-1-phone-tel fs_15 ff_oswald mb_0">SEND A MESSAGE!</p>
                                <h6 class="contact-info-1-phone-number fs_20 fw_medium "><a href="tel:<?php echo $MailRef?>"><?php echo $Mail?></a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container d-flex align-items-center justify-content-between">
                    <div class="left-column d-flex align-items-center">
                        <div class="logo-box">
                            <!-- <div class="logo"><a href="index.php"><img src="img/logo.png" alt=""></a></div> -->
                        </div>
                        <div class="ml_60 mr_60 d-none d-xl-block"><img src="img/shape/shape-1.png" alt=""></div>
                        <div class="nav-outer">
                            <div class="mobile-nav-toggler"><img src="img/icons/icon-bar-2.png" alt=""></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                
                            </nav>
                        </div>
                    </div>
                    <div class="right-column d-flex align-items-center">
                        <div class="contact-info-1 d-flex align-items-center">
                            <div>
                                <p class="contact-info-1-phone-tel fs_15 ff_oswald mb_0">CALL US NOW!</p>
                                <h6 class="contact-info-1-phone-number fs_20 fw_medium "><a href="tel:<?php echo $Phone?>"><?php echo $Phone?></a></h6>
                            </div>
                        </div>
                        <div class="contact-info-1 d-flex align-items-center">
                            <div>
                                <p class="contact-info-1-phone-tel fs_15 ff_oswald mb_0">SEND A MESSAGE!</p>
                                <h6 class="contact-info-1-phone-number fs_20 fw_medium "><a href="<?php echo $MailRef?>"><?php echo $Mail?></a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="fal fa-times"></span></div>
            
            <nav class="menu-box">
                <!-- <div class="nav-logo"><a href="index.php"><img src="img/logo.png" alt="" title=""></a></div> -->
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div>

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>