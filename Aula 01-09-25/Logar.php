<?php 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email === 'teste@teste.com' && $senha === '123456'){
    $_SESSION['login'] = $email;
    header('Location: Restrito.php');
    exit;
}else{
    header('Location: Index.php');
    exit;
}