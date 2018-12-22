<?php require_once("cabecalho.php"); 
require_once("conecta.php");
require_once("logica-usuario.php");

verificarUsuario();

?>			
	<h1>Formulário de Cadastro de Usuário</h1>
	<form action="doador-adiciona.php" method="POST">
		<table class="table">
			<?php include("formulario-base-doador.php");?>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Cadastrar</button>
				</td>
			</tr>
		</table>
	</form>

<?php include("rodape.php"); ?>			
