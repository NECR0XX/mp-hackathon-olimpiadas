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

        <p>1. Em qual país ocorrerão os Jogos Olímpicos de 2024?</p>
        <input type="radio" name="question1" value="Estados Unidos"><span>Estados Unidos</span><br>
        <input type="radio" name="question1" value="Paris"><span>Paris</span><br>
        <input type="radio" name="question1" value="China"><span>China</span><br>
        <input type="radio" name="question1" value="<?php echo $country= $data_events['data'][4]['competitors'][0]['competitor_name']; ?>"><span>França</span><br><br>

        <a href="question2.php">Próxima</a>
    </form>
</body>
</html>