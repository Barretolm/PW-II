<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php 
session_start();

if(!isset($_SESSION['login'])){
    header('Location: Index.php');
    exit;
}
require 'Menu.php';
?>
<h2>Área Restrita</h2>
<p>Bem-vindo, <?php echo $_SESSION['login']; ?>!</p>


</body>
</html>