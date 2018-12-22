<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-relatorio-producao.php");
$relatorioProducao = buscaRelatorioProducao($conexao, $_POST['contato_id']); 
?>

<br>
<h1>Formulário de Cadastro de Relatório de Produção</h1>
<p align="left">Formulário do Sr(a) <?= $_POST['nome'] ?>, com idade: <?= $_POST['idade'] ?>.</p>  
<br>
<form action="relatorio-producao-altera.php" method="post">
	<table class="table">
		<?php require_once("formulario-base-relatorio-producao.php"); ?>
		<tr>
			<td><button class="btn btn-primary" type="submit">Cadastra</button></td>
		</tr>
	</table>
</form>
<?php require_once("rodape.php"); ?>