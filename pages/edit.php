<?php

include_once("conexao.php");

$id = filter_input(INPUT_POST,'id');
$produto = utf8_decode(filter_input(INPUT_POST,'produto'));
$preco = filter_input(INPUT_POST,'preco');
$categoria = utf8_decode(filter_input(INPUT_POST,'categoria'));

$query_update = "UPDATE produtos SET produto='$produto',preco='$preco',categoria='$categoria' WHERE id='$id'";
$resultado_query_update = mysqli_query($conn,$query_update);


header("Location: select.php");

?>