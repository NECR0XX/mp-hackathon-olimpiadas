<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://apis.codante.io/olympic-games/events?date=2024-07-26");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);

    curl_close($ch);
    $data = json_decode($output, true);
?>