<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question9'])) {
    $_SESSION['question9'] = $_POST['question9'];
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
    <title>Quiz - Pergunta 10</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="header">
                <img class="quiz" src="Resources/Images/quiz-removebg-preview.png">
                <div class="text">
                    <h1>Pergunta 10</h1>
                    <p>Qual foi a classificação das medalhas na final da modalidade Salto Feminino (Ginástica Artística)?</p>
                </div>
            </div>
            <div class="quest">
                <form action="process.php" method="post">
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="question10" value="Simone BILES, Sunisa LEE, Rebeca ANDRADE" required>
                            <span>Simone BILES, Sunisa LEE, Rebeca ANDRADE</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question10" value="<?php echo $competitor_winn= "$competitor1, $competitor2, $competitor3"; ?>" required>
                            <span><?php echo $competitor_winn= "$competitor1, $competitor2, $competitor3"; ?></span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question10" value="Rayssa LEAL, Bia FERREIRA, Simone BILES" required>
                            <span>Rayssa LEAL, Bia FERREIRA, Simone BILES</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question10" value="Rebeca ANDRADE, Jade CAREY, Simone BILES" required>
                            <span>Rebeca ANDRADE, Jade CAREY, Simone BILES</span>
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