<?php

$conexao =
mysqli_connect("localhost","root", "","sistema_vendas_consumos");

$id = $_GET['id'];

$sql = "UPDATE clientes SET ativo = 0 WHERE id = $id";

mysqli_query($conexao, $sql);

header("location:cadastro_clientes.php");

?>

