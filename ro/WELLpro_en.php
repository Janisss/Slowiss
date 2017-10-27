<!DOCTYPE html>
<!--ENG-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Altele</title>
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
		<h1 class="title">Altele</h1>
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
	<section id="top">
		<h1 class="hide">Altele</h1>
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
			<h2 class="text-center">Căutați o poziție într-un alt domeniu decât cel de îngrijire sau medical? Avem multe oportunități pentru a vă oferi locuri de muncă în diferite sectoare. Avem, printre altele,  posibilități pentru șoferi, chelneri, constructori, dulgheri etc.</h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background:#9d0b0f">
			<div class="container">
				<h1>De ce noi?</h1>
				<div class="container">
					<!-- flaticons -->
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-user-circle-o fa-5x"></i>
							<h2 class="text-center">Abordare individuală</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-money fa-5x"></i>
							<h2 class="text-center">salarii excelente</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-car fa-5x"></i>
							<h2 class="text-center">Rambursarea taxei de înregistrare</h2>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-list-alt fa-5x"></i>
							<h2 class="text-center">Asistență cu procedura de înregistrare</h2>
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
					<div class="article-finish"></div>
					<p>Posibilitatea oferită se află în diferite sectoare, în special în industria construcțiilor, logistică, gastronomie și agricultură. We appreciate people that are experts in their field of work. Apreciem oamenii care sunt experți în domeniul lor de activitate. Scopul nostru este să vă găsim o oportunitate de a vă oferi locuri de muncă sau servicii care sunt remunerate în mod adecvat și vă garantează satisfacția și încântarea în performanță.</p>
				<div class="article-finish"></div>
				</div>
			</div>
		</div>
	</section>
	<img src="img/AdobeStock_76718403.jpeg" alt="img" class="decoration">
	<div class="green two">
		<section id="two">
			<div class="container">
				<h1>Proces</h1>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="1."></div>
						<h2 style="color: #222;">Formular de contact</h2>
						<p class="nmbrlist">Faceți primul pas și completați <a data-toggle="modal" style="cursor: pointer;" data-target="#Modaluchadzac">FORMULARUL DE CONTACT</a> sau încărcați CV-ul și vă vom contacta noi.</p>
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
						<h2 style="color: #222;">Oferta</h2>
						<p class="nmbrlist">Veți primi o descriere a cererii de locuri de muncă sau de servicii, inclusiv informații despre client și condiții. În cazul în care manifestați interes pentru ofertă, vă trimitem profilul clientului.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="5."></div>
						<h2 style="color: #222;">Consimțământul clientului</h2>
						<p class="nmbrlist">Clientul are maximum 7 zile la primirea profilului dvs. pentru a oferi un raspuns afirmativ sau negativ.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="6."></div>
						<h2 style="color: #222;">Pasul final</h2>
						<p class="nmbrlist">În cazul în care clientul vă alege, continuăm administrarea necesară și puteți începe la o dată și un loc convenite. Dacă nu vă selectează, căutăm mai departe.</p>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="green three" style="background: #ae8065;">
		<section id="three">
			<h1>Întrebări frecvente</h1>
			<div class="container">
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">Ce fel de locuri de muncă sau servicii oferiți?</a><br>
					<a class="cstm-acor" data-id="2">Cum pot aplica?</a><br>
					<a class="cstm-acor" data-id="3">Cât costă?</a><br>
					<a class="cstm-acor" data-id="4">Unde pot oferi locuri de muncă sau servicii?</a><br>
					<a class="cstm-acor" data-id="5">Este necesară cunoașterea limbii străine?</a><br>
					<a class="cstm-acor" data-id="6">Ce tip de angajare aș face?</a><br>
					<a class="cstm-acor" data-id="7">Am nevoie de recomandări de la angajatorii anteriori?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Selectați întrebarea pentru a vedea răspunsul.</p>
					</div>
					<div class="q1 answ">
						<p>În diverse sectoare, în special în industria construcțiilor, logistică, gastronomie și agricultură. Pentru locurile vacante curente, vă rugăm să faceți clic <a href="offers_en.php">aici.</a></p>
					</div>
					<div class="q2 answ">
						<p>Mai întâi trebuie să completați un formular de contact pentru înregistrare. Pentru a vedea întregul proces, faceți clic <a href="#two">aici.</a></p>
					</div>
					<div class="q3 answ">
						<p>Nimic, nu plătiți nici o taxă de intermediere sau de înregistrare. Beneficiați gratuit de serviciile noastre.</p>
					</div>
					<div class="q4 answ">
						<p>Elveția, Germania, Austria, Regatul Unit și Slovacia sunt principalele țări în care vi se oferă posibilitatea de a oferi locuri de muncă sau servicii.</p>
					</div>
					<div class="q5 answ">
						<p>Da, este necesar să vorbiți cel puțin la un nivel de bază al limbii străine cerute în țara în care doriți să călătoriți. Pentru informații detaliate, trebuie să citiți descrierea individuală a cererii de muncă sau de servicii.</p>
					</div>
					<div class="q6 answ">
						<p>Tipul de angajare depinde de o anumită ofertă de muncă sau de servicii, precum și de țara în care doriți să călătoriți. Puteți găsi mai multe informații detaliate în <a href="#four">Cerințe.</a></p>
					</div>
					<div class="q7 answ">
						<p>Da, furnizarea referințelor dvs. de la angajatorii anteriori este întotdeauna considerată un avantaj imens și este apreciată de potențialul dvs. angajator.</p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center">Aveți o altă întrebare? Vă rugăm să ne contactați la +421 473 211 276</h2>
			</div>
			<div class="article-finish"></div>
		</section>
		<img src="img/AdobeStock_133532736.jpeg" alt="img" class="decoration">
	</div>
	<section id="four">
		<h1 class="p">Cerințe</h1><!-- AJAX LOADER -->
		<div class="container">
			<h3>Documente:</h3>
			<p>- Carte de identitate națională</p>
			<p>- Cardul european de asigurări sociale de sănătate</p>
			<p>- Dovada calificării dumneavoastră</p>
			<div class="article-finish"></div>
		<p><strong>Există diferite posibilități în care puteți lucra sau presta servicii mediate în funcție de o ofertă specifică și de cerințele clientului specificate individual.</strong></p>
	
