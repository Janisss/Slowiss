<!DOCTYPE html>
<!--R-O-M-A-N-A--V-E-R-S-I-O-N---->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Îngrijiri medicale la domiciliu</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
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
		<h1 class="title">Îngrijiri medicale la domiciliu</h1>
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
		<!--MOBIL MENU-->
		<script>
		function openNav() {
			document.getElementById("myNav").style.width = "100%";
		}

		function closeNav() {
			document.getElementById("myNav").style.width = "0%";
		}
		</script>
		<div class="phone" id="mobil-menu" onclick="openNav()" style="left: 35px;">
			<i class="fa fa-bars fa-3x" aria-hidden="true"></i>
		</div>
		<div id="myNav" class="overlay">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <div class="overlay-content">
			<h1 style="font-size: 40px; color: rgba(157, 11, 15, 1); font-weight: bold;">În căutarea unui loc de muncă</h1>
			<a href="./WELLcare_en.php">Îngrijiri medicale la domiciliu</a>
			<a href="./WELLmed_en.php">Medical</a>
			<a href="./WELLpro_en.php">Altele</a>
			<h1 style="font-size: 40px; color: rgba(157, 11, 15, 1); font-weight: bold;">În căutarea unui personal de muncă</h1><br>
			<a href="./sprostredkovanie_care.php">Îngrijiri medicale la domiciliu</a>
			<a href="./sprostredkovanie_med.php">Medical</a>
			<a href="./sprostredkovanie_other.php">Altele</a>
		  </div>
		</div>
	<!-- KONIEC MOBIL MENU-->
	</div><!--header end-->
	<section id="top">
		<h1 class="hide">Îngrijiri medicale la domiciliu</h1>
		<div class="container-fluid first-content">
			<ul data-limit-x="40" data-limit-y="20" id="scene">
				<li class="layer" data-depth="0.00"><img alt="CARE" class="decoimg" src="scene1.3/1.jpg"></li>
				<li class="layer" data-depth="0.25"><img alt="CARE" class="decoimg" src="scene1.3/2.png"></li>
			</ul>
		</div>
		<div class="menu-jano" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="item-a">
							<a href="#one">De ce noi?</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-b">
							<a href="#two">Servicii</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-c">
							<a href="#three">Colaborare</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-d">
							<a href="#four">Testimoniale</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Dacă sunteți în căutarea unei persoane de încredere, calificată și cu atitudine pozitivă față de oameni, care își dă seama de importanța unei abordări individuale și care se ocupă de cei dragi sau de clientul dvs. cu respect și demnitate, sunteți la locul potrivit. Slowiss împreună cu echipa sa de recrutare vă oferă servicii adaptate nevoilor dumneavoastră.</h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background:#222">
			<div class="container">
				<h1>De ce noi?</h1>
				<div class="container">
					<!-- flaticons -->
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-thumbs-up fa-5x"></i>
							<h3 class="text-center">Asistență medicală de primă clasă</h3>
						</div>
						<div class="col-md-4">
						    <i class="fa fa-eye fa-5x"></i>
							<h3 class="text-center">Precizie elvețiană</h3>
						</div>
						<div class="col-md-4">
							<i class="fa fa-commenting fa-5x"></i>
							<h3 class="text-center">Proces de recrutare inovator</h3>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
							<div class="col-md-4">
							<i class="fa fa-group fa-5x"></i>
							<h3 class="text-center">Personal experimentat și devotat</h3>

						</div>
						<div class="col-md-4">
						    <i class="fa fa-refresh fa-5x"></i>
							<h3 class="text-center">Garanția schimbului în caz de nemulțumire</h3>
						</div>
						<div class="col-md-4">
							<i class="fa fa-smile-o fa-5x"></i>
							<h3 class="text-center">Ușurință</h3>
						</div>
					</div>
					<div class="article-finish"></div>
					<p style="text-align: center">Calitatea și fiabilitatea serviciilor noastre ne poziționează printre companiile de mediere a personalului de top pe piața europeană. Avem la dispoziție personal din întreaga Europă datorită liberei circulații a serviciilor în Uniunea Europeană. Alăturați-vă clienților mulțumiți și partenerilor de afaceri pentru a aprecia simplitatea întregului proces, efortul minim și securitatea juridică pe care o obțineți de la noi.</p>
					
					
					<div class="article-finish"></div>
				</div>
			</div>
		</div>
	</section>
	<img src="img/zamest2.jpeg" alt="IMG" style="width: 100%;">
	<div class="green two">
		<section id="two">
			<div class="container">
			<h1>Servicii</h1>
			<div class="container">
			<p style="text-align: center">Slowiss are sedii în toată Europa Centrală și de Est. Un sediu conține mai mult de 60 000 de îngrijitoare. Vă oferim servicii complexe în domeniul medierii locurilor de muncă sau de servicii și în furnizarea de personal. Dacă aveți nevoie de îngrijitoare calificate sau menajere, noi vă putem ajuta. Nu ezitați și contactați-ne pentru mai multe informații.</p>
				<p style="text-align: center">În cadrul procesului de recrutare, punem accentul pe:</p>
			
			
			<div class="row">
					<div class="col-lg-6 litem">
					<img src="../main_img/AdobeStock_99592736.jpeg" alt="IMG" style="width: 100%;">
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="1."></div>
						<h2 style="color: #222;"><br>Competențe interpersonale</h2>
						<div class="nmbrdiv" data-line="2."></div>
						<h2 style="color: #222;"><br>Experiența anterioară</h2>
						<div class="nmbrdiv" data-line="3."></div>
						<h2 style="color: #222;"><br>Aptitudini lingvistice</h2>
						<div class="nmbrdiv" data-line="4."></div>
						<h2 style="color: #222;"><br>Interviu personal</h2>
					</div>
				</div>
			<div class="article-finish">
			</div>
			</div>
			</div>
		</section>
	</div>
	
	
	<div class="green three" style="background: #222;">
