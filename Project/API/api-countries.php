<?php
function fetchDataFromApi1($url, $cacheFile = 'cache-countries.json', $cacheTime = 420) { // 7 minutos = 420 segundos
    if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
        $data = file_get_contents($cacheFile);
    } else {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        file_put_contents($cacheFile, $data);
    }

    return json_decode($data, true);
}

$url = "https://apis.codante.io/olympic-games/countries";
$data_countries = fetchDataFromApi1($url);
?>