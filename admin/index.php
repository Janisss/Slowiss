<!doctype html>
<html lang="sk">
<head>
<meta charset="UTF-8">
<!-- <link href="../en/css/bootstrap.css" rel="stylesheet" type="text/css"> -->
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css">
<link href="../bs_template.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="icon" href="../favicon-96x96.png">
<link rel="apple-touch-icon-precomposed" href="../apple-icon-180x180.png">
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea',plugins:'paste code', toolbar: 'undo | redo | code', height : 350, block_formats:'Heading 1=h1;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Preformatted=pre'});</script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Administration - SLOWISS</title>
</head>
<body>
<div class="container-fluid">
<div class="container admin-table">
	<h1>Slowiss - administration</h1><br>
	<a href="http://www.slowiss.eu/sk/offers_en.php">ZOBRAZIŤ ONLINE PONUKY</a><br><br>
	<!-- Trigger the modal with a button -->
	
	<div class="container">
 <form action="#" method="post" class="form-offer">
        	<div><span>Číslo pracovnej ponuky:</span><input type="text" name="offernmbr" placeholder="N666"></div>
        	<div><span>Krajina:</span><input type="text" name="offercountry" placeholder="Nemecko" value="Švajčiarsko"></div>
        	<div><span>Pozícia:</span><select name="offerposition">
        	  <option value="&lt;i class=&quot;fa fa-handshake-o&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; Opatrovanie">Opatrovanie</option>
        	  <option value="&lt;i class=&quot;fa fa-user-md&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; Sestrička">Sestrička</option>
        	  <option value="&lt;i class=&quot;fa fa-globe&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt; Iné">Iné</option>
        </select></div>
        	<div><span>Popis:</span><span class="alert-danger">Nekopírovať text! Vypísať!!!</span><textarea name="offerdesc"></textarea></div>
        	<div><span>Plat:</span><input type="text" name="offersalary" placeholder="2'100 CHF/mesiac Netto"></div>
        	<div><span>Turnus:</span><input type="text" name="offerturnus" placeholder="2 mesiace"></div>
        	<div><span>Nástup:</span><input type="date" name="offerdate" placeholder="10.02.2017" class="datepicker"></div>
        	<div><span>Lokalita:</span>
        	<select name="offerpic">
			  <option value="aargau">Aargau</option>
        	  <option value="bazilej">Bazilej</option>
        	  <option value="bern">Bern</option>
        	  <option value="chur">Chur</option>
        	  <option value="freiburg">freiburg</option>
        	  <option value="glarus">glarus</option>
        	  <option value="herisau">herisau</option>
        	  <option value="jura">jura</option>
        	  <option value="liestal">liestal</option>
        	  <option value="luzern">luzern</option>
        	  <option value="neuchatel">neuchatel</option>
        	  <option value="nidwalden">nidwalden</option>
        	  <option value="obwalden">obwalden</option>
        	  <option value="schaffhausen">schaffhausen</option>
        	  <option value="schwyz">schwyz</option>
        	  <option value="solothurn">solothurn</option>
        	  <option value="stgallen">stgallen</option>
        	  <option value="thurgau">thurgau</option>
        	  <option value="ticino">ticino</option>
        	  <option value="uri">uri</option>
        	  <option value="vaud">vaud</option>
        	  <option value="vallis">wallis</option>
        	  <option value="zeneva">zeneva</option>
        	  <option value="zug">zug</option>
        	  <option value="zurich">zurich</option>
        	  
   	    </select></div>
        	<div>Može byť fajčiar?<select name="offersmoke" id="offersmoke">
        	  <option value="none">Áno</option>
        	  <option value="block">Nie!</option>
        	</select></div>
        	<div>Potrebuje vodičský preukaz?<select name="offerdrive" id="offerdrive">
          	  <option value="none">Nie</option>
        	  <option value="block">Áno!</option>
   			</select></div>
   			<div>Horúca ponuka?<select name="hot" id="hot">
        	  <option value="">Nie</option>
        	  <option value=" hot">Áno!</option>
   			</select></div>
