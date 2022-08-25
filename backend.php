<?php
$usuario = "";
$password = "";
$user = $_POST['user'];
$contra = $_POST['contra'];
if($user === $usuario && $contra === $password){
    session_start();
    $_SESSION["user"] = $user;
    header('location:admin/index.php');
}else {
  
    echo "El usuario o la contraseña son incorrectos";
}