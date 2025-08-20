<?php
    $idade = $_GET["idade"];

    if($idade < 2){
        echo "idade: $idade <br/>, e é bebe";
    }
        if($idade < 12){
        echo "idade: $idade <br/>, e é criança";
    }
        if($idade < 18){
        echo "idade: $idade <br/>, e é adolescente";
    }else{echo "idade: $idade <br/>, e é adulto";}
?>