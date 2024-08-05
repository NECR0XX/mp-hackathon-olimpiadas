<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question4'])) {
    $_SESSION['question4'] = $_POST['question4'];
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
    <form action="question6.php" method="post">

        <p>5. Qual esporte foi adicionado ao programa dos Jogos Olímpicos de 2024?</p>
        <input type="radio" name="question5" value="Triatlo" required>
            <span>Triatlo</span><br>
        <input type="radio" name="question5" value="Skate" required>
            <span>Skate</span><br>
        <input type="radio" name="question5" value="<?php echo $sport= $data_disciplines['data'][9]['name']; ?>" required>
            <span>Breaking</span><br>
        <input type="radio" name="question5" value="Rúgbi de sete" required>
            <span>Rúgbi de sete</span><br><br>

        <input type="submit" value="Próxima">
    </form>
</body>
</html>