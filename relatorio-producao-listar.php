<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-relatorio-producao.php");
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
				<td>Globos Ocul. Obtidos</td>
				<td>Globos Ocul. Descartados</td>
				<td>Córneas Preservadas</td>
				<td>Córneas Descartadas</td>
				<td>Ópticas</td>
				<td>Escleras Preservadas</td>
				<td>Escleras Distribuídas</td>
				<td>Escleras Descartadas</td>
				<td>Tectônica</td>
				<td>Motivo Descarte</td>
				<td>Causa da Morte</td>
				<td>Alterar</td>
			</tr>
			<?php 
			$relatorios = listarTodosRelatoriosProducao($conexao);
			foreach ($relatorios as $relatorio):
			?>
			<tr>
				<!--<td><?= $relatorio['id'] ?></td> -->
				<td><?= $relatorio['nome'] ?></td>
				<td><?= $relatorio['idade'] ?></td>
				<td><?= $relatorio['globosOcularesObtidos'] ?></td>
				<td><?= $relatorio['globosOcularesDescartados']?></td>
				<td><?= $relatorio['corneasPreservadas'] ?></td>
				<td><?= $relatorio['corneasDescartadas'] ?></td>
				<td><?= $relatorio['opticas'] ?></td>
				<td><?= $relatorio['esclerasPreservadas'] ?></td>
				<td><?= $relatorio['esclerasDistribuidas'] ?></td>
				<td><?= $relatorio['esclerasDescartadas'] ?></td>
				<td><?= $relatorio['tectonica'] ?></td>
				<td><?= substr($relatorio["motivoDescarte"],0,30)."...";?></td>
				<td><?= substr($relatorio["causaMorte"],0,30)."...";?></td>
				
				<form action="formulario-relatorio-producao-alterar.php" method="POST">
					<input type="hidden" name="contato_id" value="<?= $relatorio['contato_id']?>"></input>	
					<input type="hidden" name="nome" value="<?=$relatorio['nome']?>"></input>	
					<input type="hidden" name="idade" value="<?=$relatorio['idade']?>"></input>				
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