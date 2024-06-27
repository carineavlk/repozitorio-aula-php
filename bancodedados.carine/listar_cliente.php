<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Lista de Clientes</h1>";
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
        echo "<a href='editar_cliente.php?id=".$row["id"]."'>Editar</a> | <a href='excluir_cliente.php?id=".$row["id"]."'>Excluir</a><br><br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>