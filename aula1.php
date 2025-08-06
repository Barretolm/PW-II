<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
    <h1>Aula 1</h1>

    <?php
    $a = 2;
    $b = 7;
    $c = 5;

    if($a > $b){
        if($a > $c){
            echo "O maior valor e " . $a;
        } else {
            echo "o maior valor e " . $c; 
        }
    }else{
        if($b > $c){
            echo "O maior valor e " . $b;
        } else{
            echo "O maior valor e " . $c;
        }
    }


//ordena em ordem crescente
    $valores = array($a, $b, $c);
        sort($valores); //sort ordena o array em ordem crescente.
        echo "<br><br>Valores ordenados: " . implode(", ", $valores) . "<br><br>";


//verificando se a variavel $a é primo?
        function ePrimo($num){
            if ($num <= 1) return false;
            for($i = 2; $i <= sqrt($num); $i++){
                if($num % $i == 0) return false;
                //sqrt retorna a raiz quadrada de um número
            }
            return true;

        }
        
        if(ePrimo($a)){
            echo "o valor de A ($a) é primo<br><br>";
        }else{
            echo "o valor de A ($a) não é primo<br><br>";
        }
//fatorial da variavel $c



function fatorial($num){
    if ($num == 0 || $num == 1) return 1;
    return $num * fatorial($num - 1);
}

$fatorailC = fatorial($c);
    echo "o fatorial da variavel ($c) é: ". $fatorailC ." <br>"; 

    ?>
</body>
</html>