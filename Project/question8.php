<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question7'])) {
    $_SESSION['question7'] = $_POST['question7'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Resources/Images/Mascote_olimpiadas-removebg-preview.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Kite+One&family=Kiwi+Maru&family=Permanent+Marker&family=Playwrite+AR:wght@100..400&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Kite+One&family=Permanent+Marker&family=Playwrite+AR:wght@100..400&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Resources/Css/question.css">
    <title>Quiz - Pergunta 8</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="header">
                <img class="quiz" src="Resources/Images/quiz-removebg-preview.png">
                <div class="text">
                    <h1>Pergunta 8</h1>
                    <p>Quais países venceram as quartas de final do torneio de futebol masculino?</p>
                </div>
            </div>
            <div class="quest">
                <form action="question9.php" method="post">
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="question8" value="Japão, Paraguai, Estados Unidos, Argentina" required>
                            <span>Japão, Paraguai, Estados Unidos, Argentina</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question8" value="Espanha, Egito, Republica Dominicana, Uzbequistão" required>
                            <span>Espanha, Egito, Republica Dominicana, Uzbequistão</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question8" value="<?php echo $winners= "$winner1, $winner2, $winner3, $winner4"; ?>" required>
                            <span><?php echo $winners= "$winner1, $winner2, $winner3, $winner4"; ?></span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question8" value="Argentina, Marrocos, Iraque, Ucrânia" required>
                            <span>Argentina, Marrocos, Iraque, Ucrânia</span>
                        </label>
                    </div>
                    <br>
                    <input type="submit" value="Próxima" class="submit-button">
                </form>
            </div>
        </div>
    </section>
</body>
</html>