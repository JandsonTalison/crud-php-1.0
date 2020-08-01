<?php

include_once("conexao.php");

$id = filter_input(INPUT_GET,'id');

$result_produto = "SELECT * FROM produtos WHERE id='$id'";
$resultado_final = mysqli_query($conn,$result_produto);
$row_produto = mysqli_fetch_assoc($resultado_final);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <title>Atualizar</title>
</head>

<body>

    <main class='container'>

        <a href="select.php" class='select'>Listar produtos <img src="../assets/list.svg"></a>

        <form class="form" action="edit.php" method="POST">

            <header class="form-header">Atualizar produto</header>

            <div class="content">     

                <input class="format" type="text" name="produto" value="<?php echo utf8_encode($row_produto['produto'])?>" autocomplete="off" required>
                <input class="format" type="text" name="preco" value="<?php echo $row_produto['preco'];?>" autocomplete="off" required>
                <input type="hidden" name="id" value="<?php echo $row_produto['id'];?>">

                <select class="format" name="categoria" required>
                    <option value="<?php echo $row_produto['categoria']?>"><?php echo utf8_encode($row_produto['categoria']);?></option>
                    <option value="Carne">Carne</option>
                    <option value="Mercearia">Mercearia</option>
                    <option value="Laticínio">Laticínio</option>
                    <option value="Hortifruti">Hortifrut</option>
                    <option value="Bebida">Bebida</option>
                    <option value="Limpeza">Limpeza</option>
                    <option value="Higiene pessoal">Higiene Pessoal</option>
                </select>

                <input class="format" type="submit" value="Alterar">

            </div>

        </form>

    </main>

</body>

</html>