<?php
 
 $targetfolder = "up/";
 
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $targetfolderb = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $targetfolder);

 $targetfolderc = str_replace(str_split(' ,?'), '_', $targetfolderb);

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolderc))
 
 {
 	$emailbody =  'MENO: '.$_POST['en-name']."\n"
	.'http://slowiss.eu/en/'.$targetfolderc."\n";
	
	mail('182.dude@gmail.com', 'Slowiss Formulár', $emailbody ,'Content-Type: text/html; charset=UTF-8', '-f admin@slowiss.eu');
	header("Location:http://www.google.sk");
	  
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
 ?>