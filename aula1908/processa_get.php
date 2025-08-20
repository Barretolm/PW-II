
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<div class="container mt-5">
<?php 
 
$nome = $_GET["nome"];
$email = $_GET["email"];
$idade = $_GET["idade"];

echo " seu dados: <br/> 
nome: $nome <br/>
email:$email <br/>
idade: $idade"

?>
</div>