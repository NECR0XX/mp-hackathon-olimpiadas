<?php
function fetchDataFromApi5($url, $cacheFile = 'cache-foot.json', $cacheTime = 600) { 
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

$url = "https://apis.codante.io/olympic-games/events?discipline=FBL&page=5";
$data_football = fetchDataFromApi5($url);
?>