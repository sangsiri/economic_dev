<?php

function getMBStrSplit($string, $split_length = 1){
	mb_internal_encoding('UTF-8');
	mb_regex_encoding('UTF-8'); 
	
	$split_length = ($split_length <= 0) ? 1 : $split_length;
	$mb_strlen = mb_strlen($string, 'utf-8');
	$array = array();
	$i = 0; 
	
	while($i < $mb_strlen)
	{
		$array[] = mb_substr($string, $i, $split_length);
		$i = $i+$split_length;
	}
	
	return $array;
}

// Get string length for Character Thai
function getStrLenTH($string)
{
	$array = getMBStrSplit($string);
	$count = 0;
	
	foreach($array as $value)
	{
		$ascii = ord(iconv("UTF-8", "TIS-620", $value ));
		
		if( !( $ascii == 209 ||  ($ascii >= 212 && $ascii <= 218 ) || ($ascii >= 231 && $ascii <= 238 )) )
		{
			$count += 1;
		}
	}
	return $count;
}


function getSubStrTH($string, $start, $length)
{			
	$length = ($length+$start)-1;
	$array = getMBStrSplit($string);
	$count = 0;
	$return = "";
		
	for($i=$start; $i < count($array); $i++)
	{
		$ascii = ord(iconv("UTF-8", "TIS-620", $array[$i] ));
		
		if( $ascii == 209 ||  ($ascii >= 212 && $ascii <= 218 ) || ($ascii >= 231 && $ascii <= 238 ) )
		{
			//$start++;
			$length++;
		}
		
		if( $i >= $start )
		{
			$return .= $array[$i];
		}
		
		if( $i >= $length )
			break;
		}
	
	return $return;
}

    $request = $_REQUEST['search'];
    $urlWithoutProtocol = "https://www.priceza.com/search?productdataname=".$request ;
    $isRequestHeader = FALSE;
 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlWithoutProtocol);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $productivity = curl_exec($ch);
    curl_close($ch);
    
    preg_match_all('/<h3 itemprop="name">(.+?)<\/h3>/', $productivity, $name, PREG_SET_ORDER);
    $count = 1 ;

    $search  = array('<b>', '</b>');
    $temp = '' ;

    foreach ($name as $val) {
        $text = str_replace($search, '',$val[1]);
        $temp = $temp.((getStrLenTH($text) > 50) ? getSubStrTH($text, 0, 50)."..." : $text) . '\n' ;
        $count++;
        if($count > 5)
        break;
    }
    echo $temp;
?>
