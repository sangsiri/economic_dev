<?php
    include 'CUSbotConn.php';
    include 'vendor/autoload.php';
    include 'line-bot.php';

    $bot = new BOT_API($channelSecret, $access_token);
    $mess= $_REQUEST['mess'];
    echo $mess;
    $bot->sendMessageNew($user_id,  $mess);

    /*if (!empty($bot->isEvents)) {
        $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
        if ($bot->isSuccess()) {
            echo 'Succeeded!';
            exit();
        }
    
        // Failed
        echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
        exit();
    
    }*/