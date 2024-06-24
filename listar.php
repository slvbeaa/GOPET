<?php
include('conexao.php');

//Listar
$sql = $con->prepare("SELECT * FROM cadastro_clinica");
$sql -> execute();

$fechClinicas = $sql->fetchAll();

foreach ($fechClinicas as $key => $value){
    echo $value['nome'].' | ' .$value['horario'].' | ' .$value['email'].' | ' .$value['telefone'].' | ' .$value['endereco'];
    echo '<hr>';
}

?>