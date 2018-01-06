<?php
//mysql://bd1c9315fec3c7:f39983bf@us-cdbr-iron-east-05.cleardb.net/heroku_2de0919e7368dd7?reconnect=true
    $url = parse_url(getenv("mysql://bd1c9315fec3c7:f39983bf@us-cdbr-iron-east-05.cleardb.net/heroku_2de0919e7368dd7?reconnect=true"));

    $server = $url["us-cdbr-iron-east-05.cleardb.net"]; 
    $username = $url["bd1c9315fec3c7"];
    $password = $url["f39983bf"];
    $db = substr($url["heroku_2de0919e7368dd7"], 1);

    $conn = new mysqli($server, $username, $password, $db);

    if($conn)
        echo "Connect Database Success" ;
    else
    {
        die('Connect Error: ' . mysqli_connect_errno());
    }
?>