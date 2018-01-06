<?php
    require_once "GoogleTranslate.php";
    $word = $_REQUEST['word'];
    $GT = NEW GoogleTranslate();
    $response = $GT->translate('th','en',$word);  
    echo $word."   =   ".$response;
?>
