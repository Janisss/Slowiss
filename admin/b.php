<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	echo("php its working fuck you!");
	
	require  'medoo.php';
	
	$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'spb3cjna',
    'server' => 'mysql51.websupport.sk',
    'username' => 'spb3cjna',
    'password' => 'Janis182'
	]);
?>
<!-- 
$database = new medoo([
	'database_type' => 'mysql',
	'database_name' => 'slowiss_db1',
	'server' => 'mysql57.websupport.sk',
	'username' => 'slowiss_db1',
	'password' => 'ZBSQGFaQHi',
	'charset' => 'utf8'
]);
-->

</body>
</html>