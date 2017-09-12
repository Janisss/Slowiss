<?php
 
 $target_dir = "up/";
 
 $target_file = $target_dir . basename( $_FILES['u-file']['name']) ;

 $targetfolderb = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $targetfolder);

 $targetfolderc = str_replace(str_split(' ,?'), '_', $targetfolderb);



if(move_uploaded_file($_FILES['u-file']['tmp_name'], $targetfolderc))
 
 {
 	$emailbody =  'MENO: '.$_POST['en-name']."\n"
	.'http://slowiss.sk/en/'.$targetfolderc."\n"
	.'<center><img src="http://slowiss.sk/slowiss.svg" width="300"></center>'."<hr>"
	.'<span style="color:Brown">Meno: </span>'.$_POST['u-person']."<br>"
	.'<span style="color:Brown">Email: </span>'.$_POST['u-email']."<br>"
	.'<span style="color:Brown">Tel: </span>'.$_POST['u-tel']."<br>"
	.'<span style="color:Brown">Záujem o pozíciu: </span>'.$_POST['u-position']."<br>"
	.'<span style="color:Brown">Kde chcete pracovať: </span>'.$_POST['u-work']."<br>"
	.'<span style="color:Brown">Správa: </span>'.$_POST['u-message']."<br>"
	.'<span style="color:Brown">Súbor: </span>'.$_POST['u-file']."<hr>"."<br><br><br>"
	.'<span style="color:Gray">PHP mail-generator by Brickstone.design. If you find any problem please report at info@brickstone.design</span>';
	
	mail('182.dude@gmail.com', 'Slowiss Formulár', $emailbody ,'Content-Type: text/html; charset=UTF-8', '-f admin@slowiss.sk');
	header("Location:http://www.google.sk");
	  
 }
 
 else {
 
 echo "Problem uploading file";
 echo $targetfolderb;
 echo $targetfolderc;
 
 }
 
 ?>