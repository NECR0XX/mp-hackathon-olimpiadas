<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['questão4'])) {
    $_SESSION['questão4'] = $_POST['questão4'];
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
    <title>Quiz - Pergunta 5</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="header">
                <img class="quiz" src="Resources/Images/quiz-removebg-preview.png">
                <div class="text">
                    <h1>Pergunta 5</h1>
                    <p>Qual esporte foi adicionado ao programa dos Jogos Olímpicos de 2024?</p>
                </div>
            </div>
            <div class="quest">
                <form action="question6.php" method="post">
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="questão5" value="<?php echo $sport= $data_disciplines['data'][9]['name']; ?>" required>
                            <span>Breaking</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão5" value="Triatlo" required>
                            <span>Triatlo</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão5" value="Skate" required>
                            <span>Skate</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão5" value="Rúgbi de sete" required>
                            <span>Rúgbi de sete</span>
                        </label>
                    </div>
                        <input type="submit" value="Próxima" class="submit-button">
                </form>
            </div>
        </div>
    </section>
</body>
</html>