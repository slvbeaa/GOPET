<?php
//Deletar
$sql = $con->prepare("SELECT * FROM cadastro_clinica");
$sql -> execute();

$fechClinicas = $sql->fetchAll();

foreach ($fechClinicas as $key => $value){
    echo '<a href="?delete=' .$value['id'].' ">(Delete)</a>' .$value['nome'].' | ' .$value['horario'].' | ' .$value['email'].' | ' .$value['telefone'].' | ' .$value['endereco'];
    echo '<hr>';
}

if(isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $con -> exec("DELETE FROM cadastro_clinica WHERE id=$id");
    echo 'DELETADO COM SUCESSO';
}

//Editar
$nome = ['nome'];
$con -> exec("UPDATE cadastro_clinica SET nome='$nome' WHERE id=1");