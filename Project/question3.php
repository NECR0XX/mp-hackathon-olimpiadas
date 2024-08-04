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

        <p>3. Quais países ocupam o pódio (1º, 2º e 3º lugares, respectivamente)?</p>
        <input type="radio" name="question3" value="França, Japão, Estados Unidos"><span>França, Japão, Estados Unidos</span><br>
        <input type="radio" name="question3" value="Estados Unidos, China, Austrália"><span>Estados Unidos, China, Austrália</span><br>
        <input type="radio" name="question3" value="<?php echo $podium= "$first, $second, $third"; ?>"><span><?php echo $podium= "$first, $second, $third"; ?></span><br>
        <input type="radio" name="question3" value="Grã-Bretanha, Japão, Brasil"><span>Grã-Bretanha, Japão, Brasil</span><br><br>

        <a href="question4.php">Próxima</a>
    </form>
</body>
</html>