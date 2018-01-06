<?php
    echo "test";
    include 'CUSbotConn.php';
    echo "test";
    include 'vendor/autoload.php';
    echo "test";
    include 'line-bot.php';
    echo "test";

    $bot = new BOT_API($channelSecret, $access_token);
	
    if (!empty($bot->isEvents)) {
            
        $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
    
        if ($bot->isSuccess()) {
            echo 'Succeeded!';
            exit();
        }
    
        // Failed
        echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
        exit();
    
    }