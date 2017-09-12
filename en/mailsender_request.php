<?php
if(isset($_POST['z-submit'])) {
	$emailbody = 
	 '<center><img src="http://slowiss.sk/slowiss.svg" width="300"></center>'."<hr>"
	.'<span style="color:Brown">Kontaktná osoba: </span>'.$_POST['z-person']."<br>"
	.'<span style="color:Brown">Názov spoločnosti: </span>'.$_POST['z-title']."<br>"	
	.'<span style="color:Brown">Email: </span>'.$_POST['z-email']."<br>"
	.'<span style="color:Brown">Tel: </span>'.$_POST['z-tel']."<br>"
	.'<span style="color:Brown">Hľadám: </span>'.$_POST['z-find']."<br>"
	.'<span style="color:Brown">Správa: </span>'.$_POST['z-message']."<hr>"."<br><br><br>"
	.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report at info@brickstone.design</span>';
		
	mail('yco.soltes@gmail.com', '-> Slowiss Request Formular', $emailbody ,'Content-Type: text/html; charset=UTF-8' ,'-f admin@slowiss.sk');
	header("Location:./mail_success.php");
}
?>