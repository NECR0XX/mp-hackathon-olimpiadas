<?php
include_once('API/processed.php');

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
    <form action="process.php" method="post" required>

        <p>6. Quantas medalhas de prata a China conquistou até o momento?</p>
        <input type="radio" name="question6" value="<?php echo $data_countries['data'][0]['silver_medals']; ?>"><span><?php echo $data_countries['data'][0]['silver_medals']; ?></span><br>
        <input type="radio" name="question6" id="radio1"><span id="radioValue1">9</span><br>
        <input type="radio" name="question6" id="radio2"><span id="radioValue2">9</span><br>
        <input type="radio" name="question6" id="radio3"><span id="radioValue3">9</span><br><br>

        <a href="question7.php">Próxima</a>
    </form>
    <script>
        const silverMedals = <?php echo $data_countries; ?>;

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

        const randomValues = generateUniqueRandomNumbers(1, 50, 3, silverMedals);

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