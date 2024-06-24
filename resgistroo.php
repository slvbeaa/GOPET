<?php
include('conexao.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $cnpj = $_POST["cnpj"];
    $email = $_POST["email"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $foto = $_FILES["foto"];

    if ($_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
        $nome_arquivo = uniqid() . "_" . $_FILES["foto"]["name"];
        $caminho_arquivo = "uploads/" . $nome_arquivo;
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho_arquivo)) {
            $foto = $caminho_arquivo;
        } else {
            print "Erro ao fazer upload do arquivo.";
            exit();
        }
    }

    $sql = "INSERT INTO `gopet`.`cadastro_clinica` (`id`, `nome`, `cnpj`, `email`, `estado`, `cep`, `endereco`, `telefone`, `foto`) VALUES (NULL, '$nome', '$cnpj', '$email', '$estado', '$cep', '$endereco', '$telefone', '$foto')";
    $resultado = mysqli_query($con, $sql);
    
    if ($con->query($sql) === TRUE) {
        header('Location: ');
    } else {
        echo "Erro ao cadastrar a clínica: " . $con->error;
    }
}
    mysqli_close($con);
?>