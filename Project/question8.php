<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question7'])) {
    $_SESSION['question7'] = $_POST['question7'];
}
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
    <form action="question9.php" method="post">

        <p>8. Quais países venceram as quartas de final do torneio de futebol masculino?</p>
        <input type="radio" name="question8" value="Japão, Paraguai, Estados Unidos, Argentina" required>
            <span>Japão, Paraguai, Estados Unidos, Argentina</span><br>
        <input type="radio" name="question8" value="Espanha, Egito, Republica Dominicana, Uzbequistão" required>
            <span>Espanha, Egito, Republica Dominicana, Uzbequistão</span><br>
        <input type="radio" name="question8" value="<?php echo $winners= "$winner1, $winner2, $winner3, $winner4"; ?>" required>
            <span><?php echo $winners= "$winner1, $winner2, $winner3, $winner4"; ?></span><br>
        <input type="radio" name="question8" value="Argentina, Marrocos, Iraque, Ucrânia" required>
            <span>Argentina, Marrocos, Iraque, Ucrânia</span><br><br>

        <input type="submit" value="Próxima">
    </form>
</body>
</html>