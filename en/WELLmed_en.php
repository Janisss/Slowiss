<!DOCTYPE html>
<!--ENG-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Medical</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
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
						if (p<1 || p==(val.length-1)) errors+='- '+' must contain an e-mail address.\n';
						} else if (test!='R') { 
							num = parseFloat(val);
						if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
						if (test.indexOf('inRange') != -1) {
							p=test.indexOf(':');
							min=test.substring(8,p); max=test.substring(p+1);
							if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
			  } } } else if (test.charAt(0) == 'R') errors += '- '+' e-mail is required.\n'; }
			} if (errors) alert('The following error(s) occurred:\n'+errors);
			document.MM_returnValue = (errors == '');}}
    </script>
</head>
<body>
	<?php
		include "lang_en.php";
		include "../scrollTop.php";
	?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--LOADING-->
	<div class="loading"><img alt="" class="loadimg" src="loading.svg"></div><!--LOADING END-->
	<!--header-->
	<div class="container-fluid fix">
		<h1 class="title">Medical</h1>
		<div class="phone">
			<div class="small-call">
				<i aria-hidden="true" class="fa fa-phone fa-3x"></i>
			</div>
			<div class="big-call">
				<i aria-hidden="true" class="fa fa-phone fa-3x" data-target="#myModal" data-toggle="modal"></i>
			</div>
		</div><!--NAVIGATION-->
		<div class="hauptmenu">
			<a href="./index.php#uchadzac"><i aria-hidden="true" class="fa fa-home fa-3x home"></i></a>
		</div><!--NAVIGATION END-->
	</div><!--header end-->
	<!--UCHADZAT SA-->
		<!--testovanie ci bol chceckbox zakliknuty. Ak nebol nepusti <form action=""....>-->
			<script>
			function testcheck(){
    			if (!jQuery("#checkbox").is(":checked")) {
        			alert("Consent to the processing of personal data is required!");
        			return false;
					}
    			return true;
				}
			</script>
				
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
						<p style="text-align: left; font-size: .7em;">IMPORT YOUR CV</p>
						<input type="file" name="u-file"><hr>
						<div class="row">
							<div class="col-sm-1"><input name="u-checkbox" value="ano" id="checkbox" type="checkbox" style="display: block; margin: 18px 0px 18px 0px;"></div>
							<div class="col-sm-11"><a href="impressum.php" style="text-align: left; font-size: .7em; margin-left: -25px;">CONSENT TO THE PROCESSING OF PERSONAL DATA</a></div>

						</div>
						<hr><br> 
						<input value="Submit" type="submit" name="u-submit" onClick="return testcheck()">
					</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
