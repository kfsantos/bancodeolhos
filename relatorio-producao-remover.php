<?php 
	require_once("cabecalho.php"); 				
	require_once("banco-relatorio-producao.php");
    var_dump($_POST['contato_id']);

    if(removerRelatorioProducao($conexao, $_POST['contato_id'])) { ?>
        <p class="text-success">O Relatório foi Removido.</p>

    <?php } else {
        $msg = mysqli_error($conexao); ?>
        <p class="text-danger">O Relatório não foi encontrado: <?= $msg?></p>
    <?php }   
require_once("rodape.php"); 
?>	