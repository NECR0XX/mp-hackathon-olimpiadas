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

        <p>2. Em que data tiveram início os Jogos Olímpicos de 2024?</p>
        <input type="radio" name="question2" value="<?php echo $start= $data['data'][0]['day'] ?>"><span>26/07/2024</span><br>
        <input type="radio" name="question2" value="25/07/2024"><span>25/07/2024</span><br>
        <input type="radio" name="question2" value="27/07/2024"><span>27/07/2024</span><br>
        <input type="radio" name="question2" value="28/07/2024"><span>28/07/2024</span><br><br>

        <a href="question3.php">Próxima</a>
    </form>
</body>
</html>