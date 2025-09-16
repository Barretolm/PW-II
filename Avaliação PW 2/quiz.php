<?php
// --- Gabarito ---
$respostas_certas = [
  'q1' => 'b', 'q2' => 'a', 'q3' => 'b', 'q4' => 'b', 'q5' => 'b',
  'q6' => 'c', 'q7' => 'a', 'q8' => 'b', 'q9' => 'b', 'q10' => 'b'
];

// --- Função que calcula a pontuação ---
function calcularPontuacao($respostas_usuario, $respostas_certas) {
    $pontos = 0;
    foreach ($respostas_certas as $pergunta => $resposta_certa) {
        if (isset($respostas_usuario[$pergunta]) && $respostas_usuario[$pergunta] === $resposta_certa) {
            $pontos++;
        }
    }
    return $pontos;
}

// --- Verifica se o formulário foi enviado ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $todasRespondidas = true;
    foreach ($respostas_certas as $q => $val) {
        if (!isset($_POST[$q])) {
            $todasRespondidas = false;
            break;
        }
    }

    if ($todasRespondidas) {
        $pontuacao = calcularPontuacao($_POST, $respostas_certas);

        // --- Determinar grau ---
        if ($pontuacao == 10) {
            $grau = "Supremo";
        } elseif ($pontuacao >= 8) {
            $grau = "Especialista";
        } elseif ($pontuacao >= 6) {
            $grau = "Entendedor";
        } elseif ($pontuacao >= 4) {
            $grau = "Até gosta";
        } elseif ($pontuacao >= 2) {
            $grau = "Estude mais";
        } else {
            $grau = "Não conhece";
        }

        // --- Data/Hora ---
        $dataHora = date("d/m/Y H:i:s");

        // --- Gravar em cookie (expira em 1 hora) ---
        $resultado = "Pontuação: $pontuacao | Grau: $grau | Data: $dataHora";
        setcookie("ultimo_resultado", $resultado, time() + 3600);

    } else {
        $mensagem = "⚠️ Responda todas as perguntas antes de enviar!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Quiz Dragon Ball Z</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h1>Resultado do Quiz</h1>
  <hr>
  <?php if (isset($pontuacao)): ?>
    <p><strong>Você acertou <?= $pontuacao ?> de 10 questões.</strong></p>
    <p><strong>Grau:</strong> <?= $grau ?></p>
    <p><strong>Data/Hora:</strong> <?= $dataHora ?></p>
  <?php elseif (isset($mensagem)): ?>
    <p class="text-danger"><?= $mensagem ?></p>
  <?php endif; ?>

  <hr>
  <?php if (isset($_COOKIE['ultimo_resultado'])): ?>
    <p><em>Última tentativa registrada:</em><br><?= $_COOKIE['ultimo_resultado'] ?></p>
  <?php endif; ?>

  <a href="projeto.html" class="btn btn-primary">Voltar ao Quiz</a>
</body>
</html>
