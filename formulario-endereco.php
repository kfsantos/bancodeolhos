<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-endereco.php");
require_once("banco-usuario.php");
$endereco = buscaEndereco($conexao, $_POST['contato_id']);
?>
<br>
<h1>Formulário de Cadastro de Endereço</h1>
<p align="left">O Usuario <?= $_POST['nome'] ?>, com idade: <?= $_POST['idade'] ?>.</p>  
<br>
<form action="endereco-alterar.php" method="POST">
	<table class="table">
		<?php require_once("formulario-base-endereco.php"); ?>
		<tr>
			<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
		</tr>
	</table>
</form>
<?php require_once("rodape.php"); ?>