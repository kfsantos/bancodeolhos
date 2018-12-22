<?php
require_once("conecta.php");

function listarTodosEnderecos($conexao) {
	$enderecos = array();
	$query = "SELECT logradouro, numeroCasa, bairro, cidade, contato_id,nome, idade FROM endereco JOIN contato on endereco.contato_id = contato.id LIMIT 20";
	$resultado = mysqli_query($conexao, $query);
	//var_dump($resultado);
	while($endereco = mysqli_fetch_assoc($resultado)) {
		array_push($enderecos, $endereco);
	}
	return $enderecos;
}

function insereEndereco($conexao, $logradouro, $numeroCasa, $bairro, $cidade, $contato_id) {
	$logradouro = mysqli_real_escape_string($conexao,$logradouro);
	$numeroCasa = mysqli_real_escape_string($conexao, $numeroCasa);
	$bairro = mysqli_real_escape_string($conexao,$bairro);
	$cidade = mysqli_real_escape_string($conexao,$cidade);
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "INSERT INTO endereco (logradouro, numeroCasa, bairro, cidade, contato_id) VALUES ('{$logradouro}','{$numeroCasa}','{$bairro}', '{$cidade}', '{$contato_id}')";
	
	return mysqli_query($conexao, $query);
}

function alteraEndereco($conexao, $logradouro, $numeroCasa, $bairro, $cidade, $contato_id) {
	$logradouro = mysqli_real_escape_string($conexao,$logradouro);
	$numeroCasa = mysqli_real_escape_string($conexao, $numeroCasa);
	$bairro = mysqli_real_escape_string($conexao,$bairro);
	$cidade = mysqli_real_escape_string($conexao,$cidade);
	$contato_id = mysqli_real_escape_string($conexao,$contato_id);
	$query = "UPDATE endereco SET logradouro = '{$logradouro}', numeroCasa = {$numeroCasa}, bairro = '{$bairro}', cidade = '{$cidade}'  WHERE contato_id = '{$contato_id}'";
	
	return mysqli_query($conexao, $query);
}

function buscarEndereco($conexao, $logradouro, $bairro) {
	$logradouro = mysqli_real_escape_string($conexao,$logradouro);
	$bairro = mysqli_real_escape_string($conexao,$bairro);
	$query = "SELECT * FROM endereco WHERE logradouro = '{$logradouro}' AND bairro = '{$bairro}'";
	$resultado = mysqli_query($conexao, $query);
	return $endereco = mysqli_fetch_assoc($resultado);
	
}

function buscarEnderecoContato($conexao, $contato_id) {
	$contato_id = mysqli_real_escape_string($conexao,$contato_id);
	$query = "SELECT * FROM endereco WHERE id = '{$contato_id}'";
	$resultado = mysqli_query($conexao, $query);
	return $endereco = mysqli_fetch_assoc($resultado);
	
}


function removerEndereco($conexao, $contato_id) {
	$contato_id = mysqli_real_escape_string($conexao,$contato_id);
	$query = "UPDATE endereco SET logradouro = '', numeroCasa = '', bairro = '', cidade = ''  WHERE id = '{$contato_id}'";

	return mysqli_query($conexao, $query);
}