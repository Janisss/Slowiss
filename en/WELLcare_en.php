<!DOCTYPE html>
<!--EN--VERSION-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Healthcare</title>
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
		<h1 class="title">Healthcare</h1>
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
		<h1 class="hide">Healthcare</h1>
		<div class="container-fluid first-content">
			<ul data-limit-x="40" data-limit-y="20" id="scene">
				<li class="layer" data-depth="0.00"><img alt="CARE" class="decoimg" src="scene3/1.jpg"></li>
				<li class="layer" data-depth="0.25"><img alt="CARE" class="decoimg" src="scene3/2.png"></li>
			</ul>
		</div>
		<div class="menu-jano" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<div class="item-a">
							<a href="#one">Why us?</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-b">
							<a href="#two">Process</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-c">
							<a href="#three">FAQ</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-d">
							<a href="#four">Requirements</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-d">
							<a href="#five">Testimonials</a>
						</div>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Do you consider yourself to be empathetic and patient? Do you find helping others satisfying and rewarding? If you answered yes to both questions, than working in healthcare sector is the right choice for you. Whether you prefer an elderly care, a child care or a household care, we can help you. </h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background: rgb(107, 40, 92);">
			<div class="container">
				<h1>Why us?</h1>
				<div class="container">
					<!-- flaticons -->
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-user-circle-o fa-5x"></i>
							<h2 class="text-center">Individual approach</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-money fa-5x"></i>
							<h2 class="text-center">Competitive rates of pay</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-car fa-5x"></i>
							<h2 class="text-center">Transport from door to door</h2>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-cutlery fa-5x"></i>
							<h2 class="text-center">FREE meals and accommodation</h2>
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
					<div class="article-finish"></div>
					<p>Join our team of keen care assistants and find out about quality of our services and friendly approach that rank us between TOP personal consulting companies on the European market in the realm of mediating of jobs or services.</p>
					<div class="article-finish"></div>
				</div>
			</div>
		</div>
						<img src="img/care.jpeg" alt="img" class="decoration">

	</section>
	<div class="green two">
		<section id="two">
			<div class="container">
				<h1>Process</h1>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="1."></div>
						<h2 style="color: #222;">Contact form</h2>
						<p class="nmbrlist">Make the first step and complete our <a data-toggle="modal" style="cursor: pointer;" data-target="#Modaluchadzac">contact form</a>, possibly upload your CV and we will contact you.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="2."></div>
						<h2 style="color: #222;">Phone call</h2>
						<p class="nmbrlist">After receiving the contact form we will call you for add important information about you and to verify the level of your language skills.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="3."></div>
						<h2 style="color: #222;">Intermediary contract</h2>
						<p class="nmbrlist">The contract that we send you to sign because of a consent to the processing of personal data for the purposes to mediate you an opportunity to provide jobs or services.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="4."></div>
						<h2 style="color: #222;">Offer</h2>
						<p class="nmbrlist">You will receive a Description of demand for jobs or services including the information about the client and the conditions. In case you show an interest in the offer, we send your profile to the client.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="5."></div>
						<h2 style="color: #222;">Client's consent</h2>
						<p class="nmbrlist">The client has a maximum of 7 days on receipt of your profile to declare for or against. If they choose you, we proceed with all the necessary administration and you can travel over the next few days. If they do not choose you, process does not stop and we search further.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="6."></div>
						<h2 style="color: #222;">Transport</h2>
						<p class="nmbrlist">We can arrange for you a comfortable transport from your home directly to the client's.</p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
		</section>
	</div>
	<div class="green three">
		<section id="three">
		<div class="red-med">
			<h1 style="color:white;">FAQ</h1>
			<div class="container">
			
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">How much will it cost?</a><br>
					<a class="cstm-acor" data-id="2">Is knowledge of a foreign language necessary?</a><br>
					<a class="cstm-acor" data-id="3">Do I need  to have completed health care course?</a><br>
					<a class="cstm-acor" data-id="4">What is the monthly salary?</a><br>
					<a class="cstm-acor" data-id="5">Do you also have a job or service offers for male candidates?</a><br>
					<a class="cstm-acor" data-id="6">How long are individual stays/rotations?</a><br>
					<a class="cstm-acor" data-id="7">What type of employment would I conclude?</a><br>
					<a class="cstm-acor" data-id="8">How can I improve my chances for fast positioning?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Please select the question to see the answer.</p>
					</div>
					<div class="q1 answ">
						<p>Nothing, you do not pay any intermediary or registration fees. We offer you a free use of our services. </p>
					</div>
					<div class="q2 answ">
						<p>Yes, it is necessary to speak at least at a basic level of the foreign language required for the country that you want to travel to. The good knowledge of foreign language can be a huge advantage for fast positioning as well as better salary.</p>
					</div>
					<div class="q3 answ">
						<p>No, accredited certificate from a health care course is an advantage, but it is not essential, as well as experience with care giving, that need to be supported by references.</p>
					</div>
					<div class="q4 answ">
						<p>The amount of your salary depends on the place of provision of job or service, your language skills and last but not least, care taker's health state, and thus the overall difficulty of an individual position.</p>
					</div>
					<div class="q5 answ">
						<p>Yes, we have offers for male candidates, however the waiting time for positioning might be a little longer. </p>
					</div>
					<div class="q6 answ">
						<p>1-3 months in principle, however the length of particular stay/rotation depends on the place of provision of job or service and individual clients' requirements.</p>
					</div>
					<div class="q7 answ">
						<p>Type of the employment depends on a particular job or service offer, as well as the country where you want to travel. You can find more detailed information in <a href="#four">Requirements.</a></p>
					</div>
					<div class="q8 answ">
						<p>Good knowledge of required foreign language, not smoking as well as driving licence are a huge advantage for candidate within the selection process. </p>
					</div>
				</div>
			</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center" style="color: white;">Do you have another question?<br>
				Please contact us at +421 473 211 276</h2>
			</div>
			<div class="article-finish"></div>
			<img src="img/call.jpeg" alt="img" class="decoration">
	</section>
	</div>
	<section id="four">
		<h1 class="p">Requirements</h1><!-- AJAX LOADER -->
		<div class="container">
		<p>When you want to provide jobs or services as a caregiver, there is certain criteria that have to be met. For more information please select:</p>
			<div class="row country-sel">
				<div class="col-lg-6">
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
				<div class="col-lg-6">
					<select class="myselect" id="to" name="to">
						<option disabled selected value="zero">
							Where do you want to work:
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
	</section>
	<section id="five">
		<h1 class="p">Testimonials</h1><!-- AJAX LOADER -->
		<div class="container">
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"I have started to cooperate with Slowiss agency from July 2014 and I am very satisfied with their services and professional approach. Consultants are available 24 hours every day, no matter what the problem is, or if I only need to talk to someone, when I am homesick. Thanks to the Slowiss agency I had a chance to see one of the most beautiful places in Europe, Luzern. Also, while working there, I have met amazing people that otherwise I would not meet. My client was a pleasant old woman, I like her a lot and also her family. I would like to say "Merci" to Slowiss for their human approach and high level of professionallity, for their willingness to help in difficult moments."</p>
		  <p class="text-right"><strong>- Barbora Remperova, Caregiver</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/remperova1.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/remperova1photo.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/remperova2photo.jpg" alt="img" style="width:100%"></div>
		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"My name is Ivona Sedajova and I have worked as a caregiver in Switzerland for 5 years already. I also worked  as a caregiver in Austria for a while. There has been also many nice and funny moments at my work, I could have written a bestseller with things I have experienced. I would like to say some words to the Slowiss agency and that is that the employees in the agency are very supportive and helpful. Whenever any problem has occurred they were there to sort it out. I will always recommend Slowiss agency to my friends."</p>
		  <p class="text-right"><strong>- Ivona Sedajova, Caregiver</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/fotkasedajova.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/fotkaasedajova.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/pribeh1.jpg" alt="img" style="width:100%"></div>
		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"Thanks to the Slowiss agency I found work in Switzerland and I was very satisfied. It is a long time to work for three months, but Slowiss made it more pleasant for me, they gave me a contact for one nice woman and we have became great friends. We were helping each other and we had shared  some nice moments. Compare to the other agencies, Slowiss is always available and they do care not only about families and clients but also about us, the caregivers."</p>
		  <p class="text-right"><strong>- Dana Gronkova, Caregiver</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/Fotogronkovaaa.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/gron1.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/pribeh2.jpg" alt="img" style="width:100%"></div>
		</div>
	
		</div>
		<div class="article-finish"></div>
		<div class="article-finish"></div><!-- AJAX LOADER END  -->
	</section>
	
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
	<!-- Modal -->
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
	<footer id="foot">
	<?php
		include "en_footer.php";		
		include "sitemap.php";
	?>
	</footer><!-- Modal -->
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
	          if($("h1.title").text() === "Why us?"){
	              $(".fix").css({"background":"#6B285C",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#6B285C"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "FAQ"){
	               $(".fix").css({"background":"#ae394d",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menu-jano").css({"background":"#ae394d"});
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