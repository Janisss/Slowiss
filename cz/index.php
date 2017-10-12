<!DOCTYPE html>
<!--S-K-----V-E-R-S-I-O-N-->
<html lang="sk">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - HOME</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
	<link href=".css/1024.css" rel="stylesheet" type="text/css">
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
		<div class="mobil-menu">
			<script src="https://www.w3schools.com/lib/w3.js"></script>
			<script src="mobil-menu.js"></script>
			<div id="mobil-menu" w3-include-html="mobil-menu.html"></div> 
			<script>w3.includeHTML();</script>
		</div>
		<!--MOBIL MENU END-->
	</div><!--header end-->
	<section id="top">
		<h1 class="hide">Home</h1>
		<div class="container-fluid first-content">
		
			<div id="slider" class="nivoSlider">
<img src="slider-home/a.jpg" data-thumb="slider-home/a.jpg" alt="" title="<h2>Výpomoc v domácnosti</h2><p>opatrovnice dětí, chůva</p>"/>
<img src="slider-home/b.jpg" data-thumb="slider-home/b.jpg" alt="" title="<h2>Číšníci</h2><p>servírka, číšník, kuchař</p>"/>
<img src="slider-home/c.jpg" data-thumb="slider-home/c.jpg" alt="" title="<h2>Hlídaní dětí</h2><p>pečovatelka, chůva</p>"/>
<img src="slider-home/d.jpg" data-thumb="slider-home/d.jpg" alt="" title="<h2>Lékaři</h2><p>doktor, sestra, porodní asistentka</p>"/>
<img src="slider-home/e.jpg" data-thumb="slider-home/e.jpg" alt="" title="<h2>Pečovatelství</h2><p>pečovatel, domácí péče</p>"/>
<img src="slider-home/f.jpg" data-thumb="slider-home/f.jpg" alt="" title="<h2>Konštrukční práce</h2><p>stavební dělník
</p>"/>
<img src="slider-home/h.jpg" data-thumb="slider-home/h.jpg" alt="" title="<h2>Řidiči</h2><p>řidič kamionu, řidič autobusu</p>"/>
			</div>   
	
		</div>
		<div class="menu-jano" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="item-a">
							<a href="#one">Uchazeči</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-b">
							<a href="#two">Zaměstnavatelé</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="item-c">
							<a href="#three">O nás</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<p>Vítejte na stránce Slowiss, Vaší personální agentury. Slowiss tvoří skupina zapálených náborových pracovníků, kteří přinášejí širokou škálu talentů a pracovních řešení. Věříme v nalezení správných lidí pro správné pozice. Či už jste uchazeči se zájmem o příležitost nebo společnost hledající zaměstnance, pomůžeme Vám. </p>
		</div>
	</section>
	<!-- scroll here --><a name="fromcare"></a>
	<section id="one">
		<div class="container">
		<h1><a id="uchadzac" style="position: absolute; margin-top: -20px;"></a>Uchazeči</h1>
		<br>
		<p>Nabízíme Vám množství příležitostí pro výkon práce nebo služeb v různých oblastech. Můžete tu nalézt nejen volné pozice, ale i cenné rady, které Vám mohou pomoci najít Vaši vysněnou práci. Vyberte si prosím pozici, o kterou máte zájem a dozvíte se více.</p><br>
					<div class="row">
						<div class="col-md-3">
								<img src="../main_img/AdobeStock_47255856_WM.jpeg" class="borderone" alt="IMG" style="width: 100%;">
						</div>
						<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: #6B285C; font-size: 5rem;">Pečovatelství</h2>
								</div>
									<p style="text-align: justify;" class="panel-body">Jste pečovatelka, chůva nebo pomocnice v domácnosti, která hledá příležitost pro výkon práce nebo služeb v zahraničí? Toto je správná volba pro Vás.</p>
								<!--tlacitka-->
								  <ul class="menu-x pull-right">
								  	  <li><a href="./WELLcare_en.php">Víc informací</a></li>
									  <li><a data-toggle="modal" data-target="#offerss">Nabídky</a></li>
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Ucházet se</a></li>
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
						    <h2 class="panel-title" style="color: rgba(57, 122, 218, 1); font-size: 5rem;"><a name="sempod"></a>Zdravotnictví</h2>
								</div>	
									<p style="text-align: justify;" class="panel-body">Pokud jste zdravotní sestra nebo lékař a hledáte příležitost uplatnit se v zahraničí, přičemž máte ukončené vzdělání v oblasti zdravotnictví, toto je to správné místo pro Vás.</p>
								  <!--tlacitka-->
								  <ul class="menu-x b pull-right">
								  	  <li><a href="./WELLmed_en.php">Víc informací</a></li>
									  <li><a data-toggle="modal" data-target="#offerss">Nabídky</a></li>
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Ucházet se</a></li>
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
						    <h2 class="panel-title" style="color: rgba(157, 11, 15, 1); font-size: 5rem;">Jiné odvětví</h2>
						  </div>	
									<p style="text-align: justify;" class="panel-body">V případě, že jste profesionální řidič, servírka, kuchař, a pod. a hledáte příležitost pro výkon práce nebo služeb, také máme možnosti pro Vás.</p>
								<!--tlacitka-->
								  <ul class="menu-x c pull-right">
								  	  <li><a href="./WELLpro_en.php">Víc informací</a></li>
									  <li><a data-toggle="modal" data-target="#offerss">Nabídky</a></li>
									  <li><a data-toggle="modal" data-target="#Modaluchadzac">Ucházet se</a></li>
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
				<h1><a id="zamestnavatel" style="position: absolute; margin-top: -20px;"></a>Zaměstnavatelé </h1>
					<br>
					<p>Spolupráce se Slowiss Vám přináší kvalitu a flexibilitu nabízených služeb. Během předchozích let jsme dokázali, že jsme spolehlivým a stabilním partnerem mnoha slovenským i zahraničním firem. Prosím vyberte si z níže uvedených profesí pro výběr požadovaných zaměstnanců. Náš profesionální tým náborových pracovníků Vám najde kvalifikovaný personál v souladě s Vašimi požadavkami.</p><br>
					<div class="row">
						<div class="col-md-3">
								<img src="../main_img/AdobeStock_122549282_WM.jpeg" alt="IMG" style="width: 100%;">
						</div>
						<div class="col-md-9">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h2 class="panel-title" style="color: #6B285C; font-size: 5rem;">Pečovatelství</h2>
								</div>
									<p style="text-align: justify;" class="panel-body">Pokud hledáte zodpovědnou a kompetentní osobu, která se postará o člena Vaší rodiny nebo klienta, popřípadě o jejich domácnost, pomůžeme Vám.</p>
							     <!--tlacitka-->
								  <ul class="menu-x pull-right">
								  	  <li><a href="./sprostredkovanie_care.php">Víc informací</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Žádost</a></li>
									  
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
						    <h2 class="panel-title" style="color: rgba(57, 122, 218, 1); font-size: 5rem;">Zdravotnictví</h2>
								</div>	
									<p style="text-align: justify;" class="panel-body">Pokud potřebujete všeobecnou nebo specializovanou zdravotní sestru, porodní asistentku nebo lékaře, kteří jsou oddáni své práci, vyhledáme pro Vás vynikající personál.</p>
							     <!--tlacitka-->
								  <ul class="menu-x b pull-right">
								  	  <li><a href="./sprostredkovanie_med.php">Víc informací</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Žádost</a></li>
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
						    <h2 class="panel-title" style="color: rgba(157, 11, 15, 1); font-size: 5rem;">Jiné odvětví</h2>
								</div>	
									<p style="text-align: justify;" class="panel-body">Ať už hledáte dočasný nebo stálý personál, na částečný nebo plný úvazek v jiné oblasti, jako je pečovatelství nebo zdravotnictví, my Vám pomůžeme se všemi personálními záležitostmi.</p>
							     <!--tlacitka-->
								  <ul class="menu-x c pull-right">
								  	  <li><a href="./sprostredkovanie_other.php">Víc informací</a></li>
									  <li><a data-toggle="modal" data-target="#Modalziadost">Žádost</a></li>
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
			<h1 style="color: #222"><a id="onas" style="position: absolute; margin-top: -40px;"></a>O nás</h1>
			<div class="container">
						<p style="color: #222">Společnost Slowiss vznikla začátkem roku 2013, kdy ji založili bratři Martiovci a od té doby je rychlo rostoucí společností. Zpočátku soustředila všechnu svoji pozornost na oblast pečovatelství a zdravotnictví. Poptávka po zdravotnických pracovnících neustále rostla, proto Slowiss začala navazovat spolupráci s dalšími společnostmi v Evropě, čímž vytvořila nové příležitosti pro svoje uchazeče i klienty.</p><p style="color: #222"> Postupně narůstala poptávka i po pracovnících z jiných odvětví, a tak Slowiss začala zaměstnávat personál i v oblasti logistiky, gastronomie, hoteliérstva, stavebnictva a pod. Slowiss spojuje kvalitní společnosti s kvalitním personálem v evropských krajinách. Lidskost, spolehlivost, inovace a kvalita jsou jejími hlavními hodnotami.</p>
						
				<div class="article-finish"></div>		
				<div class="row" style="text-align: center">
					<div class="col-lg-4"><i class="fa fa-star fa-5x" style="color: black"></i></div>
					<div class="col-lg-4"><i class="fa fa-heart fa-5x" style="color: black"></i></div>
					<div class="col-lg-4"><i class="fa fa-eur fa-5x" style="color: black;"></i></div>
				</div>
				<div class="row">
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem;">Na trhu od roku 2013</p></div>
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem">Tisíce spokojených klientů po celé Evropě</p></div>
					<div class="col-lg-4"><p style="color: #222; font-size:2.5rem">Pracovní příležitosti v různých oblastech</p></div>
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
        			alert("Povinné pole: Souhlas se zpracováním údajů!");
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

