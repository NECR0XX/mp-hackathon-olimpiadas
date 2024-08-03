<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://apis.codante.io/olympic-games/countries");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);

    curl_close($ch);
    $data_countries = json_decode($output, true);
?>