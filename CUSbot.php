<?php
    include 'CUSbotConn.php';
    require_once '/vendor/autoload.php';
    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
    $response = $bot->replyMessage('123456', $textMessageBuilder);
    if ($response->isSucceeded()) {
        echo 'Succeeded!';
        return; 
    }
// Failed
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();