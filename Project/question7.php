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

        <p>7. Quantas modalidades esportivas estão presentes nos Jogos Olímpicos de 2024?</p>
        <input type="radio" name="question7" value="40"><span>40</span><br>
        <input type="radio" name="question7" value="<?php echo $total_sports = count($data_disciplines['data']); ?>"><span><?php echo $total_sports = count($data_disciplines['data']); ?></span><br>
        <input type="radio" name="question7" value="47"><span>47</span><br>
        <input type="radio" name="question7" value="32"><span>32</span><br><br>

        <a href="question8.php">Próxima</a>
    </form>
</body>
</html>