<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $data_nascimento = $_POST['data_nascimento'];
    $foto = $_POST['foto_atual'];

    if ($_FILES['foto']['name']) {
        $foto = 'uploads/' . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    }

    $sql = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', endereco='$endereco', cidade='$cidade', estado='$estado', cep='$cep', data_nascimento='$data_nascimento', foto='$foto' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM clientes WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Cliente não encontrado";
        exit();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="editar_cliente.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        Telefone: <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" required><br>
        Endereço: <input type="text" name="endereco" value="<?php echo $row['endereco']; ?>" required><br>
        Cidade: <input type="text" name="cidade" value="<?php echo $row['cidade']; ?>" required><br>
        Estado: <input type="text" name="estado" value="<?php echo $row['estado']; ?>" required><br>
        CEP: <input type="text" name="cep" value="<?php echo $row['cep']; ?>" required><br>
        Data de Nascimento: <input type="date" name="data_nascimento" value="<?php echo $row['data_nascimento']; ?>" required><br>
        Foto Atual: <img src="<?php echo $row['foto']; ?>" width="100"><br>
        Nova Foto: <input type="file" name="foto" accept="image/*"><br>
        <input type="hidden" name="foto_atual" value="<?php echo $row['foto']; ?>">
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>