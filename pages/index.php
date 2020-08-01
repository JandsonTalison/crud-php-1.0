<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="../css/estilo.css" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>

    <main class='container'>

        <a href="select.php" class='select'>Listar produtos <img src="../assets/list.svg"></a>

        <form class="form" action="insert.php" method="POST">

            <header class="form-header">Cadastro de produtos</header>

            <div class="content">     

                <input class="format" type="text" name="produto" placeholder="Digite o produto" autocomplete="off" required>
                <input class="format" type="number" step='0.01' name="preco" placeholder="Digite o preço do produto" autocomplete="off" required>

                <select class="format" name="categoria" required>
                    <option value="">Selecione uma categoria</option>
                    <option value="Carne">Carne</option>
                    <option value="Mercearia">Mercearia</option>
                    <option value="Laticínio">Laticínio</option>
                    <option value="Hortifruti">Hortifrut</option>
                    <option value="Bebida">Bebida</option>
                    <option value="Limpeza">Limpeza</option>
                    <option value="Higiene pessoal">Higiene Pessoal</option>
                </select>

                <input class="format" type="submit" value="Inserir">

            </div>

        </form>

    </main>

</body>

</html>