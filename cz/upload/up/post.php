<?php
if(isset($_POST['submit'])) {
	$emailbody = 
	'<span style="color:Brown">Meno: </span>'.$_POST['meno']."<br>"
	.'<span style="color:Brown">Telefon: </span>'.$_POST['cislo']."<br>"
	.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report at info@brickstone.design</span>';
		
	mail('yco.soltes@gmail.com', '-> Kontakt FLORIANOV DVOR WEB', $emailbody ,'Content-Type: text/html; charset=UTF-8');
	header("Location:http://google.sk");
}
?>