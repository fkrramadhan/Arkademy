<?php

function splitWords($string){
	$words = ['pro', 'gram', 'merit', 'program', 'it', 'programmer'];
	$result = array();
	$find = $string;
	for($x=0; $x < 100; $x++){
		$word = explodeWord($string, $words);
		if(!empty($word['result'])){
			$x = 0;
			$words = $word['words'];
			var_dump($words);die;
			$result[] = $word['result'];
		}else{
			$x = 100;
		}
	}
	
	return $result;
}


function explodeWord($string, $words){
	$result = array();
	$find = $string;
	for($x=0; $x < count($words); $x++){
		$word = $words[$x];
		$replace = str_replace($word, "", $find);
		
		if(strlen($find) != strlen($replace)){
			$result[] = $word;
			if(!empty($replace)){
				$find = $replace;
				$x=0;
			}
		}
	}
	
	$words = array_diff($words, $result);
	sort($words);
	return [
		'result' => $result,
		'words' => $words
	];
}

var_dump(splitWords('programit'));