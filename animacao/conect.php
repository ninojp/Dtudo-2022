<?php
 try {
	 $conecta = new PDO('mysql:host=localhost;dbname=anime_bd;charset=utf8','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
	 $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		} catch (PDOException $e){
			echo 'Erro na conexão:'.$e->getMessage().'<br>';
		echo 'Código do erro:'.$e->getCode();
 		} ?>