<!--ZIADOST PRE ZAMESTNAVATELA-->
<div id="Modalziadost" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#222; text-align: center;">Žádost</h4>
      </div>
      <div class="modal-body">
        <form action="mailsender_request.php" method="post" style="font-size:2em">
        	<input placeholder="Kontaktní osoba:" type="text" name="z-person"> 
			<input placeholder="Název společnosti:" type="text" name="z-title">
			<input placeholder="E-mail:" type="text" name="z-email">  
			<input placeholder="Telefonní číslo:" type="text" name="z-tel"> 
			<input placeholder="Hledám:" type="text" name="z-find">
			<textarea placeholder="Zpráva:" name="z-message"></textarea>  
			<input value="Odeslat" type="submit" name="z-submit">
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zavřít</button>
      </div>
    </div>

  </div>
</div>
<!--KONIEC ZIADOSTI PRE ZAMESTNAVATELA-->
	
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
	<footer>
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
					<p>Nějaké otázky? Kontaktujte nás na:</p>
					<h2 style="text-align: center;">+421 473 211 276</h2><br>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Zavřít</button>
				</div>
			</div>
		</div>
	</div><!-- modal ends -->
	<!--modal na ziadosti-->	
	<div id="offerss" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="color:#222; text-align: center;">Nabídky</h4>
			</div>
			<div class="modal-body">
				<p>Ponuky jsou dostupné v jazyku: </p>
				<a href="../sk/offers_en.php"><img src="../mini_flags/sk.png" alt="SK"> slovensky</a>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
	</div>
	<!--KONIEC modal na ziadost-->
		
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
	          if($("h1.title").text() === "Search job"){
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