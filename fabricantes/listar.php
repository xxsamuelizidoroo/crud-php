<?php
    require_once "../src/funcoes-fabricantes.php"; 
    $listaDeFabricantes = lerFabricantes($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | SELECT</h1>
        <hr>
        <h2>Lendo e carregando todos os fabricantes</h2>

        <p><a href="inserir.php">Inserir um novo fabricante</a></p>
        
        <table>
            <caption>Lista de Fabricantes</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                 
                 // echo "<pre>";
                 // var_dump($resultado); // Teste
                 // echo "<pre>";

                 foreach($listaDeFabricantes as $fabricante) { ?>
                 <tr>

                    <td>  <?=$fabricante['id']?> </td>
                    <td>  <?=$fabricante['nome']?> </td>

                    <!-- Link dinânmico -->
                    <td><a href="atualizar.php?id=<?=$fabricante['id']?>">Atualizar</a></td>
                    <td><a class="excluir" href="excluir.php?id=<?=$fabricante['id']?>" style ="color:red;">Excluir</a></td>

                    <!-- Solução mais simples para perguntar antes de excluir-->
                    <!-- Colocar depois do <a: onclick="return confirm('Deseja excluir o item ?')" -->
                     
                 </tr>
                         
                 <?php } ?>
     

            </tbody>
        </table>
    </div>

    <!-- Chamando arquivo js para perguntar antes de excluir -->
    <script src="../js/confirm.js"></script>
    
</body>
</html>