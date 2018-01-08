<?php
    include 'CUSbotConn.php';
    include 'vendor/autoload.php';
    include 'line-bot.php';

    $bot = new BOT_API($channelSecret, $access_token);
    $mess= $_REQUEST['mess'];

    $bot->sendMessageNew($user_id,  $mess);

    if ($bot->isSuccess()) {
        echo 'ส่งข้อความเรียบร้อยแล้ว';
        exit();
    }

    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 

    if (!empty($bot->isEvents)) {
		
        //$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
        $outputText = new \LINE\LINEBot\MessageBuilder\LocationMessageBuilder("ร้านค้าของชำ บอทสำหรับผู้ประกอบการตั้งอยู่ที่",19.917717, 99.890118);
        $response = $bot->replyMessage($event->getReplyToken(), $outputText);
        /*if ($bot->isSuccess()) {
            echo 'Succeeded!';
            exit();
        }*/
    
        echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    
    }