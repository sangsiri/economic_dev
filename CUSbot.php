<?php
    include 'CUSbotConn.php';
    include 'vendor/autoload.php';
    include 'line-bot.php';

    $bota = new BOT_API($channelSecret, $access_token);
    $mess= $_REQUEST['mess'];

    $bota->sendMessageNew($user_id,  $mess);

    if ($bota->isSuccess()) {
        echo 'ส่งข้อความเรียบร้อยแล้ว';
        exit();
    }

    echo $bota->response->getHTTPStatus . ' ' . $bota->response->getRawBody(); 
?>
    