<?php
$host = "localhost";
$user = "NinoJP";
$pass = "3RtsEpuR21!@";
$dbname = "dtudo_bd";
$port = "3306";
try{
	//Conexão com a PORTA
	//$conecta = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
	//Conexão sem a PORTA
	$conecta = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
	//echo "Conexão com o DB realizada com sucesso!";
}catch(PDOException $erro){
	//echo "Erro: Conexão com o DB NÃO realizada com sucesso! Erro gerado " . $erro->getMessage();
}
?>