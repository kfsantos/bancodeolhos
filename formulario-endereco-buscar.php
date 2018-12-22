<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");
verificarUsuario();
?>

<h1>Buscar Endereço</h1>
<form action="endereco-buscar.php" method="post">
	<table class="table">
		<tr>
			<td>Logradouro</td>
			<td><input class="form-control" type="text" name="logradouro"> </td>
		</tr>

		<tr>
			<td>Bairro</td>
			<td><input class="form-control" type="text" name="bairro"> </td>
		</tr>
		
		<tr>
			<td><button class="btn btn-primary" type="submit">Buscar</button></td>
		</tr>
	</table>
</form>
<?php require_once("rodape.php"); ?>