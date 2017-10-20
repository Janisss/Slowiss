<!DOCTYPE html>
<!--R-O-----V-E-R-S-I-O-N-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - HOME</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/1024.css">
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
						if (p<1 || p==(val.length-1)) errors+='- '+' trebuie să conțină o adresă de e-mail.\n';
						} else if (test!='R') { 
							num = parseFloat(val);
						if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
						if (test.indexOf('inRange') != -1) {
							p=test.indexOf(':');
							min=test.substring(8,p); max=test.substring(p+1);
							if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
			  } } } else if (test.charAt(0) == 'R') errors += '- '+' este necesară introducerea unei adrese de e-mail.\n'; }
			} if (errors) alert('A apărut următoarea eroare:\n'+errors);
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
		<h1 class="hide">Home</h1>
		<div class="container-fluid first-content">
		
			<div id="slider" class="nivoSlider">
<img src="slider-home/a.jpg" data-thumb="slider-home/a.jpg" alt="" title="<h2>Ajutor la domiciliu, bonă, dădacă<h2><p><a href='./offers_en.php'>arată oferte</a></p>"/>
<img src="slider-home/b.jpg" data-thumb="slider-home/b.jpg" alt="" title="<h2>Chelneriță, chelner, bucătar</h2><p><a href='./offers_en.php'>arată oferte</a></p>"/>
<img src="slider-home/c.jpg" data-thumb="slider-home/c.jpg" alt="" title="<h2>Babysitting</h2><p><a href='./offers_en.php'>zobraziť ponuky</a></p>"/>
<img src="slider-home/d.jpg" data-thumb="slider-home/d.jpg" alt="" title="<h2>Doctor, asistent medical, moașă</h2><p><a href='./offers_en.php'>arată oferte</a></p>"/>
<img src="slider-home/e.jpg" data-thumb="slider-home/e.jpg" alt="" title="<h2>Îngrijitoare, îngrijitoare la domiciliu</h2><p><a href='./offers_en.php'>arată oferte</a></p>"/>
<img src="slider-home/f.jpg" data-thumb="slider-home/f.jpg" alt="" title="<h2>Construcții, constructor</h2><p><a href='./offers_en.php'>arată oferte</a></p>"/>
<img src="slider-home/h.jpg" data-thumb="slider-home/h.jpg" alt="" title="<h2>Şofer, șofer de camion, șofer de autobuz</h2><p><a href='./offers_en.php'>arată oferte</a></p>"/>
			</div>
	
		</div>
		<div class="menu-jano" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="item-a">
							<a href="#one">Candidați</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-b">
							<a href="#two">Angajatori</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-c">
							<a href="#three">Despre noi</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<p>Bine ați venit la Slowiss, compania dumneavoastră de recrutare. Slowiss este un grup de recrutori pasionați care livrează o gamă largă de soluții de talent și muncă. Credem în plasamentul persoanelor potrivite pentru rolurile potrivite. Fie că sunteți un candidat în căutarea unei oportunități sau o companie în căutarea unui angajat, noi vă putem ajuta.</p>
		</div>
	</section>
	<!-- scroll here --><a name="fromcare"></a>
	<section id="one">
		<div class="container">
		<h1><a id="uchadzac" style="position: absolute; margin-top: -20px;"></a>În căutarea unui loc de muncă</h1>
		<br>
		<p>Vă oferim multe oportunități cu locuri de muncă sau servicii în diferite sectoare. Puteți găsi aici nu doar locurile vacante actuale, ci și sfaturi utile, care vă pot ajuta să obțineți un loc de muncă ideal. Vă rugăm să vă alegeți profesia mai jos pentru a afla mai multe.</p><br>
		
					<div class="row">
						<div class="col-md-3">
								<img src="../main_img/AdobeStock_47255856_WM.jpeg" class="borderone" alt="IMG" style="width: 100%;">
						</div>
						<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: #6B285C; font-size: 5rem;">Îngrijiri medicale la domiciliu</h2>
								</div>
									<p style="text-align: justify;" class="panel-body">Sunteți îngrijitoare, babysitter sau o menajeră care caută o oportunitate pentru locuri de muncă sau servicii în străinătate? Aceasta este alegerea potrivită pentru dvs.</p>
								<!--tlacitka-->
								  <ul class="menu-x pull-right">
								  	  <li><a href="./WELLcare_en.php">Mai multe informații</a></li>
									  <!--TODO: v databaze nie je anglicka verzia udajov-->
									  <li><a href="./offers_en.php">Oferte</a></li>
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Aplicație</a></li>
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
									<p style="text-align: justify;" class="panel-body">Dacă sunteți o asistentă medicală sau un medic care caută o oportunitate de angajare în străinătate pe baza educației realizate, acesta este locul potrivit pentru dumneavoastră.</p>
								  <!--tlacitka-->
								  <ul class="menu-x b pull-right">
								  	  <li><a href="./WELLmed_en.php">Mai multe informații</a></li>
									  <!--TODO: v databaze nie je anglicka verzia udajov-->
									  <li><a href="./offers_en.php">Oferte</a></li>
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Aplicație</a></li>
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
						    <h2 class="panel-title" style="color: rgba(157, 11, 15, 1); font-size: 5rem;">Altele</h2>
						  </div>	
									<p style="text-align: justify;" class="panel-body">În cazul în care sunteți un șofer profesionist, chelner, bucătar-șef, constructor etc., care caută o oportunitate pentru locuri de muncă sau servicii, avem și pentru dumneavoastră.</p>
								<!--tlacitka-->
								  <ul class="menu-x c pull-right">
								  	  <li><a href="./WELLpro_en.php">Mai multe informații</a></li>
									  <!--TODO: v databaze nie je anglicka verzia udajov-->
									  <li><a href="./offers_en.php">Oferte</a></li>
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Aplicați</a></li>
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
				<h1><a id="zamestnavatel" style="position: absolute; margin-top: -20px;"></a>În căutarea unui personal de muncă</h1>
					<br>
					<p>Colaborarea cu Slowiss vă oferă calitatea și flexibilitatea serviciilor oferite. În ultimii ani ne-am dovedit a fi un partener de încredere și stabil pentru multe companii străine. Alegeți mai jos o profesie a personalului dorit. Echipa noastră de recrutori va căuta oameni calitate, în conformitate cu cerințele dumneavoastră.</p><br>
					<div class="row">
						<div class="col-md-3">
								<img src="../main_img/AdobeStock_122549282_WM.jpeg" alt="IMG" style="width: 100%;">
						</div>
						<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: #6B285C; font-size: 5rem;">Îngrijiri medicale la domiciliu</h2>
								</div>
									<p style="text-align: justify;" class="panel-body">Dacă sunteți în căutarea unei persoane de încredere și competentă pentru a avea grijă de membrii familiei, de un client sau de gospodăria acestora, vă putem ajuta.</p>
							     <!--tlacitka-->
								  <ul class="menu-x pull-right">
								  	  <li><a href="./sprostredkovanie_care.php">Mai multe informații</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Cerere</a></li>
									  
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
									<p style="text-align: justify;" class="panel-body">Dacă aveți nevoie de o asistentă medicală generalistă sau specializată, de o moașă sau de un medic care se dedică profesiei, ne angajăm să vă oferim un personal excelent.</p>
							     <!--tlacitka-->
								  <ul class="menu-x b pull-right">
								  	  <li><a href="./sprostredkovanie_med.php">Mai multe informații</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Cerere</a></li>
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
						    <h2 class="panel-title" style="color: rgba(157, 11, 15, 1); font-size: 5rem;">Altele</h2>
								</div>	
									<p style="text-align: justify;" class="panel-body">Fie că sunteți în căutarea unui angajat temporar sau permanent, cu normă întreagă sau cu normă parțială, în alte domenii decât cel de îngrijire la domiciliu sau medical, vă putem ajuta în orice situație.</p>
							     <!--tlacitka-->
								  <ul class="menu-x c pull-right">
								  	  <li><a href="./sprostredkovanie_other.php">Mai multe informații</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Cerere</a></li>
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
			<h1 style="color: #222"><a id="onas" style="position: absolute; margin-top: -40px;"></a>Despre noi</h1>
			<div class="container">
						<p style="color: #222">Slowiss a fost înființată la începutul anului 2013 de către frații Marti și de atunci a crescut dinamic. În primul rând, și-a concentrat toată atenția asupra sectorului sănătății. Numărul de personal medical necesar a crescut considerabil, iar Slowiss nu a reușit să răspundă cererii mari, și atunci a început colaborarea cu alte companii din întreaga Europă și s-au creat noi oportunități.</p><p style="color: #222"> Treptat, a existat o creștere în cererea de profesioniști cu înaltă calificare în alte sectoare, astfel încât compania a început să recruteze personal și în logistică, gastronomie, hoteluri, construcții și așa mai departe. Slowiss se angajează să socieze companii bune cu angajați buni din țările din Europa de Est. Omenirea, încrederea, inovația și calitatea sunt principalele noastre valori.</p>
						
				<div class="article-finish"></div>		
				<div class="row" style="text-align: center">
					<div class="col-lg-4"><i class="fa fa-star fa-5x" style="color: black"></i></div>
					<div class="col-lg-4"><i class="fa fa-heart fa-5x" style="color: black"></i></div>
					<div class="col-lg-4"><i class="fa fa-eur fa-5x" style="color: black;"></i></div>
				</div>
				<div class="row">
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem;">Din 2013</p></div>
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem">Mii de clienți mulțumiți în Europa</p></div>
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem">Oportunități de angajare în diferite sectoare</p></div>
				</div>
			</div>
			<div class="article-finish"></div>
		</section>
	</div>
