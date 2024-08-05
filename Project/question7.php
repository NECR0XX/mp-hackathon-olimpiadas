<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question6'])) {
    $_SESSION['question6'] = $_POST['question6'];
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
    <form action="question8.php" method="post">

        <p>7. Quantas modalidades esportivas estão presentes nos Jogos Olímpicos de 2024?</p>
        <input type="radio" name="question7" value="40" required>
            <span>40</span><br>
        <input type="radio" name="question7" value="<?php echo $total_sports = count($data_disciplines['data']); ?>" required>
            <span><?php echo $total_sports = count($data_disciplines['data']); ?></span><br>
        <input type="radio" name="question7" value="47" required>
            <span>47</span><br>
        <input type="radio" name="question7" value="32" required>
            <span>32</span><br><br>

        <input type="submit" value="Próxima">
    </form>
</body>
</html>