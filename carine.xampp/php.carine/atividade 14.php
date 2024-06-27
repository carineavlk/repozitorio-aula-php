<?php
    $db = mysqli_connect("localhost", "root", "123456", "cars");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $ano = $_POST['ano'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        // Diretório para salvar as fotos
        $target_dir = "uploads/";

        // Verifica se o diretório existe, se não, cria o diretório
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Verifica se o arquivo é uma imagem real
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Arquivo não é uma imagem.";
            $uploadOk = 0;
        }

        // Verifica se $uploadOk está definido como 0 por um erro
        if ($uploadOk == 0) {
            echo "Desculpe, seu arquivo não foi enviado.";
        // Se tudo estiver ok, tenta fazer o upload do arquivo
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                // Insere o carro no banco de dados
                $sql = "INSERT INTO carros (modelo, marca, ano, preco, foto, descricao)
                        VALUES ('$modelo', '$marca', '$ano', '$preco', '".basename($_FILES["foto"]["name"])."', '$descricao')";

                if (mysqli_query($db, $sql)) {
                    // Redireciona para a página de exibição de carros
                    header("Location: exibir_carros.php");
                    exit(); // Certifique-se de sair para evitar que o resto do script seja executado
                } else {
                    echo "Erro ao inserir um carro: " . mysqli_error($db);
                }
            } else {
                echo "Desculpe, houve um erro ao enviar seu arquivo.";
            }
        }
    }

    mysqli_close($db);
?>
