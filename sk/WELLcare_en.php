<!DOCTYPE html>
<!--SK-->
<html lang="sk">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Opatrovanie</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
	function MM_validateForm() { //v4.0
	  if (document.getElementById){
		var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
		for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
		  if (val) { nm=val.name; if ((val=val.value)!="") {
			if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
			  if (p<1 || p==(val.length-1)) errors+='- '+' zle zadaný e-mail!\n';
			} else if (test!='R') { num = parseFloat(val);
			  if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
			  if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
				min=test.substring(8,p); max=test.substring(p+1);
				if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
		  } } } else if (test.charAt(0) == 'R') errors += '- '+' zadajte e-mail!\n'; }
		} if (errors) alert('Nasledujúce pole je povinné:\n'+errors);
		document.MM_returnValue = (errors == '');
	} }
    </script>	
</head>
<body>
	<?php
		include "lang_sk.php";
	?>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--LOADING-->
	<div class="loading"><img alt="" class="loadimg" src="loading.svg"></div><!--LOADING END-->
	<!--header-->
	<div class="container-fluid fix">
		<h1 class="title">Opatrovanie</h1>
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
	</div><!--header end-->
	<!--UCHADZAT SA-->	
		<!--testovanie ci bol chceckbox zakliknuty. Ak nebol nepusti <form action=""....>-->
			<script>
			function testcheck(){
    			if (!jQuery("#checkbox").is(":checked")) {
        			alert("Povinné pole: Súhlas so spracovaním údajov!");
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
					<h4 class="modal-title" style="color:#222; text-align: center;">Uchádzať sa</h4>
				  </div>
				  <div class="modal-body">
					 <form action="mailsender_application.php" method="post" enctype="multipart/form-data" style="font-size:2em" onSubmit="MM_validateForm('u-email','','RisEmail');return document.MM_returnValue">
						<input placeholder="Meno a priezvisko:" type="text" name="u-person"> 
						<input name="u-email" type="text" id="u-email" placeholder="E-mail:">  
						<input placeholder="Telefónne číslo:" type="text" name="u-tel"> 
						<input placeholder="Záujem o pozíciu:" type="text" name="u-position">
						<input placeholder="Kde chcete pracovať:" type="text" name="u-work">
						<textarea placeholder="Poznámka:" name="u-message"></textarea><hr>
						<p style="text-align: left; font-size: .7em;">VLOŽTE SVOJ ŽIVOTOPIS</p>
						<input type="file" name="u-file"><hr>
						<div class="row">
							<div class="col-sm-1"><input name="u-checkbox" value="ano" id="checkbox" type="checkbox" style="display: block; margin: 18px 0px 18px 0px;"></div>
							<div class="col-sm-11"><a href="impressum.php" style="text-align: left; font-size: .7em; margin-left: -25px;">SÚHLASÍM SO SPRACOVANÍM OSBNÝCH ÚDAJOV</a></div>
						</div>
						<hr><br> 
						<input value="Odoslať" type="submit" name="u-submit" onClick="return testcheck()">
					</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
				  </div>
				</div>

			  </div>
			</div>
<!--KONIEC UCHADZAT SA-->
	<section id="top">
		<h1 class="hide">Opatrovanie</h1>
		<div class="container-fluid first-content">
			<ul data-limit-x="40" data-limit-y="20" id="scene">
				<li class="layer" data-depth="0.00"><img alt="CARE" class="decoimg" src="scene3/1.jpg"></li>
				<li class="layer" data-depth="0.25"><img alt="CARE" class="decoimg" src="scene3/2.png"></li>
			</ul>
		</div>
		<div class="menu-jano" id="sticker">
			<div class="container">
				<div class="row">
				<div class="col-lg-1"></div>
				
					<div class="col-lg-2">
						<div class="item-a">
							<a href="#one">Prečo my?</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-b">
							<a href="#two">Postup</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-c">
							<a href="#three">Otázky</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-d">
							<a href="#four">Požiadavky</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-d">
							<a href="#five">Referencie</a>
						</div>
					</div>
									<div class="col-lg-1"></div>

				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Ste empatická a trpezlivá? Pomáhať druhým vás napĺňa a uspokojuje? Ak ste odpovedali áno na obe predchádzajúce otázky, potom je práca opatrovateľky tou správnou voľbou pre Vás. Či už uprednostňujete starostlivosť o starších ľudí, o deti alebo o domácnosť, my Vám pomôžeme. </h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background: rgb(107, 40, 92);">
			<div class="container">
				<h1>Prečo my?</h1>
				
				<div class="container">
					<!-- flaticons -->
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-thumbs-up fa-5x"></i>
							<h3 class="text-center">Žiadne sprostredkovateľské alebo registračné poplatky</h3>
						</div>
						<div class="col-md-4">
						    <i class="fa fa-user-circle-o fa-5x"></i>
							<h3 class="text-center">Individuálny prístup</h3>
						</div>
						<div class="col-md-4">
							<i class="fa fa-money fa-5x"></i>
							<h3 class="text-center">Motivujúce platové ohodnotenie</h3>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
							<div class="col-md-4">
							<i class="fa fa-car fa-5x"></i>
							<h3 class="text-center">Pohodlná doprava od dverí k dverám</h3>

						</div>
						<div class="col-md-4">
						    <i class="fa fa-cutlery fa-5x"></i>
							<h3 class="text-center">Ubytovanie a strava zdarma</h3>
						</div>
						<div class="col-md-4">
							<i class="fa fa-phone-square fa-5x"></i>
							<h3 class="text-center"> 24-hodinová on-line zákaznícka linka v prípade núdze</h3>
						</div>
					</div>
					<div class="article-finish"></div>
					<p style="text-align: center">Pridajte sa do tímu našich nadšených opatrovateliek a presvedčte sa o kvalite našich služieb a ľudskom prístupe, ktoré nás zaraďujú medzi TOP personálne spoločnosti na európskom trhu v oblasti sprostredkovania práce alebo služieb.</p>
					
					
					<div class="article-finish"></div>
				</div>
			</div>
		</div>
		<img src="img/care.jpeg" alt="img" class="decoration">
	</section>
	<div class="green two">
		<section id="two">
			<div class="container">
				<h1>Postup</h1>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="1."></div>
						<h2 style="color: #222;">Formulár</h2>
						<p class="nmbrlist">Spravte prvý krok a vyplňte <a data-toggle="modal" style="cursor: pointer;" data-target="#Modaluchadzac">kontaktný formulár</a>, poprípade k nemu nahrajte svoj štrukturovaný životopis a my Vás budeme kontaktovať.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="2."></div>
						<h2 style="color: #222;">Telefonát</h2>
						<p class="nmbrlist">Po obdržaní kontaktného formulára Vám zatelefonujeme kvôli doplneniu potrebných údajov o Vás, ako aj prevereniu Vašich jazykových znalostí.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="3."></div>
						<h2 style="color: #222;">Sprostredkovateľská zmluva</h2>
						<p class="nmbrlist">Zmluva, ktorú Vám zašleme na podpis kvôli súhlasu so spracovaním osobných údajov pre účely sprostredkovania príležitosti pre výkon prác alebo služieb.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="4."></div>
						<h2 style="color: #222;">Ponuka</h2>
						<p class="nmbrlist">Obdržíte popis ponuky práce alebo služieb s informáciami o klientovi spolu s podmienkami. V prípade, že prejavíte o ponuku záujem, Váš profil zašleme klientovi.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="5."></div>
						<h2 style="color: #222;">Súhlas klienta</h2>
						<p class="nmbrlist">Klient sa po obdržaní Vášho profilu maximálne do siedmych dní vyjadrí, či si vybral práve Vás. Ak áno, vybavíme potrebnú administratívu a v priebehu najbližších dní vycestujete. Ak nie, proces sa nekončí a hľadáme ďalej.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="6."></div>
						<h2 style="color: #222;">Vycestovanie</h2>
						<p class="nmbrlist">Zabezpečíme Vám pohodlnú dopravu priamo z Vášho domova ku klientovi.</p>
					</div>
				</div>
			</div>
			<div class="article-finish"></div>
		</section>
	</div>
	<div class="green three">
		<section id="three">
		<div class="red-med">
			<h1 style="color:white;">Otázky</h1>
			<div class="container">
			
				<div class="bubbleinfo bubble-left">
					<a class="cstm-acor" data-id="1">Koľko ma to bude stáť?</a><br>
					<a class="cstm-acor" data-id="2">Je znalosť cudzieho jazyka nevyhnutná?</a><br>
					<a class="cstm-acor" data-id="3">Musím mať absolvovaný opatrovateľský kurz?</a><br>
					<a class="cstm-acor" data-id="4">Aký je mesačný zárobok?</a><br>
					<a class="cstm-acor" data-id="5">Máte ponuky prác alebo služieb aj pre mužov?</a><br>
					<a class="cstm-acor" data-id="6">Aké dlhé sú turnusy?</a><br>
					<a class="cstm-acor" data-id="7">Akou formou budem pracovať?</a><br>
					<a class="cstm-acor" data-id="8">Ako môžem zvýšiť svoje šance na rýchle umiestnenie?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Kliknite na otázku, ktorú chcete zodpovedať.</p>
					</div>
					<div class="q1 answ">
						<p>Nič, u nás neplatíte žiadne sprostredkovateľské ani registračné poplatky. Ponúkame Vám bezplatné využitie našich služieb. </p>
					</div>
					<div class="q2 answ">
						<p>Áno, je potrebné, aby ste jazyk krajiny, do ktorej chcete vycestovať, ovládali aspoň na základnej úrovni. Dobrá znalosť cudzieho jazyka môže byť veľkou výhodou pre rýchle umiestnenie a tiež pre lepšie platové ohodnotenie.</p>
					</div>
					<div class="q3 answ">
						<p>Nie, akreditovaný certifikát z opatrovateľského kurzu je výhodou, nie však podmienkou, tak ako aj skúsenosti s opatrovaním, ktoré, ak máte, je potrebné podložiť referenciami.</p>
					</div>
					<div class="q4 answ">
						<p>Výška Vášho platu závisí od miesta výkonu práce alebo služby, Vašich jazykových znalostí, skúseností a samozrejme aj od zdravotného stavu opatrovanej osoby, a teda aj od celkovej náročnosti jednotlivej pozície.</p>
					</div>
					<div class="q5 answ">
						<p>Áno, máme ponuky aj pre mužov, doba čakania na umiestnenie však môže byť dlhšia.</p>
					</div>
					<div class="q6 answ">
						<p>1-3 mesiace je zvyčajná dĺžka turnusov, avšak závisí od konkrétnej ponuky a individuálnych požiadaviek klienta.</p>
					</div>
					<div class="q7 answ">
						<p>Druh zamestnania závisí od konkrétnej ponuky a tiež od krajiny,  kam chcete vycestovať. Bližšie informácie nájdete v časti <a href="#four">Požiadavky.</a></p>
					</div>
					<div class="q8 answ">
						<p>Dobrá znalosť požadovaného cudzieho jazyka, nefajčenie ako aj vodičský preukaz sú veľkou výhodou pri výbere kandidáta klientom.</p>
					</div>
				</div>
			</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center" style="color: white;">Máte inú otázku?
				Kontaktujte nás na +421 473 211 276</h2>
			</div>
			<div class="article-finish"></div>
			<img src="img/call.jpeg" alt="img" class="decoration">
	</section>
	</div>
	<section id="four">
		<h1 class="p">Požiadavky</h1><!-- AJAX LOADER -->
		<div class="container">
		<p>Ak máte záujem o výkon prác alebo služieb v oblasti opatrovania, je potrebné spĺňať určité požiadavky. Pre viac informácií, prosím, vyberte:</p>
			<div class="row country-sel">
				<div class="col-lg-6">
					<select class="myselect" id="from" name="from">
						<option disabled selected value="zero">
							Odkiaľ ste:
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
				<div class="col-lg-6">
					<select class="myselect" id="to" name="to">
						<option disabled selected value="zero">
							Kam chcete ísť:
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
	</section>
	
	<section id="five">
		<h1 class="p">Referencie</h1><!-- AJAX LOADER -->
		<div class="container">
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"S agentúrou Slowiss spolupracujem od júla 2014 a s ich službami a profesionálnym prístupom som nadmieru spokojná. Konzultantky sú nám k dispozícii 24 hodín denne, či už sa jedná o problémy alebo sa len tak porozprávať, keď nám je smutno za domovom. Vďaka agentúre Slowiss som spoznala jedno z najkrajších miest Európy, Luzern, ako aj skvelých ľudí, ktorých by som za iných okolností nestretla. Samozrejme tým v prvom rade myslím zlatú babku, jej milujúcu rodinu a veľa priateľských miestnych ľudí. Ešte chcem vysloviť "Merci" agentúre Slowiss za ich profesionalitu, ľudský prístup, ochotu pomôcť a podržanie v tažkých chvíľach. Ďakujem Vám. Prajem veľa úspechov, nech sa Vám darí a nech ste stále také milé, ochotné a nápomocné."</p>
		  <p class="text-right"><strong>- Barbora Remperová, opatrovateľka</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/remperova1.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/remperova1photo.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/remperova2photo.jpg" alt="img" style="width:100%"></div>
		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"Volám sa Ivona Sedajová a pracujem ako opatrovateľka vo Švajčiarsku. Túto prácu vykonávam už piaty rok. Bola som aj v Rakúsku, kde som tiež odpracovala nejaký čas ako opatrovateľka. Určite mi dáte za pravdu, že v tejto práci máme aj úsmevné príbehy z opatrovania, čo sme zažili a dal by sa o tom napísať bestseller, keby každá z nás pridala nejaký príbeh. Rada by som však napísala pár viet o agentúre Slowiss. Pracovníčky v agentúre sú veľmi ústretové a nápomocné. Vždy, keď som niečo potrebovala alebo vznikol nejaký problém, boli veľmi ochotné všetko vyriešiť k mojej spokojnosti. Svojim známym by som agentúru Slowiss určite rada odporučila."</p>
		  <p class="text-right"><strong>- Ivona Sedajová, opatrovateľka</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/fotkasedajova.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/fotkaasedajova.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/pribeh1.jpg" alt="img" style="width:100%"></div>
		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote purple">
		  <p class="text-left">Vďaka agentúre Slowiss som si našla prácu vo Švajčiarsku a bola som veľmi spokojná. Nakoľko pracovať tri mesiace je dlhá doba a človek potrebuje nejakú spriaznenú dušu, požiadala som agentúru o kontakt na niekoho, kto pracuje blízko. Dali mi kontakt na istú pani. Začali sme si písať a nakoniec sa z nás stali veľmi dobré priateľky. Zažili sme spolu krásne chvíle a vzájomne sme si pomáhali. Som nadmieru spokojná. Manažérky v agentúre mi pomohli, kedykoľvek som niečo potrebovala. Na rozdiel od iných agentúr sú zastihnuteľní 24 hodín denne a zaleží im nielen na spokojnosti rodín, ale aj nás, opatrovateliek.</p>
		  <p class="text-right"><strong>- Dana Gronková, opatrovateľka</strong></p>
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
	          if($("h1.title").text() === "Prečo my?"){
	              $(".fix").css({"background":"#6B285C",
	                            "color":"white",
	                            "border-bottom":"1px solid white"});
	               $(".menua").addClass("cek");
	               $(".txt").css({"color":"#fff"});
	               $(".menu-jano").css({"background":"#6B285C"});
	               $(".menu-jano a").css({"color":"white"});
				   $(".hauptmenu i").css({"color":"white"});
	              }
	           else if($("h1.title").text() === "Otázky"){
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