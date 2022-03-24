<?php
include('CONEXAO.php');
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location: login-1.php');

    exit();
}

$email =mysqli_REAL_ESCAPE_STRING($conexao, $_POST['email']);
$senha =mysqli_REAL_ESCAPE_STRING($conexao, $_POST['senha']);
printf($email,$senha);

$query ="select email, email from administrador where email ='{$email}' and senha ='{$senha}'";

$resultado = mysqli_query($conexao, $query);

$row = mysqli_num_rows($resultado);

printf("Records deleted: %d\n", $row);




 if($row == 1){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['mensagem'] = "";
    header('location: menu_ad.html');
}else{
    header('location: login-1.php');
    $_SESSION['mensagem'] = "Erro senha ou Email incorreto";
}
?> 