<?php
include_once('API/processed.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <h1>Quiz de Conhecimentos Gerais</h1>
    <form action="process.php" method="post" required>

        <p>8. Quais países venceram as quartas de final do torneio de futebol masculino?</p>
        <input type="radio" name="question8" value="Japão, Paraguai, Estados Unidos, Argentina"><span>Japão, Paraguai, Estados Unidos, Argentina</span><br>
        <input type="radio" name="question8" value="Espanha, Egito, Republica Dominicana, Uzbequistão"><span>Espanha, Egito, Republica Dominicana, Uzbequistão</span><br>
        <input type="radio" name="question8" value="<?php echo $winners= "$winner1, $winner2, $winner3, $winner4"; ?>"><span><?php echo $winners= "$winner1, $winner2, $winner3, $winner4"; ?></span><br>
        <input type="radio" name="question8" value="Argentina, Marrocos, Iraque, Ucrânia"><span>Argentina, Marrocos, Iraque, Ucrânia</span><br><br>

        <a href="question9.php">Próxima</a>
    </form>
</body>
</html>