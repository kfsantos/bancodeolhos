<?php
require_once("conecta.php");

function listarTodosRelatoriosDoadores($conexao) {
	$relatorios = array();
	$query = "SELECT nome,idade, dataLocalEnucl, dataDistribuicaoDescarte, classificacaoCornea, receptor, dataTx, equipeTx, localTx, tipoTx, contato_id FROM relatoriodoador JOIN contato on contato.id = relatoriodoador.contato_id LIMIT 20";
	$resultado = mysqli_query($conexao,$query);
	while($relatorio = mysqli_fetch_assoc($resultado)) {
		array_push($relatorios, $relatorio);
	}
	return $relatorios;
}

function insereRelatorioDoador($conexao, $dataLocalEnucl, $dataDistribuicaoDescarte, $classificacaoCornea, $receptor, $dataTx, $equipeTx, $localTx, $tipoTx, $contato_id) {

	$dataLocalEnucl = mysqli_real_escape_string($conexao,$dataLocalEnucl);
	$dataDistribuicaoDescarte = mysqli_real_escape_string($conexao, $dataDistribuicaoDescarte);
	$classificacaoCornea = mysqli_real_escape_string($conexao,$classificacaoCornea);
	$receptor = mysqli_real_escape_string($conexao,$receptor);
	$dataTx = mysqli_real_escape_string($conexao, $dataTx);
	$equipeTx = mysqli_real_escape_string($conexao, $equipeTx);
	$localTx = mysqli_real_escape_string($conexao, $localTx);
	$tipoTx = mysqli_escape_string($conexao, $tipoTx);
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	
	$query = "INSERT INTO relatoriodoador (dataLocalEnucl, dataDistribuicaoDescarte, classificacaoCornea, receptor, dataTx, equipeTx, localTx, tipoTx, contato_id) VALUES ('{$dataLocalEnucl}', '{$dataDistribuicaoDescarte}', '{$classificacaoCornea}', '{$receptor}', '{$dataTx}', '{$equipeTx}', '{$localTx}', '{$tipoTx}', '{$contato_id}')";
	return mysqli_query($conexao, $query);
}

function alteraRelatorioDoador($conexao, $dataLocalEnucl, $dataDistribuicaoDescarte, $classificacaoCornea, $receptor, $dataTx, $equipeTx, $localTx, $tipoTx, $contato_id) {
	$dataLocalEnucl = mysqli_real_escape_string($conexao,$dataLocalEnucl);
	$dataDistribuicaoDescarte = mysqli_real_escape_string($conexao, $dataDistribuicaoDescarte);
	$classificacaoCornea = mysqli_real_escape_string($conexao,$classificacaoCornea);
	$receptor = mysqli_real_escape_string($conexao,$receptor);
	$dataTx = mysqli_real_escape_string($conexao, $dataTx);
	$equipeTx = mysqli_real_escape_string($conexao, $equipeTx);
	$localTx = mysqli_real_escape_string($conexao, $localTx);
	$tipoTx = mysqli_escape_string($conexao, $tipoTx);
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "UPDATE relatoriodoador SET dataLocalEnucl = '{$dataLocalEnucl}', dataDistribuicaoDescarte = '{$dataDistribuicaoDescarte}', classificacaoCornea = '{$classificacaoCornea}', receptor = '{$receptor}', dataTx = '{$dataTx}', equipeTx = '{$equipeTx}', localTx = '{$localTx}', tipoTx = '{$tipoTx}' WHERE id = '{$contato_id}'";
	
	return mysqli_query($conexao, $query);
	
}

function buscarRelatorioDoador($conexao, $contato_id) {
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "SELECT * FROM relatoriodoador WHERE id = '{$contato_id}'";
	$resultado = mysqli_query($conexao, $query);
	$relatorioDoador = mysqli_fetch_assoc($resultado);
	return $relatorioDoador;
	
}

function removerRelatorioDoador($conexao, $contato_id) {
	$contato_id = mysqli_real_escape_string($conexao, $contato_id);
	$query = "UPDATE relatoriodoador SET dataLocalEnucl = '', dataDistribuicaoDescarte = '', classificacaoCornea = '', receptor = '', dataTx = '', equipeTx = '', localTx = '', tipoTx = '' WHERE id = '{$contato_id}'";
	return mysqli_query($conexao, $query);
}


