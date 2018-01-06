<?php
    include 'CUSbotConn.php';
    include 'vendor/autoload.php';
    include 'line-bot.php';

    $bot = new BOT_API($channelSecret, $access_token);
    if (!empty($bot->isEvents)) {
        $bot->sendMessageNew($user_id, 'ทดสอบ');
        $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
        if ($bot->isSuccess()) {
            echo 'Succeeded!';
            exit();
        }
    
        // Failed
        echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
        exit();
    
    }