<!DOCTYPE html>
<!--E-N-----V-E-R-S-I-O-N-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - HOME</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="../favicon-96x96.png">
	<link rel="apple-touch-icon-precomposed" href="../apple-icon-180x180.png">
	<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { 
		test=args[i+2]; 
		val=document.getElementById(args[i]);
      if (val) { 
		  nm=val.name; 
		  if ((val=val.value)!="") {
        	if (test.indexOf('isEmail')!=-1) {
				p=val.indexOf('@');
          		if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        		} else if (test!='R') { 
					num = parseFloat(val);
          		if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          		if (test.indexOf('inRange') != -1) {
					p=test.indexOf(':');
            		min=test.substring(8,p); max=test.substring(p+1);
            		if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');}}}
    </script>
</head>
<body>
	<?php
		include "lang_en.php";
	?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--LOADING-->
	<div class="loading"><img alt="" class="loadimg" src="loading.svg"></div><!--LOADING END-->
	<!--header-->
	<div class="container-fluid fix">
		<h1 class="title">Home</h1>
		<div class="logo visible-lg">
			<img src="../slowiss.svg" alt="Slowiss" style="width: 100%;">
		</div>
		<div class="phone">
			<div class="small-call">
				<i aria-hidden="true" class="fa fa-phone fa-3x"></i>
			</div>
			<div class="big-call">
				<i aria-hidden="true" class="fa fa-phone fa-3x" data-target="#myModal" data-toggle="modal"></i>
			</div>
		</div>
	</div><!--header end-->
	<section id="top">
		<h1 class="hide">Home</h1>
		<div class="container-fluid first-content">
		
			<div id="slider" class="nivoSlider">
<img src="slider-home/a.jpg" data-thumb="slider-home/a.jpg" alt="" title="<h2>Home help</h2><p>babysitter, nanny</p>"/>
<img src="slider-home/b.jpg" data-thumb="slider-home/b.jpg" alt="" title="<h2>Waitress</h2><p>waitress, waiter, cook</p>"/>
<img src="slider-home/c.jpg" data-thumb="slider-home/c.jpg" alt="" title="<h2>Babysitter</h2><p>babysitter, nanny</p>"/>
<img src="slider-home/d.jpg" data-thumb="slider-home/d.jpg" alt="" title="<h2>Doctor</h2><p>doctor, nurse, midwife</p>"/>
<img src="slider-home/e.jpg" data-thumb="slider-home/e.jpg" alt="" title="<h2>Caregiver</h2><p>caregiver, home care worker</p>"/>
<img src="slider-home/f.jpg" data-thumb="slider-home/f.jpg" alt="" title="<h2>Construction</h2><p>construction worker</p>"/>
<img src="slider-home/h.jpg" data-thumb="slider-home/h.jpg" alt="" title="<h2>Driver</h2><p>truck driver, bus driver</p>"/>
			</div>
	
		</div>
		<div class="menu-jano" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="item-a">
							<a href="#one">Jobseekers</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-b">
							<a href="#two">Employers</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-c">
							<a href="#three">About us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<p>Welcome at Slowiss, your personal recruitment company. Slowiss is a group of passionate recruiters who deliver a broad range of talent and labour solutions. We believe in sourcing the right individuals for the right roles. Wether you are a candidate searching for an opportunity or a company searching for an employee, we can help you.</p>
		</div>
	</section>
	<!-- scroll here --><a name="fromcare"></a>
	<section id="one">
		<div class="container">
		<h1><a id="uchadzac" style="position: absolute; margin-top: -20px;"></a>Looking for a job</h1>
		<br>
		<p>We offer you many opportunities to provide jobs or services in various sectors. You can find here not just current vacancies, but also a valuable advice, which can help you to get a dream job. Please choose your profession below to find out more.</p><br>
		
					<div class="row">
						<div class="col-md-3">
								<img src="../main_img/AdobeStock_47255856_WM.jpeg" class="borderone" alt="IMG" style="width: 100%;">
						</div>
						<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: #6B285C; font-size: 5rem;">Healthcare</h2>
								</div>
									<p style="text-align: justify;" class="panel-body">Are you a caregiver, a nanny, a babysitter or a housekeeper looking for an opportunity to provide jobs or services abroad? This is the right choice for you.</p>
								<!--tlacitka-->
								  <ul class="menu-x pull-right">
								  	  <li><a href="./WELLcare_en.php">More information</a></li>
									  <!--TODO: v databaze nie je anglicka verzia udajov-->
									  <!--   <li><a href="./offers_en.php">Offers</a></li>   -->
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Application</a></li>
								  </ul> 
							</div>
							</div>
							</div>
							<br>
				<div class="divider-a"></div>
								
		
					<div class="row">
							<div class="col-md-3">
								<img src="../main_img/doctors.jpeg" alt="IMG" style="width: 100%;">
							</div>
							<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: rgba(57, 122, 218, 1); font-size: 5rem;"><a name="sempod"></a>Medical</h2>
								</div>	
									<p style="text-align: justify;" class="panel-body">If you are a nurse or a doctor searching for an employment opportunity abroad based on your achieved education, this is the right place for you.</p>
								  <!--tlacitka-->
								  <ul class="menu-x b pull-right">
								  	  <li><a href="./WELLmed_en.php">More information</a></li>
									  <!--TODO: v databaze nie je anglicka verzia udajov-->
									  <!--   <li><a href="./offers_en.php">Offers</a></li>   -->
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Application</a></li>
								  </ul> 			      
							</div>							
							</div>
							</div>
							<br>			
					<div class="divider-b"></div>

	
							<div class="row">
							<div class="col-md-3">
								<img src="../main_img/worker.jpeg" alt="IMG" style="width: 100%;">
							</div>
							<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading" style="background-color: transparent;">
						    <h2 class="panel-title" style="color: rgba(157, 11, 15, 1); font-size: 5rem;">Other</h2>
						  </div>	
									<p style="text-align: justify;" class="panel-body">In case that you are a professional driver, waiter, chef, builder, etc. searching for an opportunity to provide jobs or services, we also have possibilities for you.</p>
								<!--tlacitka-->
								  <ul class="menu-x c pull-right">
								  	  <li><a href="./WELLpro_en.php">More information</a></li>
									  <!--TODO: v databaze nie je anglicka verzia udajov-->
									  <!--   <li><a href="./offers_en.php">Offers</a></li>   -->
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Application</a></li>
								  </ul>			     	
							</div>
							</div>
							</div>
							<br>
								<div class="divider-c"></div>		
						</div>
					</div>

							<div class="article-finish"></div>
	</section>
		<section id="two">
			<div class="container">
				<h1><a id="zamestnavatel" style="position: absolute; margin-top: -20px;"></a>Looking for a personnel</h1>
					<br>
					<p>Cooperation with Slowiss offers you quality and flexibility of provided services. Over the past years we have proved to be a reliable and stable partner to many foreign and Slovak companies. Please choose below a profession of your desired personnel. Our team of recruiters will search for high quality people in accordance with your requirements.</p><br>
					<div class="row">
						<div class="col-md-3">
								<img src="../main_img/AdobeStock_122549282_WM.jpeg" alt="IMG" style="width: 100%;">
						</div>
						<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: #6B285C; font-size: 5rem;">Healthcare</h2>
								</div>
									<p style="text-align: justify;" class="panel-body">If you are searching for a reliable and competent person to take care of your family member or a client or their household, we can help you.</p>
							     <!--tlacitka-->
								  <ul class="menu-x pull-right">
								  	  <li><a href="./sprostredkovanie_care.php">More information</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Request</a></li>
									  
								  </ul>	
							</div>
							</div>
							</div><br>
					<div class="divider-a"></div>

							<div class="row">
							<div class="col-md-3">
								<img src="../main_img/AdobeStock_62437693_WM.jpeg" alt="IMG" style="width: 100%;">
							</div>
							<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: rgba(57, 122, 218, 1); font-size: 5rem;"><a name="sempod"></a>Medical</h2>
								</div>	
									<p style="text-align: justify;" class="panel-body">If you need a general or a specialized nurse, midwife or a medical doctor that are committed to their profession, we are committed to providing an excellent personnel.</p>
							     <!--tlacitka-->
								  <ul class="menu-x b pull-right">
								  	  <li><a href="./sprostredkovanie_med.php">More information</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Request</a></li>
								  </ul>	
							</div>							
							</div>
							</div><br>
					<div class="divider-b"></div>
							
							<div class="row">
							<div class="col-md-3">
								<img src="../main_img/manwoman.jpeg" alt="IMG" style="width: 100%;">
							</div>
							<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: rgba(157, 11, 15, 1); font-size: 5rem;">Other</h2>
								</div>	
									<p style="text-align: justify;" class="panel-body">Wether you are looking for a temporary or permanent, full time or part time staff in other than healthcare or medical sector, we can help you in all personnel issues.</p>
							     <!--tlacitka-->
								  <ul class="menu-x c pull-right">
								  	  <li><a href="./sprostredkovanie_other.php">More information</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Request</a></li>
								  </ul>	
							</div>
							</div>
						</div><br>
					<div class="divider-c"></div>
							
				<div class="article-finish"></div>
			</div>
		</section>
	<div class="green three" style="background: white;">
		<section id="three">
			<h1 style="color: #222"><a id="onas" style="position: absolute; margin-top: -40px;"></a>About us</h1>
			<div class="container">
						<p style="color: #222">Slowiss was established at the beginning of 2013 by Marti's brothers and since than grew dynamically. Firstly it focused all its attention on health care sector. The number of required health care personnel increased considerably and Slowiss was unable to meet the high demand, thats when cooperation with other agencies across the whole of Europe started and new opportunities were created.</p><p style="color: #222"> Gradually, there was an increasing demand for highly skilled professionals in other working sectors so  company started to recruit personnel also in logistics, gastronomy, hotels, construction and so on. Slowiss is committed to connecting good companies with good employees in Eastern European countries. Humanity, reliability, innovation and quality are our main values. </p>
						
				<div class="article-finish"></div>		
				<div class="row" style="text-align: center">
					<div class="col-lg-4"><i class="fa fa-star fa-5x" style="color: black"></i></div>
					<div class="col-lg-4"><i class="fa fa-heart fa-5x" style="color: black"></i></div>
					<div class="col-lg-4"><i class="fa fa-eur fa-5x" style="color: black;"></i></div>
				</div>
				<div class="row">
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem;">Since 2013</p></div>
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem">Thousands of satisfied clients around Europe</p></div>
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem">Job opportunities in different sectors</p></div>
				</div>
			</div>
			<div class="article-finish"></div>
		</section>
	</div>
<!--UCHADZAT SA-->
<div id="Modaluchadzac" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#222; text-align: center;">Application</h4>
      </div>
      <div class="modal-body">
        <form action="mailsender_application.php" method="post" enctype="multipart/form-data" style="font-size:2em" onSubmit="MM_validateForm('u-email','','RisEmail');return document.MM_returnValue">
        	<input placeholder="Name and surname:" type="text" name="u-person"> 
			<input name="u-email" type="text" id="u-email" placeholder="E-mail:">  
			<input placeholder="Phone number:" type="text" name="u-tel"> 
			<input placeholder="Position interested in:" type="text" name="u-position">
			<input placeholder="Where do you want to work:" type="text" name="u-work">
			<textarea placeholder="Message:" name="u-message"></textarea><hr>
			<p style="text-align: left">IMPORT YOUR CV</p>
		    <input type="file" name="u-file"><hr>
	        <p style="text-align: left">CONSENT TO THE PROCESSING OF PERSONAL DATA</p>
			<input name="u-checkbox" class="cekybox" type="checkbox" style="display: block;"><hr><br> 
		  	<input value="Submit" type="submit" name="u-submit">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--KONIEC UCHADZAT SA-->

<!--ZIADOST PRE ZAMESTNAVATELA-->
<div id="Modalziadost" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#222; text-align: center;">Request</h4>
      </div>
      <div class="modal-body">
        <form action="mailsender_request.php" method="post" style="font-size:2em">
        	<input placeholder="Contact person:" type="text" name="z-person"> 
			<input placeholder="Company's name:" type="text" name="z-title">
			<input placeholder="E-mail:" type="text" name="z-email">  
			<input placeholder="Phone number:" type="text" name="z-tel"> 
			<input placeholder="Searching for:" type="text" name="z-find">
			<textarea placeholder="Message:" name="z-message"></textarea>  
			<input value="Submit" type="submit" name="z-submit">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--KONIEC ZIADOSTI PRE ZAMESTNAVATELA-->
	
	<script src="js/jquery-1.11.3.min.js">
	</script> 
	<script src="js/jquery.sticky.js">
	</script> 
	<script src="js/bootstrap.js">
	</script> 
	<script src="../app.js">
	</script> 
	<script src="https://use.typekit.net/whv1coi.js">
	</script> 
	<script>
	try{Typekit.load({ async: true });}catch(e){}
	</script>
	<footer>
	<?php
		include "en_footer.php";
		include "sitemap.php";
	?>
	</footer><!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" type="button">&times;</button>
					<h4 class="modal-title" style="color:#222; text-align: center;">Contact info</h4>
				</div>
				<div class="modal-body">
					<p>Any question? Contact us at:</p>
					<h2 style="text-align: center;">+421 473 211 276</h2><br>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!-- modal ends -->
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5746b5b43e04d84b4e3938cf/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script> <!--End of Tawk.to Script-->
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider({ 
    effect: 'sliceDown',                 // Specify sets like: 'fold,fade,sliceDown' 
    slices: 15,                       // For slice animations 
    boxCols: 8,                       // For box animations 
    boxRows: 4,                       // For box animations 
    animSpeed: 1000,                   // Slide transition speed 
    pauseTime: 5000,                  // How long each slide will show 
    startSlide: 0,                    // Set starting Slide (0 index) 
    directionNav: false,               // Next & Prev navigation 
    controlNav: false,                 // 1,2,3... navigation 
    controlNavThumbs: false,          // Use thumbnails for Control Nav 
    pauseOnHover: false,               // Stop animation while hovering 
    manualAdvance: false,             // Force manual transitions 
    randomStart: true
});
	});

	 // black translation :)
	$( document ).ready(function() {  
	$(window).on("scroll", function() {
	   $("section").each(function() {
	       if($(window).scrollTop() >= $(this).offset().top) {
	          if($("h1.title").text() === "Search job"){
	              $(".fix").css({"background":"#9d0b0f",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#9d0b0f"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "FAQ"){
	               $(".fix").css({"background":"#ae8065",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menu-jano").css({"background":"#ae8065"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	               } 
	              
	           else {
	               $(".fix").css({"background":"white",
	                            "color":"#222222",
	                            "border-bottom":"1px solid #efefef"});
	               $(".menua").removeClass("cek");
	               $(".txt").css({"color":"#222"});
	               $(".menu-jano").css({"background":"white"});
	               $(".menu-jano a").css({"color":"#222"});
				   $(".hauptmenu i").css({"color":"#222"});
	               }
	          }
	   });
	});
	});

	     // country
	$("#to").change(function(){
	   var fromCountry = $("#from").val();
	   var toCountry = $("#to").val();
	   var ctsmLink = fromCountry + toCountry;
	   $.ajax('country/' + ctsmLink + '.html', {
	              success: function(response) {
	                  $(".country-output").html(response).slideDown(2000);
	              }
	   });
	});
	$("#from").change(function(){
	   var fromCountry = $("#from").val();
	   var toCountry = $("#to").val();
	   var ctsmLink = fromCountry + toCountry;
	   $.ajax('country/' + ctsmLink + '.html', {
	              success: function(response) {
	                  $(".country-output").html(response).slideDown(2000);
	              }
	   });
	});
	         $("#sticker").sticky({topSpacing:110});
	</script>
</body>
</html>