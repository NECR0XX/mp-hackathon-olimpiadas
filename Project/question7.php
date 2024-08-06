<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['question6'])) {
    $_SESSION['question6'] = $_POST['question6'];
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
    <title>Quiz - Pergunta 7</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="header">
                <img class="quiz" src="Resources/Images/quiz-removebg-preview.png">
                <div class="text">
                    <h1>Pergunta 7</h1>
                    <p>Quantas modalidades esportivas estão presentes nos Jogos Olímpicos de 2024?</p>
                </div>
            </div>
            <div class="quest">
                <form action="question8.php" method="post">
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="question7" value="40" required>
                            <span>40</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question7" value="47" required>
                            <span>47</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question7" value="32" required>
                            <span>32</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question7" value="<?php echo $total_sports = count($data_disciplines['data']); ?>" required>
                            <span><?php echo $total_sports = count($data_disciplines['data']); ?></span>
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