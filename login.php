<?php 
require_once("conecta.php");
require_once("banco-usuario.php");
require_once("logica-usuario.php");

$usuario = buscarUsuario($conexao,$_POST["email"], $_POST["senha"]);
if($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha inválido.";
	header("Location: index.php");
} else {
	$_SESSION["success"] = "Usuario logado com sucesso.";
	logaUsuario($usuario["email"]);
	header("Location: index.php");
}

die();