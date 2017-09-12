<?php
if(isset($_POST['sumbit-footer'])) {
	$emailbody = 
	 '<center><img src="http://slowiss.sk/slowiss.svg" width="300"></center>'."<hr>"
	.'<span style="color:Brown">Name: </span>'.$_POST['en-name']."<br>"
	.'<span style="color:Brown">Email: </span>'.$_POST['en-email']."<br>"
	.'<span style="color:Brown">Tel: </span>'.$_POST['en-tel']."<br>"
	.'<span style="color:Brown">Text: </span>'.$_POST['en-message']."<hr>"."<br><br><br>"
	.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report at info@brickstone.design</span>';
		
	mail('yco.soltes@gmail.com', '-> Slowiss Footer Formular', $emailbody ,'Content-Type: text/html; charset=UTF-8' ,'-f admin@slowiss.eu');
	header("Location:./mail_success.php");
}
?>