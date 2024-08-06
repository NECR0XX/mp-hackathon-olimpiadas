<?php
include_once('API/processed.php');
session_start();

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
    <title>Quiz - Pergunta 1</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="header">
                <img class="quiz" src="Resources/Images/quiz-removebg-preview.png">
                <div class="text">
                    <h1>Pergunta 1</h1>
                    <p>Em qual país ocorrerão os Jogos Olímpicos de 2024?</p>
                </div>
            </div>
            <div class="quest">
                <form action="question2.php" method="post">
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="question1" value="Estados Unidos" required>
                            <span>Estados Unidos</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question1" value="Paris" required>
                            <span>Paris</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question1" value="China" required>
                            <span>China</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question1" value="<?php echo $country= $data_events['data'][4]['competitors'][0]['competitor_name']; ?>" required>
                            <span>França</span>
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