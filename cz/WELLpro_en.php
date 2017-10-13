<!DOCTYPE html>
<!--SK-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Jiné odvětví</title>
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
		<h1 class="title">Jiné odvětví</h1>
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
			<h1 style="font-size: 40px; color: rgba(157, 11, 15, 1); font-weight: bold;">Uchazeči</h1>
			<a href="./WELLcare_en.php">Pečovatelství</a>
			<a href="./WELLmed_en.php">Zdravotnictví</a>
			<a href="./WELLpro_en.php">Jiné odvetví</a>
			<h1 style="font-size: 40px; color: rgba(157, 11, 15, 1); font-weight: bold;">Zaměstnavatelé</h1><br>
			<a href="./sprostredkovanie_care.php">Pečovatelství</a>
			<a href="./sprostredkovanie_med.php">Zdravotnictví</a>
			<a href="./sprostredkovanie_other.php">Jiné odvetví</a>
		  </div>
		</div>
	<!-- KONIEC MOBIL MENU-->
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
						<div class="col-sm-11"><a href="impressum.php" style="text-align: left; font-size: .7em; margin-left: -25px;">SOUHLASÍM SE ZPRACOVÁNÍM OSOBNÍCH ÚDAJŮ</a></div>
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
		<h1 class="hide">Jiné odvětví</h1>
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
			<h2 class="text-center">Hledáte si uplatnění v jiné oblasti jako pečovatelství nebo zdravotnictví? Máme pro Vás mnoho příležitostí pro výkon práce nebo služeb v mnoha dalších odvětvích. Mezi jinými nabízíme příležitost pro řidiče, číšníky, stavitele, lešenáře, tesaře apod.</h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background:#9d0b0f">
			<div class="container">
				<h1>Proč my?</h1>
				<div class="container">
					<!-- flaticons -->
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-user-circle-o fa-5x"></i>
							<h2 class="text-center">Žádné zprostředkovatelské nebo registrační poplatky</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-money fa-5x"></i>
							<h2 class="text-center">Individuální přístup</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-car fa-5x"></i>
							<h2 class="text-center">Motivující platové ohodnocení</h2>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-list-alt fa-5x"></i>
							<h2 class="text-center">Široká škála nabídek práce nebo služeb</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-phone-square fa-5x"></i>
							<h2 class="text-center">Zabezpečení pohodlné dopravy</h2>
						</div>
						<div class="col-md-4">
							<i class="fa fa-thumbs-up fa-5x"></i>
							<h2 class="text-center">24-hodinová on-line zákaznická linka pro případ nouze</h2>
						</div>
					</div>
					<div class="article-finish"></div>
					<p>S námi máte možnost uplatnit se v různých oblastech, především ve stavebním průmysle, logistice, gastronimii, zemědělství, ale také v mnoha dalších odvětvích. Vážíme si lidí, kteří jsou odborníky ve své pracovní oblasti. Naším cílem je najít pro Vás příležitost pro výkon práce nebo služby, která je přiměřeně ohodnocená a zaručí Vám spokojenost a radost při jejím výkoně. </p>
					<div class="article-finish"></div>
				</div>
				<div class="article-finish"></div>
			</div>
		</div>
		<img src="img/AdobeStock_76718403.jpeg" alt="img" class="decoration">
	</section>
	<div class="green two">
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
						<h2 style="color: #222;">Nabídka</h2>
						<p class="nmbrlist">Obdržíte popis nabídky práce nebo služeb s informacemi o pozici a podmínkách. V případě, že projevíte o nabídku zájem, zašleme Váš profil klientovi, s kterým následně absolvujete pohovor.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="5."></div>
						<h2 style="color: #222;">Súhlas klienta</h2>
						<p class="nmbrlist">Klient se po obdržení Vašeho profilu maximálně do sedmi dní vyjádří, zda si vybral právě Vás.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="6."></div>
						<h2 style="color: #222;">Finální krok</h2>
						<p class="nmbrlist">Pokud ano, vybavíme potřebnou administrativu a s výkonem můžete začít v dohodnutém termíně a na dohodnutém místě. Pokud ne, hledáme dál.</p>
					</div>
				</div>
			</div>

		</section>
	</div>
	<div class="green three" style="background: #ae8065;">
		<section id="three">
			<h1>Otázky</h1>
			<div class="container">
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">Jaké druhy práce nabízíte?</a><br>
					<a class="cstm-acor" data-id="2">Co musím udělat?</a><br>
					<a class="cstm-acor" data-id="3">Kolik mě to bude stát?</a><br>
					<a class="cstm-acor" data-id="4">Kde mohu vykonávat práci nebo služby?</a><br>
					<a class="cstm-acor" data-id="5">Je nezbytná znalost cizího jazyka?</a><br>
					<a class="cstm-acor" data-id="6">Jakou formou budu pracovat?</a><br>
					<a class="cstm-acor" data-id="7">Potřebuji doporučení z předchozích zaměstnání?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Klikněte na otázku, na kterou chcete znát odpověď.</p>
					</div>
					<div class="q1 answ">
						<p>V různých odvětvích, především ve stavebnictví, logistice, gastronomii a zemědělství. Pro konkrétní nabídky klikněte na<a href="offers_en.php"> volné pozice. </a></p>
					</div>
					<div class="q2 answ">
						<p>V první řadě je potřebné vyplnit kontaktní formulář. Celý proces naleznete <a href ="#two">tu.</a></p>
					</div>
					<div class="q3 answ">
						<p>Nic, u nás neplatíte žádné zprostředkovatelské ani registrační poplatky. Nabízíme Vám bezplatné využití našich služeb.</p>
					</div>
					<div class="q4 answ">
						<p>Švýcarsko, Německo, Rakousko, Velká Británie a Slovensko jsou hlavní země, v kterých nabízíme možnost uplatnění.</p>
					</div>
					<div class="q5 answ">
						<p>Ano, je nezbytná alespoň základní znalost jazyka země, v které chcete vykonávat práci nebo službu. Pro bližší informace si podrobně přečtěte Popis poptávky práce nebo služby.</p>
					</div>
					<div class="q6 answ">
						<p>Druh zaměstnání závisí na konkrétní nabídce i na zemi,  kam chcete vycestovat. Bližší informace naleznete v části <a href="#four">Požadavky.</a></p>
					</div>
					<div class="q7 answ">
						<p>Ano, doložení Vašich referencí z předchozích zaměstnání je vždy považované za velkou výhodu a potenciálním zaměstnavatelem oceňované.</p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center">Máte jinou otázku? Kontaktujte nás na +421 473 211 276</h2>
			</div>
			<div class="article-finish"></div>	
		</section>
		<img src="img/AdobeStock_133532736.jpeg" alt="img" class="decoration">
	</div>
	<section id="four">
		<h1 class="p">Požadavky</h1><!-- AJAX LOADER -->
		<div class="container">
		<h3>Požadované dokumenty pro všechny pracovní pozice:</h3>
			<p>- Občanský průkaz</p>
			<p>- Evropský průkaz zdravotního pojištění</p>
			<p>- Doklad o vzdělání</p>
			<div class="article-finish"></div>
		<p><strong>Existuje několik možností, prostřednictvím kterých můžete vykonávat práce nebo služby v závislosti od konkrétní nabídky a klientem individuálně stanovených podmínek.</strong></p>	
			
	<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country one">Živnosť</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country two">Slovenská pracovná zmluva</button>
  </div>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default country three">Zahraničná pracovná zmluva</button>
  </div>
