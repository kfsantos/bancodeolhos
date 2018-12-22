<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-relatorio-doador.php");
require_once("logica-usuario.php");
verificarUsuario();
?>
<br>
<h1>Lista de Relatório de Doadores Cadastrados</h1>
<br>

	<table class="table table-striped table-bordered" paginator="true" rows="10">
			<tr class="text-center">
				<!--<td>Nº</td> -->
				<td>Doador</td>
				<td>Idade</td>
				<td>Data Local Enucl.</td>
				<td>Data de Dist. Descarte</td>
				<td>Classificação Córnea</td>
				<td>Receptor</td>
				<td>Data TX</td>
				<td>Equipe TX</td>
				<td>Tipo TX</td>
				<td>Alterar</td>
			</tr>
			<?php 
			$relatorios = listarTodosRelatoriosDoadores($conexao);
			foreach ($relatorios as $relatorio):
			?>
			<tr>
				<!--<td><?= $relatorio['id'] ?></td> -->
				<td><?= $relatorio['nome'] ?></td>
				<td><?= $relatorio['idade'] ?></td>
				<td><?= $relatorio['dataLocalEnucl'] ?></td>
				<td><?= $relatorio['dataDistribuicaoDescarte']?></td>
				<td><?= $relatorio['classificacaoCornea'] ?></td>
				<td><?= $relatorio['receptor'] ?></td>
				<td><?= $relatorio['dataTx'] ?></td>
				<td><?= $relatorio['equipeTx'] ?></td>
				<td><?= $relatorio['tipoTx'] ?></td>
				<form action="formulario-relatorio-doador-alterar.php" method="POST">
					<input type="hidden" name="contato_id" value="<?= $relatorio['contato_id']?>"></input>				
					<input type="hidden" name="nome" value="<?= $relatorio['nome']?>"></input>	
					<input type="hidden" name="idade" value="<?= $relatorio['idade']?>"></input>	
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