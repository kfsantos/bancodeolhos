<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-endereco.php");
require_once("logica-usuario.php");

verificarUsuario();
?>
<br>
<h1>Lista de Endereços de Doadores Cadastrados</h1>
<br>

	<table class="table table-striped table-bordered" paginator="true" rows="10">
			<tr class="text-center">
				<!--<td>Nº</td> -->
				<td>Doador</td>
				<td>Idade</td>
				<td>Logradouro</td>
				<td>Nº</td>
				<td>Bairro</td>
				<td>Cidade</td>
				<td>Alterar</td>
			</tr>
			<?php 
			$enderecos = listarTodosEnderecos($conexao);
			foreach ($enderecos as $endereco):
			?>
			<tr>
				<!--<td><?= $endereco['id'] ?></td> -->
				<td><?= $endereco['nome'] ?></td>
				<td><?= $endereco['idade'] ?></td>
				<td><?= $endereco['logradouro'] ?></td>
				<td><?= $endereco['numeroCasa']?></td>
				<td><?= $endereco['bairro'] ?></td>
				<td><?= $endereco['cidade'] ?></td>
				<form action="formulario-endereco-alterar.php" method="POST">
					<input type="hidden" name="contato_id" value="<?= $endereco['contato_id']?>"></input>				
					<input type="hidden" name="nome" value="<?= $endereco['nome']?>"></input>				
					<input type="hidden" name="idade" value="<?= $endereco['idade']?>"></input>				
					<td class="text-center">
						<a><button class="btn btn-primary" type="submit">Alterar</button></a>
					</td>
				</form>
			</tr>
			<?php
			endforeach
			?>
	</table>
<?php require_once("rodape.php"); 
?>