<!--UCHADZAT SA-->
		<!--testovanie ci bol chceckbox zakliknuty. Ak nebol nepusti <form action=""....>-->
			<script>
			function testcheck(){
    			if (!jQuery("#checkbox").is(":checked")) {
        			alert("Este necesar consimţământul de prelucrare a datelor cu caracter personal!");
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
        <h4 class="modal-title" style="color:#222; text-align: center;">Aplicație</h4>
      </div>
      <div class="modal-body">
        <form action="mailsender_application.php" method="post" enctype="multipart/form-data" style="font-size:2em" onSubmit="MM_validateForm('u-email','','RisEmail');return document.MM_returnValue">
        	<input placeholder="Nume și prenume:" type="text" name="u-person"> 
			<input name="u-email" type="text" id="u-email" placeholder="E-mail:">  
			<input placeholder="Nr.telefon:" type="text" name="u-tel"> 
			<input placeholder="Poziția interesată:" type="text" name="u-position">
			<input placeholder="Unde doriți sa munciți:" type="text" name="u-work">
			<textarea placeholder="Mesaj:" name="u-message"></textarea><hr>
			<p style="text-align: left; font-size: .7em;">Încarcă CV</p>
		    <input type="file" name="u-file"><hr>
	        <div class="row">
	        	<div class="col-sm-1"><input name="u-checkbox" value="ano" id="checkbox" type="checkbox" style="display: block; margin: 18px 0px 18px 0px;"></div>
	        	<div class="col-sm-11"><a href="impressum.php" style="text-align: left; font-size: .7em; margin-left: -25px;">Consimți la prelucrarea datelor cu caracter personal</a></div>
	        
	        </div>
			<hr><br> 
		  	<input value="Trimite" type="submit" name="u-submit" onClick="return testcheck()">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
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
        <h4 class="modal-title" style="color:#222; text-align: center;">Cerere</h4>
      </div>
      <div class="modal-body">
        <form action="mailsender_request.php" method="post" style="font-size:2em">
        	<input placeholder="Persoana de contact:" type="text" name="z-person"> 
			<input placeholder="Denumirea companiei:" type="text" name="z-title">
			<input placeholder="E-mail:" type="text" name="z-email">  
			<input placeholder="Nr.telefon:" type="text" name="z-tel"> 
			<input placeholder="Sunt in căutarea:" type="text" name="z-find">
			<textarea placeholder="Mesaj:" name="z-message"></textarea>  
			<input value="Trimite" type="submit" name="z-submit">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
      </div>
    </div>

  </div>
</div>
<!--KONIEC ZIADOSTI PRE ZAMESTNAVATELA-->

<!--KONIEC modal na ziadost-->	
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
	<footer class="foot">
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
					<h4 class="modal-title" style="color:#222; text-align: center;">Informații de contact</h4>
				</div>
				<div class="modal-body">
					<p>Aveți vreo întrebare? Contactați-ne la:</p>
					<h2 style="text-align: center;">+421 473 211 276</h2><br>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Închide</button>
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
	          if($("h1.title").text() === "Îngrijiri medicale la domiciliu"){
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