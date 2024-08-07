<?php
include_once('API/processed.php');
session_start();

if (isset($_POST['questão5'])) {
    $_SESSION['questão5'] = $_POST['questão5'];
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
    <title>Quiz - Pergunta 6</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="header">
                <img class="quiz" src="Resources/Images/quiz-removebg-preview.png">
                <div class="text">
                    <h1>Pergunta 6</h1>
                    <p>Quantas medalhas de prata o país em 1º lugar conquistou até o momento?</p>
                </div>
            </div>
            <div class="quest">
                <form action="question7.php" method="post">
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="questão6" id="radio1" required>
                            <span id="radioValue1">9</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão6" value="<?php echo $data_countries['data'][0]['silver_medals']; ?>" required>
                            <span><?php echo $data_countries['data'][0]['silver_medals']; ?></span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão6" id="radio2" required>
                            <span id="radioValue2">9</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="questão6" id="radio3" required>
                            <span id="radioValue3">9</span>
                        </label>
                    </div>
                    <br>
                        <input type="submit" value="Próxima" class="submit-button">
                </form>
            </div>
        </div>
    </section>

    <script>
        const silverMedals = <?php echo $silver_medals; ?>;

        function generateUniqueRandomNumbers(min, max, count, exclude) {
            let numbers = new Set();
            while (numbers.size < count) {
                let randomValue = Math.floor(Math.random() * (max - min + 1)) + min;
                if (randomValue !== exclude) {
                    numbers.add(randomValue);
                }
            }
            return Array.from(numbers);
        }

        const randomValues = generateUniqueRandomNumbers(1, 30, 3, silverMedals);

        function setRandomValue(radioId, spanId, value) {
            const radioButton = document.getElementById(radioId);
            const radioValueSpan = document.getElementById(spanId);

            radioButton.value = value;
            radioValueSpan.textContent = value;
        }

        setRandomValue("radio1", "radioValue1", randomValues[0]);
        setRandomValue("radio2", "radioValue2", randomValues[1]);
        setRandomValue("radio3", "radioValue3", randomValues[2]);
    </script>
</body>
</html>