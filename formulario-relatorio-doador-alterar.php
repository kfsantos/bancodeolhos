<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-doador.php");
require_once("banco-relatorio-doador.php");
$relatorioDoador = buscarRelatorioDoador($conexao, $_POST['contato_id']); 
?>

<br>
<h1>Formulário de Cadastro de Relatório de Doador</h1>
<p align="left">Formulário do Sr(a) <?= $_POST['nome'] ?>, com idade: <?= $_POST['idade'] ?>.</p>  
<br>
	<table class="table">
		<form action="relatorio-doador-altera.php" method="POST">
			<input type="hidden" name="contato_id" value="<?= $relatorioDoador['contato_id'] ?>">
			<?php require_once("formulario-base-relatorio-doador.php"); ?>
			<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</form>	
		<form action="relatorio-doador-remover.php" method="POST">
			<input type="hidden" name="contato_id" value="<?= $relatorioDoador['contato_id'] ?>">			
			<td><button class="btn btn-primary" type="submit">Remover</button></td>			
		</form>			
	</table>
<?php require_once("rodape.php"); ?>