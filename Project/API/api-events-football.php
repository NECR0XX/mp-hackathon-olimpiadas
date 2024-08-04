<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://apis.codante.io/olympic-games/events?discipline=FBL&page=5");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);

    curl_close($ch);
    $data_football = json_decode($output, true);
?>