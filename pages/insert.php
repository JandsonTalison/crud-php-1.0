<?php

include_once("conexao.php");

$produto = utf8_decode($_POST['produto']);
$preco = $_POST['preco'];
$categoria = utf8_decode($_POST['categoria']);

$insert =  "INSERT INTO produtos(produto,preco,categoria) VALUES ('$produto','$preco','$categoria')";
mysqli_query($conn,$insert);

if(mysqli_insert_id($conn)){
    header("Location: index.php");
}else{
    header("Location:index.php");
}

?>