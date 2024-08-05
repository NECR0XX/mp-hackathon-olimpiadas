<?php
include_once('API/processed.php');
session_start();

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
    <form action="question2.php" method="post">

        <p>1. Em qual país ocorrerão os Jogos Olímpicos de 2024?</p>
        <input type="radio" name="question1" value="Estados Unidos" required>
            <span>Estados Unidos</span><br>
        <input type="radio" name="question1" value="Paris" required>
            <span>Paris</span><br>
        <input type="radio" name="question1" value="China" required>
            <span>China</span><br>
        <input type="radio" name="question1" value="<?php echo $country= $data_events['data'][4]['competitors'][0]['competitor_name']; ?>" required>
            <span>França</span><br><br>

        <input type="submit" value="Próxima">
    </form>
</body>
</html>