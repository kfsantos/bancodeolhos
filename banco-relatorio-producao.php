<?php
require_once("conecta.php");

function listarTodosRelatoriosProducao($conexao) {
	$relatorios = array();
	$query = "SELECT globosOcularesObtidos, globosOcularesDescartados, corneasPreservadas, corneasDescartadas, opticas, esclerasPreservadas, esclerasDescartadas, esclerasDistribuidas, tectonica, motivoDescarte, causaMorte, contato_id, nome, idade  FROM relatorioproducao JOIN contato on contato.id = relatorioproducao.contato_id LIMIT 20";
	$resultado = mysqli_query($conexao, $query);
	while($relatorio = mysqli_fetch_assoc($resultado)) {
		array_push($relatorios, $relatorio);
	}
	return $relatorios;
}

function insereRelatorioProducao($conexao, $globosOcularesObtidos, $globosOcularesDescartados, $corneasPreservadas, $corneasDescartadas, $opticas, $esclerasPreservadas, $esclerasDescartadas, $esclerasDistribuidas, $tectonica, $motivoDescarte, $causaMorte, $contato_id) {
	$globosOcularesObtidos = mysqli_real_escape_string($conexao,$globosOcularesObtidos);
	$globosOcularesDescartados = mysqli_real_escape_string($conexao, $globosOcularesDescartados);
	$corneasPreservadas = mysqli_real_escape_string($conexao,$corneasPreservadas);
	$corneasDescartadas = mysqli_real_escape_string($conexao,$corneasDescartadas);
	$opticas = mysqli_real_escape_string($conexao, $opticas);
	$esclerasPreservadas = mysqli_real_escape_string($conexao, $esclerasPreservadas);
	$esclerasDescartadas = mysqli_real_escape_string($conexao, $esclerasDescartadas);
	$esclerasDistribuidas = mysqli_escape_string($conexao, $esclerasDistribuidas);
	$tectonica = mysqli_escape_string($conexao, $tectonica);
	$motivoDescarte = mysqli_escape_string($conexao, $motivoDescarte);
	$causaMorte = mysqli_escape_string($conexao, $causaMorte);
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "INSERT INTO relatorioproducao (globosOcularesObtidos, globosOcularesDescartados, corneasPreservadas, corneasDescartadas, opticas, esclerasPreservadas, esclerasDescartadas, esclerasDistribuidas, tectonica, motivoDescarte, causaMorte, contato_id) values ('{$globosOcularesObtidos}', '{$globosOcularesDescartados}', '{$corneasPreservadas}', '{$corneasDescartadas}', '{$opticas}', '{$esclerasPreservadas}', '{$esclerasDescartadas}', '{$esclerasDistribuidas}', '{$tectonica}', '{$motivoDescarte}', '{$causaMorte}', '{$contato_id}')";
	
	return mysqli_query($conexao, $query);
}

function alteraRelatorioProducao($conexao, $globosOcularesObtidos, $globosOcularesDescartados, $corneasPreservadas, $corneasDescartadas, $opticas, $esclerasPreservadas, $esclerasDescartadas, $esclerasDistribuidas, $tectonica, $motivoDescarte, $causaMorte, $contato_id) {	
	$globosOcularesObtidos = mysqli_real_escape_string($conexao,$globosOcularesObtidos);
	$globosOcularesDescartados = mysqli_real_escape_string($conexao, $globosOcularesDescartados);
	$corneasPreservadas = mysqli_real_escape_string($conexao,$corneasPreservadas);
	$corneasDescartadas = mysqli_real_escape_string($conexao,$corneasDescartadas);
	$opticas = mysqli_real_escape_string($conexao, $opticas);
	$esclerasPreservadas = mysqli_real_escape_string($conexao, $esclerasPreservadas);
	$esclerasDescartadas = mysqli_real_escape_string($conexao, $esclerasDescartadas);
	$esclerasDistribuidas = mysqli_escape_string($conexao, $esclerasDistribuidas);
	$tectonica = mysqli_escape_string($conexao, $tectonica);
	$motivoDescarte = mysqli_escape_string($conexao, $motivoDescarte);
	$causaMorte = mysqli_escape_string($conexao, $causaMorte);
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "UPDATE relatorioproducao SET globosOcularesObtidos = '{$globosOcularesObtidos}', globosOcularesDescartados = '{$globosOcularesDescartados}', corneasPreservadas = '{$corneasPreservadas}', corneasDescartadas = '{$corneasDescartadas}', opticas = '{$opticas}', esclerasPreservadas = '{$esclerasPreservadas}', esclerasDescartadas = '{$esclerasDescartadas}', esclerasDistribuidas = '{$esclerasDistribuidas}', tectonica = '{$tectonica}', motivoDescarte = '{$motivoDescarte}', causaMorte = '{$causaMorte}' WHERE id = '{$contato_id}'";
	var_dump($tectonica);
	return mysqli_query($conexao, $query);
}

function buscaRelatorioProducao($conexao, $contato_id) {
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "SELECT * FROM relatorioproducao WHERE id = '{$contato_id}'";
	$resultado = mysqli_query($conexao, $query);

	return $relatorioProducao = mysqli_fetch_assoc($resultado);
	
}

function removerRelatorioProducao($conexao, $contato_id) {
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "UPDATE relatorioproducao SET globosOcularesObtidos = '', globosOcularesDescartados = '', corneasPreservadas = '', corneasDescartadas = '', opticas = '', esclerasPreservadas = '', esclerasDescartadas = '', esclerasDistribuidas = '', tectonica = '', motivoDescarte = '', causaMorte = '' WHERE id = '{$contato_id}'";
	
	return mysqli_query($conexao, $query);
}
