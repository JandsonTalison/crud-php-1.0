<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/select.css">
    <title>Leitura</title>

</head>

<body>

    <main class='container2'>

        <a href="index.php" class='index'><img src="../assets/arrowLeft.svg">Inserir produto</a>

        <?php

            include_once "conexao.php";

            $consulta = mysqli_query($conn,"
            SELECT * FROM produtos;");
        ?>

        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Preço</th>
                <th scope="col">Alterar</th>
                <th scope="col">Deletar</th>
            </tr>
            </thead>

            <tbody>
        <?php
            while($vetor = mysqli_fetch_array($consulta)){
                $id = $vetor['id'];
                $produto = utf8_encode($vetor['produto']);
                $categoria = utf8_encode($vetor['categoria']);
                $preco = $vetor['preco'];
        ?>
            <tr>
                <th scope="row"><?php echo"$id"?></th>
                <td><?php echo"$produto"?></td>
                <td><?php echo"$categoria"?></td>
                <td><?php echo"R$ $preco"?></td>
                <td>

                    <?php echo "<a href='update.php?id=".$vetor['id']."'>"?>
                        <button type="button" class="btn btn-primary">Alterar</button>
                    <?php echo"</a>";?> 

                </td>
                
                <td>

                    <?php echo "<a href='delete.php?id=".$vetor['id']."'>"?>
                        <button type="button" class="btn btn-danger">Deletar</button>
                    <?php echo"</a>";?> 

                </td>

            </tr>
        <?php
            }
        ?>
    
            </tbody>
        </table>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>