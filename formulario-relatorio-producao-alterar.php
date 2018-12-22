<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-doador.php");
require_once("banco-relatorio-producao.php");
$relatorioProducao = buscaRelatorioProducao($conexao, $_POST['contato_id']); 
?>

<br>
<h1>Formulário de Alteração de Relatório de Produção</h1>
<p align="left">Formulário de Produção do Sr(a). <?= $_POST['nome'] ?>, com idade: <?= $_POST['idade'] ?>.</p>  
<br>
	<table class="table">
		<form action="relatorio-producao-altera.php" method="POST">
			<input type="hidden" name="contato_id" value="<?= $relatorioProducao['contato_id'] ?>">
			
			<?php require_once("formulario-base-relatorio-producao.php"); ?>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</form>	
		<form action="relatorio-producao-remover.php" method="POST">
			<input type="hidden" name="contato_id" value="<?= $relatorioProducao['contato_id'] ?>">
			<td><button class="btn btn-primary" type="submit">Remover</button></td>
		</form>
	</table>
<?php require_once("rodape.php"); ?>
