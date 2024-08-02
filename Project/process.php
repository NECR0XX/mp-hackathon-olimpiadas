<?php
include_once('teste.php');
$output;
$score = 0;

if ($_POST['question1'] == 'data[{"silver_medals"}]') {
    $score++;
}

header("Location: result.php?score=$score");
exit();
?>
