<!DOCTYPE html>
<html lang="en">
<!---------S-K----V-E-R-S-I-O-N-------->
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Iné odvetvia</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
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
		<h1 class="title">Iné odvetvia</h1>
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
			<h1 style="font-size: 40px; color: rgba(157, 11, 15, 1); font-weight: bold;">Uchádzači</h1>
			<a href="./WELLcare_en.php">Opatrovanie</a>
			<a href="./WELLmed_en.php">Zdravotníctvo</a>
			<a href="./WELLpro_en.php">Iné odvetvia</a>
			<h1 style="font-size: 40px; color: rgba(157, 11, 15, 1); font-weight: bold;">Zamestnávatelia</h1><br>
			<a href="./sprostredkovanie_care.php">Opatrovanie</a>
			<a href="./sprostredkovanie_med.php">Zdravotníctvo</a>
			<a href="./sprostredkovanie_other.php">Iné odvetvia</a>
		  </div>
		</div>
	<!-- KONIEC MOBIL MENU-->	
	</div><!--header end-->
	<section id="top">
		<h1 class="hide">Iné odvetvia</h1>
		<div class="container-fluid first-content">
			<ul data-limit-x="40" data-limit-y="20" id="scene">
				<li class="layer" data-depth="0.00"><img alt="CARE" class="decoimg" src="scene1/1.jpg"></li>
				<li class="layer" data-depth="0.25"><img alt="CARE" class="decoimg" src="scene1/2.png"></li>
				<li class="layer" data-depth="0.25"><img alt="CARE" class="decoimg" src="scene1/3.png"></li>
			</ul>
		</div>
		<div class="menu-jano" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="item-a">
							<a href="#one">Prečo my?</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-b">
							<a href="#two">Služby</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-c">
							<a href="#three">Spolupráca</a>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item-d">
							<a href="#four">Referencie</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Hľadáte stály alebo dočasný personál? Máte v určitých obdobiach zvýšený dopyt po zamestnancoch, ktorý potrebujete pokryť? Hľadáte kvalitných ľudí, ktorí sú odborníkmi vo svojej oblasti? Sme tu pre Vás s komplexnou agendou vo všetkých personálnych otázkach.</h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background: #222;">
			<div class="container">
				<h1>Prečo my?</h1>
				<div class="container">
					<!-- flaticons -->
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-thumbs-up fa-5x"></i>
							<h3 class="text-center">Prvotriedna starostlivosť</h3>
						</div>
						<div class="col-md-4">
						    <i class="fa fa-eye fa-5x"></i>
							<h3 class="text-center">Švajčiarska precíznosť</h3>
						</div>
						<div class="col-md-4">
							<i class="fa fa-commenting fa-5x"></i>
							<h3 class="text-center">Inovatívny spôsob náboru</h3>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
							<div class="col-md-4">
							<i class="fa fa-group fa-5x"></i>
							<h3 class="text-center">Skúsený a oddaný personál</h3>

						</div>
						<div class="col-md-4">
						    <i class="fa fa-refresh fa-5x"></i>
							<h3 class="text-center">Garancia výmeny pre prípad nespokojnosti</h3>
						</div>
						<div class="col-md-4">
							<i class="fa fa-smile-o fa-5x"></i>
							<h3 class="text-center">Bez námahy</h3>
						</div>
					</div>
					<div class="article-finish"></div>
					<p style="text-align: center">Kvalita a spoľahlivosť nami ponúkaných služieb nás zaraďuje medzi TOP personálne spoločnosti na európskom trhu. Vďaka voľnému pohybu služieb v Európskej únii máte k dispozícii personál z celej Európy. Pridajte sa k našim spokojným klientom a obchodným partnerom a oceníte jednoduchosť celého procesu, minimum námahy a právnu istotu, ktorú spoluprácou s nami získate. </p>
					
					
					<div class="article-finish"></div>
				</div>
			</div>
		</div>
	</section>
	<img src="img/AdobeStock_133532736.jpeg" alt="IMG" style="width: 100%;">
	<div class="green two">
		<section id="two">
			<div class="container">
			<h1>Služby</h1>
			<div class="container">
			<p style="text-align: center">Spoločnosť Slowiss má centrá náboru personálu po celej strednej a východnej Európe. Poskytneme Vám komplexné služby v oblasti sprostredkovania práce alebo služby a zabezpečenia zdravotníckeho personálu. Počas výberového procesu dbáme predovšetkým na: </p>
			
			
			<div class="row">
					<div class="col-lg-6 litem">
					<img src="../main_img/AdobeStock_99592662.jpeg" alt="IMG" style="width: 100%;">
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="1."></div>
						<h2 style="color: #222;"><br>Osobnostné predpoklady</h2>
						<div class="nmbrdiv" data-line="2."></div>
						<h2 style="color: #222;"><br>Kvalifikačné predpoklady</h2>
						<div class="nmbrdiv" data-line="3."></div>
						<h2 style="color: #222;"><br>Predchádzajúce pôsobenie</h2>
						<div class="nmbrdiv" data-line="4."></div>
						<h2 style="color: #222;"><br>Jazykové znalosti</h2>
					</div>
				</div>
			<div class="article-finish">
			</div>
			</div>
		</section>
	</div>
	
	
	<div class="green three" style="background: #222">
		<section id="three">
		<div class ="container">
			<h1 style="color:white;">Spolupráca</h1>
			<div class="container">
			<p style="text-align: center">Slowiss Vám ponúka viacero možností spolupráce v závislosti od Vašich potrieb a požiadaviek.</p>
			<div class="article-finish"></div>
			
			
		<div class="btn-group btn-group-justified" role="group">
		  <div class="btn-group" role="group">
			<button type="button" class="btn btn-default country one">Sprostredkovanie</button>
		  </div>
		  <div class="btn-group" role="group">
			<button type="button" class="btn btn-default country two">Try and Hire</button>
		  </div>
		  <div class="btn-group" role="group">
			<button type="button" class="btn btn-default country three">Dočasné pridelenie</button>
		  </div>
		</div>
		
		<br>
		
		<div class="country-type-one">
			<div class="letter">
				<button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>

		  		<p style="text-align: center; color: #222;">Ak sa rozhodnete využiť službu sprostredkovania, vyhľadáme pre Vás vhodných kandidátov, ktorí budú spĺňať Vami indivinduálne určené požiadavky, z ktorími môžete následne uzavrieť pracovný pomer. </p><hr><br>
		  		<h3 style="text-align: center; color: #222;">Výhody sprostredkovania</h3><br>
		 
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Úspora času a nákladov</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Optimalizácia výberového procesu</h2>
			    </div>
			  </div>
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Profesionálny a individuálny prístup</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Kvalifikovaný výber personálu</h2>
			    </div>
			    </div>
			    <div class="row">
			    <div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Náhrada zamestnanca v prípade jeho odchodu</h2>
			    </div>
			    </div>
			</div>
		</div>
		
		
		<div class="country-type-two">
		  <div class="letter">
		  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
		  	 
		  		<p style="text-align: center; color: #222;">Ak si chcete overiť znalosti a schopnosti zamestnancov predtým, než s nimi uzavriete pracovný pomer, táto služba je určená práce Vám. Poskytuje Vám ešte väčšiu flexibilitu a elimináciu rizika výberu nevhodného kandidáta.</p><hr><br>
		 		<h3 style="text-align: center; color: #222;">Výhody try and hire</h3><br>
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Možnosť výberu dĺžky skúšobnej doby</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Možnosť prevziať už zapracovaného zamestnanca</h2>
			    </div>
			  </div>
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Personálna a mzdová agenda</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Garancia výmeny v prípade nespokojnosti</h2>
			    </div>
			    </div>
			</div>
		</div>
		
		
		<div class="country-type-three">
		  <div class="letter">
		  <button class="close-info pull-right"><span class="glyphicon glyphicon-remove" style="color: #dadada"></span></button>
	  			
		  		<p style="text-align: center; color: #222;">Dočasné pridelenie, tzv. personálny leasing je služba, ktorá Vám ponúka možnosť prenajať si zamestnancov v požadovanom čase a počte v prípadoch, kedy pre Vás nie je výhodné uzavrieť s nimi pracovný pomer.</p><hr><br>
		  		<h3 style="text-align: center; color: #222;">Výhody dočasného pridelenia</h3><br>
		 
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Flexibilita</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Zníženie nákladov</h2>
			    </div>
			  </div>
			  <div class="row">
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Kvalifikovaný výber personálu</h2>
				</div>
				<div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Personálna a mzdová agenda</h2>
			    </div>
			    </div>
			    <div class="row">
			    <div class="col-lg-6 litem">
					<div class="nmbrdiv" data-line="✪"></div>
					<h2 style="color: #222;">Garancia výmeny v prípade nespokojnosti</h2>
			    </div>
			    </div>
			</div>
		</div>
	  </div>
	</div>
	<div class="article-finish"></div>
	</section>
	<img src="img/AdobeStock_101044040.jpeg" alt="IMG" style="width: 100%;">
	</div>
	
	
	<section id="four">
		<h1 class="p">Referencie</h1><!-- AJAX LOADER -->
		<div class="container">
		
		<blockquote class="blockquote blackk">
		  <p class="text-left">“Slowiss je naším partnerom od leta 2014. Poskytujú mimoriadne zákaznícke služby a rýchlu reakciu na naše požiadavky. Opatrovateľky zo Slowiss sú vždy milé a spoľahlivé s dostatočnými skúsenosťami. Sme presvedčení, že sme si vybrali tú správnu personálnu agentúru, po boku ktorej je naša práca omnoho  jednoduchšia.”</p>
		  <p class="text-right"><strong>- Dominik Borner, vedúci HR oddelenia v Prime Human Resource, Švajčiarsko, WWW.PRIMECARE.CH</strong></p>
		</blockquote>
		<div class="row"><!--Photos-->

		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote blackk">
		  <p class="text-left">“Chceli by sme sa vám poďakovať za bezchybnú spoluprácu. Sme veľmi spokojní s vašimi službami a určite by sme spoluprácu s Vami odporučili aj ďalej. Tešíme sa vášmu priateľskému prístupu a rýchlosti celého procesu. Váš profesionálny tím zákazníckych služieb mnoho krát rýchlo vyriešil krízovú situáciu.”</p>
		  <p class="text-right"><strong>- Zdenka Ulicna, riaditeľka Betreut, a.s., Slovensko</strong></p>
		</blockquote>
		<div class="row"><!--Photos-->

		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote blackk">
		  <p class="text-left">“So Slowiss agentúrou sa nám podarilo nadviazať veľmi úspešnú a dlhodobú spoluprácu. Aj na základe ich pozitívnych a priateľských zákazníckych služieb môžeme túto agentúru rozhodne odporúčať. Počas celej spolupráce sú pre nás dôležitá najmä spoľahlivosť a rýchlosť služby.”</p>
		  <p class="text-right"><strong>- Erwin Schlipf, Konateľ, Nemecko, WWW.PFLEGEVERMITTLUNG-BADE-WUERTTEMBERG.DE</strong></p>
		</blockquote>
		<div class="row"><!--Photos-->
		
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
					<h4 class="modal-title" style="color:#222; text-align: center;">Kontaktné informácie</h4>
				</div>
				<div class="modal-body">
					<p>Nejaké otázky? Kontaktujte nás na:</p>
					<h2 style="text-align: center;">+421 473 211 276</h2><br>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Zavrieť</button>
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
	          if($("h1.title").text() === "Prečo my?"){
	              $(".fix").css({"background":"#222",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#222"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "Spolupráca"){
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