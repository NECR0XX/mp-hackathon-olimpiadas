<?php
include_once('API/api-countries.php');
include_once('API/api-disciplines.php');
include_once('API/api-events-date.php');
include_once('API/api-events.php');
include_once('API/api-venues.php');

$score = 0;
$silver_medals = $data_countries['data'][0]['silver_medals'];

if ($_POST['question1'] == $silver_medals) {
    $score++;
};

header("Location: result.php?score=$score");
exit();

?> 