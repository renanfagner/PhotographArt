<?php

session_start();

include_once("conexao.php");



$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);



if(empty($nome)){
        $_SESSION['msg'] = "Preenchimento obrigatório dos campos.";
        header("Location: cadastro.php");
    }

$result_usuario = "INSERT INTO usuarios(nome, email, criacao) VALUES ('$nome', '$email', NOW())";

$resultado_usuario = mysqli_query($conn, $result_usuario);



if(mysqli_insert_id($conn)){

	$_SESSION['cadastrado'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";

	header("Location: cadastro.php");

}else{

	$_SESSION['cadastrado'] = "<p style='color:red;'>Usuário não cadastrado!</p>";

	header("Location: cadastro.php");

}

	//mysqli_close($conn);