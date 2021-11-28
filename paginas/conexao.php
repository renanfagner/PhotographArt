<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbnames = "login";
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if($conn){
		echo "Conectado com sucesso.";
		//die("Erro de conexão com o Banco de Dados: \n Error: " . mysql_connect());
	}
	
