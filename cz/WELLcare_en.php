<!DOCTYPE html>
<!--SK-->
<html lang="sk">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Pečovatelství</title>
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
		<h1 class="title">Pečovatelství</h1>
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
		<h1 class="hide">Pečovatelství</h1>
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
							<a href="#one">Proč my?</a>
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
							<a href="#four">Požadavky</a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="item-d">
							<a href="#five">Reference</a>
						</div>
					</div>
									<div class="col-lg-1"></div>

				</div>
			</div>
		</div>
		<div class="container intro-text">
			<h2 class="text-center">Jste empatická a trpělivá? Pomáhat druhým Vás naplňuje a uspokojuje? Pokud jste odpověděli na obě předchozí otázky ano, potom je práce pečovatelky tou správnou volbou pro Vás. Ať už dáváte přednost péči o seniory, děti nebo domácnost, my Vám pomůžeme.</h2>
		</div>
	</section>
	<section id="one">
		<div class="green one" style="background: rgb(107, 40, 92);">
			<div class="container">
				<h1>Proč my?</h1>
				
				<div class="container">
					<!-- flaticons -->
					<div class="row icons">
						<div class="col-md-4">
							<i class="fa fa-thumbs-up fa-5x"></i>
							<h3 class="text-center">Žádné zprostředkovatelské nebo registrační poplatky </h3>
						</div>
						<div class="col-md-4">
						    <i class="fa fa-user-circle-o fa-5x"></i>
							<h3 class="text-center">Individuální přístup</h3>
						</div>
						<div class="col-md-4">
							<i class="fa fa-money fa-5x"></i>
							<h3 class="text-center">Motivujíci platové ohodnocení</h3>
						</div>
					</div>
					<div class="article-finish"></div>
					<div class="row icons">
							<div class="col-md-4">
							<i class="fa fa-car fa-5x"></i>
							<h3 class="text-center">Pohodlná doprava od dveří ke dveřím</h3>

						</div>
						<div class="col-md-4">
						    <i class="fa fa-cutlery fa-5x"></i>
							<h3 class="text-center">Ubytování a strava zdarma</h3>
						</div>
						<div class="col-md-4">
							<i class="fa fa-phone-square fa-5x"></i>
							<h3 class="text-center">24-hodinová zákaznická linka v případě nouze</h3>
						</div>
					</div>
					<div class="article-finish"></div>
					<p style="text-align: center">Připojte se do týmu našich nadšených pečovatelek a přesvědčte se o kvalitě našich služeb a lidském přístupu, který nás řadí mezi TOP personální společnosti na evropském trhu v oblasti zprostředkování příležitosti pro výkon práce nebo služeb.</p>
					
					
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
						<p class="nmbrlist">Obdržíte popis nabídky práce nebo služby s informacemi o klientovi spolu s podmínkami. V případě, že projevíte o nabídku zájem, Váš profil zašleme klientovi.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="5."></div>
						<h2 style="color: #222;">Souhlas klienta</h2>
						<p class="nmbrlist">Klient se po obdržení Vašeho profilu maximálně do sedmi dní vyjádří, zda si vybral právě Vás. Pokud ano, vybavíme potřebnou administrativu a v průběhu nejbližších dní vycestujete. Pokud ne, proces se nekončí a hledáme dál.</p>
					</div>
					<div class="col-lg-6 litem">
						<div class="nmbrdiv" data-line="6."></div>
						<h2 style="color: #222;">Vycestování</h2>
						<p class="nmbrlist">Zabezpečíme Vám pohodlnou dopravu přímo z Vašeho domova ke klientovi.</p>
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
					<a class="cstm-acor" data-id="1">Kolik mě to bude stát?</a><br>
					<a class="cstm-acor" data-id="2">Je znalost cizího jazyka nezbytná?</a><br>
					<a class="cstm-acor" data-id="3">Musím mít absolvovaný pečovatelský kurz?</a><br>
					<a class="cstm-acor" data-id="4">Jaký je měsíční výdělek?</a><br>
					<a class="cstm-acor" data-id="5">Máte nabídky práce nebo služeb i pro muže?</a><br>
					<a class="cstm-acor" data-id="6">Jak dlouhé jsou turnusy?</a><br>
					<a class="cstm-acor" data-id="7">Jakou formou budu pracovat?</a><br>
					<a class="cstm-acor" data-id="8">Jak mohu zvýšit své šance na rychlé umístění?</a><br>
				</div>
				<div class="bubbleinfo bubble-right pull-right">
					<div class="q0 answ">
						<p>Klikněte na otázku, na kterou chcete znát odpověď.</p>
					</div>
					<div class="q1 answ">
						<p>Nic, u nás neplatíte žádné zprostředkovatelské ani registrační poplatky. Nabízíme Vám bezplatné využití našich služeb.</p>
					</div>
					<div class="q2 answ">
						<p>Ano, je potřeba, aby jste jazyk země, do které chcete vycestovat, ovládali alespoň na základní úrovni. Dobrá znalost cizího jazyka může být velkou výhodou pro rychlé umístění a také pro lepší platové ohodnocení.</p>
					</div>
					<div class="q3 answ">
						<p>Ne, akreditovaný certifikát z pečovatelského kurzu je výhodou, ne však podmínkou, tak jako i zkušenosti s pečováním, které, pokud máte, je potřebné podložit referencemi.</p>
					</div>
					<div class="q4 answ">
						<p>Výška Vašeho platu závisí od místa výkonu práce nebo služby, Vašich jazykových znalostí, zkušeností a samozřejmě i od zdravotního stavu pečované osoby, a tedy i od celkové náročnosti pozice.</p>
					</div>
					<div class="q5 answ">
						<p>Ano, máme nabídky i pro muže, jen čekací doba na umístění může být delší.</p>
					</div>
					<div class="q6 answ">
						<p>1-3 měsíce je obvyklá délka turnusů, ale zavisí to od konkrétní nabídky a individulních požadavcích klienta.</p>
					</div>
					<div class="q7 answ">
						<p>Druh zaměstnání závisí od konkrétní nabídky a také od krajiny, kam chcete vycestovat. Bližší informace naleznete v části <a href="#four">Požadavky.</a></p>
					</div>
					<div class="q8 answ">
						<p>Dobrá znalost požadovaného cizího jazyka, nekuřáctví i řidičský průkaz jsou velkou výhodou při výběru kandidáta pro klienty.</p>
					</div>
				</div>
			</div>
			</div>
			<div class="article-finish"></div>
			<div class="container">
				<h2 class="text-center" style="color: white;">Máte jinou otázku?
				Kontaktujte nás na +421 473 211 276</h2>
			</div>
			<div class="article-finish"></div>
			<img src="img/call.jpeg" alt="img" class="decoration">
	</section>
	</div>
	<section id="four">
		<h1 class="p">Požadavky</h1><!-- AJAX LOADER -->
		<div class="container">
		<p>Pokud máte zájem o výkon práce nebo služeb v oblasti pečování, je potřebné splňovat určité požadavky. Pro více informací, prosím, vyberte:</p>
			<div class="row country-sel">
				<div class="col-lg-6">
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
				<div class="col-lg-6">
					<select class="myselect" id="to" name="to">
						<option disabled selected value="zero">
							Kam chcete jít:
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
		<h1 class="p">Reference</h1><!-- AJAX LOADER -->
		<div class="container">
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"S agenturou Slowiss spolupracuju od července 2014 a s jejich službami a profesionálním přístupem jsem nadmíru spokojená. Konzultantky jsou nám k dispozici 24 hodin denně, ať už se jedná o problémy a nebo si jen tak promluvit, když nám je smutno za domovem. Díky agentuře Slowiss jsem poznala jedno z nejkrásnějších míst Evropy, Lucern, jako i skvělé lidi, které bych za jiných okolností nepotkala. Samozřejmě tím v první řadě myslím zlatou seniorku, její milující rodinu a mnoho přátelských místních lidí. Ještě chci vyslovit "Merci" agentuře Slowiss za jejich profesionalitu, lidský přístup, ochotu pomoct a podržení v těžkých chvílích. Děkuji Vám. Přeji mnoho úspěchů, ať se Vám daří a ať jste stále tak milí, ochotní a napomocní."</p>
		  <p class="text-right"><strong>- Barbora Remperová, pečovatelka</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/remperova1.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/remperova1photo.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/remperova2photo.jpg" alt="img" style="width:100%"></div>
		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"Jmenuji se Ivona Sedajová a pracuji jako pečovatelka ve Švýcarsku. Tuto práci výkonávám už páty rok. Byla jsem i v Rakousku, kde jsem také odpracovala nějaký čas jako pečovatelka. Určitě mi dáte za pravdu, že v této práci máme i úsměvné příběhy z pečování, co jsme zažily a dal by se o tom napsat bestseller, kdyby každá z nás přidala nějaký příběh. Ráda bych však napsala pár vět o agentuře Slowiss. Pracovnice v agentuře jsou velmi vstřícné a nápomocné. Vždy, když jsem něco potřebovala a nebo vznikl nějaký problém, byly velmi ochotné vše vyřešit k mojí spokojenosti. Svým známým bych agenturu Slowiss určitě ráda doporučila."</p>
		  <p class="text-right"><strong>- Ivona Sedajová, pečovatelka</strong></p>
		</blockquote>
		<div class="row">
			<div class="col-md-4"><img src="../main_img/fotkasedajova.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/fotkaasedajova.jpg" alt="img" style="width:100%"></div>
			<div class="col-md-4"><img src="../main_img/pribeh1.jpg" alt="img" style="width:100%"></div>
		</div>
		<div class="article-finish"></div>
		
		<blockquote class="blockquote purple">
		  <p class="text-left">"Díky agentuře Slowiss jsem si našla práci ve Švýcarsku a byla jsem velmi spokojená. Pracovat tři měsíce je dlouhá doba a člověk potřebuje nějakou spřízněnou duši, tak jsem tedy požádala agenturu o kontakt na někoho, kdo pracuje poblíž. Dali mi kontakt na jednu paní. Začaly jsme si psát a nakonec se z nás staly velmi dobré přítelkyně. Zažily jsme spolu krásné chvíle a vzájemně jsme si pomáhaly. Jsem nadmíru spokojená. Manažerky v agentuře mi pomohly, kdykoliv jsem něco potřebovala. Na rozdíl od jiných agentur jsou k zastižení 24 hodin denně a záleží jim nejen na spokojenosti rodin, ale i nás pečovatelek."</p>
		  <p class="text-right"><strong>- Dana Gronková, pečovatelka</strong></p>
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
	          if($("h1.title").text() === "Proč my?"){
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