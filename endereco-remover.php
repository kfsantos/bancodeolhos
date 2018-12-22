<?php 
	require_once("cabecalho.php"); 				
	require_once("banco-endereco.php");
    var_dump($_POST['contato_id']);

    if(removerEndereco($conexao, $_POST['contato_id'])) { ?>
        <p class="text-success">O Endereço <?= $logradouro ?>, foi Removido.</p>

    <?php } else {
        $msg = mysqli_error($conexao); ?>
        <p class="text-danger">O endereco <?= $logradouro ?> não foi encontrado: <?= $msg?></p>
    <?php }   
require_once("rodape.php"); 
?>	