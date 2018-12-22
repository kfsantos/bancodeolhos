<?php
require_once("cabecalho.php");
require_once("conecta.php");
require_once("banco-doador.php");
require_once("logica-usuario.php");
verificarUsuario();

$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
$total = contaTotalDoadores($conexao);
$registros = 5;
$numeroPaginas = ceil($total/$registros);
$inicio = (($registros*$pagina) - $registros);

?>
<br>
	<h1>Lista de Doadores Cadastrados</h1>
<br>

<table class="table table-striped table-bordered" paginator="true" rows="10">
	<tr class="text-center">
		<td>Nome</td>
		<td>Idade</td>
		<td>Sexo</td>
		<td>Responsável</td>
		<td>Grau de Parentesco</td>
		<td>Telefone</td>
		<td>Alterar</td>
	</tr>
	<?php 
	$usuarios = listarTodosUsuario($conexao, $inicio, $registros);
	foreach ($usuarios as $usuario):
	?>
		<tr>
		<!--<td><?= $usuario['id'] ?></td> -->
			<td><?= $usuario['nome'] ?></td>
			<td><?= $usuario['idade']?></td>
			<td><?= $usuario['sexo'] ?></td>
			<td><?= $usuario['responsavel'] ?></td>
			<td><?= $usuario['grauParentesco'] ?></td>
			<td><?= $usuario['telefone'] ?></td>
			<form action="formulario-doador-alterar.php" method="POST">
				<input type="hidden" name="contato_id" value="<?= $usuario['id']?>"></input>				
				<td class="text-center">
					<a><button class="btn btn-primary" type="submit">Alterar</button></a>
				</td>
			</form>
		</tr>
	<?php
	endforeach

	?>
</table>
<?php
  if($pagina > 1) {
        echo "<a href='doador-listar.php?pagina=".($pagina - 1)."' class='controle'>&laquo; anterior</a>";
    }
     
    for($i = 1; $i < $numeroPaginas + 1; $i++) {
        $ativo = ($i == $pagina) ? 'numativo' : '';
        echo "<a href='doador-listar.php?pagina=".$i."' class='numero ".$ativo."'> " .$i. " </a>";
    }
         
    if($pagina < $numeroPaginas) {
        echo "<a href='doador-listar.php?pagina=".($pagina + 1)."' class='controle'>proximo &raquo;</a>";
    }
        ?>
<?php require_once("rodape.php"); ?>