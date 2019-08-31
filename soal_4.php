<?php

function splitWords($string){
	$array = explode("0", $string);
	$result = "";
	foreach($array as $data){
		$row = str_split($data);
		sort($row);
		$result .= implode("", $row);
	}
	
	return $result;
}

echo splitWords("5956560159466056");