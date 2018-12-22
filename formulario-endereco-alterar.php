<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-endereco.php");
require_once("banco-doador.php");
$endereco = buscarEnderecoContato($conexao, $_POST['contato_id']);
?>
<br>
<h1>Formulário de Alteração de Endereço do Doados</h1>
<p align="left">O Usuario <?= $_POST['nome'] ?>, com idade: <?= $_POST['idade'] ?>.</p>  
<br>

	<table class="table">
	<tr class="text-center">
		<form action="endereco-alterar.php" method="POST">
		<?php require_once("formulario-base-endereco.php"); ?>		
		<input type="hidden" name="contato_id" value="<?= $endereco['contato_id'] ?>">	
		<td><button class="btn btn-primary" type="submit">Alterar</button></td>
		</form>
						
		<form action="endereco-remover.php" method="POST">
		<input type="hidden" name="contato_id" value="<?= $endereco['contato_id'] ?>">
		<td><button class="btn btn-primary" type="submit">Remover</button></td>
		</form>
	</tr>
	</table>
<?php require_once("rodape.php"); ?>