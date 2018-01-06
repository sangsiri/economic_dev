<?php
    require_once "GoogleTranslate.php";
    $word = $_REQUEST['word'];
    $GT = NEW GoogleTranslate();
    $response = $GT->translate('en','th',$word); 
    echo $word."   =   ".$response;
?>