</div>
<br>
<div class="country-type-one">
<div class="letter">
<button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
  <p style="text-align: center;">Prvým krokom k práci na živnosť je získanie Živnostenského oprávnenia.</p><hr><br>

  <div class="row">
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="1."></div>
            <h2 style="color: #222;">Živnostenský úrad</h2>
             <p class="nmbrlist">
              Navštívte miestne príslušný okresný úrad - odbor živnostenského podnikania (podľa Vašeho bydliska).
            </p>
            </div>
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="2."></div>
            <h2 style="color: #222;">Formulár</h2>
              <p class="nmbrlist">
              Podajte žiadosť fyzickej osoby o vydanie osvedčenia o živnostenskom oprávnení <a href="http://www.minv.sk/?natural-persons" target="_blank">http://www.minv.sk/?natural-persons.</a>
            </p>
            </div>
           </div>
           
           <div class="row">
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="3."></div>
            <h2 style="color: #222;">Zdravotné poistenie</h2>
            <p class="nmbrlist">
              Zaregistrujte sa v systéme povinného zdravotného poistenia a sociálneho poistenia.
            </p>
            </div>
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="4."></div>
            <h2 style="color: #222;">Daňový úrad</h2>
            <p class="nmbrlist">
              Registrujte sa na daňovom úrade.
            </p>
      </div>
            </div>

            <div class="row">
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="5."></div>
            <h2 style="color: #222;">Správny poplatok</h2>
            <p class="nmbrlist">
              Zaplaťte správny poplatok a doklad o zaplatení priložte k vyplnenej žiadosti <a href="http://www.minv.sk/?trade-licencing" target="_blank">http://www.minv.sk/?trade-licencing.</a>
            </p>
            </div>
            <div class="col-lg-6 litem">
            <div class="nmbrdiv" data-line="6."></div>
            <h2 style="color: #222;">Oprávnenie</h2>
            <p class="nmbrlist">
              Oprávnenie na výkon živnosti vzniká dňom registrácie v živnostenskom registri odo dňa oznámenia, v prípade, že žiadosť bola bez chýb. 
            </p>
      </div>
            </div>


