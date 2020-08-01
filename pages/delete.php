<?php

include_once("conexao.php");

$id = filter_input(INPUT_GET,'id');

$query_delete = "DELETE FROM produtos WHERE id='$id'"; 
mysqli_query($conn,$query_delete);

header("Location: select.php");

?>