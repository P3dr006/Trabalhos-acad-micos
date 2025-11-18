<?php

session_start();

if(!isset($_SESSION['usuario_logado'])){

    header('location:login.html');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel</title>
</head>
<body>
    <h1>Bem-vindo ao Painel, <?php echo $_SESSION['usuario_logado']; ?>!</h1>
    <p>Você conseguiu fazer o login com sucesso usando PHP.</p>
    <a href="logout.php">Sair</a>
</body>
</html>

