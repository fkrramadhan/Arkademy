<?php

function triangle($number){
	if($number > 10 && $number < 0){
		echo "angka minimal 0 dan maksimal 10";die;
	}
	
	$stop = 0;
	$string = "";
        
	for($x=0; $x < $number; $x++){
		$limit = 0;
		for($y=0; $y <= $x; $y++){
			$loop = 0;
			$string .= "2 ";
			
			for($z=4; $z<1000; $z++){
				if($z % 2 == 1){
					$string .= $z. " ";
					$loop++;
				}
				if($loop == $x){
					$z = 10001;
					$loop = 0;
					$y = $x + 1;
				}
			}
		}
		$string .= "<br />";
	}
	
	return $string;
}

echo triangle(5);