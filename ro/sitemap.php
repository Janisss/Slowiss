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
		position: realtive;
	}
</style>

<div class="container sitemap">
	<div class="row">
		<div class="col-xs-4">
			<ul>
				<li><i class="fa fa-home pull-left" aria-hidden="true"></i>Acasă</li>
				<li><a href="./index.php#onas">Despre noi</a></li>
			    <li><a data-toggle="modal" href="#" data-target="#myModal">Contact</a></li>
			</ul>
		</div>
		<div class="col-xs-4">
			<ul>
				<li><i class="fa fa-search pull-left" aria-hidden="true"></i>Candidați</li>
				<li><a href="./WELLcare_en.php">Slowiss - Îngrijiri medicale la domiciliu</a></li>
				<li><a href="./WELLmed_en.php">Slowiss - Medical</a></li>
				<li><a href="./WELLpro_en.php">Slowiss - Altele</a></li>
			</ul>
		</div>
		<div class="col-xs-4">
			<ul>
				<li><i class="fa fa-handshake-o pull-left" aria-hidden="true"></i>Angajatori</li>
				<li><a href="./sprostredkovanie_care.php">Slowiss - Îngrijiri medicale la domiciliu</a></li>
				<li><a href="./sprostredkovanie_med.php">Slowiss - Medical</a></li>
				<li><a href="./sprostredkovanie_other.php">Slowiss - Altele</a></li>
			</ul>
		</div>
	</div>

		<h3 style="text-align: center;">+40 771 711 064</h3>
		<p>Toate drepturile sunt rezervate Slowiss Slovakia s.r.o | <a href="impressum.php" target="_blank">Aviz juridic</a> | <a href="http://brickstone.design/sk/g-index.html" target="_blank">Web design de Brickstone Design s.r.o.</a></p><br>
</div>