
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<div class="container mt-5">
<?php 
 
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];

if($nome == ""){
    $nome = "nao foi digitado";
    echo " seu dados: <br/> 
nome: $nome <br/>
email:$email <br/>
idade: $idade";
}
if($email == ""){
    echo " seu dados: <br/> 
nome: $nome <br/>
email:nao foi digitado <br/>
idade: $idade";

}

if($idade == ""){
    echo " seu dados: <br/> 
nome: $nome <br/>
email:$email <br/>
idade: nao foi digitado <br/>";


}else{
    echo " seu dados: <br/> 
nome: $nome <br/>
email:$email <br/>
idade: $idade";
}



?>
</div>