<?php
require_once("conecta.php");

function listarTodosUsuario($conexao, $inicio, $registros) {
	$usuarios = array();
	$query = "SELECT * FROM contato LIMIT $inicio, $registros";
	$resultado = mysqli_query($conexao, $query);
	while($usuario = mysqli_fetch_assoc($resultado)){
        array_push($usuarios,$usuario);
    }
    return $usuarios;
}

function insereUsuario($conexao, $nome, $idade, $sexo, $dataCaptacao, $localDoacao, $responsavel, $grauParentesco, $telefone, $tec) {
	$nome = mysqli_real_escape_string($conexao,$nome);
	$idade = mysqli_real_escape_string($conexao, $idade);
	$sexo = mysqli_real_escape_string($conexao,$sexo);
	$dataCaptacao = mysqli_real_escape_string($conexao,$dataCaptacao);
	$localDoacao = mysqli_real_escape_string($conexao, $localDoacao);
	$responsavel = mysqli_real_escape_string($conexao, $responsavel);
	$grauParentesco = mysqli_real_escape_string($conexao, $grauParentesco);
	$telefone = mysqli_real_escape_string($conexao, $telefone);
	$tec = mysqli_real_escape_string($conexao, $tec);
	$query = "INSERT INTO contato (nome, idade, sexo, dataCaptacao, localDoacao, responsavel, grauParentesco, telefone,tec) VALUES ('{$nome}','{$idade}','{$sexo}', '{$dataCaptacao}', '{$localDoacao}', '{$responsavel}', '{$grauParentesco}', {$telefone}, '{$tec}')";
	
	return mysqli_query($conexao, $query);
}

function alteraUsuario($conexao, $nome, $idade, $sexo, $dataCaptacao, $localDoacao, $responsavel, $grauParentesco, $telefone, $tec, $contato_id) {
	$nome = mysqli_real_escape_string($conexao,$nome);
	$idade = mysqli_real_escape_string($conexao, $idade);
	$sexo = mysqli_real_escape_string($conexao,$sexo);
	$dataCaptacao = mysqli_real_escape_string($conexao,$dataCaptacao);
	$localDoacao = mysqli_real_escape_string($conexao, $localDoacao);
	$responsavel = mysqli_real_escape_string($conexao, $responsavel);
	$grauParentesco = mysqli_real_escape_string($conexao, $grauParentesco);
	$telefone = mysqli_real_escape_string($conexao, $telefone);
	$tec = mysqli_real_escape_string($conexao, $tec);
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "UPDATE contato SET nome = '{$nome}', idade = {$idade}, sexo = '{$sexo}', dataCaptacao = '{$dataCaptacao}', localDoacao = '{$localDoacao}', responsavel = '{$responsavel}', grauParentesco = '{$grauParentesco}', telefone= {$telefone}, tec = '{$tec}' WHERE id = '{$contato_id}'";
	
	return mysqli_query($conexao, $query);
}

function buscarUsuario($conexao, $nome, $idade) {
	$nome = mysqli_real_escape_string($conexao, $nome);
	$idade = mysqli_real_escape_string($conexao, $idade);
	$query = "SELECT * FROM contato WHERE nome like '%{$nome}%' AND idade ='{$idade}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	
	return $usuario;
}

function buscarUsuarioIndividual($conexao, $contato_id) {
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "SELECT * FROM contato WHERE id ='{$contato_id}'";
	$resultado = mysqli_query($conexao, $query);
	
	return $usuario = mysqli_fetch_assoc($resultado);
	
}

function removeUsuario($conexao, $id) {
	$query = "DELETE FROM contato WHERE id = {$id}";
	
	return mysqli_query($conexao, $query);
}

function contaTotalDoadores($conexao){
	$query = "SELECT * FROM contato";
	$resultado = mysqli_query($conexao, $query);
	return $total = mysqli_num_rows($resultado);
}