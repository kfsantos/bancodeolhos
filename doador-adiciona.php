<?php require_once("cabecalho.php"); 				
require_once("banco-doador.php"); 	
require_once("banco-endereco.php");
require_once("banco-relatorio-doador.php");
require_once("banco-relatorio-producao.php");
require_once("logica-usuario.php");
verificarUsuario();

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$dataCaptacao = $_POST['dataCaptacao'];
$localDoacao = $_POST['localDoacao'];
$responsavel = $_POST['responsavel'];
$grauParentesco = $_POST['grauParentesco'];
$telefone = $_POST['telefone'];
$tec = $_POST['tec'];

if(insereUsuario($conexao, $nome, $idade, $sexo, $dataCaptacao, $localDoacao, $responsavel, $grauParentesco, $telefone, $tec)) { ?>
    <p class="text-success">O Usuario <?= $nome ?>, com idade: <?= $idade ?>, foi adicionado.</p>
    <?php 
    $contato_id = mysqli_insert_id($conexao); //função para recuperar o id do usuário
    insereEndereco($conexao, $logradouro, $numeroCasa, $bairro, $cidade, $contato_id); 
    insereRelatorioDoador($conexao, $dataLocalEnucl, $dataDistribuicaoDescarte, $classificacaoCornea, $receptor, $dataTx, $equipeTx, $localTx, $tipoTx, $contato_id);
    insereRelatorioProducao($conexao, $globosOcularesObtidos, $globosOcularesDescartados, $corneasPreservadas, $corneasDescartadas, $opticas, $esclerasPreservadas, $esclerasDescartadas, $esclerasDistribuidas, $tectonica, $motivoDescarte, $causaMorte, $contato_id);
    ?>
<?php } else {
    $msg = mysqli_error($conexao); ?>
    <p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg?></p>
<?php }
require_once("rodape.php"); ?>	