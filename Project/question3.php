<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['questão2'])) {
    $_SESSION['questão2'] = $_POST['questão2'];
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
    <title>Quiz - Pergunta 3</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="header">
                <img class="quiz" src="Resources/Images/quiz-removebg-preview.png">
                <div class="text">
                    <h1>Pergunta 3</h1>
                    <p>Quais países ocupam o pódio (1º, 2º e 3º lugares, respectivamente)?</p>
                </div>
            </div>
            <div class="quest">
                <form action="question4.php" method="post">
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="questão3" value="França, Japão, EUA" required>
                            <span>França, Japão, EUA</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão3" value="Austrália, China, EUA" required>
                            <span>China, EUA, Austrália</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão3" value="<?php echo $podium= "$first, $second, $third"; ?>" required>
                            <span><?php echo $podium= "$first, $second, $third"; ?></span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão3" value="Grã-Bretanha, Japão, Brasil" required>
                            <span>Grã-Bretanha, Japão, Brasil</span>
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