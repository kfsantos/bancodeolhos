<?php 
require_once("cabecalho.php"); 
require_once("conecta.php");
require_once("banco-doador.php");
$usuario = buscarUsuarioIndividual($conexao, $_POST['contato_id']);
?>			
	<h1>Formulário de Alteração de Cadastro de Usuário</h1>
	<form action="doador-altera.php" method="post">
		<input type="hidden" name="contato_id" value="<?= $usuario['id'] ?>">
		<table class="table">
			<?php require_once("formulario-base-doador.php");?>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Alterar</button>
				</td>
			</tr>
		</table>
	</form>

<?php require_once("rodape.php"); ?>			
