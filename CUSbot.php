<?php
    include 'CUSbotConn.php';
    include 'vendor/autoload.php';
    include 'line-bot.php';

    $bot = new BOT_API($channelSecret, $access_token);
    $mess= $_REQUEST['mess'];

    if($mess==""){
        echo 'กรุณากรอกข้อความด้วย' ;
        exit();
    }
    $bot->sendMessageNew($user_id,  $mess);

    if ($bot->isSuccess()) {
        echo 'ส่งข้อความเรียบร้อยแล้ว';
        exit();
    }

    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

    /*if (!empty($bot->isEvents)) {
        $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
        
    
    }*/