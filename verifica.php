<?php

session_start()/
if(!$_SESSION['usuario']){
    header('Location: login.php');
}

//fazer depois que o botão de sair for criado: obs fazer na pagina INDEXCADASTRADO.HTML E MUDAR PARA PHP
    //include('verifica.php');
    //<h1>Olá:<?php echo $_SESSION['usuario'];fechar o php</h1>
    //<h2><a href="sair.php">Sair</a></h2>
    
    
    ?>