<?php require_once("cabecalho.php"); 				
require_once("banco-doador.php"); 	

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if($usuario = buscarUsuario($conexao, $nome, $idade)) { 
?>
    <p class="text-success">O Usuario <?= $usuario['nome'] ?>, com idade: <?= $usuario['idade'] ?>, foi encontrado.</p>  
    <form action="formulario-endereco-alterar.php" method="POST">
        <table class="table">
            <tr>
                <td>Endereço</td>
                <input type="hidden" name="contato_id" value="<?=$usuario['id']?>"></input>
                <input type="hidden" name="nome" value="<?=$usuario['nome']?>"></input>
                <input type="hidden" name="idade" value="<?=$usuario['idade']?>"></input>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Alterar</button></td>
            </tr>
        </table>
    </form>
    <form action="formulario-relatorio-doador-alterar.php" method="POST">
        <table class="table">
            <tr>
                <td>Relatório do Doador</td>
                <input type="hidden" name="contato_id" value="<?=$usuario['id']?>"></input>
                <input type="hidden" name="nome" value="<?=$usuario['nome']?>"></input>
                <input type="hidden" name="idade" value="<?=$usuario['idade']?>"></input>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Alterar</button></td>
            </tr>
        </table>
    </form>
    <form action="formulario-relatorio-producao-alterar.php" method="POST">
        <table class="table">
            <tr>
                <td>Relatório de Produção</td>
                <input type="hidden" name="contato_id" value="<?=$usuario['id']?>"></input>
                <input type="hidden" name="nome" value="<?=$usuario['nome']?>"></input>
                <input type="hidden" name="idade" value="<?=$usuario['idade']?>"/>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Alterara</button></td>
            </tr>
        </table>
    </form>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O usuario <?= $usuario['nome'] ?> não foi encontrado na base de dados: <?= $msg?></p>
<?php }
    require_once("rodape.php"); 
?>	