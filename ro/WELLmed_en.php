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
	        	<div class="col-sm-11"><a href="impressum.php" style="text-align: left; font-size: .7em; margin-left: -25px;">Consimțământ cu privire la prelucrarea datelor cu caracter personal</a></div>
	        
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
							<a href="#one">De ce noi?</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-b">
							<a href="#two">Proces</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-c">
							<a href="#three">Întrebări frecvente</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-d">
							<a href="#four">Cerințe</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Sunteți asistentă medicală, moașă sau doctor în căutarea unei oportunități în străinatate? Nu vă simțiți apreciată și recompensată în poziția curentă? Dacă aveți întrebări, nu ezitați să ne contactați.</h2>
		</div>
	</section>
	<section id="one">
		<div class="par one" style="background-color: #2A8575 !important;color: white !important;">
			<h1>De ce noi?</h1><br>
			<div class="container">
			
				<!-- flaticons -->
				<div class="row icons">
					<div class="col-md-4">
						<i class="fa fa-user-circle-o fa-5x"></i>
						<h2 class="text-center">Abordare individuală</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-money fa-5x"></i>
						<h2 class="text-center">Salarii excelente</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-handshake-o fa-5x"></i>
						<h2 class="text-center">Asistență cu procedura de înregistrare</h2>
					</div>
				</div>
				<div class="article-finish"></div>
				<div class="row icons">
					<div class="col-md-4">
						<i class="fa fa-refresh fa-5x"></i>
						<h2 class="text-center">Rambursarea taxei de înregistrare</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-phone-square fa-5x"></i>
						<h2 class="text-center">Linie de servicii online pentru clienți 24/7 în caz de urgență</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-thumbs-up fa-5x"></i>
						<h2 class="text-center">Fără costuri de înregistrare sau intermediere</h2>
					</div>

				</div>
				<div class="article-finish"></div><!-- flaticons end-->
				<p>Vă mediem o oportunitate de a oferi locuri de muncă sau servicii pentru toate gradele de asistente medicale, moașe și medici. Nu mai pierdeți timpul, alăturați-vă echipei noastre profesioniste din străinătate și bucurați-vă de salarii motivante și de un mediu de lucru excelent. Echipa noastră de consultanți de recrutare vă va ajuta să găsiți poziția potrivită pentru dvs.</p>
			    <div class="article-finish"></div>
			</div>
		</div>
		<img src="img/nurse.jpeg" alt="img" class="decoration">
	</section>
	<section id="two">
		<div class="container">
			<h1>Proces</h1>
			<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="1."></div>
						<h2 style="color: #222;">Formular de contact</h2>
						<p class="nmbrlist">Faceți primul pas și completați <a data-toggle="modal" style="cursor: pointer;" data-target="#Modaluchadzac">FORMULARUL DE CONTACT</a>, sau încărcați CV-ul și vă vom contacta noi.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="2."></div>
						<h2 style="color: #222;">Telefon</h2>
						<p class="nmbrlist">După primirea formularului de contact, vă sunăm pentru a adăuga informații importante despre dvs. și pentru a verifica nivelul abilităților lingvistice.</p>
					</div>
			</div>
			<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="3."></div>
						<h2 style="color: #222;">Contract de Intermediere</h2>
						<p class="nmbrlist">Contractul pe care vi-l trimitem să îl semnați în vederea consimțământului pentru prelucrarea datelor cu caracter personal în scopul medierii oportunității de a vă oferi locuri de muncă sau servicii.</p>
					</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="4."></div>
					<h2 style="color: #222;">Documente</h2>
					<p class="nmbrlist">Vă trimitem prin e-mail lista documentelor necesare pentru recunoașterea calificării dvs. și înregistrarea care vă permite să vă desfășurați profesia în străinătate.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="5."></div>
					<h2 style="color: #222;">CV</h2>
					<p class="nmbrlist">Vă creăm un curriculum vitae profesional cu o fotografie actuală pe care îl vom trimite potențialului dvs. angajator.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="6."></div>
					<h2 style="color: #222;">Oferta</h2>
					<p class="nmbrlist">Veți primi o descriere a cererii de locuri de muncă sau de servicii, inclusiv informații despre post și alte condiții.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="7."></div>
					<h2 style="color: #222;">Consimțământ</h2>
					<p class="nmbrlist">În cazul în care sunteți interesat/ă de oferta primită, vom informa potențialul angajator și continua cu toată administrarea necesară, inclusiv încheierea unui contract de muncă sau orice alt contract similar.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="8."></div>
					<h2 style="color: #222;">Data de începere</h2>
					<p class="nmbrlist">După ce finalizăm toată administrarea necesară, aranjăm data la care puteți începe și transportul.</p>
				</div>
			</div>
			<div class="article-finish"></div>
		</div>
	</section>
	<section id="three">
		<div class="blue-med">
			<h1 style="color:white;">Întrebări frecvente</h1>
			<div class="container">
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">Trebuie să mă înregistrez ca asistenta sau medic în țara în care vreau să lucrez?</a><br>
					<a class="cstm-acor" data-id="2">Sunt eligibil pentru a aplica?</a><br>
					<a class="cstm-acor" data-id="3">Cât timp durează procesul de aplicare / înregistrare?</a><br>
					<a class="cstm-acor" data-id="4">Cât este taxa pentru aplicare / înregistrare?</a><br>
					<a class="cstm-acor" data-id="5">Unde pot obține un loc de muncă?</a><br>
					<a class="cstm-acor" data-id="6">Cât de mult voi câștiga?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Vă rugam selectați întrebarea pentru a vedea răspunsul.</p>
					</div>
					<div class="q1 answ">
						<p>Da, dacă doriți să lucrați fără restricții în calitate de asistentă medicală sau de medic, aveți nevoie de o licență din partea statului. Autoritățile competente vor evalua echivalența calificării dvs. cu calificările străine corespunzătoare în cadrul unei proceduri de licențiere.</p>
					</div>
					<div class="q2 answ">
						<p>Pe baza calificărilor, a pregătirii și a experienței dvs., este posibil să fiți eligibil pentru a aplica. Pentru informații specifice despre eligibilitate, accesați <a href="#four">Cerințe.</a></p>
					</div>
					<div class="q3 answ">
						<p>3-4 luni este procesul standard de aplicare / înregistrare, în funcție de locul și momentul când a fost efectuată calificarea.</p>
					</div>
					<div class="q4 answ">
						<p>Taxa depinde de țara în care doriți să vă înregistrați, cu toate acestea vă vom ajuta cu înregistrarea și cu costul acesteia.</p>
					</div>
					<div class="q5 answ">
						<p>Puteți obține un loc de muncă într-o varietate de centre de asistență medicală, spitale private, școli, universități, case de îngrijire medicală etc. în Elveția, Germania, Austria sau Regatul Unit al Marii Britanii.</p>
					</div>
					<div class="q6 answ">
						<p>Valoarea salariului dvs. depinde de locul de prestare a serviciului sau de serviciu și de profesia dvs.</p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center" style="color: white;">Aveți o altă întrebare? Vă rugăm să ne contactați la +40 771 711 064</h2>
			</div>
			<div class="article-finish"></div>
		</div>
		<img src="img/doctors.jpeg" alt="img" class="decoration">
	</section>
	<section id="four">
		<h1 class="p">Cerințe</h1>
		<div class="container">
			<h2 style="text-align: center;">Când doriți să lucrați în sectorul medical, există anumite criterii care trebuie îndeplinite, printre altele:</h2>
			<div class="article-finish"></div>
			<div class="row">
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-globe" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Abilitatea de a vorbi limba</h2>
				</div>
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-education" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Calificările actuale și țara din care le obțineți</h2>
				</div>
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-briefcase" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Înregistrarea la asociația corespunzătoare</h2>
				</div>
			</div>
			<div class="article-finish"></div>
			<h2 style="text-align: center; padding-bottom: 10px;">Pentru mai multe informații vă rugăm să selectați:</h2>
		</div><!-- AJAX LOADER -->
		<div class="container">
			<div class="row country-sel">
				<div class="col-lg-4">
					<select class="myselect" id="who" name="who">
						<option disabled selected value="zero">
							Poziţie:
						</option>
						<option value="NURSE">
							Asistent medical
						</option>
						<option value="DOCTOR">
							Doctor
						</option>
					</select> <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom selectarrow"></span>
				</div>
				<div class="col-lg-4">
					<select class="myselect" id="from" name="from">
						<option disabled selected value="zero">
							De unde sunteți:
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
							Unde doriți să lucrați:
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
	          if($("h1.title").text() === "De ce noi?") {
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
	           else if($("h1.title").text() === "Întrebări frecvente"){
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