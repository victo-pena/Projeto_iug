<?php
$Servidor="localhost";
$usuario="root";
$senha="";
$dbname="login";

$conexao =mysqli_connect($Servidor, $usuario, $senha, $dbname);
if(!$conexao){
    die("Houve um erro: ".mysqli_connect_error());
}
?>