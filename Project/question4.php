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
    <link rel="shortcut icon" href="Resources/Images/Mascote_olimpiadas-removebg-preview.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Kite+One&family=Kiwi+Maru&family=Permanent+Marker&family=Playwrite+AR:wght@100..400&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Kite+One&family=Permanent+Marker&family=Playwrite+AR:wght@100..400&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Resources/Css/question.css">
    <title>Quiz - Pergunta 4</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="header">
                <img class="quiz" src="Resources/Images/quiz-removebg-preview.png">
                <div class="text">
                    <h1>Pergunta 4</h1>
                    <p>Qual é o principal estádio de Paris?</p>
                </div>
            </div>
            <div class="quest">
                <form action="question5.php" method="post">
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="question4" value="North Paris Arena" required>
                            <span>North Paris Arena</span><br>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question4" value="<?php echo $venue= $data_venues['data'][29]['name']; ?>" required>
                            <span><?php echo $venue= $data_venues['data'][29]['name']; ?></span><br><br>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question4" value="Eiffel Tower Stadium" required>
                            <span>Eiffel Tower Stadium</span><br>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="question4" value="Geoffroy-Guichard Stadium" required>
                            <span>Geoffroy-Guichard Stadium</span><br>
                        </label>
                    </div>
                    <input type="submit" value="Próxima" class="submit-button">
                </form>
            </div>
        </div>
    </section>
</body>
</html>