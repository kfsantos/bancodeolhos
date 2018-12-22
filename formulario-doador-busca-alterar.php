<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("logica-usuario.php");
verificarUsuario();
?>

<h1>Buscar Usuário</h1>
<form action="doador-buscar-alterar.php" method="post">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nome"> </td>
		</tr>
		<tr>
			<td>Idade</td>
			<td><input class="form-control" type="text" name="idade"> </td>
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit">Buscar</button></td>
		</tr>
	</table>
</form>
<?php require_once("rodape.php"); ?>