<!--KONIEC UCHADZAT SA-->
	<section id="top">
		<h1 class="hide">Medical</h1>
		<div class="container-fluid first-content">
			<ul data-limit-x="40" data-limit-y="20" id="scene">
				<li class="layer" data-depth="0.00"><img alt="Well" class="decoimg" src="scene2/1.jpg"></li>
				<li class="layer" data-depth="0.20"><img alt="Well" class="decoimg" src="scene2/3.png"></li>
				<li class="layer" data-depth="0.25"><img alt="Well" class="decoimg" src="scene2/2.png"></li>
			</ul>
		</div>
		<div class="menu-jano is-sticky" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="item-a">
							<a href="#one">Why us?</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-b">
							<a href="#two">Process</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-c">
							<a href="#three">FAQ</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-d">
							<a href="#four">Requirements</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Are you a nurse, a midwife or a doctor searching for an opportunity abroad? Do you feel not appreciated and rewarded at your current position? If you have chosen one of the above mentioned professions because of your desire to make a difference in real people's life, we have a solution for you.</h2>
		</div>
	</section>
	<section id="one">
		<div class="par one" style="background-color: #2A8575 !important;color: white !important;">
			<h1>Why us?</h1><br>
			<div class="container">
			
				<!-- flaticons -->
				<div class="row icons">
					<div class="col-md-4">
						<i class="fa fa-user-circle-o fa-5x"></i>
						<h2 class="text-center">Individual approach</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-money fa-5x"></i>
						<h2 class="text-center">Excellent rates of pay</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-handshake-o fa-5x"></i>
						<h2 class="text-center">Assistance with registration procedure</h2>
					</div>
				</div>
				<div class="article-finish"></div>
				<div class="row icons">
					<div class="col-md-4">
						<i class="fa fa-refresh fa-5x"></i>
						<h2 class="text-center">Reimbursment of registration  fee</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-phone-square fa-5x"></i>
						<h2 class="text-center">24/7 online customer service line in case of an emergency</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-thumbs-up fa-5x"></i>
						<h2 class="text-center">No intermediary or registration fees</h2>
					</div>

				</div>
				<div class="article-finish"></div><!-- flaticons end-->
				<p>We mediate an opportunity to provide jobs or services for all grades of nurses, midwives and doctors. No time to waste, join our professional team abroad and enjoy industry leading pay rates and excellent work environment. Our team of devoted recruitment consultants will assist you with finding the right position for you.</p>
			    <div class="article-finish"></div>
			</div>
		</div>
		<img src="img/nurse.jpeg" alt="img" class="decoration">
	</section>
	<section id="two">
		<div class="container">
			<h1>Process</h1>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="1."></div>
					<h2 style="color: #222;">Contact form</h2>
					<p class="nmbrlist">Make the first step and complete our <a data-toggle="modal" style="cursor: pointer;" data-target="#Modaluchadzac">contact form</a> or upload your CV and we will contact you.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="2."></div>
					<h2 style="color: #222;">Phone call</h2>
					<p class="nmbrlist">After receiving the contact form we will call you to add important information about you and to verify the level of your language skills.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="3."></div>
					<h2 style="color: #222;">Intermediary contract</h2>
					<p class="nmbrlist">The contract  that we send you to sign because of a consent to the processing of personal data for the purposes to mediate you an opportunity to provide jobs or services.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="4."></div>
					<h2 style="color: #222;">Offer</h2>
					<p class="nmbrlist">We e-mail you list of documents required for your qualification recognition and potential registration that allow you to perform your profession abroad.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="5."></div>
					<h2 style="color: #222;">CV</h2>
					<p class="nmbrlist">We create your professional curriculum vitae with your current photography that we will send to your potential employer.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="6."></div>
					<h2 style="color: #222;">Offer</h2>
					<p class="nmbrlist">you receive a description of demand for jobs and services including the information about the vacancy as well as provision of job or service conditions.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="7."></div>
					<h2 style="color: #222;">Consent</h2>
					<p class="nmbrlist">In case you are interested in the offer, we inform your potential employer and proceed with all the necessary administration including concluding an employment or any other similar contract.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="8."></div>
					<h2 style="color: #222;">Start date</h2>
					<p class="nmbrlist">After completing of all the necessary administration we arrange the date you can start to provide job or service and the transport.</p>
				</div>
			</div>
			<div class="article-finish"></div>
		</div>
	</section>
	<section id="three">
		<div class="blue-med">
			<h1 style="color:white;">FAQ</h1>
			<div class="container">
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">Do I need to register as a nurse or doctor in the country where I want to work?</a><br>
					<a class="cstm-acor" data-id="2">Am I eligible to apply?</a><br>
					<a class="cstm-acor" data-id="3">How long is the process of application/registration?</a><br>
					<a class="cstm-acor" data-id="4">How much is the fee for the application/registration?</a><br>
					<a class="cstm-acor" data-id="5">Where can I get a job?</a><br>
					<a class="cstm-acor" data-id="6">How much will I earn?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Please select the question to see the answer.</p>
					</div>
					<div class="q1 answ">
						<p>Yes, If you want to work without any restrictions as a nurse or a doctor, you need a state licence. The competent authorities will assess the equivalence of your qualification with the corresponding foreign qualifications within the framework of a licencing procedure.</p>
					</div>
					<div class="q2 answ">
						<p>Based on your qualifications, training and experience, you may be eligible to apply. For a specific information about eligibility go to <a href="#four">Requirements.</a></p>
					</div>
					<div class="q3 answ">
						<p>3-4 months is the standard application/registration process, depending on where and when was your qualification taken. </p>
					</div>
					<div class="q4 answ">
						<p>The fee depends upon the individual country that you wish to register at, however we will help you with the registration and the cost.</p>
					</div>
					<div class="q5 answ">
						<p>You can get a job in various healthcare centres, private hospitals, schools, universities, nursing home etc. in Switzerland, Germany, Austria or United Kingdom. </p>
					</div>
					<div class="q6 answ">
						<p>The amount of your salary depends on the place of provision of job or service and your profession. </p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center" style="color: white;">Do you have another question Please contact us at +421 473 211 276</h2>
			</div>
			<div class="article-finish"></div>
		</div>
		<img src="img/doctors.jpeg" alt="img" class="decoration">
	</section>
	<section id="four">
		<h1 class="p">Requirements</h1>
		<div class="container">
			<h2 style="text-align: center;">When you are planning to work in medical sector, there is certain criteria that have to be met, among others:</h2>
			<div class="article-finish"></div>
			<div class="row">
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-globe" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Your ability to speak the language</h2>
				</div>
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-education" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Your current qualifications and the country which you obtain them</h2>
				</div>
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-briefcase" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Registration at appropriate association</h2>
				</div>
			</div>
			<div class="article-finish"></div>
			<h2 style="text-align: center; padding-bottom: 10px;">For more detailed information please select:</h2>
		</div><!-- AJAX LOADER -->
		<div class="container">
			<div class="row country-sel">
				<div class="col-lg-4">
					<select class="myselect" id="who" name="who">
						<option disabled selected value="zero">
							Position:
						</option>
						<option value="NURSE">
							Nurse
						</option>
						<option value="DOCTOR">
							Doctor
						</option>
					</select> <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom selectarrow"></span>
				</div>
				<div class="col-lg-4">
					<select class="myselect" id="from" name="from">
						<option disabled selected value="zero">
							Where are you from:
						</option>
						<option value="SK">
							Slovakia
						</option>
						<option value="RO">
							Romania
						</option>
						<option value="PL">
							Poland
						</option>
					</select> <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom selectarrow"></span>
				</div>
				<div class="col-lg-4">
					<select class="myselect" id="to" name="to">
						<option disabled selected value="zero">
							Where do you want to go:
						</option>
						<option value="DE">
							Germany
						</option>
						<option value="CH">
							Switzerland
						</option>
						<option value="AT">
							Austria
						</option>
						<option value="UK">
							United Kingdom
						</option>
					</select> <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom selectarrow"></span>
				</div>
			</div>
			<div class="country-output"></div>
		</div>
		<div class="article-finish"></div><!-- AJAX LOADER END  -->
		<div class="article-finish"></div>
	</section>
	<div class="container-fluid">
		
		<div class="article-finish"></div>
	</div><!-- Modal -->
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
	</script> <!-- parallax -->
	 
	<script src="js/parallax.min.js">
	</script> 
	<script>
	   var scene = document.getElementById("scene");
	   var parallax = new Parallax(scene);
	</script> <!-- parallax end -->
	
	<footer id="foot">
	<?php
		include "en_footer.php";		
		include "sitemap.php";
	?>
	</footer><!-- Modal -->
	
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
	 
	<script type="text/javascript">
	 // black translation :)
	$(window).on("scroll", function() {
	   $("section").each(function() {
	       if($(window).scrollTop() >= $(this).offset().top) {
	          if($("h1.title").text() === "Why us?") {
	              $(".fix").css({"background":"#2A8575",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	              $(".menu-jano").css({
	                   "background":"#2A8575",
	              });
	              $(".menu-jano a").css({
	                   "color":"white",
	               });
				  $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "FAQ"){
	               $(".fix").css({"background":"#397ada",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menu-jano").css({
	                   "background":"#397ada",
	               });
	               $(".menu-jano a").css({
	                   "color":"white",
	               });
				   $(".hauptmenu i").css({"color":"white"});
	               } 
	           else {
	               $(".fix").css({"background":"white",
	                            "color":"#222222",
	                            "border-bottom":"1px solid #efefef"});
	               $(".menua").removeClass("cek");
	               $(".txt").css({"color":"#222"});
	               $(".menu-jano").css({
	                   "background":"white",
	               });
	               $(".menu-jano a").css({
	                   "color":"#222222",
	               });
				   $(".hauptmenu i").css({"color":"#222"});
	               }
	       
	          }
	   });
	});
	     // country
	$("#to").change(function(){
	   var who = $("#who").val();
	   var fromCountry = $("#from").val();
	   var toCountry = $("#to").val();
	   var ctsmLink = who + fromCountry + toCountry;
	   $.ajax('country-med/' + ctsmLink + '.html', {
	              success: function(response) {
	                  $(".country-output").html(response).slideDown(2000);
	              }
	   });
	});
	$("#from").change(function(){
	   var who = $("#who").val();
	   var fromCountry = $("#from").val();
	   var toCountry = $("#to").val();
	   var ctsmLink = who + fromCountry + toCountry;
	   $.ajax('country-med/' + ctsmLink + '.html', {
	              success: function(response) {
	                  $(".country-output").html(response).slideDown(2000);
	              }
	   });
	});
	         $("#sticker").sticky({topSpacing:110});
	     $(".home").click(function(){location.href="./index.php#one";});
	</script>
</body>
</html>