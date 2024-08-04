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

        <p>5. Qual esporte foi adicionado ao programa dos Jogos Olímpicos de 2024?</p>
        <input type="radio" name="question5" value="Triatlo"><span>Triatlo</span><br>
        <input type="radio" name="question5" value="Skate"><span>Skate</span><br>
        <input type="radio" name="question5" value="<?php echo $sport= $data_disciplines['data'][9]['name']; ?>"><span>Breaking</span><br>
        <input type="radio" name="question5" value="Rúgbi de sete"><span>Rúgbi de sete</span><br><br>

        <a href="question6.php">Próxima</a>
    </form>
</body>
</html>