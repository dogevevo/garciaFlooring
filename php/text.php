<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='reviews.php') {$namepage="Reviews";}
elseif ($page_name=='projects.php') {$namepage="Projects";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$Company="Garcia Flooring IR LLC";
	$Domain=' http://www.garciaflooringirllc.com';//No dejar pleca al final del dominio
	$Address='4243 N Kitley Ave Indianapolis, Indiana 46226';

	$PhoneName="";
	$Phone='(317) 362-9086';
	//$Phone2='410-713-8574';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='ivanr2376@gmail.com';$MailRef="mailto:".$Mail;
	$Services="";
	$Estimates="Free Estimates";
	$Payment="Cash, Cheque, Zelle";
	$Experience="10 Years Of Experience";
	$Schedule="Mon-Sat: 8:00am - 5:00pm";
	$Schedule2="";	
	$Cover="30 - 40 Miles Around";

	$Facebook="https://www.facebook.com/profile.php?id=100077561156157";
	$Instagram="https://www.instagram.com/garciairflooring/?igsh=Z2R4N3owY3hjM3hr";
	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3063.7664874646443!2d-86.05770602454704!3d39.83465289086178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b4dd5023843c3%3A0x3c987273b06c9e49!2s4243%20N%20Kitley%20Ave%2C%20Indianapolis%2C%20IN%2046226%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sni!4v1709925897401!5m2!1ses-419!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
	$Url_Map = 'https://maps.app.goo.gl/EN4CLEeXyMVdkVk8A';

//Phrases
	$Description="Quality flooring, unmatched beauty";	// 
 	$Phrase = array(	
		"",
		"",
		"",
		"",
	);

	$sliderText = array (
		"$Schedule",
		"$Company",
		"$Payment",
	);

	//Home  etc.
	$Choose = array(		 
		"Transform your home into a haven of cleanliness with $Company. Schedule your cleaning service today and experience the joy of coming home to a sparkling, refreshed space.",
		"Our meticulous approach to cleaning ensures a sparkling and refreshing home every time.",
		"We take pride in our professional team, delivering reliable and top-notch cleaning services.",
		"Your home is unique, and so are your cleaning needs. Our personalized care ensures your satisfaction with every visit.",
		"No hidden fees or surprises. Our transparent pricing ensures you know exactly what to expect.",
	);


	$About = array(
		"$Description",
		"",
		);

	$AboutText = array (
		"With dedication and professionalism, we seek to be the trusted partner to transform homes and work environments into oases of cleanliness and tranquility.",
		"Our mission is to go beyond conventional cleaning. We strive to create spaces that are not only spotless, but also inspire a feeling of freshness and comfort.",
		"Our vision at Sparkling Homes is to be recognized as leaders in the cleaning industry, setting the standard for exceptional standards of service and environmental commitment.",
		"",
	);

	$Contact = array (
		"Need High Quality Cleaning & <br> Maintenance Services?",
	); 	




	//Services
	$SN[1]="Flooring Services ";
	$SD[1]="";
	
	$SN[2]="Hardwood Flooring";
	$SD[2]="";
	
	$SN[3]="Vinyl Flooring";
	$SD[3]="";
	
	$SN[4]="Carpet Flooring";
	$SD[4]="";
	
	$SN[5]="Sport flooring";
	$SD[5]="";

	$SN[6]="Ceramics";
	$SD[6]="";

	$SN[7]="Wood";
	$SD[7]="";
	
	$SN[8]="Laminate";
	$SD[8]="";
	
	$SN[9]="LVT";
	$SD[9]="";
	
	$SN[10]="VCT";
	$SD[10]="";

	$SN[11]="Glue wood";
	$SD[11]="";
	
	$SN[12]="Nailed wood";
	$SD[12]="";
	
	$SN[13]="Preparations";
	$SD[13]="";
	
	$SN[14]="Demolitions";
	$SD[14]="";
	
	$SN[15]="Repair";
	$SD[15]="";


	
	
	$ServicesText = array (
		"",
		"",
		"",
		"",
	);

	$servicesTittle = array ( 
		"",
		""
	);

	$Detail = array(		 
		"",
	);


	
//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	//if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
