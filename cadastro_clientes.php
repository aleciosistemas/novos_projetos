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
<?php
$conexao =
mysqli_connect("localhost","root","", "sistema_vendas_consumos");
$sql = "SELECT * FROM clientes WHERE ativo = 1";
$resultado = mysqli_query($conexao,$sql);

if(mysqli_num_rows($resultado) > 0) {
    echo "<style>
        table{
            border-collapse:
    collapse:
                width:100%;
                margin-top: 20px;
                }
                th,td{
                border:1px solid #ddd;
                padding: 8px;
                text-align: left; }
                
            th {
            background-color:
    #4caf50:
                color:white;
                }
            tr:nth-child(even)
            {background-color: #2f2f2;}
            a . excluir {
                    color:white;
                    background-color:
                    
        #44336;
                padding:5px 10px;
                text-decoration: nome;
                border-radius:5px;
            }
                a . excluir:hover{
                        background-color:
        
    #d32f2f;
                }
                 </style>";
        echo "<table>";
        echo "<tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th> Acao</th>
            </tr>";
            
        while($dados = mysqli_fetch_assoc($resultado)) {
            echo"<tr>";
            echo "<td>" . $dados['nome']."</td>";

            echo "<td>". $dados['telefone'] . "</td>";
            
            echo "<td>" . $dados['email'] ."</td>";

            echo "<td><a class = 'excluir' href = 'excluir_cliente.php?id =".
            $dados['id'] . "'>Excluir</a></td";
            echo "</tr>";
        }
        echo "<table>";
}else {
    echo "Nenhum cliente ativo encontrado.";
}
    ?>

</body>
</html>
   

        





