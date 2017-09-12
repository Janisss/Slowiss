<!--SK--VERZIA-->
<!DOCTYPE html>
<html lang="sk">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Slowiss - Ponuky</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../bs_template.css" rel="stylesheet" type="text/css">
	<link href="./css/1024.css" rel="stylesheet" type="text/css">
</head>
<body>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!--header-->
	<!--LOADING-->
	<div class="loading"><img alt="" class="loadimg" src="loading.svg"></div>
	<!--LOADING END-->
	
	<div class="container-fluid fix">
		<h1 class="title">Ponuky</h1>
		<div class="phone">
			<div class="small-call">
				<i aria-hidden="true" class="fa fa-phone fa-3x"></i>
			</div>
			<div class="big-call">
				<i aria-hidden="true" class="fa fa-phone fa-3x" data-target="#myModal" data-toggle="modal"></i>
			</div>
		</div><!--NAVIGATION-->
		<div class="hauptmenu">
			<a href="./index.php#sempod"><i aria-hidden="true" class="fa fa-home fa-3x home"></i></a>
		</div><!--NAVIGATION END-->
	</div><!--header end-->
	<section id="top">
		<h1 class="hide">Ponuky</h1>
		<div class="container-fluid first-content">
		
			<div id="slider" class="nivoSlider">

<img src="slider-home/e.jpg" data-thumb="slider-home/e.jpg" alt=""/>

			</div>

		</div>

		<div class="container intro-text">
			<h2 class="text-center">Tu nájdete všetky aktuálne ponuky prác alebo služieb</h2>
		</div>
	</section>
	<div class="container">
	
<?php	
	require  '../admin/medoo.php';
 
$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'slowiss_db123',
    'server' => 'mysql57.websupport.sk',
    'username' => 'slowiss_db123',
    'password' => 'Passw0rd',
	'port' => 3311,
]);	
	
$offers = $database->select("slowiss_offers", ["NR","COUNTRY","POSITION","DESCRIPTION","SALARY","TURNUS","DATE","IMG","SMOKE","DRIVE","HOT"]);
	
foreach(array_reverse($offers) as $data){
	$nr = $data["NR"];
	$country = $data["COUNTRY"];
	$position = $data["POSITION"];
	$desc = $data["DESCRIPTION"];
	$salary = $data["SALARY"];
	$turnus = $data["TURNUS"];
	$date = $data["DATE"];
	$img = $data["IMG"];
	$smoke = $data["SMOKE"];
	$drive = $data["DRIVE"];
	$hot = $data["HOT"];
	echo "<div class='row offer".$hot."' style='height: auto;' id='$nr'><div class='col-xs-3 location' style='background-image: url(../kanton/".$img.".jpg);'><span class='loc-span'>Ponuka číslo ".$nr."</span></div><div class='col-xs-2 leftinfo' style='border-right:1px solid #eee'><span>Pozícia</span><p class='offerdata'>".$position."</p><br class='smallshow'><span>Krajina</span><p class='offerdata'>".$country."</p><hr><img src='../admin/icons/driving.png' alt='Vodičský preukaz' class='offer-icon' style='display:".$drive.";'><span style='display:".$drive.";font-size:14px;'>Vodičský</span><img src='../admin/icons/nosmoking.png' alt='Nefajčiar' class='offer-icon' style='display:".$smoke.";'><br class='smallhide'><br class='smallhide'><a href='#' class='viac' onclick='return false'>Viac info</a><br><a href='#mamzaujem' class='zaujem' onclick='return false'>Mám záujem</a></div><div class='col-xs-5 text' style='border-right:1px solid #eee'>".$desc."</div><br><div class='col-xs-2'><span>Nástup</span><p class='start-date'>".$date."</p><span>Plat</span><p>".$salary."</p><span>Turnus</span><p>".$turnus."</p></div></div>";
}	
?>
			
	</div>
	<div class="article-finish"></div>
	<div class="container myred">
	<h2>Máte záujem? Kontaktujte nás...</h2>
		<form action="offers_mailsender.php" method="post" name="mamzaujem" class="offer-form">
			<input type="text" id="ponuka" name="ponuka" value="Číslo ponuky:">
			<input type="hidden" id="datum-ponuky" name="datum">
			<input type="text" placeholder="Meno a priezvisko" name="meno">
			<input type="text" placeholder="E-mail" name="email">
			<input type="text" placeholder="Telefónne číslo" name="tel">
			<textarea name="sprava" placeholder="Správa"></textarea>
			<input type="submit" value="Odoslať" name="offer_submit">
		</form>
		<br>
	</div>
	<div class="article-finish"></div>
	<script src="js/jquery-1.11.3.min.js">
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
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" type="button">&times;</button>
					<h4 class="modal-title">Kontaktné informácie</h4>
				</div>
				<div class="modal-body">
					<p>Nejaké otázky?</p>
					<h2 style="text-align: center;"> +421 473 211 276</h2><br>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Zavrieť</button>
				</div>
			</div>
		</div>
	</div>
	<!-- modal ends -->
	<footer>
	<?php
		include "sitemap.php";
	?>
	</footer>
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

	</script>
</body>
</html>