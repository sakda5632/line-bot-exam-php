<?php
$access_token = 'NMrnXdwelhq2Rq4XEzcFZmiL6xQI/TS4/5oMGsuuL0eD1EL0DTBVohAQ/ThLPhp++qC/gTcXOMiffuNJBk92NE1koA6K7gtM+oGG8xMFhVAun13Li5IJPCZmHtT1oMYA4O93564ohD5rG2Vt0yDIIgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
