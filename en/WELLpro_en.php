<!DOCTYPE html>
<!--ENG-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Other</title>
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
	?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--LOADING-->
	<div class="loading"><img alt="" class="loadimg" src="loading.svg"></div><!--LOADING END-->
	<!--header-->
	<div class="container-fluid fix">
		<h1 class="title">Other</h1>
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
		<h1 class="hide">Other</h1>
		<div class="container-fluid first-content">
			<ul data-limit-x="40" data-limit-y="20" id="scene">
				<li class="layer" data-depth="0.00"><img alt="WELL" class="decoimg" src="scene4/1.jpg"></li>
				<li class="layer" data-depth="0.25"><img alt="WELL" class="decoimg" src="scene4/2.png"></li>
			</ul>
		</div>
		<div class="menu-jano" id="sticker">
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
			<h2 class="text-center">Are you searching for a position in a different than healthcare or medical sector? We have many opportunities for you to provide your job or service in various different sectors. Among others we have possibilities for drivers, waitresses, builders, scaffolders, carpenters and so on. </h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background:#9d0b0f">
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
							<h2 class="text-center">Comfortable transport arrangements</h2>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-list-alt fa-5x"></i>
							<h2 class="text-center">A wide range of job/service offers</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-phone-square fa-5x"></i>
							<h2 class="text-center">24/7 on-line customer service line in case of emergencies</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-thumbs-up fa-5x"></i>
							<h2 class="text-center">No mediations or registration fees</h2>
						</div>
					</div>
					<div class="article-finish"></div>
					<p>The  opportunity provided is within various different sectors, especially in construction industry, logistics, gastronomy and agricultural production. We appreciate people that are experts in their field of work. Our aim is to find you an opportunity to provide jobs or services that is adequately remunerated and guarantees you satisfaction and delight in its performance. Let our team of professional recruitment specialists to find you a suitable position for you.</p>
				<div class="article-finish"></div>
				</div>
			</div>
		</div>
	</section>
	<img src="img/AdobeStock_76718403.jpeg" alt="img" class="decoration">
	<div class="green two">
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
						<p class="nmbrlist">You will receive a Description of demand for jobs or services including the information about the position and the conditions. In case you show an interest in the offer, we send your profile to the client, who will interview you.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="5."></div>
						<h2 style="color: #222;">Client's consent</h2>
						<p class="nmbrlist">The client has a maximum of 7 days on receipt of your profile to declare for or against.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="6."></div>
						<h2 style="color: #222;">Final step</h2>
						<p class="nmbrlist">If the client chooses you, we proceed with the necessary administration and you can start at an agreed date and place. If they do not choose you, we search further.</p>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="green three" style="background: #ae8065;">
		<section id="three">
			<h1>FAQ</h1>
			<div class="container">
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">What kind of jobs or services do you offer?</a><br>
					<a class="cstm-acor" data-id="2">How can I apply?</a><br>
					<a class="cstm-acor" data-id="3">How much will it cost?</a><br>
					<a class="cstm-acor" data-id="4">Where can I provide jobs or services?</a><br>
					<a class="cstm-acor" data-id="5">Is knowledge of foreign language necessary?</a><br>
					<a class="cstm-acor" data-id="6">What type of employment would I conclude?</a><br>
					<a class="cstm-acor" data-id="7">Do I need references from my previous employments?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Please select the question to see the answer.</p>
					</div>
					<div class="q1 answ">
						<p>In various different sectors, especially in construction industry, logistics, gastronomy and agricultural production. For our current vacancies please click <a href="offers_en.php">here.</a></p>
					</div>
					<div class="q2 answ">
						<p>First you need to complete a contact form for registration. To see whole process click<a href="#two"> here.</a></p>
					</div>
					<div class="q3 answ">
						<p>Nothing, you do not pay any intermediary or registration fees. We offer you a free use of our services.</p>
					</div>
					<div class="q4 answ">
						<p>Switzerland, Germany, Austria, United Kingdom and Slovakia are the main countries where you are given an opportunity to provide jobs or services.</p>
					</div>
					<div class="q5 answ">
						<p>Yes, it is necessary to speak at least at a basic level of the foreign language required for the country where you want to provide your job or service. For detailed information you need to read individual description of demand for job or service.</p>
					</div>
					<div class="q6 answ">
						<p>Type of the employment depends on a particular job or service offer, as well as the country where you want to travel. You can find more detailed information in <a href="#four">Requirements.</a></p>
					</div>
					<div class="q7 answ">
						<p>Yes, provision of your references from previous employments is always considered as a huge advantage and is appreciated by your potential employer. </p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center">Do you have another question? Please contact us at +421 473 211 276</h2>
			</div>
			<div class="article-finish"></div>
		</section>
		<img src="img/AdobeStock_133532736.jpeg" alt="img" class="decoration">
	</div>
	<section id="four">
		<h1 class="p">Requirements</h1><!-- AJAX LOADER -->
		<div class="container">
			<h3>Documents:</h3>
			<p>- National ID card</p>
			<p>- European Health Insurance Card</p>
			<p>- Proof of your qualification</p>
			<div class="article-finish"></div>
		<p><strong>There are different possibilities on which you can perform mediated jobs or services depending on a specific offer and individually specified client’s requirements.</strong></p>	
	
