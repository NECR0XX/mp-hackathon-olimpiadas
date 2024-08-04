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

        <p>4. Qual é o principal estádio de Paris?</p>
        <input type="radio" name="question4" value="North Paris Arena"><span>North Paris Arena</span><br>
        <input type="radio" name="question4" value="Eiffel Tower Stadium"><span>Eiffel Tower Stadium</span><br>
        <input type="radio" name="question4" value="Geoffroy-Guichard Stadium"><span>Geoffroy-Guichard Stadium</span><br>
        <input type="radio" name="question4" value="<?php echo $venue= $data_venues['data'][29]['name']; ?>"><span><?php echo $venue= $data_venues['data'][29]['name']; ?></span><br><br>

        <a href="question5.php">Próxima</a>
    </form>
</body>
</html>