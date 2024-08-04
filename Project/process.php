<?php
include_once('API/processed.php');

$score = 0;

    if ($_POST['question1'] == $country) {
        $score++;
    };

    if ($_POST['question2'] == $start) {
        $score++;
    };

    if ($_POST['question3'] == $podium) {
        $score++;
    };

    if ($_POST['question4'] == $venue) {
        $score++;
    };

    if ($_POST['question5'] == $sport) {
        $score++;
    };

    if ($_POST['question6'] == $silver_medals) {
        $score++;
    };

    if ($_POST['question7'] == $total_sports) {
        $score++;
    };

    if ($_POST['question8'] == $winners) {
        $score++;
    };

    if ($_POST['question9'] == $total_countries) {
        $score++;
    };

    if ($_POST['question10'] == $competitor_winn) {
        $score++;
    };





header("Location: result.php?score=$score");
exit();

?> 