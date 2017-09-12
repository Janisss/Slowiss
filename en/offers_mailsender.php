<?php
if(isset($_POST['offer_submit'])) {
	$emailbody = 
	 '<img src="http://www.brickstone.design/s/slowiss.svg" width="300">'."<hr>"
	.'<span style="color:Brown">'.$_POST['ponuka']."</span><hr>"
	.'<span style="color:Brown">Meno: </span>'.$_POST['meno']."<hr>"
	.'<span style="color:Brown">Email: </span>'.$_POST['email']."<hr>"
	.'<span style="color:Brown">Telefon: </span>'.$_POST['tel']."<hr>"
	.'<span style="color:Brown">Správa: </span>'.$_POST['sprava']."<hr>"."<br><br>"
	.'<span style="color:Gray">Mail by Janis from Brickstone<img src="http://brickstone.design/images/BRICKSTONEdesign.png" width="200">';
		
	mail('janis.catlos@slowiss.org', '-> Slowiss INZERÁTY', $emailbody ,'Content-Type: text/html; charset=UTF-8');
	header("Location:./offers_en.php");
}
?>