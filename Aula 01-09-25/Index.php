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
require 'Menu.php';
?>

<?php if (!isset($_SESSION['login'])): ?>
    <h2>Login</h2>
    <form method="post" action="Logar.php">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
<?php else: ?>
    <p>Você já está logado!</p>
<?php endif; ?>
</body>
</html>