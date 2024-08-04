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

        <p>9. Qual é o número de participantes do Comitê Olímpico Nacional que irão competir nos Jogos Olímpicos de 2024?</p>
        <input type="radio" name="question9" value="<?php echo $total_countries= $data_countries['meta']['total']; ?>"><span><?php echo $total_countries= $data_countries['meta']['total']; ?></span><br>
        <input type="radio" name="question9" value="204"><span>204</span><br>
        <input type="radio" name="question9" value="208"><span>208</span><br>
        <input type="radio" name="question9" value="195"><span>195</span><br><br>

        <a href="question10.php">Próxima</a>
    </form>
</body>
</html>