<?php

function biodata(){

    $data = (object) [
        "name" => "Muhamad Fikri Ramadan",
        "age" =>  23,
        "address" => "JL Menteng Granit no.2",
        "hobbies" => [
            "motor",
            "bola"
        ],
        "is_maried" => false,
        "list_school" => [
            "name" => "SMKN 2 Jakarta",
            "year_in" => 2011,
            "year_out" => 2014,
            "major" => null
        ],
        "interest_in_coding",
    ];
	
	return json_encode($data);
}

echo biodata();