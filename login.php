<?php

  if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
   
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro_usuario WHERE email = '$email' AND senha = '$senha' ";

    $result = $con->query($sql);

    // print_r($result);

    if(mysqli_num_rows($result) < 1){

      unset($_SESSION['email']);
      unset($_SESSION['email']);
      header('Location: telalogin.php');

    }else {

      header('Location: index.php');
    }
  }

  ?>