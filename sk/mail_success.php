<!DOCTYPE html>
<!--E-N-G-L-I-S-H--V-E-R-S-I-O-N---->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Ďakujeme!</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
</head>
<body>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--LOADING-->
	<div class="loading"><img alt="" class="loadimg" src="loading.svg"></div><!--LOADING END-->
	<!--header-->
	<div class="container-fluid fix">
		<h1 class="title">Ďakujeme!</h1>
		<div class="phone">
			<div class="small-call">
				<i aria-hidden="true" class="fa fa-phone fa-3x"></i>
			</div>
			<div class="big-call">
				<i aria-hidden="true" class="fa fa-phone fa-3x" data-target="#myModal" data-toggle="modal"></i>
			</div>
		</div><!--NAVIGATION-->
		<div class="hauptmenu">
			<a href="./index.php#zamestnavatel"><i aria-hidden="true" class="fa fa-home fa-3x home"></i></a>
		</div><!--NAVIGATION END-->
	</div><!--header end-->
	<section id="top">
		<h1 class="hide">Ďakujeme!</h1>
		<div class="container-fluid first-content">
			<ul data-limit-x="40" data-limit-y="20" id="scene">
				<li class="layer" data-depth="0.00"><img alt="CARE" class="decoimg" src="scene1/1.jpg"></li>
				<li class="layer" data-depth="0.25"><img alt="CARE" class="decoimg" src="scene1/2.png"></li>
				<li class="layer" data-depth="0.25"><img alt="CARE" class="decoimg" src="scene1/3.png"></li>
			</ul>
		</div>
	<section id="thanks">
		<h3 style="text-align: center;">Vďaka za Váš čas a kontaktovanie. Pokúsime sa odpovedať čo najskôr. Prajeme Vám príjemný deň!</h3>
		<h3 style="text-align: center"><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></h3>
		<div class="article-finish"></div>
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
	$("button.one").ready(function(){
		$(".country-type-one").addClass("opened");
		$(".country-type-two").removeClass("opened");
		$(".country-type-three").removeClass("opened");
	});
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
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" type="button">&times;</button>
					<h4 class="modal-title">Contact info</h4>
				</div>
				<div class="modal-body">
					<p>Any questions?</p>
					<h2 style="text-align: center;"> +421 473 211 276</h2><br>
					<p>Form:</p>
					<form action="" method="post" style="font-size:2em">
						<input placeholder="Name:" type="text"> <input placeholder="Email:" type="text"> <input type="submit">
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div><!-- modal ends -->
	<footer>
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
	              $(".fix").css({"background":"#222",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#222"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "Cooperation"){
	               $(".fix").css({"background":"#222",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menu-jano").css({"background":"#222"});
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