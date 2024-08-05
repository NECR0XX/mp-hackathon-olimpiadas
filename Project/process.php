<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question10'])) {
    $_SESSION['question10'] = $_POST['question10'];
}

function calcularPontos($respostasUsuario, $respostasCorretas) {
    $pontuacao = 0;

    foreach ($respostasCorretas as $pergunta => $respostaCorreta) {
        if (isset($respostasUsuario[$pergunta]) && $respostasUsuario[$pergunta] == $respostaCorreta) {
            $pontuacao++;
        }
    }

    return $pontuacao;
}

$respostasCorretas = [
    'question1' => $country,
    'question2' => $start,
    'question3' => $podium,
    'question4' => $venue,
    'question5' => $sport,
    'question6' => $silver_medals,
    'question7' => $total_sports,
    'question8' => $winners,
    'question9' => $total_countries,
    'question10' => $competitor_winn
];

$respostasUsuario = [
    'question1' => $_SESSION['question1'],
    'question2' => $_SESSION['question2'],
    'question3' => $_SESSION['question3'],
    'question4' => $_SESSION['question4'],
    'question5' => $_SESSION['question5'],
    'question6' => $_SESSION['question6'],
    'question7' => $_SESSION['question7'],
    'question8' => $_SESSION['question8'],
    'question9' => $_SESSION['question9'],
    'question10' => $_SESSION['question10']
];

$score = calcularPontos($respostasUsuario, $respostasCorretas);

header("Location: result.php?score=$score");
exit();
?> 