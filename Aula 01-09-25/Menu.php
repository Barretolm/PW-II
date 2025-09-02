<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<nav>
    <a href = 'Index.php' > inicio </a>
    <a href = 'Restrito.php' > Restrito </a>
    <?php if(isset ($_SESSION['login'])): ?>
        <a href = 'Sair.php'> Sair </a>
    <?php endif; ?>
</nav>
   
</body>
</html>