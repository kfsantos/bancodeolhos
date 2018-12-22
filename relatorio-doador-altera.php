<?php 
require_once("cabecalho.php"); 				
require_once("banco-relatorio-doador.php");
$dataLocalEnucl = $_POST['dataLocalEnucl'];
$dataDistribuicaoDescarte = $_POST['dataDistribuicaoDescarte'];
$classificacaoCornea = $_POST['classificacaoCornea'];
$receptor = $_POST['receptor'];
$dataTx = $_POST['dataTx'];
$equipeTx = $_POST['equipeTx'];
$localTx = $_POST['localTx'];
$tipoTx = $_POST['tipoTx'];
$contato_id = $_POST['contato_id'];

    if(alteraRelatorioDoador($conexao, $dataLocalEnucl, $dataDistribuicaoDescarte, $classificacaoCornea, $receptor, $dataTx, $equipeTx, $localTx, $tipoTx, $contato_id) ) { ?>
        <p class="text-success">O relatorio do Doador, foi alterado com sucesso.</p>
        
    <?php } else {
        $msg = mysqli_error($conexao); ?>
        <p class="text-danger">O relatorio de número <?= $relatorioDoador['id'] ?> não foi adicionado: <?= $msg?></p>
    <?php }
    
require_once("rodape.php"); ?>	