<?php
	 
	 require  'medoo.php';
 
$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'slowiss_db123',
    'server' => 'mysql57.websupport.sk',
    'username' => 'slowiss_db123',
    'password' => 'Passw0rd',
	'port' => 3311,
]);
	 
		if(isset($_POST["odoslat"])){
		$mnmbr = $_POST["offernmbr"];	
		$mcountry = $_POST["offercountry"];	
		$mposition = $_POST["offerposition"];	
		$mdesc = $_POST["offerdesc"];	
		$msalary = $_POST["offersalary"];	
		$mturnus = $_POST["offerturnus"];
		$mdate = $_POST["offerdate"];
		$mimg = $_POST["offerpic"];
		$msmoke = $_POST["offersmoke"];
		$mdrive = $_POST["offerdrive"];
		$hot = $_POST["hot"];
		$database->insert("slowiss_offers", [
			"NR" => "$mnmbr",
			"COUNTRY" => "$mcountry",
			"POSITION" => "$mposition",
			"DESCRIPTION" => "$mdesc",
			"SALARY" => "$msalary",
			"TURNUS" => "$mturnus",
			"DATE" => "$mdate",
			"IMG" => "$mimg",
			"SMOKE" => "$msmoke",
			"DRIVE" => "$mdrive",
			"HOT" => "$hot"
		]);
		header("Refresh:0");
	};
	  ?>
        <input type="submit" name="odoslat" value="Save" class="btn btn-success" style="width: 100px;">
        </form>
</div>
<hr><hr>
<!-- form end -->
	
 
<br>
	<div class="row">
		<div class="col-lg-1"><p>NR</p></div>
		<div class="col-lg-2"><p>POSITION</p></div>
		<div class="col-lg-7"><p>SHORT DESC</p></div>
		<div class="col-lg-2"><p>START DATE</p></div>
	</div>
	<hr>
	
<?php	
	
$offers = $database->select("slowiss_offers", ["NR","POSITION","DESCRIPTION","DATE"]);
	
foreach($offers as $data){
	$nr = $data["NR"];
	$position = $data["POSITION"];
	$desc = $data["DESCRIPTION"];
	$start = $data["DATE"];
	echo "<div class='row far'><div class='col-lg-1'><p>".$nr.".</p></div><div class='col-lg-2'><p>".$position."</p></div><div class='col-lg-7'><p class='limit'>".$desc."</p></div><div class='col-lg-2'><p>".$start."</p></div></div>";
}	
?>
<div class="pull-right">
<form action="#" method="post">
<span>Select number to delete offer: </span>
	<select name="deletenr" style="width: 100px;font-size: 1.2em;border: 1px solid #eee;">
	  <?php
		$nmbrs = $database->select("slowiss_offers", ["NR"]);

		foreach($nmbrs as $data){
			$predelnumber = $data["NR"];
			echo "<option value='".$predelnumber."'>".$predelnumber."</option>";
		}
		if(isset($_POST["dltbut"])){
			$deletenumber = $_POST["deletenr"];
			$database->delete("slowiss_offers", [
			"AND" => [
				"NR" => "$deletenumber"
			]
			]);
			header("Refresh:0");
		}
	  ?>
	</select>
	<input type="submit" name="dltbut" class="btn btn-danger" value="DELETE" style="width: 100px;">
</form>
</div>

</div>
</div>

<hr>

        
        
<script src="js/jquery-1.11.3.min.js"></script>
<script src="../en/js/bootstrap-3.3.7.js"></script>
<script src="https://use.typekit.net/whv1coi.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
	<script>
		 $('.datepicker').datepicker({
			 dateFormat: "dd-mm-yyyy"
		 });
	</script>
</body>
</html>