<?php
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

function alert($msg){
	echo "<script type='text/javascript'>alert('$msg');</script>";
}
 
 $targetfolder = "up/";
 
 $targetfolder = $targetfolder . basename($_FILES['u-file']['name']) ;

 $targetfolderb = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $targetfolder);

 $targetfolderc = str_replace(str_split(' ,?'), '_', $targetfolderb);

 
if(move_uploaded_file($_FILES['u-file']['tmp_name'], $targetfolderc)){
		
 if(isset($_POST['u-submit'])){
	 
 	$emailbody =  
	 '<center><img src="http://slowiss.sk/slowiss.svg" width="300"></center>'."<hr>"
	.'<span style="color:Brown">Kontaktná osoba: </span>'.$_POST['u-person']."<br>"
	.'<span style="color:Brown">Email: </span>'.$_POST['u-email']."<br>"
	.'<span style="color:Brown">Tel: </span>'.$_POST['u-tel']."<br>"
	.'<span style="color:Brown">Záujem o pozíciu: </span>'.$_POST['u-position']."<br>"
	.'<span style="color:Brown">Kde chcete pracovať: </span>'.$_POST['u-work']."<br>"
	.'<span style="color:Brown">Správa: </span>'.$_POST['u-message']."<br>"
	.'<span style="color:Brown">Príloha: </span>'.'http://slowiss.sk/sk/'.$targetfolderc."\n"."<hr>"
	.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report info@brickstone.design</span>';
	
	mail('yco.soltes@gmail.com', 'Slowiss Application Form', $emailbody ,'Content-Type: text/html; charset=UTF-8','-f admin@slowiss.sk');
	header("Location:./mail_success.php");
	  
 }
}
elseif(isset($_POST['u-submit'])){
	 $emailbody =  
	 '<center><img src="http://slowiss.sk/slowiss.svg" width="300"></center>'."<hr>"
	.'<span style="color:Brown">Kontaktná osoba: </span>'.$_POST['u-person']."<br>"
	.'<span style="color:Brown">Email: </span>'.$_POST['u-email']."<br>"
	.'<span style="color:Brown">Tel: </span>'.$_POST['u-tel']."<br>"
	.'<span style="color:Brown">Záujem o pozíciu: </span>'.$_POST['u-position']."<br>"
	.'<span style="color:Brown">Kde chcete pracovať: </span>'.$_POST['u-work']."<br>"
	.'<span style="color:Brown">Správa: </span>'.$_POST['u-message']."<br><hr>"
	.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report info@brickstone.design</span>';
	
	mail('yco.soltes@gmail.com', 'Slowiss Application Form', $emailbody ,'Content-Type: text/html; charset=UTF-8','-f admin@slowiss.sk');
	header("Location:./mail_success.php"); 
 }
else{
	$msg = "Zle zadané pole!";
	alert($msg);
	}

 ?>