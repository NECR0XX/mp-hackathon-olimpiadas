<?php
include_once('api.php');

$score = 0;
$silver_medals = $data['data'][0]['silver_medals'];

if ($_POST['question1'] == $silver_medals) {
    $score++;
};

header("Location: result.php?score=$score");
exit();

?> 