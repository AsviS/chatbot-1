<?php

	if (!function_exists('curl_init')){
        die('Sorry cURL is not installed!');
    }
	$devAccessToken = "76c59f2365aa4cae94cf259635c87dfe";
    $baseUrl = "https://api.api.ai/v1/intents/";
    $thisID = $_GET['id'];
    $dateToday = date("Ymd");

    $ch = curl_init();


	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_URL, $baseUrl . $thisID . "?v=" . $dateToday );
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

	$headers = array();
	$headers[] = "Authorization: Bearer 76c59f2365aa4cae94cf259635c87dfe";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}

	curl_close ($ch);
?>