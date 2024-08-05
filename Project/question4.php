<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question3'])) {
    $_SESSION['question3'] = $_POST['question3'];
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
    <form action="question5.php" method="post">

        <p>4. Qual é o principal estádio de Paris?</p>
        <input type="radio" name="question4" value="North Paris Arena" required>
            North Paris Arena</span><br>
        <input type="radio" name="question4" value="Eiffel Tower Stadium" required>
            Eiffel Tower Stadium</span><br>
        <input type="radio" name="question4" value="Geoffroy-Guichard Stadium" required>
            Geoffroy-Guichard Stadium</span><br>
        <input type="radio" name="question4" value="<?php echo $venue= $data_venues['data'][29]['name']; ?>" required>
            <?php echo $venue= $data_venues['data'][29]['name']; ?></span><br><br>

        <input type="submit" value="Próxima">
    </form>
</body>
</html>