</div>
</div>
<div class="country-type-two">
  <div class="letter">
  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
  <p style="text-align: center;">Predtým, než začnete pracovať, obdržíte pracovnú zmluvu uzavretú na základe Zákon č. 311/2001 Z.z. v znení neskorších predpisov.</p><hr><br>
  <p>Výhody:</p>
      <div class="row">
      		<div class="col-lg-6 litem">
        		<div class="nmbrdiv" data-line="✪"></div>
            	<h2 style="color: #222;">Pravidelná práca.</h2>
        	</div>
        	<div class="col-lg-6 litem">
            	<div class="nmbrdiv" data-line="✪"></div>
            	<h2 style="color: #222;">Nárok na platenú dovolenku.</h2>
        	</div>
   	   </div>
	   <div class="row">
       		<div class="col-lg-6 litem">
            	<div class="nmbrdiv" data-line="✪"></div>
            	<h2 style="color: #222;">Nárok na náhradu mzdy za určitých podmienok.</h2>
        	</div>
       		<div class="col-lg-6 litem">
            	<div class="nmbrdiv" data-line="✪"></div>
            	<h2 style="color: #222;">Nárok na niektoré dávky od štátu.</h2>
        	</div>
        </div>
	    <div class="row">
       		<div class="col-lg-6 litem">
            	<div class="nmbrdiv" data-line="✪"></div>
            	<h2 style="color: #222;">Stanovená výpovedná lehota v závislosti od odpracovaných rokov (po skončení skúšobnej doby).</h2>
        	</div>
       		<div class="col-lg-6 litem">
            	<div class="nmbrdiv" data-line="✪"></div>
            	<h2 style="color: #222;">Odpracované roky sa Vám započítavajú do dôchodku.</h2>
        	</div>
        </div>        
</div>
</div>
<div class="country-type-three">
  <div class="letter">
  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
  <p style="text-align: center;">Predtým, než začnete pracovať, obdržíte pracovnú zmluvu uzavretú na základe Zákonníka práce.</p><hr><br>
  <p>Výhody:</p>
      <div class="row">
      		<div class="col-lg-6 litem">
        		<div class="nmbrdiv" data-line="✪"></div>
           		<h2 style="color: #222;">Pravidelná práca.</h2>
       		</div>
        	<div class="col-lg-6 litem">
          		<div class="nmbrdiv" data-line="✪"></div>
           		<h2 style="color: #222;">Nárok na platenú dovolenku.</h2>
       		</div>
 	  </div>
      <div class="row">
     		<div class="col-lg-6 litem">
        		<div class="nmbrdiv" data-line="✪"></div>
            	<h2 style="color: #222;">Ste súčasťou sociálneho systému v krajine, kde máte uzatvorený pracovný pomer.</h2>
        	</div>
        	<div class="col-lg-6 litem">
       			<div class="nmbrdiv" data-line="✪"></div>
            	<h2 style="color: #222;">Právo na rovnaké výhody sociálneho zabezpečenia ako miestni zamestnanci.</h2>
       		</div>
      </div>
      <div class="row">
      		<div class="col-lg-6 litem">
      			<div class="nmbrdiv" data-line="✪"></div>
        		<h2 style="color: #222;">Odpracované roky sa Vám započítavajú do dôchodku.</h2>
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
	          if($("h1.title").text() === "Proč my?"){
	              $(".fix").css({"background":"#9d0b0f",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#9d0b0f"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "Otázky"){
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