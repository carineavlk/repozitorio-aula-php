<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);
// 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$data_nascimento = $_POST['data_nascimento'];
$foto = "";

if ($_FILES['foto']['name']) {
    $foto = 'uploads/' . basename($_FILES['foto']['name']);
    move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
}

$sql = "INSERT INTO clientes (nome, email, telefone, endereco, cidade, estado, cep, data_nascimento, foto) 
        VALUES ('$nome', '$email', '$telefone', '$endereco', '$cidade', '$estado', '$cep', '$data_nascimento', '$foto')";

if ($conn->query($sql) === TRUE) {
    echo "Novo cliente cadastrado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>