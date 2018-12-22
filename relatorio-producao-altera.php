<?php require_once("cabecalho.php"); 				
require_once("banco-relatorio-producao.php");
$globosOcularesObtidos = $_POST['globosOcularesObtidos'];
$globosOcularesDescartados = $_POST['globosOcularesDescartados'];
$corneasPreservadas = $_POST['corneasPreservadas'];
$corneasDescartadas = $_POST['corneasDescartadas'];
$opticas = $_POST['opticas'];
$esclerasPreservadas = $_POST['esclerasPreservadas'];
$esclerasDescartadas = $_POST['esclerasDescartadas'];
$esclerasDistribuidas = $_POST['esclerasDistribuidas'];
$tectonica = $_POST['tectonica'];
$motivoDescarte = $_POST['motivoDescarte'];
$causaMorte = $_POST['causaMorte'];
$contato_id = $_POST['contato_id'];


    if(alteraRelatorioProducao($conexao, $globosOcularesObtidos, $globosOcularesDescartados, $corneasPreservadas, $corneasDescartadas, $opticas, $esclerasPreservadas, $esclerasDescartadas, $esclerasDistribuidas, $tectonica, $motivoDescarte, $causaMorte, $contato_id)) { ?>
        <p class="text-success">O relatorio de Produção, foi alterado com sucesso.</p>
        
    <?php } else {
        $msg = mysqli_error($conexao); ?>
        <p class="text-danger">O relatorio de número <?= $relatorioProducao['id'] ?> não foi adicionado: <?= $msg?></p>
    <?php }
    
require_once("rodape.php"); ?>	