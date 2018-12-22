<?php 
    require_once("cabecalho.php"); 				
    require_once("banco-endereco.php"); 	
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
        if($endereco = buscarendereco($conexao, $logradouro, $bairro)) { 
            $contato_id = $endereco['contato_id']; 
?>
            <p class="text-success">O endereco <?= $logradouro ?>, Bairro: <?= $bairro ?>, foi encontrado.</p>  
            <form action="formulario-endereco-alterar.php" method="POST">
               <tr>
                    <td>Deseja Alterar o Endereço?</td>
                    <td><input type="hidden" name="contato_id" value="<?=$contato_id?>"></input></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">SIM</button></td>
                </tr>
            </form>
        <?php } else {
            $msg = mysqli_error($conexao); ?>
            <p class="text-danger">O endereco <?= $logradouro ?> não foi encontrado na base de dados: <?= $msg?></p>
        <?php }
    require_once("rodape.php"); 
        ?>	