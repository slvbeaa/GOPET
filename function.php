<?php

include('conexao.php');

function uploadImage($caminho) {
    if (!empty($_FILES['arquivo']['name'])) {
        $nomeImagem = $_FILES['imagem']['name'];
        $tipo = $_FILES['imagem']['type'];
        $nomeTemporario = $_FILES['imagem']['tmp_name'];
        $tamanho = $_FILES['imagem']['size'];
        $erros = array();

        $tamanhoMaximo = 1024 * 1024 * 5;
        if ($tamanho > $tamanhoMaximo) {
            $erros[] = "Seu arquivo excede o tamanho máximo<br>";
        }

        $arquivosPermitidos = ["png", "jpg", "jpeg"];
        $extensao = pathinfo($nomeImagem, PATHINFO_EXTENSION);
        if (!in_array($extensao, $arquivosPermitidos)) {
            $erros[] = "Arquivo não permitido.<br>";
        }

        $typespermitidos = ["image/png", "image/jpg", "image/jpeg"];
        if (!in_array($tipo, $typespermitidos)) {
            $erros[] = "Tipo de arquivo não permitido<br>";
        }

        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo $erro;
            }
        } else {
            $hoje = date("d-m-Y_h-i");
            $novoNome = $hoje . "-" . $nomeImagem;
            if (move_uploaded_file($nomeTemporario, $caminho . $novoNome)) {
                return $novoNome;
            } else {
                return FALSE;
            }
        }
    }
}


function insertCadastro($con) {
    if (isset($_POST['insert']) &&
        !empty($_POST['id']) &&  
        !empty($_POST['nome']) && 
        !empty($_POST['telefone']) && 
        !empty($_POST['horario']) && 
        !empty($_POST['email']) && 
        !empty($_POST['estado']) && 
        !empty($_POST['endereco']) && 
        !empty($_POST['cep']) && 
        !empty($_POST['cnpj']) && 
        !empty($_POST['imagem'])) {

        $id = mysqli_real_escape_string($con, $_POST['id']);
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
        $horario = mysqli_real_escape_string($con, $_POST['horario']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $estado = mysqli_real_escape_string($con, $_POST['estado']);
        $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
        $cep = mysqli_real_escape_string($con, $_POST['cep']);
        $cnpj = mysqli_real_escape_string($con, $_POST['cnpj']);
        $imagem = !empty($_FILES['imagem']['name']) ? $_FILES['imagem']['name'] : "";

        if (!empty($imagem)) {
            $caminho = "./GOPET/GOPET/";
            $imagem = uploadImage($caminho);
        }

        $sql = "SELECT * FROM `gopet`.`cadastro_usuario` WHERE id = '$id' AND nome = '$nome' AND telefone = '$telefone' AND horario = '$horario' AND email = '$email' AND estado = '$estado' AND endereco = '$endereco' AND cep = '$cep' AND cnpj = '$cnpj' AND imagem = '$imagem' ";
        $resultadoConsulta = mysqli_query($con, $sql);

        $query = "INSERT INTO `gopet`.`cadastro_clinica`(`id`, `nome`, `telefone`, `horario`, `email`, `estado`, `endereco`, `cnpj`, `imagem`) VALUES (NULL, '$nome', '$telefone', '$horario', '$email', '$estado', '$endereco', '$cep', '$cnpj', '$imagem')";
        $resultadoInsercao = mysqli_query($con, $query);

    }else {
        
        header('Location: index.php');
    }
}


mysqli_close($con);
?>