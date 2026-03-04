<?php
include 'conexao.php';

// Se o formulario foi enviado
if (isset($_POST['salvar'] )) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    // Inserir no banco
    $sql = "INSERT INTO clientes ( nome, telefone, email) VALUES ( '$nome','$telefone','$email')";
    if ($conn->query($sql) === TRUE ){
        echo 'Cliente cadastro com sucesso!';
    }else{
        echo 'Erro:'. $conn->error;
    }
}   
   ?>
   
   <!DOCTYPE html>
   <html>
    <head>
        <title>Cadastro de Clientes </title>
</head>
<body>
    <h2>Cadastro de Clientes</2>
    <form method="post" action=''>
        Nome: <input type=text'
        name="nome" required><br>
        Telefone: <input type="texte"
        name="telefone" required><br><br>
        Email: <input type= "text"
        name="email" required><br><br>
        <input type="submit"
        name= "salvar" value= "Salvar">
</form>
</body>
</html>