<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country one">Self-employment</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country two">Slovak employment contract</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country three">Foreign employment contract</button>
  </div>
</div>
<br>
<div class="country-type-one">
<div class="letter">
<button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
  <p style="text-align: center;">First step for self-employment in Slovakia is to obtain a Certificate of Trade Authorisation:</p><hr><br>

  <div class="row">
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="1."></div>
            <h2 style="color: #222;">Trade Licensing Office</h2>
             <p class="nmbrlist">
              Visit Trade Licensing Office appropriate to the residential address of the natural person.
            </p>
            </div>
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="2."></div>
            <h2 style="color: #222;">Form</h2>
              <p class="nmbrlist">
              Complete a form for a natural person <a href="http://www.minv.sk/?natural-persons" target="_blank">http://www.minv.sk/?natural-persons.</a> 
            </p>
            </div>
           </div>
           
           <div class="row">
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="3."></div>
            <h2 style="color: #222;">Health insurance</h2>
            <p class="nmbrlist">
              Register in the system of mandatory health insurance.
            </p>
            </div>
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="4."></div>
            <h2 style="color: #222;">Tax</h2>
            <p class="nmbrlist">
              Register with the tax administrator.
            </p>
      </div>
            </div>

            <div class="row">
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="5."></div>
            <h2 style="color: #222;">Administrative fee</h2>
            <p class="nmbrlist">
              Pay the administrative fee and attach the receipt to the completed form <a href="http://www.minv.sk/?trade-licencing" target="_blank">Administrative fees related to Trade Licensing.</a>
            </p>
            </div>
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="6."></div>
            <h2 style="color: #222;">Authorisation</h2>
            <p class="nmbrlist">
              The authorisation to carry on a notifiable trade shall become effective for the natural person registered in the Commercial Register as of the date of notification if the notice is without errors. 
            </p>
      </div>
            </div>


</div>
</div>
<div class="country-type-two">
  <div class="letter">
  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
  <p style="text-align: center;">Before you start an employment you shall receive an Employment contract concluded under Labour Code Law No. 311/2001 of Coll. as amended.</p><hr><br>
  <p>The advantages that you get:</p>
			<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Regular work.</h2>
            	</div>
            	<div class="col-lg-6 litem">
            		<div class="nmbrdiv" data-line="✪"></div>
            		<h2 style="color: #222;">Holiday entitlement.</h2>
				</div>
           	</div>

           	<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Wage compensation uder certain conditions.</h2>
           	    </div>
            	<div class="col-lg-6 litem">
            		<div class="nmbrdiv" data-line="✪"></div>
            		<h2 style="color: #222;">State social contributions entitlement.</h2>
				</div>
           	</div>
           	<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Specified notice period depending on worked years (after completed probational period).</h2>
           	    </div>
            	<div class="col-lg-6 litem">
            		<div class="nmbrdiv" data-line="✪"></div>
            		<h2 style="color: #222;">Worked years contributory to state pension entitlement</h2>
				</div>
           	</div>  
</div>
</div>
<div class="country-type-three">
  <div class="letter">
  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
  <p style="text-align: center;">Before you start an employment you shall receive an Employment contract concluded under the Labour Code of the country where you are going to perform work duties.</p><hr><br>
  <p>The advantages that you get:</p>
			<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Regular work.</h2>
            	</div>
            	<div class="col-lg-6 litem">
            		<div class="nmbrdiv" data-line="✪"></div>
           		    <h2 style="color: #222;">Holiday entitlement.</h2>
				</div>
           	</div>

           	<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Being a part of social system of the country where you concluded your employment contract.</h2>
            	</div>
        		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Rights to the same social system benefits as local employees.</h2>
            	</div>
           	</div>
           	<div class="row">
            	<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Worked years contributory to state pension entitlement.</h2>
            	</div>        		
           	</div>
</div>
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
	
	 <script type="text/javascript">
	$("button.one").click(function(){
		$(".country-type-one").addClass("opened");
		$(".country-type-two").removeClass("opened");
		$(".country-type-three").removeClass("opened");
	});
	$("button.two").click(function(){
		$(".country-type-one").removeClass("opened");
		$(".country-type-two").addClass("opened");
		$(".country-type-three").removeClass("opened");
	});
	$("button.three").click(function(){
		$(".country-type-one").removeClass("opened");
		$(".country-type-two").removeClass("opened");
		$(".country-type-three").addClass("opened");
	});
	$(".close-info").click(function(){
		$(".country-type-one").removeClass("opened");
		$(".country-type-two").removeClass("opened");
		$(".country-type-three").removeClass("opened");
	});
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
	 
	<script type="text/javascript">
	 // black translation :)
	$(window).on("scroll", function() {
	   $("section").each(function() {
	       if($(window).scrollTop() >= $(this).offset().top) {
	          if($("h1.title").text() === "Why us?"){
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
	     $(".home").click(function(){location.href="./index.php#one";});
	</script>
</body>
</html>