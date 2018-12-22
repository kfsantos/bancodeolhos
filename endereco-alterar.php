<?php 
	require_once("cabecalho.php"); 				
	require_once("banco-endereco.php");
	$logradouro = $_POST['logradouro'];
	$numeroCasa = $_POST['numeroCasa'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$contato_id = $_POST['contato_id'];
    if(alteraEndereco($conexao, $logradouro, $numeroCasa, $bairro, $cidade, $contato_id)) { ?>
        <p class="text-success">O Endereço <?= $logradouro ?>, foi Alterado.</p>
    <?php } else {
        $msg = mysqli_error($conexao); ?>
        <p class="text-danger">O endereco <?= $logradouro ?> não foi alterado: <?= $msg?></p>
    <?php }   
	require_once("rodape.php"); 
?>	