<?php
//usage curlweb("website url")
$url = "http://google.com";
echo curlweb($url);
function curlweb($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, TRUE);
    curl_setopt($ch, CURLOPT_NOBODY, TRUE);
    // send a custom user agent
    curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36 Edg/93.0.961.52");
    $data = curl_exec($ch);
    $info = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);
    return $info;
}
?>