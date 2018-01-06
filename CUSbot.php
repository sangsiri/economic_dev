<?php

require_once 'CUSbotConn.php';
require_once '\vendor\autoload.php';

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage($user_id, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();