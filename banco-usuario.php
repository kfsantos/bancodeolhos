<?php
require_once("conecta.php");
function buscarUsuario($conexao, $email, $senha) {
	$email = mysqli_real_escape_string($conexao, $email);
	$senhaMD5 = md5($senha);
	$query = "SELECT * FROM usuario WHERE email ='{$email}' AND senha ='{$senhaMD5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	
	return $usuario;
}


