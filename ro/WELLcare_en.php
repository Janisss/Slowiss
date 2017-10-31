<!DOCTYPE html>
<!--R-O--VERSION-->
<html lang="ro">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Îngrijiri medicale la domiciliu</title>
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
		<h1 class="hide">Îngrijiri medicale la domiciliu</h1>
		<div class="container-fluid first-content">
			<ul data-limit-x="40" data-limit-y="20" id="scene">
				<li class="layer" data-depth="0.00"><img alt="CARE" class="decoimg" src="scene3/1.jpg"></li>
				<li class="layer" data-depth="0.25"><img alt="CARE" class="decoimg" src="scene3/2.png"></li>
			</ul>
		</div>
		<div class="menu-jano" id="sticker">
			<div class="container">
				<div class="row">
				<div class="col-lg-1" style="width: 45px !important"></div>
					<div class="col-lg-2">
						<div class="item-a">
							<a href="#one">De ce noi?</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-b">
							<a href="#two">Proces</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-c">
							<a href="#three">Întrebări frecvente</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-d">
							<a href="#four">Cerințe</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-d">
							<a href="#five">Testimoniale</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Vă considerați empatic și răbdător? Gasiți satisfacție și recompensă în a-i ajuta pe ceilalți? Dacă ați răspuns afirmativ la ambele întrebări, atunci lucrul în sectorul îngrijirii la domiciliu este alegerea potrivită pentru dvs. Indiferent dacă preferați o îngrijire în vârstă, o îngrijire a copilului sau menaj, vă putem ajuta.</h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background: rgb(107, 40, 92);">
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
							<h2 class="text-center">Salarii competitive</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-car fa-5x"></i>
							<h2 class="text-center">Transport de la adresă la adresă</h2>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-cutlery fa-5x"></i>
							<h2 class="text-center">Cazarea și mesele gratuite</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-phone-square fa-5x"></i>
							<h2 class="text-center">24/7 online customer service line in case of an emergency</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-thumbs-up fa-5x"></i>
							<h2 class="text-center">Linie de servicii online pentru clienți 24/7 în caz de urgență</h2>
						</div>
					</div>
					<div class="article-finish"></div>
					<p>Alăturați-vă echipei noastre de asistenți de îngrijire și aflați despre calitatea serviciilor noastre și abordarea prietenoasă care ne poziționează în rândul companiilor de consultanță de TOP de pe piața europeană în domeniul medierii de locuri de muncă sau de servicii.</p>
					<div class="article-finish"></div>
				</div>
			</div>
		</div>
						<img src="img/care.jpeg" alt="img" class="decoration">

	</section>
	<div class="green two">
		<section id="two">
			<div class="container">
				<h1>Proces</h1>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="1."></div>
						<h2 style="color: #222;">Formular de contact</h2>
						<p class="nmbrlist">Faceți primul pas și completați <a data-toggle="modal" style="cursor: pointer;" data-target="#Modaluchadzac">formularul de contact</a>, eventual încărcați CV-ul dvs. și vă vom contacta.</p>
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
						<p class="nmbrlist">Contractul pe care vi-l trimitem să îl semnați în vederea consimțământului pentru prelucrarea datelor cu caracter personal în scopul de a vă media oportunitatea de a vă oferi locuri de muncă sau servicii.</p>
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
						<p class="nmbrlist">Clientul are maximum 7 zile la primirea profilului dvs. pentru a oferi un raspuns afirmativ sau negativ. Dacă vă aleg pe dvs., vom continua cu toată administrația necesară și veți putea călători în următoarele zile. Dacă nu vă aleg, procesul nu se oprește și căutăm mai departe.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="6."></div>
						<h2 style="color: #222;">Transport</h2>
						<p class="nmbrlist">Vă asigurăm un transport confortabil de la casa dvs. direct la client.</p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
		</section>
	</div>
	<div class="green three">
		<section id="three">
		<div class="red-med">
			<h1 style="color:white;">Întrebări frecvente</h1>
			<div class="container">
			
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">Cât costă?</a><br>
					<a class="cstm-acor" data-id="2">Este necesară cunoașterea unei limbi străine?</a><br>
					<a class="cstm-acor" data-id="3">Trebuie să fi terminat un curs de îngrijire?</a><br>
					<a class="cstm-acor" data-id="4">Care este salariul lunar?</a><br>
					<a class="cstm-acor" data-id="5">Aveți, de asemenea, oferte de muncă sau servicii pentru bărbați?</a><br>
					<a class="cstm-acor" data-id="6">Cât timp durează un turnus?</a><br>
					<a class="cstm-acor" data-id="7">Ce tip de angajare aș face?</a><br>
					<a class="cstm-acor" data-id="8">Cum imi pot îmbunătăți șansele pentru o poziționare rapidă?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Vă rugam selectați întrebarea pentru a vedea răspunsul.</p>
					</div>
					<div class="q1 answ">
						<p>Nimic, nu plătiți nici o taxă de intermediere sau de înregistrare. Beneficiați gratuit de serviciile noastre. </p>
					</div>
					<div class="q2 answ">
						<p>Da, este necesar să vorbiți cel puțin la un nivel de bază al limbii străine cerute pentru țara în care doriți să călătoriți. Cunoașterea bună a limbii străine poate fi un avantaj imens pentru o poziționare rapidă, precum și pentru un salariu mai bun.</p>
					</div>
					<div class="q3 answ">
						<p>Nu, un certificat acreditat de la un curs de îngrijire reprezintă un avantaj, dar nu este esențial, precum și experiența cu acordarea de îngrijiri, care trebuie să fie susținută de referințe.</p>
					</div>
					<div class="q4 answ">
						<p>Salariul dvs. variază în funcție de locul de prestare a serviciului, de competențele dvs. lingvistice și, nu în ultimul rând, de starea de sănătate a beneficiarului de îngrijiri și, prin urmare, de dificultatea generală a unei poziții individuale.</p>
					</div>
					<div class="q5 answ">
						<p>Da, avem oferte și pentru bărbați, însă timpul de așteptare pentru poziționare ar putea fi puțin mai lung.</p>
					</div>
					<div class="q6 answ">
						<p>1-3 luni în principiu, însă durata unui turnus depinde de locul de prestare a serviciului sau de servicii și de cerințele individuale ale clienților.</p>
					</div>
					<div class="q7 answ">
						<p>Tipul de angajare depinde de o anumită ofertă de muncă sau de servicii, precum și de țara în care doriți să călătoriți. Puteți găsi mai multe informații detaliate în <a href="#four">Cerințe.</a></p>
					</div>
					<div class="q8 answ">
						<p>Buna cunoaștere a limbii străine solicitate, sa fiți o persoană nefumătoare, precum și deținerea unui permis de conducere reprezintă un avantaj imens pentru candidatul în cadrul procesului de selecție.</p>
					</div>
				</div>
			</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center" style="color: white;">Aveți o altă întrebare?<br>
				Vă rugăm să ne contactați la +40 771 711 064</h2>
			</div>
			<div class="article-finish"></div>
			<img src="img/call.jpeg" alt="img" class="decoration">
	</section>
	</div>
	<section id="four">
		<h1 class="p">Cerințe</h1><!-- AJAX LOADER -->
		<div class="container">
		<p>Când doriți să lucrați ca îngrijitoare, există anumite criterii care trebuie îndeplinite. Pentru mai multe informații vă rugăm să selectați:</p>
			<div class="row country-sel">
				<div class="col-lg-6">
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
				<div class="col-lg-6">
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
	</section>
	<section id="five">
		<h1 class="p">Testimoniale</h1><!-- AJAX LOADER -->
		<div class="container">
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"Am început să colaborez cu agenția Slowiss din iulie 2014 și sunt foarte mulțumită de serviciile și abordarea lor profesională. Consultanții sunt disponibili 24 de ore pe zi, indiferent de problemă sau dacă doar trebuie să vorbesc cu cineva. Datorită agenției Slowiss, am avut ocazia să văd unul dintre cele mai frumoase locuri din Europa, Luzern și, de asemenea, în timp ce lucram acolo, am întâlnit oameni uimitori pe care altfel nu le-aș fi întâlnit. Clienta mea a fost o batrană simpatică, îmi place foarte mult de ea și de familia ei. Vreau să spun "Merci" lui Slowiss pentru abordarea lor umană și nivelul ridicat de profesionalism, pentru dorința lor de a ajuta în momente dificile."</p>
		  <p class="text-right"><strong>- Barbora Remperova, îngrijitoare</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/remperova1.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/remperova1photo.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/remperova2photo.jpg" alt="img" style="width:100%"></div>
		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"Ma numesc Ivona Sedajova și lucrez ca îngrijitoare în Elveția de 5 ani. De asemenea, am lucrat ca îngrijitoare și în Austria pentru o perioada. Am avut multe momente frumoase si amuzante in munca mea, încât aș fi putut să scriu un roman bestseller cu lucruri pe care le-am experimentat. Aș vrea să spun câteva cuvinte agenției Slowiss și anume că angajații din agenție sunt foarte susținători și de ajutor. În momentul în care au intervenit probleme, au fost acolo pentru a le rezolva. Voi recomanda întotdeauna agenția Slowiss prietenilor."</p>
		  <p class="text-right"><strong>- Ivona Sedajova, îngrijitoare</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/fotkasedajova.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/fotkaasedajova.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/pribeh1.jpg" alt="img" style="width:100%"></div>
		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"Mulțumită agenției Slowiss am găsit un loc de muncă în Elveția și am fost foarte mulțumită. Trei luni în străinătate înseamnă o perioadă lungă de lucru, dar Slowiss a făcut-o mai plăcută pentru mine, mi-au dat un contact al unei doamne drăguțe și am devenit prietene. Ne-am ajutat reciproc și am împărtășit câteva momente frumoase. În comparație cu celelalte agenții, Slowiss este întotdeauna disponibilă și nu se ocupă numai de familii și clienți, ci și de noi, îngrijitoarele."</p>
		  <p class="text-right"><strong>- Dana Gronkova, îngrijitoare</strong></p>
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
	          if($("h1.title").text() === "De ce noi?"){
	              $(".fix").css({"background":"#6B285C",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#6B285C"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "Întrebări frecvente"){
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