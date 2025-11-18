<?php

session_start();

if ($_REQUEST["request_method"] == 'post') {
    
    $Usuario = $_POST['Usuario'];
    $Senha = $_POST['Senha'];

    if ($Usuario == 'admin@gmail.com' && $Senha == '1234'){

        $_SESSION['usuario_logado'] =$Usuario;

        header('Location:painel.php');
        exit();

    }else{

        header('Location:login.html?erro=1');
        exit();
    }
}
?>