<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['questão10'])) {
    $_SESSION['questão10'] = $_POST['questão10'];
}

function calcularPontos($respostasUsuario, $respostasCorretas, &$acertos, &$erros) {
    $pontuacao = 0;

    foreach ($respostasCorretas as $pergunta => $respostaCorreta) {
        if (isset($respostasUsuario[$pergunta])) {
            if ($respostasUsuario[$pergunta] == $respostaCorreta) {
                $pontuacao++;
                $acertos[$pergunta] = $respostaCorreta;
            } else {
                $erros[$pergunta] = [
                    'correta' => $respostaCorreta,
                    'usuario' => $respostasUsuario[$pergunta]
                ];
            }
        } else {
            $erros[$pergunta] = [
                'correta' => $respostaCorreta,
                'usuario' => null
            ];
        }
    }

    return $pontuacao;
}

$respostasCorretas = [
    'questão1' => $country,
    'questão2' => $start,
    'questão3' => $podium,
    'questão4' => $venue,
    'questão5' => $sport,
    'questão6' => $silver_medals,
    'questão7' => $total_sports,
    'questão8' => $winners,
    'questão9' => $total_countries,
    'questão10' => $competitor_winn
];

$respostasUsuario = [
    'questão1' => $_SESSION['questão1'],
    'questão2' => $_SESSION['questão2'],
    'questão3' => $_SESSION['questão3'],
    'questão4' => $_SESSION['questão4'],
    'questão5' => $_SESSION['questão5'],
    'questão6' => $_SESSION['questão6'],
    'questão7' => $_SESSION['questão7'],
    'questão8' => $_SESSION['questão8'],
    'questão9' => $_SESSION['questão9'],
    'questão10' => $_SESSION['questão10']
];

$acertos = [];
$erros = [];

$score = calcularPontos($respostasUsuario, $respostasCorretas, $acertos, $erros);

$_SESSION['acertos'] = $acertos;
$_SESSION['erros'] = $erros;

header("Location: result.php?score=$score");
exit();
?>
