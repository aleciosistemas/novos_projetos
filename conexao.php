<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sistema_vendas_consumos';

$conn = new mysqli($host , $usuario, $senha ,$banco);

if ($conn->connect_error) {
    die ('Conexao falhou:'.
    $conn->connect_error);
}
?>
