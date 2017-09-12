<?php
 
 $targetfolder = "up/";
 
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $targetfolderb = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $targetfolder);

 $targetfolderc = str_replace(str_split(' ,?'), '_', $targetfolderb);

 
if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolderc))
 
 {
 	$emailbody =  'MENO: '.$_POST['en-name']."<br>"
 	.'EMAIL: '.$_POST['en-email']."<br>"
 	.'TEL: '.$_POST['en-tel']."<br>"
 	.'SPRAVA: '.$_POST['en-message']."<br>"
	.'http://brickstone.design/s/en/'.$targetfolderc."\n";
	
	mail('182.dude@gmail.com', 'Form with files', $emailbody ,'Content-Type: text/html; charset=UTF-8');
	header("Location:http://www.google.sk");
	  
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
 ?>