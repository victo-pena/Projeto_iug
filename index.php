<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca-IUG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="fundo"><img src="Como-cambiar-la-imagen-de-fondo-del-inicio-de-sesion-en-tu-Mac-professor-falken.com_.jpg" alt=""></div>
<div class="caixa-p">
<div class="menu-1"><h1 class="h1-menu">Menu</h1></div>
<hr>
<div class="middle">
    <a href="CONEXAO.PHP" class="btn btn1">Aluno</a>
    <a href="login-1.php" class="btn btn2">Administrador</a>
    <?php
    session_start();
    $mensagem = $_SESSION['mensagem'] = "";
    ?>
</div>
</body>
</html>