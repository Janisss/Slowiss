<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Slowiss</title>
</head>

<body>
<?php
    // Initialize the language code variable
$lc = ""; 
    // Check to see that the global language server variable isset()
    // If it is set, we cut the first two characters from that string
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // Now we simply evaluate that variable to detect specific languages
if($lc == "sk"){
    header("location: sk/index.php");
    exit();
} else if($lc == "de"){
    header("location: en/index.php");
    exit();
} else if($lc == "en"){
    header("location: en/index.php");
    exit();
}
else{ // don't forget the default case if $lc is empty
    header("location: en/index.php");
    exit();
}
?>
</body>
</html>