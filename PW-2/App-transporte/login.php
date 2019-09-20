<?php 
$email = $_POST["email"];
$senha = $_POST["senha"];
$adminlogin = "admin@admin.com";
$adminsenha	= "admin123";


if ($email == $adminlogin && $senha == $adminsenha ){
include 'index.html';
echo "<script type=\"text/javascript\">alert('Login efetuado com sucesso ');</script>";
}
else {
include 'login.html';
echo "<script type=\"text/javascript\">alert('ERROU');</script>";
}

 ?>