<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country one">PFA</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country two">Contract de muncă în România</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country three">Contract de muncă în străinatate</button>
  </div>
</div>
<br>
<div class="country-type-one">
<div class="letter">
<button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
  <p style="text-align: center;">Primul pas pentru o activitate independentă în România este obținerea unui certificat de autorizare a comerțului:</p><hr><br>

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
  <p style="text-align: center;">Înainte de a începe activitatea la un loc de muncă, veți primi un contract de muncă încheiat conform Codului Muncii.</p><hr><br>
  <p>Avantajele pe care le obțineți:</p>
			<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Program de lucru regulat.</h2>
            	</div>
            	<div class="col-lg-6 litem">
            		<div class="nmbrdiv" data-line="✪"></div>
            		<h2 style="color: #222;">Dreptul la concediu.</h2>
				</div>
           	</div>

           	<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Compensații salariale în anumite condiții.</h2>
           	    </div>
            	<div class="col-lg-6 litem">
            		<div class="nmbrdiv" data-line="✪"></div>
            		<h2 style="color: #222;">Dreptul la contribuțiile sociale de stat.</h2>
				</div>
           	</div>
           	<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Perioada de preaviz specificată în funcție de anii lucrați (după perioada de probă completă).</h2>
           	    </div>
            	<div class="col-lg-6 litem">
            		<div class="nmbrdiv" data-line="✪"></div>
            		<h2 style="color: #222;">Anii lucrați contribuie la dreptul la pensia de stat.</h2>
				</div>
           	</div>  
</div>
</div>
<div class="country-type-three">
  <div class="letter">
  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
  <p style="text-align: center;">Înainte de a începe activitatea la un loc de muncă, veți primi un contract de muncă încheiat conform Codului Muncii.</p><hr><br>
  <p>Avantajele pe care le obțineți:</p>
			<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Program de lucru regulat.</h2>
            	</div>
            	<div class="col-lg-6 litem">
            		<div class="nmbrdiv" data-line="✪"></div>
           		    <h2 style="color: #222;">Dreptul la concediu</h2>
				</div>
           	</div>

           	<div class="row">
           		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Veți face parte din sistemul social al țării în care ați încheiat contractul de muncă.</h2>
            	</div>
        		<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Având aceleași beneficii ale sistemului social ca și angajații locali.</h2>
            	</div>
           	</div>
           	<div class="row">
            	<div class="col-lg-6 litem">
           			<div class="nmbrdiv" data-line="✪"></div>
           			<h2 style="color: #222;">Care au lucrat ani contributori cu dreptul la pensie de stat.</h2>
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
	</footer>
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
	 
	<script type="text/javascript">
	 // black translation :)
	$(window).on("scroll", function() {
	   $("section").each(function() {
	       if($(window).scrollTop() >= $(this).offset().top) {
	          if($("h1.title").text() === "De ce noi?"){
	              $(".fix").css({"background":"#9d0b0f",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#9d0b0f"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "Întrebări frecvente"){
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