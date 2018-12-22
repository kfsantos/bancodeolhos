<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-relatorio-doador.php");
$relatorioDoador = buscaRelatorioDoador($conexao, $_POST['contato_id']); 
?>

<br>
<h1>Formulário de Cadastro de Relatório de Doador</h1>
<p align="left">Formulário do Sr(a) <?= $_POST['nome'] ?>, com idade: <?= $_POST['idade'] ?>.</p>  
<br>
<form action="relatorio-doador-altera.php" method="post">
	<table class="table">
		<?php require_once("formulario-base-relatorio-doador.php"); ?>
		<tr>
			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
		</tr>
	</table>
</form>
<?php require_once("rodape.php"); ?>