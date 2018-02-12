<?php
$ch = curl_init();
/**
* Set the URL of the page or file to download.
*/
curl_setopt($ch, CURLOPT_URL,$_POST['url']);

$fp = fopen('file/' . $_POST['nama'], 'w+');
/**
* Ask cURL to write the contents to a file
*/
curl_setopt($request, CURLOPT_TIMEOUT, 0);
curl_setopt($ch, CURLOPT_FILE, $fp);

curl_exec ($ch);

curl_close ($ch);
fclose($fp);
?>