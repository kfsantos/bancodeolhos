<?php require_once("cabecalho.php"); 				
require_once("banco-doador.php"); 	

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$dataCaptacao = $_POST['dataCaptacao'];
$localDoacao = $_POST['localDoacao'];
$responsavel = $_POST['responsavel'];
$grauParentesco = $_POST['grauParentesco'];
$telefone = $_POST['telefone'];
$tec = $_POST['tec'];
$contato_id = $_POST['contato_id'];

if(alteraUsuario($conexao, $nome, $idade, $sexo, $dataCaptacao, $localDoacao, $responsavel, $grauParentesco, $telefone, $tec, $contato_id)) { ?>
	<p class="text-success">O Usuario <?= $nome ?>, com idade: <?= $idade ?>, foi adicionado.</p>   
<?php } else {
	$msg = mysqli_error($conexao); ?>
	<p class="text-danger">O produto <?= $nome ?> não foi adicionado: <?= $msg?></p>
<?php }

require_once("rodape.php"); ?>	