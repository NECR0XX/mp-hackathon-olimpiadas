<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question9'])) {
    $_SESSION['question9'] = $_POST['question9'];
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
    <form action="process.php" method="post">

        <p>10. Qual foi a classificação das medalhas na final da modalidade Salto Feminino (Ginástica Artística)?</p>
        <input type="radio" name="question10" value="Simone BILES, Sunisa Lee, Rebeca ANDRADE" required>
            <span>Simone BILES, Sunisa Lee, Rebeca ANDRADE</span><br>
        <input type="radio" name="question10" value="Rayssa Leal, Bia Ferreira, Simone BILES" required>
            <span>Rayssa Leal, Bia Ferreira, Simone BILES</span><br>
        <input type="radio" name="question10" value="<?php echo $competitor_winn= "$competitor1, $competitor2, $competitor3"; ?>" required>
            <span><?php echo $competitor_winn= "$competitor1, $competitor2, $competitor3"; ?></span><br>
        <input type="radio" name="question10" value="Rebeca ANDRADE, Jade CAREY, Simone BILES" required>
            <span>Rebeca ANDRADE, Jade CAREY, Simone BILES</span><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>