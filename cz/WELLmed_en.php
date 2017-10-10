<!DOCTYPE html>
<!--SK-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Zdravotnictví</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
	function MM_validateForm() { //v4.0
	  if (document.getElementById){
		var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
		for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
		  if (val) { nm=val.name; if ((val=val.value)!="") {
			if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
			  if (p<1 || p==(val.length-1)) errors+='- '+' nesprávne zadanej e-mail!\n';
			} else if (test!='R') { num = parseFloat(val);
			  if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
			  if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
				min=test.substring(8,p); max=test.substring(p+1);
				if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
		  } } } else if (test.charAt(0) == 'R') errors += '- '+' zadejte e-mail!\n'; }
		} if (errors) alert('Nasledujíci pole je povinné:\n'+errors);
		document.MM_returnValue = (errors == '');
	} }
    </script>
</head>
<body>
	<?php
		include "lang_sk.php";
		include "../scrollTop.php";
	?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--LOADING-->
	<div class="loading"><img alt="" class="loadimg" src="loading.svg"></div><!--LOADING END-->
	<!--header-->
	<div class="container-fluid fix">
		<h1 class="title">Zdravotnictví</h1>
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
		<div class="mobil-menu">
			<script src="https://www.w3schools.com/lib/w3.js"></script>
			<script src="mobil-menu.js"></script>
			<div id="mobil-menu" w3-include-html="mobil-menu.html"></div> 
			<script>w3.includeHTML();</script>
		</div>
		<!--MOBIL MENU END-->
	</div><!--header end-->
	<!--UCHADZAT SA-->	
		<!--testovanie ci bol chceckbox zakliknuty. Ak nebol nepusti <form action=""....>-->
			<script>
			function testcheck(){
    			if (!jQuery("#checkbox").is(":checked")) {
        			alert("Povinné pole: Souhlasím se zpracováním osobních údajů!");
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
					<h4 class="modal-title" style="color:#222; text-align: center;">Ucházet se</h4>
				  </div>
				  <div class="modal-body">
					 <form action="mailsender_application.php" method="post" enctype="multipart/form-data" style="font-size:2em" onSubmit="MM_validateForm('u-email','','RisEmail');return document.MM_returnValue">
						<input placeholder="Jméno a příjmení:" type="text" name="u-person"> 
						<input name="u-email" type="text" id="u-email" placeholder="E-mail:">  
						<input placeholder="Telefonní číslo:" type="text" name="u-tel"> 
						<input placeholder="Zájem o pozici:" type="text" name="u-position">
						<input placeholder="Kde chcete pracovat:" type="text" name="u-work">
						<textarea placeholder="Poznámka:" name="u-message"></textarea><hr>
						<p style="text-align: left; font-size: .7em;">VLOŽTE SVŮJ ŽIVOTOPIS</p>
						<input type="file" name="u-file"><hr>
						<div class="row">
							<div class="col-sm-1"><input name="u-checkbox" value="ano" id="checkbox" type="checkbox" style="display: block; margin: 18px 0px 18px 0px;"></div>
							<div class="col-sm-11"><a href="impressum.php" style="text-align: left; font-size: .7em; margin-left: -25px;">SOUHLASÍM SO ZPRACOVÁNÍM OSOBNÍCH ÚDAJŮ</a></div>
						</div>
						<hr><br> 
						<input value="Odeslat" type="submit" name="u-submit" onClick="return testcheck()">
					</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
				  </div>
				</div>
			  </div>
			</div>
<!--KONIEC UCHADZAT SA-->
	<section id="top">
		<h1 class="hide">Zdravotnictví</h1>
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
							<a href="#one">Proč my?</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-b">
							<a href="#two">Postup</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-c">
							<a href="#three">Otázky</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-d">
							<a href="#four">Požadavky</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Jste zdravotní sestra, porodní asistentka nebo lékař a hledáte příležitost uplatnit se v zahraničí? Cítíte se nedoceněni a hledáte nové možnosti? Pokud jste si vybrali některou z výše uvedených profesí kvůli Vaší touze měnit životy lidí k lepšímu, máme pro Vás mnohé příležitosti.</h2>
		</div>
	</section>
	<section id="one">
		<div class="par one" style="background-color: #2A8575 !important;color: white !important;">
			<h1>Proč my?</h1><br>
			<div class="container">
				<!-- flaticons -->
				<div class="row icons">
					<div class="col-md-4">
						<i class="fa fa-thumbs-up fa-5x"></i>
						<h2 class="text-center">Žádné zprostředkovatelské nebo registrační poplatky</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-user-circle-o fa-5x"></i>
						<h2 class="text-center">Individuální přístup</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-money fa-5x"></i>
						<h2 class="text-center">Motivující platové ohodnocení</h2>
					</div>
				</div>
				<div class="article-finish"></div>
				<div class="row icons">
					<div class="col-md-4">
						<i class="fa fa-handshake-o fa-5x"></i>
						<h2 class="text-center">Asistence registračním procesem</h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-refresh fa-5x"></i>
						<h2 class="text-center">Příspěvek na registrační poplatky </h2>
					</div>
					<div class="col-md-4">
						<i class="fa fa-phone-square fa-5x"></i>
						<h2 class="text-center">Příspěvek na registrační poplatky</h2>
					</div>

				</div>
				<div class="article-finish"></div><!-- flaticons end-->
				<p>Zprostředkováváme příležitosti k výkonu práce nebo služeb pro všechny druhy zdravotních sester, porodních asistentek a lékařů. Neztrácejte čas a přidejte se mezi náš profesionální tým v zahraničí a těšte se z nadstandartních platových podmínek a vynikajícího pracovního prostředí. Náš tým oddaných náborových pracovníků Vám pomůže najít vhodnou pracovní pozici. </p>
			<div class="article-finish"></div>
			</div>
		</div>
				<img src="img/nurse.jpeg" alt="img" class="decoration">

	</section>
	<section id="two">
		<div class="container">
			<h1>Postup</h1>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="1."></div>
					<h2 style="color: #222;">Formulář</h2>
					<p class="nmbrlist">Udělejte první krok a vyplňte <a data-toggle="modal" style="cursor: pointer;" data-target="#Modaluchadzac">kontaktní formulář</a>, popřípade k nemu nahrajte svůj strukturovaný životopis a my Vás budeme kontaktovat.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="2."></div>
					<h2 style="color: #222;">Telefonát</h2>
					<p class="nmbrlist">Po obdržení kontaktního fomuláře Vám zavoláme ohledně doplnění potřebných údajů o Vás, kde si i zároveň ověříme Vaše jazykové znalosti.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="3."></div>
					<h2 style="color: #222;">Zprostředkovatelská smlouva</h2>
					<p class="nmbrlist">Smlouva, kterou Vám zašleme k podpisu kvůli Vašemu souhlasu se zpracováním osobních údajů pro účely zprostředkování příležitosti na výkonávání práce nebo služeb.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="4."></div>
					<h2 style="color: #222;">Dokumenty</h2>
					<p class="nmbrlist">E-mailem Vám zašleme seznam potřebných dokumentů pro uznání získaného vzdělání a případnou registraci, která Vás opravňuje vykonávat Vaše povolání v zahraničí. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="5."></div>
					<h2 style="color: #222;">CV</h2>
					<p class="nmbrlist">Vypracujeme Vám profesionální strukturovaný životopis s aktuální fotografií, který zašleme Vámi vybranému potencionálnímu zaměstnavateli.</p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="6."></div>
					<h2 style="color: #222;">Ponuka</h2>
					<p class="nmbrlist">Obdržíte popis nabídky práce nebo služeb s informacemi o pozici a podmínkách výkonu práce nebo služby.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="7."></div>
					<h2 style="color: #222;">Souhlas</h2>
					<p class="nmbrlist">V případě, že projevíte o nabídku zájem, informujeme o tom Vašeho budoucího zaměstnavatele a vybavíme potřebnou administrativu včetně pracovní nebo obdobné smlouvy. </p>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="8."></div>
					<h2 style="color: #222;">Datum nástupu</h2>
					<p class="nmbrlist">Po kompletaci požadovaných dokumentů si určíme Váš datum nástupu na místo výkonu práce nebo služby a zorganizujeme dopravu. </p>
				</div>
			</div>
			<div class="article-finish"></div>
		</div>
	</section>
	<section id="three">
		<div class="blue-med">
			<h1 style="color:white;">Otázky</h1>
			<div class="container">
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">Musím se registrovat jako zdravotní sestra nebo lékař v zemi, v které chci pracovat?</a><br>
					<a class="cstm-acor" data-id="2">Mohu požádat o udělení licence?</a><br>
					<a class="cstm-acor" data-id="3">Jak dlouho trvá proces udělování licencí/registrace?</a><br>
					<a class="cstm-acor" data-id="4">Jaký je poplatek při podání žádosti/za registraci?</a><br>
					<a class="cstm-acor" data-id="5">Kde mohu pracovat?</a><br>
					<a class="cstm-acor" data-id="6">Jaké jsou platové podmínky?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Klikněte na otázku, na kterou chcete znát odpověď.</p>
					</div>
					<div class="q1 answ">
						<p>Ano, pokud chcete pracovat jako zdravotní sestra nebo lékař bez omezení v jiné zemi, potřebujete licenci. Příslušný orgán zhodnotí rovnocenost Vašeho dosáhnutého vzdělání z pohledu procesu udělování licence.</p>
					</div>
					<div class="q2 answ">
						<p>Vzhledem na Vaše vzdělání, školení a zkušenosti jste pravděpodobně oprávněný požádat o udělení licence. Pro podrobnější informace, prosím, klikněte na<a href="#four"> Požadavky.</a></p>
					</div>
					<div class="q3 answ">
						<p>3-4 měsíce je standardní doba spracování žádosti/registrace, v závislosti od místa, kde jste dosáhli Vaše vzdělání.</p>
					</div>
					<div class="q4 answ">
						<p>Výška poplatku závisí od konkrétní země, kde by jste chtěli pracovat. My Vám však s pokrytím poplatků pomůžeme.</p>
					</div>
					<div class="q5 answ">
						<p>Pracovat můžete v různých zdravotnických zařízení, soukromých nemocnicích, školách, univerzitách, domovech důchodců atd., a to ve Švýcarsku, Německu, Rakousku nebo ve Velké Británii.<p>
					</div>
					<div class="q6 answ">
						<p>Výška platu závisí od konkrétní pracovní nabídky, Vaší profese a zkušenosti.</p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center" style="color: white;">Máte jinou otázku? Kontaktujte nás na +421 473 211 276</h2>
			</div>
			<div class="article-finish"></div>
		</div>
		<img src="img/doctors.jpeg" alt="img" class="decoration">
	</section>
	<section id="four">
		<h1 class="p">Požadavky</h1>
		<div class="container">
			<h2 style="text-align: center;">Pokud plánujete pracovat v zahraničí v oblasti zdravotnictví, je potřeba splňovat určité kritéria, mezi jinými:</h2>
			<div class="article-finish"></div>
			<div class="row">
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-globe" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Schopnost mluvit jazykem země, do které chcete vycestovat</h2>
				</div>
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-education" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Vaše dosažené vzdělání a země, kde jste ho získali</h2>
				</div>
				<div class="col-lg-4">
					<span class="glyphicon glyphicon-briefcase" style="font-size: 4em; text-align: center; display: block;"></span>
					<h2 style="text-align: center;">Registrace v příslušný komoře nebo spolku</h2>
				</div>
			</div>
			<div class="article-finish"></div>
			<h2 style="text-align: center; padding-bottom: 10px;">Pro bližší informace, prosím, vyberte:</h2>
		</div><!-- AJAX LOADER -->
		<div class="container">
			<div class="row country-sel">
				<div class="col-lg-4">
					<select class="myselect" id="who" name="who">
						<option disabled selected value="zero">
							Pracovní pozice:
						</option>
						<option value="NURSE">
							Zdravotní sestra
						</option>
						<option value="DOCTOR">
							Lékař
						</option>
					</select> <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom selectarrow"></span>
				</div>
				<div class="col-lg-4">
					<select class="myselect" id="from" name="from">
						<option disabled selected value="zero">
							Odkud jste:
						</option>
						<option value="SK">
							Slovensko
						</option>
						<option value="RO">
							Rumunsko
						</option>
						<option value="PL">
							Poľsko
						</option>
					</select> <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom selectarrow"></span>
				</div>
				<div class="col-lg-4">
					<select class="myselect" id="to" name="to">
						<option disabled selected value="zero">
							Kde chcete pracovat:
						</option>
						<option value="DE">
							Nemecko
						</option>
						<option value="CH">
							Švajčiarsko
						</option>
						<option value="AT">
							Rakúsko
						</option>
						<option value="UK">
							Veľká Británia
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
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" type="button">&times;</button>
					<h4 class="modal-title" style="color:#222; text-align: center;">Kontaktní informace</h4>
				</div>
				<div class="modal-body">
					<p>Nejaké otázky? Kontaktujte nás na:</p>
					<h2 style="text-align: center;">+421 473 211 276</h2><br>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Zavřít</button>
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
	          if($("h1.title").text() === "Prečo my?") {
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
	           else if($("h1.title").text() === "Otázky"){
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