<?php

include_once('conexao.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM cadastro_usuario WHERE email = '$email'";
    $resultado = mysqli_query($con, $sql);
 
    $sql = "INSERT INTO `gopet`.`cadastro_usuario` (`id`, `nome`, `email`, `senha`) VALUES (NULL,'$nome', '$email', '$senha')";
    $resultado = mysqli_query($con, $sql);

    header('Location: telalogin.php');
}

mysqli_close($con);