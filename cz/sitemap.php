<style>
.sitemap a {
  position: relative;
  color: white !important;
  text-decoration: none !important;
}
.sitemap a:hover {
  color: white;
  text-decoration: none;
}
.sitemap a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: white;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}
.sitemap a:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}
	li.sitemap:first-child a{
		margin-left: -20px !important;
	}
</style>

<div class="container sitemap">
	<div class="row">
		<div class="col-xs-4"><h3>Mapa stránky</h3></div>
		<div class="col-xs-4"></div>
		<div class="col-xs-4"></div>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<ul>
				<li><i class="fa fa-home pull-left" aria-hidden="true"></i>Domů</li>
				<li><a href="./index.php#onas">O nás</a></li>
			    <li><a data-toggle="modal" href="#" data-target="#myModal">Kontakt</a></li>
			</ul>
		</div>
		<div class="col-xs-4">
			<ul>
				<li><i class="fa fa-search pull-left" aria-hidden="true"></i>Uchazeči</li>
				<li><a href="./WELLcare_en.php">Slowiss - Pečovatelství</a></li>
				<li><a href="./WELLmed_en.php">Slowiss - Zdravotnictví</a></li>
				<li><a href="./WELLpro_en.php">Slowiss - Jiné odvětví</a></li>
			</ul>
		</div>
		<div class="col-xs-4">
			<ul>
				<li><i class="fa fa-handshake-o pull-left" aria-hidden="true"></i>Zaměstnavatelé</li>
				<li><a href="./sprostredkovanie_care.php">Slowiss - Pečovatelství</a></li>
				<li><a href="./sprostredkovanie_med.php">Slowiss - Zdravotnictví</a></li>
				<li><a href="./sprostredkovanie_other.php">Slowiss - Jiné odvětví</a></li>
			</ul>
		</div>
	</div>
		<h3 style="text-align: center;">+421 473 211 276</h3>
		<p>Všechna práva vyhrazena Slowiss Slovakia s.r.o. | <a href="impressum.php" target="_blank">Impressum</a> | <a href="http://brickstone.design/sk/g-index.html"  target="_blank">Webdesign od Brickstone Design s.r.o</a></p><br>
</div>