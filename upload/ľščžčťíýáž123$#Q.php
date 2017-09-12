<?php
 
 $targetfolder = "up/";
 
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $targetfolderb = str_replace(str_split(' ,'), '_', $targetfolder);

 $targetfolderc = iconv('Windows-1252', 'ASCII//TRANSLIT//IGNORE', $targetfolderb);
 
if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolderc))
 
 {
 	$emailbody =  'MENO: '.$_POST['meno']."\n"
	.'http://brickstone.design/s/upload/'.$targetfolderc."\n";
	
	mail('182.dude@gmail.com', 'Form with files', $emailbody ,'Content-Type: text/html; charset=UTF-8');
	header("Location:http://www.google.sk");
	  
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
 ?>