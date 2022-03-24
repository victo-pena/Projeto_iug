
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="stylelogv1.css">
</head>
<body>
    
    <div class="fundo"><img src="Como-cambiar-la-imagen-de-fondo-del-inicio-de-sesion-en-tu-Mac-professor-falken.com_.jpg" alt=""></div>
<div class="caixa-p">
<div class="menu-1"><h1 class="h1-menu">Menu do Administrador</h1></div>
<hr>
<div class="middle">
    <form action="login.php" method="post">
        <p>
        <?php
    session_start();
    
    $mensagem = $_SESSION['mensagem'];
    
    if ($mensagem != "") {
    echo $mensagem;
    }

?>
        </p>
        <p>Email:</p>
        <input type="email" name="email" id="" placeholder="Email" class="ent" autofocus=""><br>
        <p>Senha:</p>
        <input type="password" name="senha" placeholder="Senha" class="ent"><br><br>
        <button type="submit" class="btn">Entrar</button>
    </form>

</div>
</body>
</html>