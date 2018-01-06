<?php
    require_once "CUSbotConn.php";

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
    
?>