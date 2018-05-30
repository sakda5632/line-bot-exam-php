<?php



require "vendor/autoload.php";

$access_token = 'NMrnXdwelhq2Rq4XEzcFZmiL6xQI/TS4/5oMGsuuL0eD1EL0DTBVohAQ/ThLPhp++qC/gTcXOMiffuNJBk92NE1koA6K7gtM+oGG8xMFhVAun13Li5IJPCZmHtT1oMYA4O93564ohD5rG2Vt0yDIIgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c7e58e05cecf429718f809137422717b';

$pushID = 'U3778e94a1fdb67074dd7e4e52887ad4f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