<section id="three">
		<div class ="container">
			<h1 style="color:white;">Colaborare</h1>
			<p>Slowiss vă oferă posibilități diferite de colaborare, în funcție de nevoile și cerințele dumneavoastră.</p>
			<div class="container">
			
			
			
		<div class="btn-group btn-group-justified" role="group">
		  <div class="btn-group" role="group">
			<button type="button" class="btn btn-default country one">Mediere</button>
		  </div>
		  <div class="btn-group" role="group">
			<button type="button" class="btn btn-default country two">Testați și angajați</button>
		  </div>
		  <div class="btn-group" role="group">
			<button type="button" class="btn btn-default country three">Lucrători temporari</button>
		  </div>
		</div>
		
		<br>
		
		<div class="country-type-one">
			<div class="letter">
				<button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>

		  		<p style="text-align: center; color: #222;">În cazul în care decideți să utilizați serviciul de mediere, vă căutăm candidați potriviți care îndeplinesc cerințele dvs., iar ulterior puteți încheia un contract de muncă cu aceștia.</p><hr><br>
		  		<h3 style="text-align: center; color: #222;">Beneficiile medierii</h3><br>
		 
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Economie de timp și costuri</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Optimizarea procesului de recrutare</h2>
			    </div>
			  </div>
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Abordare profesională și individuală</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Selecția personalului calificat</h2>
			    </div>
			    </div>
			    <div class="row">
			    <div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Schimb de angajați în cazul plecării</h2>
			    </div>
			    </div>
			</div>
		</div>
		
		
		<div class="country-type-two">
		  <div class="letter">
		  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
		  	 
		  		<p style="text-align: center; color: #222;">Dacă doriți să verificați abilitățile angajatului înainte de a încheia un contract de muncă cu acesta, acest serviciu este pentru dvs. Vă oferă o flexibilitate mai mare și eliminați riscul de a selecta candidatul necorespunzător.</p><hr><br>
		 		<h3 style="text-align: center; color: #222;">Beneficiile testării și angajarii</h3><br>
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Flexibilitate</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Posibilitatea de a alege durata perioadei de probă</h2>
			    </div>
			  </div>
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Personal și agenda salariilor</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Garanția schimbului în caz de nemulțumire</h2>
			    </div>
			    </div> 
		</div>
		</div>
		
		
		<div class="country-type-three">
		  <div class="letter">
		  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
	  			
		  		<p style="text-align: center; color: #222;">Munca temporară, așa-numita leasing de personal, este un serviciu care vă oferă o oportunitate de a avea angajați pentru timpul și cantitatea necesară în momentele în care nu este oportun pentru dvs. să încheiați un contract de muncă cu aceștia.</p><hr><br>
		  		<h3 style="text-align: center; color: #222;">Beneficiile lucrătorilor temporari</h3><br>
		 
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Flexibilitate</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Reducerea costurilor</h2>
			    </div>
			  </div>
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Selectarea personalului calificat</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Personal și agenda salariilor</h2>
			    </div>
			    </div>
			    <div class="row">
			    <div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Garanția schimbului în caz de nemulțumire</h2>
			    </div>
			    </div>
			</div>
		</div>
	<div class="article-finish"></div>
	</section>
	<img src="img/zamest1.jpeg" alt="IMG" style="width: 100%;">
	</div>
	
	
	<section id="four">
	<h1 class="p">Testimoniale</h1><!-- AJAX LOADER -->
	<div class="container">
	
		<blockquote class="blockquote blackk">
		  <p class="text-left">„Slowiss este partenerul nostru din vara anului 2014. Aceștia oferă un serviciu de relații cu clienții remarcabil și o reacție rapidă la cererile noastre. Îngrijitoarele de la Slowiss sunt întotdeauna cumsecade și de încredere, cu o vastă experiență. Suntem convinși că am selectat agenția de personal potrivită pentru a ne ușura partea noastră de lucru.“</p>
		  <p class="text-right"><strong>- Dominik Borner, head of the recruitment of Prime Human Resource, Switzerland, WWW.PRIMECARE.CH</strong></p>
		</blockquote>
		<div class="row"><!--MIESTO NA FOTKY-->

		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote blackk">
		  <p class="text-left">„Aș dori să vă mulțumesc pentru cooperarea impecabilă. Am fost foarte mulțumiți de serviciile dvs. și va vom recomanda mai departe. Suntem mulțumiți de comunicarea prietenoasă și de viteza întregului proces. Echipa dvs. profesionistă de serviciu clienți a rezolvat de foarte multe ori și foarte rapid o situațiile critice.“</p>
		  <p class="text-right"><strong>- Zdenka Ulicna, director of Betreut, a.s, Slovakia, WWW.GUTES-HERZ.CH</strong></p>
		</blockquote>
		<div class="row"><!--MIESTO NA FOTKY-->

		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote blackk">
		  <p class="text-left">„Cu agenția Slowiss avem o colaborare foarte reușită și de lungă durată. Recomandăm în mod deosebit această agenție datorită abordării pozitive și a serviciului de relații cu clienții. Fiabilitatea și viteza serviciului au fost aspecte importante pentru noi pe tot parcursul timpului.“</p>
		  <p class="text-right"><strong>- Erwin Schlipf, CEO , Germany, WWW.PFLEGEVERMITTLUNG-BADEN-WUERTTEMBERG-BAYERN.DE</strong></p>
		</blockquote>
		<div class="row"><!--MIESTO NA FOTKY-->

		</div>
	
	</div>
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
					<h4 class="modal-title" style="color:#222; text-align: center;">Informații de contact</h4>
				</div>
				<div class="modal-body">
					<p>Aveți vreo întrebare? Contactați-ne la:</p>
					<h2 style="text-align: center;">+40 771 711 064</h2><br>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Închide</button>
				</div>
			</div>
		</div>
	</div><!-- modal ends -->
	<footer class="foot">
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
	          if($("h1.title").text() === "De ce noi?"){
	              $(".fix").css({"background":"#222",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#222"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "Colaborare"){
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